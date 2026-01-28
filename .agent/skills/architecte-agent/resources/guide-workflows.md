# GUIDE DE CONCEPTION : WORKFLOWS (Les Procédures)

**Définition** : Le "Plan d'Action". Scripts impératifs séquentiels pour orchestrer le travail.

### Stratégie
- Découper par **Mission/Processus** (Macro ou Micro).
- Gère : L'ordre d'exécution, l'appel aux Skills, et les validations humaines.
- Si une instruction contient plusieurs verbes ("Crée ET Teste"), c'est un Workflow.
- Ne JAMAIS y mettre de détails d'implémentation (-> Skill).

### Format de Fichier
**Emplacement** : `.agent/workflows/[nom-workflow].md`
**Convention** : `kebab-case` correspondant à la commande slash.

```markdown
---
description: Description courte.
---

# Workflow : Nom Lisible

## Objectif
Ce que ce workflow accomplit.

## Étapes

### Étape 1 : [Nom Action]
- **Skill** : `nom-du-skill`
- **Instruction** : Ce que l'expert doit faire.
- **Validation** : Critère de réussite.

### Étape 2 : ...
// turbo (optionnel, pour auto-run)
Commandes terminal...
```
