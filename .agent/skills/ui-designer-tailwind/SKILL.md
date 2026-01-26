---
name: ui-designer-tailwind
description: Expert en intégration HTML5 et Tailwind CSS pur. Spécialisé dans la création de maquettes statiques et de composants isolés dans le dossier /ui-kit.
---

# Expertise : UI Design & Maquettage Statique (Tailwind)

Ce skill est activé durant la **Phase 2 (Maquettage)** du cycle de développement. L'objectif est de produire des références visuelles robustes avant toute intégration logique.

## 1. Périmètre d'Action (/ui-kit)
- **Cible** : Tous les fichiers créés ou modifiés dans le répertoire `/ui-kit`.
- **Nature** : Fichiers PHP complets (Autonomes) contenant toute la structure HTML5 nécessaire (`<html>`, `<head>`, `<body>`).
- **Indépendance** : Chaque fichier doit être **exécutable et affichable** directement dans le navigateur. Il doit obligatoirement inclure le CDN Tailwind CSS.

## 2. Standards d'Intégration
- **Tailwind Utility-First** : Utilisation exclusive des classes utilitaires via CDN pour le prototypage.
- **CDN Obligatoire** : Inclure systématiquement `<script src="https://cdn.tailwindcss.com"></script>` dans le `<head>`.
- **Atomic Design** : Décomposition des interfaces en Atomes (boutons), Molécules (inputs groupés) et Organismes (formulaires complets).
- **Sémantique HTML5** : Utilisation rigoureuse des balises de structure pour le SEO et l'accessibilité.

## 3. Gestion des Données de Maquette (Mocks)
- **Zéro Logique** : Interdiction d'appeler des Services ou des Models.
- **Variables Mock** : Utiliser des variables PHP en haut de fichier pour simuler les états.
- **États Visuels** : Prévoir les états : "Vide", "Chargement", "Erreur" et "Succès".

## 4. Règle d'Or du Design-First
L'agent ne doit jamais proposer d'intégrer un composant dans l'application finale tant que la maquette dans `/ui-kit` n'est pas validée visuellement.

## 5. Exemple de Structure Attendue (Fichier Complet)
```php
<?php
// 1. Mock Data (Configuration de la maquette)
$label = $label ?? "Bouton Action";
$type = $type ?? "primary"; // primary, danger, ghost
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Composant UI-Kit</title>
    <!-- CDN Tailwind CSS pour rendu automome -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-8 bg-gray-50 flex justify-center items-start min-h-screen">

    <!-- Début du Composant -->
    <button class="px-5 py-2.5 rounded-lg font-medium transition-all focus:ring-4 
        <?= $type === 'primary' ? 'bg-indigo-600 text-white hover:bg-indigo-700' : '' ?>
        <?= $type === 'danger' ? 'bg-red-600 text-white hover:bg-red-700' : '' ?>">
        <?= htmlspecialchars($label) ?>
    </button>
    <!-- Fin du Composant -->

</body>
</html>