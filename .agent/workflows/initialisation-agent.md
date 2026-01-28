---
description: Guide interactif pour transformer une idée de projet en architecture d'agent complète.
---

# Workflow : Initialisation Nouvel Agent

Ce workflow accompagne le développeur dans la phase de conception "Meta" (création du cerveau de l'IA) avant de commencer le code.

## Trigger
- Démarrage d'un nouveau projet.
- Commande `/initialisation-agent` ou `/boot-agent`.

## Étapes

### Étape 1 : Définition de l'Identité & des Lois (Rules)
*Objectif : Définir le cadre légal et technique.*
- **Skill** : `architecte-agent`
- **Action** : 
    1. Demander au développeur la **Mission Principale** de l'agent (ex: "Expert Laravel", "Data Analyst Python").
    2. Demander la **Stack Technique Imposée** (ex: "React + Vite", "Symfony 6").
    3. Lister les **Interdictions** (ex: "Pas de jQuery", "Pas de SQL brut").
- **Output** : Rédaction des fichiers `rules/01-identite-persona.md` et `rules/02-stack-technique.md`.
- **Validation** : Présenter le contenu des Rules et attendre la validation explicite ("OK pour les Rules") avant de continuer.

### Étape 2 : Recrutement de l'Équipe (Skills)
*Objectif : Identifier les experts virtuels nécessaires.*
- **Skill** : `architecte-agent`
- **Action** : 
    1. Analyser la stack technique définie à l'étape 1.
    2. Proposer une liste de Skills "candidats" (ex: `expert-react`, `concepteur-base-donnees`).
    3. Demander validation pour chaque Skill.
    4. Pour chaque Skill validé, demander s'il y a de la documentation spécifique à ingérer.
- **Output** : Création des dossiers `skills/[nom-skill]/` et des fichiers `SKILL.md` basiques.
- **Validation** : Présenter la liste finale des Skills et attendre la validation explicite ("OK pour les Skills") avant de continuer.

### Étape 3 : Cartographie des Processus (Workflows)
*Objectif : Définir comment on travaille.*
- **Skill** : `architecte-agent`
- **Action** : 
    1. Identifier les tâches complexes et répétitives du projet (ex: "Créer un nouveau composant", "Déployer en prod").
    2. Proposer un workflow pour chaque processus identifié.
    3. Définir le "Workflow Maître" (le cycle de vie standard du développement).
- **Output** : Rédaction des fichiers `workflows/[nom-workflow].md`.
- **Validation** : Présenter la liste des Workflows et attendre la validation explicite ("OK pour les Workflows") avant de continuer.

### Étape 4 : Génération de la Structure
- **Skill** : `architecte-agent`
- **Action** : Créer physiquement l'arborescence `.agent/` si elle n'existe pas, et peupler les fichiers avec les templates par défaut.
- **Output** : Un agent prêt à l'emploi.

### Checkpoint Final
- Résumé de l'architecture créée.
- Confirmation que l'agent est prêt à basculer en mode développement standard.
