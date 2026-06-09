<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tr Adventure</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-white text-adv-dark font-sans">

    <x-navbar /> 

    <section class="relative w-full min-h-[100svh] lg:min-h-[108svh] flex items-center overflow-hidden pt-20 md:pt-24 lg:pt-28">
        <div class="absolute inset-0 w-full h-full bg-cover bg-center bg-no-repeat lg:[background-size:126%] lg:[background-position:center_12%]" style="background-image: url('{{ asset('background.png') }}');"></div>
        <div class="absolute inset-x-0 top-0 h-32 bg-gradient-to-b from-black/60 to-transparent z-0"></div>
        <div class="absolute inset-0 w-full h-full bg-black/14 z-0"></div>

        <div class="relative z-10 w-full px-6 py-8 md:px-16 lg:px-24 pb-24 md:pb-32 lg:pb-40">
            <div class="max-w-lg lg:max-w-md xl:max-w-lg bg-black/20 backdrop-blur-md border border-white/10 rounded-[1.75rem] md:rounded-[2rem] p-5 md:p-6 shadow-2xl shadow-black/20">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-serif text-white font-medium mb-2 leading-tight drop-shadow-md">
                    Temukan <br> Keindahan dari
                </h2>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-serif text-[#F0BB55] font-bold drop-shadow-xl leading-none mb-3">
                    Indonesia
                </h1>
                
                <p class="text-white text-xs md:text-sm lg:text-base font-light drop-shadow-md mb-5 max-w-md leading-relaxed">
                    Ribuan pulau, beragam budaya, satu bangsa.<br>
                    Mari Menjelajahi Keindahan Nusantara
                </p>

                <div class="flex flex-wrap items-center gap-3">
                    <a href="{{ url('/peta-jelajah') }}" class="bg-[#F0BB55] text-adv-brown px-5 py-2 rounded-full font-bold text-xs md:text-sm flex items-center gap-2 hover:brightness-110 transition duration-300 shadow-lg shadow-black/20">
                        Mulai Menjelajah
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                    
                    <a href="javascript:void(0)" class="border border-adv-gold text-white px-5 py-2 rounded-full font-bold text-xs md:text-sm flex items-center gap-2 hover:bg-adv-gold hover:text-adv-brown transition duration-300 backdrop-blur-sm">
                        Tentang Indonesia 
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="relative w-full bg-[#F6F1E3] rounded-t-[2.25rem] md:rounded-t-[3.5rem] -mt-8 md:-mt-12 pt-14 md:pt-16 pb-24 z-20 shadow-[0_-10px_20px_rgba(0,0,0,0.1)]">
        
        <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-full max-w-[90%] lg:max-w-4xl z-30">
            <div class="bg-white rounded-full p-2 shadow-lg flex items-center justify-between border-2 border-white/80 w-full backdrop-blur-md">
                <div class="flex items-center flex-1 px-4">
                    <svg class="w-6 h-6 text-gray-500 mr-3 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    <input type="text" placeholder="Cari tempat, budaya, kuliner, atau hal menarik di Indonesia..." class="w-full bg-transparent outline-none text-sm md:text-base text-gray-700 placeholder-gray-400">
                </div>
                <div class="flex items-center gap-2 shrink-0">
                    <button class="bg-[#78481A] text-white p-2 md:p-3 rounded-full hover:bg-[#5C3612] transition shadow-md">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </button>
                    <button class="bg-white border border-gray-200 text-gray-800 px-4 md:px-5 py-2 md:py-2.5 rounded-full font-semibold text-sm flex items-center gap-2 hover:bg-gray-50 transition shadow-sm">
                        Acak Daerah
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
                    </button>
                </div>
            </div>
        </div>

        <div class="relative z-20 max-w-[90%] md:max-w-6xl mx-auto mt-4 md:mt-8">
            <div class="bg-gradient-to-r from-[#BA7F30] via-[#A8722B] to-[#A06C28] rounded-3xl md:rounded-[2rem] shadow-xl p-6 md:py-5 md:px-8 flex flex-wrap lg:flex-nowrap items-center justify-between text-white border-b-4 border-[#8B5920]">
                
                <div class="flex items-center gap-3 px-2 md:px-4 lg:border-r lg:border-white/30 w-1/2 lg:w-auto mb-4 lg:mb-0">
                    <img src="{{ asset('pulau1.png') }}" alt="Pulau" class="h-10 md:h-12 object-contain">
                    <div>
                        <div class="font-bold text-lg md:text-xl leading-tight">17.508+</div>
                        <div class="text-xs md:text-sm font-medium opacity-90">Pulau</div>
                    </div>
                </div>

                <div class="flex items-center gap-3 px-2 md:px-4 lg:border-r lg:border-white/30 w-1/2 lg:w-auto mb-4 lg:mb-0">
                    <img src="{{ asset('pulau2.png') }}" alt="Provinsi" class="h-10 md:h-12 object-contain">
                    <div>
                        <div class="font-bold text-lg md:text-xl leading-tight">38</div>
                        <div class="text-xs md:text-sm font-medium opacity-90">Provinsi</div>
                    </div>
                </div>

                <div class="flex items-center gap-3 px-2 md:px-4 lg:border-r lg:border-white/30 w-1/2 lg:w-auto">
                    <img src="{{ asset('pulau3.png') }}" alt="Suku Bangsa" class="h-10 md:h-12 object-contain">
                    <div>
                        <div class="font-bold text-lg md:text-xl leading-tight">1.340+</div>
                        <div class="text-xs md:text-sm font-medium opacity-90">Suku Bangsa</div>
                    </div>
                </div>

                <div class="flex items-center gap-3 px-2 md:px-4 lg:border-r lg:border-white/30 w-1/2 lg:w-auto">
                    <img src="{{ asset('pulau4.png') }}" alt="Bahasa Daerah" class="h-10 md:h-12 object-contain">
                    <div>
                        <div class="font-bold text-lg md:text-xl leading-tight">718+</div>
                        <div class="text-xs md:text-sm font-medium opacity-90">Bahasa Daerah</div>
                    </div>
                </div>

                <div class="flex items-center gap-3 px-2 md:px-4 lg:border-r lg:border-white/30 w-1/2 lg:w-auto mt-4 lg:mt-0">
                    <img src="{{ asset('pulau5.png') }}" alt="Agama" class="h-10 md:h-12 object-contain">
                    <div>
                        <div class="font-bold text-lg md:text-xl leading-tight">17.508+</div>
                        <div class="text-xs md:text-sm font-medium opacity-90">Agama</div>
                    </div>
                </div>

                <div class="px-2 md:px-4 w-1/2 lg:w-auto mt-4 lg:mt-0 text-left lg:text-center">
                    <div class="font-bold text-lg md:text-xl leading-tight">270jt+</div>
                    <div class="text-xs md:text-sm font-medium opacity-90">Penduduk</div>
                </div>

            </div>
        </div>

        <div class="relative z-10 max-w-6xl mx-auto px-6 mt-16 md:mt-24 text-center">
            
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-serif font-bold text-[#B07A2A] drop-shadow-md mb-3 tracking-wide">
                Mau Mulai Menjelajah ?
            </h2>
            
            <p class="text-[#5C3A21] text-base md:text-lg lg:text-xl font-medium mb-12">
                Sentuh pulau untuk mulai menjelajah
            </p>
            
            <div class="w-full flex justify-center">
                <img src="{{ asset('indonesia.png') }}" alt="Peta Interaktif Indonesia" class="w-full max-w-5xl h-auto object-contain drop-shadow-[0_15px_15px_rgba(0,0,0,0.15)] hover:drop-shadow-[0_20px_20px_rgba(0,0,0,0.2)] transition duration-500">
            </div>
            
        </div>
    </section>

    <section class="w-full bg-[#F6F1E3] py-16">
        <div class="max-w-[95%] md:max-w-7xl mx-auto px-4 md:px-6">
            
            <h2 class="text-2xl md:text-4xl font-serif font-bold text-[#B07A2A] mb-8 md:mb-12 text-left md:text-center">
                Jelajahi Berdasarkan Kategori
            </h2>

            <div class="flex overflow-x-auto pb-6 gap-6 md:gap-4 lg:gap-6 justify-start lg:justify-center items-start snap-x snap-mandatory" style="scrollbar-width: none;">
                <div class="flex flex-col items-center gap-3 min-w-[80px] md:min-w-[100px] snap-center cursor-pointer group">
                    <div class="w-20 h-20 md:w-24 md:h-24 lg:w-28 lg:h-28 rounded-full overflow-hidden shadow-sm border-4 border-transparent group-hover:border-[#E2C792] transition duration-300">
                        <img src="{{ asset('Ellipse 63.png') }}" alt="Suku & Bahasa" class="w-full h-full object-cover">
                    </div>
                    <span class="text-xs md:text-sm font-semibold text-[#5C3A21] text-center">Suku & Bahasa</span>
                </div>

                <div class="flex flex-col items-center gap-3 min-w-[80px] md:min-w-[100px] snap-center cursor-pointer group">
                    <div class="w-20 h-20 md:w-24 md:h-24 lg:w-28 lg:h-28 rounded-full overflow-hidden shadow-sm border-4 border-transparent group-hover:border-[#E2C792] transition duration-300">
                        <img src="{{ asset('Ellipse 64.png') }}" alt="Budaya & Seni" class="w-full h-full object-cover">
                    </div>
                    <span class="text-xs md:text-sm font-semibold text-[#5C3A21] text-center">Budaya & Seni</span>
                </div>

                <div class="flex flex-col items-center gap-3 min-w-[80px] md:min-w-[100px] snap-center cursor-pointer group">
                    <div class="w-20 h-20 md:w-24 md:h-24 lg:w-28 lg:h-28 rounded-full overflow-hidden shadow-sm border-4 border-transparent group-hover:border-[#E2C792] transition duration-300">
                        <img src="{{ asset('Ellipse 65.png') }}" alt="Kuliner" class="w-full h-full object-cover">
                    </div>
                    <span class="text-xs md:text-sm font-semibold text-[#5C3A21] text-center">Kuliner</span>
                </div>

                <div class="flex flex-col items-center gap-3 min-w-[80px] md:min-w-[100px] snap-center cursor-pointer group">
                    <div class="w-20 h-20 md:w-24 md:h-24 lg:w-28 lg:h-28 rounded-full overflow-hidden shadow-sm border-4 border-transparent group-hover:border-[#E2C792] transition duration-300">
                        <img src="{{ asset('Ellipse 66.png') }}" alt="Wisata" class="w-full h-full object-cover">
                    </div>
                    <span class="text-xs md:text-sm font-semibold text-[#5C3A21] text-center">Wisata</span>
                </div>

                <div class="flex flex-col items-center gap-3 min-w-[80px] md:min-w-[100px] snap-center cursor-pointer group">
                    <div class="w-20 h-20 md:w-24 md:h-24 lg:w-28 lg:h-28 rounded-full overflow-hidden shadow-sm border-4 border-transparent group-hover:border-[#E2C792] transition duration-300">
                        <img src="{{ asset('Ellipse 67.png') }}" alt="Sejarah" class="w-full h-full object-cover">
                    </div>
                    <span class="text-xs md:text-sm font-semibold text-[#5C3A21] text-center">Sejarah</span>
                </div>

                <div class="flex flex-col items-center gap-3 min-w-[80px] md:min-w-[100px] snap-center cursor-pointer group">
                    <div class="w-20 h-20 md:w-24 md:h-24 lg:w-28 lg:h-28 rounded-full overflow-hidden shadow-sm border-4 border-transparent group-hover:border-[#E2C792] transition duration-300">
                        <img src="{{ asset('Ellipse 68.png') }}" alt="Alam & Fauna" class="w-full h-full object-cover">
                    </div>
                    <span class="text-xs md:text-sm font-semibold text-[#5C3A21] text-center">Alam & Fauna</span>
                </div>

                <div class="flex flex-col items-center gap-3 min-w-[80px] md:min-w-[100px] snap-center cursor-pointer group">
                    <div class="w-20 h-20 md:w-24 md:h-24 lg:w-28 lg:h-28 rounded-full overflow-hidden shadow-sm border-4 border-transparent group-hover:border-[#E2C792] transition duration-300">
                        <img src="{{ asset('Ellipse 69.png') }}" alt="Lagu Daerah" class="w-full h-full object-cover">
                    </div>
                    <span class="text-xs md:text-sm font-semibold text-[#5C3A21] text-center">Lagu Daerah</span>
                </div>

                <div class="flex flex-col items-center gap-3 min-w-[80px] md:min-w-[100px] snap-center cursor-pointer group">
                    <div class="w-20 h-20 md:w-24 md:h-24 lg:w-28 lg:h-28 rounded-full overflow-hidden shadow-sm border-4 border-transparent group-hover:border-[#E2C792] transition duration-300">
                        <img src="{{ asset('Ellipse 70.png') }}" alt="Ekonomi" class="w-full h-full object-cover">
                    </div>
                    <span class="text-xs md:text-sm font-semibold text-[#5C3A21] text-center">Ekonomi</span>
                </div>

                <div class="flex flex-col items-center gap-3 min-w-[80px] md:min-w-[100px] snap-center cursor-pointer group">
                    <div class="w-20 h-20 md:w-24 md:h-24 lg:w-28 lg:h-28 rounded-full overflow-hidden shadow-sm border-4 border-transparent group-hover:border-[#E2C792] transition duration-300">
                        <img src="{{ asset('Ellipse 71.png') }}" alt="Olahraga" class="w-full h-full object-cover">
                    </div>
                    <span class="text-xs md:text-sm font-semibold text-[#5C3A21] text-center">Olahraga</span>
                </div>

                <div class="flex flex-col items-center gap-3 min-w-[80px] md:min-w-[100px] snap-center cursor-pointer group">
                    <div class="w-20 h-20 md:w-24 md:h-24 lg:w-28 lg:h-28 rounded-full overflow-hidden shadow-sm border-4 border-transparent group-hover:border-[#E2C792] transition duration-300">
                        <img src="{{ asset('Ellipse 72.png') }}" alt="Fakta Menarik" class="w-full h-full object-cover">
                    </div>
                    <span class="text-xs md:text-sm font-semibold text-[#5C3A21] text-center">Fakta Menarik</span>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full bg-[#F6F1E3] py-16 pb-32">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            
            <div class="lg:col-span-5 flex flex-col justify-center">
                <span class="text-[#5C3A21] text-xl font-medium mb-1">Exploring Indonesia</span>
                <h2 class="text-5xl md:text-6xl lg:text-[5rem] font-serif font-bold text-[#B07A2A] leading-[1.1] drop-shadow-sm mb-6">
                    Popular <br> Destinasi
                </h2>
                
                <hr class="border-t-[3px] border-[#B07A2A] w-20 mb-8">

                <p class="text-[#5C3A21] text-base md:text-lg leading-relaxed mb-10 max-w-md">
                    Exploring Indonesia Exploring Indonesia<br>
                    Exploring Indonesia Exploring Indonesia
                </p>

                <div>
                    <a href="{{ url('/peta-jelajah') }}" class="inline-block bg-[#B07A2A] text-white px-8 py-3.5 rounded-full font-semibold text-lg hover:bg-[#8B5920] hover:shadow-lg transition duration-300">
                        Lihat Semua Destinasi
                    </a>
                </div>
            </div>

            <div class="lg:col-span-7 grid grid-cols-2 md:grid-cols-3 grid-rows-[auto_auto] gap-4 md:gap-5 h-full">
                
                <div class="col-span-2 md:col-span-1 md:row-span-2 rounded-[2rem] overflow-hidden shadow-md">
                    <img src="{{ asset('potraitkiri.png') }}" alt="Portrait Destinasi" class="w-full h-full object-cover min-h-[300px] md:min-h-full hover:scale-105 transition duration-500">
                </div>
                
                <div class="col-span-2 md:col-span-2 rounded-[2rem] overflow-hidden shadow-md h-48 md:h-64 lg:h-[18rem]">
                    <img src="{{ asset('landscapeatas.png') }}" alt="Landscape Destinasi" class="w-full h-full object-cover hover:scale-105 transition duration-500">
                </div>
                
                <div class="col-span-1 rounded-[2rem] overflow-hidden shadow-md h-40 md:h-48 lg:h-56">
                    <img src="{{ asset('square.png') }}" alt="Square Destinasi 1" class="w-full h-full object-cover hover:scale-105 transition duration-500">
                </div>
                
                <div class="col-span-1 rounded-[2rem] overflow-hidden shadow-md h-40 md:h-48 lg:h-56">
                    <img src="{{ asset('square.png') }}" alt="Square Destinasi 2" class="w-full h-full object-cover hover:scale-105 transition duration-500">
                </div>
                
            </div>

        </div>
    </section>

    <section class="w-full bg-[#F6F1E3] py-16 pb-24">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10">
            
            <div class="lg:col-span-5 relative rounded-[2rem] md:rounded-[2.5rem] overflow-hidden shadow-lg h-[400px] md:h-[480px] group">
                <img src="{{ asset('squarekiri.png') }}" alt="Artikel Utama" class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                
                <div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-[#9B5C1B] via-[#9B5C1B]/90 to-transparent px-6 py-8 md:px-8 pt-24">
                    <h3 class="text-white text-3xl md:text-4xl font-bold mb-3 drop-shadow-md">
                        Judulnya
                    </h3>
                    <p class="text-white/90 text-xs md:text-sm leading-relaxed line-clamp-4">
                        sub judul lorem ipsum sub judul lorem sub judul lorem ipsum su
                        sub judul lorem ipsum sub judul lorem sub judul lorem ipsum su
                        sub judul lorem ipsum sub judul lorem sub judul lorem ipsum su
                        sub judul lorem ipsum sub judul lorem sub judul lorem ipsum su
                    </p>
                </div>
            </div>

            <div class="lg:col-span-7 flex flex-col justify-start lg:justify-between">
                
                <h2 class="text-4xl md:text-5xl font-serif font-bold text-[#B07A2A] mb-6 mt-4 lg:mt-0 drop-shadow-sm">
                    Tahukah Kamu?
                </h2>
                
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-5 flex-1">
                    
                    <div class="rounded-[1.5rem] overflow-hidden shadow-md h-56 md:h-full group">
                        <img src="{{ asset('gambar.png') }}" alt="Tahukah Kamu 1" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    </div>
                    
                    <div class="rounded-[1.5rem] overflow-hidden shadow-md h-56 md:h-full group">
                        <img src="{{ asset('gambar.png') }}" alt="Tahukah Kamu 2" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    </div>
                    
                    <div class="rounded-[1.5rem] overflow-hidden shadow-md h-56 md:h-full group">
                        <img src="{{ asset('gambar.png') }}" alt="Tahukah Kamu 3" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    </div>
                    
                    <div class="rounded-[1.5rem] overflow-hidden shadow-md h-56 md:h-full group">
                        <img src="{{ asset('gambar.png') }}" alt="Tahukah Kamu 4" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    </div>

                </div>
            </div>

        </div>
    </section>

    <section class="w-full bg-[#F6F1E3] py-10 pb-20">
        <div class="max-w-7xl mx-auto px-4 md:px-6">
            
            <div class="relative w-full rounded-[2rem] md:rounded-[2.5rem] overflow-hidden shadow-xl min-h-[350px] md:min-h-[450px] flex items-center group">
                
                <img src="{{ asset('monas.jpg') }}" alt="Kuis Indonesia" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition duration-700">
                
                <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/40 to-transparent"></div>

                <div class="relative z-10 px-6 md:px-12 lg:px-20 w-full max-w-3xl">
                    <h2 class="text-3xl md:text-5xl lg:text-6xl font-serif font-bold text-[#FEFAE0] leading-[1.1] mb-4 drop-shadow-lg">
                        Seberapa Kenal Kamu <br> dengan Indonesia
                    </h2>
                    <p class="text-white/90 text-sm md:text-base lg:text-lg mb-8 max-w-lg drop-shadow-md leading-relaxed">
                        Uji pengetahuanmu tentang budaya, sejarah, dan keindahan Indonesia dalam kuis seru!
                    </p>
                    
                    <a href="javascript:void(0)" class="inline-block border border-white/40 bg-gradient-to-r from-[#8B5920]/80 to-[#A8722B]/60 backdrop-blur-md text-white px-8 py-3.5 rounded-full font-bold text-base md:text-lg hover:from-[#8B5920] hover:to-[#8B5920] hover:shadow-[0_0_20px_rgba(139,89,32,0.5)] transition duration-300">
                        Mulai Kuis
                    </a>
                </div>

                <div class="absolute bottom-6 md:bottom-8 right-6 md:right-8 bg-[#FEFAE0]/95 backdrop-blur-sm rounded-2xl md:rounded-full px-4 py-3 md:px-6 md:py-4 flex items-center divide-x-2 divide-[#B07A2A]/20 shadow-[0_10px_30px_rgba(0,0,0,0.2)] z-20 overflow-x-auto max-w-[90%] md:max-w-none">
                    
                    <div class="flex items-center gap-3 px-3 md:px-5 first:pl-2">
                        <svg class="w-6 h-6 md:w-8 md:h-8 text-[#B07A2A]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                        <div class="flex flex-col text-center md:text-left">
                            <span class="font-bold text-[#5C3A21] text-sm md:text-base leading-none">15</span>
                            <span class="text-[#8B5920] text-[10px] md:text-xs font-medium mt-1">Pertanyaan</span>
                        </div>
                    </div>

                    <div class="flex items-center gap-3 px-3 md:px-5">
                        <svg class="w-6 h-6 md:w-8 md:h-8 text-[#B07A2A]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                        <div class="flex flex-col text-center md:text-left">
                            <span class="font-bold text-[#5C3A21] text-sm md:text-base leading-none">10</span>
                            <span class="text-[#8B5920] text-[10px] md:text-xs font-medium mt-1">Menit</span>
                        </div>
                    </div>

                    <div class="flex items-center gap-3 px-3 md:px-5 last:pr-2">
                        <svg class="w-6 h-6 md:w-8 md:h-8 text-[#B07A2A]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                        <div class="flex flex-col text-center md:text-left">
                            <span class="font-bold text-[#5C3A21] text-sm md:text-base leading-none">Skor</span>
                            <span class="text-[#8B5920] text-[10px] md:text-xs font-medium mt-1">Tertinggi</span>
                        </div>
                    </div>

                </div>
            </div>
            
        </div>
    </section>

    <x-footer />

</body>
</html>