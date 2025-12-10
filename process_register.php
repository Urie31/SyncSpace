<?php
$data = json_decode(file_get_contents("users.json"), true);

$newUser = [
  "username" => $_POST["username"],
  "password" => $_POST["password"]
];

$data["users"][] = $newUser;

file_put_contents("users.json", json_encode($data, JSON_PRETTY_PRINT));

echo "Registered! <a href='login.php'>Login</a>";
?>
