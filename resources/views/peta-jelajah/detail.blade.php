<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pulau - Tr Adventure</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        @keyframes marquee {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        .animate-marquee {
            animation: marquee 35s linear infinite;
            width: max-content;
        }
        .animate-marquee:hover {
            animation-play-state: paused;
        }
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>
<body class="antialiased bg-[#F6F1E3] text-adv-dark font-sans pt-24 md:pt-28"> 

    <x-navbar />

    @php
        $pulau = [
            'nama' => ucfirst(request()->segment(2) ?? 'Sumatera'),
            'hero_desc' => 'Gerbang Barat Indonesia yang kaya budaya, alam, dan sejarah',
            'tentang_teks' => 'Pulau yang luas ini terkenal dengan alamnya yang indah, hutan tropis yang hijau, dan budaya yang beragam. Di sini, kamu bisa mengenal berbagai suku, bahasa daerah, tradisi unik, serta mencicipi makanan khas yang lezat. Yuk, jelajahi keajaiban pulau ini dan temukan cerita menarik di setiap daerahnya!',
            'fakta' => [
                ['judul' => 'Danau Toba', 'sub' => 'Danau vulkanik terbesar di dunia', 'gambar' => 'Danau Toba Indonesia.jpg'],
                ['judul' => 'Pulau Samosir', 'sub' => 'Jantung budaya di tengah danau', 'gambar' => 'samosir.jpg'],
                ['judul' => 'Suku Batak', 'sub' => 'Kaya akan tradisi dan budaya khas', 'gambar' => 'suku batak.jpg'],
                ['judul' => 'Air Terjun', 'sub' => 'Keindahan alam yang memukau', 'gambar' => 'air terjun.jpg'],
                ['judul' => 'Kota Medan', 'sub' => 'Pusat perkotaan yang dinamis', 'gambar' => 'Kota medan.jpg'],
                ['judul' => 'Istana Maimun', 'sub' => 'Ikon sejarah Kesultanan Deli', 'gambar' => 'Istana maimoon.jpg'],
                ['judul' => 'Gunung Sinabung', 'sub' => 'Gunung berapi aktif yang megah', 'gambar' => 'gunung sinabung.jpg'],
                ['judul' => 'Bika Ambon', 'sub' => 'Kuliner khas dengan cita rasa lezat', 'gambar' => 'Bika ambon.jpg'],
            ],
            // Mengubah array provinsi agar memiliki nama dan nama file gambar yang spesifik
            'provinsi' => [
                ['nama' => 'Aceh', 'gambar' => 'aceh.png'],
                ['nama' => 'Sumatera Utara', 'gambar' => 'sumatrautara.png'],
                ['nama' => 'Sumatera Barat', 'gambar' => 'sumatrabarat.png'],
                ['nama' => 'Riau', 'gambar' => 'riau.png'],
                ['nama' => 'Kepulauan Riau', 'gambar' => 'kepulauanriau.png'],
                ['nama' => 'Jambi', 'gambar' => 'jambi.png'],
                ['nama' => 'Sumatera Selatan', 'gambar' => 'sumatraselatan.png'],
                ['nama' => 'Bengkulu', 'gambar' => 'bengkulu.png'],
                ['nama' => 'Kep. Bangka Belitung', 'gambar' => 'bangkabelitung.png'],
                ['nama' => 'Lampung', 'gambar' => 'lampung.png'],
            ]
        ];
    @endphp

    <div class="max-w-7xl mx-auto px-4 md:px-6 pb-24 pt-4">

        <section class="relative w-full rounded-[2rem] overflow-hidden shadow-lg h-[280px] md:h-[380px] mb-16">
            <img src="{{ asset('hsumatra.png') }}" alt="Hero {{ $pulau['nama'] }}" class="absolute inset-0 w-full h-full object-cover">
            
            <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/40 to-transparent"></div>
            
            <div class="absolute inset-y-0 left-0 flex flex-col justify-center px-8 md:px-16 w-full max-w-3xl z-10">
                <span class="text-white/90 text-lg md:text-xl font-medium mb-1">Selamat Datang di</span>
                <h1 class="text-4xl md:text-6xl font-serif font-bold text-[#F0BB55] mb-3 drop-shadow-md">
                    Pulau {{ $pulau['nama'] }}
                </h1>
                <p class="text-white/80 text-sm md:text-base mb-8 max-w-md line-clamp-2">
                    {{ $pulau['hero_desc'] }}
                </p>
                <div>
                    <a href="#tentang-pulau" class="inline-flex items-center gap-2 bg-[#B07A2A] text-white px-6 py-2.5 rounded-full font-bold text-sm hover:bg-[#8B5920] transition-colors">
                        Mulai Menjelajah
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
                    </a>
                </div>
            </div>
        </section>

        <section id="tentang-pulau" class="flex flex-col md:flex-row items-center gap-10 md:gap-16 mb-24 scroll-mt-28">
            <div class="w-full md:w-1/3 flex justify-center">
                <img src="{{ asset('pulausumatra.png') }}" alt="Vektor {{ $pulau['nama'] }}" class="w-2/3 md:w-full object-contain drop-shadow-xl hover:-translate-y-2 transition-transform duration-500">
            </div>
            
            <div class="w-full md:w-2/3">
                <h2 class="text-3xl md:text-4xl font-serif font-bold text-[#B07A2A] mb-4 text-center md:text-left">
                    Tentang Pulau {{ $pulau['nama'] }}
                </h2>
                <p class="text-[#5C3A21] text-base leading-relaxed font-medium text-justify md:text-left">
                    {{ $pulau['tentang_teks'] }}
                </p>
            </div>
        </section>

        <section class="mb-24">
            <h2 class="text-3xl md:text-4xl font-serif font-bold text-[#B07A2A] mb-8 text-center">
                Fakta Menarik {{ $pulau['nama'] }}
            </h2>
            
            <div class="overflow-hidden w-full relative hide-scrollbar">
                
                <div class="flex animate-marquee gap-4 md:gap-6 pb-6 pt-2">
                    
                    @foreach($pulau['fakta'] as $fakta)
                    <div class="w-[200px] md:w-[240px] h-[320px] rounded-[1.5rem] overflow-hidden shadow-md relative group shrink-0 border border-[#B07A2A]/10">
                        <img src="{{ asset($fakta['gambar']) }}" alt="{{ $fakta['judul'] }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#9B5C1B]/95 via-[#9B5C1B]/40 to-transparent"></div>
                        <div class="absolute bottom-6 inset-x-4 text-center">
                            <h3 class="text-white font-bold text-lg leading-tight mb-1">{{ $fakta['judul'] }}</h3>
                            <p class="text-white/80 text-[10px] md:text-xs leading-snug">{{ $fakta['sub'] }}</p>
                        </div>
                    </div>
                    @endforeach

                    @foreach($pulau['fakta'] as $fakta)
                    <div class="w-[200px] md:w-[240px] h-[320px] rounded-[1.5rem] overflow-hidden shadow-md relative group shrink-0 border border-[#B07A2A]/10">
                        <img src="{{ asset($fakta['gambar']) }}" alt="{{ $fakta['judul'] }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#9B5C1B]/95 via-[#9B5C1B]/40 to-transparent"></div>
                        <div class="absolute bottom-6 inset-x-4 text-center">
                            <h3 class="text-white font-bold text-lg leading-tight mb-1">{{ $fakta['judul'] }}</h3>
                            <p class="text-white/80 text-[10px] md:text-xs leading-snug">{{ $fakta['sub'] }}</p>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </section>

        <section>
            <h2 class="text-3xl md:text-4xl font-serif font-bold text-[#B07A2A] mb-8 text-center">
                Pilih Provinsi di Pulau {{ $pulau['nama'] }}
            </h2>
            
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4 md:gap-6">
                @foreach($pulau['provinsi'] as $provinsi)
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-shadow relative h-48 md:h-56 group border-2 border-transparent hover:border-[#B07A2A]/50 flex flex-col">
                    <div class="h-3/5 w-full relative overflow-hidden">
                        <img src="{{ asset($provinsi['gambar']) }}" alt="{{ $provinsi['nama'] }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors"></div>
                    </div>
                    
                    <div class="h-2/5 bg-gradient-to-b from-[#B07A2A] to-[#9B5C1B] w-full flex flex-col items-center justify-end pb-3 relative">
                        <div class="w-12 h-12 bg-[#F6F1E3] rounded-full absolute -top-6 border-2 border-[#B07A2A] flex items-center justify-center p-2 shadow-sm">
                            <img src="{{ asset('square.png') }}" class="w-full h-full rounded-full object-cover" alt="Logo">
                        </div>
                        
                        <span class="text-white font-bold text-xs md:text-sm mb-1 text-center px-2 line-clamp-1">
                            {{ $provinsi['nama'] }}
                        </span>
                        
                        <a href="/peta-jelajah/{{ \Illuminate\Support\Str::slug($pulau['nama']) }}/{{ \Illuminate\Support\Str::slug($provinsi['nama']) }}" class="bg-[#F6F1E3] text-[#B07A2A] px-4 py-1 rounded-full text-[10px] font-bold hover:bg-white transition-colors">
                            Ayo Jelajahi
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </section>

    </div>

    <x-footer />

</body>
</html>