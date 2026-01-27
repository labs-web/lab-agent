<?php

declare(strict_types=1);

namespace App\Models\Entities;

use DateTimeImmutable;

/**
 * Entité représentant un Article.
 * Utilise la promotion de constructeur et les propriétés readonly de PHP 8.2.
 */
readonly class Article
{
    public function __construct(
        public int $id,
        public string $title,
        public string $slug,
        public string $excerpt,
        public string $content,
        public string $imageUrl,
        public string $authorName,
        public DateTimeImmutable $publishedAt
    ) {
    }
}
