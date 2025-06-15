<?php
$pdo = new PDO("mysql:host=localhost;dbname=movie_mysql;charset=utf8", "root", "");
$stmt = $pdo->prepare("INSERT INTO movies (title, director, year) VALUES (?, ?, ?)");
$stmt->execute([$_POST["title"], $_POST["director"], $_POST["year"]]);
header("Location: select_all.php");
?>