<?php
session_start();
include 'navbar.php';
include 'db.php';

// Both lecturers and students can add schedules
if ($_SESSION['role'] != 'lecturer' && $_SESSION['role'] != 'student') {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $event_type = htmlspecialchars($_POST['event_type']);
    $date = htmlspecialchars($_POST['date']);
    $time = htmlspecialchars($_POST['time']);

    $stmt = $conn->prepare("INSERT INTO Schedule (user_id, event_type, date, time) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("isss", $_SESSION['user_id'], $event_type, $date, $time);

    if ($stmt->execute()) {
        echo "<p class='alert alert-success'>Event added successfully!</p>";
    } else {
        echo "<p class='alert alert-danger'>Error: " . $conn->error . "</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Schedule - LEARNIFY</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2>Add Schedule</h2>
        <form method="POST">
            <div class="mb-3">
                <label>Event Type</label>
                <select name="event_type" class="form-control" required>
                    <option value="class">Class</option>
                    <option value="exam">Exam</option>
                    <option value="consultation">Consultation</option>
                </select>
            </div>
            <div class="mb-3">
                <label>Date</label>
                <input type="date" name="date" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Time</label>
                <input type="time" name="time" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Event</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>