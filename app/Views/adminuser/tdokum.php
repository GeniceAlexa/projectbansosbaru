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

  <!-- Main -->
  <main class="container" style="margin-left: 300px; margin-top: 100px; max-width: 900px;">
    <div class="card shadow-sm" style="border-radius: 20px;">
      <div class="card-body p-5">
        <h2 class="text-center fw-bold mb-5" style="font-size: 2rem;">Data Dokumentasi</h2>

        <!-- Judul Gambar -->
        <div class="mb-4">
          <h5 class="fw-bold mb-3">Judul Gambar</h5>
          <input type="text" class="form-control form-control-custom" value="" required>
          <hr class="my-4">
        </div>

        <!-- Gambar -->
        <div class="mb-4">
          <h5 class="fw-bold mb-3">Gambar</h5>
          <img src="https://via.placeholder.com/200x150/dc3545/ffffff?text=DANA+BANSOS" 
               alt="Dana Bansos" 
               class="img-fluid mb-3" 
               style="max-width: 200px; border-radius: 10px;">
          <div>
            <button class="btn btn-success rounded-pill px-4">Ubah foto</button>
          </div>
          <hr class="my-4">
        </div>

        <!-- Wilayah -->
        <div class="mb-4">
          <h5 class="fw-bold mb-3"><br></br>Wilayah</h5>
          <input type="text" class="form-control form-control-custom" value="" required>
          <hr class="my-4">
        </div>

        <!-- Deskripsi -->
        <div class="mb-5">
          <h5 class="fw-bold mb-3">Deskripsi</h5>
          <input type="text" class="form-control form-control-custom" value="" required>
          <hr class="my-4">
        </div>

        <!-- Button Simpan -->
        <div class="text-end">
          <button class="btn btn-primary rounded-pill px-5 py-2 fw-bold" 
                  style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border: none;">
            Simpan Data
          </button>
        </div>
      </div>
    </div>
  </main>

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