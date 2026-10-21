# Portofolio Fakhri Fauzani Rahman

Website portofolio satu halaman dengan PHP Native, HTML, CSS, dan JavaScript vanilla. Konten berasal dari satu file konfigurasi PHP; website tidak memerlukan framework backend maupun database.

## Kebutuhan

- PHP 8.1 atau lebih baru.
- Browser modern.
- Laragon, XAMPP, atau PHP built-in server.
- Gambar proyek disimpan secara lokal di dalam folder `assets/images/`.

## Menjalankan di Laragon

1. Simpan folder proyek di `C:\laragon\www\portofolio_fakhri`.
2. Jalankan Laragon dan mulai Apache.
3. Buka `http://localhost/portofolio_fakhri/`.

Jika foldernya memiliki nama lain, sesuaikan bagian terakhir URL dengan nama folder tersebut.

## Menjalankan di XAMPP

1. Salin folder proyek ke `C:\xampp\htdocs\portofolio_fakhri`.
2. Jalankan Apache dari XAMPP Control Panel.
3. Buka `http://localhost/portofolio_fakhri/`.

## Menjalankan dengan PHP lokal

Buka terminal pada folder proyek lalu jalankan:

```bash
php -S localhost:8000
```

Buka `http://localhost:8000/`.

## Deploy ke Vercel

Proyek ini menggunakan runtime komunitas `vercel-php` untuk menjalankan PHP sebagai Vercel Function. Entry point-nya ada di `api/index.php`; file tersebut memuat halaman utama yang sama dengan versi Laragon. File CSS, JavaScript, dan gambar di `assets/` tetap disajikan sebagai aset statis.

1. Push folder proyek ini ke repository GitHub.
2. Di Vercel, pilih **Add New → Project**, lalu impor repository tersebut.
3. Biarkan **Root Directory** di folder proyek ini dan gunakan pengaturan build default.
4. Pilih **Deploy**. Setiap push berikutnya ke branch yang terhubung akan memicu deployment baru.

Runtime PHP ini dikelola komunitas dan versi konfigurasinya tercatat di `vercel.json`. Vercel menyediakan panduan deployment melalui [Git](https://vercel.com/docs/deployments/git) dan [CLI](https://vercel.com/docs/cli).

## Struktur proyek

```text
portofolio_fakhri/
├── index.php
├── api/
│   └── index.php
├── vercel.json
├── config/
│   └── portfolio.php
├── includes/
│   ├── helpers.php
│   ├── navbar.php
│   ├── hero.php
│   ├── about.php
│   ├── skills.php
│   ├── projects.php
│   ├── contact.php
│   └── footer.php
├── assets/
│   ├── css/style.css
│   ├── js/script.js
│   └── images/
│       ├── profile.jpg
│       ├── profile-placeholder.svg
│       ├── project-portfolio.svg
│       ├── project-portofolio.png
│       ├── project-data.svg
│       ├── project-konversi-mata-uang.png
│       ├── project-library.png
│       ├── project-school.svg
│       └── favicon.svg
└── README.md
```

## Mengubah konten

Edit `config/portfolio.php` untuk mengganti nama, deskripsi hero, sekolah, paragraf About, keterampilan, proyek, kontak, dan teks footer. File PHP pada `includes/` mengatur tampilan tiap bagian; CSS dan JavaScript terpisah di folder `assets/`.

### Mengganti foto profil

Foto profil saat ini tersimpan di `assets/images/profile.jpg`. Untuk menggantinya nanti, timpa file tersebut dengan foto baru memakai nama yang sama. Jika file dihapus atau gagal dimuat, `profile-placeholder.svg` akan ditampilkan. Foto akan dipotong agar memenuhi area profil; gunakan gambar potret yang jelas.

### Menambah atau mengubah keterampilan

Ubah daftar `skills.items` di `config/portfolio.php`. Setiap item memiliki `name`, `icon`, dan `description`. Ikon SVG lokal untuk tiap bidang dirender oleh `skill_icon_svg()` di `includes/helpers.php`. Kartu saat ini diberi keterangan “Sedang dipelajari” tanpa angka persentase.

### Mengganti atau menambah proyek

Ubah `projects.items` di `config/portfolio.php`. Setiap kartu menerima `title`, `description`, `category`, `status`, `technologies`, `image_url`, `image_alt`, `image_fallback`, dan `image_source`. `image_url` dapat berisi URL HTTPS atau file gambar lokal di `assets/images/`. Kartu proyek hanya menampilkan gambar serta informasi teks, tanpa tautan atau tombol klik.

Tiga kartu awal diberi label latihan atau konsep dan tidak memiliki tautan demo/repository. Kartu Website Portofolio Pribadi memakai screenshot lokal `assets/images/project-portofolio.png`, kartu Konversi Mata Uang & Crypto memakai `assets/images/project-konversi-mata-uang.png`, dan kartu Website Perpustakaan Sekolah memakai `assets/images/project-library.png`. Masing-masing memiliki ilustrasi SVG lokal sebagai fallback jika gambar gagal dimuat.

### Mengatur GitHub dan email

Isi `contact.github_url` dengan alamat profil yang sebenarnya, misalnya `https://github.com/nama-akun`. Placeholder awal `https://github.com/USERNAME_GITHUB` hanya ditampilkan sebagai petunjuk, bukan tautan aktif. Isi `contact.email` bila ingin menampilkan email; email kosong atau tidak valid tidak akan ditautkan. Tautan tambahan dapat dimasukkan ke `contact.other_links`.

### Mengubah warna dan tampilan

Variabel warna utama ada di awal `assets/css/style.css` pada blok `:root`; tema terang atau gelap mengikuti preferensi sistem. Breakpoint responsif tersedia untuk layar kecil, tablet, dan desktop. Layar loading tampil saat aset halaman dimuat. Indikator progres di bagian atas mengikuti posisi scroll, sementara elemen muncul bertahap memakai `IntersectionObserver` di `assets/js/script.js`. `prefers-reduced-motion` dihormati oleh CSS.

## Pemeriksaan

Website dapat dijalankan tanpa database. Sebelum digunakan, periksa versi PHP dengan `php -v`, lalu periksa sintaks PHP dengan `php -l index.php`, `php -l config/portfolio.php`, dan `php -l pada setiap file PHP di folder includes/`. Uji navigasi serta tampilan pada lebar sekitar 360 px, 768 px, dan 1366 px. Foto proyek membutuhkan koneksi internet; jika gagal, SVG lokal digunakan.
