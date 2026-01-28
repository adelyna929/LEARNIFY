<?php
include 'db.php';

// Change these to match the user you want to reset
$email = "student@test.com";
$newPassword = "student123";

// Hash the new password
$hashed = password_hash($newPassword, PASSWORD_DEFAULT);

// Update the database
$stmt = $conn->prepare("UPDATE Users SET password=? WHERE email=?");
$stmt->bind_param("ss", $hashed, $email);

if ($stmt->execute()) {
    echo "Password reset successfully!";
} else {
    echo "Error: " . $conn->error;
}
?>