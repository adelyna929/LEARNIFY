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
<html>
<head>
  <title>Teacher Profile</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
  <h2>Teacher Profile</h2>
  <p><strong>Name:</strong> <?php echo $row['name']; ?></p>
  <p><strong>Email:</strong> <?php echo $row['email']; ?></p>
  <p><strong>Role:</strong> <?php echo $row['role']; ?></p>
  <a href="teacher_edit_profile.php" class="btn btn-primary">Edit Profile</a>
</div>
</body>
</html>