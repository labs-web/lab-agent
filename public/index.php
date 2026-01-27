<?php
declare(strict_types=1);

/**
 * Point d'entrée de l'application.
 * Routeur simple + Autoloader PSR-4.
 */

// Afficher les erreurs en développement
ini_set('display_errors', '1');
error_reporting(E_ALL);

// Autoloader PSR-4 simplifié
spl_autoload_register(function (string $class): void {
    // Préfixe du namespace
    $prefix = 'App\\';
    $baseDir = __DIR__ . '/../App/';

    // Vérifier si la classe utilise notre namespace
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    // Récupérer le nom relatif de la classe
    $relativeClass = substr($class, $len);

    // Construire le chemin du fichier
    $file = $baseDir . str_replace('\\', '/', $relativeClass) . '.php';

    // Si le fichier existe, le charger
    if (file_exists($file)) {
        require $file;
    }
});

// ============================================
// ROUTEUR SIMPLE
// ============================================

use App\Controllers\ArticleController;

// Récupérer l'URI de la requête
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = rtrim($uri, '/') ?: '/';

// Définir les routes
$routes = [
    '/' => [ArticleController::class, 'index'],
    '/articles' => [ArticleController::class, 'index'],
];

// Exécuter la route correspondante
if (isset($routes[$uri])) {
    [$controllerClass, $method] = $routes[$uri];
    $controller = new $controllerClass();
    $controller->$method();
} else {
    // 404 - Page non trouvée
    http_response_code(404);
    echo '<h1>404 - Page non trouvée</h1>';
    echo '<p><a href="/">Retour à l\'accueil</a></p>';
}
