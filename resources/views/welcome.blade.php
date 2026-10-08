<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi UNUGHA</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans text-gray-900 antialiased selection:bg-blue-200 selection:text-blue-900">

    <!-- NAVIGATION BAR (Glassmorphism Effect) -->
    <nav class="fixed w-full z-50 bg-white/80 backdrop-blur-md border-b border-gray-100 transition-all">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                
                <!-- Bagian Kiri: Logo & Judul -->
                <div class="flex items-center gap-3">
                    <img src="logo-unugha.jpg" alt="Logo UNUGHA" class="w-12 h-12 object-contain drop-shadow-sm" onerror="this.onerror=null; this.outerHTML='<div class=\'w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold text-xs\'>UNUGHA</div>'">
                    <div>
                        <span class="font-bold text-xl tracking-tight text-gray-900 block">Sistem Informasi</span>
                        <span class="text-xs font-medium text-blue-600 block uppercase tracking-wider">UNUGHA</span>
                    </div>
                </div>

                <!-- Bagian Tengah: Menu (Desktop) -->
                <div class="hidden md:flex space-x-8 items-center font-medium text-gray-600">
                    <a href="#" class="text-blue-600 font-semibold">Home</a>
                    <a href="#katalog" class="hover:text-blue-600 transition-colors">Katalog</a>
                    <a href="#" class="hover:text-blue-600 transition-colors">Kontak</a>
                </div>

                <!-- Bagian Kanan: Tombol Login (Desktop) & Hamburger (Mobile) -->
                <div class="flex items-center gap-4">
                    <!-- Tombol Login (Sembunyi di HP, Muncul di Laptop) -->
                    <a href="#" class="hidden md:inline-flex items-center justify-center px-6 py-2.5 text-sm font-semibold text-white bg-blue-600 rounded-full hover:bg-blue-700 transition-all duration-300 shadow-md hover:shadow-lg">
                        Login
                    </a>
                    
                    <!-- Tombol Hamburger Garis Tiga (Hanya muncul di HP) -->
                    <button id="mobile-menu-button" class="md:hidden p-2 text-gray-600 hover:text-blue-600 focus:outline-none">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <!-- Ikon Garis Tiga -->
                            <path id="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Panel (Milik HP, Tersembunyi secara default) -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100 shadow-lg absolute w-full">
            <div class="px-4 pt-2 pb-6 space-y-2">
                <a href="#" class="block px-3 py-3 text-base font-semibold text-blue-600 bg-blue-50 rounded-lg">Home</a>
                <a href="#katalog" class="block px-3 py-3 text-base font-medium text-gray-700 hover:bg-gray-50 rounded-lg">Katalog</a>
                <a href="#" class="block px-3 py-3 text-base font-medium text-gray-700 hover:bg-gray-50 rounded-lg">Kontak</a>
                <div class="pt-2">
                    <a href="#" class="block w-full text-center px-6 py-3 text-base font-semibold text-white bg-blue-600 rounded-xl hover:bg-blue-700 shadow-md">
                        Login
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section class="pt-40 pb-20 px-4 text-center max-w-4xl mx-auto">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-50 text-blue-600 text-sm font-semibold mb-6 border border-blue-100">
            <span class="relative flex h-2 w-2">
              <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
              <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-600"></span>
            </span>
            Portal Terintegrasi
        </div>
        <h1 class="text-5xl md:text-6xl font-extrabold tracking-tight text-gray-900 mb-6 leading-tight">
            Selamat Datang di Portal <br class="hidden md:block">
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600">UNUGHA</span>
        </h1>
        <p class="text-lg text-gray-500 mb-10 max-w-2xl mx-auto">
            Satu portal terintegrasi untuk mengakses data akademik, e-katalog perpustakaan, hingga layanan informasi di lingkungan UNUGHA Cilacap.
        </p>
    </section>

    <!-- KONTEN UTAMA / 3 CARD GRID (Sesuai Syarat Dosen) -->
    <section id="katalog" class="py-16 px-4 bg-white border-t border-gray-100">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900">Layanan Tersedia</h2>
                <p class="text-gray-500 mt-3">Pilih layanan yang Anda butuhkan hari ini.</p>
            </div>

            <!-- Grid CSS: 1 kolom di HP, 3 kolom di Laptop -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <!-- Card 1 -->
                <div class="group p-8 bg-white rounded-3xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center text-2xl mb-6 group-hover:scale-110 transition-transform">
                        📚
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Sistem Akademik</h3>
                    <p class="text-gray-500 leading-relaxed">
                        Akses informasi nilai, jadwal kuliah, dan kelola Kartu Rencana Studi (KRS) dengan mudah dan terintegrasi.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="group p-8 bg-white rounded-3xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <div class="w-14 h-14 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center text-2xl mb-6 group-hover:scale-110 transition-transform">
                        🌐
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">E-Katalog Perpustakaan</h3>
                    <p class="text-gray-500 leading-relaxed">
                        Cari dan pinjam berbagai koleksi buku, jurnal, dan referensi digital untuk mendukung penelitian mahasiswa.
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="group p-8 bg-white rounded-3xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <div class="w-14 h-14 bg-rose-50 text-rose-600 rounded-2xl flex items-center justify-center text-2xl mb-6 group-hover:scale-110 transition-transform">
                        🎧
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Pusat Bantuan</h3>
                    <p class="text-gray-500 leading-relaxed">
                        Layanan pengaduan dan pusat informasi kontak kampus untuk membantu kelancaran administrasi Anda.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="py-8 text-center text-gray-400 bg-white border-t border-gray-100">
        <p class="text-sm">&copy; 2026 Universitas Nahdlatul Ulama Al Ghazali. Tugas Web Programming.</p>
    </footer>

    <!-- SCRIPT HAMBURGER MENU -->
    <script>
        const btn = document.getElementById('mobile-menu-button');
        const menu = document.getElementById('mobile-menu');
        const icon = document.getElementById('menu-icon');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
            
            // Ubah ikon dari garis tiga menjadi tanda silang (X) saat menu terbuka
            if (menu.classList.contains('hidden')) {
                icon.setAttribute('d', 'M4 6h16M4 12h16M4 18h16');
            } else {
                icon.setAttribute('d', 'M6 18L18 6M6 6l12 12');
            }
        });
    </script>
</body>
</html>