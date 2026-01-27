<?php
declare(strict_types=1);

/**
 * Script d'installation de la base de données.
 * Exécuter : php install.php
 */

// Configuration
$host = 'localhost';
$username = 'root';
$password = 'admin';
$dbname = 'lab_agent';
$charset = 'utf8mb4';

echo "\n";
echo "╔══════════════════════════════════════════════════════════╗\n";
echo "║           INSTALLATION BASE DE DONNÉES                   ║\n";
echo "╚══════════════════════════════════════════════════════════╝\n\n";

try {
    // Connexion sans base de données
    echo "[1/4] Connexion au serveur MySQL... ";
    $pdo = new PDO("mysql:host=$host;charset=$charset", $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
    echo "✅ OK\n";

    // Créer la base de données
    echo "[2/4] Création de la base de données '$dbname'... ";
    $pdo->exec("CREATE DATABASE IF NOT EXISTS `$dbname` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
    $pdo->exec("USE `$dbname`");
    echo "✅ OK\n";

    // Créer la table articles
    echo "[3/4] Création de la table 'articles'... ";
    $pdo->exec("DROP TABLE IF EXISTS articles");
    $pdo->exec("
        CREATE TABLE articles (
            id INT AUTO_INCREMENT PRIMARY KEY,
            titre VARCHAR(255) NOT NULL,
            resume TEXT,
            contenu TEXT NOT NULL,
            image VARCHAR(255) DEFAULT NULL,
            date_publication DATETIME DEFAULT CURRENT_TIMESTAMP,
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
            updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
    ");
    echo "✅ OK\n";

    // Insérer les données de test
    echo "[4/4] Insertion des données de test... ";
    $articles = [
        ['Introduction à TailwindCSS', 'Découvrez comment Tailwind révolutionne le frontend.', 'Contenu complet...', '2026-01-27 10:00:00'],
        ['Architecture 3-Tiers en PHP', 'Structurez vos applications PHP avec le pattern MVC.', 'Contenu complet...', '2026-01-25 14:30:00'],
        ['Les bases de PDO', 'PDO pour un accès sécurisé aux bases de données.', 'Contenu complet...', '2026-01-20 09:15:00'],
        ['Sécurité des applications web', 'Protégez vos apps contre les injections SQL et XSS.', 'Contenu complet...', '2026-01-15 16:45:00'],
        ['Git pour les débutants', 'Maîtrisez les commandes essentielles de Git.', 'Contenu complet...', '2026-01-10 11:00:00'],
        ['API REST avec PHP', 'Créez des API RESTful robustes avec PHP natif.', 'Contenu complet...', '2026-01-05 08:30:00'],
    ];

    $stmt = $pdo->prepare("INSERT INTO articles (titre, resume, contenu, date_publication) VALUES (?, ?, ?, ?)");
    foreach ($articles as $article) {
        $stmt->execute($article);
    }
    echo "✅ OK (" . count($articles) . " articles)\n";

    // Résumé
    echo "\n╔══════════════════════════════════════════════════════════╗\n";
    echo "║              ✅ INSTALLATION RÉUSSIE !                   ║\n";
    echo "╚══════════════════════════════════════════════════════════╝\n\n";

    echo "➡️  Lancer le serveur : php -S localhost:8000\n";
    echo "➡️  Ouvrir : http://localhost:8000/\n\n";

} catch (PDOException $e) {
    echo "❌ ERREUR : " . $e->getMessage() . "\n";
}
