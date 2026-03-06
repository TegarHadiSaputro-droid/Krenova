<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserSetting extends Model
{
    protected $fillable = [
        'user_id','mode_gelap','kontras_tinggi','isyarat_ke_teks',
        'subtitle_realtime','pembaca_layar','text_to_speech',
        'speech_to_text','kurangi_animasi','kirim_analitik'
    ];

    protected $casts = [
        'mode_gelap' => 'boolean',
        'kontras_tinggi' => 'boolean',
        'isyarat_ke_teks' => 'boolean',
        'subtitle_realtime' => 'boolean',
        'pembaca_layar' => 'boolean',
        'text_to_speech' => 'boolean',
        'speech_to_text' => 'boolean',
        'kurangi_animasi' => 'boolean',
        'kirim_analitik' => 'boolean',
    ];
}