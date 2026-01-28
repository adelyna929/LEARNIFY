<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Timetable - LEARNIFY</title>
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
    .container-timetable {
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

    /* Timetable table */
    .timetable {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }
    .timetable th, .timetable td {
      border: 2px solid #571216;
      padding: 12px;
      text-align: center;
    }
    .timetable th {
      background-color: #571216;
      color: #fff;
    }
    .timetable td {
      background-color: #f9f9f9;
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
      <span style="color:#fff;font-size:20px;">📅</span>
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
      <li><a class="nav-link" href="class_members.php">Class Members</a></li>
      <li><a class="nav-link" href="timetable.php">Timetable</a></li>
      <li><a class="nav-link" href="evaluation.php">Evaluation</a></li>
      <li><a class="nav-link text-danger" href="logout.php">Logout</a></li>
    </ul>
  </div>
</div>

<!-- Timetable Container -->
<div class="container-timetable">
  <div class="section-title">Class Timetable</div>

  <!-- Timetable Table -->
  <table class="timetable">
    <thead>
      <tr>
        <th>Day</th>
        <th>8:00 - 9:00</th>
        <th>9:00 - 10:00</th>
        <th>10:00 - 11:00</th>
        <th>11:00 - 12:00</th>
        <th>12:00 - 1:00</th>
        <th>2:00 - 3:00</th>
        <th>3:00 - 4:00</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Monday</td>
        <td>Mathematics</td>
        <td>English</td>
        <td>Science</td>
        <td>History</td>
        <td>Break</td>
        <td>Geography</td>
        <td>Physical Education</td>
      </tr>
      <tr>
        <td>Tuesday</td>
        <td>Science</td>
        <td>Mathematics</td>
        <td>English</td>
        <td>History</td>
        <td>Break</td>
        <td>Geography</td>
        <td>Physical Education</td>
      </tr>
      <tr>
        <td>Wednesday</td>
        <td>Mathematics</td>
        <td>Science</td>
        <td>English</td>
        <td>Islamic Studies</td>
        <td>Break</td>
        <td>History</td>
        <td>Class Activity</td>
      </tr>
      <tr>
        <td>Thursday</td>
        <td>Science</td>
        <td>Mathematics</td>
        <td>English</td>
        <td>Geography</td>
        <td>Break</td>
        <td>History</td>
        <td>Physical Education</td>
      </tr>
      <tr>
        <td>Friday</td>
        <td>Mathematics</td>
        <td>English</td>
        <td>Islamic Studies</td>
        <td>Science</td>
        <td>Break</td>
        <td>Geography</td>
        <td>Class Activity</td>
      </tr>
    </tbody>
  </table>
</div>

<!-- Footer -->
<footer>
  © 2026 SMK Lembah Keramat Kuala Lumpur — LEARNIFY
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>