<?php
session_start();
require_once('db.php');


if (!isset($_SESSION['user_id'])) {
    header("Location: login.html"); 
    exit();
}

$user_id = $_SESSION['user_id'];
$result = $conn->query("SELECT username FROM users WHERE id = '$user_id'");
$user = $result->fetch_assoc();

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            padding: 10px;
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>

<div class="navbar">
    <div>
        <h3>User Dashboard</h3>
    </div>
    <div>
        <p>Welcome, <?php echo $user['username']; ?>!</p>
        <a href="logout.html">Logout</a>
    </div>
</div>


</body>
</html>
