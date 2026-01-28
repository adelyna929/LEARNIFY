<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Bahasa Malaysia - LEARNIFY</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Poppins, sans-serif;
            background: linear-gradient(135deg, #fdfdfd, #f7f2f2);
            color: #571216;
        }
        .offcanvas-start { background-color: #571216; color: #fff; }
        .offcanvas-header { background-color: #571216; color: #fff; }
        .offcanvas-body .nav-link { color: #fff; font-weight: 500; }
        .offcanvas-body .nav-link:hover { background-color: rgba(255,255,255,0.1); border-radius: 6px; }

        .navbar-custom {
            background-color: #571216;
            border-bottom: 2px solid #fff;
        }
        .navbar-custom .nav-link { color: #fff; font-weight: 500; }
        .navbar-custom .nav-link:hover { background-color: rgba(255,255,255,0.1); border-radius: 6px; }

        .hero {
            position: relative;
            background: url('bahasabg.avif') center/cover no-repeat;
            height: 300px;
            display: flex; flex-direction: column;
            align-items: center; justify-content: center;
            text-align: center; color: #fff;
        }
        .hero::before {
            content: ""; position: absolute; inset: 0;
            background: rgba(87,18,22,0.6);
        }
        .hero h1 {
            position: relative; font-size: 56px; font-weight: 700;
            text-shadow: 2px 2px 6px rgba(0,0,0,0.5); margin: 0;
        }
        .hero p {
            position: relative; font-size: 20px; margin-top: 10px;
            text-shadow: 1px 1px 4px rgba(0,0,0,0.4);
        }
        .dashboard {
            max-width: 1200px; margin: 40px auto;
            display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
        }
        .card {
            background-color: rgba(87,18,22,0.08);
            border-radius: 15px; padding: 25px;
            box-shadow: 0 6px 18px rgba(0,0,0,0.08);
            transition: transform 0.3s ease;
        }
        .card:hover { transform: translateY(-6px); }
        .card h3 { font-weight: 600; margin-bottom: 15px; color: #571216; }
        .card .btn { margin: 5px 0; width: 100%; }
        .results-table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        .results-table th { background-color: #571216; color: #fff; padding: 10px; }
        .results-table td { padding: 10px; text-align: center; }
        .badge { padding: 6px 12px; border-radius: 8px; font-weight: 600; }
        .badge-success { background: #28a745; color: #fff; }
        .badge-warning { background: #ffc107; color: #000; }
        .badge-danger { background: #dc3545; color: #fff; }
        iframe {
            width: 100%; height: 300px; border: none;
            border-radius: 12px; box-shadow: 0 6px 18px rgba(0,0,0,0.1);
        }
        footer {
            background-color: #571216; color: #fff;
            text-align: center; padding: 20px;
            margin-top: 50px; border-radius: 20px 20px 0 0;
        }
        .profile-pic {
            width: 40px; height: 40px; border-radius: 50%;
            object-fit: cover; border: 2px solid #fff;
        }
        .bell-icon {
            font-size: 22px; color: #fff; cursor: pointer;
        }
    </style>
</head>
<body>

<!-- Top Navbar -->
<nav class="navbar navbar-expand-lg navbar-custom">
  <div class="container-fluid d-flex justify-content-between align-items-center">
    <!-- Left: Menu + Profile -->
    <div class="d-flex align-items-center">
      <button class="btn text-white me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu">
        ☰
      </button>
      <a href="home.php">
        <img src="dina.jpg" alt="Profile" class="profile-pic">
      </a>
    </div>

    <!-- Center: Subjects dropdown -->
    <div class="dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Subjects
        </a>
        <ul class="dropdown-menu text-center">
            <li><a class="dropdown-item" href="english.php">English</a></li>
            <li><a class="dropdown-item" href="bahasa.php">Bahasa Malaysia</a></li>
            <li><a class="dropdown-item" href="science.php">Science</a></li>
            <li><a class="dropdown-item" href="sejarah.php">Sejarah</a></li>
            <li><a class="dropdown-item" href="addmath.php">Additional Mathematics</a></li>
            <li><a class="dropdown-item" href="geography.php">Geography</a></li>
            <li><a class="dropdown-item" href="pendidikan_islam.php">Pendidikan Islam</a></li>
            <li><a class="dropdown-item" href="economy.php">Economy</a></li>
        </ul>
        </div>

    <!-- Right: Bell notification -->
    <div>
      <span class="bell-icon">🔔</span>
    </div>
  </div>
</nav>

<!-- Sidebar Navigation -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="sidebarMenu">
  <div class="offcanvas-header">
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
    <ul class="nav flex-column">
      <li><a class="nav-link" href="home.php">Home</a></li>
      <li><a class="nav-link" href="class_members.php">Class</a></li>
      <li><a class="nav-link" href="timetable.php">Time Table</a></li>
      <li><a class="nav-link" href="evaluation.php">Evaluation</a></li>
      <li><a class="nav-link text-danger" href="logout.php">Logout</a></li>
    </ul>
  </div>
</div>

<!-- Hero Banner -->
<div class="hero">
  <h1>Bahasa Malaysia</h1>
  <p>“Memperkasa bahasa kebangsaan dan budaya.”</p>
</div>
<!-- Dashboard Grid -->
<div class="dashboard">
  <div class="card">
    <h3>Nota</h3>
    <p>Bab buku teks untuk ulangkaji:</p>
    <a href="#" class="btn btn-outline-danger">Bab 1</a>
    <a href="#" class="btn btn-outline-danger">Bab 2</a>
    <a href="#" class="btn btn-outline-danger">Bab 3</a>
    <a href="#" class="btn btn-outline-danger">Bab 4</a>
  </div>

  <div class="card">
    <h3>Tutorial</h3>
    <p>Pilih topik untuk berlatih:</p>
    <a href="#" class="btn btn-outline-danger">Tatabahasa</a>
    <a href="#" class="btn btn-outline-danger">Karangan</a>
    <a href="#" class="btn btn-outline-danger">Pemahaman</a>
    <a href="#" class="btn btn-outline-danger">Puisi</a>
  </div>

  <div class="card">
    <h3>Kuiz Interaktif</h3>
    <p>Kuiz interaktif powered by Quizizz:</p>
    <iframe src="https://quizizz.com/embed/quiz/987654321" allowfullscreen></iframe>
    <div class="text-center mt-2">
      <a href="https://quizizz.com/quiz/987654321" target="_blank" class="btn btn-danger">Buka di Quizizz</a>
    </div>
  </div>

  <div class="card">
    <h3>Zon Seronok</h3>
    <p>Teka-teki mingguan, meme & shoutout rakan sekelas:</p>
    <a href="#" class="btn btn-outline-danger">Lihat Pilihan Minggu Ini</a>
  </div>

  <div class="card">
    <h3>Latihan</h3>
    <p>Pautan latihan minggu ini:</p>
    <a href="#" class="btn btn-outline-danger">Latihan 1</a>
    <a href="#" class="btn btn-outline-danger">Latihan 2</a>
    <a href="#" class="btn btn-outline-danger">Latihan 3</a>
  </div>

  <div class="card">
    <h3>Pengumuman</h3>
    <p>📌 Tarikh akhir penghantaran karangan: 10 Feb 2026</p>
    <p>📌 Ujian lisan minggu depan — pilih tajuk anda!</p>
  </div>
   <div class="card">
    <h3>Keputusan Peperiksaan Lepas 2025</h3>
    <table class="results-table">
      <tr>
        <th>Peperiksaan</th>
        <th>Markah</th>
        <th>Gred</th>
      </tr>
      <tr>
        <td>Peperiksaan Akhir Tahun</td>
        <td>88%</td>
        <td><span class="badge badge-success">A</span></td>
      </tr>
    </table>
  </div>

  <!-- Online Tuition -->
  <div class="card">
    <h3>Tuisyen Dalam Talian</h3>
    <p>Sertai kelas melalui Google Meet:</p>
    <a href="https://meet.google.com" target="_blank" class="btn btn-outline-danger">Sertai Google Meet</a>
    <p class="mt-2">Jadual kelas akan dikemaskini oleh guru anda.</p>
  </div>
</div> <!-- end dashboard -->

<!-- Footer -->
<footer>
  © 2026 SMK Lembah Keramat Kuala Lumpur — LEARNIFY
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 