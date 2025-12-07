<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Desa - Desa Lantek Barat</title>
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
                    <!-- Foto 5 -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="gallery-item">
                            <div class="gallery-image">
                                <img src="assets/image/lb1.png" alt="Galeri Desa Lantek Barat" data-bs-toggle="modal" data-bs-target="#galleryModal" data-image="assets/image/lb1.png" data-title="Kegiatan Masyarakat">
                                <div class="gallery-overlay">
                                    <div class="gallery-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-caption">
                                <h4>Kegiatan Masyarakat</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Foto 6 -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="gallery-item">
                            <div class="gallery-image">
                                <img src="assets/image/lb2.png" alt="Galeri Desa Lantek Barat" data-bs-toggle="modal" data-bs-target="#galleryModal" data-image="assets/image/lb2.png" data-title="Fasilitas Desa">
                                <div class="gallery-overlay">
                                    <div class="gallery-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-caption">
                                <h4>Fasilitas Desa</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Foto 7 -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="gallery-item">
                            <div class="gallery-image">
                                <img src="assets/image/lb3.png" alt="Galeri Desa Lantek Barat" data-bs-toggle="modal" data-bs-target="#galleryModal" data-image="assets/image/lb3.png" data-title="Pembangunan Infrastruktur">
                                <div class="gallery-overlay">
                                    <div class="gallery-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-caption">
                                <h4>Pembangunan Infrastruktur</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Foto 8 -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="gallery-item">
                            <div class="gallery-image">
                                <img src="assets/image/lb1.png" alt="Galeri Desa Lantek Barat" data-bs-toggle="modal" data-bs-target="#galleryModal" data-image="assets/image/lb1.png" data-title="Wisata Desa">
                                <div class="gallery-overlay">
                                    <div class="gallery-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-caption">
                                <h4>Wisata Desa</h4>
                            </div>
                        </div>
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

