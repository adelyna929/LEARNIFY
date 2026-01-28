<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Class Members - LEARNIFY</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    body {
      font-family: Poppins, sans-serif;
      background-color: #ffffff;
      color: #571216;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    /* Navbar */
    .navbar-custom {
      background-color: #571216;
      border-bottom: 2px solid #fff;
    }
    .navbar-custom .nav-link {
      color: #fff;
      font-weight: 500;
    }
    .navbar-custom .nav-link:hover {
      background-color: rgba(255,255,255,0.2);
      border-radius: 6px;
    }

    /* Sidebar */
    .offcanvas-start {
      background-color: #571216;
      color: #fff;
    }
    .offcanvas-body .nav-link {
      color: #fff;
      font-weight: 500;
    }
    .offcanvas-body .nav-link:hover {
      background-color: rgba(255,255,255,0.1);
      border-radius: 6px;
    }

    /* Page layout */
    .container-class {
      width: 100%;
      padding: 40px 60px;
      flex: 1;
    }

    .section-title {
      font-size: 28px;
      font-weight: 600;
      margin-bottom: 30px;
      border-bottom: 2px solid #571216;
      padding-bottom: 10px;
      text-align: center;
    }

    /* Teacher photo */
    .teacher-photo {
      text-align: center;
      margin-bottom: 40px;
    }
    /* Teacher card styled like student */
    .teacher-card {
      background-color: #f9f9f9;
      border: 2px solid #571216;
      border-radius: 8px;
      text-align: center;
      padding: 20px;
      width: 180px; /* same size as student */
      margin: 0 auto 40px auto; /* center above grid */
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      position: relative;
      overflow: hidden;
    }
    .teacher-card:hover {
      transform: scale(1.05);
      box-shadow: 0 6px 16px rgba(0,0,0,0.15);
    }
    .teacher-card img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      border: 2px solid #571216;
      margin-bottom: 10px;
      object-fit: cover;
    }
    .teacher-card h5 {
      margin: 0;
      font-size: 16px;
      font-weight: 600;
      color: #571216;
    }
    /* Hover description for teacher */
    .teacher-fact {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      background: rgba(87, 18, 22, 0.9);
      color: #fff;
      font-size: 13px;
      padding: 8px;
      transform: translateY(100%);
      transition: transform 0.3s ease;
    }
    .teacher-card:hover .teacher-fact {
      transform: translateY(0);
    }

    /* Student grid */
    .student-grid {
      display: grid;
      grid-template-columns: repeat(5, 1fr);
      gap: 20px;
    }
    .student-card {
      background-color: #f9f9f9;
      border: 2px solid #571216;
      border-radius: 8px;
      text-align: center;
      padding: 20px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      position: relative;
      overflow: hidden;
    }
    .student-card:hover {
      transform: scale(1.05);
      box-shadow: 0 6px 16px rgba(0,0,0,0.15);
    }
    .student-card img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      border: 2px solid #571216;
      margin-bottom: 10px;
      object-fit: cover;
    }
    .student-card h5 {
      margin: 0;
      font-size: 16px;
      font-weight: 500;
      color: #571216;
    }

    /* Fun fact overlay */
    .student-fact {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      background: rgba(87, 18, 22, 0.9);
      color: #fff;
      font-size: 13px;
      padding: 8px;
      transform: translateY(100%);
      transition: transform 0.3s ease;
    }
    .student-card:hover .student-fact {
      transform: translateY(0);
    }

    /* Responsive adjustments */
    @media (max-width: 1200px) {
      .student-grid { grid-template-columns: repeat(4, 1fr); }
    }
    @media (max-width: 992px) {
      .student-grid { grid-template-columns: repeat(3, 1fr); }
    }
    @media (max-width: 768px) {
      .student-grid { grid-template-columns: repeat(2, 1fr); }
    }
    @media (max-width: 576px) {
      .student-grid { grid-template-columns: 1fr; }
    }

    /* Footer */
    footer {
      background-color: #571216;
      color: #fff;
      text-align: center;
      padding: 20px;
      font-size: 14px;
      margin-top: auto;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-custom">
  <div class="container-fluid d-flex justify-content-between align-items-center">
    <div class="d-flex align-items-center">
      <button class="btn text-white me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu">☰</button>
      <a href="home.php">
        <img src="dina.jpg" alt="Profile" style="width:40px;height:40px;border-radius:50%;border:2px solid #fff;">
      </a>
    </div>
    <div>
      <span style="color:#fff;font-size:20px;">🔔</span>
    </div>
  </div>
</nav>

<!-- Sidebar -->
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

<!-- Class Members Container -->
<div class="container-class">
  <div class="section-title">5 Amanah</div>

  <!-- Teacher Card -->
  <div class="teacher-card">
    <img src="zarul.jpg" alt="Teacher's Photo">
    <h5>Sir Zarul</h5>
    <div class="teacher-fact">Dedicated to inspiring students every day</div>
  </div>
    <!-- Student Grid -->
  <div class="student-grid">
    <div class="student-card">
      <img src="dina.jpg" alt="Raz Adelyna Dalilah">
      <h5>Raz Adelyna Dalilah</h5>
      <div class="student-fact">Excellent in English</div>
    </div>

    <div class="student-card">
      <img src="alia.jpg" alt="Che Rosmalina Alia">
      <h5>Che Rosmalina Alia</h5>
      <div class="student-fact">Enjoys painting landscapes</div>
    </div>

    <div class="student-card">
      <img src="munapassport.jpg" alt="Amna Wajihah">
      <h5>Amna Wajihah</h5>
      <div class="student-fact">Captain of the debate team</div>
    </div>

    <div class="student-card">
      <img src="qur.jpg" alt="Qurratu Aini">
      <h5>Qurratu Aini</h5>
      <div class="student-fact">Always brings positive energy</div>
    </div>

    <div class="student-card">
      <img src="nik.jpg" alt="Nik Ijtihadi Baihaqi">
      <h5>Nik Ijtihadi Baihaqi</h5>
      <div class="student-fact">Tech enthusiast and coder</div>
    </div>

    <div class="student-card">
      <img src="weeda.jpg" alt="Waheeda Sakinah">
      <h5>Waheeda Sakinah</h5>
      <div class="student-fact">Loves reading mystery novels</div>
    </div>

    <div class="student-card">
      <img src="zizi.jpg" alt="Hazierah Nazir">
      <h5>Hazierah Nazir</h5>
      <div class="student-fact">Talented in music and singing</div>
    </div>

    <div class="student-card">
      <img src="ain.jpg" alt="Nurain Batrisyia">
      <h5>Nurain Batrisyia</h5>
      <div class="student-fact">Excellent at sports</div>
    </div>

    <div class="student-card">
      <img src="hakim.jpg" alt="Muhammad Hakim">
      <h5>Muhammad Hakim</h5>
      <div class="student-fact">Enjoys science experiments</div>
    </div>

    <div class="student-card">
      <img src="maisarah.jpg" alt="Ali Imran">
      <h5>Nur Maisarah</h5>
      <div class="student-fact">Great team player</div>
    </div>

    <div class="student-card">
      <img src="mia.jpg" alt="Nura Damia">
      <h5>Nura Damia</h5>
      <div class="student-fact">Creative in art projects</div>
    </div>

    <div class="student-card">
      <img src="eya.jpg" alt="Nur Alieya Shazreen">
      <h5>Nur Alieya Shazreen</h5>
      <div class="student-fact">Passionate about writing stories</div>
    </div>

    <div class="student-card">
      <img src="mishya.jpeg" alt="Amishya Amieyra">
      <h5>Amishya Amieyra</h5>
      <div class="student-fact">Always helps classmates</div>
    </div>

    <div class="student-card">
      <img src="amal.jpeg" alt="Siti Amalina">
      <h5>Siti Amalina</h5>
      <div class="student-fact">Loves volunteering</div>
    </div>

    <div class="student-card">
      <img src="Amirul.jpeg" alt="Amirul Aiman">
      <h5>Amirul Aiman</h5>
      <div class="student-fact">Excellent in mathematics</div>
    </div>
  </div>
  
</div> <!-- end container-class -->

<!-- Footer -->
<footer>
  © 2026 SMK Lembah Keramat Kuala Lumpur — LEARNIFY
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>