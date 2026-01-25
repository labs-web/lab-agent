---
name: creation-rule
description: Guide pour créer et gérer les Règles de l'Agent (Workspace uniquement).
---

# Skill de Création de Règles

Ce skill fournit des directives et des procédures pour créer des Règles d'Agent spécifiques au Workspace.

## Que sont les Règles ?
Les Règles sont des contraintes définies manuellement pour guider le comportement, la stack et le style de l'Agent au sein du projet actuel.
- **Règles de Workspace** : Situées dans le dossier `.agent/rules` du workspace. Elles sont spécifiques au projet.

## Types d'Activation de Règle
Lors de la création d'une règle, considérez comment elle sera activée (le contenu doit refléter l'usage en utilisant le frontmatter YAML) :
- **Manual** : Activée via une mention `@`.
- **Always On** : Toujours appliquée (`trigger: always_on` sans description).
- **Model Decision** : Le modèle décide (`trigger: model_decision` + `description`).
- **Glob** : Appliquée aux fichiers correspondant à un motif spécifique (`trigger: glob` + `globs: pattern` sans description).

## Comment Créer une Règle

1. **Créer le Fichier** :
   - Naviguer vers `.agent/rules/`.
   - Créer un nouveau fichier Markdown (ex: `ma-regle.md`).
   
2. **Définir le Contenu** :
   - Les règles sont des fichiers Markdown.
   - Limite : 12 000 caractères par fichier.
   - Utilisez le Frontmatter YAML pour définir les triggers.
   - **Important** : Pour `trigger: glob`, utilisez la clé `globs` et n'incluez *pas* de champ `description`.

3. **Bonnes Pratiques** :
   - Soyez spécifique sur les contraintes.
   - Fournissez des exemples.
   - Le nom du fichier doit être en **français** (ex: `regle-nommage.md`).

## Templates

### Règle Standard (Always On)
Pour les règles qui doivent toujours être actives.

```markdown
---
trigger: always_on
---

# [Nom de la Règle]
...
```

### Règle Décidée par le Modèle (Model Decision)
Pour les règles que l'agent doit choisir d'activer selon le contexte. La description est **obligatoire**.

```markdown
---
trigger: model_decision
description: Description courte et claire pour aider l'IA à décider quand activer cette règle.
---

# [Nom de la Règle]
...
```

### Règle Basée sur les Fichiers (Glob)
Pour les règles qui s'appliquent à des fichiers spécifiques. La clé `globs` est requise, pas de description.

```markdown
---
trigger: glob
globs: src/**/*.js
---

# [Nom de la Règle]
...
```

### Règle Manuelle (Manual)
Pour les directives activées uniquement lorsque l'utilisateur mentionne le fichier (`@regle.md`). Pas de frontmatter spécifique requis.

```markdown
# [Nom de la Règle]

## Objectif
...
```
