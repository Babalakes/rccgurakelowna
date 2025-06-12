<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: adminLogin.php");
    exit();
}

$user = $_SESSION['admin'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <style>
        body { font-family: Arial; margin: 0; }
        .header { background: #333; color: white; padding: 15px; display: flex; justify-content: space-between; }
        .content { padding: 20px; }
    </style>
</head>
<body>
    <div class="header">
        <h2>Welcome, <?php echo $user['username']; ?></h2>
        <a href="logout.php" style="color: white;">Logout</a>
    </div>
    <div class="content">
        <h3>Admin Controls</h3>
        <p>Here you can manage your website content.</p>
    </div>
</body>
</html>