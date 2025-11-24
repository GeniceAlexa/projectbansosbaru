<?= $this->extend('layout/header'); ?>
<?= $this->section('content'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Dokumentasi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f1f1f1;
            font-family: "Poppins", sans-serif;
        }
        .topbar {
            background-color: #145c2c;
            color: white;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .main-card {
            background: white;
            border-radius: 20px;
            padding: 40px;
            margin-top: 40px;
            box-shadow: 0px 3px 8px rgba(0,0,0,0.1);
        }
        .label-title {
            font-weight: 600;
            margin-bottom: 5px;
        }
        .line {
            border-bottom: 1px solid #dcdcdc;
            margin: 15px 0 25px 0;
        }
        .btn-update {
            background-color: #0b5527;
            border: none;
            padding: 8px 18px;
            color: white;
            border-radius: 20px;
            font-size: 14px;
        }
        .btn-submit {
            background: linear-gradient(to right, #4e7eff, #2a61ff);
            border: none;
            padding: 10px 25px;
            color: white;
            border-radius: 20px;
            float: right;
        }
        img.preview {
            width: 110px;
            border-radius: 8px;
        }
    </style>
</head>
<body>


  <?= $this->extend('layout/header'); ?>
  <?php $this->section('content'); ?>

<?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
<?php endif; ?>

<div class="topbar">
    <div class="d-flex align-items-center gap-3">
        <img src="https://via.placeholder.com/45" class="rounded-circle">
        <div>
            <b>Admin Dashboard</b><br>
            <small>Kelola sistem bantuan sosial</small>
        </div>
    </div>
</div>

<div class="container">
    <div class="main-card">

        <h3 class="text-center mb-4"><b>Tambah Dokumentasi</b></h3>

        <!-- ==================== FORM ==================== -->
        <form action="<?= base_url('/admindokum/simpan'); ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>

            <!-- JUDUL -->
            <div>
                <div class="label-title">Judul Gambar</div>
                <input type="text" name="judul" class="form-control" value="<?= old('judul'); ?>">
                <div class="text-danger"><?= $validation->getError('judul'); ?></div>
                <div class="line"></div>
            </div>

            <!-- GAMBAR -->
            <div>
                <div class="label-title">Gambar</div>

                <div class="d-flex justify-content-between align-items-center">
                    <img id="previewImg" src="https://via.placeholder.com/110" class="preview">
                    <input type="file" name="gambar" id="gambarInput" class="d-none" onchange="previewFile(event)">
                    <button type="button" class="btn-update" onclick="document.getElementById('gambarInput').click();">Pilih Foto</button>
                </div>

                <div class="text-danger"><?= $validation->getError('gambar'); ?></div>
                <div class="line"></div>
            </div>

            <!-- WILAYAH -->
            <div>
                <div class="label-title">Wilayah</div>
                <input type="text" name="wilayah" class="form-control" value="<?= old('wilayah'); ?>">
                <div class="text-danger"><?= $validation->getError('wilayah'); ?></div>
                <div class="line"></div>
            </div>

            <!-- DESKRIPSI -->
            <div>
                <div class="label-title">Deskripsi</div>
                <textarea name="deskripsi" class="form-control" rows="3"><?= old('deskripsi'); ?></textarea>
                <div class="text-danger"><?= $validation->getError('deskripsi'); ?></div>
                <div class="line"></div>
            </div>

            <!-- SUBMIT -->
            <button type="submit" class="btn-submit">Simpan Data</button>
        </form>

    </div>
</div>

<script>
function previewFile(event) {
    const img = document.getElementById("previewImg");
    img.src = URL.createObjectURL(event.target.files[0]);
}
</script>

</body>
</html>

<?= $this->endSection(); ?>
