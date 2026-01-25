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
    <title>Nos Articles - Lab Agent</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Preconnect for improved font performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>

<body>

    <div class="container">
        <header class="hero">
            <h1>Exploration & Innovation</h1>
            <p>Découvrez nos dernières analyses, tutoriels et réflexions sur le développement d'agents IA et
                l'architecture logicielle de pointe.</p>
        </header>

        <div class="article-list">
            <?php if (!empty($articles)): ?>
                <?php foreach ($articles as $article): ?>
                    <article class="article-card">
                        <h2>
                            <a href="article.php?id=<?php echo $article['id']; ?>">
                                <?php echo htmlspecialchars($article['title']); ?>
                            </a>
                        </h2>
                        <div class="meta">
                            <span>Publié le <?php echo htmlspecialchars($article['created_at']); ?></span>
                        </div>
                        <p>
                            <?php echo substr(htmlspecialchars($article['content']), 0, 140) . '...'; ?>
                        </p>
                        <a href="article.php?id=<?php echo $article['id']; ?>" class="read-more">Lire l'article</a>
                    </article>
                <?php endforeach; ?>
            <?php else: ?>
                <div style="grid-column: 1 / -1; text-align: center;">
                    <p>Aucun article disponible pour le moment.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>