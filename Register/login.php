<?php require 'config.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if (isset($_GET['error'])): ?>
        <div style="color: red;">Invalid username or password</div>
    <?php endif; ?>
    
    <?php if (isset($_GET['registration'])): ?>
        <div style="color: green;">Registration successful! Please login.</div>
    <?php endif; ?>
    
    <form action="login_process.php" method="post">
        <div>
            <label>Username or Email:</label>
            <input type="text" name="login" required>
        </div>
        <div>
            <label>Password:</label>
            <input type="password" name="password" required>
        </div>
        <button type="submit">Login</button>
    </form>
    <p>Don't have an account? <a href="register.php">Register here</a></p>
</body>
</html>
