---
name: creation-workflow
description: Guide pour créer et gérer les Workflows de l'Agent.
---

# Skill de Création de Workflow

Ce skill fournit des directives et des procédures pour créer des Workflows d'Agent.

## Que sont les Workflows ?
Les Workflows définissent une série d'étapes pour guider l'Agent à travers des tâches répétitives (ex: déploiements, revues de PR).
- Ils sont sauvegardés en fichiers Markdown.
- Peuvent être invoqués via des "slash commands" (ex: `/nom-workflow`).
- Peuvent appeler d'autres workflows.

## Emplacements des Workflows
- **Workflows Globaux** : Accessibles dans tous les workspaces (gérés via le panneau Customizations).
- **Workflows de Workspace** : Situés dans `.agent/workflows/` au sein du workspace.

## Comment Créer un Workflow de Workspace

1.  **Créer le Fichier** :
    - Naviguer vers `.agent/workflows/`.
    - Créer un nouveau fichier Markdown (ex: `deploy-app.md`).
    
2.  **Définir le Contenu** :
    - **Frontmatter** : Doit inclure une `description`.
    - **Étapes** : Liste numérotée d'instructions.
    - **Limite** : 12 000 caractères par fichier.

## Format de Fichier Workflow

```markdown
---
description: [Titre court, ex: Comment déployer l'application]
---
[Étapes spécifiques sur comment exécuter ce workflow]

1. Étape un...
2. Étape deux...
```

## Fonctionnalités Spéciales

### Commandes Auto-run (Mode Turbo)
- `// turbo` : Placez cette annotation *au-dessus* d'une étape pour auto-exécuter cette étape de commande spécifique sans attendre l'approbation de l'utilisateur.
- `// turbo-all` : Placez cette annotation n'importe où dans le fichier pour auto-exécuter *toutes* les étapes de commande dans le workflow.

**Exemple** :
```markdown
1. Créer un dossier appelé foo
// turbo
2. Créer un dossier appelé bar
```

### Slash Commands
- Le nom du fichier détermine la commande slash.
- Fichier `deploy-app.md` -> Commande `/deploy-app`.
- Utilisez l'outil `view_file` pour lire le fichier workflow si l'utilisateur invoque la commande.

## Chauffage de Workflow (Chaining)
Vous pouvez référencer d'autres workflows dans une étape de workflow :
"Appeler /nom-workflow pour effectuer la sous-tâche."
