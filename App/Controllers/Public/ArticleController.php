<?php

declare(strict_types=1);

namespace App\Controllers\Public;

use App\Services\ArticleService;
use App\Models\Repositories\ArticleRepository;

class ArticleController
{
    private ArticleService $articleService;

    public function __construct()
    {
        // 1. Chargement de la configuration
        $config = require __DIR__ . '/../../../config/database.php';

        // 2. Instanciation de PDO (Connexion BDD)
        $dsn = "mysql:host={$config['host']};dbname={$config['dbname']};charset={$config['charset']}";
        $pdo = new \PDO($dsn, $config['user'], $config['password'], $config['options']);

        // 3. Injection de Dépendance (Manuelle)
        // Controller -> Service -> Repository -> PDO
        $articleRepository = new ArticleRepository($pdo);
        $this->articleService = new ArticleService($articleRepository);
    }

    public function index(): void
    {
        // 1. Récupération des données via le Service
        $articles = $this->articleService->getPublicArticles();

        // 2. Préparation des variables pour la vue
        // Les variables définies ici seront accessibles dans le fichier de vue
        $pageTitle = "Nos derniers articles";

        // 3. Chargement de la vue
        // Le chemin est relatif à la racine du projet
        require_once __DIR__ . '/../../../Views/Public/articles/index.php';
    }
}
