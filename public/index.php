<?php

declare(strict_types=1);

// Chargement de l'autoloader PSR-4
require_once __DIR__ . '/../autoload.php';

use App\Controllers\Public\ArticleController;

// Récupération de l'URI demandée
$requestUri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);

try {
    // Routeur basique (Switch-Case)
    switch ($requestUri) {
        case '/':
        case '/index.php':
        case '/articles':
            // Route par défaut : Liste des articles
            (new ArticleController())->index();
            break;

        default:
            // Gestion erreur 404
            http_response_code(404);
            echo "<h1>404 - Page non trouvée</h1>";
            echo "<p>La ressource demandée n'existe pas.</p>";
            echo "<a href='/'>Retour à l'accueil</a>";
            break;
    }
} catch (Throwable $e) {
    // Gestion globale des erreurs (500)
    http_response_code(500);
    echo "<h1>Erreur Serveur</h1>";
    echo "<p>" . htmlspecialchars($e->getMessage()) . "</p>";
}
