<?php
declare(strict_types=1);

namespace App\Services;

use App\Entities\Article;
use App\Repositories\ArticleRepository;

/**
 * Service Article - Logique métier (Tier 2).
 * Ne fait pas de SQL, délègue au Repository.
 */
class ArticleService
{
    private ArticleRepository $repository;

    public function __construct()
    {
        $this->repository = new ArticleRepository();
    }

    /**
     * Récupère tous les articles pour l'affichage.
     * 
     * @return Article[]
     */
    public function getAllArticles(): array
    {
        return $this->repository->findAll();
    }

    /**
     * Récupère un article par son ID.
     */
    public function getArticleById(int $id): ?Article
    {
        return $this->repository->findById($id);
    }

    /**
     * Compte le nombre total d'articles.
     */
    public function countArticles(): int
    {
        return $this->repository->count();
    }
}
