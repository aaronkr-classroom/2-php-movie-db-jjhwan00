<?php
$host = 'localhost';
$db = 'movie_mysql';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

// DB 연결
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    exit("DB 연결 실패: " . $e->getMessage());
}

// 쿼리 실행
$stmt = $pdo->query("SELECT * FROM movies");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Movie List</title>
</head>
<body>
    <h1>영화 목록</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>제목</th>
            <th>감독</th>
            <th>년도</th>
        </tr>
        <?php foreach ($stmt as $row): ?>
            <tr>
                <td><?= htmlspecialchars($row['id']) ?></td>
                <td><?= htmlspecialchars($row['title']) ?></td>
                <td><?= htmlspecialchars($row['director']) ?></td>
                <td><?= htmlspecialchars($row['year']) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
