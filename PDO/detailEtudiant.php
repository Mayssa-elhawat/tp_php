<?php
require 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Utilisation d'une requête préparée pour éviter l'injection SQL
    $sql = "SELECT * FROM student WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id]);

    $student = $stmt->fetch();

    if (!$student) {
        echo "Aucun étudiant trouvé.";
        exit;
    }
} else {
    echo "ID non spécifié.";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Détail étudiant</title>
</head>
<body>
    <h1>Détails de l'étudiant</h1>
    <p><strong>Nom :</strong> <?= htmlspecialchars($student['name']) ?></p>
    <p><strong>Date de naissance :</strong> <?= $student['birthday'] ?></p>
    <a href="index.php">⬅ Retour à la liste</a>
</body>
</html>
