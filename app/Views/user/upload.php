<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Upload Dokumen</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f0f0f0;
        }
        .container {
            width: 100%;
            height: 100vh;
            display: flex;
        }
        /* Sidebar */
        .sidebar {
            width: 250px;
            background: white;
            border-right: 1px solid #ccc;
            padding-top: 20px;
        }
        .logo {
            height: 80px;
            background: #0b6623;
            margin: 0 15px;
            border-radius: 5px;
        }
        .profile {
            text-align: center;
            margin-top: 40px;
        }
        .profile img {
            width: 60px;
            border-radius: 50%;
        }
        .menu {
            margin-top: 40px;
            text-align: center;
        }
        .menu button {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 20px;
            border: none;
            background: #1b6b3c;
            color: white;
            cursor: pointer;
        }
        .logout {
            margin-top: 40px;
        }
        /* Main Content */
        .main {
            flex: 1;
            background: #f9f9f9;
            padding: 30px;
        }
        .progress-box {
            background: white;
            padding: 20px;
            border-radius: 6px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
        }
        .progress-bar {
            width: 100%;
            height: 15px;
            background: #ccc;
            border-radius: 10px;
            overflow: hidden;
            margin-top: 10px;
        }
        .progress-fill {
            width: 70%;
            height: 100%;
            background: #2a5bd7;
        }
        .card {
            background: white;
            padding: 20px;
            border-radius: 6px;
            border: 1px solid #ccc;
            margin-bottom: 15px;
        }
        .upload-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
        }
        .upload-row label {
            font-weight: bold;
        }
        .upload-row button {
            background: #1b6b3c;
            padding: 10px 20px;
            border: none;
            border-radius: 6px;
            color: white;
            cursor: pointer;
        }
        .send-btn {
            background: #1b6b3c;
            padding: 12px 30px;
            border: none;
            border-radius: 6px;
            color: white;
            float: right;
            margin-top: 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="sidebar">
        <div class="logo"></div>
        <div class="profile">
            <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" />
            <p>Profil Pengguna</p>
            <p>123.456.789.110</p>
        </div>

        <div class="menu" >
            <button>Dashboard</button>
       
            <button>
                Status</button>
        </div>

        <div class="menu logout">
            <button style="background:#ddd; color:black;">Log Out</button>
        </div>
    </div>

    <div class="main">
        <div class="progress-box">
            <strong>Progres Upload Dokumen</strong>
            <p>0 dari 4 dokumen wajib telah di upload</p>
            <div class="progress-bar">
                <div class="progress-fill"></div>
            </div>
            <p>4 dokumen lagi untuk melanjutkan</p>
        </div>

        <div class="card">
            <div class="upload-row">
                <label>KTP (Kartu Tanda Penduduk)*</label>
                <button>UPLOAD</button>
            </div>
        </div>

        <div class="card">
            <div class="upload-row">
                <label>KK (Kartu Keluarga)*</label>
                <button>UPLOAD</button>
            </div>
        </div>

        <div class="card">
            <div class="upload-row">
                <label>SKTM (Surat Keterangan Tidak Mampu)</label>
                <button>UPLOAD</button>
            </div>
        </div>

        <div class="card">
            <div class="upload-row">
                <label>Bukti Penghasilan*</label>
                <button>UPLOAD</button>
            </div>
        </div>

        <div class="card">
            <div class="upload-row">
                <label>Foto Rumah Tampak Depan</label>
                <button>UPLOAD</button>
            </div>
        </div>

        <button class="send-btn">KIRIM</button>
    </div>
</div>
</body>
</html>
