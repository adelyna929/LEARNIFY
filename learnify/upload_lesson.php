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
    $description = htmlspecialchars($_POST['description']);
    $file = $_FILES['file']['name'];
    $target = "uploads/" . basename($file);

    // File security checks
    $allowed = ['pdf','docx','pptx','jpg','png'];
    $ext = pathinfo($file, PATHINFO_EXTENSION);

    if (!in_array(strtolower($ext), $allowed)) {
        echo "<p class='alert alert-danger'>Invalid file type.</p>";
        exit();
    }

    if ($_FILES['file']['size'] > 5*1024*1024) { // 5MB limit
        echo "<p class='alert alert-danger'>File too large.</p>";
        exit();
    }

    if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
        $stmt = $conn->prepare("INSERT INTO Lessons (title, description, file_path, lecturer_id) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("sssi", $title, $description, $target, $_SESSION['user_id']);
        if ($stmt->execute()) {
            echo "<p class='alert alert-success'>Lesson uploaded successfully!</p>";
        } else {
            echo "<p class='alert alert-danger'>Database error: " . $conn->error . "</p>";
        }
    } else {
        echo "<p class='alert alert-danger'>Upload failed.</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload Lesson - LEARNIFY</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2>Upload Lesson</h2>
        <form method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label>Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Description</label>
                <textarea name="description" class="form-control" required></textarea>
            </div>
            <div class="mb-3">
                <label>Upload File</label>
                <input type="file" name="file" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>