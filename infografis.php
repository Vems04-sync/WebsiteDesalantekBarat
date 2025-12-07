<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infografis - Desa Lantek Barat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
</head>

<body>
    <?php
    require_once __DIR__ . '/layout/header.php';
    require_once __DIR__ . '/layout/navbar.php';
    ?>
    <div class="content background-synced" id="desaBackdrop">
        <section class="infografis-section" id="desaInfografis">
            <div class="container hero-wrapper">
                <div class="row justify-content-center text-center mb-5 reveal-on-scroll">
                    <div class="col-lg-10">
                        <p class="hero-tagline">Data Visualisasi</p>
                        <h2>Infografis Desa Lantek Barat</h2>
                        <p class="infografis-description">
                            Visualisasi data dan statistik terkini mengenai penduduk, anggaran, dan program bantuan sosial di Desa Lantek Barat.
                        </p>
                    </div>
                </div>
                <div class="row g-4 reveal-on-scroll">
                    <!-- Sidebar Kategori -->
                    <div class="col-lg-3">
                        <div class="infografis-sidebar">
                            <h3 class="sidebar-title">Kategori</h3>
                            <ul class="sidebar-menu">
                                <li>
                                    <a href="#penduduk" class="sidebar-item active" data-category="penduduk">
                                        <span class="sidebar-icon">👥</span>
                                        <span>Penduduk</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#apb-desa" class="sidebar-item" data-category="apb-desa">
                                        <span class="sidebar-icon">💰</span>
                                        <span>APB Desa</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#bansos" class="sidebar-item" data-category="bansos">
                                        <span class="sidebar-icon">📦</span>
                                        <span>Bansos</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Konten Utama -->
                    <div class="col-lg-9">
                        <!-- Konten Penduduk -->
                        <div id="penduduk-content" class="infografis-content active">
                            <div class="infografis-card">
                                <div class="card-header-section">
                                    <p class="hero-tagline">Demografi</p>
                                    <h2>Data Penduduk Desa Lantek Barat</h2>
                                </div>
                                
                                <!-- Statistik Penduduk -->
                                <div class="demografi-stats">
                                    <div class="row g-4 mb-5">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="demografi-stat-card">
                                                <div class="demografi-stat-number">3.200</div>
                                                <div class="demografi-stat-label">Total Penduduk</div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="demografi-stat-card">
                                                <div class="demografi-stat-number">1.650</div>
                                                <div class="demografi-stat-label">Laki-laki</div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="demografi-stat-card">
                                                <div class="demografi-stat-number">1.550</div>
                                                <div class="demografi-stat-label">Perempuan</div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="demografi-stat-card">
                                                <div class="demografi-stat-number">850</div>
                                                <div class="demografi-stat-label">Kepala Keluarga</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Chart Bar -->
                                <div class="chart-container">
                                    <h3 class="chart-title">Distribusi Penduduk Berdasarkan Umur dan Jenis Kelamin</h3>
                                    <div class="chart-wrapper">
                                        <canvas id="pendudukChart"></canvas>
                                    </div>
                                </div>

                                <!-- Keterangan Chart -->
                                <div class="chart-legend">
                                    <h4 class="legend-title">Keterangan Chart</h4>
                                    <div class="legend-content">
                                        <p>
                                            Chart di atas menampilkan distribusi penduduk Desa Lantek Barat berdasarkan kelompok umur dan jenis kelamin. 
                                            Data menunjukkan perbandingan jumlah penduduk laki-laki dan perempuan pada setiap kelompok umur.
                                        </p>
                                        <div class="legend-items">
                                            <div class="legend-item">
                                                <span class="legend-color" style="background-color: #4A90E2;"></span>
                                                <span class="legend-text">Laki-laki</span>
                                            </div>
                                            <div class="legend-item">
                                                <span class="legend-color" style="background-color: #E94B7D;"></span>
                                                <span class="legend-text">Perempuan</span>
                                            </div>
                                        </div>
                                        <div class="legend-details">
                                            <p><strong>Interpretasi Data:</strong></p>
                                            <ul>
                                                <li>Kelompok umur 0-17 tahun: Terdapat <strong>850</strong> laki-laki dan <strong>820</strong> perempuan</li>
                                                <li>Kelompok umur 18-35 tahun: Terdapat <strong>420</strong> laki-laki dan <strong>380</strong> perempuan</li>
                                                <li>Kelompok umur 36-55 tahun: Terdapat <strong>280</strong> laki-laki dan <strong>250</strong> perempuan</li>
                                                <li>Kelompok umur 56+ tahun: Terdapat <strong>100</strong> laki-laki dan <strong>100</strong> perempuan</li>
                                            </ul>
                                            <p class="legend-note">
                                                <strong>Catatan:</strong> Hover atau klik pada bar chart untuk melihat detail jumlah penduduk pada setiap kelompok umur. 
                                                Data ini diperbarui secara berkala berdasarkan sensus penduduk terbaru.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Konten APB Desa (Placeholder) -->
                        <div id="apb-desa-content" class="infografis-content">
                            <div class="infografis-card">
                                <div class="card-header-section">
                                    <p class="hero-tagline">Anggaran</p>
                                    <h2>APB Desa</h2>
                                </div>
                                <p class="coming-soon">Konten APB Desa akan segera hadir...</p>
                            </div>
                        </div>

                        <!-- Konten Bansos (Placeholder) -->
                        <div id="bansos-content" class="infografis-content">
                            <div class="infografis-card">
                                <div class="card-header-section">
                                    <p class="hero-tagline">Bantuan Sosial</p>
                                    <h2>Bansos</h2>
                                </div>
                                <p class="coming-soon">Konten Bansos akan segera hadir...</p>
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
    <script>
        // Data untuk chart penduduk berdasarkan umur
        const pendudukData = {
            labels: ['0-17 tahun', '18-35 tahun', '36-55 tahun', '56+ tahun'],
            datasets: [
                {
                    label: 'Laki-laki',
                    data: [850, 420, 280, 100],
                    backgroundColor: 'rgba(74, 144, 226, 0.8)',
                    borderColor: 'rgba(74, 144, 226, 1)',
                    borderWidth: 2,
                    hoverBackgroundColor: 'rgba(74, 144, 226, 1)',
                    hoverBorderColor: 'rgba(74, 144, 226, 1)',
                },
                {
                    label: 'Perempuan',
                    data: [820, 380, 250, 100],
                    backgroundColor: 'rgba(233, 75, 125, 0.8)',
                    borderColor: 'rgba(233, 75, 125, 1)',
                    borderWidth: 2,
                    hoverBackgroundColor: 'rgba(233, 75, 125, 1)',
                    hoverBorderColor: 'rgba(233, 75, 125, 1)',
                }
            ]
        };

        // Konfigurasi chart
        const chartConfig = {
            type: 'bar',
            data: pendudukData,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: true,
                        position: 'top',
                        labels: {
                            color: '#e8ecff',
                            font: {
                                size: 14,
                                weight: '500'
                            },
                            padding: 15,
                            usePointStyle: true,
                            pointStyle: 'circle'
                        }
                    },
                    tooltip: {
                        backgroundColor: 'rgba(18, 23, 38, 0.95)',
                        titleColor: '#ffffff',
                        bodyColor: '#e8ecff',
                        borderColor: 'rgba(255, 255, 255, 0.1)',
                        borderWidth: 1,
                        padding: 12,
                        displayColors: true,
                        callbacks: {
                            label: function(context) {
                                let label = context.dataset.label || '';
                                if (label) {
                                    label += ': ';
                                }
                                label += context.parsed.y.toLocaleString('id-ID') + ' orang';
                                return label;
                            }
                        }
                    }
                },
                scales: {
                    x: {
                        stacked: false,
                        ticks: {
                            color: '#e8ecff',
                            font: {
                                size: 12
                            }
                        },
                        grid: {
                            color: 'rgba(255, 255, 255, 0.1)',
                            drawBorder: false
                        }
                    },
                    y: {
                        stacked: false,
                        beginAtZero: true,
                        ticks: {
                            color: '#e8ecff',
                            font: {
                                size: 12
                            },
                            callback: function(value) {
                                return value.toLocaleString('id-ID');
                            }
                        },
                        grid: {
                            color: 'rgba(255, 255, 255, 0.1)',
                            drawBorder: false
                        }
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index'
                },
                onHover: (event, activeElements) => {
                    event.native.target.style.cursor = activeElements.length > 0 ? 'pointer' : 'default';
                },
                onClick: (event, activeElements) => {
                    if (activeElements.length > 0) {
                        const datasetIndex = activeElements[0].datasetIndex;
                        const dataIndex = activeElements[0].index;
                        const value = pendudukData.datasets[datasetIndex].data[dataIndex];
                        const label = pendudukData.labels[dataIndex];
                        const gender = pendudukData.datasets[datasetIndex].label;
                        alert(`Detail: ${label}\n${gender}: ${value.toLocaleString('id-ID')} orang`);
                    }
                }
            }
        };

        // Inisialisasi chart setelah halaman dimuat
        let pendudukChart;
        window.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('pendudukChart');
            if (ctx) {
                pendudukChart = new Chart(ctx, chartConfig);
            }
        });

        // Sidebar navigation
        document.addEventListener('DOMContentLoaded', function() {
            const sidebarItems = document.querySelectorAll('.sidebar-item');
            const contents = document.querySelectorAll('.infografis-content');

            sidebarItems.forEach(item => {
                item.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Remove active class from all items
                    sidebarItems.forEach(si => si.classList.remove('active'));
                    contents.forEach(c => c.classList.remove('active'));
                    
                    // Add active class to clicked item
                    this.classList.add('active');
                    
                    // Show corresponding content
                    const category = this.getAttribute('data-category');
                    const contentId = category + '-content';
                    const content = document.getElementById(contentId);
                    if (content) {
                        content.classList.add('active');
                        
                        // Reinitialize chart if penduduk content is shown
                        if (category === 'penduduk' && pendudukChart) {
                            setTimeout(() => {
                                pendudukChart.resize();
                            }, 100);
                        }
                    }
                });
            });
        });
    </script>
</body>

</html>

