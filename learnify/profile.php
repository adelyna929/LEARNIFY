<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Profile - LEARNIFY</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    body {
      background-color: #ffffff;
      font-family: Poppins, sans-serif;
      color: #571216;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }
    main { flex: 1; }

    /* Navbar */
    .navbar-custom {
      background-color: #571216;
      border-bottom: 2px solid #fff;
    }
    .navbar-custom .nav-link { color: #fff; font-weight: 500; }
    .navbar-custom .nav-link:hover { background-color: rgba(255,255,255,0.2); border-radius: 6px; }
    .offcanvas-start { background-color: #571216; color: #fff; }

    /* Section Title */
    .section-title {
      font-size: 28px;
      font-weight: 600;
      margin: 30px auto 20px auto;
      text-align: center;
      position: relative;
    }
    .section-title::after {
      content: "";
      display: block;
      width: 100%;
      height: 2px;
      background-color: #571216;
      margin-top: 10px;
    }

    /* Profile Layout */
    .profile-wrapper {
      max-width: 1000px;
      margin: 20px auto 60px auto;
      display: grid;
      grid-template-columns: 300px 1fr;
      gap: 30px;
      align-items: start;
    }
    .profile-photo {
      text-align: center;
    }
    .profile-photo img {
      width: 200px; height: 200px;
      border-radius: 50%;
      object-fit: cover;
      border: 4px solid #571216;
      margin-bottom: 10px;
    }
    .edit-link {
      font-size: 14px;
      color: #571216;
      text-decoration: underline;
    }
    .edit-link:hover {
      color: #8c1c24;
    }

    .profile-details {
      background: rgba(87,18,22,0.05);
      border-radius: 16px;
      padding: 25px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
    .profile-details h2 {
      margin-bottom: 10px;
      font-weight: bold;
    }
    .info-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 15px;
      margin-top: 20px;
    }
    .info-card {
      background: #fff;
      border: 2px solid #571216;
      border-radius: 10px;
      padding: 15px;
    }
    .info-card h5 {
      font-weight: 600;
      margin-bottom: 10px;
      color: #571216;
    }

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
      <a href="home.php"><img src="dina.jpg" alt="Profile" style="width:40px;height:40px;border-radius:50%;"></a>
    </div>
    <div><span style="color:#fff;font-size:20px;">🔔</span></div>
  </div>
</nav>

<!-- Sidebar -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="sidebarMenu">
  <div class="offcanvas-header"><button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button></div>
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

<!-- Profile Content -->
<main>
  <div class="section-title">Student Profile</div>
  <div class="profile-wrapper">
    <!-- Photo + Edit -->
    <div class="profile-photo">
      <img src="dina.jpg" alt="Profile Photo">
      <br>
      <a href="edit_profile.php" class="edit-link">Edit Profile</a>
    </div>

    <!-- Details -->
    <div class="profile-details">
      <h2>Raz Adelyna Dalilah</h2>
      <p class="text-muted">Form 5 Student</p>

      <div class="info-grid">
        <div class="info-card">
          <h5>Contact</h5>
          <p>Email: raz.adelyna@example.com</p>
          <p>Phone: +60 123-456789</p>
        </div>
        <div class="info-card">
          <h5>Bio</h5>
          <p>Raz is a dedicated student who enjoys science experiments and debate competitions.</p>
        </div>
        <div class="info-card">
          <h5>Subjects & Grades</h5>
          <p>English — A</p>
          <p>Science — B+</p>
          <p>Sejarah — A-</p>
        </div>
        <div class="info-card">
          <h5>Achievements</h5>
          <p>Winner of Debate Competition</p>
          <p>Gold Medal in Science Olympiad</p>
          <p>Member of School Football Team</p>
        </div>
      </div>
    </div>
  </div>
</main>

<!-- Footer -->
<footer>
  © 2026 SMK Lembah Keramat Kuala Lumpur — LEARNIFY
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>