<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SoalKuis;

class SoalKuisSeeder extends Seeder
{
    public function run(): void
    {
        $soal = [
            // Kategori: Sejarah & Budaya
            [
                'kategori' => 'Sejarah & Budaya',
                'pertanyaan' => 'Apa nama rumah adat yang berasal dari provinsi Sumatera Barat?',
                'opsi_a' => 'Rumah Joglo',
                'opsi_b' => 'Rumah Gadang',
                'opsi_c' => 'Rumah Honai',
                'opsi_d' => 'Rumah Limas',
                'jawaban_benar' => 'B'
            ],
            [
                'kategori' => 'Sejarah & Budaya',
                'pertanyaan' => 'Candi Borobudur yang merupakan candi Buddha terbesar di dunia terletak di provinsi mana?',
                'opsi_a' => 'Jawa Timur',
                'opsi_b' => 'Jawa Barat',
                'opsi_c' => 'Jawa Tengah',
                'opsi_d' => 'DI Yogyakarta',
                'jawaban_benar' => 'C'
            ],
            
            // Kategori: Geografi & Alam
            [
                'kategori' => 'Geografi & Alam',
                'pertanyaan' => 'Gunung berapi tertinggi di Pulau Sumatera adalah...',
                'opsi_a' => 'Gunung Sinabung',
                'opsi_b' => 'Gunung Marapi',
                'opsi_c' => 'Gunung Leuser',
                'opsi_d' => 'Gunung Kerinci',
                'jawaban_benar' => 'D'
            ],
            [
                'kategori' => 'Geografi & Alam',
                'pertanyaan' => 'Danau vulkanik terbesar di dunia yang terletak di Sumatera Utara adalah...',
                'opsi_a' => 'Danau Singkarak',
                'opsi_b' => 'Danau Toba',
                'opsi_c' => 'Danau Maninjau',
                'opsi_d' => 'Danau Ranau',
                'jawaban_benar' => 'B'
            ],

            // Kategori: Kuliner & Budaya
            [
                'kategori' => 'Kuliner & Budaya',
                'pertanyaan' => 'Makanan khas daerah Palembang yang terbuat dari olahan ikan dan sagu adalah...',
                'opsi_a' => 'Bika Ambon',
                'opsi_b' => 'Rendang',
                'opsi_c' => 'Pempek',
                'opsi_d' => 'Mie Aceh',
                'jawaban_benar' => 'C'
            ],
            [
                'kategori' => 'Kuliner & Budaya',
                'pertanyaan' => 'Rendang dinobatkan sebagai salah satu makanan terenak di dunia. Dari daerah mana rendang berasal?',
                'opsi_a' => 'Minangkabau',
                'opsi_b' => 'Sunda',
                'opsi_c' => 'Betawi',
                'opsi_d' => 'Bugis',
                'jawaban_benar' => 'A'
            ]
        ];

        foreach ($soal as $data) {
            SoalKuis::create($data);
        }
    }
}