<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Submit Task - LEARNIFY</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #FFFDF4; /* page background */
            font-family: Poppins, sans-serif;
            color: #800020;
        }
        .navbar-custom { background-color: #800020; }
        .navbar-custom .btn, .navbar-custom .dropdown-toggle { color: #FFFDD0; }
        .offcanvas { background-color: #800020; color: #FFFDD0; }
        .offcanvas a { color: #FFFDD0; font-weight: 600; text-decoration: none; }
        .offcanvas a:hover { background-color: #a83246; color: #fff; border-radius: 5px; padding-left: 5px; }
        .bubble-bg { position: fixed; top:0; left:0; width:100%; height:100%; z-index:-1; background:url('bubble.gif') repeat; opacity:0.2; }

        h2 { text-align:center; margin-top:30px; font-weight:700; }
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
      <li><a class="nav-link text-danger" href="logout.php">Logout</a></li>
    </ul>
  </div>
</div>

<!-- Main content -->
<main class="container mt-5">
  <h2>Submit Task</h2>
  <form method="post" enctype="multipart/form-data">
    <table class="table table-bordered align-middle mt-3">
      <thead class="table-danger">
        <tr>
          <th>Subject</th>
          <th>Lecturer</th>
          <th>Type</th>
          <th>Submission (PDF)</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $subjects = [
          "Instructional Material Design",
          "English for Professional Correspondence",
          "Educational Technology Basics",
          "Curriculum Development",
          "Psychology of Learning",
          "Research Methodology",
          "Educational Management",
          "Instructional Media Production"
        ];
        foreach ($subjects as $index => $subject) {
          echo "<tr>
            <td>$subject</td>
            <td>Dr. Siti Noraini</td>
            <td>
              <select class='form-select' name='type$index' required>
                <option value=''>Select</option>
                <option>Assessment</option>
                <option>Assignment</option>
              </select>
            </td>
            <td><input type='file' class='form-control' name='submission$index' accept='.pdf' required></td>
            <td><button class='btn btn-danger' type='submit' name='submit$index'>Submit</button></td>
          </tr>";
        }
        ?>
      </tbody>
    </table>
  </form>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>