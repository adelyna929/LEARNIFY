<?php
session_start();
include("db.php"); // make sure db.php connects to your database

// Get form data
$class_id   = $_POST['class_id'];
$type       = $_POST['type'];
$title      = $_POST['title'];
$uploaded_by = $_SESSION['user_id']; // assumes teacher is logged in

// Handle file or link
if ($type == "tuition" || $type == "quiz") {
    // These are links, not files
    $file_path = $_POST['file'];
} else {
    // Handle file upload
    $target_dir = "uploads/";
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
    $file_path = $target_file;
}

// Insert into database
$sql = "INSERT INTO materials (class_id, type, title, file_path, uploaded_by) 
        VALUES ('$class_id', '$type', '$title', '$file_path', '$uploaded_by')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Upload successful!'); window.location.href='teacher_class_5A.php';</script>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>