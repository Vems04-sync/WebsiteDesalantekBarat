<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desa Lantek Barat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <?php
    require_once __DIR__ . '/layout/header.php';
    require_once __DIR__ . '/layout/navbar.php';
    ?>
    <div class="content background-synced" id="desaBackdrop">
        <section class="hero welcome-hero">
            <div class="container hero-wrapper">
                <div class="row justify-content-center text-center reveal-on-scroll">
                    <div class="col-lg-10 col-xl-8 animate-on-load" style="--delay: 0.1s">
                        <p class="hero-tagline">Selamat Datang</p>
                        <h1>Website Resmi Desa Lantek Barat</h1>
                        <p class="welcome-description">
                            Jelajahi informasi terkini mengenai profil desa, layanan publik, kegiatan warga,
                            serta potensi unggulan yang kami banggakan bersama.
                        </p>
                        <a href="profile_desa.php" class="btn btn-light btn-lg mt-3">Kenal Lebih Dekat</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="welcome-message-section" id="desaWelcomeMessage">
            <div class="container hero-wrapper">
                <div class="row align-items-center g-5 reveal-on-scroll">
                    <div class="col-lg-4 col-md-5 animate-on-load" style="--delay: 0.1s">
                        <div class="logo-card">
                            <img src="assets/image/Logo-Kabupaten-Bangkalan.png" alt="Logo Desa Lantek Barat" class="desa-logo">
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7 reveal-on-scroll">
                        <div class="message-card">
                            <p class="hero-tagline">Sambutan</p>
                            <h2>Sambutan Kepala Desa</h2>
                            <div class="message-content">
                                <p class="greeting">Assalamualaikum Warahmatullahi Wabarakatuh</p>
                                <p class="message-text">
                                    Puji syukur kehadirat Allah SWT, atas rahmat dan karunia-Nya, kami dapat menyajikan 
                                    Website Resmi Desa Lantek Barat ini sebagai media informasi dan komunikasi antara 
                                    Pemerintah Desa dengan seluruh masyarakat Desa Lantek Barat serta masyarakat luas.
                                </p>
                                <p class="message-text">
                                    Melalui website ini, kami berharap dapat memberikan kemudahan akses informasi 
                                    mengenai profil desa, program pembangunan, layanan publik, serta berbagai kegiatan 
                                    yang dilaksanakan di Desa Lantek Barat. Kami mengajak seluruh elemen masyarakat 
                                    untuk bersama-sama membangun desa yang lebih maju, sejahtera, dan berdaya saing.
                                </p>
                                <p class="message-text">
                                    Semoga website ini dapat menjadi jembatan komunikasi yang efektif dan bermanfaat 
                                    bagi semua pihak. Terima kasih atas perhatian dan dukungannya.
                                </p>
                                <p class="signature">
                                    Wassalamualaikum Warahmatullahi Wabarakatuh<br>
                                    <strong>Kepala Desa Lantek Barat</strong><br>
                                    <span class="signature-name">---</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="data-section" id="desaData">
            <div class="container hero-wrapper">
                <div class="row g-4 reveal-on-scroll">
                    <!-- Administrasi Penduduk -->
                    <div class="col-lg-7">
                        <div class="data-card">
                            <p class="hero-tagline">Data Kependudukan</p>
                            <h2>Administrasi Penduduk</h2>
                            <p class="data-description">
                                Data administrasi penduduk Desa Lantek Barat yang mencakup informasi jumlah penduduk, 
                                kepala keluarga, dan komposisi gender untuk perencanaan pembangunan desa yang lebih baik.
                            </p>
                            <div class="stats-grid">
                                <div class="stat-card">
                                    <div class="stat-number">3.200</div>
                                    <div class="stat-label">Total Penduduk</div>
                                </div>
                                <div class="stat-card">
                                    <div class="stat-number">850</div>
                                    <div class="stat-label">Kepala Keluarga</div>
                                </div>
                                <div class="stat-card">
                                    <div class="stat-number">1.650</div>
                                    <div class="stat-label">Laki-laki</div>
                                </div>
                                <div class="stat-card">
                                    <div class="stat-number">1.550</div>
                                    <div class="stat-label">Perempuan</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- APB Desa -->
                    <div class="col-lg-5">
                        <div class="data-card apb-card">
                            <p class="hero-tagline">Anggaran Desa</p>
                            <h2>APB Desa</h2>
                            <p class="data-description">
                                Pendapatan Desa Lantek Barat yang digunakan untuk pembangunan dan peningkatan 
                                kesejahteraan masyarakat desa.
                            </p>
                            <div class="apb-content">
                                <div class="apb-item">
                                    <div class="apb-label">Pendapatan Desa</div>
                                    <div class="apb-value">Rp 2.500.000.000</div>
                                </div>
                                <div class="apb-breakdown">
                                    <div class="apb-breakdown-item">
                                        <span class="breakdown-label">Dana Desa</span>
                                        <span class="breakdown-value">Rp 1.200.000.000</span>
                                    </div>
                                    <div class="apb-breakdown-item">
                                        <span class="breakdown-label">Bagi Hasil Pajak</span>
                                        <span class="breakdown-value">Rp 800.000.000</span>
                                    </div>
                                    <div class="apb-breakdown-item">
                                        <span class="breakdown-label">Pendapatan Asli Desa</span>
                                        <span class="breakdown-value">Rp 500.000.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="showcase" id="desaShowcase">
            <div class="container hero-wrapper">
                <div class="row align-items-center g-4 reveal-on-scroll">
                    <div class="col-lg-6 animate-on-load" style="--delay: 0.15s">
                        <div id="desaCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#desaCarousel" data-bs-slide-to="0" class="active"
                                    aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#desaCarousel" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#desaCarousel" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-title="Potensi Alam Desa Lantek Barat"
                                    data-description="Panorama alam yang asri menjadi daya tarik utama bagi wisatawan dan warga desa."
                                    data-background="assets/image/lb1.png">
                                    <img src="assets/image/lb1.png" class="d-block w-100"
                                        alt="Panorama alam Desa Lantek Barat">
                                </div>
                                <div class="carousel-item" data-title="Budaya dan Tradisi"
                                    data-description="Ragam budaya lokal terus dilestarikan melalui kegiatan adat dan kreasi generasi muda."
                                    data-background="assets/image/lb2.png">
                                    <img src="assets/image/lb2.png" class="d-block w-100"
                                        alt="Budaya Desa Lantek Barat">
                                </div>
                                <div class="carousel-item" data-title="Ekonomi Kreatif Masyarakat"
                                    data-description="Produk UMKM dan hasil pertanian meningkatkan kesejahteraan warga secara berkelanjutan."
                                    data-background="assets/image/lb3.png">
                                    <img src="assets/image/lb3.png" class="d-block w-100"
                                        alt="Ekonomi kreatif Desa Lantek Barat">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#desaCarousel"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#desaCarousel"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-6 reveal-on-scroll">
                        <div class="hero-text showcase-text">
                            <p class="hero-tagline">Sorotan Desa</p>
                            <h2 id="heroTitle">Potensi Alam Desa Lantek Barat</h2>
                            <p id="heroDescription">Panorama alam yang asri menjadi daya tarik utama bagi wisatawan dan warga desa.</p>
                            <a href="berita.php" class="btn btn-outline-light btn-lg mt-3">Lihat Kegiatan</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="map-section" id="desaMap">
            <div class="container hero-wrapper">
                <div class="row justify-content-center text-center mb-4 reveal-on-scroll">
                    <div class="col-lg-8">
                        <p class="hero-tagline">Lokasi Desa</p>
                        <h2>Desa Lantek Barat, Kecamatan Galis, Kabupaten Bangkalan, Jawa Timur</h2>
                        <p class="map-description">
                            Temukan lokasi Desa Lantek Barat di Kabupaten Bangkalan melalui peta interaktif berikut.
                            Gunakan fitur zoom untuk melihat fasilitas dan akses menuju wilayah kami.
                        </p>
                    </div>
                </div>
                <div class="map-card reveal-on-scroll">
                    <iframe title="Peta Desa Lantek Barat"
                        src="https://www.google.com/maps?q=Desa+Lantek+Barat,+Galis,+Bangkalan&output=embed"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                        class="map-frame"></iframe>
                </div>
            </div>
        </section>

        <!-- <section class="info-section" id="desaInfo">
            <div class="container hero-wrapper">
                <div class="row g-5 align-items-center reveal-on-scroll">
                    <div class="col-lg-6">
                        <div class="info-card">
                            <p class="hero-tagline">Profil Singkat</p>
                            <h2>Gambaran Umum Desa</h2>
                            <ul class="info-list">
                                <li>
                                    <span class="label">Luas Wilayah</span>
                                    <span class="value">± 4,35 km² dengan sebaran lahan pertanian dan pemukiman.</span>
                                </li>
                                <li>
                                    <span class="label">Jumlah Penduduk</span>
                                    <span class="value">Sekitar 3.200 jiwa tersebar dalam beberapa dusun.</span>
                                </li>
                                <li>
                                    <span class="label">Letak Geografis</span>
                                    <span class="value">Berada di Kecamatan Galis, Kabupaten Bangkalan dengan akses utama jalur darat.</span>
                                </li>
                                <li>
                                    <span class="label">Visi & Misi Singkat</span>
                                    <span class="value">Mewujudkan desa mandiri, sejahtera, dan berdaya saing dengan pelayanan publik prima.</span>
                                </li>
                                <li>
                                    <span class="label">Motto Desa</span>
                                    <span class="value">“Guyub Rukun, Tumbuh Bersama.”</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 reveal-on-scroll">
                        <div class="structure-card">
                            <img src="assets/image/contohstruktur.jpg" alt="Struktur Pemerintahan Desa Lantek Barat">
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <section class="news-section" id="desaNews">
            <div class="container hero-wrapper">
                <div class="row justify-content-center text-center mb-5 reveal-on-scroll">
                    <div class="col-lg-8">
                        <p class="hero-tagline">Informasi Terkini</p>
                        <h2>Berita Desa</h2>
                        <p class="news-section-description">
                            Dapatkan informasi terbaru mengenai kegiatan, program, dan perkembangan di Desa Lantek Barat.
                        </p>
                    </div>
                </div>
                <div class="row g-4 reveal-on-scroll">
                    <!-- Berita 1 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="news-card">
                            <div class="news-image">
                                <img src="assets/image/lb1.png" alt="Berita Desa Lantek Barat">
                            </div>
                            <div class="news-content">
                                <h3 class="news-title">Pembangunan Jalan Desa Meningkatkan Aksesibilitas</h3>
                                <p class="news-excerpt">
                                    Pemerintah Desa Lantek Barat telah menyelesaikan pembangunan jalan desa sepanjang 2 km 
                                    yang menghubungkan beberapa dusun. Pembangunan ini diharapkan dapat meningkatkan 
                                    aksesibilitas dan perekonomian masyarakat.
                                </p>
                                <div class="news-footer">
                                    <span class="news-date">15 Desember 2024</span>
                                    <img src="assets/image/Logo-Kabupaten-Bangkalan.png" alt="Logo Desa" class="news-logo">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Berita 2 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="news-card">
                            <div class="news-image">
                                <img src="assets/image/lb2.png" alt="Berita Desa Lantek Barat">
                            </div>
                            <div class="news-content">
                                <h3 class="news-title">Festival Budaya Desa Lantek Barat 2024</h3>
                                <p class="news-excerpt">
                                    Desa Lantek Barat menggelar Festival Budaya tahunan yang menampilkan berbagai kesenian 
                                    tradisional, kuliner lokal, dan produk UMKM. Acara ini diikuti oleh seluruh warga desa 
                                    dan masyarakat sekitar.
                                </p>
                                <div class="news-footer">
                                    <span class="news-date">10 Desember 2024</span>
                                    <img src="assets/image/Logo-Kabupaten-Bangkalan.png" alt="Logo Desa" class="news-logo">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Berita 3 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="news-card">
                            <div class="news-image">
                                <img src="assets/image/lb3.png" alt="Berita Desa Lantek Barat">
                            </div>
                            <div class="news-content">
                                <h3 class="news-title">Program Pemberdayaan UMKM Desa</h3>
                                <p class="news-excerpt">
                                    Pemerintah Desa meluncurkan program pemberdayaan UMKM untuk meningkatkan kesejahteraan 
                                    ekonomi masyarakat. Program ini mencakup pelatihan, bantuan modal, dan pendampingan 
                                    bagi pelaku usaha kecil dan menengah.
                                </p>
                                <div class="news-footer">
                                    <span class="news-date">5 Desember 2024</span>
                                    <img src="assets/image/Logo-Kabupaten-Bangkalan.png" alt="Logo Desa" class="news-logo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 reveal-on-scroll">
                    <div class="col-12 text-center">
                        <a href="berita.php" class="btn btn-outline-light btn-lg rounded-pill">Lihat Semua Berita</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="gallery-section" id="desaGallery">
            <div class="container hero-wrapper">
                <div class="row justify-content-center text-center mb-5 reveal-on-scroll">
                    <div class="col-lg-8">
                        <p class="hero-tagline">Dokumentasi</p>
                        <h2>Galeri Desa Lantek Barat</h2>
                        <p class="gallery-description">
                            Kumpulan foto dokumentasi kegiatan, potensi alam, dan kehidupan masyarakat Desa Lantek Barat.
                        </p>
                    </div>
                </div>
                <div class="row g-4 reveal-on-scroll">
                    <!-- Foto 1 -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="gallery-item">
                            <div class="gallery-image">
                                <img src="assets/image/lb1.png" alt="Galeri Desa Lantek Barat" data-bs-toggle="modal" data-bs-target="#galleryModal" data-image="assets/image/lb1.png" data-title="Potensi Alam Desa">
                                <div class="gallery-overlay">
                                    <div class="gallery-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-caption">
                                <h4>Potensi Alam Desa</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Foto 2 -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="gallery-item">
                            <div class="gallery-image">
                                <img src="assets/image/lb2.png" alt="Galeri Desa Lantek Barat" data-bs-toggle="modal" data-bs-target="#galleryModal" data-image="assets/image/lb2.png" data-title="Budaya dan Tradisi">
                                <div class="gallery-overlay">
                                    <div class="gallery-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-caption">
                                <h4>Budaya dan Tradisi</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Foto 3 -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="gallery-item">
                            <div class="gallery-image">
                                <img src="assets/image/lb3.png" alt="Galeri Desa Lantek Barat" data-bs-toggle="modal" data-bs-target="#galleryModal" data-image="assets/image/lb3.png" data-title="Ekonomi Kreatif">
                                <div class="gallery-overlay">
                                    <div class="gallery-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-caption">
                                <h4>Ekonomi Kreatif</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Foto 4 -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="gallery-item">
                            <div class="gallery-image">
                                <img src="assets/image/contohstruktur.jpg" alt="Galeri Desa Lantek Barat" data-bs-toggle="modal" data-bs-target="#galleryModal" data-image="assets/image/contohstruktur.jpg" data-title="Struktur Pemerintahan">
                                <div class="gallery-overlay">
                                    <div class="gallery-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-caption">
                                <h4>Struktur Pemerintahan</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 reveal-on-scroll">
                    <div class="col-12 text-center">
                        <a href="galeri.php" class="btn btn-outline-light btn-lg rounded-pill">Lihat Semua Galeri</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Modal untuk menampilkan gambar besar -->
        <div class="modal fade" id="galleryModal" tabindex="-1" aria-labelledby="galleryModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content gallery-modal-content">
                    <div class="modal-header gallery-modal-header">
                        <h5 class="modal-title" id="galleryModalLabel">Galeri Desa</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body gallery-modal-body">
                        <img src="" alt="Galeri Desa" id="modalImage" class="img-fluid">
                        <h4 id="modalTitle" class="mt-3 text-center"></h4>
                    </div>
                </div>
            </div>
        </div>

        <?php require_once __DIR__ . '/layout/footer.php'; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
    <script>
        // Script untuk modal galeri
        const galleryModal = document.getElementById('galleryModal');
        if (galleryModal) {
            galleryModal.addEventListener('show.bs.modal', function (event) {
                const button = event.relatedTarget;
                const imageSrc = button.getAttribute('data-image');
                const imageTitle = button.getAttribute('data-title');
                
                const modalImage = galleryModal.querySelector('#modalImage');
                const modalTitle = galleryModal.querySelector('#modalTitle');
                
                modalImage.src = imageSrc;
                modalTitle.textContent = imageTitle;
            });
        }
    </script>
</body>

</html>