<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('soal_kuis', function (Blueprint $table) {
            $table->id();
            $table->string('kategori'); // Sejarah, Geografi, Kuliner
            $table->text('pertanyaan');
            $table->string('opsi_a');
            $table->string('opsi_b');
            $table->string('opsi_c');
            $table->string('opsi_d');
            $table->string('jawaban_benar'); // Menyimpan huruf A, B, C, atau D
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('soal_kuis');
    }
};
