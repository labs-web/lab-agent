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

## Relation avec Rules et Skills
C'est la trinité de l'architecture agentique :

1.  **Workflow vs Règle** : Le Workflow garantit qu'aucune Règle n'est oubliée en formalisant les points de contrôle (ex: "Validation UI" devient une étape explicite).
2.  **Workflow vs Skill** : Le Workflow orchestre les Skills. Il dit "À maintenant, utilise le savoir-faire X".

*Analogie : Si la Règle est la Loi et le Skill est l'Expertise de l'ouvrier, le Workflow est la Gamme de Fabrication.*

En combinant les trois, vous obtenez un agent autonome, compétent et discipliné.

## Comment demander à l'Agent de créer un Workflow ?
Pour créer un workflow, listez les étapes logiques que vous avez en tête.

**Exemple de Prompt :**
> *"Crée un workflow 'implement-feature' qui demande d'abord l'analyse, puis l'UI, puis le Code."*
> *"Définis un workflow 'release-version' : 1. Tests Unitaires, 2. Bump version, 3. Git Tag & Push."*

L'agent formalisera ces étapes dans un fichier `.agent/workflows/` prêt à être exécuté par la suite.
