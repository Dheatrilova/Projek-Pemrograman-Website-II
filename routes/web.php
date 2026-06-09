<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\AdminBerandaController;
use App\Http\Controllers\AdminKuisController;

use App\Http\Controllers\AdminAuthController;
use App\Models\PengaturanBeranda;
use App\Models\TahukahKamu;

// Route untuk halaman Welcome (sudah ada sebelumnya)
Route::get('/', function () {
    $pengaturan = PengaturanBeranda::first();
    $tahukahKamu = TahukahKamu::all();
    return view('welcome', compact('pengaturan', 'tahukahKamu'));
})->name('home');

// Route untuk Halaman Utama Peta Jelajah
Route::get('/peta-jelajah', function () {
    return view('peta-jelajah.index');
})->name('peta-jelajah.index');

// Route Dinamis untuk Halaman Detail Pulau (Sumatra, Jawa, dll)
Route::get('/peta-jelajah/{pulau}', function ($pulau) {
    // Nanti kita bisa kirim data spesifik berdasarkan variabel $pulau ini
    return view('peta-jelajah.detail', ['pulau' => $pulau]);
})->name('peta-jelajah.detail');

// Route Dinamis untuk Halaman Detail Provinsi (Sumatera Barat, dll)
Route::get('/peta-jelajah/{pulau}/{provinsi}', function ($pulau, $provinsi) {
    // Karena view untuk Sumatera Barat bernama sumbar.blade.php
    if ($provinsi === 'sumatera-barat') {
        return view('peta.sumbar');
    }
    
    // Fallback dinamis jika Anda membuat file view dengan nama persis seperti slug provinsinya nanti (misal: peta/jawa-barat.blade.php)
    if (view()->exists('peta.' . $provinsi)) {
        return view('peta.' . $provinsi);
    }
    
    abort(404, 'Halaman destinasi provinsi ini sedang dalam tahap pengembangan.');
})->name('peta-jelajah.provinsi');

// Rute untuk Halaman Utama Kuis
Route::get('/tentang-kami', function () {
    return view('welcome');
})->name('tentang-kami');

// Rute untuk Halaman Utama Kuis
Route::get('/wawasan-kuis', [QuizController::class, 'index']);

// Rute untuk Halaman Utama Kuis (menggunakan nama route 'kuis.index')
Route::get('/kuis', [QuizController::class, 'index'])->name('kuis.index');

// Rute API internal untuk mengambil soal dan menyimpan skor (AJAX)
Route::get('/api/kuis/{kategori}', [QuizController::class, 'getSoal']);
Route::post('/api/kuis/simpan', [QuizController::class, 'simpanSkor']);

// Admin Routes
Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login']);
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');



Route::middleware(['admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return redirect('/admin/beranda'); // Redirect langsung ke halaman kelola konten beranda
    });

    // Rute CRUD khusus manajemen konten beranda
    Route::get('/admin/beranda', [AdminBerandaController::class, 'index']);
    Route::post('/admin/beranda/hero', [AdminBerandaController::class, 'updateHero']);
    Route::post('/admin/beranda/tahukah/{id}', [AdminBerandaController::class, 'updateTahukahKamu']);

    // Rute CRUD Kuis
Route::get('/admin/kuis', [AdminKuisController::class, 'index']);
Route::post('/admin/kuis', [AdminKuisController::class, 'store']);
Route::delete('/admin/kuis/{id}', [AdminKuisController::class, 'destroy']);
});