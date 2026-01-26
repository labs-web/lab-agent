<?php

declare(strict_types=1);

/**
 * Autoloader simple conforme PSR-4 pour l'architecture sans framework.
 * Mappe le namespace racine "App\" vers le dossier courant (racine du projet).
 */
spl_autoload_register(function (string $class): void {
    // Préfixe de base pour le namespace
    $prefix = 'App\\';

    // Répertoire de base pour le namespace (racine du projet)
    $base_dir = __DIR__ . '/';

    // Vérifie si la classe utilise le préfixe
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        // Non, passer au prochain autoloader
        return;
    }

    // Récupère le nom relatif de la classe
    $relative_class = substr($class, $len);

    // Remplace les séparateurs de namespace par des séparateurs de répertoire,
    // ajoute .php
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    // Si le fichier existe, le charger
    if (file_exists($file)) {
        require $file;
    }
});
