-- ============================================
-- Script SQL : Création de la table articles
-- Base de données : lab_agent
-- ============================================

-- Créer la base de données si elle n'existe pas
CREATE DATABASE IF NOT EXISTS lab_agent CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE lab_agent;

-- Supprimer la table si elle existe (pour reset)
DROP TABLE IF EXISTS articles;

-- Créer la table articles
CREATE TABLE articles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(255) NOT NULL,
    resume TEXT,
    contenu TEXT NOT NULL,
    image VARCHAR(255) DEFAULT NULL,
    date_publication DATETIME DEFAULT CURRENT_TIMESTAMP,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================
-- Données de test
-- ============================================

INSERT INTO articles (titre, resume, contenu, date_publication) VALUES
(
    'Introduction à TailwindCSS',
    'Découvrez comment Tailwind révolutionne le développement frontend avec ses classes utilitaires puissantes et sa philosophie utility-first.',
    'TailwindCSS est un framework CSS utility-first qui permet de construire des interfaces modernes rapidement. Contrairement à Bootstrap, Tailwind ne propose pas de composants prédéfinis mais des classes utilitaires de bas niveau.',
    '2026-01-27 10:00:00'
),
(
    'Architecture 3-Tiers en PHP',
    'Apprenez à structurer vos applications PHP avec le pattern MVC et les bonnes pratiques de développement orienté objet.',
    'L''architecture 3-Tiers sépare votre application en trois couches distinctes : Présentation (Controllers), Logique (Services) et Données (Repositories). Cette séparation facilite la maintenance et les tests.',
    '2026-01-25 14:30:00'
),
(
    'Les bases de PDO',
    'PDO est l''extension PHP standard pour accéder aux bases de données de manière sécurisée et portable.',
    'PDO (PHP Data Objects) fournit une interface uniforme pour accéder à différentes bases de données. L''utilisation de requêtes préparées est essentielle pour prévenir les injections SQL.',
    '2026-01-20 09:15:00'
),
(
    'Sécurité des applications web',
    'Les meilleures pratiques pour protéger vos applications contre les injections SQL, XSS et autres vulnérabilités.',
    'La sécurité web est primordiale. Utilisez toujours des requêtes préparées, échappez les sorties HTML avec htmlspecialchars(), et validez toutes les entrées utilisateur.',
    '2026-01-15 16:45:00'
),
(
    'Git pour les débutants',
    'Maîtrisez les commandes essentielles de Git pour gérer efficacement vos projets de développement.',
    'Git est un système de contrôle de version distribué. Les commandes de base incluent git init, git add, git commit, git push et git pull. Créez des branches pour travailler sur des fonctionnalités.',
    '2026-01-10 11:00:00'
),
(
    'API REST avec PHP',
    'Créez des API RESTful robustes et bien structurées avec PHP natif et les standards HTTP.',
    'Une API REST utilise les méthodes HTTP (GET, POST, PUT, DELETE) pour manipuler des ressources. Retournez des réponses JSON avec les codes HTTP appropriés (200, 201, 404, etc.).',
    '2026-01-05 08:30:00'
);

-- Vérifier les données insérées
SELECT * FROM articles;
