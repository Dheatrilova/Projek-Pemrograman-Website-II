<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PengaturanBeranda;
use App\Models\TahukahKamu;

class BerandaSeeder extends Seeder
{
    public function run(): void
    {
        // Data default untuk pengaturan aset gambar utama beranda
        PengaturanBeranda::create([
            'banner_header' => null, // null berarti akan memakai file default/fallback lokal terlebih dahulu
            'hero_gambar_1' => null,
            'hero_gambar_2' => null,
            'hero_gambar_3' => null,
            'hero_gambar_4' => null,
        ]);

        // Data default untuk 5 kartu interaktif "Tahukah Kamu?"
        for ($i = 1; $i <= 5; $i++) {
            TahukahKamu::create([
                'judul' => "Fakta Unik Nusantara $i",
                'deskripsi' => "Ini adalah deskripsi konten fakta unik nomor $i.",
                'gambar' => null
            ]);
        }
    }
}