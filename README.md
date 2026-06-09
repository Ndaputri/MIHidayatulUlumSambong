<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MI Hidayatul Ullum - Madrasah Ibtidaiyah Unggulan</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }
        .shadow-3d {
            box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.08), -5px -5px 15px rgba(255, 255, 255, 0.7);
            transition: all 0.3s ease;
        }
        .shadow-3d:hover {
            transform: translateY(-8px);
            box-shadow: 15px 15px 30px rgba(0, 0, 0, 0.12), -8px -8px 20px rgba(255, 255, 255, 0.8);
        }
        .faq-answer {
            transition: all 0.3s ease;
        }
        .nav-link-hover {
            transition: all 0.2s ease;
        }
        .nav-link-hover:hover {
            background-color: rgba(255, 255, 255, 0.15);
            transform: translateX(5px);
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .fade-in {
            animation: fadeIn 0.6s ease-out;
        }
    </style>
</head>
<body class="bg-gradient-to-b from-gray-50 to-gray-100">

    <!-- ==================== HEADER SECTION ==================== -->
    <div class="bg-white shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-6 py-5 flex flex-col lg:flex-row items-center justify-between gap-4">
            <!-- Logo dan Nama Sekolah -->
            <div class="flex items-center space-x-4">
                <img class="w-14 h-14 object-contain" 
                     src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg1YyQtJSBc4S_vAvXQvCTY9g9WoHxLAumSJc5-6mXZEy2Z1F8KSJjb91fM67ubjJ5Lyb7fgeM_LSu76hhuYjQb7AYHcg6A6H4cxzVXPN29Fd3Zpa50dtAegesiqvWJNM-ivoQkSil1vvV3As5SOEMIc03w7QH8RPn7TyNGfefGPrah7IzRrGpWUvF3Gw8/s320/1730258986091.png" 
                     alt="Logo MI Hidayatul Ullum">
                <div>
                    <h1 class="text-2xl lg:text-3xl font-extrabold text-green-700">MI HIDAYATUL ULLUM</h1>
                    <p class="text-xs text-gray-500 mt-1">Madrasah Ibtidaiyah Berbasis Akhlakul Karimah</p>
                </div>
            </div>
            
            <!-- Informasi Kontak -->
            <div class="flex flex-col md:flex-row items-center gap-4 md:gap-6">
                <div class="flex items-center gap-2 text-gray-600">
                    <i class="fas fa-map-marker-alt text-green-600 text-lg"></i>
                    <span class="text-sm">Jl. Blongko, Kec. Ngetos, Kab. Nganjuk, Jawa Timur</span>
                </div>
                <div class="flex items-center gap-2 text-gray-600">
                    <i class="fas fa-calendar-alt text-green-600 text-lg"></i>
                    <span class="text-sm">Full-Day School | Senin - Sabtu</span>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== MENU NAVIGASI UTAMA ==================== -->
    <section class="bg-gradient-to-r from-green-800 to-green-700 text-white py-12 shadow-inner">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Profil -->
                <div class="text-center group cursor-pointer transition-transform hover:scale-105">
                    <div class="bg-white/20 w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-4 backdrop-blur-sm">
                        <i class="fas fa-school text-4xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Profil</h3>
                    <p class="text-green-100 text-sm mb-3">Madrasah Ibtidaiyah HIDAYATUL ULLUM</p>
                    <a href="<?= base_url();?>home/profil" class="inline-block bg-white text-green-800 px-6 py-2 rounded-full text-sm font-semibold hover:bg-green-100 transition shadow-md">
                        Selengkapnya <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
                
                <!-- Program Madrasah -->
                <div class="text-center group cursor-pointer transition-transform hover:scale-105">
                    <div class="bg-white/20 w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-4 backdrop-blur-sm">
                        <i class="fas fa-book-open text-4xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Program Madrasah</h3>
                    <p class="text-green-100 text-sm mb-3">Informasi Program Unggulan</p>
                    <a href="<?= base_url();?>home/program_madrasah" class="inline-block bg-white text-green-800 px-6 py-2 rounded-full text-sm font-semibold hover:bg-green-100 transition shadow-md">
                        Selengkapnya <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
                
                <!-- Prestasi -->
                <div class="text-center group cursor-pointer transition-transform hover:scale-105">
                    <div class="bg-white/20 w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-4 backdrop-blur-sm">
                        <i class="fas fa-trophy text-4xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Prestasi</h3>
                    <p class="text-green-100 text-sm mb-3">Prestasi Peserta Didik</p>
                    <a href="<?= base_url();?>home/prestasi" class="inline-block bg-white text-green-800 px-6 py-2 rounded-full text-sm font-semibold hover:bg-green-100 transition shadow-md">
                        Selengkapnya <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
                
                <!-- Informasi -->
                <div class="text-center group cursor-pointer transition-transform hover:scale-105">
                    <div class="bg-white/20 w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-4 backdrop-blur-sm">
                        <i class="fas fa-newspaper text-4xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Informasi</h3>
                    <p class="text-green-100 text-sm mb-3">Kegiatan di Sekolah</p>
                    <a href="<?= base_url();?>home/informasi" class="inline-block bg-white text-green-800 px-6 py-2 rounded-full text-sm font-semibold hover:bg-green-100 transition shadow-md">
                        Selengkapnya <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== FASILITAS SEKOLAH ==================== -->
    <div class="container mx-auto px-6 py-16 fade-in">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-extrabold text-green-700 mb-3">Fasilitas Sekolah</h2>
            <div class="w-24 h-1 bg-green-500 mx-auto rounded-full"></div>
            <p class="text-gray-600 mt-4 max-w-2xl mx-auto">Berbagai fasilitas modern dan nyaman untuk mendukung proses belajar mengajar</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            <!-- Ruang Kelas -->
            <div class="bg-white rounded-2xl p-6 text-center shadow-3d border border-gray-100">
                <div class="bg-green-100 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-chalkboard-user text-3xl text-green-700"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Ruang Kelas</h3>
                <p class="text-gray-600 text-sm">Tempat utama kegiatan belajar mengajar yang nyaman dan representatif.</p>
            </div>
            
            <!-- Lapangan Olahraga -->
            <div class="bg-white rounded-2xl p-6 text-center shadow-3d border border-gray-100">
                <div class="bg-green-100 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-futbol text-3xl text-green-700"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Lapangan Olahraga</h3>
                <p class="text-gray-600 text-sm">Fasilitas untuk mendukung minat, bakat, dan kesehatan fisik siswa.</p>
            </div>
            
            <!-- Lab Komputer -->
            <div class="bg-white rounded-2xl p-6 text-center shadow-3d border border-gray-100">
                <div class="bg-green-100 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-laptop-code text-3xl text-green-700"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Lab Komputer</h3>
                <p class="text-gray-600 text-sm">Sarana pembelajaran IT dan kompetensi digital abad 21.</p>
            </div>
            
            <!-- Perpustakaan -->
            <div class="bg-white rounded-2xl p-6 text-center shadow-3d border border-gray-100">
                <div class="bg-green-100 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-book text-3xl text-green-700"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Perpustakaan & e-Library</h3>
                <p class="text-gray-600 text-sm">Pusat ilmu pengetahuan berbasis digital dan literasi.</p>
            </div>
            
            <!-- Kantin Sehat -->
            <div class="bg-white rounded-2xl p-6 text-center shadow-3d border border-gray-100">
                <div class="bg-green-100 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-utensils text-3xl text-green-700"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Kantin Sekolah</h3>
                <p class="text-gray-600 text-sm">Menyediakan makanan dan minuman sehat bergizi untuk siswa.</p>
            </div>
            
            <!-- Musholla -->
            <div class="bg-white rounded-2xl p-6 text-center shadow-3d border border-gray-100">
                <div class="bg-green-100 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-mosque text-3xl text-green-700"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Musholla</h3>
                <p class="text-gray-600 text-sm">Tempat ibadah dan kegiatan keagamaan siswa.</p>
            </div>
            
            <!-- Internet & Media -->
            <div class="bg-white rounded-2xl p-6 text-center shadow-3d border border-gray-100">
                <div class="bg-green-100 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-wifi text-3xl text-green-700"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Internet & Media</h3>
                <p class="text-gray-600 text-sm">Akses internet cepat untuk pembelajaran berbasis teknologi.</p>
            </div>
            
            <!-- Laboratorium IPA -->
            <div class="bg-white rounded-2xl p-6 text-center shadow-3d border border-gray-100">
                <div class="bg-green-100 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-flask text-3xl text-green-700"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Lab IPA</h3>
                <p class="text-gray-600 text-sm">Praktikum sains untuk pengembangan nalar ilmiah siswa.</p>
            </div>
        </div>
    </div>

    <!-- ==================== FAQ & LOKASI SECTION ==================== -->
    <div class="container mx-auto px-6 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- FAQ Section -->
            <div>
                <div class="mb-8">
                    <h2 class="text-3xl font-bold text-green-700 mb-2">Pertanyaan Umum</h2>
                    <div class="w-20 h-1 bg-green-500 rounded-full"></div>
                    <p class="text-gray-600 mt-3">Informasi lengkap seputar MI Hidayatul Ullum</p>
                </div>
                
                <div class="space-y-4">
                    <!-- FAQ 1 -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden">
                        <button class="faq-button w-full text-left px-6 py-4 flex justify-between items-center hover:bg-gray-50 transition">
                            <span class="font-semibold text-gray-800">Apa konsep pendidikan MI HIDAYATUL ULLUM?</span>
                            <i class="fas fa-plus text-green-600 faq-icon"></i>
                        </button>
                        <div class="faq-answer hidden px-6 pb-4 text-gray-600 leading-relaxed">
                            Sekolah yang mengimplementasikan konsep pendidikan Islam berlandaskan Al-Qur'an dan As-Sunnah. Konsep operasional merupakan akumulasi dari proses pembudayaan, pewarisan dan pengembangan ajaran agama Islam, budaya dan peradaban Islam dari generasi ke generasi.
                        </div>
                    </div>
                    
                    <!-- FAQ 2 -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden">
                        <button class="faq-button w-full text-left px-6 py-4 flex justify-between items-center hover:bg-gray-50 transition">
                            <span class="font-semibold text-gray-800">Bagaimana implementasi kurikulum di MI HIDAYATUL ULLUM?</span>
                            <i class="fas fa-plus text-green-600 faq-icon"></i>
                        </button>
                        <div class="faq-answer hidden px-6 pb-4 text-gray-600 leading-relaxed">
                            Pelajaran yang diberikan sangat lengkap, berupa pendidikan dasar umum dan pendidikan agama. Pelajarannya antara lain: Pendidikan Kewarganegaraan, Bahasa Indonesia, Matematika, IPA, IPS, Seni Budaya, Seni Musik, Seni Rupa, dan Penjaskes. Sementara pelajaran keislaman masuk dalam kategori Muatan Lokal yang terdiri dari Akidah Akhlak, Qur'an Hadis, Fiqih, BMK, PEGON, Bahasa Arab, Bahasa Inggris, Tahfidz, dan Komputer.
                        </div>
                    </div>
                    
                    <!-- FAQ 3 -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden">
                        <button class="faq-button w-full text-left px-6 py-4 flex justify-between items-center hover:bg-gray-50 transition">
                            <span class="font-semibold text-gray-800">Apakah mengajarkan pengetahuan umum?</span>
                            <i class="fas fa-plus text-green-600 faq-icon"></i>
                        </button>
                        <div class="faq-answer hidden px-6 pb-4 text-gray-600 leading-relaxed">
                            MI HIDAYATUL ULLUM tetap mengajarkan pelajaran umum seperti sekolah biasa, dengan tambahan penguatan nilai-nilai keislaman.
                        </div>
                    </div>
                    
                    <!-- FAQ 4 - Active by default -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden">
                        <button class="faq-button w-full text-left px-6 py-4 flex justify-between items-center hover:bg-gray-50 transition">
                            <span class="font-semibold text-gray-800">Apa Visi dan Misi MI HIDAYATUL ULLUM?</span>
                            <i class="fas fa-minus text-green-600 faq-icon"></i>
                        </button>
                        <div class="faq-answer px-6 pb-4 text-gray-600 leading-relaxed">
                            <p class="font-bold text-green-700 mb-2">VISI:</p>
                            <p class="mb-3">Terwujudnya Sumber Daya Manusia Yang Berilmu, Beriman, Berakhlakul Karimah Berdasarkan Iman Dan Taqwa.</p>
                            <p class="font-bold text-green-700 mb-2">MISI:</p>
                            <ul class="list-disc pl-5 space-y-1">
                                <li>Menanamkan keyakinan atau akidah melalui pengalaman ajaran agama</li>
                                <li>Mengoptimalkan kegiatan pembelajaran siswa</li>
                                <li>Menggali dan membimbing siswa agar kreatif dan inovatif</li>
                                <li>Menumbuhkan semangat berprestasi kepada siswa</li>
                                <li>Menjalin kerjasama yang harmonis antara warga sekitar dan lingkungan</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Google Maps Location -->
            <div>
                <div class="mb-8">
                    <h2 class="text-3xl font-bold text-green-700 mb-2">Lokasi Sekolah</h2>
                    <div class="w-20 h-1 bg-green-500 rounded-full"></div>
                    <p class="text-gray-600 mt-3">Jl. Blongko, Kec. Ngetos, Kab. Nganjuk, Jawa Timur</p>
                </div>
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-200">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.4293078053556!2d111.8253141738045!3d-7.744204976770972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79ad1500000001%3A0xc29525c5c62f855d!2sMadrasah%20Ibtidaiyah%20Hidayatul%20Ulum!5e0!3m2!1sid!2sid!4v1737705179012!5m2!1sid!2sid" 
                        width="100%" 
                        height="400" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                <div class="mt-6 bg-green-50 rounded-xl p-4 flex items-center gap-3">
                    <i class="fas fa-clock text-green-700 text-2xl"></i>
                    <div>
                        <p class="font-semibold text-gray-800">Jam Operasional</p>
                        <p class="text-gray-600 text-sm">Senin - Sabtu: 07.00 - 16.00 WIB</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== FOOTER ==================== -->
    <footer class="bg-gray-900 text-white mt-16 py-10">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <img class="w-10 h-10" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg1YyQtJSBc4S_vAvXQvCTY9g9WoHxLAumSJc5-6mXZEy2Z1F8KSJjb91fM67ubjJ5Lyb7fgeM_LSu76hhuYjQb7AYHcg6A6H4cxzVXPN29Fd3Zpa50dtAegesiqvWJNM-ivoQkSil1vvV3As5SOEMIc03w7QH8RPn7TyNGfefGPrah7IzRrGpWUvF3Gw8/s320/1730258986091.png" alt="Logo">
                        <h3 class="text-xl font-bold">MI HIDAYATUL ULLUM</h3>
                    </div>
                    <p class="text-gray-400 text-sm">Madrasah Ibtidaiyah unggulan yang mengintegrasikan ilmu pengetahuan umum dan agama untuk mencetak generasi berakhlak mulia.</p>
                </div>
                <div>
                    <h4 class="font-semibold text-lg mb-4">Kontak Kami</h4>
                    <div class="space-y-2 text-gray-400 text-sm">
                        <p><i class="fas fa-map-marker-alt w-5 text-green-500"></i> Jl. Blongko, Kec. Ngetos, Kab. Nganjuk</p>
                        <p><i class="fas fa-phone w-5 text-green-500"></i> (0358) 1234567</p>
                        <p><i class="fas fa-envelope w-5 text-green-500"></i> info@mihidayatulullum.sch.id</p>
                    </div>
                </div>
                <div>
                    <h4 class="font-semibold text-lg mb-4">Ikuti Kami</h4>
                    <div class="flex gap-4">
                        <a href="#" class="bg-green-600 w-10 h-10 rounded-full flex items-center justify-center hover:bg-green-700 transition"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="bg-green-600 w-10 h-10 rounded-full flex items-center justify-center hover:bg-green-700 transition"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="bg-green-600 w-10 h-10 rounded-full flex items-center justify-center hover:bg-green-700 transition"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-6 text-center text-gray-500 text-sm">
                &copy; 2026 MI Hidayatul Ullum. All Rights Reserved.
            </div>
        </div>
    </footer>

    <!-- ==================== JAVASCRIPT FOR FAQ TOGGLE ==================== -->
    <script>
        document.querySelectorAll('.faq-button').forEach(button => {
            button.addEventListener('click', () => {
                const answer = button.nextElementSibling;
                const icon = button.querySelector('.faq-icon');
                
                if (answer.classList.contains('hidden')) {
                    // Close all other FAQs
                    document.querySelectorAll('.faq-answer').forEach(item => {
                        if (item !== answer) {
                            item.classList.add('hidden');
                        }
                    });
                    document.querySelectorAll('.faq-icon').forEach(icn => {
                        if (icn !== icon) {
                            icn.classList.remove('fa-minus');
                            icn.classList.add('fa-plus');
                        }
                    });
                    
                    // Open current
                    answer.classList.remove('hidden');
                    icon.classList.remove('fa-plus');
                    icon.classList.add('fa-minus');
                } else {
                    answer.classList.add('hidden');
                    icon.classList.remove('fa-minus');
                    icon.classList.add('fa-plus');
                }
            });
        });
    </script>
</body>
</html>
