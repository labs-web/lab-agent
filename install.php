<?php
require_once 'config.php';

try {
    // Connexion sans sélectionner de base de données pour permettre sa création
    $pdo = new PDO("mysql:host=" . DB_HOST, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connexion au serveur MySQL réussie.<br>";

    // Lecture du fichier SQL
    $sqlFile = 'setup_db.sql';
    if (!file_exists($sqlFile)) {
        die("Erreur : Le fichier $sqlFile est introuvable.");
    }

    $sql = file_get_contents($sqlFile);

    // Exécution des requêtes SQL
    $pdo->exec($sql);

    echo "Installation réussie ! La base de données et les tables ont été créées.<br>";
    echo "<a href='public/article.php?id=1'>Voir un article test</a>";

} catch (PDOException $e) {
    die("Erreur lors de l'installation : " . $e->getMessage());
}
?>