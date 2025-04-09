<?php
require 'db.php';

$sql = "SELECT * FROM student";
$stmt = $pdo->query($sql);
$students = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Liste des étudiants</title>
</head>
<body>
    <h1>Liste des étudiants</h1>
    <table border="1">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>birthday</th>
            <th>détails</th>
        </tr>
        <?php foreach ($students as $student): ?>
        <tr>
            <td><?= $student['id'] ?></td>
            <td><?= htmlspecialchars($student['name']) ?></td>
            <td><?= $student['birthday'] ?></td>
            <td><a href="detailEtudiant.php?id=<?= $student['id'] ?>">🔍</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
