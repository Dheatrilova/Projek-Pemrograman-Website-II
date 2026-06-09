@extends('layouts.admin')

@section('content')
    <div class="max-w-6xl mx-auto pb-16">
        
        <div class="mb-10 flex flex-col md:flex-row md:items-end justify-between gap-4">
            <div>
                <h1 class="text-3xl md:text-4xl font-serif font-bold text-[#5C3A21] mb-2">Manajemen Kuis</h1>
                <p class="text-gray-500 font-medium">Kelola bank soal untuk menguji wawasan Nusantara pengunjung.</p>
            </div>
            <div class="bg-white px-5 py-2.5 rounded-xl border border-gray-100 shadow-sm flex items-center gap-3">
                <div class="w-10 h-10 bg-[#B07A2A]/10 rounded-lg flex items-center justify-center text-[#B07A2A]">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path></svg>
                </div>
                <div>
                    <p class="text-xs text-gray-400 font-bold uppercase tracking-wider">Total Soal</p>
                    <p class="text-xl font-bold text-[#5C3A21]">{{ $soal->count() }} Item</p>
                </div>
            </div>
        </div>

        @if(session('success'))
        <div class="mb-8 p-4 bg-green-50 border border-green-200 text-green-700 rounded-2xl font-medium flex items-center gap-3 shadow-sm animate-fade-in">
            <div class="bg-green-100 p-1.5 rounded-full">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
            </div>
            {{ session('success') }}
        </div>
        @endif

        <div class="bg-white rounded-[2rem] p-8 md:p-10 shadow-xl shadow-[#B07A2A]/5 border border-[#B07A2A]/10 mb-12 relative overflow-hidden">
            <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-bl from-[#B07A2A]/10 to-transparent rounded-bl-full pointer-events-none"></div>

            <div class="mb-8 pb-5 border-b border-gray-100 flex items-center gap-3">
                <div class="p-2.5 bg-[#B07A2A]/10 text-[#B07A2A] rounded-xl">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h2 class="text-2xl font-bold text-[#5C3A21]">Buat Soal Kuis Baru</h2>
            </div>
            
            <form action="/admin/kuis" method="POST">
                @csrf
                
                <div class="grid grid-cols-1 gap-8">
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="md:col-span-1">
                            <label class="block text-sm font-bold text-gray-700 mb-2">Kategori Kuis</label>
                            <select name="kategori" class="w-full p-3.5 border border-gray-200 rounded-xl bg-gray-50 focus:bg-white focus:border-[#B07A2A] focus:ring-2 focus:ring-[#B07A2A]/20 transition-all outline-none text-gray-700 cursor-pointer" required>
                                <option value="" class="text-gray-400">-- Pilih Kategori --</option>
                                <option value="Sejarah & Budaya">Sejarah & Budaya</option>
                                <option value="Geografi & Alam">Geografi & Alam</option>
                                <option value="Kuliner & Budaya">Kuliner & Budaya</option>
                            </select>
                        </div>

                        <div class="md:col-span-2">
                            <label class="block text-sm font-bold text-gray-700 mb-2">Teks Pertanyaan</label>
                            <textarea name="pertanyaan" rows="3" class="w-full p-4 border border-gray-200 rounded-xl bg-gray-50 focus:bg-white focus:border-[#B07A2A] focus:ring-2 focus:ring-[#B07A2A]/20 transition-all outline-none resize-none text-gray-800" placeholder="Tuliskan pertanyaan yang menantang di sini..." required></textarea>
                        </div>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-2xl border border-gray-100">
                        <h3 class="text-sm font-bold text-gray-500 uppercase tracking-wider mb-5 flex items-center gap-2">
                            <svg class="w-5 h-5 text-[#B07A2A]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path></svg>
                            Opsi Jawaban
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div class="relative">
                                <span class="absolute left-4 top-3.5 text-sm font-bold text-gray-400">A.</span>
                                <input type="text" name="opsi_a" class="w-full pl-10 pr-4 py-3.5 border border-gray-200 rounded-xl bg-white focus:border-[#B07A2A] focus:ring-2 focus:ring-[#B07A2A]/20 transition-all outline-none" placeholder="Jawaban Opsi A" required>
                            </div>
                            <div class="relative">
                                <span class="absolute left-4 top-3.5 text-sm font-bold text-gray-400">B.</span>
                                <input type="text" name="opsi_b" class="w-full pl-10 pr-4 py-3.5 border border-gray-200 rounded-xl bg-white focus:border-[#B07A2A] focus:ring-2 focus:ring-[#B07A2A]/20 transition-all outline-none" placeholder="Jawaban Opsi B" required>
                            </div>
                            <div class="relative">
                                <span class="absolute left-4 top-3.5 text-sm font-bold text-gray-400">C.</span>
                                <input type="text" name="opsi_c" class="w-full pl-10 pr-4 py-3.5 border border-gray-200 rounded-xl bg-white focus:border-[#B07A2A] focus:ring-2 focus:ring-[#B07A2A]/20 transition-all outline-none" placeholder="Jawaban Opsi C" required>
                            </div>
                            <div class="relative">
                                <span class="absolute left-4 top-3.5 text-sm font-bold text-gray-400">D.</span>
                                <input type="text" name="opsi_d" class="w-full pl-10 pr-4 py-3.5 border border-gray-200 rounded-xl bg-white focus:border-[#B07A2A] focus:ring-2 focus:ring-[#B07A2A]/20 transition-all outline-none" placeholder="Jawaban Opsi D" required>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row items-center justify-between gap-6 bg-green-50/50 p-6 rounded-2xl border border-green-100">
                        <div class="w-full md:w-1/2">
                            <label class="block text-sm font-bold text-green-800 mb-2">Kunci Jawaban Benar</label>
                            <select name="jawaban_benar" class="w-full p-3.5 border border-green-200 rounded-xl bg-white text-green-700 font-bold focus:border-green-500 focus:ring-2 focus:ring-green-500/20 transition-all outline-none cursor-pointer shadow-sm" required>
                                <option value="" class="text-gray-400 font-normal">-- Pilih Kunci Jawaban --</option>
                                <option value="A">Opsi A</option>
                                <option value="B">Opsi B</option>
                                <option value="C">Opsi C</option>
                                <option value="D">Opsi D</option>
                            </select>
                        </div>
                        
                        <div class="w-full md:w-auto md:mt-7">
                            <button type="submit" class="w-full md:w-auto bg-[#B07A2A] text-white px-10 py-3.5 rounded-xl font-bold hover:bg-[#5C3A21] hover:-translate-y-1 transition-all duration-300 shadow-lg shadow-[#B07A2A]/30 flex items-center justify-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3 3m3 3V4"></path></svg>
                                Simpan ke Database
                            </button>
                        </div>
                    </div>

                </div>
            </form>
        </div>

        <div class="bg-white rounded-[2rem] shadow-sm border border-gray-100 overflow-hidden">
            <div class="p-8 border-b border-gray-100 bg-gray-50/50">
                <h2 class="text-xl font-bold text-[#5C3A21] flex items-center gap-2">
                    <svg class="w-6 h-6 text-[#B07A2A]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                    Bank Soal Tersimpan
                </h2>
            </div>
            
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-50 text-gray-500 text-[11px] font-bold uppercase tracking-widest border-b border-gray-200">
                            <th class="p-5 w-48">Kategori</th>
                            <th class="p-5">Detail Pertanyaan</th>
                            <th class="p-5 text-center">Kunci</th>
                            <th class="p-5 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm">
                        @forelse($soal as $item)
                        <tr class="border-b border-gray-50 hover:bg-[#F6F1E3]/30 transition-colors group">
                            <td class="p-5">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-[#B07A2A]/10 text-[#B07A2A] font-bold text-xs">
                                    {{ $item->kategori }}
                                </span>
                            </td>
                            <td class="p-5">
                                <p class="text-gray-800 font-medium line-clamp-2">{{ $item->pertanyaan }}</p>
                                <div class="flex items-center gap-3 mt-2 text-[11px] text-gray-400">
                                    <span class="{{ $item->jawaban_benar == 'A' ? 'text-green-600 font-bold' : '' }}">A. {{ Str::limit($item->opsi_a, 15) }}</span>
                                    <span class="{{ $item->jawaban_benar == 'B' ? 'text-green-600 font-bold' : '' }}">B. {{ Str::limit($item->opsi_b, 15) }}</span>
                                    <span class="{{ $item->jawaban_benar == 'C' ? 'text-green-600 font-bold' : '' }}">C. {{ Str::limit($item->opsi_c, 15) }}</span>
                                    <span class="{{ $item->jawaban_benar == 'D' ? 'text-green-600 font-bold' : '' }}">D. {{ Str::limit($item->opsi_d, 15) }}</span>
                                </div>
                            </td>
                            <td class="p-5 text-center">
                                <div class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-green-100 text-green-600 font-bold border border-green-200">
                                    {{ $item->jawaban_benar }}
                                </div>
                            </td>
                            <td class="p-5 text-right">
                                <form action="/admin/kuis/{{ $item->id }}" method="POST" onsubmit="return confirm('Data yang dihapus tidak dapat dikembalikan. Lanjutkan?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-2 text-gray-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition-all tooltip relative" title="Hapus Soal">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="p-16">
                                <div class="flex flex-col items-center justify-center text-center">
                                    <div class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center mb-4 border-2 border-dashed border-gray-200">
                                        <svg class="w-10 h-10 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path></svg>
                                    </div>
                                    <p class="text-gray-500 font-bold text-lg mb-1">Tidak Ada Data</p>
                                    <p class="text-sm text-gray-400 max-w-sm">Belum ada satupun soal kuis yang tersimpan. Silakan gunakan form di atas untuk mulai membuat bank soal.</p>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection