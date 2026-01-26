---
trigger: always_on
globs: "**/*"
---

# Stack Technique et Architecture 3-Tiers

## 1. Stack Backend (PHP & Données)
- **Langage** : PHP 8.2+ Vanilla (Programmation Orientée Objet obligatoire).
- **Interdiction** : Aucun framework lourd (pas de Laravel, Symfony, etc.) ni ORM (pas d'Eloquent ou Doctrine).
- **Accès Données** : Utilisation exclusive de **PDO** (PHP Data Objects) pour MySQL.

## 2. Stack Frontend (UI & UX)
- **Modèle de Rendu** : **SSR** (Server-Side Rendering) intégral. Toute la logique d'affichage est générée par PHP.
- **Styling** : **Tailwind CSS** via classes utilitaires. Interdiction de fichiers CSS personnalisés (`.css`) ou de balises `<style>`.
- **Interdictions Frontend** : 
    - PAS de frameworks JS (React, Vue, Alpine.js, etc.).
    - PAS d'AJAX ni de Fetch API. Toute interaction utilisateur doit passer par un rechargement de page (formulaires `POST/GET` standards).
- **JS Vanilla** : Uniquement pour des manipulations DOM mineures et immédiates (ex: toggle de visibilité).

## 3. Architecture 3-Tiers (Séparation des Responsabilités)
L'application doit être scrupuleusement découpée en trois couches hermétiques :
1.  **Tier Présentation (Views/Controllers)** : Gère l'affichage HTML et le routage des requêtes.
2.  **Tier Logique (Services)** : Contient la logique métier pure, les calculs et les validations.
3.  **Tier Données (Models)** : Seule couche autorisée à contenir du SQL brut via PDO.

## 4. Structure des Dossiers Standard
Tout nouveau fichier doit être placé selon cette arborescence :
- `/public` : Racine Web (index.php, images, assets).
- `/config` : Paramètres de base de données et constantes.
- `/Controllers` : Orchestration des requêtes.
- `/Services` : Cœur de la logique métier.
- `/Models` : Gestion de la persistance (SQL).
- `/ui-kit` : Composants UI statiques.

## 5. Directive de Conformité
L'agent doit systématiquement refuser ou corriger toute proposition qui introduirait une dépendance externe non sollicitée ou une fuite de logique (ex: SQL dans une Vue).