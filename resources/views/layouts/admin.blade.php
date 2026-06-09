<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Tr Adventure</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#F6F1E3] text-gray-800 font-sans h-screen flex overflow-hidden">

    <aside class="w-72 bg-white border-r border-gray-100 shadow-[4px_0_24px_rgba(0,0,0,0.02)] flex flex-col justify-between hidden md:flex z-20 transition-all duration-300">
        <div>
            <div class="h-24 flex items-center px-8 border-b border-gray-100/70">
                <img src="{{ asset('logoatas.png') }}" alt="Tr Logo" class="w-10 h-10 object-contain mr-3 drop-shadow-sm">
                <div>
                    <h2 class="text-2xl font-serif font-bold text-[#5C3A21] leading-tight">Tr Admin</h2>
                    <p class="text-[10px] font-bold text-[#B07A2A] uppercase tracking-widest mt-0.5">Control Panel</p>
                </div>
            </div>

            <nav class="pt-8 pb-4 space-y-2 flex flex-col">
                <p class="text-[11px] font-bold text-gray-400 uppercase tracking-widest mb-3 px-8">Manajemen Konten</p>
                
                <div class="px-4">
                    <a href="/admin/beranda" class="{{ request()->is('admin/beranda') ? 'bg-gradient-to-r from-[#B07A2A] to-[#8B5920] text-white shadow-md shadow-[#B07A2A]/20' : 'text-gray-500 hover:bg-[#F6F1E3]/50 hover:text-[#B07A2A]' }} flex items-center gap-3 px-4 py-3.5 rounded-xl font-bold transition-all duration-300 group">
                        <svg class="w-5 h-5 {{ request()->is('admin/beranda') ? 'text-white' : 'text-gray-400 group-hover:text-[#B07A2A]' }} transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        Kelola Beranda
                    </a>
                </div>

                <div class="px-4">
                    <a href="/admin/kuis" class="{{ request()->is('admin/kuis') ? 'bg-gradient-to-r from-[#B07A2A] to-[#8B5920] text-white shadow-md shadow-[#B07A2A]/20' : 'text-gray-500 hover:bg-[#F6F1E3]/50 hover:text-[#B07A2A]' }} flex items-center gap-3 px-4 py-3.5 rounded-xl font-bold transition-all duration-300 group">
                        <svg class="w-5 h-5 {{ request()->is('admin/kuis') ? 'text-white' : 'text-gray-400 group-hover:text-[#B07A2A]' }} transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        Kelola Kuis
                    </a>
                </div>
            </nav>
        </div>

        <div class="p-6 border-t border-gray-100/70 bg-gray-50/30">
            <form action="/admin/logout" method="POST">
                @csrf
                <button type="submit" class="flex items-center justify-center gap-2 w-full px-4 py-3.5 text-red-600 bg-red-50 hover:bg-red-600 hover:text-white rounded-xl font-bold transition-all duration-300 border border-red-100 hover:border-transparent group">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                    </svg>
                    Keluar Sistem
                </button>
            </form>
        </div>
    </aside>

    <main class="flex-1 flex flex-col h-screen overflow-hidden bg-[#F6F1E3] relative">
        <header class="h-16 bg-white shadow-sm flex items-center px-6 md:hidden z-30">
            <img src="{{ asset('logoatas.png') }}" alt="Tr Logo" class="w-8 h-8 object-contain mr-3">
            <h2 class="text-xl font-bold text-[#B07A2A]">Tr Admin</h2>
        </header>

        <div class="flex-1 overflow-y-auto p-6 md:p-10 relative">
            @yield('content')
        </div>
    </main>

</body>
</html>