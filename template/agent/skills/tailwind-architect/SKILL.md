---
name: tailwind-architect
description: Expert en Design System, Atomic Design et intégration Tailwind CSS sans JS (SSR Focus).
---

# Expertise : UI-Kit & Tailwind Architecture

Ce skill est activé pour la création du "Tier 1" (Presentation Layer) et spécifiquement lors de la phase de prototypage statique dans `ui-kit/`.

## 1. Principes de Composants (Atomic Design)
- **Décomposition** : Identifie et crée des composants isolés (Atomes : Boutons, Badges ; Molécules : Champs de formulaire, Cartes).
- **Réutilisabilité** : Pense en termes de "Slots" PHP. Même en Vanilla, structure tes composants pour qu'ils acceptent des variables simples (ex: `$title`, `$slotContent`).
- **Isolation Statique** : Chaque composant doit être testable avec des données en dur (Mocks) avant d'être lié à la base de données.

## 2. Standards Tailwind (Utility-First)
- **Zéro Arbitraire** : Favorise les classes de la configuration standard. Évite les valeurs arbitraires comme `h-[123px]` sauf nécessité absolue.
- **Mobile-First** : Écris toujours les classes pour mobile d'abord, puis utilise les modificateurs `md:`, `lg:`, `xl:` pour le responsive.
- **États Interactifs** : Implémente systématiquement les états `:hover`, `:focus-within`, `:active`, et `:disabled` via les classes Tailwind correspondantes.
- **Group & Peer** : Utilise les utilitaires `group` et `peer` pour gérer les interactions complexes entre éléments parents/enfants sans JavaScript.

## 3. Sémantique & Accessibilité (A11y)
- **HTML5 Sémantique** : Utilise les balises `<nav>`, `<header>`, `<footer>`, `<main>`, `<article>` au lieu de simples `<div>`.
- **Contrastes** : Assure-toi que les combinaisons de couleurs respectent les standards WCAG.
- **États de Formulaire** : Utilise les classes `focus:ring` et `ring-offset` pour garantir une navigation au clavier visible et propre.

## 4. Gestion des États Visuels (Sans AJAX)
Puisque nous n'utilisons pas de Fetch/AJAX, les états doivent être prévus dans le HTML :
- **Loading State** : Prépare des "Skeletons" en Tailwind (via la classe `animate-pulse`).
- **Empty State** : Crée des composants dédiés pour l'affichage "Aucun résultat trouvé".
- **Feedback** : Utilise des bannières d'alerte (Success/Error) conçues pour s'afficher après une redirection de formulaire (Flash messages).

## 5. Exemple de Composant UI-Kit (ui-kit/button.php)
```html
<?php
// Mock variables pour démo statique
$type = $type ?? 'primary';
$label = $label ?? 'Valider';
$styles = [
    'primary' => 'bg-indigo-600 hover:bg-indigo-700 text-white',
    'danger'  => 'bg-red-600 hover:bg-red-700 text-white',
    'outline' => 'border border-gray-300 hover:bg-gray-50 text-gray-700'
];
?>
<button class="px-4 py-2 rounded-lg font-medium transition-colors focus:ring-2 focus:ring-offset-2 <?= $styles[$type] ?>">
    <?= htmlspecialchars($label) ?>
</button>