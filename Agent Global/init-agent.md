---
description: Workflow d'initialisation de l'agent (Création des règles de base et choix de méthode).
---

# Workflow : Initialisation Agent

Ce workflow est le point d'entrée pour configurer un nouvel agent ou réparer une configuration incomplète.

## Trigger
- Commande `>> init` ou `>> init-agent`.
- Absence détectée des règles fondamentales.

## Étapes

### Étape 1 : Vérification des Fondations
- **Skill** : `architecte-agent`
- **Action** : Vérifier la présence des fichiers dans `.agent/rules/` :
    - `00-meta-interaction.md` (Protocoles)
    - `01-identite-persona.md` (Identité)
    - `02-stack-technique.md` (Stack)
    - `03-qualite-securite.md` (Qualité)
- **Logique** : Si un fichier est manquant, le créer avec le contenu par défaut (Template standard).

### Étape 2 : Choix de la Méthodologie
- **Action** : Demander à l'utilisateur quel type de workflow il souhaite utiliser pour le développement.
- **Options** :
    1.  **UI-First (Agile)** -> Workflow `/processus-developpement` (Recommandé pour le web).
    2.  **Water Flow (Classique)** -> Workflow : Analyse -> Conception -> Réalisation (À créer si demandé).
- **Par défaut** : Activer `/processus-developpement`.

### Étape 3 : Confirmation
- **Output** : Résumé de l'initialisation (Règles créées, Workflow activé).
