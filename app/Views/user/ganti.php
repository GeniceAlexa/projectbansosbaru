<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Ubah Data Penerima</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet"> <!-- ini buat panggil font Poppins -->
  <script src="https://cdn.tailwindcss.com"></script> <!-- panggil tailwindcss -->
  <style> /* ini settingan css nya */
    :root{
      --green: #1f6b3a; /* header & buttons */
      --card-border: rgba(0,0,0,0.08);
    }
    body{font-family: 'Poppins', sans-serif;}
    /* subtle rounded card like the design */
    .card-border {
      border: 1px solid var(--card-border);
      border-radius: 18px;
      box-shadow: 4px 6px 0 rgba(0,0,0,0.06);
    }
    /* thin separators like design */
    .sep { height:1px; background: rgba(0,0,0,0.08); }
    .line-label{font-weight:700}
    /* profile round icon */
    .avatar{width:56px;height:56px;border-radius:9999px;border:1px dashed rgba(0,0,0,0.12);display:flex;align-items:center;justify-content:center}
    /* small icon container used in left of inputs */
    .icon-box{width:36px;height:36px;border-radius:9999px;border:1px solid rgba(0,0,0,0.06);display:flex;align-items:center;justify-content:center}
  </style>
</head>
<body class="bg-white">
  <!-- Header -->
  <header class="w-full bg-[var(--green)] text-white py-5 px-8">
    <div class="max-w-6xl mx-auto flex items-center justify-between">
      <div class="flex items-center gap-4">
        <button class="text-white text-xl font-semibold flex items-center gap-3">
          <span class="text-2xl">✕</span>
          <span class="text-lg">Ubah Data Penerima</span>
        </button>
      </div>
      <div>
        <button class="bg-white text-[var(--green)] font-semibold px-6 py-2 rounded-full shadow-sm">Simpan</button>
      </div>
    </div>
  </header>

  <!-- Card -->
  <main class="max-w-6xl mx-auto p-8">
    <div class="card-border bg-white p-8 mt-10">
      <div class="flex items-start gap-6 mb-6">
        <div class="avatar">
          <!-- simple profile svg -->
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="8" r="3" stroke="#111" stroke-width="1.2"/>
            <path d="M4 20c0-4 4-6 8-6s8 2 8 6" stroke="#111" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div>
          <h2 class="text-xl font-bold">Ubah Data Pribadi</h2>
          <p class="text-sm text-gray-600 mt-1">&nbsp;</p>
        </div>
      </div>

      <!-- form rows -->
      <div class="grid grid-cols-1 gap-6">
        <!-- Profil (Upload) -->
        <div class="flex items-center justify-between">
          <div>
            <div class="text-sm font-semibold mb-2">Profil</div>
            <div class="text-xs text-gray-400">Upload Foto Profil Baru</div>
          </div>
          <div class="flex items-stretch gap-0.5">
            <button class="bg-[var(--green)] flex items-center justify-center rounded-l-md px-3 py-2 border-r border-white/40">
              <div>
                <!-- pdf icon -->
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14 3H6a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z" stroke="#fff" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/><path d="M14 3v6h6" stroke="#fff" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </div>
            </button>
            <button class="bg-[var(--green)] text-white px-4 py-1.5 rounded-r-md font-semibold">UPLOAD</button>
          </div>
        </div>
        <div class="sep"></div>

        <!-- Nama Lengkap -->
        <div>
          <div class="text-sm font-semibold">Nama Lengkap</div>
          <div class="mt-3 text-gray-800">Enzy Madona</div>
        </div>
        <div class="sep"></div>

        <!-- NIK -->
        <div>
          <div class="text-sm font-semibold">NIK</div>
          <div class="mt-3 text-gray-800">3301456789645678</div>
        </div>
        <div class="sep"></div>

        <!-- No. Telp -->
        <div class="flex items-center gap-4">
          <div class="icon-box">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.86 19.86 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.86 19.86 0 0 1 3.08 4.18 2 2 0 0 1 5 2h3a2 2 0 0 1 2 1.72c.12.9.38 1.77.78 2.58a2 2 0 0 1-.45 2.11L9.91 10.09a14 14 0 0 0 6 6l1.68-1.68a2 2 0 0 1 2.11-.45c.81.4 1.68.66 2.58.78A2 2 0 0 1 22 16.92z" stroke="#111" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </div>
          <div>
            <div class="text-sm font-semibold">No. Telp</div>
            <div class="mt-3 text-gray-800">088234567899987</div>
          </div>
        </div>
        <div class="sep"></div>

        <!-- Email -->
        <div class="flex items-center gap-4">
          <div class="icon-box">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 8.5v7a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" stroke="#111" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/><path d="M21 8.5l-9 6-9-6" stroke="#111" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </div>
          <div>
            <div class="text-sm font-semibold">Email</div>
            <div class="mt-3 text-gray-800">enzy@gmail.com</div>
          </div>
        </div>
        <div class="sep"></div>

        <!-- Alamat -->
        <div class="flex items-center gap-4">
          <div class="icon-box">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M21 10c0 7-9 12-9 12s-9-5-9-12a9 9 0 1 1 18 0z" stroke="#111" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="10" r="2" stroke="#111" stroke-width="1"/></svg>
          </div>
          <div>
            <div class="text-sm font-semibold">Alamat</div>
            <div class="mt-3 text-gray-800">Jalan Merpati, Slarang, Cilacap</div>
          </div>
        </div>

        <div class="sep"></div>

      </div>

    </div>
  </main>

  <footer class="max-w-6xl mx-auto mt-6 p-4 text-center text-sm text-gray-400">&nbsp;</footer>
</body>
</html>
