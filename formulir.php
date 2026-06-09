<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>Formulir Pendaftaran - MI Hidayatul Ulum</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * { font-family: 'Inter', sans-serif; }
        .form-card {
            animation: fadeInUp 0.5s ease-out;
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
        .btn-primary {
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        input:focus, select:focus, textarea:focus {
            ring: 2px solid #f97316;
            border-color: #f97316;
        }
    </style>
</head>
<body class="bg-gradient-to-b from-green-50 to-gray-100">

    <!-- Header dengan tombol kembali -->
    <div class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-3">
                    <a href="/" class="text-orange-500 hover:text-orange-600 transition">
                        <i class="fas fa-arrow-left text-xl"></i>
                    </a>
                    <img class="w-10 h-10 rounded-full bg-white p-1 shadow-sm object-contain" 
                         src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg1YyQtJSBc4S_vAvXQvCTY9g9WoHxLAumSJc5-6mXZEy2Z1F8KSJjb91fM67ubjJ5Lyb7fgeM_LSu76hhuYjQb7AYHcg6A6H4cxzVXPN29Fd3Zpa50dtAegesiqvWJNM-ivoQkSil1vvV3As5SOEMIc03w7QH8RPn7TyNGfefGPrah7IzRrGpWUvF3Gw8/s320/1730258986091.png" 
                         alt="Logo">
                    <span class="font-bold text-gray-800">Formulir PPDB Online</span>
                </div>
                <div class="text-sm text-gray-500">
                    <i class="fas fa-calendar-alt mr-1"></i> TA 2025/2026
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto mt-6 mb-10 px-4">
        <div class="form-card bg-white shadow-xl rounded-2xl overflow-hidden max-w-5xl mx-auto">
            <!-- Header Form -->
            <div class="bg-gradient-to-r from-green-600 to-green-500 text-white px-6 py-5 text-center">
                <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg1YyQtJSBc4S_vAvXQvCTY9g9WoHxLAumSJc5-6mXZEy2Z1F8KSJjb91fM67ubjJ5Lyb7fgeM_LSu76hhuYjQb7AYHcg6A6H4cxzVXPN29Fd3Zpa50dtAegesiqvWJNM-ivoQkSil1vvV3As5SOEMIc03w7QH8RPn7TyNGfefGPrah7IzRrGpWUvF3Gw8/s320/1730258986091.png" 
                     alt="Logo MI Hidayatul Ulum" class="mx-auto w-20 mb-2 bg-white rounded-full p-1">
                <h2 class="text-xl font-bold">FORMULIR PESERTA DIDIK BARU</h2>
                <p class="text-green-100 text-sm">Isi data dengan lengkap dan benar</p>
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
                                <input type="text" id="nama" class="w-full bg-green-50 border border-green-200 rounded-lg p-2.5 focus:outline-none focus:border-orange-400 focus:ring-1 focus:ring-orange-400 transition" required>
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium mb-1">NIK <span class="text-red-500">*</span></label>
                                <input type="text" id="nik" class="w-full bg-green-50 border border-green-200 rounded-lg p-2.5 focus:outline-none focus:border-orange-400 focus:ring-1 focus:ring-orange-400 transition" required>
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium mb-1">Tempat Lahir <span class="text-red-500">*</span></label>
                                <input type="text" id="tempat_lahir" class="w-full bg-green-50 border border-green-200 rounded-lg p-2.5 focus:outline-none focus:border-orange-400 focus:ring-1 focus:ring-orange-400 transition" required>
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium mb-1">Tanggal Lahir <span class="text-red-500">*</span></label>
                                <input type="date" id="tanggal_lahir" class="w-full bg-green-50 border border-green-200 rounded-lg p-2.5 focus:outline-none focus:border-orange-400 focus:ring-1 focus:ring-orange-400 transition" required>
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium mb-1">Jenis Kelamin <span class="text-red-500">*</span></label>
                                <select id="jenis_kelamin" class="w-full bg-green-50 border border-green-200 rounded-lg p-2.5 focus:outline-none focus:border-orange-400 focus:ring-1 focus:ring-orange-400 transition" required>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium mb-1">Agama <span class="text-red-500">*</span></label>
                                <select id="agama" class="w-full bg-green-50 border border-green-200 rounded-lg p-2.5 focus:outline-none focus:border-orange-400 focus:ring-1 focus:ring-orange-400 transition" required>
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
                                <input type="text" id="kewarganegaraan" value="Indonesia" class="w-full bg-green-50 border border-green-200 rounded-lg p-2.5 focus:outline-none focus:border-orange-400 focus:ring-1 focus:ring-orange-400 transition" required>
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium mb-1">Moda Transportasi ke Sekolah</label>
                                <select id="transportasi" class="w-full bg-green-50 border border-green-200 rounded-lg p-2.5 focus:outline-none focus:border-orange-400 focus:ring-1 focus:ring-orange-400 transition">
                                    <option value="Jalan Kaki">Jalan Kaki</option>
                                    <option value="Sepeda">Sepeda</option>
                                    <option value="Motor">Motor</option>
                                    <option value="Mobil">Mobil</option>
                                    <option value="Angkutan Umum">Angkutan Umum</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium mb-1">Anak ke Berapa dalam Keluarga</label>
                                <input type="number" id="anak_ke" class="w-full bg-green-50 border border-green-200 rounded-lg p-2.5 focus:outline-none focus:border-orange-400 focus:ring-1 focus:ring
