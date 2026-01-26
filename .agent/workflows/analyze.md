---
description: Workflow d'analyse technique et de décomposition UI préalable au développement
---
# Workflow : Analyse Technique & Décomposition UI

Ce workflow est la première étape obligatoire avant toute génération de code. Il sert à valider la compréhension métier et l'architecture visuelle.

## Étape 1 : Extraction des Besoins
- **Objectif** : Identifier les actions utilisateur et les données nécessaires.
- **Analyse** :
    - Quelles sont les données à afficher (Input/Output) ?
    - Quelles sont les actions critiques (Créer, Modifier, Supprimer, Filtrer) ?
    - Y a-t-il des contraintes métier spécifiques (ex: validation de date, droits d'accès) ?

## Étape 2 : Décomposition de l'Interface (UI-First)
- **Objectif** : Anticiper la structure du UI-Kit.
- **Livrable** : Un plan d'action UI basé sur `ui-kit/components-manifest.yaml`.
    - **Vérification** : Consulter le manifeste pour identifier les composants existants (`validated` ou `draft`).
    - **Identification** : Lister les composants manquants à créer dans `ui-kit/`.
    - **Typologie** :
        - **Atomes** : Boutons, labels, inputs.
    - **Molécules/Organismes** : Formulaires, tableaux de données, cartes, barres de recherche.
- **États Visuels** : Lister les états à prévoir (Chargement, Vide, Erreur, Succès).

## Étape 3 : Identification des Responsabilités 3-Tiers
- **Tier 3 (Data)** : Quelles tables et quelles requêtes PDO seront nécessaires ?
- **Tier 2 (Logic)** : Quel Service va gérer la logique ? Quelles exceptions peuvent être levées ?
- **Tier 1 (Presentation)** : Quel Controller va orchestrer le flux et quelle route sera utilisée ?

## Étape 4 : Validation du Développeur (Checkpoint)
- **Action de l'Agent** : Présenter un résumé structuré (Tableau ou Liste) de l'analyse ci-dessus.
- **Interdiction** : Ne proposer AUCUN code source PHP ou HTML à cette étape.
- **Question de Clôture** : 
    > "L'analyse pour [Nom de la fonctionnalité] est terminée. Est-ce que ce plan vous convient ? Si oui, nous pourrons passer à la création des composants dans le UI-Kit via `/ui-kit`."

## Instructions pour l'Agent
Pendant ce workflow, active ton mode "Consultant Senior". Si une demande utilisateur viole les principes du SSR (ex: demande d'une mise à jour dynamique sans rechargement), rappelle gentiment la règle "Zéro AJAX/Framework JS" et propose une alternative en PHP standard.