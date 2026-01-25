# 03. Orchestrer avec les Workflows (Le Processus)

Les **Workflows** définissent la méthodologie, l'ordre des opérations. C'est le chef de chantier qui coordonne les compétences (Skills) dans le respect des lois (Rules).

## Pourquoi un Workflow ?
Pour transformer une intention complexe ("Crée une feature") en une suite d'étapes atomiques et reproductibles.
Cela évite que l'agent ne "saute des étapes" ou ne se perde.

## Structure d'un Workflow (`.agent/workflows/`)
Un workflow est un fichier Markdown.

### En-tête YAML
```yaml
---
description: Workflow pour implémenter une fonctionnalité complète en respectant l'architecture 3-Tier.
---
```

### Corps du Workflow
C'est une checklist numérotée que l'agent suivra pas à pas.

```markdown
# Titre du Workflow

## Étapes

1. **Step 1 : Analyse (Design First)**
   - Vérifier les pré-requis.
   - Si nécessaire, appeler un autre workflow (`/scaffold-ui-component`).
   - Règle Bloquante : Ne pas passer à l'étape 2 sans validation.

2. **Step 2 : Exécution (Backend)**
   - Créer le fichier Repo.
   - Créer le fichier Service.

3. **Step 3 : Assemblage (Frontend)**
   - Relier le tout.
```

## L'Interaction Rules-Skills-Workflows
C'est la trinité de l'architecture agentique :

1.  **Rules** (Identité) : "Je suis un Puriste du Design, je refuse le code backend tant que l'UI n'est pas prête."
2.  **Workflow** (Processus) : "Étape 1 : Créer l'UI. Étape 2 : Créer le Backend." (Renforce la Règle).
3.  **Skills** (Savoir-Faire) : "Voici comment coder un composant UI propre." (Utilisé à l'étape 1 du Workflow).

En combinant les trois, vous obtenez un agent autonome, compétent et discipliné.
