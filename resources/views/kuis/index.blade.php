<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Wawasan & Kuis - Tr Adventure</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .glass-card { background: rgba(255, 255, 255, 0.8); backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.5); }
        .leaderboard-gradient { background: linear-gradient(135deg, #B07A2A 0%, #5C3A21 100%); }
        .fade-in { animation: fadeIn 0.5s ease-in forwards; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
        /* Warna untuk jawaban benar/salah */
        .jawaban-benar { background-color: #d1fae5 !important; border-color: #10b981 !important; color: #065f46 !important; }
        .jawaban-salah { background-color: #fee2e2 !important; border-color: #ef4444 !important; color: #991b1b !important; }
    </style>
</head>
<body class="antialiased bg-[#F6F1E3] text-adv-dark font-sans pt-24 md:pt-32"> 

    <x-navbar />

    <div class="max-w-7xl mx-auto px-6 pb-24">
        
        <div class="flex flex-col lg:flex-row gap-10 mb-20 items-center">
            <div class="w-full lg:w-1/2 text-center lg:text-left">
                <h1 class="text-4xl md:text-6xl font-serif font-bold text-[#B07A2A] mb-6 leading-tight">
                    Uji Wawasan <br> <span class="text-[#5C3A21]">Nusantaramu</span>
                </h1>
                <p class="text-[#5C3A21] text-lg font-medium mb-8">
                    Seberapa jauh kamu mengenal tanah air? Jawab tantangan kuisnya, kumpulkan skor tertinggi, dan ukir namamu di papan peringkat nasional!
                </p>
                <div class="flex items-center gap-3 px-5 py-3 bg-white/50 rounded-2xl border border-[#B07A2A]/20 inline-flex">
                    <svg class="w-8 h-8 text-[#B07A2A]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>
                    <div class="text-left">
                        <p class="text-xs font-bold text-[#8B5920] uppercase">Sistem Penilaian</p>
                        <p class="text-lg font-bold text-[#5C3A21]">Real-time Database</p>
                    </div>
                </div>
            </div>

            <div class="w-full lg:w-1/2">
                <div class="leaderboard-gradient rounded-[2.5rem] p-8 shadow-2xl text-white relative overflow-hidden">
                    <div class="relative z-10">
                        <div class="flex items-center justify-between mb-8">
                            <h2 class="text-2xl font-serif font-bold">Papan Peringkat Top 5</h2>
                            <svg class="w-8 h-8 text-[#F0BB55]" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        </div>

                        <div class="space-y-4">
                            @forelse($leaderboards as $index => $board)
                            <div class="flex items-center justify-between {{ $index == 0 ? 'bg-white/20 border-white/30' : 'bg-white/5 border-transparent' }} border p-4 rounded-2xl">
                                <div class="flex items-center gap-4">
                                    <span class="text-xl font-bold {{ $index == 0 ? 'text-[#F0BB55]' : 'text-gray-300' }}">{{ $index + 1 }}</span>
                                    <div>
                                        <p class="font-bold">{{ $board->nama_pemain }}</p>
                                        <p class="text-[10px] opacity-70">{{ $board->kategori_kuis }}</p>
                                    </div>
                                </div>
                                <p class="font-serif font-bold text-xl">{{ $board->skor }} <span class="text-xs opacity-70">pts</span></p>
                            </div>
                            @empty
                            <div class="text-center py-6">
                                <p class="text-white/70 italic">Belum ada skor yang tersimpan. Jadilah yang pertama!</p>
                            </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h2 id="judul-kategori" class="text-3xl font-serif font-bold text-[#B07A2A] mb-10 text-center transition-all duration-300">Pilih Kategori Kuis</h2>
        
        <div id="area-kategori" class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-24 transition-all duration-300">
            <div class="glass-card rounded-[2rem] p-8 text-center flex flex-col items-center hover:shadow-xl transition-all duration-300 border-b-8 border-[#B07A2A]">
                <div class="w-20 h-20 bg-[#B07A2A]/10 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-10 h-10 text-[#B07A2A]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                </div>
                <h3 class="text-2xl font-serif font-bold text-[#5C3A21] mb-3">Sejarah & Budaya</h3>
                <button class="btn-mulai-kuis w-full mt-auto bg-[#B07A2A] text-white py-3 rounded-xl font-bold hover:bg-[#5C3A21] transition-colors" data-kategori="Sejarah & Budaya">Mulai Kuis</button>
            </div>

            <div class="glass-card rounded-[2rem] p-8 text-center flex flex-col items-center hover:shadow-xl transition-all duration-300 border-b-8 border-[#5C3A21]">
                <div class="w-20 h-20 bg-[#5C3A21]/10 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-10 h-10 text-[#5C3A21]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                </div>
                <h3 class="text-2xl font-serif font-bold text-[#5C3A21] mb-3">Geografi & Alam</h3>
                <button class="btn-mulai-kuis w-full mt-auto bg-[#5C3A21] text-white py-3 rounded-xl font-bold hover:bg-[#301503] transition-colors" data-kategori="Geografi & Alam">Mulai Kuis</button>
            </div>

            <div class="glass-card rounded-[2rem] p-8 text-center flex flex-col items-center hover:shadow-xl transition-all duration-300 border-b-8 border-[#B07A2A]">
                <div class="w-20 h-20 bg-[#B07A2A]/10 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-10 h-10 text-[#B07A2A]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 16v2a2 2 0 01-2 2H5a2 2 0 01-2-2v-2m12 0v2a2 2 0 002 2h2a2 2 0 002-2v-2m-10-8V4a2 2 0 00-2-2H9a2 2 0 00-2 2v4m10 0V4a2 2 0 012-2h2a2 2 0 012 2v4m-10 8h10M9 16h10"></path></svg>
                </div>
                <h3 class="text-2xl font-serif font-bold text-[#5C3A21] mb-3">Kuliner & Budaya</h3>
                <button class="btn-mulai-kuis w-full mt-auto bg-[#B07A2A] text-white py-3 rounded-xl font-bold hover:bg-[#5C3A21] transition-colors" data-kategori="Kuliner & Budaya">Mulai Kuis</button>
            </div>
        </div>

        <div id="area-kuis" class="max-w-3xl mx-auto hidden scroll-mt-28">
            <div class="bg-white rounded-[2.5rem] p-10 shadow-2xl border-2 border-[#B07A2A]/20 relative min-h-[400px]">
                
                <div id="loading-state" class="absolute inset-0 bg-white rounded-[2.5rem] flex items-center justify-center z-10">
                    <p class="text-[#B07A2A] font-bold text-xl animate-pulse">Menyiapkan Soal...</p>
                </div>

                <div id="konten-kuis" class="hidden">
                    <div class="flex justify-between items-center mb-8">
                        <span id="indikator-soal" class="px-4 py-1 bg-[#B07A2A]/10 text-[#B07A2A] rounded-full text-xs font-bold uppercase tracking-widest">Pertanyaan 1 / x</span>
                        <span class="text-[#5C3A21] font-bold px-4 py-1 bg-gray-100 rounded-full">Skor: <span id="skor-sementara">0</span></span>
                    </div>
                    
                    <h2 id="teks-pertanyaan" class="text-2xl md:text-3xl font-serif font-bold text-[#5C3A21] mb-10 text-center leading-snug">
                        Teks Pertanyaan...
                    </h2>

                    <div id="opsi-jawaban" class="grid grid-cols-1 gap-4">
                        </div>

                    <div class="mt-10 flex justify-between items-center">
                        <button id="btn-batal" class="text-red-500 font-bold text-sm hover:underline">Batal</button>
                        <button id="btn-lanjut" class="hidden px-8 py-3 bg-[#5C3A21] text-white rounded-xl font-bold hover:shadow-lg transition-all flex items-center gap-2">
                            Berikutnya
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path></svg>
                        </button>
                    </div>
                </div>

                <div id="akhir-kuis" class="hidden text-center py-8">
                    <h2 class="text-4xl font-serif font-bold text-[#B07A2A] mb-2">Kuis Selesai!</h2>
                    <p class="text-lg text-gray-600 mb-6">Skor akhir kamu: <span id="skor-akhir" class="font-bold text-2xl text-[#5C3A21]">0</span></p>
                    
                    <div class="max-w-sm mx-auto">
                        <label class="block text-left text-sm font-bold text-[#5C3A21] mb-2">Masukkan Nama Kamu</label>
                        <input type="text" id="input-nama" class="w-full p-4 border-2 border-gray-200 rounded-xl mb-4 focus:outline-none focus:border-[#B07A2A]" placeholder="Contoh: Reza Pahlepi">
                        <button id="btn-simpan-skor" class="w-full bg-[#B07A2A] text-white py-3 rounded-xl font-bold hover:bg-[#5C3A21] transition-colors">Simpan Skor ke Database</button>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <x-footer />

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let bankSoal = [];
            let indeksSaatIni = 0;
            let skor = 0;
            let kategoriAktif = '';
            const nilaiPerSoal = 100; // Tiap benar dapat 100 poin

            // Elemen DOM UI
            const areaKategori = document.getElementById('area-kategori');
            const judulKategori = document.getElementById('judul-kategori');
            const areaKuis = document.getElementById('area-kuis');
            const loadingState = document.getElementById('loading-state');
            const kontenKuis = document.getElementById('konten-kuis');
            const akhirKuis = document.getElementById('akhir-kuis');
            
            // Elemen DOM Konten
            const teksPertanyaan = document.getElementById('teks-pertanyaan');
            const opsiJawaban = document.getElementById('opsi-jawaban');
            const indikatorSoal = document.getElementById('indikator-soal');
            const skorSementara = document.getElementById('skor-sementara');
            const btnLanjut = document.getElementById('btn-lanjut');

            // 1. Event Listener: Pilih Kategori & Ambil API
            document.querySelectorAll('.btn-mulai-kuis').forEach(tombol => {
                tombol.addEventListener('click', async function() {
                    kategoriAktif = this.getAttribute('data-kategori');
                    
                    // Transisi UI
                    areaKategori.classList.add('hidden');
                    judulKategori.classList.add('hidden');
                    areaKuis.classList.remove('hidden');
                    areaKuis.classList.add('fade-in');
                    loadingState.classList.remove('hidden');
                    kontenKuis.classList.add('hidden');
                    akhirKuis.classList.add('hidden');
                    
                    // Fetch Data dari Database lewat Route API
                    try {
                        const response = await fetch(`/api/kuis/${kategoriAktif}`);
                        bankSoal = await response.json();
                        
                        if(bankSoal.length > 0) {
                            indeksSaatIni = 0;
                            skor = 0;
                            tampilkanSoal();
                        } else {
                            alert("Bank soal untuk kategori ini belum dibuat oleh Admin!");
                            location.reload();
                        }
                    } catch (error) {
                        alert("Gagal terhubung ke database!");
                    }
                });
            });

            // 2. Fungsi Menampilkan Soal ke Layar
            function tampilkanSoal() {
                loadingState.classList.add('hidden');
                kontenKuis.classList.remove('hidden');
                btnLanjut.classList.add('hidden');
                
                let soalData = bankSoal[indeksSaatIni];
                indikatorSoal.innerText = `Pertanyaan ${indeksSaatIni + 1} / ${bankSoal.length}`;
                skorSementara.innerText = skor;
                teksPertanyaan.innerText = soalData.pertanyaan;

                // Render Pilihan Ganda
                opsiJawaban.innerHTML = '';
                const pilihan = [
                    { huruf: 'A', teks: soalData.opsi_a },
                    { huruf: 'B', teks: soalData.opsi_b },
                    { huruf: 'C', teks: soalData.opsi_c },
                    { huruf: 'D', teks: soalData.opsi_d }
                ];

                pilihan.forEach(p => {
                    const btn = document.createElement('button');
                    btn.className = "p-4 border-2 border-gray-100 rounded-2xl text-left hover:border-[#B07A2A] hover:bg-[#B07A2A]/5 transition-all font-bold text-[#5C3A21] btn-opsi";
                    btn.innerText = `${p.huruf}. ${p.teks}`;
                    
                    // Logika saat jawaban diklik
                    btn.onclick = () => cekJawaban(btn, p.huruf, soalData.jawaban_benar);
                    opsiJawaban.appendChild(btn);
                });
            }

            // 3. Fungsi Cek Jawaban Benar/Salah
            function cekJawaban(tombolDiklik, jawabanUser, jawabanBenar) {
                // Matikan semua tombol agar tidak bisa diklik dua kali
                document.querySelectorAll('.btn-opsi').forEach(btn => {
                    btn.disabled = true;
                    // Tanda warna jika tombol tersebut adalah jawaban benar
                    if(btn.innerText.startsWith(jawabanBenar)) {
                        btn.classList.add('jawaban-benar');
                    }
                });

                if(jawabanUser === jawabanBenar) {
                    skor += nilaiPerSoal;
                    skorSementara.innerText = skor;
                } else {
                    tombolDiklik.classList.add('jawaban-salah');
                }

                btnLanjut.classList.remove('hidden');
            }

            // 4. Tombol Berikutnya
            btnLanjut.addEventListener('click', function() {
                indeksSaatIni++;
                if(indeksSaatIni < bankSoal.length) {
                    tampilkanSoal();
                } else {
                    // Kuis Berakhir, tampilkan form simpan nama
                    kontenKuis.classList.add('hidden');
                    akhirKuis.classList.remove('hidden');
                    document.getElementById('skor-akhir').innerText = skor;
                }
            });

            // 5. Simpan Skor ke Database menggunakan POST Fetch
            document.getElementById('btn-simpan-skor').addEventListener('click', async function() {
                const namaPemain = document.getElementById('input-nama').value;
                if(!namaPemain) return alert('Nama tidak boleh kosong!');

                this.innerText = "Menyimpan...";
                this.disabled = true;

                try {
                    const res = await fetch('/api/kuis/simpan', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        },
                        body: JSON.stringify({
                            nama_pemain: namaPemain,
                            kategori_kuis: kategoriAktif,
                            skor: skor
                        })
                    });

                    if(res.ok) {
                        alert("Skor berhasil disimpan! Mari lihat posisi Papan Peringkatmu.");
                        window.location.reload(); // Refresh untuk update leaderboard
                    }
                } catch(e) {
                    alert('Gagal menyimpan skor ke Database!');
                    this.innerText = "Simpan Skor ke Database";
                    this.disabled = false;
                }
            });

            // Tombol Batal
            document.getElementById('btn-batal').addEventListener('click', () => location.reload());
        });
    </script>
</body>
</html>