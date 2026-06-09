<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pengaturan_berandas', function (Blueprint $table) {
            $table->id();
            $table->string('banner_header')->nullable(); // Foto/Video background
            $table->string('hero_gambar_1')->nullable();
            $table->string('hero_gambar_2')->nullable();
            $table->string('hero_gambar_3')->nullable();
            $table->string('hero_gambar_4')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pengaturan_berandas');
    }
};
