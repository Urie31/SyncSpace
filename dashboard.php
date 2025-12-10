<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

$room = $_GET["room"] ?? "minor";
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="../public/style.css">
</head>
<body>

<div class="dashboard-wrapper">

<div class="section-box">
<h2>Welcome, <?php echo $_SESSION["username"]; ?>!</h2>
<h3>Room: <?php echo ucfirst($room); ?> Subjects</h3>
</div>

<!-- CHAT SECTION -->
<div class="section-box">
<h2>Real-Time Chat</h2>
<input id="chatInput" placeholder="Type a message">
<button onclick="sendChat()">Send</button>
<div id="chatBox"></div>
</div>

<!-- NOTES SECTION -->
<div class="section-box">
<h2>Real-Time Notes</h2>
<textarea id="noteArea"></textarea>
</div>

<!-- TODO SECTION -->
<div class="section-box">
<h2>Room To-Do List</h2>
<input id="todoInput" placeholder="Add a task">
<button onclick="addTodo()">Add</button>
<ul id="todoList"></ul>
</div>

</div>

<script src="https://cdn.socket.io/4.7.2/socket.io.min.js"></script>
<script>
const username = "<?php echo $_SESSION['username']; ?>";
const room = "<?php echo $room; ?>";
</script>
<script src="../public/dashboard.js"></script>

</body>
</html>