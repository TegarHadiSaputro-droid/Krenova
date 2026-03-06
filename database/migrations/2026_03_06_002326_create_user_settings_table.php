<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('user_settings', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade');
        $table->boolean('mode_gelap')->default(false);
        $table->boolean('kontras_tinggi')->default(false);
        $table->boolean('isyarat_ke_teks')->default(false);
        $table->boolean('subtitle_realtime')->default(false);
        $table->boolean('pembaca_layar')->default(true);
        $table->boolean('text_to_speech')->default(true);
        $table->boolean('speech_to_text')->default(true);
        $table->boolean('kurangi_animasi')->default(false);
        $table->boolean('kirim_analitik')->default(true);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_settings');
    }
};
