<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk ke Bansosku</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    
    <style>
        /* Pengaturan Dasar dan Latar Belakang */
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            background-color: #f9f9f9; /* Latar belakang abu-abu gelap */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px; /* Padding untuk tampilan mobile */
            box-sizing: border-box;
        }

        /* Kartu Login Utama */
        .login-card {
            background-color: #ffffff;
            border-radius: 20px; /* Sudut yang sangat melengkung */
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 100%;
            max-width: 450px; /* Lebar maksimum kartu */
            box-sizing: border-box;
        }

        /* Link "Kembali" */
        .back-link {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: #555;
            font-size: 14px;
            margin-bottom: 24px;
            font-weight: 500;
        }

        .back-link i {
            margin-right: 8px;
        }

        /* Bagian Header (Logo, Judul, Subjudul) */
        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .logo {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #28a745, #22c1c3); /* Gradient hijau-biru */
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 20px;
            color: white;
            font-size: 32px;
            font-weight: bold;
        }

        .header h1 {
            margin: 0 0 8px 0;
            font-size: 26px;
            color: #222;
        }

        .header h1 span {
            color: #22c1c3; /* Warna sorotan untuk nama aplikasi */
        }

        .header p {
            margin: 0;
            font-size: 15px;
            color: #666;
            line-height: 1.5;
        }

        /* Grup Input (Label + Field) */
        .input-group {
            margin-bottom: 20px;
        }

        .input-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #333;
            font-size: 14px;
        }

        .input-field {
            position: relative;
        }

        /* Styling Input Field */
        .input-field input {
            width: 100%;
            padding: 14px 16px 14px 45px; /* Padding kiri untuk ikon */
            border: 1px solid #ddd;
            border-radius: 10px;
            box-sizing: border-box; /* Penting untuk padding */
            font-size: 15px;
        }

        .input-field input::placeholder {
            color: #aaa;
        }
        
        .input-field input:focus {
            outline: none;
            border-color: #22c1c3;
            box-shadow: 0 0 0 3px rgba(34, 193, 195, 0.2);
        }

        /* Ikon di dalam Input Field */
        .input-field .icon {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #888;
            font-size: 16px;
        }
        
        .input-field .eye-icon {
            position: absolute;
            right: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #888;
            cursor: pointer;
        }

        /* Opsi di bawah form (Ingat saya & Lupa sandi) */
        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            font-size: 14px;
        }

        .remember-me {
            display: flex;
            align-items: center;
            color: #555;
        }

        .remember-me input[type="checkbox"] {
            margin-right: 8px;
            accent-color: #22c1c3; /* Warna checkbox */
        }

        .forgot-password {
            color: #22c1c3;
            text-decoration: none;
            font-weight: 600;
        }
        
        .forgot-password:hover {
            text-decoration: underline;
        }

        /* Tombol Login Utama */
        .btn-login {
            width: 100%;
            padding: 15px;
            background-color: #1dbc9c; /* Warna hijau tombol */
            border: none;
            border-radius: 10px;
            color: white;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-login:hover {
            background-color: #18a085;
        }

        /* Pemisah "atau" */
        .separator {
            display: flex;
            align-items: center;
            text-align: center;
            color: #aaa;
            margin: 30px 0;
            font-size: 14px;
        }

        .separator::before,
        .separator::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #ddd;
        }

        .separator::before {
            margin-right: 15px;
        }

        .separator::after {
            margin-left: 15px;
        }

        /* Tombol Login Sosial */
        .btn-social {
            width: 100%;
            padding: 14px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            color: #333;
            font-size: 15px;
            font-weight: 500;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 12px;
            transition: background-color 0.3s ease;
        }
        
        .btn-social:hover {
            background-color: #f9f9f9;
        }

        .btn-social img,
        .btn-social svg {
            width: 20px;
            height: 20px;
            margin-right: 12px;
        }

        /* Teks di Bagian Bawah */
        .signup-link, .help-text {
            text-align: center;
            font-size: 14px;
            color: #666;
            margin-top: 20px;
            line-height: 1.5;
        }
        
        .signup-link a {
            color: #22c1c3;
            font-weight: 600;
            text-decoration: none;
        }
        
        .signup-link a:hover {
            text-decoration: underline;
        }
        
        .help-text {
             margin-top: 10px;
        }
    </style>
</head>
<body>

    <div class="login-card">
        <a href="<?= base_url()?>" class="back-link">
            <i class="fas fa-arrow-left"></i>
            Kembali ke Beranda
        </a>

        <div class="header">
            <div class="logo">B</div>
            <h1>Masuk ke <span>Bansosku</span></h1>
            <p>Akses dashboard pribadi Anda untuk memantau status bantuan sosial</p>
        </div>

        <?php if (session()->getFlashdata('error')) : ?>
        <div class="alert alert-danger">
            <?= session()->getFlashdata('error'); ?>
        </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('success'); ?>
        </div>
        <?php endif; ?>

        <form action="<?= base_url('/process'); ?>" method="post">
            <div class="input-group">
                <label for="email">Email atau NIK</label>
                <div class="input-field">
                    <i class="fas fa-user icon"></i>
                    <input type="text" id="email" name="email" placeholder="Masukkan email atau NIK Anda" required>
                </div>
            </div>

            <div class="input-group">
                <label for="password">Kata Sandi</label>
                <div class="input-field">
                    <i class="fas fa-lock icon"></i>
                    <input type="password" id="password" name="password" placeholder="Masukkan kata sandi" required>
                    <i class="fas fa-eye-slash eye-icon"></i>
                </div>
            </div>

            <div class="form-options">
                <label class="remember-me">
                    <input type="checkbox" name="remember">
                    Ingat saya
                </label>
                <a href="#" class="forgot-password">Lupa kata sandi?</a>
            </div>

            <button type="submit" class="btn-login">Masuk</button>
        </form>

        <div class="separator">atau</div>

        <button type="button" class="btn-social">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" xmlns:xlink="http://www.w3.org/1999/xlink" style="enable-background:new 0 0 48 48;">
                <path fill="#EA4335" d="M24 9.5c3.54 0 6.43 1.25 8.61 3.23l6.53-6.53C35.37 2.78 30.07 0 24 0 14.63 0 6.79 5.86 2.8 13.91l7.85 6.06C12.33 13.06 17.73 9.5 24 9.5z"></path>
                <path fill="#4285F4" d="M46.18 24.7c0-1.56-.14-3.08-.4-4.55H24v8.6h12.44c-.54 2.79-2.1 5.17-4.65 6.8l7.66 5.9C43.3 36.6 46.18 31.13 46.18 24.7z"></path>
                <path fill="#FBBC05" d="M10.65 28.01c-.48-1.45-.75-3-.75-4.6s.27-3.15.75-4.6L2.8 13.91C1.03 17.36 0 21.5 0 26s1.03 8.64 2.8 12.09l7.85-6.08z"></path>
                <path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.66-5.9c-2.15 1.45-4.9 2.3-7.9 2.3-6.27 0-11.66-4.22-13.56-9.9l-7.85 6.06C6.79 42.14 14.63 48 24 48z"></path>
                <path fill="none" d="M0 0h48v48H0z"></path>
            </svg>
            Masuk dengan Google
        </button>
        <button type="button" class="btn-social">
            <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.4 3-.405 1.02.005 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/>
            </svg>
            Masuk dengan GitHub
        </button>

        <p class="signup-link">
            Belum punya akun? <a href="<?= base_url('register') ?>">Daftar sekarang</a>
        </p>
        <p class="help-text">
            Butuh bantuan? Hubungi customer service kami di 0800-1234-5678
        </p>
    </div>

</body>
</html>