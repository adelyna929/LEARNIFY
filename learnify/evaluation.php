<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Evaluation - LEARNIFY</title>
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
      min-height: 100vh; /* ensures footer stays at bottom */
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
    .container-eval {
      width: 100%;          /* full width */
      padding: 40px 60px;   /* balanced spacing */
      flex: 1;              /* pushes footer down */
    }

    .section-title {
      font-size: 28px;
      font-weight: 600;
      margin-bottom: 30px;
      border-bottom: 2px solid #571216;
      padding-bottom: 10px;
    }

    /* Tab navigation */
    .eval-tabs {
      display: flex;
      gap: 40px;
      border-bottom: 1px solid #ccc;
      margin-bottom: 30px;
    }
    .eval-tab {
      font-weight: 500;
      padding-bottom: 10px;
      cursor: pointer;
      position: relative;
    }
    .eval-tab.active {
      font-weight: 600;
      border-bottom: 3px solid #571216;
    }

    /* Table */
    .eval-table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }
    .eval-table th {
      background-color: #571216;
      color: #fff;
      padding: 12px;
      text-align: center;
      font-weight: 500;
    }
    .eval-table td {
      padding: 12px;
      border-bottom: 1px solid #ddd;
      text-align: center;
    }

    /* Footer */
    footer {
      background-color: #571216;
      color: #fff;
      text-align: center;
      padding: 20px;
      font-size: 14px;
      margin-top: auto; /* pins footer at bottom */
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-custom">
  <div class="container-fluid d-flex justify-content-between align-items-center">
    <div class="d-flex align-items-center">
      <button class="btn text-white me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu">☰</button>
      <a href="home.php"><img src="dina.jpg" alt="Profile" style="width:40px;height:40px;border-radius:50%;border:2px solid #fff;"></a>
    </div>
    <div><span style="color:#fff;font-size:20px;">🔔</span></div>
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
      <li><a class="nav-link" href="class_members.php">Class</a></li>
      <li><a class="nav-link" href="timetable.php">Time Table</a></li>
      <li><a class="nav-link" href="evaluation.php">Evaluation</a></li>
      <li><a class="nav-link text-danger" href="logout.php">Logout</a></li>
    </ul>
  </div>
</div>

<!-- Evaluation Container -->
<div class="container-eval">
  <div class="section-title">Evaluation</div>

  <!-- Tabs -->
  <div class="eval-tabs">
    <div class="eval-tab active" id="tab-feedback">Student Feedback Online</div>
    <div class="eval-tab" id="tab-attendance">Attendance</div>
    <div class="eval-tab" id="tab-results">Examination Results</div>
  </div>

 <!-- Student Feedback Section -->
<div id="section-feedback">
  <table class="eval-table">
    <thead>
      <tr>
        <th>Class Subject</th>
        <th>Teacher</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>English</td>
        <td>KASMARINI BINTI BAHARUDDIN</td>
        <td>Completed</td>
        <td><a href="#" class="btn btn-sm btn-outline-danger">View Results</a></td>
      </tr>
      <tr>
        <td>Bahasa Malaysia</td>
        <td>MUNIRAH BINTI ASARY</td>
        <td>Completed</td>
        <td><a href="#" class="btn btn-sm btn-outline-danger">View Results</a></td>
      </tr>
      <tr>
        <td>Science</td>
        <td>NORSANIAH BT MD NOH</td>
        <td>Completed</td>
        <td><a href="#" class="btn btn-sm btn-outline-danger">View Results</a></td>
      </tr>
      <tr>
        <td>Sejarah</td>
        <td>NORZURAIZA RINA BINTI AHMAD</td>
        <td>Completed</td>
        <td><a href="#" class="btn btn-sm btn-outline-danger">View Results</a></td>
      </tr>
      <tr>
        <td>Pendidikan Islam</td>
        <td>DR. FADHILAH BINTI AMAN</td>
        <td>Completed</td>
        <td><a href="#" class="btn btn-sm btn-outline-danger">View Results</a></td>
      </tr>
      <tr>
        <td>Geography</td>
        <td>ABDULLAH BIN HASSAN</td>
        <td>Completed</td>
        <td><a href="#" class="btn btn-sm btn-outline-danger">View Results</a></td>
      </tr>
      <tr>
        <td>Economy</td>
        <td>AZIZAH BINTI RAHMAN</td>
        <td>Completed</td>
        <td><a href="#" class="btn btn-sm btn-outline-danger">View Results</a></td>
      </tr>
      <tr>
        <td>Additional Mathematics</td>
        <td>MOHD FAIZ BIN SALLEH</td>
        <td>Completed</td>
        <td><a href="#" class="btn btn-sm btn-outline-danger">View Results</a></td>
      </tr>
    </tbody>
  </table>
</div>

<!-- Attendance Section -->
<div id="section-attendance" style="display:none;">

  <!-- Month Tabs -->
  <div class="eval-tabs" style="margin-top:20px;">
    <div class="eval-tab active" id="tab-jan">January</div>
    <div class="eval-tab" id="tab-feb">February</div>
    <div class="eval-tab" id="tab-mar">March</div>
    <div class="eval-tab" id="tab-apr">April</div>
    <div class="eval-tab" id="tab-may">May</div>
    <div class="eval-tab" id="tab-jun">June</div>
    <div class="eval-tab" id="tab-jul">July</div>
    <div class="eval-tab" id="tab-aug">August</div>
    <div class="eval-tab" id="tab-sep">September</div>
    <div class="eval-tab" id="tab-oct">October</div>
    <div class="eval-tab" id="tab-nov">November</div>
    <div class="eval-tab" id="tab-dec">December</div>
  </div>

  <!-- January Attendance -->
  <div id="attendance-jan">
    <table class="eval-table">
      <thead>
        <tr>
          <th>Date</th>
          <th>Class Subject</th>
          <th>Teacher</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>10 Jan 2026</td>
          <td>English</td>
          <td>KASMARINI BINTI BAHARUDDIN</td>
          <td>Present</td>
          <td><a href="#" class="btn btn-sm btn-outline-danger">View Attendance</a></td>
        </tr>
        <tr>
          <td>11 Jan 2026</td>
          <td>Bahasa Malaysia</td>
          <td>MUNIRAH BINTI ASARY</td>
          <td>Absent</td>
          <td><a href="#" class="btn btn-sm btn-outline-danger">View Attendance</a></td>
        </tr>
        <tr>
          <td>12 Jan 2026</td>
          <td>Science</td>
          <td>NORSANIAH BT MD NOH</td>
          <td>Present</td>
          <td><a href="#" class="btn btn-sm btn-outline-danger">View Attendance</a></td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- February Attendance -->
  <div id="attendance-feb" style="display:none;">
    <table class="eval-table">
      <thead>
        <tr>
          <th>Date</th>
          <th>Class Subject</th>
          <th>Teacher</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>05 Feb 2026</td>
          <td>Sejarah</td>
          <td>NORZURAIZA RINA BINTI AHMAD</td>
          <td>Present</td>
          <td><a href="#" class="btn btn-sm btn-outline-danger">View Attendance</a></td>
        </tr>
        <tr>
          <td>06 Feb 2026</td>
          <td>Pendidikan Islam</td>
          <td>DR. FADHILAH BINTI AMAN</td>
          <td>Present</td>
          <td><a href="#" class="btn btn-sm btn-outline-danger">View Attendance</a></td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- More months (Mar–Dec) follow same structure -->
</div>

<!-- Examination Results Section -->
<div id="section-results" style="display:none;">

  <!-- Form Tabs -->
  <div class="eval-tabs" style="margin-top:20px;">
    <div class="eval-tab active" id="tab-form1">Form 1</div>
    <div class="eval-tab" id="tab-form2">Form 2</div>
    <div class="eval-tab" id="tab-form3">Form 3</div>
    <div class="eval-tab" id="tab-form4">Form 4</div>
    <div class="eval-tab" id="tab-form5">Form 5</div>
  </div>

  <!-- Form 1 Results -->
  <div id="results-form1">
    <table class="eval-table">
      <thead>
        <tr>
          <th>Subject</th>
          <th>Score</th>
          <th>Grade</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>English</td><td>72%</td><td>B</td></tr>
        <tr><td>Bahasa Malaysia</td><td>75%</td><td>B+</td></tr>
        <tr><td>Science</td><td>68%</td><td>C+</td></tr>
        <tr><td>Sejarah</td><td>70%</td><td>B</td></tr>
      </tbody>
    </table>
  </div>

  <!-- Form 2 Results -->
  <div id="results-form2" style="display:none;">
    <table class="eval-table">
      <thead>
        <tr>
          <th>Subject</th>
          <th>Score</th>
          <th>Grade</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>English</td><td>78%</td><td>B+</td></tr>
        <tr><td>Bahasa Malaysia</td><td>80%</td><td>A-</td></tr>
        <tr><td>Science</td><td>74%</td><td>B</td></tr>
        <tr><td>Sejarah</td><td>76%</td><td>B+</td></tr>
      </tbody>
    </table>
  </div>

  <!-- Form 3 Results -->
  <div id="results-form3" style="display:none;">
    <table class="eval-table">
      <thead>
        <tr>
          <th>Subject</th>
          <th>Score</th>
          <th>Grade</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>English</td><td>82%</td><td>A-</td></tr>
        <tr><td>Bahasa Malaysia</td><td>85%</td><td>A</td></tr>
        <tr><td>Science</td><td>80%</td><td>A-</td></tr>
        <tr><td>Sejarah</td><td>78%</td><td>B+</td></tr>
      </tbody>
    </table>
  </div>

  <!-- Form 4 Results -->
  <div id="results-form4" style="display:none;">
    <table class="eval-table">
      <thead>
        <tr>
          <th>Subject</th>
          <th>Score</th>
          <th>Grade</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>English</td><td>84%</td><td>A-</td></tr>
        <tr><td>Bahasa Malaysia</td><td>87%</td><td>A</td></tr>
        <tr><td>Science</td><td>82%</td><td>A-</td></tr>
        <tr><td>Sejarah</td><td>80%</td><td>A-</td></tr>
      </tbody>
    </table>
  </div>
</div>

</div> <!-- end container-eval -->

<!-- Footer -->
<footer>
  © 2026 SMK Lembah Keramat Kuala Lumpur — LEARNIFY
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // ===== Main Tabs Switching =====
  const tabs = document.querySelectorAll('.eval-tab');
  const feedbackSection = document.getElementById('section-feedback');
  const attendanceSection = document.getElementById('section-attendance');
  const resultsSection = document.getElementById('section-results');

  document.getElementById('tab-feedback').addEventListener('click', () => {
    setActiveTab('tab-feedback');
    feedbackSection.style.display = 'block';
    attendanceSection.style.display = 'none';
    resultsSection.style.display = 'none';
  });

  document.getElementById('tab-attendance').addEventListener('click', () => {
    setActiveTab('tab-attendance');
    feedbackSection.style.display = 'none';
    attendanceSection.style.display = 'block';
    resultsSection.style.display = 'none';
  });

  document.getElementById('tab-results').addEventListener('click', () => {
    setActiveTab('tab-results');
    feedbackSection.style.display = 'none';
    attendanceSection.style.display = 'none';
    resultsSection.style.display = 'block';
  });

  function setActiveTab(tabId) {
    tabs.forEach(tab => tab.classList.remove('active'));
    document.getElementById(tabId).classList.add('active');
  }

  // ===== Attendance Month Tabs =====
  const monthTabs = [
    'tab-jan','tab-feb','tab-mar','tab-apr','tab-may','tab-jun',
    'tab-jul','tab-aug','tab-sep','tab-oct','tab-nov','tab-dec'
  ];
  const monthSections = [
    'attendance-jan','attendance-feb','attendance-mar','attendance-apr','attendance-may','attendance-jun',
    'attendance-jul','attendance-aug','attendance-sep','attendance-oct','attendance-nov','attendance-dec'
  ];

  monthTabs.forEach((tabId, index) => {
    document.getElementById(tabId).addEventListener('click', () => {
      monthTabs.forEach(t => document.getElementById(t).classList.remove('active'));
      document.getElementById(tabId).classList.add('active');

      monthSections.forEach((s, i) => {
        document.getElementById(s).style.display = (i === index) ? 'block' : 'none';
      });
    });
  });

  // ===== Examination Form Tabs =====
  const formTabs = ['tab-form1','tab-form2','tab-form3','tab-form4','tab-form5'];
  const formSections = ['results-form1','results-form2','results-form3','results-form4','results-form5'];

  formTabs.forEach((tabId, index) => {
    document.getElementById(tabId).addEventListener('click', () => {
      formTabs.forEach(t => document.getElementById(t).classList.remove('active'));
      document.getElementById(tabId).classList.add('active');

      formSections.forEach((s, i) => {
        document.getElementById(s).style.display = (i === index) ? 'block' : 'none';
      });
    });
  });
</script>
</body>
</html>