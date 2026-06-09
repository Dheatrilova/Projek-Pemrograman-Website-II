<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkorKuis extends Model
{
    use HasFactory;

    protected $table = 'skor_kuis';

    protected $fillable = [
        'nama_pemain', 'kategori_kuis', 'skor'
    ];
}
