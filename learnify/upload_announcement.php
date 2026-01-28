<?php
session_start();
include("db.php"); // make sure db.php connects to your database

// Get form data
$class_id    = $_POST['class_id'];
$content     = $_POST['content'];
$uploaded_by = $_SESSION['user_id']; // assumes teacher is logged in

// Insert into announcements table
$sql = "INSERT INTO announcements (class_id, content, uploaded_by, created_at) 
        VALUES ('$class_id', '$content', '$uploaded_by', NOW())";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Announcement posted successfully!'); window.location.href='teacher_class_5A.php';</script>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>