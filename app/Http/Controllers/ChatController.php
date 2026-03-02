<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatController extends Controller
{
    public function chat(Request $request)
    {
        try {
            $history   = session('chat_history', []);
            $sessions  = session('chat_sessions', []);
            $currentId = session('current_chat_id');

            // Tambahkan system prompt jika history kosong
            if (empty($history)) {
                $history[] = [
                    'role'    => 'system',
                    'content' => 'Kamu adalah Trixie AI, asisten virtual yang fokus memberikan informasi dan layanan seputar disabilitas tuna (tuna netra, tuna rungu, tuna wicara, tuna daksa, tuna grahita), setiap jawaban gaperlu menggunakan tanda ** dan bawa seperti kamu berbicara dengan user. Jawab dengan bahasa Indonesia yang ramah, mudah dipahami, dan empatik.'
                ];
            }

            // Buat ID unik jika belum ada
            if (!$currentId) {
                $currentId = uniqid('chat_', true);
                session(['current_chat_id' => $currentId]);
            }

            $userMessage = $request->message;
            $image       = $request->image;

            // Susun pesan user
            if ($image) {
                $base64   = preg_replace('/^data:image\/\w+;base64,/', '', $image);
                $mimeType = 'image/jpeg';
                if (preg_match('/^data:(image\/\w+);base64,/', $image, $matches)) {
                    $mimeType = $matches[1];
                }

                $history[] = [
                    'role'    => 'user',
                    'content' => [
                        [
                            'type'      => 'image_url',
                            'image_url' => ['url' => "data:{$mimeType};base64,{$base64}"]
                        ],
                        ['type' => 'text', 'text' => $userMessage]
                    ]
                ];
            } else {
                $history[] = ['role' => 'user', 'content' => $userMessage];
            }

            // Kirim ke Groq API
            $response = Http::withoutVerifying()
                ->withToken(config('services.groq.key'))
                ->post('https://api.groq.com/openai/v1/chat/completions', [
                    'model' => 'meta-llama/llama-4-scout-17b-16e-instruct',
                    'messages' => $history
                ]);

            $json = $response->json();
            $reply = $json['choices'][0]['message']['content'] ?? 'Maaf, terjadi kesalahan.';

            // Simpan balasan ke history
            $history[] = ['role' => 'assistant', 'content' => $reply];

            session(['chat_history' => $history]);

            // Update atau tambahkan ke chat_sessions
            $found = false;
            foreach ($sessions as &$s) {
                if ((string)$s['id'] === (string)$currentId) {
                    $s['messages'] = $history;
                    $found = true;
                    break;
                }
            }
            unset($s); // putus referensi

            if (!$found) {
                // Judul diambil dari pesan user pertama (maks 40 karakter)
                $title = mb_substr($userMessage, 0, 40);

                array_unshift($sessions, [
                    'id'        => $currentId,
                    'title'     => $title,
                    'messages'  => $history,
                    'createdAt' => now()->toDateTimeString()
                ]);
            }

            session(['chat_sessions' => $sessions]);

            return response()->json(['reply' => $reply]);

        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}