<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumatera Barat - Tr Adventure</title>
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

    <div class="max-w-7xl mx-auto px-4 md:px-6 pb-24 pt-4">

        <section class="relative w-full rounded-[2rem] overflow-hidden shadow-lg h-[280px] md:h-[380px] mb-16">
            <img src="{{ asset('wppsumbar.jpg') }}" alt="Hero Sumatera Barat" class="absolute inset-0 w-full h-full object-cover">
            
            <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/40 to-transparent"></div>
            
            <div class="absolute inset-y-0 left-0 flex flex-col justify-center px-8 md:px-16 w-full max-w-3xl z-10">
                <span class="text-white/90 text-lg md:text-xl font-medium mb-1">Selamat Datang di</span>
                <h1 class="text-4xl md:text-6xl font-serif font-bold text-[#F0BB55] mb-3 drop-shadow-md">
                    Sumatera Barat
                </h1>
                <p class="text-white/80 text-sm md:text-base mb-8 max-w-md line-clamp-3">
                    Ranah Minang nan memikat. Jelajahi keindahan arsitektur bergonjong, kekayaan sejarah, dan nikmati mahakarya kuliner terlezat di dunia.
                </p>
                <div>
                    <a href="#tentang-provinsi" class="inline-flex items-center gap-2 bg-[#B07A2A] text-white px-6 py-2.5 rounded-full font-bold text-sm hover:bg-[#8B5920] transition-colors">
                        Mulai Menjelajah
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
                    </a>
                </div>
            </div>
        </section>

        <section id="tentang-provinsi" class="flex flex-col md:flex-row items-center gap-10 md:gap-16 mb-24 scroll-mt-28">
            <div class="w-full md:w-1/3 flex justify-center">
                <img src="{{ asset('petasumbar.jpg') }}" alt="Peta Sumatera Barat" class="w-2/3 md:w-full object-contain drop-shadow-xl hover:-translate-y-2 transition-transform duration-500 rounded-3xl">
            </div>
            
            <div class="w-full md:w-2/3">
                <h2 class="text-3xl md:text-4xl font-serif font-bold text-[#B07A2A] mb-4 text-center md:text-left">
                    Tentang Sumatera Barat
                </h2>
                <p class="text-[#5C3A21] text-base leading-relaxed font-medium text-justify md:text-left">
                    Sumatera Barat merupakan provinsi yang terletak di pesisir barat pulau Sumatera, dikenal sebagai jantung budaya suku Minangkabau. Daerah ini sangat lekat dengan tradisi merantau, sistem kekerabatan matrilineal, serta peninggalan sejarah yang kental. Dengan perpaduan lanskap pegunungan Bukit Barisan yang megah, lembah ngarai yang curam, dan garis pantai eksotis, provinsi ini adalah surga bagi para petualang yang mencari keindahan alam sekaligus kekayaan tradisi Nusantara.
                </p>
            </div>
        </section>

        <section class="mb-10">
            <h2 class="text-3xl md:text-4xl font-serif font-bold text-[#B07A2A] mb-8 text-center">
                Fakta Menarik Ranah Minang
            </h2>
            
            <div class="overflow-hidden w-full relative hide-scrollbar">
                <div class="flex animate-marquee gap-4 md:gap-6 pb-6 pt-2">
                    
                    <div class="w-[200px] md:w-[240px] h-[320px] rounded-[1.5rem] overflow-hidden shadow-md relative group shrink-0 border border-[#B07A2A]/10">
                        <img src="{{ asset('jmgadang.jpg') }}" alt="Jam Gadang" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#9B5C1B]/95 via-[#9B5C1B]/40 to-transparent"></div>
                        <div class="absolute bottom-6 inset-x-4 text-center">
                            <h3 class="text-white font-bold text-lg leading-tight mb-1">Jam Gadang</h3>
                            <p class="text-white/80 text-[10px] md:text-xs leading-snug">Menara ikonik peninggalan sejarah di jantung Bukittinggi</p>
                        </div>
                    </div>

                    <div class="w-[200px] md:w-[240px] h-[320px] rounded-[1.5rem] overflow-hidden shadow-md relative group shrink-0 border border-[#B07A2A]/10">
                        <img src="{{ asset('rumah gadang.jpg') }}" alt="Rumah Gadang" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#9B5C1B]/95 via-[#9B5C1B]/40 to-transparent"></div>
                        <div class="absolute bottom-6 inset-x-4 text-center">
                            <h3 class="text-white font-bold text-lg leading-tight mb-1">Rumah Gadang</h3>
                            <p class="text-white/80 text-[10px] md:text-xs leading-snug">Arsitektur khas Minang dengan atap bergonjong yang megah</p>
                        </div>
                    </div>

                    <div class="w-[200px] md:w-[240px] h-[320px] rounded-[1.5rem] overflow-hidden shadow-md relative group shrink-0 border border-[#B07A2A]/10">
                        <img src="{{ asset('rendang.jpg') }}" alt="Rendang" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#9B5C1B]/95 via-[#9B5C1B]/40 to-transparent"></div>
                        <div class="absolute bottom-6 inset-x-4 text-center">
                            <h3 class="text-white font-bold text-lg leading-tight mb-1">Kuliner Rendang</h3>
                            <p class="text-white/80 text-[10px] md:text-xs leading-snug">Mahakarya rempah yang diakui sebagai makanan terlezat dunia</p>
                        </div>
                    </div>

                    <div class="w-[200px] md:w-[240px] h-[320px] rounded-[1.5rem] overflow-hidden shadow-md relative group shrink-0 border border-[#B07A2A]/10">
                        <img src="{{ asset('gunungnarapi.jpg') }}" alt="Gunung Marapi" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#9B5C1B]/95 via-[#9B5C1B]/40 to-transparent"></div>
                        <div class="absolute bottom-6 inset-x-4 text-center">
                            <h3 class="text-white font-bold text-lg leading-tight mb-1">Gunung Marapi</h3>
                            <p class="text-white/80 text-[10px] md:text-xs leading-snug">Gunung berapi aktif legendaris yang mengelilingi dataran tinggi</p>
                        </div>
                    </div>

                    <div class="w-[200px] md:w-[240px] h-[320px] rounded-[1.5rem] overflow-hidden shadow-md relative group shrink-0 border border-[#B07A2A]/10">
                        <img src="{{ asset('tebing granit.jpg') }}" alt="Lembah Harau" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#9B5C1B]/95 via-[#9B5C1B]/40 to-transparent"></div>
                        <div class="absolute bottom-6 inset-x-4 text-center">
                            <h3 class="text-white font-bold text-lg leading-tight mb-1">Lembah Harau</h3>
                            <p class="text-white/80 text-[10px] md:text-xs leading-snug">Tebing granit raksasa eksotis bak Grand Canyon ala Indonesia</p>
                        </div>
                    </div>

                    <div class="w-[200px] md:w-[240px] h-[320px] rounded-[1.5rem] overflow-hidden shadow-md relative group shrink-0 border border-[#B07A2A]/10">
                        <img src="{{ asset('adu kerbau.jpg') }}" alt="Legenda Minangkabau" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#9B5C1B]/95 via-[#9B5C1B]/40 to-transparent"></div>
                        <div class="absolute bottom-6 inset-x-4 text-center">
                            <h3 class="text-white font-bold text-lg leading-tight mb-1">Legenda Minang</h3>
                            <p class="text-white/80 text-[10px] md:text-xs leading-snug">Kisah cerdik adu kerbau yang menjadi cikal bakal penamaan daerah</p>
                        </div>
                    </div>

                    <div class="w-[200px] md:w-[240px] h-[320px] rounded-[1.5rem] overflow-hidden shadow-md relative group shrink-0 border border-[#B07A2A]/10">
                        <img src="{{ asset('jmgadang.jpg') }}" alt="Jam Gadang" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#9B5C1B]/95 via-[#9B5C1B]/40 to-transparent"></div>
                        <div class="absolute bottom-6 inset-x-4 text-center">
                            <h3 class="text-white font-bold text-lg leading-tight mb-1">Jam Gadang</h3>
                            <p class="text-white/80 text-[10px] md:text-xs leading-snug">Menara ikonik peninggalan sejarah di jantung Bukittinggi</p>
                        </div>
                    </div>

                    <div class="w-[200px] md:w-[240px] h-[320px] rounded-[1.5rem] overflow-hidden shadow-md relative group shrink-0 border border-[#B07A2A]/10">
                        <img src="{{ asset('rumah gadang.jpg') }}" alt="Rumah Gadang" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#9B5C1B]/95 via-[#9B5C1B]/40 to-transparent"></div>
                        <div class="absolute bottom-6 inset-x-4 text-center">
                            <h3 class="text-white font-bold text-lg leading-tight mb-1">Rumah Gadang</h3>
                            <p class="text-white/80 text-[10px] md:text-xs leading-snug">Arsitektur khas Minang dengan atap bergonjong yang megah</p>
                        </div>
                    </div>

                    <div class="w-[200px] md:w-[240px] h-[320px] rounded-[1.5rem] overflow-hidden shadow-md relative group shrink-0 border border-[#B07A2A]/10">
                        <img src="{{ asset('rendang.jpg') }}" alt="Rendang" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#9B5C1B]/95 via-[#9B5C1B]/40 to-transparent"></div>
                        <div class="absolute bottom-6 inset-x-4 text-center">
                            <h3 class="text-white font-bold text-lg leading-tight mb-1">Kuliner Rendang</h3>
                            <p class="text-white/80 text-[10px] md:text-xs leading-snug">Mahakarya rempah yang diakui sebagai makanan terlezat dunia</p>
                        </div>
                    </div>

                    <div class="w-[200px] md:w-[240px] h-[320px] rounded-[1.5rem] overflow-hidden shadow-md relative group shrink-0 border border-[#B07A2A]/10">
                        <img src="{{ asset('gunungnarapi.jpg') }}" alt="Gunung Marapi" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#9B5C1B]/95 via-[#9B5C1B]/40 to-transparent"></div>
                        <div class="absolute bottom-6 inset-x-4 text-center">
                            <h3 class="text-white font-bold text-lg leading-tight mb-1">Gunung Marapi</h3>
                            <p class="text-white/80 text-[10px] md:text-xs leading-snug">Gunung berapi aktif legendaris yang mengelilingi dataran tinggi</p>
                        </div>
                    </div>

                    <div class="w-[200px] md:w-[240px] h-[320px] rounded-[1.5rem] overflow-hidden shadow-md relative group shrink-0 border border-[#B07A2A]/10">
                        <img src="{{ asset('tebing granit.jpg') }}" alt="Lembah Harau" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#9B5C1B]/95 via-[#9B5C1B]/40 to-transparent"></div>
                        <div class="absolute bottom-6 inset-x-4 text-center">
                            <h3 class="text-white font-bold text-lg leading-tight mb-1">Lembah Harau</h3>
                            <p class="text-white/80 text-[10px] md:text-xs leading-snug">Tebing granit raksasa eksotis bak Grand Canyon ala Indonesia</p>
                        </div>
                    </div>

                    <div class="w-[200px] md:w-[240px] h-[320px] rounded-[1.5rem] overflow-hidden shadow-md relative group shrink-0 border border-[#B07A2A]/10">
                        <img src="{{ asset('adu kerbau.jpg') }}" alt="Legenda Minangkabau" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#9B5C1B]/95 via-[#9B5C1B]/40 to-transparent"></div>
                        <div class="absolute bottom-6 inset-x-4 text-center">
                            <h3 class="text-white font-bold text-lg leading-tight mb-1">Legenda Minang</h3>
                            <p class="text-white/80 text-[10px] md:text-xs leading-snug">Kisah cerdik adu kerbau yang menjadi cikal bakal penamaan daerah</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </div>

    <x-footer />

    <x-music-player />

</body>
</html>