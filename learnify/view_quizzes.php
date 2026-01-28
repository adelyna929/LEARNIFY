<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Quizzes - LEARNIFY</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body{background-image:url('background.jpg');background-size:cover;background-attachment:fixed;font-family:Poppins,sans-serif;color:#800020;}
        .navbar-custom{background-color:#800020;}
        .navbar-custom .btn,.navbar-custom .dropdown-toggle{color:#FFFDD0;}
        .offcanvas{background-color:#800020;color:#FFFDD0;}
        .offcanvas a{color:#FFFDD0;font-weight:600;text-decoration:none;}
        .offcanvas a:hover{background-color:#a83246;color:#fff;border-radius:5px;padding-left:5px;}
        .bubble-bg{position:fixed;top:0;left:0;width:100%;height:100%;z-index:-1;background:url('bubble.gif') repeat;opacity:0.2;}
        .quiz-box{background-color:#FFFDD0;border-radius:15px;padding:20px;max-width:700px;margin:auto;box-shadow:0 0 10px rgba(0,0,0,0.2);}
    </style>
</head>
<body>
<div class="bubble-bg"></div>

<!-- Top bar -->
<nav class="navbar navbar-expand-lg navbar-custom">
  <div class="container-fluid">
    <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu">☰ Menu</button>
    <div class="dropdown me-3">
      <button class="btn dropdown-toggle" data-bs-toggle="dropdown">My Classes</button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">IML513</a></li>
        <li><a class="dropdown-item" href="#">LCC501</a></li>
        <li><a class="dropdown-item" href="#">CTU554</a></li>
      </ul>
    </div>
    <button class="btn position-relative">🔔<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">3</span></button>
  </div>
</nav>

<!-- Sidebar -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="sidebarMenu">
  <div class="offcanvas-header"><h5 class="offcanvas-title">Navigation</h5><button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button></div>
  <div class="offcanvas-body">
    <ul class="nav flex-column">
      <li><a class="nav-link" href="home.php">Home</a></li>
      <li><a class="nav-link" href="submit_task.php">Submit Task</a></li>
      <li><a class="nav-link" href="view_quizzes.php">View Quizzes</a></li>
      <li><a class="nav-link" href="book_consultation.php">Book Consultation</a></li>
      <li><a class="nav-link" href="view_schedule.php">View Schedule</a></li>
      <li><a class="nav-link" href="evaluation.php">Evaluation</a></li>
      <li><a class="nav-link" href="class_members.php">Class Members</a></li>
      <li><a class="nav-link" href="settings.php">Settings</a></li>
      <li><a class="nav-link text-danger" href="logout.php">Logout</a></li>
    </ul>
  </div>
</div>

<!-- Main content -->
<main class="container mt-5">
  <h2 class="text-center">Quizzes</h2>
  <div class="quiz-box mt-3">
    <p><strong>Quiz 1:</strong> Instructional Material Design</p>
    <button class="btn btn-danger mb-3">Start Quiz</button>
    <hr>
    <p><strong>Quiz 2:</strong> English for Professional Correspondence</p>
    <button class="btn btn-danger mb-3">Start Quiz</button>
    <hr>
    <p><strong>Quiz 3:</strong> Educational Technology Basics</p>
    <button class="btn btn-danger mb-3">Start Quiz</button>
  </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>