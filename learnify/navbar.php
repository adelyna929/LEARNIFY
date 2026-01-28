<?php
// no session_start() here, already started in each page
?>

<!DOCTYPE html>
<html>
<head>
    <title>LEARNIFY Navbar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        /* Custom burgundy + cream navbar */
        .navbar-custom {
            background-color: #800020; /* burgundy */
        }
        .navbar-custom .navbar-brand,
        .navbar-custom .nav-link,
        .navbar-custom .dropdown-toggle,
        .navbar-custom .btn {
            color: #FFFDD0; /* cream */
        }
        .navbar-custom .btn:hover,
        .navbar-custom .nav-link:hover {
            color: #ffffff;
        }
        /* Sidebar */
        .offcanvas {
            background-color: #800020; /* burgundy */
            color: #FFFDD0; /* cream */
        }
        .offcanvas a {
            color: #FFFDD0;
            font-weight: 600;
            text-decoration: none;
        }
        .offcanvas a:hover {
            background-color: #a83246;
            color: #ffffff;
            border-radius: 5px;
            padding-left: 5px;
        }
    </style>
</head>
<body>
    <!-- Top bar -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <!-- Toggle button for sidebar -->
            <button class="btn btn-outline-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu">
                ☰ Menu
            </button>

            <!-- Dropdown for classes -->
            <div class="dropdown me-3">
                <button class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">My Classes</button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">IML513</a></li>
                    <li><a class="dropdown-item" href="#">LCC501</a></li>
                    <li><a class="dropdown-item" href="#">CTU554</a></li>
                </ul>
            </div>

            <!-- Notification bell -->
            <button class="btn btn-light position-relative">
                🔔
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">3</span>
            </button>
        </div>
    </nav>

    <!-- Sidebar -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebarMenu">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Navigation</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="nav flex-column">
                <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="submit_task.php">Submit Task</a></li>
                <li class="nav-item"><a class="nav-link" href="view_quizzes.php">View Quizzes</a></li>
                <li class="nav-item"><a class="nav-link" href="book_consultation.php">Book Consultation</a></li>
                <li class="nav-item"><a class="nav-link" href="view_schedule.php">View Schedule</a></li>
                <li class="nav-item"><a class="nav-link" href="evaluation.php">Evaluation</a></li>
                <li class="nav-item"><a class="nav-link" href="class_members.php">Class Members</a></li>
                <li class="nav-item"><a class="nav-link" href="settings.php">Settings</a></li>
                <li class="nav-item"><a class="nav-link text-danger" href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>