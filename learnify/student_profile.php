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
  <title>LEARNIFY Student Profile</title>
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
    .tab-row {
      display: flex;
      justify-content: center;
      gap: 60px;
      margin-top: 20px;
      border-bottom: 2px solid rgba(87,18,22,0.3);
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
      border-bottom: 3px solid #571216;
    }
    .tab-content {
      margin-top: 30px;
    }
    .student-grid {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
      margin-top: 20px;
    }
    .student-card {
      width: 220px;
      text-align: center;
      transition: transform 0.3s ease;
    }
    .student-card:hover {
      transform: scale(1.08);
    }
    .student-card img {
        width: 200px;       /* fixed width */
        height: 200px;      /* fixed height */
        object-fit: cover;  /* crops image to fill square */
        border-radius: 8px;
        border: 2px solid #571216;
        }
    .student-card h5 {
      margin-top: 10px;
      font-size: 1rem;
      font-weight: 600;
      color: #571216;
    }
    .student-fact {
      font-size: 0.9rem;
      color: #444;
      margin-top: 5px;
    }

    footer {
            background-color: #571216; color: #fff;
            text-align: center; padding: 20px;
            margin-top: 50px; border-radius: 20px 20px 0 0;
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

  <!-- Page Title -->
  <div class="text-center mb-4">
    <h2 style="font-weight:700; color:#571216;">Student Profile</h2>
  </div>

  <!-- Inline Tab-style layout -->
  <div class="tab-row justify-content-center">
    <div class="tab-item active" onclick="showTab('amanah')">5 AMANAH</div>
    <div class="tab-item" onclick="showTab('baiduri')">5 BAIDURI</div>
    <div class="tab-item" onclick="showTab('cahaya')">5 CAHAYA</div>
  </div>

  <div class="tab-content">
    <!-- 5 AMANAH -->
    <div id="amanah" class="tab-section">
      <div class="student-grid">
        <div class="student-card">
          <img src="dina.jpg" alt="Raz Adelyna Dalilah">
          <h5>Raz Adelyna Dalilah</h5>
          <div class="student-fact">Excellent in English</div>
        </div>
        <div class="student-card">
          <img src="alia.jpg" alt="Che Rosmalina Alia">
          <h5>Che Rosmalina Alia</h5>
          <div class="student-fact">Enjoys painting landscapes</div>
        </div>
        <div class="student-card">
          <img src="munapassport.jpg" alt="Amna Wajihah">
          <h5>Amna Wajihah</h5>
          <div class="student-fact">Captain of the debate team</div>
        </div>
        <div class="student-card">
          <img src="qur.jpg" alt="Qurratu Aini">
          <h5>Qurratu Aini</h5>
          <div class="student-fact">Always brings positive energy</div>
        </div>
        <div class="student-card">
          <img src="nik.jpg" alt="Nik Ijtihadi Baihaqi">
          <h5>Nik Ijtihadi Baihaqi</h5>
          <div class="student-fact">Tech enthusiast and coder</div>
        </div>
        <div class="student-card">
          <img src="weeda.jpg" alt="Waheeda Sakinah">
          <h5>Waheeda Sakinah</h5>
          <div class="student-fact">Loves reading mystery novels</div>
        </div>
        <div class="student-card">
          <img src="zizi.jpg" alt="Hazierah Nazir">
          <h5>Hazierah Nazir</h5>
          <div class="student-fact">Talented in music and singing</div>
        </div>
        <div class="student-card">
          <img src="ain.jpg" alt="Nurain Batrisyia">
          <h5>Nurain Batrisyia</h5>
          <div class="student-fact">Excellent at sports</div>
        </div>
        <div class="student-card">
          <img src="hakim.jpg" alt="Muhammad Hakim">
          <h5>Muhammad Hakim</h5>
          <div class="student-fact">Enjoys science experiments</div>
        </div>
        <div class="student-card">
          <img src="maisarah.jpg" alt="Nur Maisarah">
          <h5>Nur Maisarah</h5>
          <div class="student-fact">Great team player</div>
        </div>
        <div class="student-card">
          <img src="mia.jpg" alt="Nura Damia">
          <h5>Nura Damia</h5>
          <div class="student-fact">Creative in art projects</div>
        </div>
        <div class="student-card">
          <img src="eya.jpg" alt="Nur Alieya Shazreen">
          <h5>Nur Alieya Shazreen</h5>
          <div class="student-fact">Passionate about writing stories</div>
        </div>
        <div class="student-card">
          <img src="mishya.jpeg" alt="Amishya Amieyra">
          <h5>Amishya Amieyra</h5>
          <div class="student-fact">Always helps classmates</div>
        </div>
        <div class="student-card">
          <img src="amal.jpeg" alt="Siti Amalina">
          <h5>Siti Amalina</h5>
          <div class="student-fact">Loves volunteering</div>
        </div>
        <div class="student-card">
          <img src="Amirul.jpeg" alt="Amirul Aiman">
          <h5>Amirul Aiman</h5>
          <div class="student-fact">Excellent in mathematics</div>
        </div>
      </div>
    </div>

        <!-- 5 BAIDURI -->
    <div id="baiduri" class="tab-section" style="display:none;">
      <div class="student-grid">
        <div class="student-card">
          <img src="dina.jpg" alt="Raz Adelyna Dalilah">
          <h5>Raz Adelyna Dalilah</h5>
          <div class="student-fact">Excellent in English</div>
        </div>
        <div class="student-card">
          <img src="alia.jpg" alt="Che Rosmalina Alia">
          <h5>Che Rosmalina Alia</h5>
          <div class="student-fact">Enjoys painting landscapes</div>
        </div>
        <div class="student-card">
          <img src="munapassport.jpg" alt="Amna Wajihah">
          <h5>Amna Wajihah</h5>
          <div class="student-fact">Captain of the debate team</div>
        </div>
        <div class="student-card">
          <img src="qur.jpg" alt="Qurratu Aini">
          <h5>Qurratu Aini</h5>
          <div class="student-fact">Always brings positive energy</div>
        </div>
        <div class="student-card">
          <img src="nik.jpg" alt="Nik Ijtihadi Baihaqi">
          <h5>Nik Ijtihadi Baihaqi</h5>
          <div class="student-fact">Tech enthusiast and coder</div>
        </div>
        <div class="student-card">
          <img src="weeda.jpg" alt="Waheeda Sakinah">
          <h5>Waheeda Sakinah</h5>
          <div class="student-fact">Loves reading mystery novels</div>
        </div>
        <div class="student-card">
          <img src="zizi.jpg" alt="Hazierah Nazir">
          <h5>Hazierah Nazir</h5>
          <div class="student-fact">Talented in music and singing</div>
        </div>
        <div class="student-card">
          <img src="ain.jpg" alt="Nurain Batrisyia">
          <h5>Nurain Batrisyia</h5>
          <div class="student-fact">Excellent at sports</div>
        </div>
        <div class="student-card">
          <img src="hakim.jpg" alt="Muhammad Hakim">
          <h5>Muhammad Hakim</h5>
          <div class="student-fact">Enjoys science experiments</div>
        </div>
        <div class="student-card">
          <img src="maisarah.jpg" alt="Nur Maisarah">
          <h5>Nur Maisarah</h5>
          <div class="student-fact">Great team player</div>
        </div>
        <div class="student-card">
          <img src="mia.jpg" alt="Nura Damia">
          <h5>Nura Damia</h5>
          <div class="student-fact">Creative in art projects</div>
        </div>
        <div class="student-card">
          <img src="eya.jpg" alt="Nur Alieya Shazreen">
          <h5>Nur Alieya Shazreen</h5>
          <div class="student-fact">Passionate about writing stories</div>
        </div>
        <div class="student-card">
          <img src="mishya.jpeg" alt="Amishya Amieyra">
          <h5>Amishya Amieyra</h5>
          <div class="student-fact">Always helps classmates</div>
        </div>
        <div class="student-card">
          <img src="amal.jpeg" alt="Siti Amalina">
          <h5>Siti Amalina</h5>
          <div class="student-fact">Loves volunteering</div>
        </div>
        <div class="student-card">
          <img src="Amirul.jpeg" alt="Amirul Aiman">
          <h5>Amirul Aiman</h5>
          <div class="student-fact">Excellent in mathematics</div>
        </div>
      </div>
    </div>

        <!-- 5 CAHAYA -->
    <div id="cahaya" class="tab-section" style="display:none;">
      <div class="student-grid">
        <div class="student-card">
          <img src="dina.jpg" alt="Raz Adelyna Dalilah">
          <h5>Raz Adelyna Dalilah</h5>
          <div class="student-fact">Excellent in English</div>
        </div>
        <div class="student-card">
          <img src="alia.jpg" alt="Che Rosmalina Alia">
          <h5>Che Rosmalina Alia</h5>
          <div class="student-fact">Enjoys painting landscapes</div>
        </div>
        <div class="student-card">
          <img src="munapassport.jpg" alt="Amna Wajihah">
          <h5>Amna Wajihah</h5>
          <div class="student-fact">Captain of the debate team</div>
        </div>
        <div class="student-card">
          <img src="qur.jpg" alt="Qurratu Aini">
          <h5>Qurratu Aini</h5>
          <div class="student-fact">Always brings positive energy</div>
        </div>
        <div class="student-card">
          <img src="nik.jpg" alt="Nik Ijtihadi Baihaqi">
          <h5>Nik Ijtihadi Baihaqi</h5>
          <div class="student-fact">Tech enthusiast and coder</div>
        </div>
        <div class="student-card">
          <img src="weeda.jpg" alt="Waheeda Sakinah">
          <h5>Waheeda Sakinah</h5>
          <div class="student-fact">Loves reading mystery novels</div>
        </div>
        <div class="student-card">
          <img src="zizi.jpg" alt="Hazierah Nazir">
          <h5>Hazierah Nazir</h5>
          <div class="student-fact">Talented in music and singing</div>
        </div>
        <div class="student-card">
          <img src="ain.jpg" alt="Nurain Batrisyia">
          <h5>Nurain Batrisyia</h5>
          <div class="student-fact">Excellent at sports</div>
        </div>
        <div class="student-card">
          <img src="hakim.jpg" alt="Muhammad Hakim">
          <h5>Muhammad Hakim</h5>
          <div class="student-fact">Enjoys science experiments</div>
        </div>
        <div class="student-card">
          <img src="maisarah.jpg" alt="Nur Maisarah">
          <h5>Nur Maisarah</h5>
          <div class="student-fact">Great team player</div>
        </div>
        <div class="student-card">
          <img src="mia.jpg" alt="Nura Damia">
          <h5>Nura Damia</h5>
          <div class="student-fact">Creative in art projects</div>
        </div>
        <div class="student-card">
          <img src="eya.jpg" alt="Nur Alieya Shazreen">
          <h5>Nur Alieya Shazreen</h5>
          <div class="student-fact">Passionate about writing stories</div>
        </div>
        <div class="student-card">
          <img src="mishya.jpeg" alt="Amishya Amieyra">
          <h5>Amishya Amieyra</h5>
          <div class="student-fact">Always helps classmates</div>
        </div>
        <div class="student-card">
          <img src="amal.jpeg" alt="Siti Amalina">
          <h5>Siti Amalina</h5>
          <div class="student-fact">Loves volunteering</div>
        </div>
        <div class="student-card">
          <img src="Amirul.jpeg" alt="Amirul Aiman">
          <h5>Amirul Aiman</h5>
          <div class="student-fact">Excellent in mathematics</div>
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
    activeTab.style.fontWeight = 'bold';
  }
</script>

<!-- Footer -->
<footer>
  © 2026 SMK Lembah Keramat Kuala Lumpur — LEARNIFY
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>