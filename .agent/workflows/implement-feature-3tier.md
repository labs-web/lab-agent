---
description: Workflow pour implémenter une fonctionnalité complète en respectant l'architecture 3-Tier.
---

# Implement Implement 3-Tier Feature

Ce workflow guide l'implémentation d'une feature de bout en bout (Data -> Service -> UI).

## Étapes

1.  **Analyse et Confirmation des besoins UI**
    - Lister les composants nécessaires pour la page/vue.
    - Vérifier s'ils existent dans `ui-kit/`.
    - **Action requise** : Présenter la liste des composants manquants à l'utilisateur et demander confirmation pour les créer.
    - *Si confirmé* : Lancer le workflow `scaffold-ui-component` pour les créer.

2.  **Implémentation Data Layer (PHP)**
    - Créer ou mettre à jour le Repository : `app/data/[Feature]Repository.php`.
    - Définir les méthodes d'accès aux données (SQL/PDO).

3.  **Implémentation Business Layer (PHP)**
    - Créer ou mettre à jour le Service : `app/services/[Feature]Service.php`.
    - Implémenter la logique métier et appeler le Repository.

4.  **Assemblage Presentation Layer**
    - Créer la page PHP dans `app/pages/`.
    - Intégrer le HTML/CSS statique du UI Kit.
    - Le contrôleur/Page appelle le Service PHP pour injecter les données dans la vue.
    - Gérer l'affichage (rendu HTML) et les événements utilisateur (JS Vanilla si nécessaire).

5.  **Vérification**
    - Vérifier que la Vue n'appelle JAMAIS directement le Repository ou la BDD.
    - Valider que le HTML généré correspond au design du UI Kit.
