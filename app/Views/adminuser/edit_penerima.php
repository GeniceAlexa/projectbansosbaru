<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data User & Status Penerima</title>
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  
  <!-- Ionicons -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  
  <style>
    * {
      font-family: 'Poppins', sans-serif;
    }

    body {
      background: #f4f4f4;
      padding: 20px;
    }

    /* Header */
    .header {
      background: linear-gradient(135deg, #1f6243 0%, #14532d 100%);
      color: white;
      padding: 12px 20px;
      border-radius: 10px;
      margin-bottom: 30px;
    }

    .header img {
      width: 35px;
      height: 35px;
    }

    .notif-btn {
      background: white;
      color: #14532d;
      border: none;
      border-radius: 20px;
      padding: 6px 20px;
      font-size: 13px;
      font-weight: 600;
      transition: 0.3s;
    }

    .notif-btn:hover {
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
      transform: translateY(-2px);
    }

    /* Card Container */
    .card-custom {
      background: white;
      border-radius: 20px;
      padding: 40px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      margin-bottom: 30px;
    }

    /* Box wrapper to limit width and center the card on large screens */
    .box-wrapper {
      max-width: 900px;
      margin: 30px auto;
      padding: 0 15px;
    }

    .card-custom h2 {
      font-size: 24px;
      font-weight: 600;
      text-align: center;
      margin-bottom: 30px;
      color: #222;
    }

    /* Form Styling */
    .form-label {
      font-weight: 600;
      color: #222;
      margin-bottom: 8px;
      font-size: 14px;
    }

    .form-control-custom {
      border: none;
      border-bottom: 2px solid #ddd;
      border-radius: 0;
      padding: 12px 5px 12px 35px;
      font-size: 14px;
      transition: 0.3s;
    }

    .form-control-custom:focus {
      border-bottom-color: #1f6243;
      box-shadow: none;
      outline: none;
    }

    .input-icon {
      position: absolute;
      left: 5px;
      top: 38px;
      font-size: 20px;
      color: #666;
    }

    /* Status Steps */
    .status-steps {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin: 40px 0;
      position: relative;
    }

    .status-steps::before {
      content: '';
      position: absolute;
      top: 25px;
      left: 8%;
      right: 8%;
      height: 3px;
      background: #ddd;
      z-index: 0;
    }

    .step-item {
      display: flex;
      flex-direction: column;
      align-items: center;
      position: relative;
      z-index: 1;
      flex: 1;
    }

    .step-circle {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      background: #ddd;
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 600;
      font-size: 18px;
      margin-bottom: 10px;
      transition: 0.3s;
    }

    .step-circle.active {
      background: #1f6243;
      box-shadow: 0 4px 12px rgba(31, 98, 67, 0.4);
    }

    .step-label {
      font-size: 12px;
      color: #666;
      text-align: center;
      font-weight: 500;
    }

    /* Status Text */
    .status-text {
      text-align: center;
      margin: 30px 0;
      font-size: 15px;
      color: #666;
    }

    .status-text strong {
      color: #1f6243;
      font-weight: 600;
    }

    /* Action Buttons */
    .btn-setuju {
      background: linear-gradient(135deg, #3b82f6 0%, #1f6243 100%);
      color: white;
      border: none;
      padding: 12px 40px;
      border-radius: 10px;
      font-weight: 600;
      transition: 0.3s;
    }

    .btn-setuju:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 16px rgba(31, 98, 67, 0.3);
      color: white;
    }

    .btn-tolak {
      background: linear-gradient(135deg, #3b82f6 0%, #1f6243 100%);
      color: white;
      border: none;
      padding: 12px 40px;
      border-radius: 10px;
      font-weight: 600;
      transition: 0.3s;
    }

    .btn-tolak:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 16px rgba(220, 38, 38, 0.3);
      color: white;
    }

    .btn-simpan {
      background: linear-gradient(135deg, #1f6243 0%, #14532d 100%);
      color: white;
      border: none;
      padding: 10px 30px;
      border-radius: 25px;
      font-weight: 600;
      font-size: 14px;
      float: right;
      transition: 0.3s;
    }

    .btn-simpan:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 16px rgba(31, 98, 67, 0.3);
    }

    /* Responsive */
    @media (max-width: 768px) {
      .card-custom {
        padding: 25px;
      }

      .status-steps {
        flex-wrap: wrap;
        gap: 20px;
      }

      .step-circle {
        width: 40px;
        height: 40px;
        font-size: 16px;
      }

      .step-label {
        font-size: 10px;
      }

      .btn-setuju, .btn-tolak {
        padding: 10px 25px;
        font-size: 14px;
      }
    }
  </style>
</head>
<body>
   <div class="bg-dark">
    <header class="d-flex justify-content-between align-items-center px-3 py-2" style="background-color:#1f6243;">
      <div class="d-flex align-items-center">
        <img src="https://upload.wikimedia.org/wikipedia/commons/3/3a/Logo_Bansos.png" width="40" height="40" class="me-2">
        <div>
          <h1 class="h6 m-0 text-white fw-bold">Admin Dashboard</h1>
          <p class="m-0 text-light small">Kelola sistem bantuan sosial</p>
        </div>
      </div>
      <button class="btn btn-light rounded-pill fw-bold px-3 py-1">Notifikasi</button>
    </header>
  </div>

    <form action="<?= base_url('/adminuser/update/'.$adminuser['id_user']) ?>" method="post">
      <?= csrf_field() ?>
      <input type="hidden" name="return" value="penerima">
      <div class="box-wrapper">
        <div class="card-custom">
        <h2>Data Penerima</h2>
        <div class="row g-4">
          <div class="col-12">
            <label class="form-label">Nama Lengkap</label>
            <input type="text" name="nama" class="form-control form-control-custom" value="<?= esc($adminuser['nama'] ?? $adminuser['Nama'] ?? '') ?>">
          </div>

          <div class="col-12">
            <label class="form-label">NIK</label>
            <input type="text" name="nik" class="form-control form-control-custom" value="<?= esc($adminuser['nik'] ?? $adminuser['NIK'] ?? '') ?>">
          </div>

          <div class="col-12">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control form-control-custom" value="<?= esc($adminuser['email'] ?? '') ?>">
          </div>

          <div class="col-12">
            <label class="form-label">No. Telp</label>
            <input type="text" name="no_hp" class="form-control form-control-custom" value="<?= esc($adminuser['no_hp'] ?? '') ?>">
          </div>

          <div class="col-12">
            <label class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control form-control-custom" value="<?= esc($adminuser['alamat'] ?? '') ?>">
          </div>

          <div class="col-12">
            <label class="form-label">Tanggal</label>
            <input type="date" name="tanggal" class="form-control form-control-custom" value="<?= esc($adminuser['tanggal'] ?? '') ?>">
          </div>

          <div class="col-12">
            <label class="form-label">Status</label>
            <select name="status" class="form-select">
              <?php $cur = $adminuser['status'] ?? '' ?>
              <option value="pending" <?= $cur=='pending' ? 'selected' : '' ?>>Pending</option>
              <option value="disetujui" <?= $cur=='disetujui' ? 'selected' : '' ?>>Disetujui</option>
              <option value="ditolak" <?= $cur=='ditolak' ? 'selected' : '' ?>>Ditolak</option>
            </select>
          </div>
        </div>

        <div class="mt-4 d-flex justify-content-between">
          <a href="<?= base_url('/adminuser/penerima') ?>" class="btn btn-outline-secondary">Kembali</a>
          <button type="submit" class="btn-simpan">Simpan Perubahan</button>
        </div>

        </div>
      </div>
    </form>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>