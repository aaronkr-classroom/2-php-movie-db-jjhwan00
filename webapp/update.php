<?php
$id = $_GET["id"];
$pdo = new PDO("mysql:host=localhost;dbname=movie_mysql;charset=utf8", "root", "");
$stmt = $pdo->query("SELECT * FROM movies WHERE id=$id");
$row = $stmt->fetch();
?>
<!DOCTYPE html>
<html><head><meta charset="UTF-8"><title>수정</title></head><body>
<h1>영화 정보 수정</h1>
<form action="update_result.php" method="post">
    <input type="hidden" name="id" value="<?= $row['id'] ?>">
    제목: <input type="text" name="title" value="<?= $row['title'] ?>"><br>
    감독: <input type="text" name="director" value="<?= $row['director'] ?>"><br>
    연도: <input type="number" name="year" value="<?= $row['year'] ?>"><br>
    <input type="submit" value="수정">
</form>
</body></html>
<!-- Finish! -->