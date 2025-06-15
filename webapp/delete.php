<?php
$id = $_GET["id"];
$pdo = new PDO("mysql:host=localhost;dbname=movie_mysql;charset=utf8", "root", "");
$stmt = $pdo->query("SELECT * FROM movies WHERE id=$id");
$row = $stmt->fetch();
?>
<!DOCTYPE html>
<html><head><meta charset="UTF-8"><title>삭제 확인</title></head><body>
<h1>영화 삭제</h1>
<form action="delete_result.php" method="post">
    <input type="hidden" name="id" value="<?= $row['id'] ?>">
    제목: <?= $row["title"] ?><br>
    감독: <?= $row["director"] ?><br>
    연도: <?= $row["year"] ?><br>
    <input type="submit" value="삭제 확인">
</form></body></html>
<!-- Finish! -->