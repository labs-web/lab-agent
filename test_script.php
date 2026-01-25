<?php
require_once __DIR__ . '/app/services/ArticleService.php';

echo "Test du Service Article...\n";

$service = new ArticleService();

// Test avec un ID valide (supposons que l'ID 1 existe après exécution du SQL)
$id = 1;
echo "Récupération de l'article $id...\n";
try {
    $article = $service->getArticle($id);
    if ($article) {
        echo "SUCCESS: Article trouvé : " . $article['title'] . "\n";
    } else {
        echo "WARNING: Article $id non trouvé (Avez-vous exécuté setup_db.sql ?)\n";
    }
} catch (Exception $e) {
    echo "ERROR: " . $e->getMessage() . "\n";
}

// Test avec un ID invalide
$id_invalide = 9999;
echo "Récupération de l'article $id_invalide (inexistant)...\n";
$article = $service->getArticle($id_invalide);
if ($article === false) {
    echo "SUCCESS: Article non trouvé comme prévu.\n";
} else {
    echo "INFO: Résultat pour ID invalide : " . var_export($article, true) . "\n";
}

// Test de getAllArticles
echo "Récupération de tous les articles...\n";
$articles = $service->getAllArticles();
if (count($articles) > 0) {
    echo "SUCCESS: " . count($articles) . " articles trouvés.\n";
} else {
    echo "WARNING: Aucun article trouvé.\n";
}
