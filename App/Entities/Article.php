<?php
declare(strict_types=1);

namespace App\Entities;

/**
 * Entity Article - DTO représentant un article.
 */
class Article
{
    public function __construct(
        public readonly ?int $id,
        public readonly string $titre,
        public readonly ?string $resume,
        public readonly string $contenu,
        public readonly ?string $image,
        public readonly ?\DateTimeImmutable $datePublication,
        public readonly ?\DateTimeImmutable $createdAt = null,
        public readonly ?\DateTimeImmutable $updatedAt = null
    ) {
    }

    /**
     * Crée une instance Article depuis un tableau associatif (résultat PDO).
     */
    public static function fromArray(array $data): self
    {
        return new self(
            id: isset($data['id']) ? (int) $data['id'] : null,
            titre: $data['titre'] ?? '',
            resume: $data['resume'] ?? null,
            contenu: $data['contenu'] ?? '',
            image: $data['image'] ?? null,
            datePublication: isset($data['date_publication'])
            ? new \DateTimeImmutable($data['date_publication'])
            : null,
            createdAt: isset($data['created_at'])
            ? new \DateTimeImmutable($data['created_at'])
            : null,
            updatedAt: isset($data['updated_at'])
            ? new \DateTimeImmutable($data['updated_at'])
            : null
        );
    }

    /**
     * Retourne le résumé tronqué pour l'affichage carte.
     */
    public function getShortResume(int $maxLength = 100): string
    {
        if ($this->resume === null) {
            return '';
        }
        if (mb_strlen($this->resume) <= $maxLength) {
            return $this->resume;
        }
        return mb_substr($this->resume, 0, $maxLength) . '...';
    }

    /**
     * Retourne la date formatée pour l'affichage.
     */
    public function getFormattedDate(string $format = 'd M Y'): string
    {
        if ($this->datePublication === null) {
            return '';
        }
        return $this->datePublication->format($format);
    }
}
