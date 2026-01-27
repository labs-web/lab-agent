<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Services\ArticleService;

/**
 * Controller Article - Gestion des requêtes HTTP (Tier 1).
 * Ne fait pas de logique métier ni de SQL.
 */
class ArticleController
{
    private ArticleService $service;

    public function __construct()
    {
        $this->service = new ArticleService();
    }

    /**
     * Action : Liste des articles.
     * Route : GET /articles ou GET /
     */
    public function index(): void
    {
        // Récupérer les données via le Service
        $articles = $this->service->getAllArticles();

        // Passer les données à la vue
        $pageTitle = 'Nos Articles';
        $content = $this->renderView('articles/index', [
            'articles' => $articles,
            'pageTitle' => $pageTitle
        ]);

        // Rendre le layout avec le contenu
        require __DIR__ . '/../../Views/layouts/public.php';
    }

    /**
     * Rend une vue et retourne son contenu.
     */
    private function renderView(string $viewName, array $data = []): string
    {
        extract($data);
        ob_start();
        require __DIR__ . '/../../Views/' . $viewName . '.php';
        return ob_get_clean();
    }
}
