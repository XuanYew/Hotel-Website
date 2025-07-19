<?php
// Simple login logic (for demo purposes)
$adminUser = "admin";
$adminPass = "12345";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === $adminUser && $password === $adminPass) {
        echo "<h2>Welcome, Admin!</h2>";
    } else {
        echo "<h2>Access Denied</h2>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div class="admin-login">
        <h2>Admin Login</h2>
        <form method="POST">
            <input type="text" name="username" placeholder="Username" required />
            <input type="password" name="password" placeholder="Password" required />
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
