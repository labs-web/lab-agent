# 02. Construire les Skills (Le Savoir-Faire Technique)

Les **Skills** (Compétences) sont des modules de connaissances spécialisés. Si les Règles définissent *qui* est l'agent, les Skills définissent *ce qu'il sait faire*.

## Qu'est-ce qu'un Skill ?
C'est un dossier contenant toutes les instructions nécessaires pour accomplir un type de tâche technique précis.
Exemple : "Implémenter une architecture 3-Tiers", "Créer un composant React", "Gérer une base de données MySQL".

## Structure d'un Skill (`.agent/skills/`)
Un skill est un dossier (ex: `architecture-3tier/`) contenant obligatoirement un fichier `SKILL.md`.

### Le Fichier `SKILL.md`
```markdown
---
name: architecture-3tier
description: Guide pour le développement d'applications respectant l'architecture 3-Tier.
---

# Architecture 3-Tier

## Concepts Clés
Explication théorique du sujet (ex: Présentation, Business, Data).

## Instructions Pratiques
1. **Repository** :
   - Nommage : `[Nom]Repository.php`
   - Rôle : Accès SQL uniquement.
2. **Service** : 
   - Nommage : `[Nom]Service.php`
   - Rôle : Logique métier.

## Exemples de Code
Fournissez toujours des snippets de code valides pour que l'agent puisse s'en inspirer (Copier/Coller intelligent).
```

## Quand utiliser un Skill ?
L'agent chargera un Skill soit :
1. **Automatiquement** : Si vous lui demandez une tâche liée au nom/description du Skill.
2. **Explicitement** : Si vous le mentionnez dans un prompt ou une règle (ex: "Utilise le skill `ui-kit-master`").

## Astuce
Ne surchargez pas les Règles avec de la technique pure. Mettez la technique dans les Skills.
- Règle : "Utilise toujours 3-Tiers".
- Skill : "Voici comment implémenter 3-Tiers en PHP".

## Relation avec Rules et Workflows
- **Skill vs Règle** : Le Skill est l'outil qui permet de satisfaire techniquement une Règle (Ex: Règle = "Architecture Propre", Skill = "Architecture 3-Tiers").
- **Skill vs Workflow** : Le Skill est une brique utilisée à une étape précise du Workflow (Ex: à l'étape "Design" du Workflow, j'utilise le Skill "UI Kit").

## Comment demander à l'Agent de créer un Skill ?
Pour créer un skill, décrivez la compétence technique que vous souhaitez standardiser.

**Exemple de Prompt :**
> *"Crée un skill 'ui-kit-master' pour gérer la création de composants HTML/CSS selon le Design System."*
> *"Génère un skill 'docker-expert' qui explique comment écrire des Dockerfile optimisés pour ce projet."*

L'agent créera automatiquement le dossier dans `.agent/skills/` avec le fichier `SKILL.md` structuré.
