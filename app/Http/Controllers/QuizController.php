<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SoalKuis;
use App\Models\SkorKuis;

class QuizController extends Controller
{
    // 1. Menampilkan halaman utama kuis beserta Leaderboard
    public function index()
    {
        // Mengambil 5 skor tertinggi dari database
        $leaderboards = SkorKuis::orderBy('skor', 'desc')->take(5)->get();
        
        return view('kuis.index', compact('leaderboards'));
    }

    // 2. Mengambil soal berdasarkan kategori menggunakan AJAX
    public function getSoal($kategori)
    {
        // Tarik 5 soal acak dari database sesuai kategori yang diklik
        $soal = SoalKuis::where('kategori', $kategori)->inRandomOrder()->limit(5)->get();
        
        return response()->json($soal);
    }

    // 3. Menyimpan skor baru setelah kuis selesai
    public function simpanSkor(Request $request)
    {
        // Validasi data masuk
        $request->validate([
            'nama_pemain' => 'required|string|max:50',
            'kategori_kuis' => 'required|string',
            'skor' => 'required|integer'
        ]);

        // Simpan ke database
        SkorKuis::create([
            'nama_pemain' => $request->nama_pemain,
            'kategori_kuis' => $request->kategori_kuis,
            'skor' => $request->skor
        ]);

        return response()->json(['status' => 'success']);
    }
}