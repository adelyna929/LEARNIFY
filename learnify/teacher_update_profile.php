<?php
session_start();
include("db.php");

$user_id = $_SESSION['user_id'];
$name     = $_POST['name'];
$email    = $_POST['email'];
$password = $_POST['password'];

$sql = "UPDATE users SET name='$name', email='$email'";

if (!empty($password)) {
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $sql .= ", password='$hashed_password'";
}

$sql .= " WHERE user_id='$user_id'";

if (mysqli_query($conn, $sql)) {
    header("Location: teacher_profile.php?success=1");
} else {
    echo "Error updating profile: " . mysqli_error($conn);
}
?>