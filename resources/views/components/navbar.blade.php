<nav class="fixed top-0 inset-x-0 z-50 w-full bg-white/75 backdrop-blur-lg border-b border-white/40 shadow-sm transition-all duration-500">
    
    <div class="max-w-7xl mx-auto px-4 md:px-8 py-2.5 md:py-3 flex justify-between items-center">
        
        <a href="{{ route('home') }}" class="flex items-center gap-3 md:gap-4 cursor-pointer group">
            <img src="{{ asset('logoatas.png') }}" alt="Tr Adventure Logo" class="h-9 md:h-10 object-contain drop-shadow-sm group-hover:scale-105 transition-transform duration-300">
            <div class="flex flex-col justify-center">
                <h1 class="font-extrabold text-[#5C3A21] text-sm md:text-base leading-none tracking-tight mb-0.5">
                    TR Adventure
                </h1>
                <span class="text-[#B07A2A] text-[8px] md:text-[9px] tracking-widest font-bold uppercase">
                    Discover Indonesia
                </span>
            </div>
        </a>

        <div class="hidden lg:flex items-center gap-1 xl:gap-2">
            
            <a href="{{ route('home') }}" class="px-4 py-2 text-sm font-semibold rounded-full transition-all duration-300 {{ request()->routeIs('home') ? 'text-white bg-gradient-to-r from-[#B07A2A] to-[#9B5C1B] shadow-md' : 'text-[#5C3A21] hover:bg-[#B07A2A]/15 hover:text-[#8B5920] hover:-translate-y-0.5' }}">
                Beranda
            </a>
            
            <a href="{{ route('peta-jelajah.index') }}" class="px-4 py-2 text-sm font-semibold rounded-full transition-all duration-300 {{ request()->routeIs('peta-jelajah.*') ? 'text-white bg-gradient-to-r from-[#B07A2A] to-[#9B5C1B] shadow-md' : 'text-[#5C3A21] hover:bg-[#B07A2A]/15 hover:text-[#8B5920] hover:-translate-y-0.5' }}">
                Peta Jelajah
            </a>
            
            <a href="{{ route('kuis.index') }}" class="px-4 py-2 text-sm font-semibold rounded-full transition-all duration-300 {{ request()->routeIs('kuis.*') ? 'text-white bg-gradient-to-r from-[#B07A2A] to-[#9B5C1B] shadow-md' : 'text-[#5C3A21] hover:bg-[#B07A2A]/15 hover:text-[#8B5920] hover:-translate-y-0.5' }}">
                Wawasan & Kuis
            </a>
        </div>

        <div class="flex items-center gap-3">
            
            <a href="{{ route('admin.login') }}" class="hidden md:flex items-center justify-center px-5 py-2 text-sm font-bold text-[#5C3A21] border-2 border-[#B07A2A]/40 rounded-full hover:border-[#B07A2A] hover:bg-[#B07A2A]/10 hover:-translate-y-0.5 transition-all duration-300 gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                Admin Login
            </a>
            
            <button class="lg:hidden p-2 text-[#5C3A21] bg-[#B07A2A]/10 rounded-full hover:bg-[#B07A2A]/20 transition duration-300 focus:outline-none">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 6h16M4 12h16M4 18h16"></path></svg>
            </button>

        </div>
    </div>
</nav>