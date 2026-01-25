# Spécifications de la Stack Technique

Ce document définit les standards techniques stricts pour le développement de l'application.

## 1. Vue d'Ensemble
- **Architecture** : Web Classique (Server-Side Rendering)
- **Langage Principal** : PHP (Backend) / HTML & JS Vanilla (Frontend)

## 2. Frontend (Tier Présentation)
- **Structure** : HTML5 sémantique.
- **Styling** : Tailwind CSS (via CDN ou Build process simple).
- **Scripting** : JavaScript Vanilla (DOM Manipulation simple si nécessaire).
- **Interdit** : 
  - Pas de Framework JS (React, Vue, Angular interdits).
  - Pas d'AJAX / Fetch (Les soumissions de formulaires se font par rechargement de page PHP standard).

## 3. Backend (Tier Logique)
- **Langage** : PHP 8+ (Programmation Orientée Objet).
- **Structure** : Classes PHP, Autoloading (Composer ou natif).
- **Patterns** : MVC (Model-View-Controller) manuel sans framework lourd.

## 4. Données (Tier Data)
- **Base de Données** : MySQL.
- **Accès Données** : PDO (PHP Data Objects) pour la sécurité et la portabilité.

## 5. Structure des Dossiers Attendue (Suggérée)
```
/public       # Racine Web (index.php, css, images)
/src
  /Controllers
  /Models
  /Views      # Templates HTML/PHP
  /Services
/config       # Configuration DB
```
