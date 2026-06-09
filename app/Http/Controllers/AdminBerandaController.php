<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengaturanBeranda;
use App\Models\TahukahKamu;

class AdminBerandaController extends Controller
{
    // Menampilkan halaman form kelola beranda
    public function index()
    {
        $pengaturan = PengaturanBeranda::first();
        $tahukahKamu = TahukahKamu::all();
        
        return view('admin.beranda', compact('pengaturan', 'tahukahKamu'));
    }

    // Memperbarui aset gambar/video utama beranda
    public function updateHero(Request $request)
    {
        $pengaturan = PengaturanBeranda::first();
        $dataUpdate = [];

        // Array daftar input file gambar
        $fields = ['banner_header', 'hero_gambar_1', 'hero_gambar_2', 'hero_gambar_3', 'hero_gambar_4'];

        foreach ($fields as $field) {
            if ($request->hasFile($field)) {
                $file = $request->file($field);
                // Membuat nama file unik berdasarkan waktu agar tidak duplikat
                $filename = time() . '_' . $field . '.' . $file->getClientOriginalExtension();
                // Memindahkan file langsung ke folder public/uploads agar mudah diakses tanpa symlink
                $file->move(public_path('uploads'), $filename);
                $dataUpdate[$field] = 'uploads/' . $filename;
            }
        }

        if (!empty($dataUpdate)) {
            $pengaturan->update($dataUpdate);
        }

        return back()->with('success', 'Aset gambar Beranda berhasil diperbarui!');
    }

    // Memperbarui isi konten kartu fakta unik "Tahukah Kamu"
    public function updateTahukahKamu(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:100',
            'deskripsi' => 'required|string',
        ]);

        $item = TahukahKamu::findOrFail($id);
        $item->judul = $request->judul;
        $item->deskripsi = $request->deskripsi;

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '_tahukah_' . $id . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename);
            $item->gambar = 'uploads/' . $filename;
        }

        $item->save();

        return back()->with('success', "Konten 'Tahukah Kamu' ke-$id berhasil diperbarui!");
    }
}