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
    }

    .sidebar {
      position: fixed;
      top: 80px;
      left: 20px;
      width: 250px;
      height: calc(90% - 10px);
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
    }

    .sidebar ul li a {
      display: flex;
      align-items: center;
      padding: 14px 20px;
      color: var(--white);
      text-decoration: none;
      font-weight: 500;
      transition: 0.3s;
    }

    .sidebar ul li a:hover {
      background: var(--white);
      color: var(--green);
      border-radius: 10px;
      margin: 4px 10px;
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
      margin-top: 20px;
    }

    .user img {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      object-fit: cover;
    }

    .main {
      margin-left: 270px;
      padding: 30px;
      transition: 0.4s ease;
    }

    .sidebar.hide ~ .main {
      margin-left: 90px;
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
    <ul class="d-flex flex-column justify-content-between list-unstyled h-100">
      <div>
        <div class="user">
          <img src="https://i.pravatar.cc/40" alt="user">
          <span class="text-white fw-medium">Admin</span>
        </div>
        <li><a href="#"><ion-icon name="document-text-outline" class="me-2"></ion-icon> Dokumentasi</a></li>
        <li><a href="#"><ion-icon name="people-outline" class="me-2"></ion-icon> Penerima</a></li>
      </div>
      <li class="logout"><a href="#"><ion-icon name="log-out-outline" class="me-2"></ion-icon> Sign Out</a></li>
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
            <td>101</td>
            <td>Enzy Madona Ika Sofitri</td>
            <td>3312345678910001</td>
            <td><span class="badge bg-warning text-dark">Pending</span></td>
            <td>2025-01-27</td>
            <td>
              <button class="btn btn-sm text-success border-0">✏️</button>
              <button class="btn btn-sm text-danger border-0">🗑️</button>
            </td>
          </tr>
          <tr>
            <td>102</td>
            <td>Hendriyan Asyiq W.A</td>
            <td>3312345678910001</td>
            <td><span class="badge bg-warning text-dark">Pending</span></td>
            <td>2025-01-27</td>
            <td>
              <button class="btn btn-sm text-success border-0">✏️</button>
              <button class="btn btn-sm text-danger border-0">🗑️</button>
            </td>
          </tr>
          <tr>
            <td>103</td>
            <td>Genica Alexa Wibowo</td>
            <td>3312345678910001</td>
            <td><span class="badge bg-warning text-dark">Pending</span></td>
            <td>2025-01-27</td>
            <td>
              <button class="btn btn-sm text-success border-0">✏️</button>
              <button class="btn btn-sm text-danger border-0">🗑️</button>
            </td>
          </tr>
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