<section class="bg-light py-5" id="beranda">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-3">Bantuan Sosial Untuk</h1>
                    <h1 class="display-4 fw-bold text-primary mb-4">Kesejahteraan Bersama</h1>
                    <div class="d-flex gap-3">
                        <button class="btn btn-primary btn-lg px-4">Baca Selengkapnya</button>
                        <button class="btn btn-primary btn-lg px-4">Pelajari Cara Kerja</button>
                    </div>
                </div>
                <div class="col-lg-6 text-center mt-4 mt-lg-0">
                    <img src="<?= base_url('assets/img/1.jpg') ?>" alt="Ilustrasi" width="500px">
                </div>
            </div>
        </div>
    </section>

    <!-- Alur Pengajuan Section -->
    <section class="py-5" id="alur">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-3">Alur Pengajuan Bantuan Sosial</h2>
                <p class="text-secondary">Ikuti langkah-langkah sederhana untuk melakukan pendaftaran secara online</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 text-center border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 80px; height: 80px;">
                                <img src="<?= base_url('assets/img/1.jpg') ?>" alt="" width="50px">
                            </div>
                            <h5 class="fw-bold mb-3">Buat Akun</h5>
                            <p class="text-secondary small mb-2">Daftarkan dengan data diri yang valid dan lengkap</p>
                            <p class="text-secondary small mb-0">Siapkan KK, KTP dan dokumen lainnya</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 text-center border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 80px; height: 80px;">
                                <img src="<?= base_url('assets/img/1.jpg') ?>" alt="" width="50px">
                            </div>
                            <h5 class="fw-bold mb-3">Lengkapi Berkas</h5>
                            <p class="text-secondary small mb-2">Daftar dengan data diri yang valid dan lengkap</p>
                            <p class="text-secondary small mb-0">Pastikan foto dokumen jelas dan terbaca</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 text-center border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 80px; height: 80px;">
                                <img src="<?= base_url('assets/img/1.jpg') ?>" alt="" width="50px">
                            </div>
                            <h5 class="fw-bold mb-3">Verifikasi Data</h5>
                            <p class="text-secondary small mb-2">Daftar dengan data diri yang valid dan lengkap</p>
                            <p class="text-secondary small mb-0">Verifikasi data memakan waktu 2-3 hari kerja</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 text-center border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 80px; height: 80px;">
                                <img src="<?= base_url('assets/img/1.jpg') ?>" alt="" width="50px">
                            </div>
                            <h5 class="fw-bold mb-3">Penerimaan Bantuan</h5>
                            <p class="text-secondary small mb-2">Daftar dengan data diri yang valid dan lengkap</p>
                            <p class="text-secondary small mb-0">Anda akan menerima notifikasi melalui sms atau email</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Akses Akun Section -->
    <section class="bg-light py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-3">Akses Akun Anda</h2>
                    <p class="text-secondary mb-4">Masuk ke dashboard personal untuk memantau status pengajuan, mengupdate data dan melihat riwayat yang diterima</p>
                    <button class="btn btn-primary btn-lg px-4">Masuk ke Akun</button>
                </div>
                <div class="col-lg-6 text-center mt-4 mt-lg-0">
                    <img src="<?= base_url('assets/img/1.jpg') ?>" alt="Dashboard" width="300px">
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-3">Pertanyaan yang Sering Diajukan</h2>
            </div>
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item border-0 shadow-sm mb-3">
                    <h2 class="accordion-header">
                        <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                            Bagaimana cara mendaftar sebagai penerima bantuan sosial?
                        </button>
                    </h2>
                    <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-secondary">
                            Anda dapat mendaftar melalui website ini dengan mengklik tombol "Buat Akun" dan mengisi formulir pendaftaran dengan lengkap.
                        </div>
                    </div>
                </div>
                <div class="accordion-item border-0 shadow-sm mb-3">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                            Dokumen apa saja yang diperlukan untuk pendaftaran?
                        </button>
                    </h2>
                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-secondary">
                            Anda memerlukan KTP, Kartu Keluarga, dan dokumen pendukung lainnya sesuai program bantuan yang diajukan.
                        </div>
                    </div>
                </div>
                <div class="accordion-item border-0 shadow-sm mb-3">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                            Berapa lama proses verifikasi data?
                        </button>
                    </h2>
                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body text-secondary">
                            Proses verifikasi data memakan waktu 2-3 hari kerja setelah dokumen diunggah.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Jadwal Penyaluran Section -->
    <section class="py-5 bg-light" id="jadwal">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-3">Jadwal Penyaluran Bantuan</h2>
                <p class="text-muted">Lihat jadwal terbaru penyaluran berbagai program bantuan sosial pemerintah</p>
            </div>

            <!-- Card 1: Sedang Berlangsung -->
            <div class="card border-0 shadow-sm rounded-4 mb-3" id="bpnt">
                <div class="card-body p-4">
                    <div class="row align-items-center g-3">
                        <div class="col-lg-3 col-md-12">
                            <h5 class="fw-semibold mb-1">Penyaluran Bantuan Pangan Non Tunai (BPNT)</h5>
                            <p class="text-muted small mb-0">Penyaluran bantuan pangan melalui sembako</p>
                        </div>
                        <div class="col-lg-2 col-md-3">
                            <span class="badge bg-success bg-opacity-25 text-success px-3 py-2 rounded-3 fw-semibold">Sedang Berlangsung</span>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="bg-light rounded-3 p-3">
                                <div class="d-flex align-items-start gap-2 mb-2">
                                    <div class="bg-primary bg-opacity-10 rounded-3 p-2">
                                        <i class="bi bi-calendar-event text-primary"></i>
                                    </div>
                                    <div>
                                        <p class="mb-0 fw-medium small">15 Januari 2024</p>
                                        <p class="mb-0 fw-medium small">08:00 - 16:00 WIB</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <div class="bg-primary bg-opacity-10 rounded-3 p-2">
                                        <i class="bi bi-geo-alt-fill text-primary"></i>
                                    </div>
                                    <div>
                                        <p class="text-uppercase small text-muted mb-0" style="font-size: 10px;">Lokasi</p>
                                        <p class="mb-0 fw-medium small">Balai RT</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="bg-success bg-opacity-25 rounded-4 p-3 text-center">
                                <h4 class="fw-bold mb-0">2.5M Keluarga</h4>
                                <p class="small mb-0 fw-medium">Penerima</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2: PKH -->
            <div class="card border-0 shadow-sm rounded-4 mb-3" id="pkh">
                <div class="card-body p-4">
                    <div class="row align-items-center g-3">
                        <div class="col-lg-3 col-md-12">
                            <h5 class="fw-semibold mb-1">Program Keluarga Harapan (PKH)</h5>
                            <p class="text-muted small mb-0">Bantuan tunai bersyarat untuk keluarga kurang mampu</p>
                        </div>
                        <div class="col-lg-2 col-md-3">
                            <span class="badge bg-danger bg-opacity-25 text-danger px-3 py-2 rounded-3 fw-semibold">Akan Datang</span>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="bg-light rounded-3 p-3">
                                <div class="d-flex align-items-start gap-2 mb-2">
                                    <div class="bg-primary bg-opacity-10 rounded-3 p-2">
                                        <i class="bi bi-calendar-event text-primary"></i>
                                    </div>
                                    <div>
                                        <p class="mb-0 fw-medium small">20 Januari 2024</p>
                                        <p class="mb-0 fw-medium small">09:00 - 15:00 WIB</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <div class="bg-primary bg-opacity-10 rounded-3 p-2">
                                        <i class="bi bi-geo-alt-fill text-primary"></i>
                                    </div>
                                    <div>
                                        <p class="text-uppercase small text-muted mb-0" style="font-size: 10px;">Lokasi</p>
                                        <p class="mb-0 fw-medium small">Kantor Pos Terdekat</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="bg-danger bg-opacity-25 rounded-4 p-3 text-center">
                                <h4 class="fw-bold mb-0">3.2M Keluarga</h4>
                                <p class="small mb-0 fw-medium">Penerima</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3: KIP -->
            <div class="card border-0 shadow-sm rounded-4 mb-3" id="kip">
                <div class="card-body p-4">
                    <div class="row align-items-center g-3">
                        <div class="col-lg-3 col-md-12">
                            <h5 class="fw-semibold mb-1">Kartu Indonesia Pintar (KIP)</h5>
                            <p class="text-muted small mb-0">Bantuan pendidikan untuk siswa</p>
                        </div>
                        <div class="col-lg-2 col-md-3">
                            <span class="badge bg-danger bg-opacity-25 text-danger px-3 py-2 rounded-3 fw-semibold">Akan Datang</span>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="bg-light rounded-3 p-3">
                                <div class="d-flex align-items-start gap-2 mb-2">
                                    <div class="bg-primary bg-opacity-10 rounded-3 p-2">
                                        <i class="bi bi-calendar-event text-primary"></i>
                                    </div>
                                    <div>
                                        <p class="mb-0 fw-medium small">25 Januari 2024</p>
                                        <p class="mb-0 fw-medium small">08:00 - 14:00 WIB</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <div class="bg-primary bg-opacity-10 rounded-3 p-2">
                                        <i class="bi bi-geo-alt-fill text-primary"></i>
                                    </div>
                                    <div>
                                        <p class="text-uppercase small text-muted mb-0" style="font-size: 10px;">Lokasi</p>
                                        <p class="mb-0 fw-medium small">Sekolah Terdaftar</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="bg-danger bg-opacity-25 rounded-4 p-3 text-center">
                                <h4 class="fw-bold mb-0">3.2M Siswa</h4>
                                <p class="small mb-0 fw-medium">Penerima</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-0 shadow-sm rounded-4 mb-3" id="upah">
                <div class="card-body p-4">
                    <div class="row align-items-center g-3">
                        <div class="col-lg-3 col-md-12">
                            <h5 class="fw-semibold mb-1">Bantuan Subsidi Upah</h5>
                            <p class="text-muted small mb-0">Bantuan subsidi dengan upah</p>
                        </div>
                        <div class="col-lg-2 col-md-3">
                            <span class="badge bg-danger bg-opacity-25 text-danger px-3 py-2 rounded-3 fw-semibold">Akan Datang</span>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="bg-light rounded-3 p-3">
                                <div class="d-flex align-items-start gap-2 mb-2">
                                    <div class="bg-primary bg-opacity-10 rounded-3 p-2">
                                        <i class="bi bi-calendar-event text-primary"></i>
                                    </div>
                                    <div>
                                        <p class="mb-0 fw-medium small">25 Januari 2024</p>
                                        <p class="mb-0 fw-medium small">08:00 - 14:00 WIB</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-2">
                                    <div class="bg-primary bg-opacity-10 rounded-3 p-2">
                                        <i class="bi bi-geo-alt-fill text-primary"></i>
                                    </div>
                                    <div>
                                        <p class="text-uppercase small text-muted mb-0" style="font-size: 10px;">Lokasi</p>
                                        <p class="mb-0 fw-medium small">Warga Terdaftar</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="bg-danger bg-opacity-25 rounded-4 p-3 text-center">
                                <h4 class="fw-bold mb-0">3.2M Siswa</h4>
                                <p class="small mb-0 fw-medium">Penerima</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Berita & Informasi Section -->
    <section class="py-5" id="berita">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-3">Berita & Informasi Terkini</h2>
                <p class="text-secondary">Lihat berita terbaru penyaluran berbagai program bantuan sosial pemerintah</p>
            </div>

            <!-- Featured News -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="row g-0">
                    
                    <div class="col-md-6">
                        <div class="card-body p-4">
                            <div class="d-flex gap-2 mb-3">
                                <span class="badge bg-danger">Pengumuman</span>
                                <span class="badge bg-warning text-dark">Featured</span>
                            </div>
                            <h4 class="fw-bold mb-3">Penyaluran Bansos Tahap Pertama 2024 Dimulai 15 Januari</h4>
                            <p class="text-secondary mb-4">Pemerintah resmi memulai penyaluran bantuan sosial tahap pertama untuk keluarga penerima manfaat di seluruh Indonesia.</p>
                            <div class="d-flex align-items-center text-secondary small mb-3">
                                <i class="fas fa-calendar me-2"></i>
                                <span class="me-3">12 Januari 2024</span>
                                <span>Kemensos RI</span>
                            </div>
                            <button class="btn btn-outline-primary">Baca Selengkapnya <i class="fas fa-arrow-right ms-2"></i></button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="<?= base_url('assets/img/2.jpg') ?>" class="img-fluid rounded-start h-100 object-fit-cover" alt="Featured">
                    </div>
                </div>
            </div>

            <!-- News Grid -->
            <div class="row g-4 mb-4">
                <!-- News Card 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="<?= base_url('assets/img/3.jpg') ?>" class="card-img-top" alt="News">
                        <div class="card-body">
                            <span class="badge bg-info text-dark position-absolute top-0 start-0 m-2">Informasi</span>
                            <h5 class="fw-bold mb-3">Update Syarat dan Ketentuan Program Keluarga Harapan (PKH) 2024</h5>
                            <p class="text-secondary small mb-3">Terdapat beberapa perubahan kriteria dan persyaratan untuk program PKH tahun 2024 yang perlu diketahui penerima</p>
                            <div class="d-flex align-items-center text-secondary small mb-3">
                                <i class="fas fa-calendar me-2"></i>
                                <span class="me-3">12 Januari 2024</span>
                                <span>Dirjen Linjamsos</span>
                            </div>
                            <a href="#" class="text-primary text-decoration-none small fw-semibold">Baca Selengkapnya <i class="fas fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <!-- News Card 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="<?= base_url('assets/img/3.jpg') ?>" class="card-img-top" alt="News">
                        <div class="card-body">
                            <span class="badge bg-success position-absolute top-0 start-0 m-2">Tutorial</span>
                            <h5 class="fw-bold mb-3">Cara Mengecek Status Penerima Bantuan Melalui Aplikasi Mobile</h5>
                            <p class="text-secondary small mb-3">Panduan lengkap menggunakan aplikasi mobile untuk memantau status dan riwayat penerimaan bantuan sosial</p>
                            <div class="d-flex align-items-center text-secondary small mb-3">
                                <i class="fas fa-calendar me-2"></i>
                                <span class="me-3">8 Januari 2024</span>
                                <span>Tim Digital</span>
                            </div>
                            <a href="#" class="text-primary text-decoration-none small fw-semibold">Baca Selengkapnya <i class="fas fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <!-- News Card 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="<?= base_url('assets/img/3.jpg') ?>" class="card-img-top" alt="News">
                        <div class="card-body">
                            <span class="badge bg-danger position-absolute top-0 start-0 m-2">Pengumuman</span>
                            <h5 class="fw-bold mb-3">Penyaluran Kartu Sembako Gelombang 2 Segera Dimulai</h5>
                            <p class="text-secondary small mb-3">Persiapan penyaluran kartu sembako gelombang kedua sudah memasuki tahap final dan akan dimulai akhir bulan ini</p>
                            <div class="d-flex align-items-center text-secondary small mb-3">
                                <i class="fas fa-calendar me-2"></i>
                                <span class="me-3">6 Januari 2024</span>
                                <span>Kemensos RI</span>
                            </div>
                            <a href="#" class="text-primary text-decoration-none small fw-semibold">Baca Selengkapnya <i class="fas fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="<?= base_url('assets/img/3.jpg') ?>" class="card-img-top" alt="News">
                        <div class="card-body">
                            <span class="badge bg-info text-dark position-absolute top-0 start-0 m-2">Informasi</span>
                            <h5 class="fw-bold mb-3">Update Syarat dan Ketentuan Program Keluarga Harapan (PKH) 2024</h5>
                            <p class="text-secondary small mb-3">Terdapat beberapa perubahan kriteria dan persyaratan untuk program PKH tahun 2024 yang perlu diketahui penerima</p>
                            <div class="d-flex align-items-center text-secondary small mb-3">
                                <i class="fas fa-calendar me-2"></i>
                                <span class="me-3">12 Januari 2024</span>
                                <span>Dirjen Linjamsos</span>
                            </div>
                            <a href="#" class="text-primary text-decoration-none small fw-semibold">Baca Selengkapnya <i class="fas fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <!-- News Card 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="<?= base_url('assets/img/3.jpg') ?>" class="card-img-top" alt="News">
                        <div class="card-body">
                            <span class="badge bg-success position-absolute top-0 start-0 m-2">Tutorial</span>
                            <h5 class="fw-bold mb-3">Cara Mengecek Status Penerima Bantuan Melalui Aplikasi Mobile</h5>
                            <p class="text-secondary small mb-3">Panduan lengkap menggunakan aplikasi mobile untuk memantau status dan riwayat penerimaan bantuan sosial</p>
                            <div class="d-flex align-items-center text-secondary small mb-3">
                                <i class="fas fa-calendar me-2"></i>
                                <span class="me-3">8 Januari 2024</span>
                                <span>Tim Digital</span>
                            </div>
                            <a href="#" class="text-primary text-decoration-none small fw-semibold">Baca Selengkapnya <i class="fas fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <!-- News Card 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="<?= base_url('assets/img/3.jpg') ?>" class="card-img-top" alt="News">
                        <div class="card-body">
                            <span class="badge bg-danger position-absolute top-0 start-0 m-2">Pengumuman</span>
                            <h5 class="fw-bold mb-3">Penyaluran Kartu Sembako Gelombang 2 Segera Dimulai</h5>
                            <p class="text-secondary small mb-3">Persiapan penyaluran kartu sembako gelombang kedua sudah memasuki tahap final dan akan dimulai akhir bulan ini</p>
                            <div class="d-flex align-items-center text-secondary small mb-3">
                                <i class="fas fa-calendar me-2"></i>
                                <span class="me-3">6 Januari 2024</span>
                                <span>Kemensos RI</span>
                            </div>
                            <a href="#" class="text-primary text-decoration-none small fw-semibold">Baca Selengkapnya <i class="fas fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <button class="btn btn-outline-primary btn-lg px-5">Lihat Berita Lainnya</button>
            </div>
        </div>
    </section>

<?= $this->rendersection('content');?>