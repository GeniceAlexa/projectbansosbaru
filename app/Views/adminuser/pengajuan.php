<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bansosku Dashboard</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

  <style>
    * {
      font-family: 'Poppins', 'Roboto', sans-serif;
    }

    :root {
      --green: #14532d;
      --white: #fff;
      --gray: #f4f4f4;
      --dark: #222;
    }

    body {
      background: var(--gray);
      min-height: 100vh;
      margin: 0;
      padding: 0;
    }

    .sidebar {
      position: fixed;
      top: 80px;
      left: 20px;
      width: 250px;
      height: calc(100vh - 100px);
      background: var(--green);
      border-radius: 20px;
      box-shadow: 0 6px 25px rgba(0, 0, 0, 0.2);
      transition: 0.4s ease;
      z-index: 100;
      overflow: hidden;
    }

    .sidebar.hide {
      width: 70px;
    }

    .sidebar ul {
      height: 100%;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .sidebar ul li {
      list-style: none;
    }

    .sidebar ul li a {
      display: flex;
      align-items: center;
      padding: 14px 20px;
      color: var(--white);
      text-decoration: none;
      font-weight: 500;
      transition: 0.3s;
      white-space: nowrap;
    }

    .sidebar ul li a ion-icon {
      font-size: 1.5rem;
      min-width: 24px;
    }

    .sidebar ul li a:hover {
      background: var(--white);
      color: var(--green);
      border-radius: 10px;
      margin: 4px 10px;
    }

    .sidebar.hide ul li a span {
      display: none;
    }

    .sidebar ul li.logout {
      margin-bottom: 20px;
    }

    .user {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      gap: 5px;
      margin: 20px 0;
      padding: 10px;
    }

    .user img {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      object-fit: cover;
    }

    .sidebar.hide .user span {
      display: none;
    }

    .main {
      margin-left: 290px;
      padding: 30px;
      transition: 0.4s ease;
      margin-top: 80px;
      height: calc(100vh - 120px);
      overflow-y: auto;
    }

    .sidebar.hide ~ .main {
      margin-left: 110px;
    }

    .toggle {
      font-size: 2rem;
      color: var(--green);
      cursor: pointer;
    }

    .card-custom {
      background: var(--white);
      border-radius: 15px;
      box-shadow: 0 3px 6px rgba(0, 0, 0, 0.3);
      transition: 0.3s;
    }

    .card-custom:hover {
      transform: translateY(-3px);
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
    }

    table {
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 3px 6px rgba(0, 0, 0, 0.3);
      background: white;
    }

    table th {
      background: var(--green);
      color: var(--white);
    }

    table tbody tr:hover {
      background: #f1f1f1;
    }

    .switch-container {
      display: inline-flex;
      border: 1px solid #ccc;
      border-radius: 25px;
      overflow: hidden;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
      margin-bottom: 20px;
    }

    .switch-btn {
      padding: 8px 20px;
      border: none;
      background-color: white;
      color: black;
      cursor: pointer;
      font-weight: bold;
      transition: 0.3s;
    }

    .switch-btn:first-child {
      border-right: 1px solid #ccc;
    }

    .switch-btn.active {
      background-color: var(--green);
      color: white;
    }

    header {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 1000;
    }

    @media (max-width: 992px) {
      .sidebar {
        left: -270px;
      }

      .sidebar.show {
        left: 20px;
      }

      .main {
        margin-left: 0;
        padding: 20px;
      }

      .sidebar.hide ~ .main {
        margin-left: 0;
      }
    }
  </style>
</head>
<body>

  <?= $this->extend('layout/header'); ?>
  <?php $this->section('content'); ?>


  <?php if (session()->getFlashdata('pesan')) : ?>
      <div class="alert alert-success" role="alert">
          <?= session()->getFlashdata('pesan');?>
      </div>
  <?php endif; ?>

  <!-- Header -->
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

  <!-- Sidebar -->
  <div class="sidebar" id="sidebar">
    <ul class="list-unstyled">
      <div>
        <div class="user">
          <img src="https://i.pravatar.cc/40" alt="user">
          <span class="text-white fw-medium">Admin</span>
        </div>
        <li><a href="#"><ion-icon name="document-text-outline" class="me-2"></ion-icon><span>Data Penerima</span></a></li>
        <li><a href="#"><ion-icon name="people-outline" class="me-2"></ion-icon><span>Dokumetasi</span></a></li>
      </div>
      <li class="logout"><a href="#"><ion-icon name="log-out-outline" class="me-2"></ion-icon><span>Sign Out</span></a></li>
    </ul>
  </div>

  <!-- Main -->
  <div class="main">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <div class="toggle" id="toggle"><ion-icon name="menu-outline"></ion-icon></div>
      <h2 class="fw-semibold">Dashboard</h2>
    </div>

    <div class="row g-3 mb-4">
      <div class="col-md-3 col-sm-6">
        <div class="card-custom p-3 text-center">
          <h3 class="fs-6 text-dark">Total Penerima</h3>
          <p class="fs-4 fw-bold text-success">2,409</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="card-custom p-3 text-center">
          <h3 class="fs-6 text-dark">Status Pending</h3>
          <p class="fs-4 fw-bold text-success">182</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="card-custom p-3 text-center">
          <h3 class="fs-6 text-dark">Ditolak</h3>
          <p class="fs-4 fw-bold text-success">56</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="card-custom p-3 text-center">
          <h3 class="fs-6 text-dark">Total Permohonan</h3>
          <p class="fs-4 fw-bold text-success">2,647</p>
        </div>
      </div>
    </div>

    <div class="switch-container">
      <button class="switch-btn active">Pengajuan</button>
      <button class="switch-btn">Penerima</button>
    </div>

    <div class="table-responsive">
      <table class="table align-middle">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nama Permohonan</th>
            <th>NIK</th>
            <th>Status</th>
            <th>Tanggal</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
               <?php
            $i = 1;
            foreach($adminuser as $b) :  
          ?>
            <tr> 
              <th scope="row"><?= $i++ ?></th>
                  <td><?= $b['Nama'];?></td>
                  <td><?= $b['NIK'];?></td>
                  <td><?= $b['status'];?></td>
                  <td><?= $b['tanggal'];?></td>

                  <td class="aksi">
                    <a href="/adminuser/ubah/<?= $b['id_user']; ?>"><button class="edit"><ion-icon name="create-outline"></ion-icon></button></a>
                    <a href="/adminuser/hapus/<?= $b['id_user']; ?>" onclick="return confirm('Apakah anda yakin menghapus data ini?');"><button class="delete"><ion-icon name="trash-outline"></ion-icon></button></a>
            </tr>
            <?php endforeach; ?>    
        </tbody>
      </table>
    </div>
  </div>

  <!-- Bootstrap JS + Ionicons -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

  <script>
    const sidebar = document.getElementById('sidebar');
    const toggle = document.getElementById('toggle');
    toggle.onclick = () => {
      if (window.innerWidth <= 992) {
        sidebar.classList.toggle('show');
      } else {
        sidebar.classList.toggle('hide');
      }
    };
  </script>
</body>
</html>