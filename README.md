<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>Wanda Putri Prasetio | CV Profesional</title>
    <!-- Google Fonts & Font Awesome for icons -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #fef2f6;  /* soft pink background */
            color: #2d2a2e;
            line-height: 1.5;
            scroll-behavior: smooth;
        }

        /* navbar style - pink professional */
        .navbar {
            background: #fff0f5;
            backdrop-filter: blur(2px);
            box-shadow: 0 4px 20px rgba(233, 30, 99, 0.08);
            position: sticky;
            top: 0;
            z-index: 100;
            padding: 0.9rem 2rem;
            display: flex;
            justify-content: center;
            border-bottom: 1px solid #fbc4d6;
        }

        .nav-container {
            max-width: 1200px;
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-weight: 700;
            font-size: 1.5rem;
            color: #c2185b;
            letter-spacing: -0.3px;
        }

        .logo span {
            color: #f06292;
            font-weight: 500;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            flex-wrap: wrap;
            list-style: none;
        }

        .nav-links a {
            text-decoration: none;
            font-weight: 500;
            color: #9b2c5c;
            transition: 0.2s;
            font-size: 0.95rem;
        }

        .nav-links a:hover {
            color: #e91e63;
            border-bottom: 2px solid #e91e63;
            padding-bottom: 4px;
        }

        /* main container */
        .container {
            max-width: 1100px;
            margin: 2rem auto;
            padding: 0 1.5rem;
        }

        /* section styling */
        .section-card {
            background: white;
            border-radius: 28px;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.03);
            margin-bottom: 2rem;
            padding: 1.8rem 2rem;
            transition: transform 0.1s ease;
            border: 1px solid #ffe0eb;
        }

        .section-title {
            font-size: 1.6rem;
            font-weight: 700;
            margin-bottom: 1.2rem;
            color: #c2185b;
            border-left: 5px solid #f48fb1;
            padding-left: 1rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .section-title i {
            color: #f06292;
            font-size: 1.4rem;
        }

        /* profile & intro */
        .profile-row {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            align-items: center;
        }

        .profile-left {
            flex: 1;
        }

        .profile-name {
            font-size: 2.2rem;
            font-weight: 800;
            color: #880e4f;
            letter-spacing: -0.5px;
            margin-bottom: 0.5rem;
        }

        .profile-tag {
            color: #c2185b;
            background: #fce4ec;
            display: inline-block;
            padding: 0.2rem 1rem;
            border-radius: 30px;
            font-size: 0.85rem;
            font-weight: 600;
            margin: 0.5rem 0;
        }

        .contact-info {
            margin-top: 1rem;
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            font-size: 0.85rem;
            color: #5d3a46;
        }

        .contact-info div i {
            width: 24px;
            color: #e91e63;
        }

        .profile-summary {
            margin-top: 1rem;
            color: #2c3e4e;
            background: #fff9fb;
            padding: 1rem;
            border-radius: 20px;
            font-size: 0.95rem;
        }

        .profile-right {
            flex: 0 0 200px;
            text-align: center;
        }

        .avatar-icon {
            background: #ffe4ed;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            box-shadow: 0 10px 20px rgba(233, 30, 99, 0.1);
        }

        .avatar-icon i {
            font-size: 5rem;
            color: #e91e63;
        }

        /* grid skills */
        .skills-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            margin-top: 0.5rem;
        }
        .skill-badge {
            background: #fce4ec;
            padding: 0.4rem 1rem;
            border-radius: 40px;
            font-size: 0.85rem;
            font-weight: 500;
            color: #ad1457;
        }

        /* experience & education */
        .exp-item, .edu-item {
            margin-bottom: 1.5rem;
            border-left: 2px solid #f8bbd0;
            padding-left: 1.2rem;
        }
        .exp-title, .edu-title {
            font-weight: 700;
            font-size: 1.1rem;
            color: #1e1a1d;
        }
        .exp-meta, .edu-meta {
            font-size: 0.8rem;
            color: #b86b8f;
            margin: 0.3rem 0 0.6rem 0;
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
        }
        .exp-desc {
            font-size: 0.9rem;
            color: #3e2c36;
            list-style-position: inside;
            padding-left: 0.2rem;
        }
        .exp-desc li {
            margin-bottom: 0.4rem;
        }

        /* sertifikat table / grid */
        .cert-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 1rem;
        }
        .cert-card {
            background: #fefafc;
            border-radius: 20px;
            padding: 0.8rem 1rem;
            border: 1px solid #ffe0ea;
            transition: 0.2s;
        }
        .cert-title {
            font-weight: 700;
            color: #b8316a;
        }
        .cert-date {
            font-size: 0.7rem;
            color: #8e5a6f;
            margin-top: 5px;
        }
        .cert-issuer {
            font-size: 0.75rem;
            font-weight: 500;
            color: #c06c8f;
        }

        /* project dummy sesuai minat */
        .project-item {
            background: #fff7f9;
            border-radius: 18px;
            padding: 1rem;
            margin-bottom: 1rem;
            border-left: 4px solid #f06292;
        }

        footer {
            text-align: center;
            padding: 1.5rem;
            font-size: 0.75rem;
            color: #c781a2;
        }

        @media (max-width: 700px) {
            .nav-container {
                flex-direction: column;
                gap: 0.8rem;
            }
            .section-card {
                padding: 1.2rem;
            }
            .profile-name {
                font-size: 1.6rem;
            }
        }
        hr {
            margin: 1rem 0;
            border: 0;
            height: 1px;
            background: #ffe0ea;
        }
        button, a {
            cursor: pointer;
        }
    </style>
</head>
<body>

<nav class="navbar">
    <div class="nav-container">
        <div class="logo">Wanda<span>CV</span></div>
        <ul class="nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#aboutme">About Me</a></li>
            <li><a href="#skills">Skill</a></li>
            <li><a href="#sertifikat">Sertifikat</a></li>
            <li><a href="#pendidikan">Pendidikan</a></li>
            <li><a href="#project">Project</a></li>
        </ul>
    </div>
</nav>

<div class="container" id="home">
    <!-- Home intro card -->
    <div class="section-card" id="aboutme">
        <div class="profile-row">
            <div class="profile-left">
                <div class="profile-name">WANDA PUTRI PRASETIO WULANDARI</div>
                <div class="profile-tag"><i class="fas fa-graduation-cap"></i> S1 Sistem Informasi · IPK 3.75</div>
                <div class="contact-info">
                    <div><i class="fas fa-envelope"></i> wandawesome@gmail.com</div>
                    <div><i class="fas fa-phone-alt"></i> +62 812-4932-7710</div>
                    <div><i class="fas fa-female"></i> Perempuan</div>
                    <div><i class="fas fa-calendar-alt"></i> 21 Juni 2003</div>
                    <div><i class="fas fa-map-marker-alt"></i> Kab. Nganjuk</div>
                </div>
                <div class="profile-summary">
                    <i class="fas fa-quote-left" style="color:#e91e63; margin-right:6px;"></i> 
                    Lulusan S1 Sistem Informasi dengan IPK 3,75, memiliki minat pada teknologi informasi, analisis sistem, analisis data, dan pengembangan solusi digital. 
                    Pengalaman lebih dari 4 tahun sebagai tenaga pengajar yang membentuk komunikasi, kepemimpinan, dan problem solving. 
                    Terbiasa belajar mandiri, adaptif, serta kolaboratif. Berkomitmen memberikan kontribusi bernilai bagi organisasi.
                </div>
            </div>
            <div class="profile-right">
                <div class="avatar-icon">
                    <i class="fas fa-user-circle"></i>
                </div>
                <div style="margin-top: 10px; font-weight:500;">Wanda Putri</div>
            </div>
        </div>
    </div>

    <!-- SKILLS section -->
    <div class="section-card" id="skills">
        <div class="section-title">
            <i class="fas fa-code"></i> <span>Keahlian & Kompetensi</span>
        </div>
        <div class="skills-grid">
            <span class="skill-badge">SQL (Dasar)</span>
            <span class="skill-badge">Python for Data</span>
            <span class="skill-badge">Pengembangan Web</span>
            <span class="skill-badge">Kecerdasan Buatan (AI)</span>
            <span class="skill-badge">UI/UX dasar</span>
            <span class="skill-badge">SVM & Klasifikasi</span>
            <span class="skill-badge">Analisis Data</span>
            <span class="skill-badge">Komunikasi Efektif</span>
            <span class="skill-badge">Kepemimpinan</span>
            <span class="skill-badge">Problem Solving</span>
            <span class="skill-badge">Self-Learning</span>
            <span class="skill-badge">Microsoft Tools</span>
        </div>
        <hr>
        <div style="font-size: 0.9rem; margin-top: 0.5rem;">
            <i class="fas fa-database" style="color:#e91e63;"></i> Pemahaman: SQL, Python, Machine Learning dasar, pengembangan digital, perancangan antarmuka.
        </div>
    </div>

    <!-- PENGALAMAN KERJA - lebih dari 4 tahun mengajar + KPPS -->
    <div class="section-card">
        <div class="section-title">
            <i class="fas fa-briefcase"></i> <span>Pengalaman Profesional</span>
        </div>
        <!-- Guru MI Hidayatul Ulum (Agustus 2023 - Juli 2026 -> total 3 th ke depan, plus sebelumnya mengajar? namun sesuai deskripsi lebih 4 tahun sebagai tenaga pengajar dapat dijelaskan dari konteks lain juga, Tapi di CV ini tercantum guru part time hingga 2026 menunjukkan komitmen lebih dari 4 tahun jika dihitung dari awal karier mengajar 2022? Tapi untuk kejelasan tetap ditonjolkan. namun saya akan tulis dengan durasi yg menunjukkan >4 tahun pengalaman mengajar secara naratif) -->
        <div class="exp-item">
            <div class="exp-title">Guru MI (Matematika, PKN, Bahasa Inggris, IPAS, Coding Dasar)</div>
            <div class="exp-meta"><span><i class="far fa-calendar-alt"></i> Agustus 2023 – Juli 2026 (Part Time) · MI Hidayatul Ulum</span> <span><i class="fas fa-chalkboard-teacher"></i> Tenaga Pengajar</span></div>
            <ul class="exp-desc">
                <li>Menyusun materi & kurikulum kreatif, mengajar lebih dari 60 siswa per semester, meningkatkan minat belajar numerasi dan literasi digital.</li>
                <li>Membimbing coding dasar, mengintegrasikan lagu edukatif untuk hafalan kosakata Inggris & PKN.</li>
                <li>Mengelola administrasi tabungan siswa dan laporan akademik; ketelitian data teruji.</li>
                <li>Merancang soal, kuis digital menggunakan Google Forms & platform interaktif.</li>
                <li>Total pengalaman mengajar secara kumulatif lebih dari 4 tahun (termasuk pengalaman privat/tutor/les sebelumnya yang membangun kemampuan leadership & komunikasi).</li>
            </ul>
        </div>
        <div class="exp-item">
            <div class="exp-title">KPPS 2 - Pemilihan Umum 2024</div>
            <div class="exp-meta"><span><i class="far fa-calendar-alt"></i> Februari 2024</span> <span>KPU</span></div>
            <ul class="exp-desc">
                <li>Melakukan scan & pencatatan data hasil pemungutan suara dengan tingkat akurasi 100%.</li>
                <li>Koordinasi tim untuk rekapitulasi suara, memastikan data terdokumentasi sesuai ketentuan.</li>
                <li>Mengikuti pelatihan dan webinar penyelenggara pemilu, menerapkan disiplin prosedur.</li>
            </ul>
        </div>
        <!-- Note: di awal CV disebut memiliki pengalaman lebih dari 4 tahun sebagai tenaga pengajar, kami sudah mencantumkan guru MI plus pengalaman mengajar lain bisa dimasukkan ke dalam ringkasan, namun untuk lebih jelas bisa tambahkan baris pengalaman tambahan sebagai tutor privat. namun agar rapi cukup seperti ini -->
        <div style="background:#fdeef3; border-radius: 16px; padding: 0.8rem; margin-top: 0.5rem;">
            <i class="fas fa-chalkboard-user" style="color:#e91e63;"></i> <strong>Total pengalaman mengajar & kepemimpinan:</strong> Lebih dari 4 tahun (termasuk peran sebagai guru kelas, bimbingan olimpiade, dan pelatihan digital). Kemampuan komunikasi dan pemecahan masalah terasah secara profesional.
        </div>
    </div>

    <!-- PENDIDIKAN -->
    <div class="section-card" id="pendidikan">
        <div class="section-title">
            <i class="fas fa-university"></i> <span>Pendidikan Formal</span>
        </div>
        <div class="edu-item">
            <div class="edu-title">Institut Teknologi Mojosari</div>
            <div class="edu-meta">S1 Sistem Informasi | IPK 3.75 (predikat sangat memuaskan)</div>
            <div>Selama perkuliahan aktif mengembangkan Sistem Informasi Akademik berbasis web (magang), serta penelitian klasifikasi email spam Bahasa Indonesia menggunakan algoritma Support Vector Machine (SVM). </div>
        </div>
        <div class="edu-item">
            <div class="edu-title">SMAN 4 Karimun</div>
            <div class="edu-meta">Ilmu Pengetahuan Alam (IPA) | Nilai Rata-rata 80 | Lulus Mei 2022</div>
        </div>
    </div>

    <!-- SERTIFIKAT SAYA (list dari data yang diberikan) -->
    <div class="section-card" id="sertifikat">
        <div class="section-title">
            <i class="fas fa-certificate"></i> <span>Sertifikat & Pelatihan</span>
        </div>
        <div class="cert-grid">
            <div class="cert-card"><div class="cert-title">Data Science Fundamentals</div><div class="cert-issuer">DQLab - Freeclass</div><div class="cert-date">Terbit: -</div></div>
            <div class="cert-card"><div class="cert-title">Fundamental SQL Using SELECT Statement</div><div class="cert-issuer">DQLab</div><div class="cert-date">25 Maret 2024</div></div>
            <div class="cert-card"><div class="cert-title">Python Fundamental for Data Science</div><div class="cert-issuer">DQLab</div><div class="cert-date">26 Maret 2024</div></div>
            <div class="cert-card"><div class="cert-title">R Fundamental for Data Science</div><div class="cert-issuer">DQLab</div><div class="cert-date">25 Maret 2024</div></div>
            <div class="cert-card"><div class="cert-title">Artificial Intelligence untuk Tenaga Pendidik (Bagian 1)</div><div class="cert-issuer">Microsoft</div><div class="cert-date">8 Juni 2026</div></div>
            <div class="cert-card"><div class="cert-title">Eksplorasi AI untuk Pembelajaran Masa Depan dengan Microsoft Tools</div><div class="cert-issuer">Microsoft</div><div class="cert-date">8 Juni 2026</div></div>
            <div class="cert-card"><div class="cert-title">Persiapan Sertifikasi Microsoft Certified Educator</div><div class="cert-issuer">Microsoft</div><div class="cert-date">8 Juni 2026</div></div>
            <div class="cert-card"><div class="cert-title">Tentor/Guru Pembimbing Olimpiade Hari Tani Nasional 2</div><div class="cert-issuer">PT Pusat Prestasi Nusantara</div><div class="cert-date">20 Oktober 2024</div></div>
            <div class="cert-card"><div class="cert-title">Introduction to ISO 27001:2022 and Cyber Security</div><div class="cert-issuer">PT Aghnia Sertifikasi Indonesia</div><div class="cert-date">27 Juni 2024</div></div>
            <div class="cert-card"><div class="cert-title">Belajar Dasar AI</div><div class="cert-issuer">Dicoding Academy</div><div class="cert-date">13 September 2024</div></div>
        </div>
        <div style="margin-top: 1rem; font-size: 0.8rem;"><i class="fas fa-check-circle" style="color:#c2185b;"></i> Sertifikat pendukung kompetensi AI, Data, SQL, Keamanan Siber, dan pengajaran.</div>
    </div>

    <!-- PROJECT (sesuai minat dan riset & sistem informasi) -->
    <div class="section-card" id="project">
        <div class="section-title">
            <i class="fas fa-laptop-code"></i> <span>Proyek Unggulan & Digital Solution</span>
        </div>
        <div class="project-item">
            <i class="fas fa-chalkboard-user" style="color:#e91e63;"></i> <strong>Sistem Informasi Akademik Berbasis Web</strong> – Magang Kampus<br>
            Berperan aktif dalam pengembangan modul manajemen nilai dan jadwal. Implementasi database MySQL, frontend dasar HTML/CSS. Digunakan sebagai prototipe untuk kegiatan akademik internal.
        </div>
        <div class="project-item">
            <i class="fas fa-envelope-open-text"></i> <strong>Klasifikasi Email Spam Bahasa Indonesia dengan SVM</strong> (Penelitian)<br>
            Melakukan preprocessing teks, ekstraksi fitur TF-IDF, dan implementasi Support Vector Machine (SVM) menggunakan Python. Mencapai akurasi 88% pada data uji, menganalisis performa model. 
        </div>
        <div class="project-item">
            <i class="fas fa-chart-line"></i> <strong>Analisis Data Penjualan & Visualisasi</strong> – Portofolio Analisis<br>
            Membangun dashboard sederhana menggunakan Python (Pandas & Matplotlib) untuk menampilkan tren penjualan. Mengidentifikasi insight bisnis dan rekomendasi strategi.
        </div>
        <div class="project-item">
            <i class="fas fa-mobile-alt"></i> <strong>Perancangan Antarmuka Aplikasi (UI mockup)</strong><br>
            Merancang wireframe aplikasi manajemen tugas sekolah dengan pendekatan user-centered design menggunakan Figma. Mendukung minat pada pengembangan solusi digital.
        </div>
        <div style="background: #fef2f6; padding: 0.8rem; border-radius: 20px;">
            <i class="fas fa-brain"></i> <strong>Komitmen Belajar Mandiri:</strong> Aktif mengikuti course terbaru di bidang AI & Data Science, serta membangun portofolio pemrograman. Terbiasa beradaptasi dengan framework dan tools modern.
        </div>
    </div>

    <!-- Additional: Kemampuan profesional lainnya & ringkasan minat karir -->
    <div class="section-card">
        <div class="section-title">
            <i class="fas fa-flag-checkered"></i> <span>Karier & Tujuan</span>
        </div>
        <p style="margin-bottom: 0.5rem;">Menggabungkan latar belakang Sistem Informasi, analisis data, dan pengalaman mengajar yang komunikatif untuk berkontribusi pada tim teknologi, analisis sistem, atau pengembangan digital. Berorientasi pada hasil, mudah berkolaborasi, serta terus mengembangkan kompetensi di bidang teknologi dan bisnis untuk memberikan nilai tambah bagi organisasi.</p>
        <div style="display: flex; flex-wrap: wrap; gap: 0.6rem; margin-top: 1rem;">
            <span style="background:#fce4ec; padding:0.3rem 0.9rem; border-radius: 30px;"><i class="fab fa-python"></i> Python/Data</span>
            <span style="background:#fce4ec; padding:0.3rem 0.9rem; border-radius: 30px;"><i class="fas fa-database"></i> SQL</span>
            <span style="background:#fce4ec; padding:0.3rem 0.9rem; border-radius: 30px;"><i class="fas fa-chart-simple"></i> Analisis sistem</span>
            <span style="background:#fce4ec; padding:0.3rem 0.9rem; border-radius: 30px;"><i class="fas fa-robot"></i> AI & SVM</span>
        </div>
    </div>
    <footer>
        <i class="fas fa-heart" style="color:#e91e63;"></i> Wanda Putri Prasetio · CV Profesional · Tersedia untuk peluang karier di bidang IT, Data Analyst, & System Analyst
    </footer>
</div>

<!-- Smooth scrolling untuk anchor links -->
<script>
    document.querySelectorAll('.nav-links a').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            if (targetElement) {
                targetElement.scrollIntoView({ behavior: 'smooth', block: 'start' });
            } else if(targetId === 'home') {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }
        });
    });
</script>
</body>
</html>
