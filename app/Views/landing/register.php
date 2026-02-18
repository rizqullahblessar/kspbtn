<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Anggota - KSP Bintang Terang Nusantara</title>
    <meta name="description" content="Daftar menjadi anggota KSP Bintang Terang Nusantara">
    
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
                        <a class="nav-link" href="<?= base_url('/') ?>">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/#about') ?>">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/#services') ?>">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/#contact') ?>">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary ms-lg-3 active" href="<?= base_url('register') ?>">Daftar Sekarang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Registration Section -->
    <section class="registration-section py-5 mt-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="registration-header text-center mb-5">
                        <span class="badge bg-primary mb-3">Pendaftaran Anggota</span>
                        <h1 class="display-5 fw-bold mb-3">Bergabunglah Bersama Kami</h1>
                        <p class="lead text-muted">Isi formulir di bawah ini untuk menjadi anggota KSP Bintang Terang Nusantara</p>
                    </div>

                    <?php if (session()->getFlashdata('success')): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="fas fa-check-circle me-2"></i><?= session()->getFlashdata('success') ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    <?php endif; ?>

                    <div class="registration-form bg-white p-5 rounded-3 shadow">
                        <form action="<?= base_url('submit-registration') ?>" method="POST">
                            <?= csrf_field() ?>
                            
                            <!-- Personal Information -->
                            <div class="form-section mb-4">
                                <h4 class="fw-bold mb-4"><i class="fas fa-user me-2 text-primary"></i>Data Pribadi</h4>
                                <div class="row g-3">
                                    <div class="col-12">
                                        <label for="full_name" class="form-label">Nama Lengkap *</label>
                                        <input type="text" class="form-control <?= session('errors.full_name') ? 'is-invalid' : '' ?>" 
                                               id="full_name" name="full_name" required value="<?= old('full_name') ?>" 
                                               placeholder="Masukkan nama lengkap sesuai KTP">
                                        <?php if (session('errors.full_name')): ?>
                                            <div class="invalid-feedback"><?= session('errors.full_name') ?></div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="id_number" class="form-label">Nomor KTP/NIK *</label>
                                        <input type="text" class="form-control <?= session('errors.id_number') ? 'is-invalid' : '' ?>" 
                                               id="id_number" name="id_number" required value="<?= old('id_number') ?>" 
                                               placeholder="16 digit NIK" maxlength="16">
                                        <?php if (session('errors.id_number')): ?>
                                            <div class="invalid-feedback"><?= session('errors.id_number') ?></div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="birth_date" class="form-label">Tanggal Lahir *</label>
                                        <input type="date" class="form-control" id="birth_date" name="birth_date" 
                                               required value="<?= old('birth_date') ?>">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="gender" class="form-label">Jenis Kelamin *</label>
                                        <select class="form-select" id="gender" name="gender" required>
                                            <option value="">Pilih Jenis Kelamin</option>
                                            <option value="L" <?= old('gender') == 'L' ? 'selected' : '' ?>>Laki-laki</option>
                                            <option value="P" <?= old('gender') == 'P' ? 'selected' : '' ?>>Perempuan</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="marital_status" class="form-label">Status Pernikahan *</label>
                                        <select class="form-select" id="marital_status" name="marital_status" required>
                                            <option value="">Pilih Status</option>
                                            <option value="belum_menikah" <?= old('marital_status') == 'belum_menikah' ? 'selected' : '' ?>>Belum Menikah</option>
                                            <option value="menikah" <?= old('marital_status') == 'menikah' ? 'selected' : '' ?>>Menikah</option>
                                            <option value="cerai" <?= old('marital_status') == 'cerai' ? 'selected' : '' ?>>Cerai</option>
                                        </select>
                                    </div>

                                    <div class="col-12">
                                        <label for="address" class="form-label">Alamat Lengkap *</label>
                                        <textarea class="form-control <?= session('errors.address') ? 'is-invalid' : '' ?>" 
                                                  id="address" name="address" rows="3" required 
                                                  placeholder="Masukkan alamat lengkap sesuai KTP"><?= old('address') ?></textarea>
                                        <?php if (session('errors.address')): ?>
                                            <div class="invalid-feedback"><?= session('errors.address') ?></div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="city" class="form-label">Kota/Kabupaten *</label>
                                        <input type="text" class="form-control" id="city" name="city" 
                                               required value="<?= old('city') ?>" placeholder="Contoh: Jakarta Pusat">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="province" class="form-label">Provinsi *</label>
                                        <input type="text" class="form-control" id="province" name="province" 
                                               required value="<?= old('province') ?>" placeholder="Contoh: DKI Jakarta">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="postal_code" class="form-label">Kode Pos *</label>
                                        <input type="text" class="form-control" id="postal_code" name="postal_code" 
                                               required value="<?= old('postal_code') ?>" placeholder="5 digit kode pos" maxlength="5">
                                    </div>
                                </div>
                            </div>

                            <!-- Contact Information -->
                            <div class="form-section mb-4">
                                <h4 class="fw-bold mb-4"><i class="fas fa-phone me-2 text-primary"></i>Informasi Kontak</h4>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="phone" class="form-label">Nomor Telepon/HP *</label>
                                        <input type="tel" class="form-control <?= session('errors.phone') ? 'is-invalid' : '' ?>" 
                                               id="phone" name="phone" required value="<?= old('phone') ?>" 
                                               placeholder="Contoh: 081234567890">
                                        <?php if (session('errors.phone')): ?>
                                            <div class="invalid-feedback"><?= session('errors.phone') ?></div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email *</label>
                                        <input type="email" class="form-control <?= session('errors.email') ? 'is-invalid' : '' ?>" 
                                               id="email" name="email" required value="<?= old('email') ?>" 
                                               placeholder="contoh@email.com">
                                        <?php if (session('errors.email')): ?>
                                            <div class="invalid-feedback"><?= session('errors.email') ?></div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="whatsapp" class="form-label">Nomor WhatsApp</label>
                                        <input type="tel" class="form-control" id="whatsapp" name="whatsapp" 
                                               value="<?= old('whatsapp') ?>" placeholder="Kosongkan jika sama dengan No. HP">
                                    </div>
                                </div>
                            </div>

                            <!-- Employment Information -->
                            <div class="form-section mb-4">
                                <h4 class="fw-bold mb-4"><i class="fas fa-briefcase me-2 text-primary"></i>Informasi Pekerjaan</h4>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="occupation" class="form-label">Pekerjaan *</label>
                                        <select class="form-select <?= session('errors.occupation') ? 'is-invalid' : '' ?>" 
                                                id="occupation" name="occupation" required>
                                            <option value="">Pilih Pekerjaan</option>
                                            <option value="pegawai_negeri" <?= old('occupation') == 'pegawai_negeri' ? 'selected' : '' ?>>Pegawai Negeri</option>
                                            <option value="pegawai_swasta" <?= old('occupation') == 'pegawai_swasta' ? 'selected' : '' ?>>Pegawai Swasta</option>
                                            <option value="wiraswasta" <?= old('occupation') == 'wiraswasta' ? 'selected' : '' ?>>Wiraswasta</option>
                                            <option value="profesional" <?= old('occupation') == 'profesional' ? 'selected' : '' ?>>Profesional</option>
                                            <option value="ibu_rumah_tangga" <?= old('occupation') == 'ibu_rumah_tangga' ? 'selected' : '' ?>>Ibu Rumah Tangga</option>
                                            <option value="pelajar_mahasiswa" <?= old('occupation') == 'pelajar_mahasiswa' ? 'selected' : '' ?>>Pelajar/Mahasiswa</option>
                                            <option value="lainnya" <?= old('occupation') == 'lainnya' ? 'selected' : '' ?>>Lainnya</option>
                                        </select>
                                        <?php if (session('errors.occupation')): ?>
                                            <div class="invalid-feedback"><?= session('errors.occupation') ?></div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="company_name" class="form-label">Nama Perusahaan/Instansi</label>
                                        <input type="text" class="form-control" id="company_name" name="company_name" 
                                               value="<?= old('company_name') ?>" placeholder="Opsional">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="monthly_income" class="form-label">Penghasilan per Bulan *</label>
                                        <select class="form-select <?= session('errors.monthly_income') ? 'is-invalid' : '' ?>" 
                                                id="monthly_income" name="monthly_income" required>
                                            <option value="">Pilih Range Penghasilan</option>
                                            <option value="< 3 juta" <?= old('monthly_income') == '< 3 juta' ? 'selected' : '' ?>>< Rp 3.000.000</option>
                                            <option value="3-5 juta" <?= old('monthly_income') == '3-5 juta' ? 'selected' : '' ?>>Rp 3.000.000 - Rp 5.000.000</option>
                                            <option value="5-10 juta" <?= old('monthly_income') == '5-10 juta' ? 'selected' : '' ?>>Rp 5.000.000 - Rp 10.000.000</option>
                                            <option value="10-20 juta" <?= old('monthly_income') == '10-20 juta' ? 'selected' : '' ?>>Rp 10.000.000 - Rp 20.000.000</option>
                                            <option value="> 20 juta" <?= old('monthly_income') == '> 20 juta' ? 'selected' : '' ?>>> Rp 20.000.000</option>
                                        </select>
                                        <?php if (session('errors.monthly_income')): ?>
                                            <div class="invalid-feedback"><?= session('errors.monthly_income') ?></div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>

                            <!-- Membership Information -->
                            <div class="form-section mb-4">
                                <h4 class="fw-bold mb-4"><i class="fas fa-id-card me-2 text-primary"></i>Informasi Keanggotaan</h4>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="initial_deposit" class="form-label">Setoran Awal (Rp) *</label>
                                        <input type="number" class="form-control <?= session('errors.initial_deposit') ? 'is-invalid' : '' ?>" 
                                               id="initial_deposit" name="initial_deposit" required value="<?= old('initial_deposit') ?>" 
                                               placeholder="Minimal Rp 100.000" min="100000">
                                        <small class="text-muted">Minimal setoran awal Rp 100.000</small>
                                        <?php if (session('errors.initial_deposit')): ?>
                                            <div class="invalid-feedback"><?= session('errors.initial_deposit') ?></div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="savings_type" class="form-label">Jenis Simpanan *</label>
                                        <select class="form-select" id="savings_type" name="savings_type" required>
                                            <option value="">Pilih Jenis Simpanan</option>
                                            <option value="sukarela" <?= old('savings_type') == 'sukarela' ? 'selected' : '' ?>>Simpanan Sukarela</option>
                                            <option value="berjangka" <?= old('savings_type') == 'berjangka' ? 'selected' : '' ?>>Simpanan Berjangka</option>
                                            <option value="pendidikan" <?= old('savings_type') == 'pendidikan' ? 'selected' : '' ?>>Simpanan Pendidikan</option>
                                            <option value="hari_raya" <?= old('savings_type') == 'hari_raya' ? 'selected' : '' ?>>Simpanan Hari Raya</option>
                                        </select>
                                    </div>

                                    <div class="col-12">
                                        <label for="purpose" class="form-label">Tujuan Bergabung</label>
                                        <textarea class="form-control" id="purpose" name="purpose" rows="3" 
                                                  placeholder="Opsional - Ceritakan tujuan Anda bergabung dengan KSP BTN"><?= old('purpose') ?></textarea>
                                    </div>

                                    <div class="col-12">
                                        <label for="referral" class="form-label">Referensi/Rekomendasi</label>
                                        <input type="text" class="form-control" id="referral" name="referral" 
                                               value="<?= old('referral') ?>" placeholder="Nama anggota yang merekomendasikan (opsional)">
                                    </div>
                                </div>
                            </div>

                            <!-- Terms and Conditions -->
                            <div class="form-section mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="terms" name="terms" required>
                                    <label class="form-check-label" for="terms">
                                        Saya menyetujui <a href="#" data-bs-toggle="modal" data-bs-target="#termsModal">syarat dan ketentuan</a> yang berlaku di KSP Bintang Terang Nusantara *
                                    </label>
                                </div>
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" id="privacy" name="privacy" required>
                                    <label class="form-check-label" for="privacy">
                                        Saya memberikan persetujuan untuk penggunaan data pribadi sesuai <a href="#" data-bs-toggle="modal" data-bs-target="#privacyModal">kebijakan privasi</a> *
                                    </label>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="fas fa-paper-plane me-2"></i>Kirim Pendaftaran
                                </button>
                                <a href="<?= base_url('/') ?>" class="btn btn-outline-secondary btn-lg">
                                    <i class="fas fa-arrow-left me-2"></i>Kembali ke Beranda
                                </a>
                            </div>
                        </form>
                    </div>

                    <!-- Benefits Info -->
                    <div class="benefits-info mt-5">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="benefit-card bg-light p-4 rounded-3 h-100">
                                    <i class="fas fa-gifts fa-2x text-primary mb-3"></i>
                                    <h5 class="fw-bold">Keuntungan Anggota</h5>
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Bunga simpanan kompetitif</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Akses pinjaman mudah</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Asuransi jiwa gratis</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Pembagian SHU tahunan</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="benefit-card bg-light p-4 rounded-3 h-100">
                                    <i class="fas fa-file-alt fa-2x text-primary mb-3"></i>
                                    <h5 class="fw-bold">Persyaratan</h5>
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>KTP yang masih berlaku</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Pas foto terbaru 3x4 (2 lembar)</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Setoran awal min. Rp 100.000</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Mengisi formulir pendaftaran</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <p class="mb-0">&copy; <?= date('Y') ?> KSP Bintang Terang Nusantara. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <a href="<?= base_url('/') ?>" class="text-white-50 text-decoration-none me-3">Beranda</a>
                    <a href="<?= base_url('/#about') ?>" class="text-white-50 text-decoration-none me-3">Tentang</a>
                    <a href="<?= base_url('/#contact') ?>" class="text-white-50 text-decoration-none">Kontak</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Terms Modal -->
    <div class="modal fade" id="termsModal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold">Syarat dan Ketentuan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <h6 class="fw-bold">1. Keanggotaan</h6>
                    <p>Calon anggota harus memenuhi persyaratan yang telah ditetapkan oleh koperasi dan menyetujui Anggaran Dasar dan Anggaran Rumah Tangga (AD/ART) koperasi.</p>
                    
                    <h6 class="fw-bold">2. Simpanan</h6>
                    <p>Anggota wajib membayar simpanan pokok dan simpanan wajib sesuai ketentuan yang berlaku.</p>
                    
                    <h6 class="fw-bold">3. Pinjaman</h6>
                    <p>Anggota berhak mengajukan pinjaman sesuai dengan ketentuan dan kemampuan koperasi.</p>
                    
                    <h6 class="fw-bold">4. Kewajiban Anggota</h6>
                    <p>Anggota wajib mematuhi peraturan koperasi dan melunasi pinjaman sesuai jadwal yang disepakati.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Privacy Modal -->
    <div class="modal fade" id="privacyModal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold">Kebijakan Privasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <h6 class="fw-bold">Pengumpulan Data</h6>
                    <p>Kami mengumpulkan data pribadi yang Anda berikan saat mendaftar sebagai anggota.</p>
                    
                    <h6 class="fw-bold">Penggunaan Data</h6>
                    <p>Data pribadi Anda akan digunakan untuk keperluan administrasi keanggotaan dan tidak akan dibagikan kepada pihak ketiga tanpa persetujuan Anda.</p>
                    
                    <h6 class="fw-bold">Keamanan Data</h6>
                    <p>Kami berkomitmen untuk menjaga keamanan data pribadi Anda dengan sistem keamanan yang memadai.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Format currency input
        const initialDeposit = document.getElementById('initial_deposit');
        if (initialDeposit) {
            initialDeposit.addEventListener('input', function(e) {
                // Remove non-numeric characters except for the first minus sign
                this.value = this.value.replace(/[^0-9]/g, '');
            });
        }

        // Copy phone to whatsapp if empty
        const phoneInput = document.getElementById('phone');
        const whatsappInput = document.getElementById('whatsapp');
        if (phoneInput && whatsappInput) {
            phoneInput.addEventListener('blur', function() {
                if (!whatsappInput.value) {
                    whatsappInput.value = this.value;
                }
            });
        }

        // Validate NIK length
        const idNumber = document.getElementById('id_number');
        if (idNumber) {
            idNumber.addEventListener('input', function(e) {
                this.value = this.value.replace(/[^0-9]/g, '').substring(0, 16);
            });
        }

        // Validate postal code
        const postalCode = document.getElementById('postal_code');
        if (postalCode) {
            postalCode.addEventListener('input', function(e) {
                this.value = this.value.replace(/[^0-9]/g, '').substring(0, 5);
            });
        }
    </script>
</body>
</html>
