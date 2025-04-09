<?php
$host = 'localhost';
$dbname = 'etudiants_db';
$username = 'root'; // ou 'admin' selon ton setup
$password = '';     // mot de passe si défini

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // Activer les erreurs PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>
