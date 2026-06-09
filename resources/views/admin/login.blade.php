<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Tr Adventure</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-[#F6F1E3] text-adv-dark font-sans flex items-center justify-center min-h-screen relative overflow-hidden">
    
    <!-- Background Elements for decoration -->
    <div class="absolute top-[-10%] left-[-10%] w-96 h-96 bg-[#D4A373]/20 rounded-full blur-3xl"></div>
    <div class="absolute bottom-[-10%] right-[-10%] w-96 h-96 bg-[#B07A2A]/20 rounded-full blur-3xl"></div>

    <div class="relative z-10 w-full max-w-md px-6">
        <div class="bg-white/80 backdrop-blur-md p-8 md:p-10 rounded-[2rem] shadow-2xl border border-white/50 relative overflow-hidden">
            <!-- Decorative header border -->
            <div class="absolute top-0 inset-x-0 h-2 bg-gradient-to-r from-[#B07A2A] to-[#8B5920]"></div>
            
            <div class="text-center mb-8">
                <img src="{{ asset('logoatas.png') }}" alt="Tr Adventure Logo" class="h-16 mx-auto mb-4 object-contain">
                <h2 class="text-3xl font-serif font-bold text-[#5C3A21] mb-2">Admin Panel</h2>
                <p class="text-[#8B5920] text-sm">Masuk untuk mengelola Tr Adventure</p>
            </div>

            <!-- Error Messages -->
            @if($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-xl relative mb-6" role="alert">
                    <span class="block sm:inline">{{ $errors->first() }}</span>
                </div>
            @endif

            <form action="/admin/login" method="POST" class="space-y-5">
                @csrf
                <div>
                    <label for="username" class="block text-sm font-semibold text-[#5C3A21] mb-1.5">Username</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                        </div>
                        <input type="text" name="username" id="username" placeholder="Masukkan username admin" class="w-full pl-11 pr-4 py-3 bg-white/50 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#B07A2A] focus:border-transparent transition duration-300" required>
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-sm font-semibold text-[#5C3A21] mb-1.5">Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" /></svg>
                        </div>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="w-full pl-11 pr-4 py-3 bg-white/50 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#B07A2A] focus:border-transparent transition duration-300" required>
                    </div>
                </div>

                <div class="pt-2">
                    <button type="submit" class="w-full bg-gradient-to-r from-[#B07A2A] to-[#8B5920] text-white py-3.5 rounded-xl font-bold shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all duration-300">
                        Masuk
                    </button>
                </div>
            </form>
            
            <div class="mt-8 text-center">
                <a href="{{ route('home') }}" class="text-sm font-medium text-[#8B5920] hover:text-[#5C3A21] transition duration-300 flex items-center justify-center gap-1">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    Kembali ke Beranda
                </a>
            </div>
        </div>
    </div>
</body>
</html>