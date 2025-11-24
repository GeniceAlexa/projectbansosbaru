<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Status Bantuan</title>
<style>
 body { margin:0; font-family: Arial, sans-serif; background:#f0f0f0; }
 .container { display:flex; height:100vh; }
 .sidebar { width:250px; background:white; border-right:1px solid #ccc; padding-top:20px; }
 .logo { height:80px; background:#0b6623; margin:0 15px; border-radius:5px; }
 .profile { text-align:center; margin-top:40px; }
 .profile img { width:60px; border-radius:50%; }
 .menu { margin-top:40px; text-align:center; }
 .menu button { width:80%; padding:10px; margin:10px 0; border-radius:20px; border:none; background:#1b6b3c; color:white; cursor:pointer; }
 .menu .active { background:#134d2c; }
 .logout button { background:#ddd !important; color:black; }
 .main { flex:1; padding:30px; }
 .progress-box, .card { background:white; padding:20px; border-radius:8px; border:1px solid #ccc; }
 .progress-bar { width:100%; height:15px; background:#ccc; border-radius:10px; overflow:hidden; margin-top:10px; }
 .progress-fill { height:100%; width:78%; background:#2a5bd7; }
 .timeline { margin-top:20px; display:flex; gap:20px; }
 .left, .right { flex:1; }
 .timeline-item { display:flex; gap:15px; margin-bottom:25px; }
 .icon { width:40px; height:40px; border-radius:50%; background:#e6efe9; display:flex; justify-content:center; align-items:center; font-size:20px; }
 .done { background:#d0ecd0 !important; }
 .processing { background:#d0d8f5 !important; }
 .info-box { background:white; border:1px solid #ccc; padding:20px; border-radius:8px; }
 .download-btn { margin-top:20px; background:#1b6b3c; color:white; border:none; padding:12px 25px; border-radius:8px; display:flex; align-items:center; gap:10px; cursor:pointer; }
</style>
</head>
<body>
<div class="container">
 
 <div class="sidebar">
   <div class="logo"></div>
   <div class="profile">
     <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png">
     <p>Profil Pengguna</p>
     <p>123.456.789.110</p>
   </div>
   <div class="menu">
     <button>Dashboard</button>
     <button class="active">Status</button>
   </div>
   <div class="menu logout">
     <button>Log Out</button>
   </div>
 </div>

 <div class="main">

   <div class="progress-box">
     <strong>Progres Permohonan</strong>
     <p>Step 3 dari 4</p>
     <div class="progress-bar"><div class="progress-fill"></div></div>
     <p>4 dokumen lagi untuk melanjutkan</p>
   </div>

   <div class="timeline">
     <div class="left">
       <div class="card">
         <h3>TIME LINE STATUS</h3>
         <p>Detail Progress Setiap Tahap</p><br>

         <div class="timeline-item">
           <div class="icon done">📄</div>
           <div>
             <strong>Pendaftaran</strong> — <span style="color:green;">SELESAI</span><br>
             <small>12 September 2025</small>
           </div>
         </div>

         <div class="timeline-item">
           <div class="icon done">📄</div>
           <div>
             <strong>Verifikasi Dokumen</strong> — <span style="color:green;">SELESAI</span><br>
             <small>15 September 2025</small>
           </div>
         </div>

         <div class="timeline-item">
           <div class="icon done">📄</div>
           <div>
             <strong>Survei Lapangan</strong> — <span style="color:green;">SELESAI</span><br>
             <small>30 September 2025</small>
           </div>
         </div>

         <div class="timeline-item">
           <div class="icon processing">📄</div>
           <div>
             <strong>Validasi Data</strong> — <span style="color:#3355cc;">PROSES</span><br>
             <small>13 Oktober 2025</small>
           </div>
         </div>

         <div class="timeline-item">
           <div class="icon">📄</div>
           <div>
             <strong>Persetujuan</strong><br>
             <small>22 Oktober 2025</small>
           </div>
         </div>

         <div class="timeline-item">
           <div class="icon">📄</div>
           <div>
             <strong>Pencairan Bantuan</strong><br>
             <small>09 Oktober 2025</small>
           </div>
         </div>

       </div>
     </div>

     <div class="right">
       <div class="info-box">
         <h3>Info Bantuan</h3>
         <p>Program<br><strong>Bantuan Sembako</strong></p>
         <p>Jumlah Bantuan<br><strong>Sembako Lengkap</strong></p>
         <p>Periode<br><strong>3 Bulan</strong></p>
         <p>Tempat Pengambilan<br><strong>Kantor cabang kesugihan</strong></p>
         <p>Pencairan<br><strong>30 September 2078</strong></p>

         <button class="download-btn">⬇️ Unduh Surat Keterangan</button>
       </div>
     </div>

   </div>

 </div>

</div>
</body>
</html>
