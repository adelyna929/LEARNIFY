<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit Profile - LEARNIFY</title>
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

    .navbar-custom {
      background-color: #571216;
      border-bottom: 2px solid #fff;
    }
    .navbar-custom .nav-link { color: #fff; font-weight: 500; }
    .navbar-custom .nav-link:hover { background-color: rgba(255,255,255,0.2); border-radius: 6px; }
    .offcanvas-start { background-color: #571216; color: #fff; }

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

    .form-wrapper {
      max-width: 600px;
      margin: 20px auto 60px auto;
      background: rgba(87,18,22,0.05);
      border-radius: 16px;
      padding: 25px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
    .form-label {
      font-weight: 600;
      color: #571216;
    }
    .btn-custom {
      background-color: #571216;
      color: #fff;
      font-weight: 500;
    }
    .btn-custom:hover {
      background-color: #8c1c24;
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

<nav class="navbar navbar-expand-lg navbar-custom">
  <div class="container-fluid d-flex justify-content-between align-items-center">
    <div class="d-flex align-items-center">
      <button class="btn text-white me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu">☰</button>
      <a href="home.php"><img src="dina.jpg" alt="Profile" style="width:40px;height:40px;border-radius:50%;"></a>
    </div>
    <div><span style="color:#fff;font-size:20px;">🔔</span></div>
  </div>
</nav>

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

<main>
  <div class="section-title">Edit Profile</div>
  <div class="form-wrapper">
    <form action="update_profile.php" method="post" enctype="multipart/form-data">
      <div class="mb-3">
        <label class="form-label">Full Name</label>
        <input type="text" class="form-control" name="fullname" value="Test students">
      </div>
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" name="email" value="student@test.com">
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Enter new password">
      </div>
      <div class="mb-3">
        <label class="form-label">Profile Photo</label>
        <input type="file" class="form-control" name="photo">
      </div>
      <button type="submit" class="btn btn-custom">Save Changes</button>
    </form>
  </div>
</main>

<footer>
  © 2026 SMK Lembah Keramat Kuala Lumpur — LEARNIFY
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>