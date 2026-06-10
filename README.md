<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>PPDB Online - MI Hidayatul Ulum | Pendaftaran Peserta Didik Baru</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Google Fonts - Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }
        html {
            scroll-behavior: smooth;
        }
        .hero-gradient {
            background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%);
        }
        .nav-link {
            transition: all 0.2s ease;
            position: relative;
        }
        .nav-link:hover {
            color: #f97316;
        }
        .nav-link.active {
            color: #f97316;
        }
        .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            right: 0;
            height: 2px;
            background-color: #f97316;
            border-radius: 2px;
        }
        .btn-primary {
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }
        .fade-in-up {
            animation: fadeInUp 0.6s ease-out;
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .stat-card {
            transition: all 0.3s ease;
        }
        .stat-card:hover {
            transform: translateY(-8px);
        }
        
        /* Dropdown Menu Styles */
        .dropdown-menu {
            transition: all 0.3s ease;
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px);
        }
        .group:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        .submenu {
            transition: all 0.3s ease;
            opacity: 0;
            visibility: hidden;
            transform: translateX(-10px);
        }
        .relative-group:hover .submenu {
            opacity: 1;
            visibility: visible;
            transform: translateX(0);
        }
    </style>
</head>
<body class="bg-gradient-to-b from-green-50 to-gray-100">

    <!-- Navbar -->
    <nav class="bg-green-600 shadow-lg fixed top-0 left-0 right-0 z-50">
        <div class="container mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <img class="w-10 h-10 rounded-full bg-white p-1 shadow-sm object-contain" 
                         src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg1YyQtJSBc4S_vAvXQvCTY9g9WoHxLAumSJc5-6mXZEy2Z1F8KSJjb91fM67ubjJ5Lyb7fgeM_LSu76hhuYjQb7AYHcg6A6H4cxzVXPN29Fd3Zpa50dtAegesiqvWJNM-ivoQkSil1vvV3As5SOEMIc03w7QH8RPn7TyNGfefGPrah7IzRrGpWUvF3Gw8/s320/1730258986091.png" 
                         alt="Logo">
                    <span class="text-white font-bold text-lg">MI HIDAYATUL ULUM</span>
                </div>

                <!-- Desktop Menu -->
                <ul class="hidden md:flex space-x-6">
                    <li>
                        <a href="#home" class="text-white hover:text-orange-200 flex items-center transition">
                            <i class="fas fa-home mr-1"></i> Home
                        </a>
                    </li>

                    <!-- Profil Dropdown -->
                    <li class="relative group">
                        <a href="#" class="text-white hover:text-orange-200 flex items-center transition cursor-pointer">
                            <i class="fas fa-user mr-1"></i> Profil
                            <i class="fas fa-chevron-down ml-1 text-xs"></i>
                        </a>
                        <ul class="dropdown-menu absolute left-0 mt-2 w-56 bg-white text-gray-800 rounded-lg shadow-xl z-50">
                            <li><a href="#" class="flex items-center px-4 py-2 text-sm hover:bg-green-50 hover:text-green-600 rounded-t-lg transition"><i class="fas fa-bullseye mr-2 text-green-600"></i> Visi & Misi</a></li>
                            <li><a href="#" class="flex items-center px-4 py-2 text-sm hover:bg-green-50 hover:text-green-600 transition"><i class="fas fa-school mr-2 text-green-600"></i> Sejarah</a></li>
                            <li><a href="#" class="flex items-center px-4 py-2 text-sm hover:bg-green-50 hover:text-green-600 rounded-b-lg transition"><i class="fas fa-microphone mr-2 text-green-600"></i> Sambutan Kepsek</a></li>
                        </ul>
                    </li>

                    <!-- Program Madrasah Dropdown -->
                    <li class="relative group">
                        <a href="#" class="text-white hover:text-orange-200 flex items-center transition cursor-pointer">
                            <i class="fas fa-book mr-1"></i> Program Madrasah
                            <i class="fas fa-chevron-down ml-1 text-xs"></i>
                        </a>
                        <ul class="dropdown-menu absolute left-0 mt-2 w-64 bg-white text-gray-800 rounded-lg shadow-xl z-50">
                            <!-- Ekstrakurikuler Submenu -->
                            <li class="relative-group">
                                <a href="#" class="flex items-center justify-between px-4 py-2 text-sm hover:bg-green-50 hover:text-green-600 rounded-t-lg transition">
                                    <span><i class="fas fa-users mr-2 text-green-600"></i> Ekstrakurikuler</span>
                                    <i class="fas fa-chevron-right text-xs"></i>
                                </a>
                                <ul class="submenu absolute left-full top-0 ml-1 w-56 bg-white text-gray-800 rounded-lg shadow-xl">
                                    <li><a href="#" class="flex items-center px-4 py-2 text-sm hover:bg-green-50 hover:text-green-600 rounded-t-lg transition"><i class="fas fa-campground mr-2 text-green-600"></i> Pramuka</a></li>
                                    <li><a href="#" class="flex items-center px-4 py-2 text-sm hover:bg-green-50 hover:text-green-600 transition"><i class="fas fa-desktop mr-2 text-green-600"></i> TIK Komputer</a></li>
                                    <li><a href="#" class="flex items-center px-4 py-2 text-sm hover:bg-green-50 hover:text-green-600 transition"><i class="fas fa-quran mr-2 text-green-600"></i> Qiraat</a></li>
                                    <li><a href="#" class="flex items-center px-4 py-2 text-sm hover:bg-green-50 hover:text-green-600 rounded-b-lg transition"><i class="fas fa-drum mr-2 text-green-600"></i> Hadroh</a></li>
                                </ul>
                            </li>
                            <!-- Program Rumah Unggulan Submenu -->
                            <li class="relative-group">
                                <a href="#" class="flex items-center justify-between px-4 py-2 text-sm hover:bg-green-50 hover:text-green-600 rounded-b-lg transition">
                                    <span><i class="fas fa-home mr-2 text-green-600"></i> Program Rumah Unggulan</span>
                                    <i class="fas fa-chevron-right text-xs"></i>
                                </a>
                                <ul class="submenu absolute left-full top-0 ml-1 w-56 bg-white text-gray-800 rounded-lg shadow-xl">
                                    <li><a href="#" class="flex items-center px-4 py-2 text-sm hover:bg-green-50 hover:text-green-600 rounded-t-lg transition"><i class="fas fa-laptop mr-2 text-green-600"></i> Rumah Digital</a></li>
                                    <li><a href="#" class="flex items-center px-4 py-2 text-sm hover:bg-green-50 hover:text-green-600 rounded-b-lg transition"><i class="fas fa-users mr-2 text-green-600"></i> Rumah Sosial Budaya</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <!-- Links lainnya -->
                    <li>
                        <a href="#syarat" class="text-white hover:text-orange-200 flex items-center transition">
                            <i class="fas fa-check-circle mr-1"></i> Syarat
                        </a>
                    </li>
                    <li>
                        <a href="/MIHidayatulUlumSambong/formulir" class="text-white hover:text-orange-200 flex items-center transition">
                            <i class="fas fa-list-alt mr-1"></i> Formulir
                        </a>
                    </li>
                    <li>
                        <a href="#alur" class="text-white hover:text-orange-200 flex items-center transition">
                            <i class="fas fa-road mr-1"></i> Cara Daftar
                        </a>
                    </li>
                    <li>
                        <a href="#statistik" class="text-white hover:text-orange-200 flex items-center transition">
                            <i class="fas fa-chart-bar mr-1"></i> Statistik
                        </a>
                    </li>
                    <li>
                        <a href="#info" class="text-white hover:text-orange-200 flex items-center transition">
                            <i class="fas fa-info-circle mr-1"></i> Info
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-white hover:text-orange-200 flex items-center transition">
                            <i class="fas fa-sign-in-alt mr-1"></i> Login
                        </a>
                    </li>
                </ul>

                <!-- Hamburger Menu for Mobile -->
                <div class="md:hidden">
                    <button id="menu-toggle" class="text-white text-2xl focus:outline-none">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden mt-4 pt-4 border-t border-green-500">
                <a href="#home" class="mobile-nav-link block py-2 text-white hover:text-orange-200 transition">
                    <i class="fas fa-home mr-2"></i> Home
                </a>
                
                <!-- Profil Mobile Dropdown -->
                <div class="relative">
                    <button class="mobile-dropdown-btn w-full text-left py-2 text-white hover:text-orange-200 transition flex items-center justify-between">
                        <span><i class="fas fa-user mr-2"></i> Profil</span>
                        <i class="fas fa-chevron-down text-sm"></i>
                    </button>
                    <div class="mobile-dropdown-content hidden pl-6 space-y-1 mb-2">
                        <a href="#" class="block py-1 text-white/90 hover:text-orange-200 text-sm"><i class="fas fa-bullseye mr-2"></i> Visi & Misi</a>
                        <a href="#" class="block py-1 text-white/90 hover:text-orange-200 text-sm"><i class="fas fa-school mr-2"></i> Sejarah</a>
                        <a href="#" class="block py-1 text-white/90 hover:text-orange-200 text-sm"><i class="fas fa-microphone mr-2"></i> Sambutan Kepsek</a>
                    </div>
                </div>

                <!-- Program Madrasah Mobile Dropdown -->
                <div class="relative">
                    <button class="mobile-dropdown-btn w-full text-left py-2 text-white hover:text-orange-200 transition flex items-center justify-between">
                        <span><i class="fas fa-book mr-2"></i> Program Madrasah</span>
                        <i class="fas fa-chevron-down text-sm"></i>
                    </button>
                    <div class="mobile-dropdown-content hidden pl-6 space-y-1 mb-2">
                        <div class="relative">
                            <button class="sub-dropdown-btn w-full text-left py-1 text-white/90 hover:text-orange-200 text-sm flex items-center justify-between">
                                <span><i class="fas fa-users mr-2"></i> Ekstrakurikuler</span>
                                <i class="fas fa-chevron-right text-xs"></i>
                            </button>
                            <div class="sub-dropdown-content hidden pl-6 space-y-1">
                                <a href="#" class="block py-1 text-white/80 hover:text-orange-200 text-xs"><i class="fas fa-campground mr-2"></i> Pramuka</a>
                                <a href="#" class="block py-1 text-white/80 hover:text-orange-200 text-xs"><i class="fas fa-desktop mr-2"></i> TIK Komputer</a>
                                <a href="#" class="block py-1 text-white/80 hover:text-orange-200 text-xs"><i class="fas fa-quran mr-2"></i> Qiraat</a>
                                <a href="#" class="block py-1 text-white/80 hover:text-orange-200 text-xs"><i class="fas fa-drum mr-2"></i> Hadroh</a>
                            </div>
                        </div>
                        <div class="relative">
                            <button class="sub-dropdown-btn w-full text-left py-1 text-white/90 hover:text-orange-200 text-sm flex items-center justify-between">
                                <span><i class="fas fa-home mr-2"></i> Program Rumah Unggulan</span>
                                <i class="fas fa-chevron-right text-xs"></i>
                            </button>
                            <div class="sub-dropdown-content hidden pl-6 space-y-1">
                                <a href="#" class="block py-1 text-white/80 hover:text-orange-200 text-xs"><i class="fas fa-laptop mr-2"></i> Rumah Digital</a>
                                <a href="#" class="block py-1 text-white/80 hover:text-orange-200 text-xs"><i class="fas fa-users mr-2"></i> Rumah Sosial Budaya</a>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="#syarat" class="mobile-nav-link block py-2 text-white hover:text-orange-200 transition">
                    <i class="fas fa-check-circle mr-2"></i> Syarat
                </a>
                <a href="/MIHidayatulUlumSambong/formulir" class="mobile-nav-link block py-2 text-white hover:text-orange-200 transition">
                    <i class="fas fa-list-alt mr-2"></i> Formulir
                </a>
                <a href="#alur" class="mobile-nav-link block py-2 text-white hover:text-orange-200 transition">
                    <i class="fas fa-road mr-2"></i> Cara Daftar
                </a>
                <a href="#statistik" class="mobile-nav-link block py-2 text-white hover:text-orange-200 transition">
                    <i class="fas fa-chart-bar mr-2"></i> Statistik
                </a>
                <a href="#info" class="mobile-nav-link block py-2 text-white hover:text-orange-200 transition">
                    <i class="fas fa-info-circle mr-2"></i> Info
                </a>
                <a href="#" class="mobile-nav-link block py-2 text-white hover:text-orange-200 transition">
                    <i class="fas fa-sign-in-alt mr-2"></i> Login
                </a>
            </div>
        </div>
    </nav>

    <!-- Spacer untuk fixed navbar -->
    <div class="h-16"></div>

    <!-- ==================== HERO SECTION (HOME) ==================== -->
    <section id="home" class="container mx-auto text-center py-12 md:py-16 px-4">
        <div class="hero-gradient rounded-2xl py-12 md:py-16 px-6 shadow-xl fade-in-up">
            <div class="flex justify-center mb-6">
                <img class="w-24 h-24 rounded-full bg-white p-2 shadow-md object-contain" 
                     src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg1YyQtJSBc4S_vAvXQvCTY9g9WoHxLAumSJc5-6mXZEy2Z1F8KSJjb91fM67ubjJ5Lyb7fgeM_LSu76hhuYjQb7AYHcg6A6H4cxzVXPN29Fd3Zpa50dtAegesiqvWJNM-ivoQkSil1vvV3As5SOEMIc03w7QH8RPn7TyNGfefGPrah7IzRrGpWUvF3Gw8/s320/1730258986091.png" 
                     alt="Logo MI Hidayatul Ulum">
            </div>
            <h1 class="text-green-700 text-3xl md:text-4xl font-extrabold mb-2">
                <i class="fas fa-graduation-cap mr-2"></i>Selamat Datang
            </h1>
            <h2 class="text-orange-500 text-2xl md:text-3xl font-bold mb-2">Penerimaan Peserta Didik Baru</h2>
            <h3 class="text-gray-800 text-xl md:text-2xl font-bold mb-4">TAHUN AJARAN 2025 / 2026</h3>
            <p class="text-base md:text-lg text-gray-700 mb-8 max-w-2xl mx-auto">Silahkan lengkapi formulir pendaftaran berikut untuk bergabung menjadi bagian dari keluarga besar MI Hidayatul Ulum.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="/MIHidayatulUlumSambong/formulir" class="btn-primary bg-orange-500 text-white px-8 py-3 rounded-full hover:bg-orange-600 transition flex items-center justify-center gap-2 font-semibold shadow-lg">
                    <i class="fas fa-edit"></i>
                    <span>Daftar Sekarang</span>
                </a>
                <a href="#syarat" class="btn-primary bg-green-600 text-white px-8 py-3 rounded-full hover:bg-green-700 transition flex items-center justify-center gap-2 font-semibold shadow-lg">
                    <i class="fas fa-file-alt"></i>
                    <span>Lihat Syarat</span>
                </a>
            </div>
        </div>
    </section>

    <!-- ==================== SYARAT PENDAFTARAN ==================== -->
    <section id="syarat" class="container mx-auto py-12 md:py-16 px-4">
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="p-6 md:p-10">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="bg-green-600 w-12 h-12 rounded-full flex items-center justify-center">
                            <i class="fas fa-clipboard-list text-white text-xl"></i>
                        </div>
                        <h2 class="text-2xl md:text-3xl font-bold text-gray-800">Syarat Pendaftaran</h2>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-start gap-4">
                            <div class="bg-green-500 text-white rounded-full w-7 h-7 flex items-center justify-center font-bold text-sm flex-shrink-0">1</div>
                            <div><h3 class="font-semibold text-gray-800">Mengisi Formulir Pendaftaran</h3></div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="bg-green-500 text-white rounded-full w-7 h-7 flex items-center justify-center font-bold text-sm flex-shrink-0">2</div>
                            <div><h3 class="font-semibold text-gray-800">Foto Copy KK 1 Lembar</h3></div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="bg-green-500 text-white rounded-full w-7 h-7 flex items-center justify-center font-bold text-sm flex-shrink-0">3</div>
                            <div><h3 class="font-semibold text-gray-800">Foto Copy Akta Kelahiran 1 Lembar</h3></div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="bg-green-500 text-white rounded-full w-7 h-7 flex items-center justify-center font-bold text-sm flex-shrink-0">4</div>
                            <div><h3 class="font-semibold text-gray-800">Foto Copy Ijazah TK/RA 1 Lembar</h3></div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="bg-green-500 text-white rounded-full w-7 h-7 flex items-center justify-center font-bold text-sm flex-shrink-0">5</div>
                            <div><h3 class="font-semibold text-gray-800">Foto Copy KTP Orang Tua</h3></div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="bg-green-500 text-white rounded-full w-7 h-7 flex items-center justify-center font-bold text-sm flex-shrink-0">6</div>
                            <div><h3 class="font-semibold text-gray-800">Foto Copy Kartu KIP/PKH (Jika Ada)</h3></div>
                        </div>
                    </div>
                </div>
                <div class="bg-green-50 flex items-center justify-center p-6 md:p-8">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg1YyQtJSBc4S_vAvXQvCTY9g9WoHxLAumSJc5-6mXZEy2Z1F8KSJjb91fM67ubjJ5Lyb7fgeM_LSu76hhuYjQb7AYHcg6A6H4cxzVXPN29Fd3Zpa50dtAegesiqvWJNM-ivoQkSil1vvV3As5SOEMIc03w7QH8RPn7TyNGfefGPrah7IzRrGpWUvF3Gw8/s320/1730258986091.png" 
                         alt="Logo MI Hidayatul Ullum" class="max-w-full h-auto max-h-48 md:max-h-64 object-contain">
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== ALUR PENDAFTARAN ==================== -->
    <section id="alur" class="container mx-auto py-12 md:py-16 px-4 bg-white">
        <div class="text-center mb-10">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-3">Alur Pendaftaran</h2>
            <div class="w-24 h-1 bg-green-500 mx-auto rounded-full"></div>
            <p class="text-gray-600 mt-4">Ikuti langkah mudah berikut untuk mendaftar</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center max-w-5xl mx-auto">
            <div class="order-2 md:order-1">
                <div class="space-y-5">
                    <div class="flex gap-4 p-3 rounded-xl hover:bg-green-50 transition">
                        <div class="bg-green-500 text-white rounded-full w-10 h-10 flex items-center justify-center font-bold text-lg flex-shrink-0">1</div>
                        <div><h3 class="font-bold text-lg text-gray-800">Kunjungi Website</h3><p class="text-gray-600">Akses website PPDB Online MI Hidayatul Ulum</p></div>
                    </div>
                    <div class="flex gap-4 p-3 rounded-xl hover:bg-green-50 transition">
                        <div class="bg-green-500 text-white rounded-full w-10 h-10 flex items-center justify-center font-bold text-lg flex-shrink-0">2</div>
                        <div><h3 class="font-bold text-lg text-gray-800">Lengkapi Formulir</h3><p class="text-gray-600">Lengkapi formulir pendaftaran dan upload berkas</p></div>
                    </div>
                    <div class="flex gap-4 p-3 rounded-xl hover:bg-green-50 transition">
                        <div class="bg-green-500 text-white rounded-full w-10 h-10 flex items-center justify-center font-bold text-lg flex-shrink-0">3</div>
                        <div><h3 class="font-bold text-lg text-gray-800">Verifikasi Berkas</h3><p class="text-gray-600">Petugas akan memverifikasi berkas pendaftaran</p></div>
                    </div>
                    <div class="flex gap-4 p-3 rounded-xl hover:bg-green-50 transition">
                        <div class="bg-green-500 text-white rounded-full w-10 h-10 flex items-center justify-center font-bold text-lg flex-shrink-0">4</div>
                        <div><h3 class="font-bold text-lg text-gray-800">Daftar Ulang</h3><p class="text-gray-600">Siswa yang diterima melakukan daftar ulang</p></div>
                    </div>
                </div>
            </div>
            <div class="order-1 md:order-2 flex justify-center">
                <div class="bg-green-100 rounded-2xl p-6 text-center">
                    <i class="fas fa-file-signature text-green-600 text-6xl mb-3"></i>
                    <p class="text-gray-700">Siap menjadi bagian dari<br>keluarga besar MI Hidayatul Ulum?</p>
                    <a href="/MIHidayatulUlumSambong/formulir" class="inline-block bg-orange-500 text-white px-6 py-2 rounded-full hover:bg-orange-600 transition mt-3">
                        Daftar Sekarang <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== STATISTIK PENDAFTAR ==================== -->
    <section id="statistik" class="container mx-auto py-12 md:py-16 px-4">
        <div class="text-center mb-10">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-3">Statistik Pendaftar</h2>
            <div class="w-24 h-1 bg-green-500 mx-auto rounded-full"></div>
            <p class="text-gray-600 mt-4">Data peserta didik baru Tahun Ajaran 2025/2026</p>
        </div>
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 md:gap-5 max-w-5xl mx-auto">
            <div class="stat-card bg-white rounded-xl shadow-md p-4 md:p-5 text-center">
                <div class="bg-blue-100 w-12 h-12 md:w-14 md:h-14 rounded-full flex items-center justify-center mx-auto mb-2 md:mb-3">
                    <i class="fas fa-users text-blue-600 text-xl md:text-2xl"></i>
                </div>
                <p class="text-gray-500 text-xs md:text-sm">Total Pendaftar</p>
                <p class="text-2xl md:text-3xl font-bold text-blue-600">70</p>
            </div>
            <div class="stat-card bg-white rounded-xl shadow-md p-4 md:p-5 text-center">
                <div class="bg-yellow-100 w-12 h-12 md:w-14 md:h-14 rounded-full flex items-center justify-center mx-auto mb-2 md:mb-3">
                    <i class="fas fa-clock text-yellow-600 text-xl md:text-2xl"></i>
                </div>
                <p class="text-gray-500 text-xs md:text-sm">Proses Seleksi</p>
                <p class="text-2xl md:text-3xl font-bold text-yellow-600">30</p>
            </div>
            <div class="stat-card bg-white rounded-xl shadow-md p-4 md:p-5 text-center">
                <div class="bg-green-100 w-12 h-12 md:w-14 md:h-14 rounded-full flex items-center justify-center mx-auto mb-2 md:mb-3">
                    <i class="fas fa-check-circle text-green-600 text-xl md:text-2xl"></i>
                </div>
                <p class="text-gray-500 text-xs md:text-sm">Diterima</p>
                <p class="text-2xl md:text-3xl font-bold text-green-600">0</p>
            </div>
            <div class="stat-card bg-white rounded-xl shadow-md p-4 md:p-5 text-center">
                <div class="bg-purple-100 w-12 h-12 md:w-14 md:h-14 rounded-full flex items-center justify-center mx-auto mb-2 md:mb-3">
                    <i class="fas fa-ticket-alt text-purple-600 text-xl md:text-2xl"></i>
                </div>
                <p class="text-gray-500 text-xs md:text-sm">Kuota</p>
                <p class="text-2xl md:text-3xl font-bold text-purple-600">100</p>
            </div>
        </div>
    </section>

    <!-- ==================== INFO SECTION ==================== -->
    <section id="info" class="container mx-auto py-12 md:py-16 px-4 pb-20">
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            <div class="bg-gray-700 text-white px-6 py-4">
                <h2 class="text-xl font-semibold flex items-center gap-2"><i class="fas fa-bullhorn"></i> Pengumuman</h2>
            </div>
            <div class="p-6">
                <p class="text-gray-600 mb-3">Informasi terbaru mengenai PPDB Online MI Hidayatul Ulum</p>
                <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 rounded">
                    <p class="text-sm text-gray-700">📢 Pendaftaran dibuka mulai bulan Januari 2026. Segera daftarkan putra-putri Anda!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-green-700 text-white py-6 md:py-8 mt-4">
        <div class="container mx-auto px-4">
            <div class="flex flex-col items-center text-center">
                <div class="flex items-center space-x-2 mb-4">
                    <img class="w-8 h-8 rounded-full bg-white p-1 object-contain" 
                         src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg1YyQtJSBc4S_vAvXQvCTY9g9WoHxLAumSJc5-6mXZEy2Z1F8KSJjb91fM67ubjJ5Lyb7fgeM_LSu76hhuYjQb7AYHcg6A6H4cxzVXPN29Fd3Zpa50dtAegesiqvWJNM-ivoQkSil1vvV3As5SOEMIc03w7QH8RPn7TyNGfefGPrah7IzRrGpWUvF3Gw8/s320/1730258986091.png" 
                         alt="Logo">
                    <h1 class="font-bold text-base md:text-lg">PPDB Online - MI Hidayatul Ulum</h1>
                </div>
                <p class="text-green-200 text-xs md:text-sm mb-2">
                    <i class="fas fa-map-marker-alt mr-2"></i>
                    Jl. Blongko, Kec. Ngetos, Kab. Nganjuk, Jawa Timur
                </p>
                <p class="text-green-300 text-xs">© 2026 MI Hidayatul Ulum. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript for Mobile Menu & Dropdowns -->
    <script>
        // Toggle mobile menu
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        
        if (menuToggle) {
            menuToggle.addEventListener('click', (e) => {
                e.stopPropagation();
                mobileMenu.classList.toggle('hidden');
                const icon = menuToggle.querySelector('i');
                if (icon) {
                    if (mobileMenu.classList.contains('hidden')) {
                        icon.classList.remove('fa-times');
                        icon.classList.add('fa-bars');
                    } else {
                        icon.classList.remove('fa-bars');
                        icon.classList.add('fa-times');
                    }
                }
            });
        }
        
        // Mobile dropdown toggles
        document.querySelectorAll('.mobile-dropdown-btn').forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault();
                const content = button.nextElementSibling;
                const icon = button.querySelector('.fa-chevron-down, .fa-chevron-up');
                content.classList.toggle('hidden');
                if (icon) {
                    if (content.classList.contains('hidden')) {
                        icon.classList.remove('fa-chevron-up');
                        icon.classList.add('fa-chevron-down');
                    } else {
                        icon.classList.remove('fa-chevron-down');
                        icon.classList.add('fa-chevron-up');
                    }
                }
            });
        });
        
        // Sub dropdown toggles for mobile
        document.querySelectorAll('.sub-dropdown-btn').forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                const content = button.nextElementSibling;
                const icon = button.querySelector('.fa-chevron-right, .fa-chevron-down');
                content.classList.toggle('hidden');
                if (icon) {
                    if (content.classList.contains('hidden')) {
                        icon.classList.remove('fa-chevron-down');
                        icon.classList.add('fa-chevron-right');
                    } else {
                        icon.classList.remove('fa-chevron-right');
                        icon.classList.add('fa-chevron-down');
                    }
                }
            });
        });
        
        // Active menu highlight saat scroll
