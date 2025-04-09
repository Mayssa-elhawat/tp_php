<!DOCTYPE html>
<html>
<head>
    <title>Liste des étudiants</title>
</head>
<body>
    <h1>Liste des étudiants</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $student): ?>
                <tr>
                    <td><?= $student->Id; ?></td>
                    <td><?= $student->Name; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>