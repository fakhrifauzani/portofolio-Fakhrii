<?php
declare(strict_types=1);

return [
    'site' => [
        'title' => 'Fakhri Fauzani Rahman — Portofolio',
        'meta_description' => 'Portofolio Fakhri Fauzani Rahman, siswa kelas XII Rekayasa Perangkat Lunak yang tertarik pada web development, teknologi, dan audio engineering.',
        'name' => 'Fakhri Fauzani Rahman',
        'initials' => 'FFR',
        'role' => 'Siswa Rekayasa Perangkat Lunak',
        'school' => 'SMK Ar-Rahmat',
        'grade' => 'Kelas XII',
        'hero_description' => 'Siswa kelas XII Rekayasa Perangkat Lunak di SMK Ar-Rahmat yang memiliki ketertarikan pada pengembangan web, pemrograman, teknologi, dan audio engineering. Saya juga seorang audiophile yang tertarik pada kualitas suara dan perangkat audio. Saya terus belajar, mengeksplorasi hal baru, dan mengembangkan keterampilan melalui latihan maupun proyek.',
        'about' => [
            'heading' => 'Belajar lewat proses dan rasa ingin tahu.',
            'paragraphs' => [
                'Saya merupakan siswa kelas XII jurusan Rekayasa Perangkat Lunak di SMK Ar-Rahmat. Saya tertarik pada pengembangan website, pemrograman, teknologi, dan sound engineering. Saya juga seorang audiophile yang tertarik pada kualitas serta karakter suara.',
                'Saya ingin terus belajar dan meningkatkan kemampuan melalui latihan serta proyek yang relevan. Portofolio ini menjadi tempat untuk merangkum proses belajar dan contoh konsep yang sedang saya kembangkan.',
            ],
        ],
    ],
    'skills' => [
        'section_intro' => 'Teknologi dan bidang yang sedang saya pelajari serta eksplorasi.',
        'items' => [
            ['name' => 'HTML', 'icon' => 'html5', 'description' => 'Menyusun struktur halaman web yang semantik dan mudah dipahami.'],
            ['name' => 'CSS', 'icon' => 'css3', 'description' => 'Mengatur tata letak, tampilan, dan responsivitas antarmuka.'],
            ['name' => 'JavaScript', 'icon' => 'javascript', 'description' => 'Menambahkan interaksi dan perilaku dinamis pada halaman web.'],
            ['name' => 'PHP', 'icon' => 'php', 'description' => 'Mempelajari logika sisi server dan pengolahan halaman dinamis.'],
            ['name' => 'MySQL', 'icon' => 'mysql', 'description' => 'Mempelajari pengelolaan data relasional dan kueri dasar database.'],
            ['name' => 'Laravel', 'icon' => 'laravel', 'description' => 'Mengenal kerangka kerja PHP untuk membangun aplikasi web.'],
            ['name' => 'Audio Engineering', 'icon' => 'audio', 'description' => 'Minat pada rekaman, pengolahan suara, dan alur kerja audio.'],
        ],
    ],
    'projects' => [
        'section_intro' => 'berikut adalah contoh latihan dan konsep pembelajaran, bukan klaim proyek yang sudah selesai.',
        'items' => [
            [
                'title' => 'Website Portofolio Pribadi',
                'description' => 'Latihan menyusun halaman profil satu halaman dengan navigasi, bagian keterampilan, dan kartu proyek.',
                'category' => 'Latihan',
                'status' => 'Contoh proyek',
                'technologies' => ['PHP', 'JavaScript'],
                'image_url' => 'assets/images/project-portofolio.png',
                'image_alt' => 'Tangkapan layar halaman utama website portofolio pribadi',
                'image_fallback' => 'assets/images/project-portfolio.svg',
                'image_source' => '',
                'image_fit' => 'contain',
            ],
            [
                'title' => 'Konversi Mata Uang & Crypto',
                'description' => 'Aplikasi untuk mengonversi nilai mata uang, menukar pilihan mata uang, dan melihat ringkasan harga aset kripto.',
                'category' => 'Konsep proyek',
                'status' => 'Contoh proyek',
                'technologies' => ['php', 'mysql'],
                'image_url' => 'assets/images/project-konversi-mata-uang.png',
                'image_alt' => 'Tangkapan layar aplikasi konversi mata uang dan harga aset kripto',
                'image_fallback' => 'assets/images/project-data.svg',
                'image_source' => '',
                'image_fit' => 'contain',
            ],
            [
                'title' => 'Website Perpustakaan Sekolah',
                'description' => 'Konsep halaman informatif untuk meminjam buku, mangelola daftar buku, dan informasi perpustakaan.',
                'category' => 'Konsep proyek',
                'status' => 'sudah dikerjakan',
                'technologies' => ['PHP', 'MySQL'],
                'image_url' => 'assets/images/project-library.png',
                'image_alt' => 'Tangkapan layar dashboard Aplikasi Perpustakaan Online',
                'image_fallback' => 'assets/images/project-school.svg',
                'image_source' => '',
                'image_fit' => 'contain',
            ],
        ],
    ],
    'contact' => [
        'github_url' => 'https://github.com/fakhrifauzani',
        'github_placeholder' => 'https://github.com/USERNAME_GITHUB',
        'email' => 'fakhrifauzanirahman@gmail.com',
        'other_links' => [
            [
                'label' => 'Instagram',
                'url' => 'https://www.instagram.com/fakhrifauzanirahman/',
                'display' => '@fakhrifauzanirahman',
                'symbol' => 'IG',
            ],
        ],
        'message' => 'Saya terbuka untuk terhubung dan berbagi proses belajar melalui media sosial atau email.',
    ],
    'footer' => [
        'name' => 'Fakhri Fauzani Rahman',
        'year' => 2026,
        'copyright' => 'All rights reserved.',
    ],
];
