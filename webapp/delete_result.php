<?php
$pdo = new PDO("mysql:host=localhost;dbname=movie_mysql;charset=utf8", "root", "");
$stmt = $pdo->prepare("DELETE FROM movies WHERE id=?");
$stmt->execute([$_POST["id"]]);
header("Location: select_all.php");
?>