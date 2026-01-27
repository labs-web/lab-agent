<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Repositories\ArticleRepository;
use App\Models\Entities\Article;

/**
 * Service Métier - Gestion des Articles.
 * Orchestre la récupération et le traitement des articles.
 */
class ArticleService
{
    public function __construct(
        private ArticleRepository $articleRepository
    ) {
    }

    /**
     * Récupère la liste des articles pour la page d'accueil publique.
     * 
     * @return Article[]
     */
    public function getPublicArticles(): array
    {
        // Ici, on pourrait ajouter de la logique métier (filtrage supplémentaire, cache, etc.)
        return $this->articleRepository->findAllPublished();
    }
}
