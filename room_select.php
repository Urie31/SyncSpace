<!DOCTYPE html>
<html>
<head>
<title>Select Room</title>
<link rel="stylesheet" href="../public/style.css">
</head>
<body>

<div class="container">
<h2>Select a Room</h2>

<form action="dashboard.php" method="GET">
    <select name="room" required>
        <option value="minor">Minor Subjects</option>
        <option value="major">Major Subjects</option>
    </select>

    <button type="submit">Enter Room</button>
</form>
</div>

</body>
</html>
