<?php

declare(strict_types=1);

namespace App\Models\Repositories;

use App\Models\Entities\Article;
use DateTimeImmutable;

/**
 * Repository responsable de l'accès aux données des Articles.
 * Pour l'instant, retourne des données bouchonnées (Mock).
 */
class ArticleRepository
{
    /**
     * @param \PDO $pdo Connexion à la base de données
     */
    public function __construct(
        private \PDO $pdo
    ) {
    }

    /**
     * Récupère la liste de tous les articles publiés, triés par date décroissante.
     * 
     * @return Article[]
     */
    public function findAllPublished(): array
    {
        $sql = "SELECT * FROM articles ORDER BY published_at DESC";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        $articles = [];
        while ($row = $stmt->fetch()) {
            $articles[] = new Article(
                id: (int) $row['id'],
                title: $row['title'],
                slug: $row['slug'],
                excerpt: $row['excerpt'],
                content: $row['content'],
                imageUrl: $row['image_url'], // Attention au mapping snake_case -> camelCase
                authorName: $row['author_name'],
                publishedAt: new DateTimeImmutable($row['published_at'])
            );
        }

        return $articles;
    }
}
