<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KSP Bintang Terang Nusantara - Koperasi Simpan Pinjam Terpercaya</title>
    <meta name="description" content="Koperasi Simpan Pinjam Bintang Terang Nusantara - Solusi keuangan terpercaya untuk masa depan yang lebih cerah">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@600;700;800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="<?= base_url('/') ?>">
                <img src="<?= base_url('assets/images/Logo KSPBTN Crop.svg') ?>" alt="KSP BTN Logo" height="80" class="me-3">
                <div class="company-title">
                    <span class="company-name">KSP BINTANG TERANG NUSANTARA</span>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary ms-lg-3" href="<?= base_url('register') ?>">Daftar Sekarang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section" style="background-image: url('<?= base_url('assets/images/Kantor KSPBTN Sample2.png?v=2') ?>'); background-size: cover; background-position: center center; background-repeat: no-repeat; background-attachment: fixed; background-color: #0066cc;">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-7 col-xl-6">
                    <div class="hero-content-wrapper">
                        <div class="hero-content">
                            <h1 class="display-3 fw-bold mb-4 text-white">Wujudkan Impian Finansial Anda Bersama Kami</h1>
                            <p class="lead mb-4 text-white">Koperasi Simpan Pinjam Bintang Terang Nusantara hadir sebagai mitra terpercaya untuk membantu Anda mencapai tujuan keuangan dengan solusi simpan pinjam yang mudah, aman, dan terpercaya.</p>
                            <div class="hero-buttons">
                                <a href="#about" class="btn btn-primary btn-lg me-3">Pelajari Lebih Lanjut</a>
                                <a href="<?= base_url('register') ?>" class="btn btn-outline-light btn-lg">Bergabung Sekarang</a>
                            </div>
                        </div>
                        <!-- <div class="hero-stats mt-4">
                            <div class="row">
                                <div class="col-4">
                                    <h3 class="fw-bold text-white">1000+</h3>
                                    <p class="text-white-50 mb-0">Anggota Aktif</p>
                                </div>
                                <div class="col-4">
                                    <h3 class="fw-bold text-white">15+</h3>
                                    <p class="text-white-50 mb-0">Tahun Pengalaman</p>
                                </div>
                                <div class="col-4">
                                    <h3 class="fw-bold text-white">98%</h3>
                                    <p class="text-white-50 mb-0">Kepuasan Anggota</p>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision & Mission Ribbon Section -->
    <section class="vision-mission-ribbon">
        <div class="container-fluid p-0">
            <div class="ribbon-wrapper">
                <div class="container">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 mb-3 mb-lg-0">
                            <div class="ribbon-item">
                                <div class="ribbon-icon">
                                    <i class="fas fa-eye"></i>
                                </div>
                                <div class="ribbon-content">
                                    <h4 class="fw-bold mb-2">Visi Kami</h4>
                                    <p class="mb-0">Menjadi koperasi simpan pinjam terpercaya yang memberikan solusi keuangan terbaik untuk kesejahteraan anggota dan masyarakat Indonesia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="ribbon-item">
                                <div class="ribbon-icon">
                                    <i class="fas fa-bullseye"></i>
                                </div>
                                <div class="ribbon-content">
                                    <h4 class="fw-bold mb-2">Misi Kami</h4>
                                    <p class="mb-0">Memberikan layanan simpan pinjam yang mudah, aman, dan terpercaya dengan bunga kompetitif serta pelayanan profesional untuk meningkatkan kesejahteraan anggota.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="pt-3 pb-5 bg-light">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 mb-5">
                    <img src="<?= base_url('assets/images/WhatsApp Image 2026-02-10 at 13.19.27 (1).jpeg') ?>" alt="Tentang KSP BTN" class="img-fluid rounded-3 shadow landscape-img w-100">
                </div>
                <div class="col-12">
                    <div class="about-content">
                        <div class="text-center">
                            <span class="badge bg-primary mb-3">Tentang Kami</span>
                        </div>
                        <h2 class="display-5 fw-bold mb-4">Koperasi Simpan Pinjam Bintang Terang Nusantara</h2>
                        <p class="lead mb-4">KSP Bintang Terang Nusantara didirikan dengan visi untuk memberikan solusi keuangan yang mudah dijangkau dan terpercaya bagi seluruh lapisan masyarakat Indonesia.</p>
                        <p class="mb-4">Kami berkomitmen untuk membantu anggota kami mencapai kesejahteraan finansial melalui berbagai produk simpanan dan pinjaman yang fleksibel dengan bunga kompetitif.</p>                 
                        
                        <div class="about-features">
                            <div class="feature-item d-flex align-items-start mb-3">
                                <div class="feature-icon me-3">
                                    <i class="fas fa-shield-alt fa-2x text-primary"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold">Aman & Terpercaya</h5>
                                    <p class="text-muted mb-0">Terdaftar dan diawasi oleh otoritas terkait</p>
                                </div>
                            </div>
                            <div class="feature-item d-flex align-items-start mb-3">
                                <div class="feature-icon me-3">
                                    <i class="fas fa-hand-holding-usd fa-2x text-primary"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold">Bunga Kompetitif</h5>
                                    <p class="text-muted mb-0">Suku bunga yang menguntungkan untuk simpanan dan pinjaman</p>
                                </div>
                            </div>
                            <div class="feature-item d-flex align-items-start">
                                <div class="feature-icon me-3">
                                    <i class="fas fa-users fa-2x text-primary"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold">Pelayanan Prima</h5>
                                    <p class="text-muted mb-0">Tim profesional siap membantu kebutuhan finansial Anda</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <!-- Definition & Goals Section -->
                        <div class="definition-goals-section mt-5 mb-0 p-4 bg-white rounded-3 shadow-sm">
                            <div class="row">
                                <div class="col-lg-6 mb-4 mb-lg-0">
                                    <div class="d-flex align-items-start">
                                        <div class="me-3">
                                            <i class="fas fa-book-open fa-2x text-primary"></i>
                                        </div>
                                        <div>
                                            <h4 class="fw-bold mb-3 text-primary">Apa itu Koperasi Simpan Pinjam?</h4>
                                            <p class="text-muted mb-0">Koperasi Simpan Pinjam (KSP) adalah lembaga keuangan yang dimiliki dan dikelola oleh anggotanya untuk memberikan layanan simpanan dan pinjaman. KSP bertujuan meningkatkan kesejahteraan ekonomi anggota melalui pengelolaan dana yang transparan, profesional, dan saling menguntungkan berdasarkan prinsip kekeluargaan dan gotong royong.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-start">
                                        <div class="me-3">
                                            <i class="fas fa-flag-checkered fa-2x text-primary"></i>
                                        </div>
                                        <div>
                                            <h4 class="fw-bold mb-3 text-primary">Tujuan Koperasi</h4>
                                            <ul class="text-muted mb-0 ps-0">
                                                <li class="mb-2">Memberikan akses keuangan yang mudah dan terjangkau bagi anggota</li>
                                                <li class="mb-2">Mendorong budaya menabung dan pengelolaan keuangan yang sehat</li>
                                                <li class="mb-2">Membantu anggota mencapai tujuan finansial melalui pinjaman yang fleksibel</li>
                                                <li class="mb-0">Meningkatkan kesejahteraan ekonomi anggota dan keluarganya</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="pt-3 pb-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <span class="badge bg-primary mb-3">Layanan Kami</span>
                <h2 class="display-5 fw-bold mb-3">Produk & Layanan</h2>
                <p class="lead text-muted">Berbagai solusi keuangan yang disesuaikan dengan kebutuhan Anda</p>
            </div>

            <div class="row g-4">
                <!-- Simpanan -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card h-100 p-4 bg-white rounded-3 shadow-sm">
                        <div class="service-icon mb-4">
                            <div class="icon-circle bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                                <i class="fas fa-piggy-bank fa-2x text-primary"></i>
                            </div>
                        </div>
                        <h4 class="fw-bold mb-3">Simpanan</h4>
                        <p class="text-muted mb-4">Simpan uang Anda dengan aman dan raih keuntungan dari bunga yang kompetitif.</p>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Simpanan Sukarela</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Simpanan Berjangka</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Simpanan Pendidikan</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Simpanan Hari Raya</li>
                        </ul>
                    </div>
                </div>

                <!-- Pinjaman -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card h-100 p-4 bg-white rounded-3 shadow-sm">
                        <div class="service-icon mb-4">
                            <div class="icon-circle bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                                <i class="fas fa-hand-holding-usd fa-2x text-success"></i>
                            </div>
                        </div>
                        <h4 class="fw-bold mb-3">Pinjaman</h4>
                        <p class="text-muted mb-4">Solusi pinjaman dengan proses cepat, mudah, dan bunga yang bersahabat.</p>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Pinjaman Umum</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Pinjaman Pendidikan</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Pinjaman Usaha</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Pinjaman Darurat</li>
                        </ul>
                    </div>
                </div>

                <!-- Konsultasi -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card h-100 p-4 bg-white rounded-3 shadow-sm">
                        <div class="service-icon mb-4">
                            <div class="icon-circle bg-info bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                                <i class="fas fa-comments fa-2x text-info"></i>
                            </div>
                        </div>
                        <h4 class="fw-bold mb-3">Konsultasi Keuangan</h4>
                        <p class="text-muted mb-4">Dapatkan saran dan panduan keuangan dari tim profesional kami.</p>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Perencanaan Keuangan</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Manajemen Investasi</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Solusi Bisnis</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Edukasi Finansial</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Why Choose Us -->
            <div class="row mt-5 pt-5">
                <div class="col-12 text-center mb-5">
                    <h3 class="display-6 fw-bold">Mengapa Memilih KSP BTN?</h3>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="text-center">
                        <div class="feature-icon-large mb-3">
                            <i class="fas fa-bolt fa-3x text-primary"></i>
                        </div>
                        <h5 class="fw-bold">Proses Cepat</h5>
                        <p class="text-muted">Pengajuan pinjaman diproses dalam 1-3 hari kerja</p>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="text-center">
                        <div class="feature-icon-large mb-3">
                            <i class="fas fa-percentage fa-3x text-primary"></i>
                        </div>
                        <h5 class="fw-bold">Bunga Rendah</h5>
                        <p class="text-muted">Suku bunga kompetitif dan transparan</p>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="text-center">
                        <div class="feature-icon-large mb-3">
                            <i class="fas fa-mobile-alt fa-3x text-primary"></i>
                        </div>
                        <h5 class="fw-bold">Mudah Diakses</h5>
                        <p class="text-muted">Layanan online dan kantor yang strategis</p>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-md-6 mb-4">
                    <div class="text-center">
                        <div class="feature-icon-large mb-3">
                            <i class="fas fa-headset fa-3x text-primary"></i>
                        </div>
                        <h5 class="fw-bold">Support 24/7</h5>
                        <p class="text-muted">Tim support siap membantu Anda kapan saja</p>
                    </div>
                </div> -->
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5">
                <span class="badge bg-primary mb-3">Hubungi Kami</span>
                <h2 class="display-5 fw-bold mb-3">Kami Siap Membantu Anda</h2>
                <p class="lead text-muted">Punya pertanyaan? Jangan ragu untuk menghubungi kami</p>
            </div>

            <?php if (session()->getFlashdata('success')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= session()->getFlashdata('success') ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            <?php endif; ?>

            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="contact-info h-100">
                        <div class="info-item bg-white p-4 rounded-3 shadow-sm mb-4">
                            <div class="d-flex align-items-start">
                                <div class="icon-wrapper me-3">
                                    <i class="fas fa-map-marker-alt fa-2x text-primary"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-2">Alamat</h5>
                                    <p class="text-muted mb-0">Jl. Contoh No. 123<br>Jakarta Pusat, DKI Jakarta 10110</p>
                                </div>
                            </div>
                        </div>
                        <div class="info-item bg-white p-4 rounded-3 shadow-sm mb-4">
                            <div class="d-flex align-items-start">
                                <div class="icon-wrapper me-3">
                                    <i class="fas fa-phone fa-2x text-primary"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-2">Telepon</h5>
                                    <p class="text-muted mb-0">(021) 1234-5678<br>+62 812-3456-7890</p>
                                </div>
                            </div>
                        </div>
                        <div class="info-item bg-white p-4 rounded-3 shadow-sm mb-4">
                            <div class="d-flex align-items-start">
                                <div class="icon-wrapper me-3">
                                    <i class="fas fa-envelope fa-2x text-primary"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-2">Email</h5>
                                    <p class="text-muted mb-0">info@kspbtn.com<br>support@kspbtn.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="info-item bg-white p-4 rounded-3 shadow-sm">
                            <div class="d-flex align-items-start">
                                <div class="icon-wrapper me-3">
                                    <i class="fas fa-clock fa-2x text-primary"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-2">Jam Operasional</h5>
                                    <p class="text-muted mb-0">Senin - Jumat: 08:00 - 17:00<br>Sabtu: 08:00 - 12:00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="contact-form bg-white p-5 rounded-3 shadow-sm">
                        <h4 class="fw-bold mb-4">Kirim Pesan</h4>
                        <form action="<?= base_url('submit-contact') ?>" method="POST">
                            <?= csrf_field() ?>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Nama Lengkap *</label>
                                    <input type="text" class="form-control" id="name" name="name" required value="<?= old('name') ?>">
                                    <?php if (session('errors.name')): ?>
                                        <div class="text-danger small mt-1"><?= session('errors.name') ?></div>
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email *</label>
                                    <input type="email" class="form-control" id="email" name="email" required value="<?= old('email') ?>">
                                    <?php if (session('errors.email')): ?>
                                        <div class="text-danger small mt-1"><?= session('errors.email') ?></div>
                                    <?php endif; ?>
                                </div>
                                <div class="col-12">
                                    <label for="phone" class="form-label">Nomor Telepon *</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" required value="<?= old('phone') ?>">
                                    <?php if (session('errors.phone')): ?>
                                        <div class="text-danger small mt-1"><?= session('errors.phone') ?></div>
                                    <?php endif; ?>
                                </div>
                                <div class="col-12">
                                    <label for="message" class="form-label">Pesan *</label>
                                    <textarea class="form-control" id="message" name="message" rows="5" required><?= old('message') ?></textarea>
                                    <?php if (session('errors.message')): ?>
                                        <div class="text-danger small mt-1"><?= session('errors.message') ?></div>
                                    <?php endif; ?>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-lg px-5">Kirim Pesan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <img src="<?= base_url('assets/images/Logo KSP BTN.2.png') ?>" alt="KSP BTN Logo" height="60" class="mb-3">
                    <p class="text-white-50">Koperasi Simpan Pinjam Bintang Terang Nusantara - Mitra terpercaya untuk masa depan finansial yang lebih cerah.</p>
                    <div class="social-links mt-3">
                        <a href="#" class="text-white me-3"><i class="fab fa-facebook fa-lg"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-instagram fa-lg"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-twitter fa-lg"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-linkedin fa-lg"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="fw-bold mb-3">Menu</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#home" class="text-white-50 text-decoration-none">Beranda</a></li>
                        <li class="mb-2"><a href="#about" class="text-white-50 text-decoration-none">Tentang Kami</a></li>
                        <li class="mb-2"><a href="#services" class="text-white-50 text-decoration-none">Layanan</a></li>
                        <li class="mb-2"><a href="#contact" class="text-white-50 text-decoration-none">Kontak</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="fw-bold mb-3">Layanan</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#services" class="text-white-50 text-decoration-none">Simpanan</a></li>
                        <li class="mb-2"><a href="#services" class="text-white-50 text-decoration-none">Pinjaman</a></li>
                        <li class="mb-2"><a href="#services" class="text-white-50 text-decoration-none">Konsultasi</a></li>
                        <li class="mb-2"><a href="<?= base_url('register') ?>" class="text-white-50 text-decoration-none">Pendaftaran</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="fw-bold mb-3">Kontak</h5>
                    <ul class="list-unstyled text-white-50">
                        <li class="mb-2"><i class="fas fa-map-marker-alt me-2"></i> Jakarta Pusat, Indonesia</li>
                        <li class="mb-2"><i class="fas fa-phone me-2"></i> (021) 1234-5678</li>
                        <li class="mb-2"><i class="fas fa-envelope me-2"></i> info@kspbtn.com</li>
                    </ul>
                </div>
            </div>
            <hr class="my-4 bg-white opacity-25">
            <div class="text-center text-white-50">
                <p class="mb-0">&copy; <?= date('Y') ?> KSP Bintang Terang Nusantara. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Smooth Scroll -->
    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const offsetTop = target.offsetTop - 70;
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('shadow');
            } else {
                navbar.classList.remove('shadow');
            }
        });
    </script>
</body>
</html>
