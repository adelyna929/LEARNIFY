<?php
session_start();
include("db.php");

// For now we hardcode class_id = 1 (English Class 5A)
$class_id = 1;
?>

<!DOCTYPE html>
<html>
<head>
    <title>English Class 5A - Teacher</title>
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
            background: url('englishbg.jpg') center/cover no-repeat;
            height: 250px;
            display: flex; flex-direction: column;
            align-items: center; justify-content: center;
            text-align: center; color: #fff;
        }
        .hero::before {
            content: ""; position: absolute; inset: 0;
            background: rgba(87,18,22,0.6);
        }
        .hero h1 {
            position: relative; font-size: 48px; font-weight: 700;
            text-shadow: 2px 2px 6px rgba(0,0,0,0.5); margin: 0;
        }
        .dashboard {
            max-width: 1200px; margin: 40px auto;
            display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
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
        .btn-primary { background-color: #571216; border-color: #571216; }
        .btn-primary:hover { background-color: #6e1a1a; border-color: #6e1a1a; }
        footer {
            background-color: #571216; color: #fff;
            text-align: center; padding: 20px;
            margin-top: 50px;
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
    <div></div>
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

<!-- Hero Banner -->
<div class="hero">
  <h1>English Class 5A</h1>
</div>

<!-- Dashboard Grid -->
<div class="dashboard">

  <!-- Notes Upload -->
  <div class="card">
    <h3>Upload Notes</h3>
    <form action="upload_material.php" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="class_id" value="<?php echo $class_id; ?>">
      <input type="hidden" name="type" value="note">
      <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" name="title" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">File</label>
        <input type="file" name="file" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-primary">Upload</button>
    </form>
  </div>

  <!-- Tutorials Upload -->
  <div class="card">
    <h3>Upload Tutorials</h3>
    <form action="upload_material.php" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="class_id" value="<?php echo $class_id; ?>">
      <input type="hidden" name="type" value="tutorial">
      <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" name="title" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">File</label>
        <input type="file" name="file" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-primary">Upload</button>
    </form>
  </div>

  <!-- Exercises Upload -->
  <div class="card">
    <h3>Upload Exercises</h3>
    <form action="upload_material.php" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="class_id" value="<?php echo $class_id; ?>">
      <input type="hidden" name="type" value="exercise">
      <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" name="title" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">File</label>
        <input type="file" name="file" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-primary">Upload</button>
    </form>
  </div>

  <!-- Fun Zone Upload -->
  <div class="card">
    <h3>Upload Fun Zone Content</h3>
    <form action="upload_material.php" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="class_id" value="<?php echo $class_id; ?>">
      <!-- FIXED: use 'fun' instead of 'funzone' -->
      <input type="hidden" name="type" value="fun">
      <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" name="title" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">File</label>
        <input type="file" name="file" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-primary">Upload</button>
    </form>
  </div>

  <!-- Announcements Upload -->
  <div class="card">
    <h3>Post Announcements</h3>
    <form action="upload_announcement.php" method="POST">
      <input type="hidden" name="class_id" value="<?php echo $class_id; ?>">
      <div class="mb-3">
        <label class="form-label">Announcement</label>
        <textarea name="content" class="form-control" rows="3" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Post</button>
    </form>
  </div>

  <!-- Online Tuition Upload -->
  <div class="card">
    <h3>Set Online Tuition Link</h3>
    <form action="upload_material.php" method="POST">
      <input type="hidden" name="class_id" value="<?php echo $class_id; ?>">
      <input type="hidden" name="type" value="tuition">
      <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" name="title" class="form-control" placeholder="Google Meet Session" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Link</label>
        <input type="url" name="file" class="form-control" placeholder="https://meet.google.com/..." required>
      </div>
      <button type="submit" class="btn btn-primary">Save Link</button>
    </form>
  </div>

  <!-- Quizziz Upload -->
  <div class="card">
    <h3>Set Quizziz Link</h3>
    <form action="upload_material.php" method="POST">
      <input type="hidden" name="class_id" value="<?php echo $class_id; ?>">
      <input type="hidden" name="type" value="quiz">
      <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" name="title" class="form-control" placeholder="Quiz Title" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Quizziz Link</label>
        <input type="url" name="file" class="form-control" placeholder="https://quizizz.com/..." required>
      </div>
      <button type="submit" class="btn btn-primary">Save Quiz</button>
    </form>
  </div>

</div> <!-- end dashboard -->

<!-- Footer -->
<footer>
  © 2026 SMK Lembah Keramat Kuala Lumpur — LEARNIFY Teacher Panel
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>