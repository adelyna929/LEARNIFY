<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>LEARNIFY Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
           body::before {
            content: "";
            position: fixed;
            top: 0; left: 0;
            filter: brightness(1.0) blur(1px);
            width: 100%; height: 100%;
            background-image: url('backgroundsmklk.jpg'); /* or 'images/bg.jpg' */
            background-size: cover;
            background-position: center;
            opacity: 0.15; /* adjust transparency here */
            z-index: -1;
            background-color: #ffffff;
            font-family: Poppins, sans-serif;
            font-size: 14px;
            color: #571216;
        }

        .navbar-custom {
            background-color: #571216;
            backdrop-filter: blur(6px);
        }
        .navbar-custom .btn, .navbar-custom .dropdown-toggle {
            color: #fff;
        }

        .offcanvas {
            background-color: #571216;
            color: #fff;
        }
        .offcanvas a {
            color: #fff;
            font-weight: 600;
            text-decoration: none;
        }
        .offcanvas a:hover {
            background-color: rgba(255,255,255,0.1);
            border-radius: 5px;
            padding-left: 5px;
        }

        .welcome-section {
            display: flex;
            flex-direction: column;   /* stack vertically */
            align-items: center;      /* center horizontally */
            justify-content: center;  /* center vertically if needed */
            margin: 40px auto;
            text-align: center;

        }
        .welcome-section img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
             margin: 0 auto 20px auto; /* center image with spacing below */
            margin-right: 40px;
            cursor: pointer;
            transition: transform 0.3s ease;
            border: 3px solid #571216;
        }
        .welcome-section img:hover { transform: scale(1.05); }
        .welcome-text {
            font-size: 36px;
            font-weight: 700;
            color: #571216;
            text-align: center;
        }



        .subject-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
            margin-top: 40px;
        }
        .subject-card {
            background-color: #571216;
            border-radius: 12px;
            padding: 50px 20px;
            text-align: center;
            font-size: 20px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            cursor: pointer;
            color: #fff;
        }
        .subject-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 25px rgba(0,0,0,0.2);
        }

        /* Split section with straight divider */
        .split-section {
            display: flex;
            justify-content: space-between;
            gap: 30px;
            max-width: 1100px;
            margin: 60px auto;
            border-top: 2px solid #571216;
            padding-top: 30px;
        }
        .quotes, .announcements {
            flex: 1;
            background: none; /* no box */
            color: #571216;
        }
        .quotes h3, .announcements h3 {
            font-weight: 700;
            margin-bottom: 20px;
            text-align: center;
            color: #571216;
        }
        .announcement-card {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        .announcement-icon {
            font-size: 22px;
            margin-right: 10px;
            color: #571216;
        }
        .announcement-text {
            font-size: 15px;
            font-weight: 500;
            margin: 0;
            color: #571216;
        }

        .quote-banner {
            position: relative;
            height: 60px;
            overflow: hidden;
            text-align: center;
            font-size: 18px;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .quote-banner span {
            position: absolute;
            width: 100%;
            opacity: 0;
            animation: fadeQuotes 12s infinite;
            padding: 0 20px;
        }
        .quote-banner span:nth-child(1) { animation-delay: 0s; }
        .quote-banner span:nth-child(2) { animation-delay: 4s; }
        .quote-banner span:nth-child(3) { animation-delay: 8s; }
        @keyframes fadeQuotes {
            0% { opacity: 0; }
            10% { opacity: 1; }
            30% { opacity: 1; }
            40% { opacity: 0; }
            100% { opacity: 0; }
        }

        footer {
            background-color: #571216;
            color: #fff;
            text-align: center;
            padding: 20px;
            margin-top: 60px;
            font-size: 14px;
        }
    </style>
</head>
<body>

<!-- Top bar -->
 <nav class="navbar navbar-expand-lg navbar-custom">
  <div class="container-fluid">
    <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu">☰ Menu</button>
    <button class="btn position-relative">🔔
      <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">3</span>
    </button>
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
      <li><a class="nav-link" href="timetable.php">Time Table</a></li> <!-- ✅ Added -->
      <li><a class="nav-link" href="evaluation.php">Evaluation</a></li>
      <li><a class="nav-link text-danger" href="logout.php">Logout</a></li>
    </ul>
  </div>
</div>

<!-- Welcome section -->
<div class="welcome-section">
  <a href="profile.php"><img src="dina.jpg" alt="Profile Picture"></a>
  <div class="welcome-text">Welcome Raz Adelyna Dalilah</div>
</div>

<!-- Subjects -->
<main class="container">
  <h2 class="text-center" style="color:#571216;">Subjects</h2>
  <div class="subject-grid">
    <div class="subject-card" onclick="location.href='english.php'">English</div>
    <div class="subject-card" onclick="location.href='bahasa.php'">Bahasa Melayu</div>
    <div class="subject-card" onclick="location.href='science.php'">Science</div>
    <div class="subject-card" onclick="location.href='sejarah.php'">Sejarah</div>
    <div class="subject-card" onclick="location.href='addmath.php'">Add Math</div>
    <div class="subject-card" onclick="location.href='geography.php'">Geography</div>
    <div class="subject-card" onclick="location.href='pendidikan_islam.php'">Pendidikan Islam</div>
    <div class="subject-card" onclick="location.href='economy.php'">Economy</div>
  </div>
</main>

<!-- Split Section -->
<div class="split-section">
  <!-- Motivational Quotes -->
  <div class="quotes">
    <h3>Motivational Quotes</h3>
    <div class="quote-banner">
      <span>"Education is the passport to the future."</span>
      <span>"Learning never exhausts the mind."</span>
      <span>"Success is the sum of small efforts repeated daily."</span>
    </div>
  </div>

  <!-- Announcements -->
  <div class="announcements">
    <h3>Recent Announcements</h3>
    <div class="announcement-card">
      <span class="announcement-icon">📌</span>
      <p class="announcement-text">Add Math Assignment due: 30 Jan 2026</p>
    </div>
    <div class="announcement-card">
      <span class="announcement-icon">📝</span>
      <p class="announcement-text">Science Quiz scheduled: 2 Feb 2026</p>
    </div>
    <div class="announcement-card">
      <span class="announcement-icon">📖</span>
      <p class="announcement-text">Sejarah notes updated: Chapter 4 uploaded</p>
    </div>
    <div class="announcement-card">
      <span class="announcement-icon">📅</span>
      <p class="announcement-text">Consultation slots open with Dr. Siti Noraini</p>
    </div>
  </div>
</div>

<!-- Footer -->
<footer>
  © 2026 SMK Lembah Keramat Kuala Lumpur — LEARNIFY
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>