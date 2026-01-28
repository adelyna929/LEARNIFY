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
  <title>LEARNIFY Teacher Home</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: url('backgroundsmklk.jpg') center center fixed; /* check file path */
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
    .profile-pic {
      width:120px; height:120px; object-fit:cover; border:3px solid #571216; cursor:pointer;
      transition: transform 0.3s ease;
    }
    .profile-pic:hover {
      transform: scale(1.08);
    }
    .welcome-text {
      font-size: 2rem;
      font-weight: 600;
      margin-top: 10px;
    }
    .tab-row {
      display: flex;
      justify-content: center;
      gap: 60px;
      margin-top: 40px;
      border-bottom: 2px solid rgba(87,18,22,0.3); /* low transparency underline line */
      padding-bottom: 10px;
    }
    .tab-item {
      font-weight: 500;
      color: #571216;
      cursor: pointer;
      padding: 5px 10px;
    }
    .tab-item.active {
      font-weight: 700;
      border-bottom: 3px solid #571216; /* bold underline when active */
    }
    .tab-content {
      margin-top: 30px;
    }
    .list-group-item {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 8px 15px; /* tighter spacing */
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
    <div class="ms-auto">
      <span class="text-white fs-4">🔔</span>
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

  <!-- Welcome Section -->
  <div class="text-center mb-4">
    <a href="teacher_profile.php">
      <img src="zarul.jpg" alt="Profile Picture" class="rounded-circle mb-3 profile-pic">
    </a>
    <div class="welcome-text">Welcome Sir Zarul</div>
  </div>

  <!-- Centered Tab-style layout -->
  <div class="tab-row justify-content-center">
    <div class="tab-item active" onclick="showTab('announcements')">Announcements</div>
    <div class="tab-item" onclick="showTab('classes')">My Classes</div>
  </div>

  <div class="tab-content text-center">
    <!-- Announcements -->
    <div id="announcements" class="tab-section">
      <ul class="list-unstyled mt-3" style="max-width:600px; margin:auto;">
        <?php
          $samples = [
            "Student examination postponed to next Monday.",
            "School holiday is on Tuesday next week.",
            "Please submit your exercise by Friday.",
            "Online tuition link will be updated tomorrow.",
            "Quizizz session starts at 10 AM on Thursday."
          ];
          shuffle($samples);
          foreach (array_slice($samples, 0, 3) as $text) {
            echo "<li style='font-size:1.1rem; text-align:justify;'>📢 $text</li>";
          }
        ?>
      </ul>
    </div>

    <!-- My Classes -->
    <div id="classes" class="tab-section" style="display:none;">
      <div class="mt-5">
        <h3 style="font-size:1.8rem; font-weight:600; color:#571216;">My Classes</h3>
        <ul class="list-group mt-4" style="max-width:600px; margin:auto;">
          <li class="list-group-item d-flex justify-content-between align-items-center">
            5 AMANAH
            <a href="teacher_class_5A.php" style="color:#571216; font-weight:500;">Open Classes</a>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            5 BAIDURI
            <a href="teacher_class_5A.php" style="color:#571216; font-weight:500;">Open Classes</a>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            5 CAHAYA
            <a href="teacher_class_5A.php" style="color:#571216; font-weight:500;">Open Classes</a>
          </li>
        </ul>
      </div>
    </div>
  </div>

</div>

<!-- Tab Switch Script -->
<script>
  function showTab(tabId) {
    document.querySelectorAll('.tab-section').forEach(el => el.style.display = 'none');
    document.querySelectorAll('.tab-item').forEach(el => {
      el.classList.remove('active');
      el.style.fontWeight = 'normal';
    });
    document.getElementById(tabId).style.display = 'block';
    const activeTab = document.querySelector(`.tab-item[onclick="showTab('${tabId}')"]`);
    activeTab.classList.add('active');
    activeTab.style.fontWeight = 'bold'; // Bold active tab
  }
</script>

<!-- Footer -->
<footer class="text-center py-3" style="background-color:#571216; color:#fff; margin-top:auto;">
  © 2026 SMK Lembah Keramat Kuala Lumpur — LEARNIFY Teacher Dashboard
</footer>

<!-- Bootstrap JS Bundle (needed for sidebar/offcanvas + tab switching to work) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>