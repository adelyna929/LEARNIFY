<?php
session_start();
include 'navbar.php';
include 'db.php';

if ($_SESSION['role'] != 'lecturer') {
    header("Location: login.php");
    exit();
}

$sql = "SELECT c.*, u.name AS student_name 
        FROM Consultations c 
        JOIN Users u ON c.student_id = u.user_id 
        WHERE c.lecturer_id={$_SESSION['user_id']} 
        ORDER BY date, time";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Consultations - LEARNIFY</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2>My Consultations</h2>
        <table class="table table-bordered">
            <tr>
                <th>Student</th>
                <th>Date</th>
                <th>Time</th>
                <th>Notes</th>
            </tr>
            <?php while($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['student_name']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['time']; ?></td>
                    <td><?php echo $row['notes']; ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>