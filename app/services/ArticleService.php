<?php
require_once __DIR__ . '/../data/ArticleRepository.php';

class ArticleService
{
    private $articleRepository;

    public function __construct()
    {
        $this->articleRepository = new ArticleRepository();
    }

    public function getArticle($id)
    {
        // Validation basique
        if (!is_numeric($id) || $id <= 0) {
            return null; // Ou lever une exception
        }

        return $this->articleRepository->find($id);
    }
}
