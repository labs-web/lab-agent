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
        <?php echo $article ? htmlspecialchars($article['title']) : 'Article non trouvé'; ?>
    </title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
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
            <div class="error">
                <h1>Article introuvable</h1>
                <p>Désolé, l'article demandé n'existe pas.</p>
            </div>
        <?php endif; ?>
    </div>
</body>

</html>