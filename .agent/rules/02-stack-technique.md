# Stack Technique et Architecture 3-Tiers

## 1. Stack Backend (PHP & Données)
- **Langage** : PHP 8.2+ Vanilla (Programmation Orientée Objet obligatoire).
- **Interdiction** : Aucun framework lourd (pas de Laravel, Symfony, etc.) ni ORM (pas d'Eloquent ou Doctrine).
- **Accès Données** : Utilisation exclusive de **PDO** (PHP Data Objects) pour MySQL.

## 2. Stack Frontend (UI & UX)
- **Modèle de Rendu** : **SSR** (Server-Side Rendering) intégral. Toute la logique d'affichage est générée par PHP.
- **Styling** : **Tailwind CSS** via classes utilitaires (Dossier `ui-kit/`). Interdiction de fichiers CSS personnalisés (`.css`).
- **Interdictions Frontend** : 
    - PAS de frameworks JS (React, Vue, Alpine.js, etc.).
    - PAS d'AJAX ni de Fetch API (Sauf demande explicite très ciblée). Toute interaction utilisateur doit passer par un rechargement de page (formulaires `POST/GET` standards).
- **JS Vanilla** : Uniquement pour des manipulations DOM mineures et immédiates (ex: toggle de visibilité).

## 3. Architecture 3-Tiers (Séparation des Responsabilités)
L'application doit être scrupuleusement découpée en trois couches hermétiques :
1.  **Tier Présentation (Controllers/Views)** : Gère l'affichage HTML et le routage des requêtes.
2.  **Tier Logique (Services)** : Contient la logique métier pure, les calculs et les validations.
3.  **Tier Données (Models)** : Seule couche autorisée à contenir du SQL brut via PDO.

## 4. Structure des Dossiers Standard
Tout nouveau fichier doit être placé selon cette arborescence :
- `/public` : Racine Web.
- `/config` : Configuration.
- `/App` :
    - `/Controllers` (Présentation)
    - `/Services` (Logique Métier)
    - `/Models` (Données)
        - `/Entities` (DTOs typés)
        - `/Repositories` (SQL/PDO)
- `/Views` : Templates HTML.
- `/ui-kit` : Composants UI statiques (Tailwind).
