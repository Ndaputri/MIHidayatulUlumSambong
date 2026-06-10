<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>MI HIDAYATUL ULUM - PPDB Online</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }
        html {
            scroll-behavior: smooth;
        }
        a {
            color: inherit !important;
        }
        .shadow-3d {
            box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.2), -10px -10px 20px rgba(255, 255, 255, 0.5);
            transition: transform 0.3s ease-in-out;
        }
        .shadow-3d:hover {
            transform: translateY(-5px);
        }
        .btn-primary {
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
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
        input:focus, select:focus, textarea:focus {
            outline: none;
            ring: 2px solid #f97316;
            border-color: #f97316;
        }
    </style>
</head>
<body class="bg-gray-100">

    <!-- Header -->
    <div class="bg-white py-6 px-8 shadow-lg flex flex-col md:flex-row items-center justify-between">
        <div class="flex items-center space-x-4">
            <img border="0" data-original-height="714" data-original-width="720" height="50" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg1YyQtJSBc4S_vAvXQvCTY9g9WoHxLAumSJc5-6mXZEy2Z1F8KSJjb91fM67ubjJ5Lyb7fgeM_LSu76hhuYjQb7AYHcg6A6H4cxzVXPN29Fd3Zpa50dtAegesiqvWJNM-ivoQkSil1vvV3As5SOEMIc03w7QH8RPn7TyNGfefGPrah7IzRrGpWUvF3Gw8/s320/1730258986091.png" width="50">
            <h2 class="text-3xl font-bold text-green-700">MI HIDAYATUL ULUM</h2>
        </div>
        <div class="flex flex-col md:flex-row items-center space-y-2 md:space-y-0 md:space-x-6 mt-4 md:mt-0">
            <div class="flex items-center space-x-2">
                <i class="fas fa-map-marker-alt text-yellow-500"></i>
                <span>Jl. Blongko, Kec Ngetos Kab Nganjuk, Jawa Timur</span>
            </div>
            <div class="flex items-center space-x-2">
                <i class="fas fa-clock text-yellow-500"></i>
                <span>Full-Day School Senin-Sabtu</span>
            </div>
        </div>
    </div>
    
    <!-- Navigasi Utama -->
    <section class="bg-green-700 text-white py-8">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-4 text-center px-4">
            <div class="bg-green-600 rounded-lg p-4 hover:bg-green-800 transition">
                <i class="fas fa-home text-4xl mb-4"></i>
                <h2 class="text-xl font-semibold">Profil</h2>
                <p>Madrasah Ibtidaiyah HIDAYATUL ULUM</p>
                <a href="#" class="bg-green-900 text-white py-2 px-6 rounded-lg shadow-lg hover:bg-green-900 inline-block mt-2">LIHAT SELENGKAPNYA</a>
            </div>
            <div class="bg-green-600 rounded-lg p-4 hover:bg-green-800 transition">
                <i class="fas fa-book text-4xl mb-4"></i>
                <h2 class="text-xl font-semibold">Program Madrasah</h2>
                <p>Informasi Program Unggulan</p>
                <a href="#" class="bg-green-900 text-white py-2 px-6 rounded-lg shadow-lg hover:bg-green-900 inline-block mt-2">LIHAT SELENGKAPNYA</a>
            </div>
            <div class="bg-green-600 rounded-lg p-4 hover:bg-green-800 transition">
                <i class="fas fa-trophy text-4xl mb-4"></i>
                <h2 class="text-xl font-semibold">Prestasi</h2>
                <p>Prestasi Peserta Didik</p>
                <a href="#" class="bg-green-900 text-white py-2 px-6 rounded-lg shadow-lg hover:bg-green-900 inline-block mt-2">LIHAT SELENGKAPNYA</a>
            </div>
            <div class="bg-green-600 rounded-lg p-4 hover:bg-green-800 transition">
                <i class="fas fa-info-circle text-4xl mb-4"></i>
                <h2 class="text-xl font-semibold">Informasi</h2>
                <p>Kegiatan Di sekolah</p>
                <a href="#" class="bg-green-900 text-white py-2 px-6 rounded-lg shadow-lg hover:bg-green-900 inline-block mt-2">LIHAT SELENGKAPNYA</a>
            </div>
        </div>
    </section>

    <!-- Hero Section PPDB -->
    <section class="bg-gradient-to-r from-green-50 to-green-100 py-12">
        <div class="container mx-auto px-4 text-center">
            <div class="hero-gradient rounded-2xl py-12 md:py-16 px-6 shadow-xl fade-in-up">
                <div class="flex justify-center mb-6">
                    <img class="w-24 h-24 rounded-full bg-white p-2 shadow-md object-contain" 
                         src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg1YyQtJSBc4S_vAvXQvCTY9g9WoHxLAumSJc5-6mXZEy2Z1F8KSJjb91fM67ubjJ5Lyb7fgeM_LSu76hhuYjQb7AYHcg6A6H4cxzVXPN29Fd3Zpa50dtAegesiqvWJNM-ivoQkSil1vvV3As5SOEMIc03w7QH8RPn7TyNGfefGPrah7IzRrGpWUvF3Gw8/s320/1730258986091.png" 
                         alt="Logo MI Hidayatul Ulum">
                </div>
                <h1 class="text-green-700 text-3xl md:text-4xl font-extrabold mb-2">
                    <i class="fas fa-graduation-cap mr-2"></i>PENERIMAAN PESERTA DIDIK BARU
                </h1>
                <h2 class="text-orange-500 text-2xl md:text-3xl font-bold mb-2">TAHUN AJARAN 2025 / 2026</h2>
                <p class="text-base md:text-lg text-gray-700 mb-8 max-w-2xl mx-auto">Silahkan lengkapi formulir pendaftaran berikut untuk bergabung menjadi bagian dari keluarga besar MI Hidayatul Ulum.</p>
                <a href="#formulir" class="btn-primary bg-orange-500 text-white px-8 py-3 rounded-full hover:bg-orange-600 transition inline-flex items-center justify-center gap-2 font-semibold shadow-lg">
                    <i class="fas fa-edit"></i>
                    <span>Daftar Sekarang</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Fasilitas Sekolah -->
    <div class="container mx-auto py-12 px-4">
        <h2 class="text-center text-3xl font-semibold text-green-700 mb-8">Fasilitas Sekolah</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="border p-6 text-center bg-white rounded-lg shadow-3d">
                <i class="fas fa-chalkboard-teacher text-4xl text-green-700 mb-4"></i>
                <h3 class="text-xl font-semibold">Ruang Kelas</h3>
                <p>Tempat utama kegiatan belajar mengajar.</p>
            </div>
            <div class="border p-6 text-center bg-white rounded-lg shadow-3d">
                <i class="fas fa-futbol text-4xl text-green-700 mb-4"></i>
                <h3 class="text-xl font-semibold">Lapangan Olah Raga</h3>
                <p>Fasilitas untuk mendukung minat dan bakat siswa.</p>
            </div>
            <div class="border p-6 text-center bg-white rounded-lg shadow-3d">
                <i class="fas fa-desktop text-4xl text-green-700 mb-4"></i>
                <h3 class="text-xl font-semibold">Lab Komputer</h3>
                <p>Sarana untuk pembelajaran praktis siswa berkaitan dengan kompetensi di bidang IT dan komunikasi.</p>
            </div>
            <div class="border p-6 text-center bg-white rounded-lg shadow-3d">
                <i class="fas fa-book text-4xl text-green-700 mb-4"></i>
                <h3 class="text-xl font-semibold">Perpustakaan</h3>
                <p>Pusat sumber ilmu pengetahuan dan informasi yang berbasis sekolah.</p>
            </div>
            <div class="border p-6 text-center bg-white rounded-lg shadow-3d">
                <i class="fas fa-utensils text-4xl text-green-700 mb-4"></i>
                <h3 class="text-xl font-semibold">Kantin Sekolah</h3>
                <p>Menyediakan makanan dan minuman sehat untuk siswa.</p>
            </div>
            <div class="border p-6 text-center bg-white rounded-lg shadow-3d">
                <i class="fas fa-mosque text-4xl text-green-700 mb-4"></i>
                <h3 class="text-xl font-semibold">Musholla</h3>
                <p>Tempat kegiatan Sholat berjamaah peserta didik.</p>
            </div>
            <div class="border p-6 text-center bg-white rounded-lg shadow-3d">
                <i class="fas fa-wifi text-4xl text-green-700 mb-4"></i>
                <h3 class="text-xl font-semibold">Internet dan Media</h3>
                <p>Mendukung pembelajaran berbasis teknologi.</p>
            </div>
            <div class="border p-6 text-center bg-white rounded-lg shadow-3d">
                <i class="fas fa-flask text-4xl text-green-700 mb-4"></i>
                <h3 class="text-xl font-semibold">Lab IPA</h3>
                <p>Sarana praktik pembelajaran Ilmu Pengetahuan Alam.</p>
            </div>
        </div>
    </div>

    <!-- FORMULIR PENDAFTARAN -->
    <section id="formulir" class="container mx-auto py-12 px-4 bg-white">
        <div class="max-w-5xl mx-auto">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-green-700">Formulir Pendaftaran</h2>
                <div class="w-24 h-1 bg-orange-500 mx-auto rounded-full mt-2"></div>
                <p class="text-gray-600 mt-4">Isi data dengan lengkap dan benar</p>
            </div>
            
            <div class="bg-gray-50 rounded-2xl shadow-xl overflow-hidden">
                <div class="bg-gradient-to-r from-green-600 to-green-500 text-white px-6 py-4">
                    <h3 class="text-xl font-semibold flex items-center gap-2">
                        <i class="fas fa-file-alt"></i> Formulir PPDB Online
                    </h3>
                </div>
                
                <div class="p-6 md:p-8">
                    <form id="registrationForm">
                        <!-- Data Pribadi -->
                        <div class="mb-8">
                            <h3 class="text-lg font-semibold text-gray-800 border-l-4 border-orange-500 pl-3 mb-5">
                                <i class="fas fa-user-graduate text-orange-500 mr-2"></i>Data Pribadi Peserta Didik
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                <div>
                                    <label class="block text-gray-700 font-medium mb-1">Nama Lengkap <span class="text-red-500">*</span></label>
                                    <input type="text" id="nama" class="w-full bg-white border border-gray-300 rounded-lg p-2.5 focus:border-orange-400 focus:ring-1 focus:ring-orange-400 transition" required>
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-medium mb-1">NIK <span class="text-red-500">*</span></label>
                                    <input type="text" id="nik" class="w-full bg-white border border-gray-300 rounded-lg p-2.5 focus:border-orange-400 focus:ring-1 focus:ring-orange-400 transition" required>
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-medium mb-1">Tempat Lahir <span class="text-red-500">*</span></label>
                                    <input type="text" id="tempat_lahir" class="w-full bg-white border border-gray-300 rounded-lg p-2.5 focus:border-orange-400 focus:ring-1 focus:ring-orange-400 transition" required>
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-medium mb-1">Tanggal Lahir <span class="text-red-500">*</span></label>
                                    <input type="date" id="tanggal_lahir" class="w-full bg-white border border-gray-300 rounded-lg p-2.5 focus:border-orange-400 focus:ring-1 focus:ring-orange-400 transition" required>
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-medium mb-1">Jenis Kelamin <span class="text-red-500">*</span></label>
                                    <select id="jenis_kelamin" class="w-full bg-white border border-gray-300 rounded-lg p-2.5 focus:border-orange-400 focus:ring-1 focus:ring-orange-400 transition" required>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-medium mb-1">Agama <span class="text-red-500">*</span></label>
                                    <select id="agama" class="w-full bg-white border border-gray-300 rounded-lg p-2.5 focus:border-orange-400 focus:ring-1 focus:ring-orange-400 transition" required>
                                        <option value="">Pilih Agama</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Konghucu">Konghucu</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-medium mb-1">Kewarganegaraan <span class="text-red-500">*</span></label>
                                    <input type="text" id="kewarganegaraan" value="Indonesia" class="w-full bg-white border border-gray-300 rounded-lg p-2.5 focus:border-orange-400 focus:ring-1 focus:ring-orange-400 transition" required>
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-medium mb-1">Moda Transportasi ke Sekolah</label>
                                    <select id="transportasi" class="w-full bg-white border border-gray-300 rounded-lg p-2.5 focus:border-orange-400 focus:ring-1 focus:ring-orange-400 transition">
                                        <option value="Jalan Kaki">Jalan Kaki</option>
                                        <option value="Sepeda">Sepeda</option>
                                        <option value="Motor">Motor</option>
                                        <option value="Mobil">Mobil</option>
                                        <option value="Angkutan Umum">Angkutan Umum</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-medium mb-1">Anak ke Berapa dalam Keluarga</label>
                                    <input type="number" id="anak_ke" class="w-full bg-white border border-gray-300 rounded-lg p-2.5 focus:border-orange-400 focus:ring-1 focus:ring-orange-400 transition">
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-medium mb-1">Jumlah Saudara Kandung</label>
                                    <input type="number" id="jumlah_saudara" class="w-full bg-white border border-gray-300 rounded-lg p-2.5 focus:border-orange-400 focus:ring-1 focus:ring-orange-400 transition">
                                </div>
                            </div>
                        </div>

                        <!-- Data Sekolah Asal -->
                        <div class="mb-8">
                            <h3 class="text-lg font-semibold text-gray-800 border-l-4 border-orange-500 pl-3 mb-5">
                                <i class="fas fa-school text-orange-500 mr-2"></i>Data Sekolah Asal
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                <div>
                                    <label class="block text-gray-700 font-medium mb-1">Nama Sekolah Sebelumnya <span class="text-red-500">*</span></label>
                                    <input type="text" id="sekolah_asal" class="w-full bg-white border border-gray-300 rounded-lg p-2.5 focus:border-orange-400 focus:ring-1 focus:ring-orange-400 transition" required>
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-medium mb-1">NISN (Jika ada, jika belum isi 0)</label>
                                    <input type="text" id="nisn" class="w-full bg-white border border-gray-300 rounded-lg p-2.5 focus:border-orange-400 focus:ring-1 focus:ring-orange-400 transition">
                                </div>
                            </div>
                        </div>

                        <!-- Data Orang Tua -->
                        <div class="mb-8">
                            <h3 class="text-lg font-semibold text-gray-800 border-l-4 border-orange-500 pl-3 mb-5">
                                <i class="fas fa-users text-orange-500 mr-2"></i>Data Orang Tua/Wali
                            </h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                <div>
                                    <label class="block text-gray-700 font-medium mb-1">Nama Orang Tua/Wali <span class="text-red-500">*</span></label>
                                    <input type="text" id="nama_ortu" class="w-full bg-white border border-gray-300 rounded-lg p-2.5 focus:border-orange-400 focus:ring-1 focus:ring-orange-400 transition" required>
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-medium mb-1">Pendidikan Terakhir <span class="text-red-500">*</span></label>
                                    <select id="pendidikan_ortu" class="w-full bg-white border border-gray-300 rounded-lg p-2.5 focus:border-orange-400 focus:ring-1 focus:ring-orange-400 transition" required>
                                        <option value="">Pilih Pendidikan</option>
                                        <option value="SD">SD</option>
                                        <option value="SMP">SMP</option>
                                        <option value="SMA">SMA</option>
                                        <option value="D3">D3</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-medium mb-1">Pekerjaan <span class="text-red-500">*</span></label>
                                    <input type="text" id="pekerjaan_ortu" class="w-full bg-white border border-gray-300 rounded-lg p-2.5 focus:border-orange-400 focus:ring-1 focus:ring-orange-400 transition" required>
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-medium mb-1">Penghasilan Bulanan</label>
                                    <select id="penghasilan" class="w-full bg-white border border-gray-300 rounded-lg p-2.5 focus:border-orange-400 focus:ring-1 focus:ring-orange-400 transition">
                                        <option value="< Rp 1.000.000">&lt; Rp 1.000.000</option>
                                        <option value="Rp 1.000.000 - Rp 2.000.000">Rp 1.000.000 - Rp 2.000.000</option>
                                        <option value="Rp 2.000.000 - Rp 5.000.000">Rp 2.000.000 - Rp 5.000.000</option>
                                        <option value="> Rp 5.000.000">&gt; Rp 5.000.000</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-medium mb-1">Alamat Orang Tua <span class="text-red-500">*</span></label>
                                    <textarea id="alamat_ortu" rows="2" class="w-full bg-white border border-gray-300 rounded-lg p-2.5 focus:border-orange-400 focus:ring-1 focus:ring-orange-400 transition" required></textarea>
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-medium mb-1">Nomor Telepon <span class="text-red-500">*</span></label>
                                    <input type="tel" id="nomor_telepon" class="w-full bg-white border border-gray-300 rounded-lg p-2.5 focus:border-orange-400 focus:ring-1 focus:ring-orange-400 transition" required>
                                </div>
                            </div>
                        </div>

                        <!-- Alamat Lengkap -->
                        <div class="mb-8">
                            <h3 class="text-lg font-semibold text-gray-800 border-l-4 border-orange-500 pl-3 mb-5">
                                <i class="fas fa-home text-orange-500 mr-2"></i>Alamat Lengkap
                            </h3>
                            <textarea id="alamat" rows="3" class="w-full bg-white border border-gray-300 rounded-lg p-2.5 focus:border-orange-400 focus:ring-1 focus:ring-orange-400 transition" required></textarea>
                        </div>

                        <!-- Tombol -->
                        <div class="flex flex-col sm:flex-row gap-4 justify-between">
                            <button type="button" onclick="generatePDF()" class="bg-orange-500 text-white px-6 py-3 rounded-lg hover:bg-orange-600 transition flex items-center justify-center gap-2">
                                <i class="fas fa-download"></i> Download PDF
                            </button>
                            <button type="reset" class="bg-gray-500 text-white px-6 py-3 rounded-lg hover:bg-gray-600 transition flex items-center justify-center gap-2">
                                <i class="fas fa-undo-alt"></i> Reset Form
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-green-700">Frequently Asked Questions</h2>
                <div class="w-24 h-1 bg-orange-500 mx-auto rounded-full mt-2"></div>
                <p class="text-gray-600 mt-4">Pertanyaan yang sering diajukan seputar MI Hidayatul Ulum</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                <div>
                    <div class="bg-white shadow-md rounded-lg mb-4">
                        <div class="border-b">
                            <button class="w-full text-left px-4 py-3 text-green-700 font-semibold flex justify-between items-center toggle-button">
                                Apa Konsep MI HIDAYATUL ULUM?
                                <i class="fas fa-plus"></i>
                            </button>
                            <div class="hidden px-4 py-3 text-gray-700 border-t">
                                Sekolah yang mengimplementasikan konsep pendidikan Islam berlandaskan AlQur'an dan As Sunnah. Konsep operasional merupakan akumulasi dari proses pembudayaan, pewarisan dan pengembangan ajaran agama Islam, budaya dan peradaban Islam dari generasi ke generasi.
                            </div>
                        </div>
                        <div class="border-b">
                            <button class="w-full text-left px-4 py-3 text-green-700 font-semibold flex justify-between items-center toggle-button">
                                Bagaimana Implementasi MI HIDAYATUL ULUM?
                                <i class="fas fa-plus"></i>
                            </button>
                            <div class="hidden px-4 py-3 text-gray-700 border-t">
                                Pelajaran yang diberikan sangat lengkap. Berupa pendidikan dasar umum dan pendidikan agama. Pelajarannya antara lain Pendidikan Kewarganegaraan, Bahasa Indonesia, Matematika, IPA, IPS, Seni Budaya, Seni Musik, Seni Rupa, dan Penjaskes. Sementara pelajaran lainnya yang berkaitan dengan keislaman masuk dalam kategori Muatan Lokal yang terdiri dari Akidah Akhlak, Qur'an Hadis, Fiqih, BMK, PEGON, Bahasa Arab, Bahasa Inggris, Tahfidz, dan komputer.
                            </div>
                        </div>
                        <div class="border-b">
                            <button class="w-full text-left px-4 py-3 text-green-700 font-semibold flex justify-between items-center toggle-button">
                                Apakah Mengajarkan Pengetahuan Umum?
                                <i class="fas fa-plus"></i>
                            </button>
                            <div class="hidden px-4 py-3 text-gray-700 border-t">
                                MI HIDAYATUL ULUM tetap mengajarkan pelajaran umum seperti sekolah biasa.
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="bg-white shadow-md rounded-lg mb-4">
                        <div class="border-b">
                            <button class="w-full text-left px-4 py-3 text-green-700 font-semibold flex justify-between items-center toggle-button">
                                Apa Visi MI HIDAYATUL ULUM?
                                <i class="fas fa-plus"></i>
                            </button>
                            <div class="hidden px-4 py-3 text-gray-700 border-t">
                                <p class="font-bold">VISI:</p>
                                <p>Terwujudnya Sumber Daya Manusia Yang Berilmu Beriman Berakhlakul karimah Berdasarkan Iman Dan Bertaqwa</p>
                                <p class="font-bold mt-2">MISI:</p>
                                <ul class="list-disc pl-5">
                                    <li>Menanamkan keyakinan atau akidah melalui pengalaman ajaran agama</li>
                                    <li>Mengoptimalkan kegiatan pembelajaran siswa</li>
                                    <li>Menggali dan membimbing siswa agar kreatif dan inovatif</li>
                                    <li>Menumbuhkan semangat berprestasi kepada siswa</li>
                                    <li>Menjalin kerjasama yang harmonis antara warga sekitar dan lingkungan</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Lokasi Sekolah -->
                    <div class="bg-white shadow-md rounded-lg p-4">
                        <h3 class="text-lg font-bold text-green-700 mb-3 flex items-center gap-2">
                            <i class="fas fa-map-marker-alt text-orange-500"></i> Lokasi Sekolah
                        </h3>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.4293078053556!2d111.8253141738045!3d-7.744204976770972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79ad1500000001%3A0xc29525c5c62f855d!2sMadrasah%20Ibtidaiyah%20Hidayatul%20Ulum!5e0!3m2!1sid!2sid!4v1737705179012!5m2!1sid!2sid" width="100%" height="300" style="border:0; border-radius: 8px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-green-800 text-white py-8">
        <div class="container mx-auto px-4 text-center">
            <div class="flex flex-col items-center">
                <div class="flex items-center space-x-2 mb-4">
                    <img class="w-10 h-10 rounded-full bg-white p-1 object-contain" 
                         src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg1YyQtJSBc4S_vAvXQvCTY9g9WoHxLAumSJc5-6mXZEy2Z1F8KSJjb91fM67ubjJ5Lyb7fgeM_LSu76hhuYjQb7AYHcg6A6H4cxzVXPN29Fd3Zpa50dtAegesiqvWJNM-ivoQkSil1vvV3As5SOEMIc03w7QH8RPn7TyNGfefGPrah7IzRrGpWUvF3Gw8/s320/1730258986091.png" 
                         alt="Logo">
                    <h1 class="font-bold text-lg">MI HIDAYATUL ULUM</h1>
                </div>
                <p class="text-green-200 text-sm mb-2">
                    <i class="fas fa-map-marker-alt mr-2"></i>
                    Jl. Blongko, Kec. Ngetos, Kab. Nganjuk, Jawa Timur
                </p>
                <p class="text-green-200 text-sm mb-2">
                    <i class="fas fa-phone mr-2"></i>
                    Telp/HP: 081357251463
                </p>
                <p class="text-green-200 text-sm mb-4">
                    <i class="fas fa-envelope mr-2"></i>
                    Email: hidayatululumtengger87@gmail.com
                </p>
                <p class="text-green-300 text-xs">© 2025 MI Hidayatul Ulum. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Button -->
    <div class="fixed bottom-4 right-4 z-50">
        <a href="https://wa.me/6281249327710?text=Assalaamu%27alaikum.%20Saya%20ingin%20mengirimkan%20formulir%20pendaftaran." target="_blank" 
           class="bg-green-500 text-white p-3 rounded-full shadow-lg hover:bg-green-600 transition flex items-center justify-center">
            <i class="fab fa-whatsapp text-2xl"></i>
        </a>
    </div>

    <script>
        // Toggle FAQ
        document.querySelectorAll('.toggle-button').forEach(button => {
            button.addEventListener('click', () => {
                const content = button.nextElementSibling;
                const icon = button.querySelector('i');

                if (content.classList.contains('hidden')) {
                    content.classList.remove('hidden');
                    icon.classList.remove('fa-plus');
                    icon.classList.add('fa-minus');
                } else {
                    content.classList.add('hidden');
                    icon.classList.remove('fa-minus');
                    icon.classList.add('fa-plus');
                }
            });
        });

        // Generate PDF
        function generatePDF() {
            const { jsPDF } = window.jspdf;
            const doc = new jsPDF();
            
            // Header Sekolah
            doc.setFont("helvetica", "bold");
            doc.setFontSize(14);
            doc.text("MADRASAH IBTIDAIYAH 'HIDAYATUL ULUM'", 50, 15);
            doc.setFontSize(10);
            doc.text("NSM: 111235180087 - NPSN: 60717631 - NPWP: 31.223.698.7-655.000", 50, 22);
            doc.text("Dsn. Tengger, Ds. Blongko, Kec. Ngetos, Kab. Nganjuk (64474)", 50, 27);
            doc.text("Telp/HP: 081357251463 - Email: hidayatululumtengger87@gmail.com", 50, 32);
            doc.line(15, 35, 195, 35);
