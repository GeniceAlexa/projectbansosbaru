<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Penerima Bantuan</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
        }

        header {
            text-align: center;
            margin-bottom: 30px;
        }

        header h1 {
            font-size: 28px;
            margin-bottom: 8px;
        }

        header p {
            color: #666;
            font-size: 14px;
        }

        .status-card {
            background: white;
            border-radius: 12px;
            padding: 25px;
            margin-bottom: 20px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .status-card h2 {
            font-size: 20px;
            margin-bottom: 5px;
        }

        .status-card p {
            color: #666;
            font-size: 14px;
        }

        .status-badge {
            background: linear-gradient(135deg, #ff9a56 0%, #ff6b6b 100%);
            color: white;
            padding: 10px 25px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 14px;
        }

        .content-section {
            display: grid;
            grid-template-columns: 300px 1fr;
            gap: 20px;
            margin-bottom: 20px;
        }

        .profile-photo {
            background: white;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            height: 550px;
        }

        .data-pribadi {
            background: white;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        .data-pribadi-header {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 10px;
        }

        .icon-user {
            width: 40px;
            height: 40px;
            background: #f0f0f0;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .data-pribadi h2 {
            font-size: 20px;
        }

        .data-pribadi > p {
            color: #666;
            font-size: 13px;
            margin-bottom: 25px;
        }

        .data-field {
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #e0e0e0;
        }

        .data-field:last-child {
            border-bottom: none;
            margin-bottom: 0;
        }

        .data-field h3 {
            font-size: 14px;
            color: #333;
            margin-bottom: 5px;
            font-weight: 600;
        }

        .data-field p {
            font-size: 14px;
            color: #666;
        }

        .status-dokumen {
            background: white;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }

        .status-dokumen-header {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 10px;
        }

        .icon-doc {
            width: 40px;
            height: 40px;
            background: #f0f0f0;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .status-dokumen h2 {
            font-size: 20px;
        }

        .status-dokumen > p {
            color: #666;
            font-size: 13px;
            margin-bottom: 25px;
        }

        .dokumen-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 18px 20px;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            margin-bottom: 12px;
        }

        .dokumen-item h3 {
            font-size: 15px;
            font-weight: 500;
        }

        .badge-verified {
            background: linear-gradient(135deg, #a8e6cf 0%, #7bc991 100%);
            color: #2d5f3f;
            padding: 8px 20px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
        }

        .badge-waiting {
            background: linear-gradient(135deg, #ffd5a8 0%, #ffb366 100%);
            color: #8b4513;
            padding: 8px 20px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
        }

        .buttons {
            max-width: 1000px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
        }

        .buttons button {
            padding: 12px 25px;
            border-radius: 8px;
            border: none;
            font-size: 14px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s;
        }

        .buttons button:first-child {
            background: white;
            border: 1px solid #ddd;
            color: #333;
        }

        .buttons button:first-child:hover {
            background: #f5f5f5;
        }

        .buttons button:nth-child(2) {
            background: white;
            border: 1px solid #ddd;
            color: #333;
            display: flex;
            align-items: center;
            gap: 8px;
            margin-left: auto;
        }

        .buttons button:nth-child(2):hover {
            background: #f5f5f5;
        }

        .buttons button:nth-child(2) img {
            width: 16px;
            height: 16px;
        }

        .buttons button:nth-child(2) img::before {
            content: ✏️';
        }

        .buttons button:last-child {
            background: linear-gradient(135deg, #4a90e2 0%, #357abd 100%);
            color: white;
        }

        .buttons button:last-child:hover {
            background: linear-gradient(135deg, #357abd 0%, #2a5f95 100%);
        }

        @media (max-width: 768px) {
            .content-section {
                grid-template-columns: 1fr;
            }

            .buttons {
                flex-direction: column;
            }

            .buttons button:nth-child(2) {
                margin-left: 0;
            }

            .buttons button {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Profile Penerima Bantuan</h1>
            <p>Data dan status permohonan bantuan sosial Anda</p>
        </header>

        <div class="status-card">
            <div>
                <h2>Status Permohonan</h2>
                <p>Tanggal Submit: 30 September 2025</p>
            </div>
            <div class="status-badge">
                Menunggu Verifikasi
            </div>
        </div>

        <div class="content-section">
            <div class="profile-photo">
                <div class="photo-placeholder">
                    <img src="prof" alt="prof">
                </div>
            </div>

            <div class="data-pribadi">
                <div class="data-pribadi-header">
                    <div class="icon-user">👤</div>
                    <h2>Data Pribadi</h2>
                </div>
                <p>Informasi Personal yang telah di submit</p>

                <div class="data-field">
                    <h3>Nama Lengkap</h3>
                    <p><?= $user['nama'] ?? '-' ?></p>
                </div>
                <div class="data-field">
                    <h3>NIK</h3>
                     <p><?= $user['nik'] ?? '-' ?></p>
                </div>

                <div class="data-field">
                    <h3>Email</h3>
                    <p><?= $user['email'] ?? '-' ?></p>
                </div>

                <div class="data-field">
                    <h3>No. Telp</h3>
                    <p><?= $user['no_hp'] ?? '-' ?></p>
                </div>

                <div class="data-field">
                    <h3>Alamat</h3>
                       <p><?= $user['alamat'] ?? '-' ?></p>
                </div>
            </div>
        </div>

        <div class="status-dokumen">
            <div class="status-dokumen-header">
                <div class="icon-doc">📄</div>
                <h2>Status Dokumen</h2>
            </div>
            <p>Status verifikasi dokumen yang telah diupload</p>

            <div class="dokumen-item">
                <h3>KTP (Kartu Tanda Penduduk)</h3>
                <span class="badge-verified">Terverifikasi</span>
            </div>

            <div class="dokumen-item">
                <h3>KK (Kartu Keluarga)</h3>
                <span class="badge-verified">Terverifikasi</span>
            </div>

            <div class="dokumen-item">
                <h3>SKTM (Surat Keterangan Tidak Mampu)</h3>
                <span class="badge-verified">Terverifikasi</span>
            </div>

            <div class="dokumen-item">
                <h3>Bukti Penghasilan</h3>
                <span class="badge-waiting">Menunggu Verifikasi</span>
            </div>

            <div class="dokumen-item">
                <h3>Foto Rumah Tampak Depan</h3>
                <span class="badge-waiting">Menunggu Verifikasi</span>
            </div>
        </div>

        <div class="buttons">
            <a href="<?= site_url('upload') ?>">
            <button>
                Cek Dokumen
            </button>
            <a href="<?= site_url('ganti') ?>">
            <button>
                Edit Profile
            </button>
            <a href="<?= site_url('status') ?>">
                <button>Lihat Status Bantuan</button>
            </a>
        </div>
    </div>
</body>
</html>