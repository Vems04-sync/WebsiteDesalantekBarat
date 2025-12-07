<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Desa - Desa Lantek Barat</title>
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
        <section class="news-section" id="desaNews">
            <div class="container hero-wrapper">
                <div class="row justify-content-center text-center mb-5 reveal-on-scroll">
                    <div class="col-lg-8">
                        <p class="hero-tagline">Informasi Terkini</p>
                        <h2>Berita Desa Lantek Barat</h2>
                        <p class="news-section-description">
                            Dapatkan informasi terbaru mengenai kegiatan, program, dan perkembangan di Desa Lantek Barat.
                        </p>
                    </div>
                </div>
                <div class="row g-4 reveal-on-scroll">
                    <!-- Berita 1 -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
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
                    <div class="col-lg-3 col-md-6 col-sm-6">
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
                    <div class="col-lg-3 col-md-6 col-sm-6">
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
                    <!-- Berita 4 -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="news-card">
                            <div class="news-image">
                                <img src="assets/image/lb1.png" alt="Berita Desa Lantek Barat">
                            </div>
                            <div class="news-content">
                                <h3 class="news-title">Pelatihan Digitalisasi untuk Masyarakat</h3>
                                <p class="news-excerpt">
                                    Desa Lantek Barat mengadakan pelatihan digitalisasi untuk meningkatkan kemampuan 
                                    masyarakat dalam menggunakan teknologi digital. Pelatihan ini diikuti oleh berbagai 
                                    kalangan usia untuk meningkatkan literasi digital.
                                </p>
                                <div class="news-footer">
                                    <span class="news-date">1 Desember 2024</span>
                                    <img src="assets/image/Logo-Kabupaten-Bangkalan.png" alt="Logo Desa" class="news-logo">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Berita 5 -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="news-card">
                            <div class="news-image">
                                <img src="assets/image/lb2.png" alt="Berita Desa Lantek Barat">
                            </div>
                            <div class="news-content">
                                <h3 class="news-title">Gotong Royong Pembersihan Lingkungan</h3>
                                <p class="news-excerpt">
                                    Masyarakat Desa Lantek Barat melakukan gotong royong pembersihan lingkungan desa. 
                                    Kegiatan ini melibatkan seluruh warga untuk menjaga kebersihan dan keindahan lingkungan 
                                    desa yang lebih baik.
                                </p>
                                <div class="news-footer">
                                    <span class="news-date">28 November 2024</span>
                                    <img src="assets/image/Logo-Kabupaten-Bangkalan.png" alt="Logo Desa" class="news-logo">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Berita 6 -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="news-card">
                            <div class="news-image">
                                <img src="assets/image/lb3.png" alt="Berita Desa Lantek Barat">
                            </div>
                            <div class="news-content">
                                <h3 class="news-title">Pembagian Bantuan Sosial untuk Warga</h3>
                                <p class="news-excerpt">
                                    Pemerintah Desa menyalurkan bantuan sosial kepada warga yang membutuhkan. Bantuan ini 
                                    diberikan untuk membantu meringankan beban ekonomi warga yang terdampak kondisi tertentu.
                                </p>
                                <div class="news-footer">
                                    <span class="news-date">25 November 2024</span>
                                    <img src="assets/image/Logo-Kabupaten-Bangkalan.png" alt="Logo Desa" class="news-logo">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Berita 7 -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="news-card">
                            <div class="news-image">
                                <img src="assets/image/contohstruktur.jpg" alt="Berita Desa Lantek Barat">
                            </div>
                            <div class="news-content">
                                <h3 class="news-title">Rapat Koordinasi Program Desa</h3>
                                <p class="news-excerpt">
                                    Diadakan rapat koordinasi untuk membahas program-program pembangunan desa. Rapat ini 
                                    melibatkan perangkat desa dan perwakilan masyarakat untuk merencanakan program yang 
                                    lebih baik.
                                </p>
                                <div class="news-footer">
                                    <span class="news-date">20 November 2024</span>
                                    <img src="assets/image/Logo-Kabupaten-Bangkalan.png" alt="Logo Desa" class="news-logo">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Berita 8 -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="news-card">
                            <div class="news-image">
                                <img src="assets/image/lb1.png" alt="Berita Desa Lantek Barat">
                            </div>
                            <div class="news-content">
                                <h3 class="news-title">Kegiatan Posyandu untuk Balita</h3>
                                <p class="news-excerpt">
                                    Posyandu Desa Lantek Barat mengadakan kegiatan rutin untuk memantau kesehatan balita. 
                                    Kegiatan ini meliputi penimbangan, imunisasi, dan penyuluhan kesehatan untuk ibu dan balita.
                                </p>
                                <div class="news-footer">
                                    <span class="news-date">18 November 2024</span>
                                    <img src="assets/image/Logo-Kabupaten-Bangkalan.png" alt="Logo Desa" class="news-logo">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Berita 9 -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="news-card">
                            <div class="news-image">
                                <img src="assets/image/lb2.png" alt="Berita Desa Lantek Barat">
                            </div>
                            <div class="news-content">
                                <h3 class="news-title">Peningkatan Fasilitas Olahraga Desa</h3>
                                <p class="news-excerpt">
                                    Pemerintah Desa melakukan renovasi dan peningkatan fasilitas olahraga untuk mendukung 
                                    aktivitas olahraga masyarakat. Fasilitas yang ditingkatkan meliputi lapangan dan 
                                    peralatan olahraga.
                                </p>
                                <div class="news-footer">
                                    <span class="news-date">15 November 2024</span>
                                    <img src="assets/image/Logo-Kabupaten-Bangkalan.png" alt="Logo Desa" class="news-logo">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Berita 10 -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="news-card">
                            <div class="news-image">
                                <img src="assets/image/lb3.png" alt="Berita Desa Lantek Barat">
                            </div>
                            <div class="news-content">
                                <h3 class="news-title">Workshop Pertanian Organik</h3>
                                <p class="news-excerpt">
                                    Desa Lantek Barat mengadakan workshop pertanian organik untuk meningkatkan pengetahuan 
                                    petani tentang teknik pertanian yang ramah lingkungan dan berkelanjutan.
                                </p>
                                <div class="news-footer">
                                    <span class="news-date">12 November 2024</span>
                                    <img src="assets/image/Logo-Kabupaten-Bangkalan.png" alt="Logo Desa" class="news-logo">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Berita 11 -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="news-card">
                            <div class="news-image">
                                <img src="assets/image/lb1.png" alt="Berita Desa Lantek Barat">
                            </div>
                            <div class="news-content">
                                <h3 class="news-title">Peringatan Hari Pahlawan di Desa</h3>
                                <p class="news-excerpt">
                                    Masyarakat Desa Lantek Barat memperingati Hari Pahlawan dengan berbagai kegiatan. 
                                    Kegiatan ini bertujuan untuk mengenang jasa para pahlawan dan menanamkan nilai-nilai 
                                    kepahlawanan kepada generasi muda.
                                </p>
                                <div class="news-footer">
                                    <span class="news-date">10 November 2024</span>
                                    <img src="assets/image/Logo-Kabupaten-Bangkalan.png" alt="Logo Desa" class="news-logo">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Berita 12 -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="news-card">
                            <div class="news-image">
                                <img src="assets/image/lb2.png" alt="Berita Desa Lantek Barat">
                            </div>
                            <div class="news-content">
                                <h3 class="news-title">Program Bantuan Pendidikan Anak</h3>
                                <p class="news-excerpt">
                                    Pemerintah Desa memberikan bantuan pendidikan untuk anak-anak dari keluarga kurang mampu. 
                                    Bantuan ini berupa perlengkapan sekolah dan beasiswa untuk mendukung pendidikan anak-anak desa.
                                </p>
                                <div class="news-footer">
                                    <span class="news-date">8 November 2024</span>
                                    <img src="assets/image/Logo-Kabupaten-Bangkalan.png" alt="Logo Desa" class="news-logo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php require_once __DIR__ . '/layout/footer.php'; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
