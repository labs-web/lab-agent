---
description: Workflow pour implémenter une fonctionnalité complète en respectant l'architecture 3-Tier.
---

# Implement Implement 3-Tier Feature

Ce workflow guide l'implémentation d'une feature de bout en bout (Data -> Service -> UI).

## Étapes

## Étapes

1.  **Conception UI & UX (Design First)**
    - Lister EXPLICITEMENT tous les composants nécessaires pour la nouvelle fonctionnalité.
    - Pour chaque composant manquant dans le UI Kit :
        - Définir ses états (normal, hover, active, disabled).
        - **Action** : Créer le composant isolé via le workflow `scaffold-ui-component`.
        - Valider visuellement le composant isolé (HTML/CSS statique).
    - **Règle** : Ne JAMAIS commencer le code PHP (Service/Repository) tant que les composants UI ne sont pas prêts.

2.  **Implémentation Data Layer (PHP)**
    - Créer ou mettre à jour le Repository : `app/data/[Feature]Repository.php`.
    - Définir les méthodes d'accès aux données (SQL/PDO).

3.  **Implémentation Business Layer (PHP)**
    - Créer ou mettre à jour le Service : `app/services/[Feature]Service.php`.
    - Implémenter la logique métier et appeler le Repository.

4.  **Assemblage Presentation Layer**
    - Créer la page finale dans `public/` ou `app/pages/`.
    - Importer les composants UI créés à l'étape 1.
    - Injecter les données dynamiques provenant du Service dans ces composants.
    - **Attention** : À cette étape, on ne fait que de l'assemblage (collage). Pas de nouveau CSS majeur.

5.  **Vérification**
    - Vérifier que la Vue n'appelle JAMAIS directement le Repository ou la BDD.
    - Valider que le rendu final correspond au design des composants isolés.
