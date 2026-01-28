<?php
session_start();
include 'navbar.php';
include 'db.php';

if ($_SESSION['role'] != 'student') {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Dashboard - LEARNIFY</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2>Student Dashboard</h2>
        <p>Welcome, Student! Use the navigation bar to:</p>
        <ul>
            <li>Submit Tasks</li>
            <li>View Quizzes</li>
            <li>Book Consultations</li>
            <li>View Schedule</li>
        </ul>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>