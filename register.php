<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" href="../public/style.css">
</head>
<body>

<div class="container">
<h2>Create Account</h2>

<form action="process_register.php" method="POST">
  <input type="text" name="username" placeholder="Username" required>
  <input type="password" name="password" placeholder="Password" required>

  <button type="submit">Register</button>
</form>

<p>Already have an account? <a href="login.php">Login</a></p>
</div>

</body>
</html>
