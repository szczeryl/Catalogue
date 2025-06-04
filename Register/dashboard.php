<?php
require 'config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
$stmt->execute([$_SESSION['user_id']]);
$user = $stmt->fetch();

if (!$user) {
    echo "User not found.";
    exit;
}
?>

  
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($user['username']); ?>!</h1>
    <p>Email: <?php echo htmlspecialchars($user['email']); ?></p>
    <p>Member since: <?php echo htmlspecialchars($user['created_at']); ?></p>

    <a href="logout.php">Logout</a>
</body>
</html>
