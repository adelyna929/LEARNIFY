<?php
session_start();
include 'navbar.php';
include 'db.php';

if ($_SESSION['role'] != 'lecturer') {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = htmlspecialchars($_POST['title']);
    $link = htmlspecialchars($_POST['link']);

    $stmt = $conn->prepare("INSERT INTO Quizzes (title, lecturer_id, link) VALUES (?, ?, ?)");
    $stmt->bind_param("sis", $title, $_SESSION['user_id'], $link);

    if ($stmt->execute()) {
        echo "<p class='alert alert-success'>Quiz added successfully!</p>";
    } else {
        echo "<p class='alert alert-danger'>Error: " . $conn->error . "</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Quiz - LEARNIFY</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2>Add Quiz</h2>
        <form method="POST">
            <div class="mb-3">
                <label>Quiz Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Quiz Link (Google Form, etc.)</label>
                <input type="url" name="link" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Quiz</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>