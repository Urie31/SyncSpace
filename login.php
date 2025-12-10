<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="../public/style.css">
</head>
<body>

<div class="container">
<h2>Login</h2>

<form action="process_login.php" method="POST">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>

    <button type="submit">Login</button>
</form>

<p>Don't have an account? <a href="register.php">Register</a></p>
</div>

</body>
</html>
