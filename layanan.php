<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan - Desa Lantek Barat</title>
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
        <section class="layanan-section" id="desaLayanan">
            <div class="container hero-wrapper">
                <div class="row justify-content-center text-center reveal-on-scroll">
                    <div class="col-lg-8">
                        <div class="coming-soon-card">
                            <div class="coming-soon-icon">
                                <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
                                    <path d="M2 17l10 5 10-5"></path>
                                    <path d="M2 12l10 5 10-5"></path>
                                </svg>
                            </div>
                            <p class="hero-tagline">Layanan Publik</p>
                            <h2>Layanan Desa Lantek Barat</h2>
                            <div class="coming-soon-content">
                                <h3 class="coming-soon-title">Akan Segera Hadir</h3>
                                <p class="coming-soon-description">
                                    Kami sedang mempersiapkan halaman layanan publik yang akan memberikan informasi 
                                    lengkap mengenai berbagai layanan yang tersedia di Desa Lantek Barat. 
                                    Halaman ini akan segera diluncurkan untuk memberikan kemudahan akses informasi 
                                    bagi seluruh masyarakat.
                                </p>
                                <div class="coming-soon-features">
                                    <p class="features-title">Layanan yang akan tersedia:</p>
                                    <ul class="features-list">
                                        <li>Pelayanan Administrasi Kependudukan</li>
                                        <li>Pelayanan Surat Keterangan</li>
                                        <li>Pelayanan Izin Usaha</li>
                                        <li>Pelayanan Informasi Publik</li>
                                        <li>Dan berbagai layanan lainnya</li>
                                    </ul>
                                </div>
                                <div class="coming-soon-actions">
                                    <a href="index.php" class="btn btn-outline-light btn-lg rounded-pill mt-4">
                                        Kembali ke Beranda
                                    </a>
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

