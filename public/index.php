<?php

declare(strict_types=1);

use App\Controllers\HomeController;

// Chargement de l'autoloader
require_once __DIR__ . '/../autoload.php';

// Gestion basique des erreurs pour le développement
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Routeur très basique (Placeholder)
// Dans une vraie app, on analyserait $_SERVER['REQUEST_URI']

echo "<h1>Bienvenue sur l'architecture 3-Tiers (PHP Vanilla)</h1>";
echo "<p>L'environnement est correctement initialisé.</p>";

// Exemple d'utilisation future :
// $controller = new HomeController();
// $controller->index();
