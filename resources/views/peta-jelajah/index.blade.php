<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peta Jelajah - Tr Adventure</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-[#F6F1E3] text-adv-dark font-sans pt-24 md:pt-32 relative"> 

    <x-navbar />

    <div class="absolute top-0 inset-x-0 h-[500px] bg-gradient-to-b from-[#FFE4A1]/40 to-transparent z-0 pointer-events-none"></div>

    <section class="relative z-10 max-w-7xl mx-auto px-6 text-center">
        
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-serif font-bold text-[#B07A2A] mb-4 drop-shadow-sm tracking-wide">
            Mulai Petualanganmu
        </h1>
        <p class="text-[#5C3A21] text-base md:text-lg lg:text-xl font-medium mb-10 max-w-2xl mx-auto">
            Pilih pulau besar di bawah ini atau gunakan pencarian untuk mulai menjelajahi pesona Nusantara.
        </p>

        <div class="max-w-4xl mx-auto mb-20 relative z-20">
            <div class="bg-white/80 backdrop-blur-md rounded-full p-2 shadow-[0_8px_30px_rgba(0,0,0,0.06)] flex items-center justify-between border border-white/60">
                
                <form action="https://www.google.com/search" method="GET" target="_blank" class="flex items-center flex-1 px-4 lg:border-r lg:border-gray-200">
                    <svg class="w-5 h-5 text-[#B07A2A] mr-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    <input type="text" name="q" placeholder="Cari pulau, provinsi, atau destinasi..." class="w-full bg-transparent outline-none text-sm md:text-base text-gray-700 placeholder-gray-400" required>
                </form>
                
                <button type="submit" class="bg-[#B07A2A] text-white px-6 md:px-8 py-2.5 md:py-3 rounded-full hover:bg-[#8B5920] hover:shadow-lg transition-all duration-300 font-bold text-sm md:text-base shrink-0">
                    Cari
                </button>
            </div>

            <div class="flex flex-wrap justify-center gap-2 md:gap-3 mt-6">
                <a href="https://www.google.com/search?q=Wisata+Alam+Indonesia" target="_blank" class="px-4 py-1.5 bg-white/60 backdrop-blur-sm border border-[#B07A2A]/30 rounded-full text-xs md:text-sm font-semibold text-[#8B5920] shadow-sm hover:bg-[#B07A2A] hover:text-white transition-all cursor-pointer">Wisata Alam</a>
                <a href="https://www.google.com/search?q=Situs+Sejarah+Indonesia" target="_blank" class="px-4 py-1.5 bg-white/60 backdrop-blur-sm border border-[#B07A2A]/30 rounded-full text-xs md:text-sm font-semibold text-[#8B5920] shadow-sm hover:bg-[#B07A2A] hover:text-white transition-all cursor-pointer">Situs Sejarah</a>
                <a href="https://www.google.com/search?q=Kuliner+Khas+Indonesia" target="_blank" class="px-4 py-1.5 bg-white/60 backdrop-blur-sm border border-[#B07A2A]/30 rounded-full text-xs md:text-sm font-semibold text-[#8B5920] shadow-sm hover:bg-[#B07A2A] hover:text-white transition-all cursor-pointer">Kuliner Khas</a>
                <a href="https://www.google.com/search?q=Ragam+Budaya+Indonesia" target="_blank" class="px-4 py-1.5 bg-white/60 backdrop-blur-sm border border-[#B07A2A]/30 rounded-full text-xs md:text-sm font-semibold text-[#8B5920] shadow-sm hover:bg-[#B07A2A] hover:text-white transition-all cursor-pointer">Ragam Budaya</a>
            </div>
        </div>

        <div class="relative w-full flex justify-center mb-32 z-10">
            <img src="{{ asset('indonesia.png') }}" alt="Peta Indonesia" class="w-full max-w-5xl h-auto object-contain drop-shadow-[0_15px_15px_rgba(0,0,0,0.15)] hover:drop-shadow-[0_20px_20px_rgba(0,0,0,0.2)] transition duration-500">
        </div>

    </section>

    <section class="max-w-7xl mx-auto px-6 pb-32 relative z-20">

        @php
            $pulauBesar = [
                [
                    'nama' => 'Sumatera',
                    'slug' => 'sumatera',
                    'deskripsi' => 'Dikenal sebagai Swarnadwipa atau Pulau Emas, Sumatera menawarkan kekayaan alam dari hutan tropis yang lebat hingga Danau Toba yang megah, serta perpaduan budaya yang sangat kental dan bersejarah.',
                    'provinsi' => '10',
                    'suku' => 'Batak, Melayu, Minang',
                    'gambar' => 'tentang sumatera.png'
                ],
                [
                    'nama' => 'Kalimantan',
                    'slug' => 'kalimantan',
                    'deskripsi' => 'Paru-paru dunia yang menyimpan keanekaragaman hayati luar biasa. Jelajahi sungai-sungai raksasa, pedalaman hutan tropis yang eksotis, dan kearifan lokal yang hidup harmonis dengan alam.',
                    'provinsi' => '5',
                    'suku' => 'Dayak, Banjar, Kutai',
                    'gambar' => 'kalimantan.png'
                ],
                [
                    'nama' => 'Jawa',
                    'slug' => 'jawa',
                    'deskripsi' => 'Pusat peradaban dan denyut nadi Nusantara. Pulau ini memadukan kemegahan candi-candi bersejarah, pesona gunung berapi yang menawan, serta dinamika budaya tradisional dan modern.',
                    'provinsi' => '6',
                    'suku' => 'Jawa, Sunda, Madura',
                    'gambar' => 'jawa.png'
                ],
                [
                    'nama' => 'Sulawesi',
                    'slug' => 'sulawesi',
                    'deskripsi' => 'Pulau berbentuk anggrek yang terkenal dengan kekayaan baharinya. Surga bagi penyelam dunia dan rumah bagi tradisi maritim yang kuat serta lanskap dataran tinggi yang menakjubkan.',
                    'provinsi' => '6',
                    'suku' => 'Bugis, Makassar, Minahasa',
                    'gambar' => 'sulawesi.png'
                ],
                [
                    'nama' => 'Papua',
                    'slug' => 'papua',
                    'deskripsi' => 'Mutiara Hitam dari Timur. Wilayah ini menyajikan pesona alam yang masih sangat alami, dari puncak bersalju abadi hingga lembah-lembah tersembunyi yang dihuni oleh ragam kebudayaan eksotis.',
                    'provinsi' => '6',
                    'suku' => 'Asmat, Dani, Kamoro',
                    'gambar' => 'papua.png'
                ],
            ];
        @endphp

        <div class="flex flex-col gap-20 lg:gap-32">
            
            @foreach($pulauBesar as $pulau)
                <div class="flex flex-col lg:flex-row items-center gap-10 lg:gap-16">
                    
                    <div class="w-full lg:w-1/2 {{ $loop->even ? 'lg:order-2' : 'lg:order-1' }}">
                        <div class="relative w-full aspect-[4/3] rounded-[2rem] overflow-hidden shadow-xl border-4 border-white/50 group">
                            <img src="{{ asset($pulau['gambar']) }}" alt="Pulau {{ $pulau['nama'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        </div>
                    </div>

                    <div class="w-full lg:w-1/2 flex flex-col justify-center {{ $loop->even ? 'lg:order-1' : 'lg:order-2' }}">
                        <h2 class="text-4xl md:text-5xl font-serif font-bold text-[#B07A2A] mb-5">
                            {{ $pulau['nama'] }}
                        </h2>
                        
                        <p class="text-[#5C3A21] text-base md:text-lg leading-relaxed mb-8">
                            {{ $pulau['deskripsi'] }}
                        </p>

                        <div class="flex flex-wrap gap-6 mb-8 border-l-4 border-[#B07A2A] pl-5">
                            <div class="flex flex-col">
                                <span class="flex items-center gap-1.5 text-sm font-semibold text-[#8B5920] mb-1">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                                    Total Provinsi
                                </span>
                                <span class="text-2xl font-bold text-[#5C3A21]">{{ $pulau['provinsi'] }}</span>
                            </div>
                            <div class="flex flex-col">
                                <span class="flex items-center gap-1.5 text-sm font-semibold text-[#8B5920] mb-1">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                    Suku Utama
                                </span>
                                <span class="text-lg font-bold text-[#5C3A21]">{{ $pulau['suku'] }}</span>
                            </div>
                        </div>

                        <div>
                            <a href="/peta-jelajah/{{ $pulau['slug'] }}" class="inline-flex items-center gap-2 bg-gradient-to-r from-[#B07A2A] to-[#9B5C1B] text-white px-7 py-3 rounded-full font-bold text-sm hover:shadow-[0_8px_20px_rgba(176,122,42,0.4)] hover:-translate-y-1 transition-all duration-300 group/btn">
                                Jelajahi {{ $pulau['nama'] }}
                                <svg class="w-5 h-5 group-hover/btn:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </a>
                        </div>
                    </div>

                </div>
            @endforeach
            
        </div>
    </section>

    <x-footer />

</body>
</html>