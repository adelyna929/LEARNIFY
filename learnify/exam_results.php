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
  <title>LEARNIFY Examination Results</title>
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
    .results-title {
      text-align: center;
      font-weight: 700;
      font-size: 2rem;
      margin-bottom: 30px;
      color: #571216;
    }

    .nav-tabs {
      border-bottom: 2px solid #571216;
      justify-content: center;
      margin-bottom: 30px;
    }
    .nav-tabs .nav-link {
      color: #571216;
      font-weight: 600;
      border: none;
      border-bottom: 3px solid transparent;
    }
    .nav-tabs .nav-link.active {
      border-bottom: 3px solid #571216;
      background-color: transparent;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background-color: rgba(255,255,255,0.9);
      margin-bottom: 40px;
    }
    th {
      background-color: #571216;
      color: #fff;
      font-weight: 600;
      text-align: center;
    }
    td {
      border: 1px solid #571216;
      padding: 10px;
      text-align: center;
      font-size: 0.95rem;
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
  <div class="results-title">Examination Results</div>

  <!-- Tab Buttons -->
  <ul class="nav nav-tabs" id="classTabs" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="amanah-tab" data-bs-toggle="tab" data-bs-target="#amanah" type="button" role="tab">5 Amanah</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="baiduri-tab" data-bs-toggle="tab" data-bs-target="#baiduri" type="button" role="tab">5 Baiduri</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="cahaya-tab" data-bs-toggle="tab" data-bs-target="#cahaya" type="button" role="tab">5 Cahaya</button>
    </li>
  </ul>

  <!-- Tab Content -->
  <div class="tab-content" id="classTabsContent">
    <div class="tab-pane fade show active" id="amanah" role="tabpanel">
      <table class="table table-bordered mt-4">
        <thead>
          <tr>
            <th>Student Name</th>
            <th>Early Year Exam</th>
            <th>Mid Year Exam</th>
            <th>Final Exam</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>Raz Adelyna Dalilah</td><td>85</td><td>88</td><td>90</td></tr>
          <tr><td>Che Rosmalina Alia</td><td>78</td><td>80</td><td>82</td></tr>
          <tr><td>Amna Wajihah</td><td>92</td><td>94</td><td>95</td></tr>
          <tr><td>Qurratu Aini</td><td>80</td><td>83</td><td>85</td></tr>
          <tr><td>Nik Ijtihadi Baihaqi</td><td>88</td><td>90</td><td>91</td></tr>
          <tr><td>Waheeda Sakinah</td><td>76</td><td>78</td><td>80</td></tr>
          <tr><td>Hazierah Nazir</td><td>84</td><td>86</td><td>87</td></tr>
          <tr><td>Nurain Batrisyia</td><td>79</td><td>82</td><td>84</td></tr>
          <tr><td>Muhammad Hakim</td><td>90</td><td>92</td><td>93</td></tr>
          <tr><td>Nur Maisarah</td><td>81</td><td>83</td><td>85</td></tr>
          <tr><td>Nura Damia</td><td>77</td><td>79</td><td>81</td></tr>
          <tr><td>Nur Alieya Shazreen</td><td>82</td><td>85</td><td>87</td></tr>
          <tr><td>Amishya Amieyra</td><td>75</td><td>78</td><td>80</td></tr>
          <tr><td>Siti Amalina</td><td>83</td><td>86</td><td>88</td></tr>
          <tr><td>Amirul Aiman</td><td>89</td><td>91</td><td>93</td></tr>
        </tbody>
      </table>
    </div>

        <!-- 5 BAIDURI Results -->
    <div class="tab-pane fade" id="baiduri" role="tabpanel">
      <table class="table table-bordered mt-4">
        <thead>
          <tr>
            <th>Student Name</th>
            <th>Early Year Exam</th>
            <th>Mid Year Exam</th>
            <th>Final Exam</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>Raz Adelyna Dalilah</td><td>84</td><td>87</td><td>89</td></tr>
          <tr><td>Che Rosmalina Alia</td><td>79</td><td>81</td><td>83</td></tr>
          <tr><td>Amna Wajihah</td><td>91</td><td>93</td><td>94</td></tr>
          <tr><td>Qurratu Aini</td><td>82</td><td>84</td><td>86</td></tr>
          <tr><td>Nik Ijtihadi Baihaqi</td><td>87</td><td>89</td><td>90</td></tr>
          <tr><td>Waheeda Sakinah</td><td>77</td><td>79</td><td>81</td></tr>
          <tr><td>Hazierah Nazir</td><td>85</td><td>87</td><td>88</td></tr>
          <tr><td>Nurain Batrisyia</td><td>80</td><td>83</td><td>85</td></tr>
          <tr><td>Muhammad Hakim</td><td>89</td><td>91</td><td>92</td></tr>
          <tr><td>Nur Maisarah</td><td>82</td><td>84</td><td>86</td></tr>
          <tr><td>Nura Damia</td><td>78</td><td>80</td><td>82</td></tr>
          <tr><td>Nur Alieya Shazreen</td><td>83</td><td>86</td><td>88</td></tr>
          <tr><td>Amishya Amieyra</td><td>76</td><td>79</td><td>81</td></tr>
          <tr><td>Siti Amalina</td><td>84</td><td>87</td><td>89</td></tr>
          <tr><td>Amirul Aiman</td><td>90</td><td>92</td><td>94</td></tr>
        </tbody>
      </table>
    </div>

    <!-- 5 CAHAYA Results -->
    <div class="tab-pane fade" id="cahaya" role="tabpanel">
      <table class="table table-bordered mt-4">
        <thead>
          <tr>
            <th>Student Name</th>
            <th>Early Year Exam</th>
            <th>Mid Year Exam</th>
            <th>Final Exam</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>Raz Adelyna Dalilah</td><td>86</td><td>88</td><td>90</td></tr>
          <tr><td>Che Rosmalina Alia</td><td>80</td><td>82</td><td>84</td></tr>
          <tr><td>Amna Wajihah</td><td>93</td><td>95</td><td>96</td></tr>
          <tr><td>Qurratu Aini</td><td>81</td><td>83</td><td>85</td></tr>
          <tr><td>Nik Ijtihadi Baihaqi</td><td>89</td><td>91</td><td>92</td></tr>
          <tr><td>Waheeda Sakinah</td><td>78</td><td>80</td><td>82</td></tr>
          <tr><td>Hazierah Nazir</td><td>86</td><td>88</td><td>89</td></tr>
          <tr><td>Nurain Batrisyia</td><td>81</td><td>84</td><td>86</td></tr>
          <tr><td>Muhammad Hakim</td><td>91</td><td>93</td><td>94</td></tr>
          <tr><td>Nur Maisarah</td><td>83</td><td>85</td><td>87</td></tr>
          <tr><td>Nura Damia</td><td>79</td><td>81</td><td>83</td></tr>
          <tr><td>Nur Alieya Shazreen</td><td>84</td><td>87</td><td>89</td></tr>
          <tr><td>Amishya Amieyra</td><td>77</td><td>80</td><td>82</td></tr>
          <tr><td>Siti Amalina</td><td>85</td><td>88</td><td>90</td></tr>
          <tr><td>Amirul Aiman</td><td>91</td><td>93</td><td>95</td></tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="text-center py-3" style="background-color:#571216; color:#fff; margin-top:auto;">
  © 2026 SMK Lembah Keramat Kuala Lumpur — LEARNIFY Examination Results
</footer>

<!-- Bootstrap JS Bundle (needed for tabs + sidebar/offcanvas) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>