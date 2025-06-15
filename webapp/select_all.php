<?php
$pdo = new PDO("mysql:host=localhost;dbname=movie_mysql;charset=utf8", "root", "");
$stmt = $pdo->query("SELECT * FROM movies");
?>
<!DOCTYPE html>
<html><head><meta charset="UTF-8"><title>영화 목록</title></head><body>
<h1>영화 목록</h1>
<a href="insert.php">[추가]</a>
<table border="1"><tr><th>ID</th><th>제목</th><th>감독</th><th>연도</th><th>수정</th><th>삭제</th></tr>
<?php foreach ($stmt as $row): ?>
<tr>
<td><?= $row["id"] ?></td>
<td><?= $row["title"] ?></td>
<td><?= $row["director"] ?></td>
<td><?= $row["year"] ?></td>
<td><a href="update_select.php?id=<?= $row["id"] ?>">수정</a></td>
<td><a href="delete_select.php?id=<?= $row["id"] ?>">삭제</a></td>
</tr><?php endforeach; ?></table></body></html>