<?php
/**
 * @var App\Models\Entities\Article[] $articles
 * @var string $pageTitle
 */
?>
<!DOCTYPE html>
<html lang="fr" class="h-full bg-gray-50">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= htmlspecialchars($pageTitle) ?> - MyBlog
    </title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-full flex flex-col">

    <!-- HEADER -->
    <header class="flex-shrink-0">
        <nav class="bg-white shadow-md">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <div class="flex-shrink-0 flex items-center">
                            <span class="text-2xl font-bold text-indigo-600">MyBlog</span>
                        </div>
                        <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                            <a href="#"
                                class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Accueil</a>
                            <a href="#"
                                class="border-indigo-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Articles</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- MAIN PAGE CONTENT -->
    <main class="flex-grow">
        <div class="max-w-7xl mx-auto py-10 px-4 sm:px-6 lg:px-8">

            <div class="text-center mb-12">
                <h1 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                    <?= htmlspecialchars($pageTitle) ?>
                </h1>
                <p class="mt-3 max-w-2xl mx-auto text-xl text-gray-500 sm:mt-4">
                    Explorez nos réflexions sur la technologie, le design et l'architecture logicielle.
                </p>
            </div>

            <!-- Grid of Article Cards -->
            <?php if (empty($articles)): ?>
                <div class="text-center text-gray-500">
                    <p>Aucun article publié pour le moment.</p>
                </div>
            <?php else: ?>
                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                    <?php foreach ($articles as $article): ?>
                        <article
                            class="flex flex-col overflow-hidden rounded-lg shadow-lg bg-white hover:shadow-xl transition-shadow duration-300">
                            <div class="flex-shrink-0">
                                <img class="h-48 w-full object-cover" src="<?= htmlspecialchars($article->imageUrl) ?>"
                                    alt="<?= htmlspecialchars($article->title) ?>">
                            </div>
                            <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                                <div class="flex-1">
                                    <p class="text-sm font-medium text-indigo-600">Article</p>
                                    <a href="#" class="block mt-2">
                                        <p class="text-xl font-semibold text-gray-900">
                                            <?= htmlspecialchars($article->title) ?>
                                        </p>
                                        <p class="mt-3 text-base text-gray-500">
                                            <?= htmlspecialchars($article->excerpt) ?>
                                        </p>
                                    </a>
                                </div>
                                <div class="mt-6 flex items-center">
                                    <div class="flex-shrink-0">
                                        <span class="sr-only">Auteur</span>
                                        <div
                                            class="h-10 w-10 rounded-full bg-gray-200 flex items-center justify-center text-gray-500 font-bold">
                                            <?= htmlspecialchars(substr($article->authorName, 0, 2)) ?>
                                        </div>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900">
                                            <?= htmlspecialchars($article->authorName) ?>
                                        </p>
                                        <div class="flex space-x-1 text-sm text-gray-500">
                                            <time datetime="<?= $article->publishedAt->format('Y-m-d') ?>">
                                                <?= $article->publishedAt->format('d M Y') ?>
                                            </time>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-6">
                                    <!-- Bouton UX/UI Validé -->
                                    <a href="#"
                                        class="group w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md text-sm font-semibold text-indigo-700 bg-indigo-100 hover:bg-indigo-600 hover:text-white transition-all duration-300 ease-in-out">
                                        <span>Lire l'article</span>
                                        <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform duration-300"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </main>

    <!-- FOOTER -->
    <footer class="bg-gray-800 text-white mt-auto">
        <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center">
                <div>
                    <p class="text-sm">&copy;
                        <?= date('Y') ?> MyBlog. Tous droits réservés.
                    </p>
                </div>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-gray-300">Mentions légales</a>
                    <a href="#" class="text-gray-400 hover:text-gray-300">Contact</a>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>