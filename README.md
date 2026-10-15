# MVC PHP Native - Data Buku Perpustakaan

Aplikasi CRUD sederhana bertema perpustakaan untuk mempelajari pola Model-View-Controller (MVC) menggunakan PHP Native dan PDO.

## Fitur Utama
- Menampilkan daftar buku perpustakaan (Read)
- Menambahkan data buku baru (Create)
- Mengubah informasi data buku (Update)
- Menghapus data buku (Delete)
- Validasi input wajib & perlindungan XSS (htmlspecialchars)
- Indikator notifikasi status aksi

## Struktur Entitas (Tabel `buku`)
- `id` (INT, Primary Key)
- `judul` (VARCHAR)
- `penulis` (VARCHAR)
- `penerbit` (VARCHAR)
- `tahun_terbit` (INT)
- `stok` (INT)
- `created_at` (TIMESTAMP)

## Kebutuhan Sistem
- PHP 8.0 atau lebih baru
- MySQL / MariaDB
- Laragon / XAMPP
- Git

## Cara Menjalankan
1. Tempatkan proyek pada direktori web server (misal: `D:/laragon/www/mvc-buku`).
2. Impor file skema database `database/skema.sql` ke MySQL.
3. Sesuaikan akun database pada `config/database.php` jika diperlukan.
4. Buka peramban dan akses: `http://localhost/mvc-buku/public/index.php`.