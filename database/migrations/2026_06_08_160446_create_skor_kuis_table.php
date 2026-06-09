<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('skor_kuis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemain');
            $table->string('kategori_kuis');
            $table->integer('skor');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('skor_kuis');
    }
};
