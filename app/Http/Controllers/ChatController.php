<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatController extends Controller
{
    public function chat(Request $request)
    {
        try {
            // Ambil riwayat chat dari session
            $history = session('chat_history', []);

            // Tambahkan pesan user ke riwayat
            $history[] = [
                'role' => 'user',
                'content' => $request->message
            ];

            // Kirim ke Groq beserta riwayat
            $response = Http::withoutVerifying()
                ->withToken(config('services.groq.key'))
                ->post('https://api.groq.com/openai/v1/chat/completions', [
                    'model' => 'llama-3.3-70b-versatile',
                    'messages' => $history
                ]);

            $reply = $response->json()['choices'][0]['message']['content'];

            // Tambahkan jawaban AI ke riwayat
            $history[] = [
                'role' => 'assistant',
                'content' => $reply
            ];

            // Simpan riwayat ke session
            session(['chat_history' => $history]);

            // Simpan judul percakapan (pesan pertama user)
            $sessions = session('chat_sessions', []);
            // Cek apakah ini pesan pertama di percakapan, jika iya buat judul berdasarkan pesan pertama
            if (count($history) == 2) {
                array_unshift($sessions, [
                    'id' => time(),
                    'title' => substr($request->message, 0, 40)
                ]);
                session(['chat_sessions' => $sessions]);
}

            return response()->json(['reply' => $reply]);

        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}