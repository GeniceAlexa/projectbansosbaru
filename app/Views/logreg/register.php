<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun Bansosku</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    
    <style>
        /* Pengaturan Dasar dan Latar Belakang */
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            background-color: #f0f2f5; /* Latar belakang abu-abu terang */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
            box-sizing: border-box;
        }

        /* Kartu Pendaftaran Utama */
        .register-card {
            background-color: #ffffff;
            border-radius: 24px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.05);
            width: 100%;
            max-width: 700px; /* Lebih lebar untuk form multi-langkah */
            box-sizing: border-box;
            overflow: hidden; /* Mencegah bayangan terpotong */
        }
        
        .card-header {
            padding: 24px 32px;
            border-bottom: 1px solid #e9ecef;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        /* Link "Kembali" */
        .back-link {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: #495057;
            font-size: 15px;
            font-weight: 500;
        }

        .back-link i {
            margin-right: 10px;
        }
        
        .card-body {
            padding: 32px 40px;
        }

        /* --- Stepper (Penanda Langkah) --- */
        .stepper {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 32px;
            padding: 0 20px; /* Beri sedikit padding agar tidak menempel */
        }

        .stepper-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            color: #adb5bd; /* Warna non-aktif */
            font-weight: 500;
            font-size: 14px;
            position: relative;
            width: 120px; /* Lebar tetap untuk setiap item */
            text-align: center;
        }

        .step-number {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 2px solid #adb5bd;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 8px;
            background-color: #fff;
            transition: all 0.3s ease;
            z-index: 2; /* Di atas garis */
        }
        
        .step-info {
            font-size: 12px;
            color: #6c757d;
        }
        
        /* Garis Penghubung Stepper */
        .stepper-line {
            flex-grow: 1;
            height: 2px;
            background-color: #e9ecef; /* Garis non-aktif */
            margin: 0 -20px; /* Atur agar pas di antara lingkaran */
            transform: translateY(-24px); /* Posisikan di tengah lingkaran */
            transition: background-color 0.3s ease;
        }

        /* Status Aktif Stepper */
        .stepper-item.active .step-number {
            border-color: #0d6efd;
            background-color: #0d6efd;
            color: #fff;
        }
        
        .stepper-item.active {
            color: #0d6efd; /* Warna teks aktif */
        }
        
        .stepper-item.active .step-info {
            color: #495057;
        }
        
        /* Status Selesai (Completed) Stepper */
        .stepper-item.completed .step-number {
            border-color: #0d6efd;
            background-color: #0d6efd;
            color: #fff;
        }

        .stepper-item.completed {
            color: #495057;
        }
        
        .stepper-item.completed.active {
            color: #0d6efd; /* Jaga agar yg aktif tetap biru */
        }

        .stepper-item.completed .step-number i {
            font-size: 18px;
        }
        
        .stepper-line.completed {
            background-color: #0d6efd; /* Garis aktif */
        }
        
        /* --- Konten Form --- */
        .form-content {
            text-align: center;
        }

        .logo {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #28a745, #22c1c3);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 16px;
            color: white;
            font-size: 32px;
            font-weight: bold;
        }
        
        .form-content h2 {
            margin: 0 0 4px 0;
            font-size: 24px;
            color: #212529;
        }
        
        .form-content p {
            margin: 0 0 32px 0;
            font-size: 15px;
            color: #6c757d;
        }

        /* --- Langkah Form (yang disembunyikan/ditampilkan) --- */
        .form-step {
          display: none;    /*Sembunyikan semua langkah */
           animation: fadeIn 1s;   /*Animasi saat muncul */
        }
        
        .form-step.active {
            display: block; /* Tampilkan langkah yang aktif */
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Grid untuk field 2 kolom */
        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr); /* 2 kolom */
            gap: 20px;
            text-align: left;
            margin-bottom: 20px;
        }
        
        /* Grup Input (Label + Field) */
        .input-group {
            margin-bottom: 20px;
            text-align: left;
        }
        
        /* Grup input yang mengisi 2 kolom */
        .input-group.full-width {
            grid-column: span 2;
        }

        .input-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #343a40;
            font-size: 14px;
        }

        .input-group input,
        .input-group select {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #ced4da;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 15px;
            background-color: #fff;
            color: #495057;
        }
        
        /* Styling untuk select agar mirip input */
        .input-group select {
            appearance: none;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 1rem center;
            background-size: 16px 12px;
        }

        .input-group input::placeholder {
            color: #adb5bd;
        }
        
        .input-group input:focus,
        .input-group select:focus {
            outline: none;
            border-color: #0d6efd;
            box-shadow: 0 0 0 3px rgba(13, 110, 253, 0.2);
        }
        
        /* Untuk field password dengan ikon */
        .input-field {
            position: relative;
        }
        
        .input-field .icon {
            position: absolute;
            right: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #888;
            cursor: pointer;
        }

        /* Persetujuan Syarat & Ketentuan */
        .terms {
            font-size: 13px;
            color: #6c757d;
            text-align: left;
            line-height: 1.6;
            margin-bottom: 24px;
        }
        
        .terms a {
            color: #0d6efd;
            text-decoration: none;
            font-weight: 500;
        }

        /* Link "Sudah punya akun?" */
        .login-link {
            text-align: center;
            font-size: 14px;
            color: #6c757d;
            margin-top: 24px;
        }
        
        .login-link a {
            color: #0d6efd;
            font-weight: 600;
            text-decoration: none;
        }

        /* Navigasi Tombol */
        .form-navigation {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 32px;
        }
        
        .btn {
            padding: 12px 24px;
            border: none;
            border-radius: 8px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .btn-secondary {
            background-color: #e9ecef;
            color: #495057;
        }
        
        .btn-secondary:hover {
            background-color: #ced4da;
        }
        
        .btn-primary {
            background: linear-gradient(90deg, #1dbc9c, #0d6efd);
            color: white;
            background-size: 150% auto;
        }
        
        .btn-primary:hover {
            background-position: right center;
            box-shadow: 0 4px 12px rgba(13, 110, 253, 0.2);
        }
        
        /* Sembunyikan tombol jika tidak diperlukan */
        .btn-secondary[style*="display: none"] {
            display: none;
        }
    </style>
</head>
<body>

    <div class="register-card">
        <div class="card-header">
            <a href="<?= base_url()?>" class="back-link">
                <i class="fas fa-arrow-left"></i>
                Kembali ke Beranda
            </a>
        </div>
        
        <div class="card-body">
            <div class="stepper">
                <div class="stepper-item active" data-step="1">
                    <div class="step-number">1</div>
                    <div>Data Pribadi <div class="step-info">Informasi dasar</div></div>
                </div>
                <div class="stepper-line" data-step-line="1"></div>
                <div class="stepper-item" data-step="2">
                    <div class="step-number">2</div>
                    <div>Alamat <div class="step-info">Domisili tempat tinggal</div></div>
                </div>
                <div class="stepper-line" data-step-line="2"></div>
                <div class="stepper-item" data-step="3">
                    <div class="step-number">3</div>
                    <div>Akun <div class="step-info">Kata sandi & verifikasi</div></div>
                </div>
            </div>

            <div class="form-content">
                <div class="logo">B</div>
                <h2 id="form-title">Daftar BansosKu</h2>
                <p id="form-subtitle">Langkah 1 dari 3: Data Pribadi</p>
                
                <form id="register-form" action="<?= base_url('/register/save') ?>" method="post">
                    <div class="form-step active" id="step-1">
                        <div class="form-grid">
                            <div class="input-group">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" id="nama" name="nama" placeholder="Nama Lengkap">
                            </div>
                            <div class="input-group">
                                <label for="nik">NIK</label>
                                <input type="text" id="nik" name="nik" placeholder="NIK">
                            </div>
                            <div class="input-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" placeholder="Email">
                            </div>
                            <div class="input-group">
                                <label for="hp">Nomor HP</label>
                                <input type="tel" id="no_hp" name="no_hp" placeholder="Nomor HP">
                            </div>
                        </div>
                        <p class="login-link">Sudah punya akun? <a href="<?= base_url('login') ?>">Masuk sekarang</a></p>
                    </div>

                    <div class="form-step" id="step-2">
                        <div class="form-grid">
                            <div class="input-group">
                                <label for="provinsi">Provinsi</label>
                                <select id="provinsi" name="provinsi">
                                    <option value="">Pilih kota</option>
                                    <option value="">Jawa Tengah</option>
                                    <option value="">Jawa Barat</option>
                                </select>
                            </div>
                            <div class="input-group">
                                <label for="kota">Kota/Kabupaten</label>
                                <select id="kota" name="kota">
                                    <option value="">Pilih kota/kabupaten</option>
                                    <option value="">Cilacap</option>
                                    <option value="">Bandung</option>
                                </select>
                            </div>
                            <div class="input-group">
                                <label for="kecamatan">Kecamatan</label>
                                <select id="kecamatan" name="kecamatan">
                                    <option value="">Pilih kota</option>
                                    <option value="">Cilacap Selatan</option>
                                    <option value="">Coblong</option>
                                </select>
                            </div>
                            <div class="input-group">
                                <label for="kelurahan">Kelurahan</label>
                                <select id="kelurahan" name="kelurahan">
                                    <option value="">Pilih kota</option>
                                    <option value="">Sidanegara</option>
                                    <option value="">Antapani</option>
                                </select>
                            </div>
                            <div class="input-group full-width">
                                <label for="alamat">Alamat Lengkap</label>
                                <input type="text" id="alamat" name="alamat" placeholder="Jalan, RT/RW, No. rumah">
                            </div>
                            <div class="input-group full-width">
                                <label for="kodepos">Kode Pos</label>
                                <input type="text" id="kode_pos" name="kode_pos" placeholder="12345">
                            </div>
                        </div>
                        <p class="login-link">Sudah punya akun? <a href="<?= base_url('login') ?>">Masuk sekarang</a></p>
                    </div>

                    <div class="form-step" id="step-3">
                        <div class="form-grid">
                            <div class="input-group full-width">
                                <label for="password">Kata Sandi</label>
                                <div class="input-field">
                                    <input type="password" id="password" name="password" placeholder="Minimal 8 karakter">
                                    <i class="fas fa-eye-slash icon" id="toggle-password"></i>
                                </div>
                            </div>
                            <div class="input-group full-width">
                                <label for="confirm-password">Konfirmasi Kata Sandi</label>
                                <div class="input-field">
                                    <input type="password" id="confirm-password" name="confirm-password"  placeholder="Ulangi kata sandi">
                                    <i class="fas fa-eye-slash icon" id="toggle-confirm-password"></i>
                                </div>
                            </div>
                        </div>
                        <div class="terms">
                            Saya menyetujui <a href="#">Syarat & Ketentuan</a> dan <a href="#">KebijakanPrivasi Bansosku</a>, serta memberikan persetujuan untuk pengolahan data pribadi sesuai ketentuan yang berlaku.
                        </div>
                        <p class="login-link">Sudah punya akun? <a href="<?= base_url('login') ?>">Masuk sekarang</a></p>
                    </div>

                    <div class="form-navigation">
                        <button type="button" class="btn btn-secondary" id="prev-btn" style="display: none;">Kembali</button>
                        <button type="button" class="btn btn-primary" id="next-btn">Selanjutnya</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Ambil semua elemen yang dibutuhkan
            const formSteps = document.querySelectorAll('.form-step');
            const stepperItems = document.querySelectorAll('.stepper-item');
            const stepperLines = document.querySelectorAll('.stepper-line');
            const prevBtn = document.getElementById('prev-btn');
            const nextBtn = document.getElementById('next-btn');
            
            const formTitle = document.getElementById('form-title');
            const formSubtitle = document.getElementById('form-subtitle');

            // Data untuk judul dan subjudul
            const titles = ["Daftar BansosKu", "Daftar BansosKu", "Daftar BansosKu"];
            const subtitles = [
                "Langkah 1 dari 3: Data Pribadi",
                "Langkah 2 dari 3: Alamat",
                "Langkah 3 dari 3: Akun"
            ];

            let currentStep = 1;
            const totalSteps = formSteps.length;

            // Fungsi untuk update tampilan form
            function updateForm() {
                // Update Judul
                formTitle.textContent = titles[currentStep - 1];
                formSubtitle.textContent = subtitles[currentStep - 1];
                
                // Tampilkan/sembunyikan langkah form
                formSteps.forEach((step, index) => {
                    step.classList.toggle('active', index + 1 === currentStep);
                });

                // Update Stepper
                stepperItems.forEach((item, index) => {
                    const stepNum = index + 1;
                    const stepNumberEl = item.querySelector('.step-number');
                    
                    if (stepNum < currentStep) {
                        item.classList.add('completed');
                        item.classList.remove('active');
                        stepNumberEl.innerHTML = '<i class="fas fa-check"></i>';
                    } else if (stepNum === currentStep) {
                        item.classList.add('active');
                        item.classList.remove('completed');
                        stepNumberEl.innerHTML = stepNum;
                    } else {
                        item.classList.remove('active', 'completed');
                        stepNumberEl.innerHTML = stepNum;
                    }
                });
                
                // Update Garis Stepper
                stepperLines.forEach((line, index) => {
                    line.classList.toggle('completed', index < currentStep - 1);
                });

                // Update Tombol
                prevBtn.style.display = (currentStep === 1) ? 'none' : 'inline-block';
                nextBtn.textContent = (currentStep === totalSteps) ? 'Selesai' : 'Selanjutnya';
            }

            // Event Listener untuk Tombol "Selanjutnya"
            nextBtn.addEventListener('click', () => {
                if (currentStep < totalSteps) {
                    currentStep++;
                    updateForm();
                } else {
                    // Logika untuk submit form di sini
                    alert('Pendaftaran Selesai!');
                    document.getElementById('register-form').submit();
                }
            });

            // Event Listener untuk Tombol "Kembali"
            prevBtn.addEventListener('click', () => {
                if (currentStep > 1) {
                    currentStep--;
                    updateForm();
                }
            });

            // Fungsi untuk Toggle Password
            function togglePasswordVisibility(inputId, iconId) {
                const input = document.getElementById(inputId);
                const icon = document.getElementById(iconId);
                
                if (input && icon) {
                    icon.addEventListener('click', () => {
                        if (input.type === 'password') {
                            input.type = 'text';
                            icon.classList.remove('fa-eye-slash');
                            icon.classList.add('fa-eye');
                        } else {
                            input.type = 'password';
                            icon.classList.remove('fa-eye');
                            icon.classList.add('fa-eye-slash');
                        }
                    });
                }
            }

            // Terapkan toggle password
            togglePasswordVisibility('password', 'toggle-password');
            togglePasswordVisibility('confirm-password', 'toggle-confirm-password');

            // Inisialisasi tampilan awal
            updateForm();
        });
    </script>
</body>
</html>