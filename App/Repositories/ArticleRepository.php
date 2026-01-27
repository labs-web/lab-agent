<?php
declare(strict_types=1);

namespace App\Repositories;

use App\Core\Database;
use App\Entities\Article;

/**
 * Repository Article - Accès aux données (Tier 3).
 * Seule classe autorisée à écrire du SQL.
 */
class ArticleRepository
{
    private \PDO $pdo;

    public function __construct()
    {
        $this->pdo = Database::getInstance()->getConnection();
    }

    /**
     * Récupère tous les articles, triés par date de publication (DESC).
     * 
     * @return Article[]
     */
    public function findAll(): array
    {
        $sql = "SELECT * FROM articles ORDER BY date_publication DESC";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        $articles = [];
        while ($row = $stmt->fetch()) {
            $articles[] = Article::fromArray($row);
        }

        return $articles;
    }

    /**
     * Récupère un article par son ID.
     */
    public function findById(int $id): ?Article
    {
        $sql = "SELECT * FROM articles WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':id' => $id]);

        $row = $stmt->fetch();
        if ($row === false) {
            return null;
        }

        return Article::fromArray($row);
    }

    /**
     * Compte le nombre total d'articles.
     */
    public function count(): int
    {
        $sql = "SELECT COUNT(*) FROM articles";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        return (int) $stmt->fetchColumn();
    }
}
