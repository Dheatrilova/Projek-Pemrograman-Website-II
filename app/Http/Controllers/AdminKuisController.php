<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SoalKuis; // Pastikan model SoalKuis sudah ada sesuai database Anda

class AdminKuisController extends Controller
{
    public function index()
    {
        // Mengambil semua soal dan diurutkan dari yang terbaru
        $soal = SoalKuis::orderBy('id', 'desc')->get();
        return view('admin.kuis', compact('soal'));
    }

public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required', // <-- UBAH BAGIAN INI
            'pertanyaan' => 'required',
            'opsi_a' => 'required',
            'opsi_b' => 'required',
            'opsi_c' => 'required',
            'opsi_d' => 'required',
            'jawaban_benar' => 'required',
        ]);

        SoalKuis::create($request->all());

        return back()->with('success', 'Soal Kuis berhasil ditambahkan ke database!');
    }

    public function destroy($id)
    {
        SoalKuis::findOrFail($id)->delete();
        return back()->with('success', 'Soal Kuis berhasil dihapus!');
    }
}