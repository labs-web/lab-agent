<?php
/** 
 * Vue : Liste des articles
 * @var Article[] $articles
 * @var string $pageTitle
 */

use App\Entities\Article;
?>

<!-- Page Header -->
<div class="mb-10">
    <h1 class="text-4xl font-bold text-gray-800 mb-3">
        <?= htmlspecialchars($pageTitle) ?>
    </h1>
    <p class="text-gray-500 text-lg">Découvrez nos dernières publications sur le développement web</p>
</div>

<!-- Articles Grid -->
<?php if (empty($articles)): ?>
    <div class="bg-white rounded-xl shadow-md p-8 text-center">
        <p class="text-gray-500">Aucun article disponible pour le moment.</p>
    </div>
<?php else: ?>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php foreach ($articles as $article): ?>
            <!-- Article Card -->
            <article
                class="group bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100 hover:border-blue-200 transform hover:-translate-y-1">
                <div class="relative aspect-video bg-gradient-to-br from-gray-200 to-gray-300 overflow-hidden">
                    <?php if ($article->image): ?>
                        <img src="<?= htmlspecialchars($article->image) ?>" alt="<?= htmlspecialchars($article->titre) ?>"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <?php else: ?>
                        <img src="https://picsum.photos/seed/<?= $article->id ?>/400/225"
                            alt="<?= htmlspecialchars($article->titre) ?>"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <?php endif; ?>
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </div>
                <div class="p-5">
                    <h3 class="text-xl font-bold text-gray-800 mb-2 group-hover:text-blue-600 transition-colors duration-200">
                        <?= htmlspecialchars($article->titre) ?>
                    </h3>
                    <p class="text-sm text-gray-500 line-clamp-2 mb-4 leading-relaxed">
                        <?= htmlspecialchars($article->getShortResume(120)) ?>
                    </p>
                    <div class="flex items-center justify-between pt-3 border-t border-gray-100">
                        <span class="text-xs text-gray-400 flex items-center gap-1">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                            <?= $article->getFormattedDate('d M Y') ?>
                        </span>
                        <a href="/article/<?= $article->id ?>"
                            class="inline-flex items-center gap-1 text-blue-500 hover:text-blue-600 font-semibold text-sm transition-colors duration-200 group/link">
                            Lire
                            <svg class="w-4 h-4 transition-transform duration-200 group-hover/link:translate-x-1" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
<?php endif; ?>