<?php
require_once __DIR__ . '/../app/services/ArticleService.php';

$articleService = new ArticleService();
$article = null;

if (isset($_GET['id'])) {
    $article = $articleService->getArticle($_GET['id']);
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $article ? htmlspecialchars($article['title']) : 'Article non trouvé'; ?> - Lab Agent
    </title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>

<body>
    <div class="container">
        <a href="index.php" class="back-link">← Retour aux articles</a>

        <?php if ($article): ?>
            <article class="article-content">
                <h1>
                    <?php echo htmlspecialchars($article['title']); ?>
                </h1>
                <div class="meta">Publié le
                    <?php echo htmlspecialchars($article['created_at']); ?>
                </div>
                <div class="content">
                    <?php echo nl2br(htmlspecialchars($article['content'])); ?>
                </div>
            </article>
        <?php else: ?>
            <div class="error-page">
                <h1>404</h1>
                <p>Oups ! L'article que vous cherchez semble avoir disparu dans le néant numérique.</p>
                <a href="index.php" class="btn">Retour à l'accueil</a>
            </div>
        <?php endif; ?>
    </div>
</body>

</html>