<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Geography - LEARNIFY</title>
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
            background: url('geographybg.jpg') center/cover no-repeat;
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
  <h1>Geography</h1>
  <p>“Understanding our world through maps and landscapes.”</p>
</div>
<!-- Dashboard Grid -->
<div class="dashboard">
  <div class="card">
    <h3>Notes</h3>
    <p>Textbook chapters for revision:</p>
    <a href="#" class="btn btn-outline-danger">Chapter 1</a>
    <a href="#" class="btn btn-outline-danger">Chapter 2</a>
    <a href="#" class="btn btn-outline-danger">Chapter 3</a>
    <a href="#" class="btn btn-outline-danger">Chapter 4</a>
  </div>

  <div class="card">
    <h3>Tutorials</h3>
    <p>Choose a topic to practice:</p>
    <a href="#" class="btn btn-outline-danger">Physical Geography</a>
    <a href="#" class="btn btn-outline-danger">Human Geography</a>
    <a href="#" class="btn btn-outline-danger">Environmental Studies</a>
    <a href="#" class="btn btn-outline-danger">Map Reading</a>
  </div>

  <div class="card">
    <h3>Quizziz</h3>
    <p>Interactive quiz powered by Quizziz:</p>
    <iframe src="https://quizizz.com/embed/quiz/11223344" allowfullscreen></iframe>
    <div class="text-center mt-2">
      <a href="https://quizizz.com/quiz/11223344" target="_blank" class="btn btn-danger">Open in Quizziz</a>
    </div>
  </div>

  <div class="card">
    <h3>Fun Zone</h3>
    <p>Weekly riddles, memes & shoutouts from your classmates:</p>
    <a href="#" class="btn btn-outline-danger">View This Week’s Picks</a>
  </div>

  <div class="card">
    <h3>Exercises</h3>
    <p>Practice links for this week:</p>
    <a href="#" class="btn btn-outline-danger">Exercise 1</a>
    <a href="#" class="btn btn-outline-danger">Exercise 2</a>
    <a href="#" class="btn btn-outline-danger">Exercise 3</a>
  </div>

  <div class="card">
    <h3>Announcements</h3>
    <p>📌 Fieldwork report submission deadline: 20 Feb 2026</p>
    <p>📌 Map skills test next week — prepare your tools!</p>
  </div>
    <div class="card">
    <h3>Past Examination Results 2025</h3>
    <table class="results-table">
      <tr>
        <th>Exam</th>
        <th>Score</th>
        <th>Grade</th>
      </tr>
      <tr>
        <td>First Year Exam</td>
        <td>72%</td>
        <td><span class="badge badge-warning">B</span></td>
      </tr>
      <tr>
        <td>Mid Year Exam</td>
        <td>80%</td>
        <td><span class="badge badge-success">A-</span></td>
      </tr>
      <tr>
        <td>Final Year Exam</td>
        <td>87%</td>
        <td><span class="badge badge-success">A</span></td>
      </tr>
    </table>
  </div>

  <!-- Online Consultation -->
  <div class="card">
    <h3>Online Consultation</h3>
    <p>Join consultation via Google Meet:</p>
    <a href="https://meet.google.com" target="_blank" class="btn btn-outline-danger">Join Google Meet</a>
    <p class="mt-2">Consultation schedule will be updated by your teacher soon.</p>
  </div>
</div> <!-- end dashboard -->

<!-- Footer -->
<footer>
  © 2026 SMK Lembah Keramat Kuala Lumpur — LEARNIFY
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>