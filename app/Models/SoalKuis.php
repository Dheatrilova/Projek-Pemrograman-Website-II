<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoalKuis extends Model
{
    use HasFactory;
    
    // Beritahu Laravel nama tabel yang benar (opsional tapi disarankan)
    protected $table = 'soal_kuis';

    protected $fillable = [
        'kategori', 'pertanyaan', 'opsi_a', 'opsi_b', 'opsi_c', 'opsi_d', 'jawaban_benar'
    ];
}
