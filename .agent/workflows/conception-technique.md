---
description: Workflow d'architecture technique backend (BDD, Classes, Plan).
---

# Workflow : Conception Technique

Ce workflow planifie le code backend.

## Trigger
Validation de `/creation-ui`.

## Étapes

### Étape 1 : Modélisation des Données
- **Skill** : `concepteur-bdd`
- **Action** : Définir le schéma SQL (Tables, Colonnes, Types, Relations).
- **Output** : Script SQL de création de table (CREATE TABLE).

### Étape 2 : Structure des Classes
- **Skill** : `concepteur-technique`
- **Action** : Lister les fichiers PHP à créer selon le pattern 3-Tiers.
    - Controller (e.g., `ArticleController.php`)
    - Service (e.g., `ArticleService.php`)
    - Repository (e.g., `ArticleRepository.php`)
    - Entity (e.g., `Article.php`)
- **Output** : Plan de fichiers avec chemins.

### Checkpoint
Demander la validation du plan technique à l'utilisateur AVANT de coder.
