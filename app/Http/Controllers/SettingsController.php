<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserSetting;

class SettingsController extends Controller
{
    public function index()
    {
        $settings = UserSetting::firstOrCreate(
            ['user_id' => Auth::id()],
            ['user_id' => Auth::id()]
        );
        return view('settings', compact('settings'));
    }

    public function update(Request $request)
    {
        $settings = UserSetting::firstOrCreate(['user_id' => Auth::id()]);
        
        $settings->update([
            'mode_gelap'       => $request->boolean('mode_gelap'),
            'kontras_tinggi'   => $request->boolean('kontras_tinggi'),
            'isyarat_ke_teks'  => $request->boolean('isyarat_ke_teks'),
            'subtitle_realtime'=> $request->boolean('subtitle_realtime'),
            'pembaca_layar'    => $request->boolean('pembaca_layar'),
            'text_to_speech'   => $request->boolean('text_to_speech'),
            'speech_to_text'   => $request->boolean('speech_to_text'),
            'kurangi_animasi'  => $request->boolean('kurangi_animasi'),
            'kirim_analitik'   => $request->boolean('kirim_analitik'),
        ]);

        return response()->json(['success' => true]);
    }
}