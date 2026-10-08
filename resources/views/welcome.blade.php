<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi UNUGHA</title>
    <!-- Menggunakan Tailwind CSS sesuai instruksi dosen -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans text-gray-900 antialiased">

    <!-- 1. NAVIGATION BAR -->
    <nav class="fixed w-full z-50 bg-white shadow-md border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                
                <!-- Logo & Judul "Sistem Informasi UNUGHA" -->
                <div class="flex items-center gap-4">
                    <img src="{{ asset('logo-unugha.jpg') }}" alt="Logo UNUGHA" class="w-12 h-12 object-contain shadow-sm">
                    <div>
                        <span class="font-extrabold text-xl text-gray-900 block tracking-wide">Sistem Informasi</span>
                        <span class="text-xs font-bold text-blue-700 block uppercase tracking-widest">UNUGHA</span>
                    </div>
                </div>

                <!-- Menu (Home, Katalog, Kontak) -->
                <div class="hidden md:flex space-x-8 items-center font-semibold text-gray-600">
                    <a href="#" class="text-blue-700 border-b-2 border-blue-700 pb-1">Home</a>
                    <a href="#katalog" class="hover:text-blue-700 transition">Katalog</a>
                    <a href="#" class="hover:text-blue-700 transition">Kontak</a>
                </div>

                <!-- Tombol "Login" -->
                <div>
                    <a href="#" class="px-7 py-2.5 text-sm font-bold text-white bg-blue-700 rounded-lg hover:bg-blue-800 shadow-lg transition">Login</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION (Tampilan Atas) -->
    <section class="relative pt-32 pb-32 lg:pt-48 lg:pb-40 bg-blue-900">
        <!-- Gambar Latar Belakang -->
        <div class="absolute inset-0 overflow-hidden">
            <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?auto=format&fit=crop&w=1920&q=80" alt="Background Kampus" class="w-full h-full object-cover opacity-20">
        </div>
        
        <div class="relative max-w-7xl mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-4 drop-shadow-md">
                Sistem Informasi Terpadu
            </h1>
            <h2 class="text-2xl md:text-4xl font-bold text-yellow-400 mb-6 drop-shadow-md">
                Universitas Nahdlatul Ulama Al Ghazali
            </h2>
            <p class="text-lg text-blue-100 max-w-2xl mx-auto mb-8">
                Pusat layanan akademik dan informasi kampus yang cepat, mudah, dan terintegrasi.
            </p>
        </div>
    </section>

    <!-- 2. TIGA BUAH CARD INFORMASI (Grid System) -->
    <section id="katalog" class="py-12 px-4 bg-gray-100">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 -mt-28 relative z-10">
                
                <!-- Card 1 -->
                <div class="bg-white p-8 rounded-2xl shadow-xl border-t-4 border-blue-600 hover:-translate-y-2 transition-transform duration-300">
                    <div class="text-5xl mb-5">🎓</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Sistem Akademik</h3>
                    <p class="text-gray-500 leading-relaxed text-sm">
                        Kelola Kartu Rencana Studi (KRS), lihat nilai, dan pantau jadwal perkuliahan secara mandiri.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white p-8 rounded-2xl shadow-xl border-t-4 border-emerald-500 hover:-translate-y-2 transition-transform duration-300">
                    <div class="text-5xl mb-5">📚</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Katalog Perpustakaan</h3>
                    <p class="text-gray-500 leading-relaxed text-sm">
                        Cari dan akses berbagai koleksi buku, jurnal, dan referensi digital untuk mendukung perkuliahan.
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="bg-white p-8 rounded-2xl shadow-xl border-t-4 border-rose-500 hover:-translate-y-2 transition-transform duration-300">
                    <div class="text-5xl mb-5">🎧</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Pusat Bantuan</h3>
                    <p class="text-gray-500 leading-relaxed text-sm">
                        Layanan informasi kontak kampus untuk membantu kelancaran administrasi Anda.
                    </p>
                </div>

            </div>
        </div>
    </section>
    
    <!-- FOOTER -->
    <footer class="bg-white py-8 text-center text-gray-500 text-sm border-t border-gray-200 mt-10">
        <p>&copy; 2026 Sistem Informasi UNUGHA.</p>
    </footer>

</body>
</html>