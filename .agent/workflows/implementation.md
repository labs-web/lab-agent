---
description: Workflow d'implémentation du code PHP backend (3-Tiers).
---

# Workflow : Implémentation

Ce workflow produit le code backend fonctionnel.

## Trigger
Validation de `/conception-technique`.

## Étapes

### Étape 1 : Couche Données (Tier 3)
- **Skill** : `developpeur-php` + `concepteur-bdd`
- **Actions** :
    1. Exécuter le script SQL (CREATE TABLE).
    2. Créer l'Entity (DTO typé avec `readonly`).
    3. Créer le Repository (requêtes PDO préparées).
- **Output** : Fichiers Entity et Repository fonctionnels.

### Étape 2 : Couche Logique (Tier 2)
- **Skill** : `developpeur-php`
- **Action** : Implémenter le Service (logique métier, validations).
- **Output** : Fichier Service fonctionnel.

### Étape 3 : Couche Présentation (Tier 1)
- **Skill** : `integrateur-fullstack`
- **Actions** :
    1. Créer le Controller.
    2. Connecter la Vue statique aux données dynamiques (remplacer les fausses données par des variables PHP).
- **Output** : Page fonctionnelle.

### Checkpoint
Demander la validation fonctionnelle finale à l'utilisateur.
