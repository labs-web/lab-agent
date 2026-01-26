---
name: ui-designer-tailwind
description: Expert en intégration HTML5 et Tailwind CSS pur. Spécialisé dans la création de maquettes statiques et de composants isolés dans le dossier /ui-kit.
---

# Expertise : UI Design & Maquettage Statique (Tailwind)

Ce skill est activé durant la **Phase 2 (Maquettage)** du cycle de développement. L'objectif est de produire des références visuelles robustes avant toute intégration logique.

## 1. Périmètre d'Action (/ui-kit)
- **Cible** : Tous les fichiers créés ou modifiés dans le répertoire `/ui-kit`.
- **Nature** : Fichiers HTML ou PHP purement statiques servant de "maquettes" de référence.
- **Indépendance** : Chaque composant doit être prévisualisable de manière autonome, en incluant ses propres dépendances (ex: CDN Tailwind) si nécessaire.

## 2. Standards d'Intégration
- **Tailwind Utility-First** : Utilisation exclusive des classes utilitaires. Interdiction de fichiers CSS personnalisés.
- **Atomic Design** : Décomposition des interfaces en Atomes (boutons), Molécules (inputs groupés) et Organismes (formulaires complets).
- **Sémantique HTML5** : Utilisation rigoureuse des balises `<nav>`, `<main>`, `<article>`, `<header>`, `<footer>` pour le SEO et l'accessibilité.
- **Responsive** : Approche **Mobile-First** systématique utilisant les breakpoints Tailwind (`md:`, `lg:`).

## 3. Gestion des Données de Maquette (Mocks)
- **Zéro Logique** : Interdiction d'appeler des Services, des Models ou d'effectuer des requêtes SQL.
- **Variables Mock** : Utiliser des variables PHP simples en haut de fichier pour simuler les différents états du composant.
- **États Visuels** : Toujours prévoir et documenter les états : "Vide", "Chargement", "Erreur" et "Succès".

## 4. Règle d'Or du Design-First
L'agent ne doit jamais proposer d'intégrer un composant dans `/src` ou `/public` tant que le rendu dans `/ui-kit` n'a pas été explicitement validé par le développeur.

## 5. Exemple de Structure Attendue (Atome)
```html
<?php
// Mock Data pour la maquette
$label = $label ?? "Bouton Action";
$type = $type ?? "primary"; // primary, danger, ghost
?>
<button class="px-5 py-2.5 rounded-lg font-medium transition-all focus:ring-4 
    <?= $type === 'primary' ? 'bg-indigo-600 text-white hover:bg-indigo-700' : '' ?>
    <?= $type === 'danger' ? 'bg-red-600 text-white hover:bg-red-700' : '' ?>">
    <?= htmlspecialchars($label) ?>
</button>