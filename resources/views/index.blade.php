<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OryzaDoc - Diagnosis Pintar untuk Tanaman Padi Sehat</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Feather Icons -->
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
    <!-- Tailwind Customization -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f7fee7',
                            100: '#ecfccb',
                            200: '#d9f99d',
                            300: '#bef264',
                            400: '#a3e635',
                            500: '#84cc16',
                            600: '#65a30d',
                            700: '#4d7c0f',
                            800: '#3f6212',
                            900: '#365314',
                        },
                        secondary: {
                            50: '#f0fdf4',
                            100: '#dcfce7',
                            200: '#bbf7d0',
                            300: '#86efac',
                            400: '#4ade80',
                            500: '#22c55e',
                            600: '#16a34a',
                            700: '#15803d',
                            800: '#166534',
                            900: '#14532d',
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <style>
        /* Warna teks normal semua menu */
        .navbar a {
            color: #4b5563;
            /* contoh abu-abu */
            text-decoration: none;
            padding-bottom: 4px;
            transition: color 0.3s, border-color 0.3s;
        }

        /* Warna saat hover */
        .navbar a:hover {
            color: #6ba31b;
            /* hijau */
        }

        /* State aktif saat section terlihat */
        .nav-active {
            color: #6ba31b;
            border-bottom: 3px solid #6ba31b;
        }

        .nav-buttons {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
    </style>
</head>

<body class="font-sans bg-white text-gray-800">
    <!-- Navigation -->
    <nav class="fixed w-full bg-white shadow-sm z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <i data-feather="cpu" class="text-primary-500 h-8 w-8"></i>
                        <span class="ml-2 text-xl font-bold text-primary-700">OryzaDoc</span>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-center space-x-4">
                        <a href="#home" class="text-gray-600 hover:text-primary-800 px-3 py-2 text-sm font-medium">Beranda</a>
                        <a href="#about" class="text-gray-600 hover:text-primary-600 px-3 py-2 text-sm font-medium">Tentang</a>
                        <a href="#features" class="text-gray-600 hover:text-primary-600 px-3 py-2 text-sm font-medium">Fitur</a>
                        <a href="#how-it-works" class="text-gray-600 hover:text-primary-600 px-3 py-2 text-sm font-medium">Cara Kerja</a>
                        <a href="#testimonials" class="text-gray-600 hover:text-primary-600 px-3 py-2 text-sm font-medium">Testimoni</a>
                        <a href="#team" class="text-gray-600 hover:text-primary-600 px-3 py-2 text-sm font-medium">Tim</a>
                    </div>
                </div>
                <div class="nav-buttons">
                    <a href="{{ route('Login') }}" class="bg-primary-500 hover:bg-primary-600 text-white font-medium py-2 px-3 rounded-lg shadow-md transition duration-300">Masuk</a>
                    <a href="{{ route('Login') }}?form=register" class="bg-primary-500 hover:bg-primary-600 text-white font-medium py-2 px-3 rounded-lg shadow-md transition duration-300">Daftar</a>
                </div>
                <div class="md:hidden">
                    <button class="mobile-menu-button p-2 rounded-md text-gray-700 hover:text-primary-600 focus:outline-none">
                        <i data-feather="menu"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div class="mobile-menu hidden md:hidden fixed inset-0 z-40 bg-white mt-16">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="#home" class="bloc text-base font-medium text-gray-700 hover:text-primary-600 hover:bg-gray-50">Beranda</a>
            <a href="#about" class="bloc text-base font-medium text-gray-700 hover:text-primary-600 hover:bg-gray-50">Tentang</a>
            <a href="#features" class="bloc text-base font-medium text-gray-700 hover:text-primary-600 hover:bg-gray-50">Fitur</a>
            <a href="#how-it-works" class="bloc text-base font-medium text-gray-700 hover:text-primary-600 hover:bg-gray-50">Cara Kerja</a>
            <a href="#testimonials" class="bloc text-base font-medium text-gray-700 hover:text-primary-600 hover:bg-gray-50">Testimoni</a>
            <a href="#team" class="bloc text-base font-medium text-gray-700 hover:text-primary-600 hover:bg-gray-50">Tim</a>
        </div>
    </div>

    <!-- Hero Section -->
    <section id="home" class="pt-24 pb-12 md:pt-32 md:pb-20 bg-gradient-to-b from-primary-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="md:flex md:items-center md:justify-between">
                <div class="md:w-1/2 mb-10 md:mb-0" data-aos="fade-right">
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-800 leading-tight mb-4">
                        Diagnosis Pintar untuk <span class="text-primary-600">Tanaman Padi Sehat</span>
                    </h1>
                    <p class="text-lg text-gray-600 mb-8">
                        OryzaDoc membantu petani mengidentifikasi penyakit tanaman padi dengan cepat dan akurat menggunakan teknologi berbasis AI.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="#diagnose" class="bg-primary-500 hover:bg-primary-600 text-white font-medium py-3 px-6 rounded-lg shadow-md transition duration-300">
                            Diagnosis Sekarang <i data-feather="arrow-right" class="ml-2 inline"></i>
                        </a>
                        <a href="#how-it-works" class="border border-primary-500 text-primary-500 hover:bg-primary-50 font-medium py-3 px-6 rounded-lg transition duration-300">
                            Pelajari Lebih Lanjut
                        </a>
                    </div>
                </div>
                <div class="md:w-1/2" data-aos="fade-left">
                    <img src="https://i.pinimg.com/736x/b6/39/b2/b639b249897cb4b75577004ed6217eb5.jpg" alt="Sawah Padi Sehat" class="rounded-lg shadow-xl">
                </div>
            </div>
        </div>
    </section>

    <!-- About Product -->
    <section id="about" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4" data-aos="fade-up">Apa itu OryzaDoc?</h2>
                <div class="w-20 h-1 bg-primary-500 mx-auto mb-6" data-aos="fade-up" data-aos-delay="100"></div>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                    OryzaDoc adalah sistem pakar yang dirancang untuk membantu petani mendiagnosis penyakit tanaman padi dengan cepat dan akurat.
                    Platform kami yang didukung AI menganalisis gejala dan memberikan rekomendasi pengobatan.
                </p>
            </div>
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div data-aos="fade-right">
                    <img src="https://i.pinimg.com/1200x/bf/fa/98/bffa98ba7e4e0fb03bd1a0b0591fc14b.jpg" alt="Teknologi" class="rounded-lg shadow-lg">
                </div>
                <div data-aos="fade-left">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Misi Kami</h3>
                    <p class="text-gray-600 mb-6">
                        Kami bertujuan memberdayakan petani padi dengan teknologi yang membantu mereka membuat keputusan tepat tentang tanaman mereka,
                        mengurangi kerugian dan meningkatkan hasil panen melalui diagnosis penyakit yang akurat.
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i data-feather="check-circle" class="text-primary-500 mr-3 mt-1"></i>
                            <span class="text-gray-700">Deteksi penyakit berbasis AI</span>
                        </li>
                        <li class="flex items-start">
                            <i data-feather="check-circle" class="text-primary-500 mr-3 mt-1"></i>
                            <span class="text-gray-700">Hasil diagnosis instan</span>
                        </li>
                        <li class="flex items-start">
                            <i data-feather="check-circle" class="text-primary-500 mr-3 mt-1"></i>
                            <span class="text-gray-700">Rekomendasi pengobatan</span>
                        </li>
                        <li class="flex items-start">
                            <i data-feather="check-circle" class="text-primary-500 mr-3 mt-1"></i>
                            <span class="text-gray-700">Tindakan pencegahan</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section id="features" class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4" data-aos="fade-up">Mengapa Memilih OryzaDoc?</h2>
                <div class="w-20 h-1 bg-primary-500 mx-auto mb-6" data-aos="fade-up" data-aos-delay="100"></div>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                    Platform kami menawarkan beberapa keunggulan yang menjadikannya pilihan terbaik untuk petani padi.
                </p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300" data-aos="fade-up">
                    <div class="text-primary-500 mb-4">
                        <i data-feather="activity" class="h-10 w-10"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Diagnosis Akurat</h3>
                    <p class="text-gray-600">
                        Sistem Pakar kami telah dilatih dengan ribuan gejala tanaman padi untuk memberikan identifikasi penyakit yang sangat akurat.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-primary-500 mb-4">
                        <i data-feather="clock" class="h-10 w-10"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Hasil Cepat</h3>
                    <p class="text-gray-600">
                        Dapatkan hasil diagnosis dalam hitungan detik, memungkinkan Anda mengambil tindakan segera untuk melindungi tanaman.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-primary-500 mb-4">
                        <i data-feather="smartphone" class="h-10 w-10"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Mudah Digunakan</h3>
                    <p class="text-gray-600">
                        Antarmuka sederhana yang dirancang untuk petani dengan pengetahuan teknis minimal. Cukup unggah foto dan dapatkan hasil.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300" data-aos="fade-up">
                    <div class="text-primary-500 mb-4">
                        <i data-feather="book-open" class="h-10 w-10"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Basis Data Komprehensif</h3>
                    <p class="text-gray-600">
                        Akses ke informasi ekstensif tentang penyakit padi, gejala, dan opsi pengobatan.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-primary-500 mb-4">
                        <i data-feather="dollar-sign" class="h-10 w-10"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Efektif Biaya</h3>
                    <p class="text-gray-600">
                        Hemat uang dengan mencegah penggunaan pestisida yang tidak perlu dan mendeteksi penyakit sejak dini.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-primary-500 mb-4">
                        <i data-feather="globe" class="h-10 w-10"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Tersedia Di Mana Saja</h3>
                    <p class="text-gray-600">
                        Akses platform kami dari perangkat apa pun dengan koneksi internet, bahkan di daerah terpencil.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section id="how-it-works" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4" data-aos="fade-up">Cara Kerja OryzaDoc</h2>
                <div class="w-20 h-1 bg-primary-500 mx-auto mb-6" data-aos="fade-up" data-aos-delay="100"></div>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                    Mendapatkan diagnosis untuk tanaman padi Anda sederhana dan mudah.
                </p>
            </div>
            <div class="grid md:grid-cols-3 gap-8 justify-items-center align-items-center">
                <div class="text-center" data-aos="fade-up">
                    <div class="bg-primary-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-primary-600 font-bold text-2xl">1</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Akses Platform</h3>
                    <p class="text-gray-600">
                        Buka OryzaDoc di ponsel cerdas, tablet, atau komputer Anda.
                    </p>
                </div>
                <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="bg-primary-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-primary-600 font-bold text-2xl">2</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Pilih gejala</h3>
                    <p class="text-gray-600">
                        pilih gejala yang sesuai demngan kondisi tanaman padi anda.
                    </p>
                </div>
                <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="bg-primary-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-primary-600 font-bold text-2xl">3</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Diagnosa Pintar</h3>
                    <p class="text-gray-600">
                        Sistem kami menganalisis gejala yang ada dan menentukan diagnosa penyakit dengan sistem pakar.
                        Sistem kami akan menganalisis data gejala menggunakan teknologi kecerdaan buatan.
                    </p>
                </div>
                <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="bg-primary-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-primary-600 font-bold text-2xl">4</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Dapatkan Hasil</h3>
                    <p class="text-gray-600">
                        Hasil diagnosa serta rekomendasi perawatan akan muncul secara otomatis.
                    </p>
                </div>
            </div>
            <div class="mt-12 text-center" data-aos="fade-up">
                <a href="#diagnose" class="bg-primary-500 hover:bg-primary-600 text-white font-medium py-3 px-8 rounded-lg shadow-md transition duration-300 inline-flex items-center">
                    Coba Sekarang <i data-feather="arrow-right" class="ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section id="testimonials" class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4" data-aos="fade-up">Apa Kata Pengguna Kami</h2>
                <div class="w-20 h-1 bg-primary-500 mx-auto mb-6" data-aos="fade-up" data-aos-delay="100"></div>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                    Dengarkan dari petani yang telah merasakan manfaat menggunakan OryzaDoc.
                </p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md" data-aos="fade-up">
                    <div class="flex items-center mb-4">
                        <img src="http://static.photos/people/100x100/1" alt="Pengguna" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-800">Hanya Nanta</h4>
                            <p class="text-gray-500 text-sm">Petani Padi, Jawa Tengah</p>
                        </div>
                    </div>
                    <p class="text-gray-600">
                        "OryzaDoc membantu saya mengidentifikasi infeksi hawar daun bakteri sejak dini. Rekomendasi pengobatannya menyelamatkan seluruh panen saya!"
                    </p>
                    <div class="mt-4 text-primary-500">
                        <i data-feather="star" class="w-4 h-4 inline"></i>
                        <i data-feather="star" class="w-4 h-4 inline"></i>
                        <i data-feather="star" class="w-4 h-4 inline"></i>
                        <i data-feather="star" class="w-4 h-4 inline"></i>
                        <i data-feather="star" class="w-4 h-4 inline"></i>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-center mb-4">
                        <img src="http://static.photos/people/100x100/2" alt="Pengguna" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-800">Huda Masjid</h4>
                            <p class="text-gray-500 text-sm">Pemilik Lahan, Jawa Barat</p>
                        </div>
                    </div>
                    <p class="text-gray-600">
                        "Sebagai seseorang yang baru dalam budidaya padi, OryzaDoc sangat berharga. Rasanya seperti memiliki pakar di samping saya setiap saat."
                    </p>
                    <div class="mt-4 text-primary-500">
                        <i data-feather="star" class="w-4 h-4 inline"></i>
                        <i data-feather="star" class="w-4 h-4 inline"></i>
                        <i data-feather="star" class="w-4 h-4 inline"></i>
                        <i data-feather="star" class="w-4 h-4 inline"></i>
                        <i data-feather="star" class="w-4 h-4 inline"></i>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-center mb-4">
                        <img src="http://static.photos/people/100x100/3" alt="Pengguna" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold text-gray-800">Siuunaldo wati</h4>
                            <p class="text-gray-500 text-sm">Penyuluh Pertanian</p>
                        </div>
                    </div>
                    <p class="text-gray-600">
                        "Saya merekomendasikan OryzaDoc kepada semua petani yang saya bina. Akurat, mudah digunakan, dan telah mengurangi kerugian panen secara signifikan."
                    </p>
                    <div class="mt-4 text-primary-500">
                        <i data-feather="star" class="w-4 h-4 inline"></i>
                        <i data-feather="star" class="w-4 h-4 inline"></i>
                        <i data-feather="star" class="w-4 h-4 inline"></i>
                        <i data-feather="star" class="w-4 h-4 inline"></i>
                        <i data-feather="star" class="w-4 h-4 inline"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team -->
    <section id="team" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4" data-aos="fade-up">Kenali Tim Kami</h2>
                <div class="w-20 h-1 bg-primary-500 mx-auto mb-6" data-aos="fade-up" data-aos-delay="100"></div>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                    Orang-orang berdedikasi di balik OryzaDoc.
                </p>
            </div>
            <div class="grid grid-cols-4 gap-5 mb-20">
                <div class="text-center" data-aos="fade-up">
                    <img src="{{ asset('img/raihan.png') }}" alt="Anggota Tim" class="w-32 h-32 rounded-full mx-auto mb-4 shadow-md object-cover">
                    <h3 class="text-xl font-semibold text-gray-800 mb-1">Dr. Raihan Firdaus</h3>
                    <p class="text-primary-600 font-medium mb-3">Pendiri & CEO</p>
                    <p class="text-gray-600">
                        Ilmuwan pertanian dengan 40 tahun pengalaman dalam patologi padi dan manajemen penyakit.
                    </p>
                    <div class="mt-4 flex justify-center space-x-3">
                        <a href="#" class="text-gray-500 hover:text-primary-500">
                            <i data-feather="linkedin" class="w-5 h-5"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-primary-500">
                            <i data-feather="twitter" class="w-5 h-5"></i>
                        </a>
                    </div>
                </div>
                <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('img/sarep.jpg') }}" alt="Anggota Tim" class="w-32 h-32 rounded-full mx-auto mb-4 shadow-md object-cover">
                    <h3 class="text-xl font-semibold text-gray-800 mb-1">Dr. Muhammad Syarifudin</h3>
                    <p class="text-primary-600 font-medium mb-3">Pakar Padi</p>
                    <p class="text-gray-600">
                        Ahli pakar yang berfokus pada penelitian dan pengembangan varietas padi unggul.
                    </p>
                    <div class="mt-4 flex justify-center space-x-3">
                        <a href="#" class="text-gray-500 hover:text-primary-500">
                            <i data-feather="linkedin" class="w-5 h-5"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-primary-500">
                            <i data-feather="github" class="w-5 h-5"></i>
                        </a>
                    </div>
                </div>
                <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('img/salsa.jpg') }}" alt="Anggota Tim" class="w-32 h-32 rounded-full mx-auto mb-4 shadow-md object-cover">
                    <h3 class="text-xl font-semibold text-gray-800 mb-1">Dr. Salsa</h3>
                    <p class="text-primary-600 font-medium mb-3">Insinyur Pertanian</p>
                    <p class="text-gray-600">
                        Merancang protokol pengujian lapangan dan memastikan solusi kami bekerja dalam kondisi dunia nyata.
                    </p>
                    <div class="mt-4 flex justify-center space-x-3">
                        <a href="#" class="text-gray-500 hover:text-primary-500">
                            <i data-feather="linkedin" class="w-5 h-5"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-primary-500">
                            <i data-feather="twitter" class="w-5 h-5"></i>
                        </a>
                    </div>
                </div>
                <div class="text-center" data-aos="fade-up">
                    <img src="{{ asset('img/wati.jpg') }}" alt="Anggota Tim" class="w-32 h-32 rounded-full mx-auto mb-4 shadow-md object-cover">
                    <h3 class="text-xl font-semibold text-gray-800 mb-1">Dr. Rahmawati</h3>
                    <p class="text-primary-600 font-medium mb-3">Front End Developer</p>
                    <p class="text-gray-600">
                        Bertanggung jawab atas desain antarmuka pengguna dan pengalaman pengguna platform OryzaDoc.
                    </p>
                    <div class="mt-4 flex justify-center space-x-3">
                        <a href="#" class="text-gray-500 hover:text-primary-500">
                            <i data-feather="linkedin" class="w-5 h-5"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-primary-500">
                            <i data-feather="twitter" class="w-5 h-5"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="grid justify-center grid-cols-3 gap-5">
                <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('img/sevi.jpg') }}" alt="Anggota Tim" class="w-32 h-32 rounded-full mx-auto mb-4 shadow-md object-cover">
                    <h3 class="text-xl font-semibold text-gray-800 mb-1">Dr. Sevi</h3>
                    <p class="text-primary-600 font-medium mb-3">Back End Developer</p>
                    <p class="text-gray-600">
                        Mengembangkan dan memelihara infrastruktur server dan basis data untuk memastikan kinerja platform yang optimal.
                    </p>
                    <div class="mt-4 flex justify-center space-x-3">
                        <a href="#" class="text-gray-500 hover:text-primary-500">
                            <i data-feather="linkedin" class="w-5 h-5"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-primary-500">
                            <i data-feather="github" class="w-5 h-5"></i>
                        </a>
                    </div>
                </div>
                <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('img/silmi.jpg') }}" alt="Anggota Tim" class="w-32 h-32 rounded-full mx-auto mb-4 shadow-md object-cover">
                    <h3 class="text-xl font-semibold text-gray-800 mb-1">Dr. Silmi</h3>
                    <p class="text-primary-600 font-medium mb-3">UI/UX Designer</p>
                    <p class="text-gray-600">
                        Merancang antarmuka yang intuitif dan menarik untuk memastikan pengalaman pengguna yang mulus di seluruh platform.
                    </p>
                    <div class="mt-4 flex justify-center space-x-3">
                        <a href="#" class="text-gray-500 hover:text-primary-500">
                            <i data-feather="linkedin" class="w-5 h-5"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-primary-500">
                            <i data-feather="twitter" class="w-5 h-5"></i>
                        </a>
                    </div>
                </div>
                <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('img/yanti.jpg') }}" alt="Anggota Tim" class="w-32 h-32 rounded-full mx-auto mb-4 shadow-md object-cover">
                    <h3 class="text-xl font-semibold text-gray-800 mb-1">Dr. Daryanti</h3>
                    <p class="text-primary-600 font-medium mb-3">Pakar Tanah</p>
                    <p class="text-gray-600">
                        Spesialis dalam ilmu tanah, memberikan wawasan tentang bagaimana kondisi tanah mempengaruhi kesehatan tanaman padi.
                    </p>
                    <div class="mt-4 flex justify-center space-x-3">
                        <a href="#" class="text-gray-500 hover:text-primary-500">
                            <i data-feather="linkedin" class="w-5 h-5"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-primary-500">
                            <i data-feather="twitter" class="w-5 h-5"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section id="diagnose" class="py-16 bg-primary-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-6" data-aos="fade-up">Siap Mendiagnosis Tanaman Padi Anda?</h2>
            <p class="text-lg mb-8 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Bergabunglah dengan ribuan petani yang melindungi tanaman mereka dengan OryzaDoc.
            </p>
            <div class="flex flex-wrap justify-center gap-4" data-aos="fade-up" data-aos-delay="200">
                <a href="{{ route('diagnosa') }}" class="bg-white text-primary-600 hover:bg-gray-100 font-medium py-3 px-8 rounded-lg shadow-md transition duration-300">
                    Mulai Diagnosis
                </a>
                <a href="#" class="border border-white text-white hover:bg-primary-700 font-medium py-3 px-8 rounded-lg transition duration-300">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center mb-4">
                        <i data-feather="cpu" class="text-primary-500 h-8 w-8"></i>
                        <span class="ml-2 text-xl font-bold">OryzaDoc</span>
                    </div>
                    <p class="text-gray-400 mb-4">
                        Diagnosis pintar untuk tanaman padi sehat menggunakan teknologi AI.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i data-feather="facebook" class="w-5 h-5"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i data-feather="instagram" class="w-5 h-5"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i data-feather="twitter" class="w-5 h-5"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i data-feather="linkedin" class="w-5 h-5"></i>
                        </a>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Tautan Cepat</h3>
                    <ul class="space-y-2">
                        <li><a href="#home" class="text-gray-400 hover:text-white">Beranda</a></li>
                        <li><a href="#about" class="text-gray-400 hover:text-white">Tentang</a></li>
                        <li><a href="#features" class="text-gray-400 hover:text-white">Fitur</a></li>
                        <li><a href="#how-it-works" class="text-gray-400 hover:text-white">Cara Kerja</a></li>
                        <li><a href="#testimonials" class="text-gray-400 hover:text-white">Testimoni</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Sumber Daya</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Blog</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">FAQ</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Panduan Penyakit Padi</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Makalah Penelitian</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Hubungi Kami</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-start">
                            <i data-feather="mail" class="mr-3 mt-1 w-4 h-4"></i>
                            <span>contact@oryzadoc.com</span>
                        </li>
                        <li class="flex items-start">
                            <i data-feather="phone" class="mr-3 mt-1 w-4 h-4"></i>
                            <span>+62 123 4567 890</span>
                        </li>
                        <li class="flex items-start">
                            <i data-feather="map-pin" class="mr-3 mt-1 w-4 h-4"></i>
                            <span>Jakarta, Indonesia</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2023 OryzaDoc. Semua hak dilindungi.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <!-- Scripts -->
    <script>
        // === Highlight menu on scroll ===
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('.ml-10 a');

        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        // 1. Bersihkan semua nav dari kelas aktif
                        navLinks.forEach((link) => link.classList.remove('nav-active'));

                        // 2. Ambil link sesuai id section yang terlihat
                        const id = entry.target.getAttribute('id');
                        const currentLink = document.querySelector(`.ml-10 a[href="#${id}"]`);
                        if (currentLink) currentLink.classList.add('nav-active');
                    }
                });
            }, {
                rootMargin: '-40% 0px -55% 0px',
                threshold: 0,
            }
        );

        sections.forEach((section) => observer.observe(section));


        // Initialize AOS animation
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });

        // Mobile menu toggle
        const mobileMenuButton = document.querySelector('.mobile-menu-button');
        const mobileMenu = document.querySelector('.mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Close mobile menu when clicking on a link
        const mobileMenuLinks = document.querySelectorAll('.mobile-menu a');
        mobileMenuLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                const targetId = this.getAttribute('href');
                if (targetId === '#') return;

                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Feather icons replacement
        feather.replace();
    </script>
</body>

</html>