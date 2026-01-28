<?php
session_start();
include("db.php");

if ($_SESSION['role'] != 'teacher') {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM users WHERE user_id='$user_id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>LEARNIFY Class Timetable</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: url('background.bg') center center fixed;
      background-size: cover;
      background-color: rgba(255,255,255,0.7);
      background-blend-mode: lighten;
      color: #571216;
      margin: 0;
      padding: 0;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }
    .navbar-custom {
      background-color: #571216;
      border-bottom: 2px solid #fff;
    }
    .navbar-custom .nav-link { color: #fff; font-weight: 500; }
    .navbar-custom .nav-link:hover { background-color: rgba(255,255,255,0.1); border-radius: 6px; }
    .offcanvas-start { background-color: #571216; color: #fff; }
    .offcanvas-header { background-color: #571216; color: #fff; }
    .offcanvas-body .nav-link { color: #fff; font-weight: 500; }
    .offcanvas-body .nav-link:hover { background-color: rgba(255,255,255,0.1); border-radius: 6px; }
    .main-container {
      flex: 1;
      padding: 40px 60px;
    }
    .timetable-title {
      text-align: center;
      font-weight: 700;
      font-size: 2rem;
      margin-bottom: 30px;
      color: #571216;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      background-color: rgba(255,255,255,0.9);
    }
    th, td {
      border: 2px solid #571216;
      padding: 12px;
      text-align: center;
      font-size: 0.95rem;
    }
    th {
        background-color: #571216;   /* your theme color */
        color: #fff;                 /* white text for contrast */
        font-weight: 600;
    }
    td.recess {
      background-color: #f8d7da;
      font-weight: 600;
      color: #571216;
    }
    
    td.curriculum {
      background-color: #d1ecf1;
      font-weight: 600;
      color: #0c5460;
    }
  </style>
</head>
<body>

<!-- Top Navbar -->
<nav class="navbar navbar-expand-lg navbar-custom">
  <div class="container-fluid d-flex justify-content-between align-items-center">
    <div class="d-flex align-items-center">
      <button class="btn text-white me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu">☰</button>
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
      <li><a class="nav-link" href="teacher_dashboard.php">Home</a></li>
      <li><a class="nav-link" href="student_profile.php">Student Profile</a></li>
      <li><a class="nav-link" href="schedule.php">Schedule</a></li>
      <li><a class="nav-link" href="exam_results.php">Examination Results</a></li>
      <li><a class="nav-link" href="logout.php">Logout</a></li>
    </ul>
  </div>
</div>

<!-- Main Content -->
<div class="main-container">
  <div class="timetable-title">Class Timetable</div>

  <table class="table table-bordered">
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
        <td>-</td>
        <td>-</td>
        <td>5 Amanah</td>
        <td>-</td>
        <td class="recess">Recess</td>
        <td>5 Baiduri</td>
        <td>-</td>
      </tr>
      <tr>
        <td>Tuesday</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>5 Cahaya</td>
        <td class="recess">Recess</td>
        <td>-</td>
        <td>-</td>
      </tr>
      <tr>
        <td>Wednesday</td>
        <td>-</td>
        <td>5 Amanah</td>
        <td>-</td>
        <td>-</td>
        <td class="recess">Recess</td>
        <td>-</td>
        <td class="curriculum">Curriculum Activity</td>
      </tr>
      <tr>
        <td>Thursday</td>
        <td>-</td>
        <td>-</td>
        <td>5 Baiduri</td>
        <td>-</td>
        <td class="recess">Recess</td>
        <td>5 Cahaya</td>
        <td>-</td>
      </tr>
      <tr>
        <td>Friday</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td class="recess">Recess</td>
        <td>-</td>
        <td>-</td>
      </tr>
    </tbody>
  </table>
</div>

<!-- Footer -->
<footer class="text-center py-3" style="background-color:#571216; color:#fff; margin-top:auto;">
  © 2026 SMK Lembah Keramat Kuala Lumpur — LEARNIFY Class Timetable
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>