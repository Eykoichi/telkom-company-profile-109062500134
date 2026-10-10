<?php
$pageTitle = 'Profil - Telkom University';
require 'includes/header.php';
?>

<section class="section">
    <div class="container article-body">
        <span class="eyebrow">Profil</span>
        
        <h1>Tentang proyek simulasi Telkom University</h1>git
        <p class="lead">
            Halaman ini digunakan untuk mempraktikkan struktur halaman PHP yang memakai header dan footer bersama.
        </p>
        
        <h2>Visi pembelajaran</h2>
        <p>
            Mahasiswa memahami hubungan antarmuka web, logika PHP, basis data, dan version control melalui satu proyek terpadu.
        </p>
        
        <h2>Tujuan proyek</h2>
        <p>
            Proyek menampilkan profil, program studi, berita, serta formulir kontak. Data program studi dan berita dibaca dari database, sedangkan pesan pengguna disimpan menggunakan prepared statement.
        </p>
        
        <h2>Fokus Pembelajaran</h2>
        <ul>
            <li>
                <strong>Pengembangan Antarmuka:</strong> Menerapkan desain web yang responsif dan terstruktur menggunakan komponen modular (header dan footer).
            </li>
            <li>
                <strong>Manajemen Basis Data:</strong> Mengintegrasikan operasi pembacaan dan penyimpanan data secara aman menggunakan teknik <em>prepared statement</em>.
            </li>
            <li>
                <strong>Kontrol Versi & Kolaborasi:</strong> Melacak perubahan kode program secara terstruktur selama proses pengembangan proyek berlangsung.
            </li>
        </ul>
        
        <div class="alert alert-success">
            Konten institusi pada website ini bersifat simulasi untuk keperluan praktikum.
        </div>
    </div>
</section>

<?php require 'includes/footer.php'; ?>