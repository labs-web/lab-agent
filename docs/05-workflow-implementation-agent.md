# Workflow d'Implémentation de l'Agent ("UI-First")

Ce document décrit la méthodologie stricte suivie par l'Agent AI pour développer de nouvelles fonctionnalités sur le projet. Cette approche garantit la qualité du code, la validation par étapes et le respect de l'architecture 3-Tiers.

## Philosophie : UI-First & Validation Continue

L'agent ne code jamais "tout d'un coup". Il découpe chaque demande complexe en trois phases distinctes, avec des points de contrôle (CHECKPOINTS) obligatoires où l'intervention humaine est requise pour valider et passer à la suite.

---

## Phase 1 : Analyse et Conception (Rôle : UI Designer)

Avant d'écrire la moindre ligne de code, l'agent analyse la demande pour identifier les impacts visuels.

1.  **Scan de l'existant** : L'agent consulte le `ui-kit/components-manifest.yaml` pour voir quels composants sont déjà disponibles.
2.  **Proposition** : Il liste les composants manquants à créer (Atoms, Molécules, Pages).
3.  **Livrable** : Plan d'action UI.

> **🛑 CHECKPOINT 1** : L'agent s'arrête et demande : *"Validez-vous la liste des composants à créer ?"*. Tant que le développeur ne valide pas, aucun fichier n'est créé.

---

## Phase 2 : Prototypage Statique (Rôle : UI Integrator)

Une fois la liste validée, l'agent crée les interfaces en mode "Dummy" (fictif).

1.  **Isolation** : Travail exclusif dans le dossier `ui-kit/`.
2.  **Technologie** : HTML5 sémantique + Tailwind CSS pur.
3.  **Données Mocks** : Aucun PHP dynamique. Utilisation de textes en dur et d'images placeholders pour simuler le rendu final.
4.  **Livrable** : Fichiers `.html` prévisualisables directement dans le navigateur.

> **🛑 CHECKPOINT 2** : L'agent s'arrête et demande : *"Le design est-il conforme ? Passe-t-on au code métier ?"*. Le développeur doit ouvrir les fichiers HTML, vérifier le responsive et le style.

---

## Phase 3 : Intégration Backend (Rôle : Backend Architect)

Une fois le design validé (et seulement à ce moment-là), l'agent implémente la logique réelle.

Il construit l'application couche par couche, en suivant le sens du flux de données :

1.  **Tier 3 - Données (Models)** :
    *   Création des **Entities** (DTO typés).
    *   Création des **Repositories** (SQL/PDO).
    *   *Note* : Si la DB n'est pas prête, l'agent crée des "Mock Data" dans le Repository pour que l'app fonctionne immédiatement.

2.  **Tier 2 - Logique (Services)** :
    *   Création du **Service** qui manipule les repository et applique les règles métier.

3.  **Tier 1 - Présentation (Controllers & Views)** :
    *   Création du **Controller** qui appelle le Service.
    *   Création de la **Vue PHP** (`Views/`) en récupérant le HTML du `ui-kit` validé en Phase 2 et en injectant les variables PHP.

---

## Tableau Récapitulatif des Rôles

| Phase            | Rôle Agent            | Dossiers Impactés           | Outils         |
| :--------------- | :-------------------- | :-------------------------- | :------------- |
| **1. Analyse**   | Consultant / Designer | `ui-kit/manifest`           | Lecture seule  |
| **2. Prototype** | Intégrateur Frontend  | `ui-kit/`                   | HTML, Tailwind |
| **3. Backend**   | Développeur Senior    | `App/`, `Views/`, `public/` | PHP 8.2, SQL   |

Cette méthode assure que **80% des problèmes de design sont réglés avant même d'écrire la logique PHP**, réduisant drastiquement le temps de refactoring.
