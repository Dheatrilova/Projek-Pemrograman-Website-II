//tambah fitur admin
@extends('layouts.admin')

@section('content')
    <div class="max-w-6xl mx-auto pb-12">
        
        <div class="mb-8">
            <h1 class="text-3xl font-serif font-bold text-[#5C3A21]">Dashboard Control Panel</h1>
            <p class="text-sm text-gray-600 mt-1">Manajemen Konten Utama Halaman Beranda Tr Adventure</p>
        </div>

        @if(session('success'))
        <div class="mb-6 p-4 bg-green-50 border-l-4 border-green-500 text-green-700 rounded-r-xl font-medium flex items-center gap-3 shadow-sm">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            {{ session('success') }}
        </div>
        @endif

        <form action="/admin/beranda/hero" method="POST" enctype="multipart/form-data" class="space-y-10">
            @csrf

            <div class="bg-white rounded-3xl p-8 shadow-sm border border-gray-100">
                <div class="mb-6 pb-4 border-b border-gray-100">
                    <h2 class="text-xl font-bold text-[#B07A2A] flex items-center gap-2">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        Kelola Background Utama (Banner Header)
                    </h2>
                    <p class="text-sm text-gray-500 mt-1">Gunakan foto beresolusi tinggi atau video singkat (MP4/WebM) untuk latar belakang bagian paling atas website.</p>
                </div>

                @php
                    $bgUrl = $pengaturan && $pengaturan->banner_header ? asset($pengaturan->banner_header) : null;
                    $isVideo = false;
                    if($bgUrl){
                        $ext = strtolower(pathinfo($pengaturan->banner_header, PATHINFO_EXTENSION));
                        $isVideo = in_array($ext, ['mp4','webm','ogg']);
                    }
                @endphp

                <div class="relative w-full h-64 md:h-80 rounded-2xl overflow-hidden bg-gray-100 border-2 border-dashed border-gray-300 flex items-center justify-center group">
                    <img id="preview_bg_img" src="{{ !$isVideo && $bgUrl ? $bgUrl : '' }}" class="absolute inset-0 w-full h-full object-cover {{ !$isVideo && $bgUrl ? '' : 'hidden' }}">
                    <video id="preview_bg_vid" src="{{ $isVideo && $bgUrl ? $bgUrl : '' }}" autoplay loop muted class="absolute inset-0 w-full h-full object-cover {{ $isVideo && $bgUrl ? '' : 'hidden' }}"></video>
                    
                    <span class="text-gray-400 font-medium z-0 {{ $bgUrl ? 'hidden' : '' }}" id="teks_bg">Belum ada background terpasang</span>
                    
                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center cursor-pointer">
                        <label class="bg-[#B07A2A] text-white px-6 py-3 rounded-xl font-bold text-sm cursor-pointer hover:bg-[#5C3A21] transition shadow-lg flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                            Pilih File Foto / Video
                            <input type="file" name="banner_header" accept="image/*,video/*" class="hidden" onchange="previewMedia(this, 'preview_bg_img', 'preview_bg_vid', 'teks_bg')">
                        </label>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-3xl p-8 shadow-sm border border-gray-100">
                <div class="mb-6 pb-4 border-b border-gray-100">
                    <h2 class="text-xl font-bold text-[#B07A2A] flex items-center gap-2">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                        Kelola Grid "Jelajahi Pesona Nusantara"
                    </h2>
                    <p class="text-sm text-gray-500 mt-1">Susunan form di bawah ini mencerminkan tata letak gambar pada halaman depan website.</p>
                </div>
                
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 bg-gray-50 p-6 rounded-2xl border border-gray-100">
                    <div class="lg:col-span-5 relative group">
                        <label class="block text-sm font-bold text-[#5C3A21] mb-2">Gambar Kiri (Utama Besar)</label>
                        <div class="relative w-full h-[350px] rounded-2xl overflow-hidden bg-gray-200 border-2 border-dashed border-gray-300 flex items-center justify-center">
                            <img id="preview_hero_1" src="{{ $pengaturan && $pengaturan->hero_gambar_1 ? asset($pengaturan->hero_gambar_1) : '' }}" class="absolute inset-0 w-full h-full object-cover {{ $pengaturan && $pengaturan->hero_gambar_1 ? '' : 'hidden' }}">
                            <span class="text-gray-400 text-sm font-medium z-0 {{ $pengaturan && $pengaturan->hero_gambar_1 ? 'hidden' : '' }}" id="teks_hero_1">Kosong</span>
                            <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center cursor-pointer">
                                <label class="bg-white/90 text-[#B07A2A] px-4 py-2 rounded-lg font-bold text-sm cursor-pointer hover:bg-white transition">
                                    Pilih Gambar
                                    <input type="file" name="hero_gambar_1" accept="image/*" class="hidden" onchange="previewImage(this, 'preview_hero_1', 'teks_hero_1')">
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-7 flex flex-col gap-6">
                        <div class="relative group flex-1">
                            <label class="block text-sm font-bold text-[#5C3A21] mb-2">Gambar Kanan Atas (Mamanjang)</label>
                            <div class="relative w-full h-[150px] rounded-2xl overflow-hidden bg-gray-200 border-2 border-dashed border-gray-300 flex items-center justify-center">
                                <img id="preview_hero_2" src="{{ $pengaturan && $pengaturan->hero_gambar_2 ? asset($pengaturan->hero_gambar_2) : '' }}" class="absolute inset-0 w-full h-full object-cover {{ $pengaturan && $pengaturan->hero_gambar_2 ? '' : 'hidden' }}">
                                <span class="text-gray-400 text-sm font-medium z-0 {{ $pengaturan && $pengaturan->hero_gambar_2 ? 'hidden' : '' }}" id="teks_hero_2">Kosong</span>
                                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center cursor-pointer">
                                    <label class="bg-white/90 text-[#B07A2A] px-4 py-2 rounded-lg font-bold text-sm cursor-pointer hover:bg-white transition">
                                        Pilih Gambar
                                        <input type="file" name="hero_gambar_2" accept="image/*" class="hidden" onchange="previewImage(this, 'preview_hero_2', 'teks_hero_2')">
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-6 flex-1">
                            <div class="relative group h-[150px]">
                                <label class="block text-sm font-bold text-[#5C3A21] mb-2">Kanan Bawah Kiri</label>
                                <div class="relative w-full h-full rounded-2xl overflow-hidden bg-gray-200 border-2 border-dashed border-gray-300 flex items-center justify-center">
                                    <img id="preview_hero_3" src="{{ $pengaturan && $pengaturan->hero_gambar_3 ? asset($pengaturan->hero_gambar_3) : '' }}" class="absolute inset-0 w-full h-full object-cover {{ $pengaturan && $pengaturan->hero_gambar_3 ? '' : 'hidden' }}">
                                    <span class="text-gray-400 text-sm font-medium z-0 {{ $pengaturan && $pengaturan->hero_gambar_3 ? 'hidden' : '' }}" id="teks_hero_3">Kosong</span>
                                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center cursor-pointer">
                                        <label class="bg-white/90 text-[#B07A2A] px-3 py-2 rounded-lg font-bold text-xs cursor-pointer hover:bg-white transition">
                                            Ubah <input type="file" name="hero_gambar_3" accept="image/*" class="hidden" onchange="previewImage(this, 'preview_hero_3', 'teks_hero_3')">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="relative group h-[150px]">
                                <label class="block text-sm font-bold text-[#5C3A21] mb-2">Kanan Bawah Kanan</label>
                                <div class="relative w-full h-full rounded-2xl overflow-hidden bg-gray-200 border-2 border-dashed border-gray-300 flex items-center justify-center">
                                    <img id="preview_hero_4" src="{{ $pengaturan && $pengaturan->hero_gambar_4 ? asset($pengaturan->hero_gambar_4) : '' }}" class="absolute inset-0 w-full h-full object-cover {{ $pengaturan && $pengaturan->hero_gambar_4 ? '' : 'hidden' }}">
                                    <span class="text-gray-400 text-sm font-medium z-0 {{ $pengaturan && $pengaturan->hero_gambar_4 ? 'hidden' : '' }}" id="teks_hero_4">Kosong</span>
                                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center cursor-pointer">
                                        <label class="bg-white/90 text-[#B07A2A] px-3 py-2 rounded-lg font-bold text-xs cursor-pointer hover:bg-white transition">
                                            Ubah <input type="file" name="hero_gambar_4" accept="image/*" class="hidden" onchange="previewImage(this, 'preview_hero_4', 'teks_hero_4')">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-end mt-6">
                    <button type="submit" class="bg-[#B07A2A] text-white px-8 py-3 rounded-xl font-bold hover:bg-[#5C3A21] transition shadow-lg shadow-[#B07A2A]/20 flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"></path></svg>
                        Simpan Background & Grid
                    </button>
                </div>
            </div>
        </form>

        <div class="bg-white rounded-3xl p-8 shadow-sm border border-gray-100 mt-10">
            <div class="mb-6 pb-4 border-b border-gray-100">
                <h2 class="text-xl font-bold text-[#B07A2A] flex items-center gap-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2.5 2.5 0 00-2.5-2.5H15"></path></svg>
                    Kelola "Tahukah Kamu?" (Expanding Cards)
                </h2>
                <p class="text-sm text-gray-500 mt-1">Kartu nomor 1 akan menjadi kartu utama besar di sebelah kiri, sedangkan kartu nomor 2-5 akan menjadi kartu lipat di sebelah kanan.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($tahukahKamu as $index => $item)
                <div class="p-5 border border-gray-200 rounded-2xl bg-white shadow-sm hover:border-[#B07A2A] transition-colors relative flex flex-col justify-between">
                    <span class="absolute -top-3 -right-3 bg-[#5C3A21] text-white w-8 h-8 rounded-full flex items-center justify-center font-bold text-sm shadow-md z-10">
                        {{ $index + 1 }}
                    </span>
                    
                    <form action="/admin/beranda/tahukah/{{ $item->id }}" method="POST" enctype="multipart/form-data" class="flex flex-col h-full justify-between">
                        @csrf
                        
                        <div>
                            <div class="relative w-full h-40 rounded-xl overflow-hidden bg-gray-100 mb-4 group border border-gray-200 flex items-center justify-center">
                                <img id="preview_tahukah_{{ $item->id }}" src="{{ $item->gambar ? asset($item->gambar) : '' }}" class="absolute inset-0 w-full h-full object-cover {{ $item->gambar ? '' : 'hidden' }}">
                                <div class="absolute inset-0 flex items-center justify-center {{ $item->gambar ? 'hidden' : '' }}" id="teks_tahukah_{{ $item->id }}">
                                    <span class="text-xs text-gray-400 font-medium">Gambar Kosong</span>
                                </div>
                                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center cursor-pointer">
                                    <label class="bg-white text-[#B07A2A] px-3 py-1.5 rounded text-xs font-bold cursor-pointer hover:scale-105 transition">
                                        Ganti Gambar
                                        <input type="file" name="gambar" accept="image/*" class="hidden" onchange="previewImage(this, 'preview_tahukah_{{ $item->id }}', 'teks_tahukah_{{ $item->id }}')">
                                    </label>
                                </div>
                            </div>

                            <div class="space-y-3">
                                <div>
                                    <label class="block text-[11px] font-bold text-gray-500 uppercase tracking-wide mb-1">Judul Fakta</label>
                                    <input type="text" name="judul" value="{{ $item->judul }}" class="w-full p-2 border rounded-lg bg-gray-50 focus:bg-white focus:outline-none focus:border-[#B07A2A] text-sm font-bold text-[#5C3A21]" required>
                                </div>
                                <div>
                                    <label class="block text-[11px] font-bold text-gray-500 uppercase tracking-wide mb-1">Teks Keterangan</label>
                                    <textarea name="deskripsi" rows="3" class="w-full p-2 border rounded-lg bg-gray-50 focus:bg-white focus:outline-none focus:border-[#B07A2A] text-xs leading-relaxed text-gray-700 resize-none" required>{{ $item->deskripsi }}</textarea>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="w-full mt-4 bg-gray-900 text-white py-2.5 rounded-lg text-sm font-bold hover:bg-[#B07A2A] transition shadow-sm">
                            Simpan Kartu Ke-{{ $index + 1 }}
                        </button>
                    </form>
                </div>
                @endforeach
            </div>
        </div>

    </div>

    <script>
        function previewImage(input, previewId, teksId) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    var imgElement = document.getElementById(previewId);
                    var textElement = document.getElementById(teksId);
                    
                    imgElement.src = e.target.result;
                    imgElement.classList.remove('hidden');
                    
                    if(textElement) textElement.classList.add('hidden');
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        function previewMedia(input, imgId, vidId, teksId) {
            if (input.files && input.files[0]) {
                let file = input.files[0];
                let url = URL.createObjectURL(file);
                
                let imgEl = document.getElementById(imgId);
                let vidEl = document.getElementById(vidId);
                let textEl = document.getElementById(teksId);

                if (textEl) textEl.classList.add('hidden');

                if (file.type.startsWith('video/')) {
                    imgEl.classList.add('hidden');
                    vidEl.src = url;
                    vidEl.classList.remove('hidden');
                } else {
                    vidEl.classList.add('hidden');
                    imgEl.src = url;
                    imgEl.classList.remove('hidden');
                }
            }
        }
    </script>
@endsection
