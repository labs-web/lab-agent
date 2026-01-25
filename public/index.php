<?php
require_once __DIR__ . '/../app/services/ArticleService.php';

$articleService = new ArticleService();
$articles = $articleService->getAllArticles();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des articles</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <h1>Nos Articles</h1>
        <div class="article-list">
            <?php if (!empty($articles)): ?>
                <?php foreach ($articles as $article): ?>
                    <div class="article-card">
                        <h2><a href="article.php?id=<?php echo $article['id']; ?>">
                                <?php echo htmlspecialchars($article['title']); ?>
                            </a></h2>
                        <div class="meta">Publié le
                            <?php echo htmlspecialchars($article['created_at']); ?>
                        </div>
                        <p>
                            <?php echo substr(htmlspecialchars($article['content']), 0, 150) . '...'; ?>
                        </p>
                        <a href="article.php?id=<?php echo $article['id']; ?>" class="read-more">Lire la suite</a>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Aucun article disponible pour le moment.</p>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>