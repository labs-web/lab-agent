# GUIDE DE CONCEPTION : RULES (Les Lois)

**Définition** : Le "Code Civil" de l'agent. Contraintes passives, permanentes et indiscutables.

### Stratégie
- Découper par **Périmètre de Responsabilité** (ex: 00-Meta, 01-Stack, 02-Sécurité).
- Ne JAMAIS y mettre d'instructions étape par étape (-> Workflow).
- Ne JAMAIS y mettre de snippets de code / tutos (-> Skill).

### Format de Fichier
**Emplacement** : `.agent/rules/[XX-nom-rule].md`
**Convention** : `XX` est un numéro d'ordre (01, 02...).

```markdown
# Titre de la Règle (ex: Stack Technique)

## 1. Principe Fondamental
- **Loi** : Description de la contrainte absolue.
- **Raison** : (Optionnel) Pourquoi cette règle existe.

## 2. Contraintes Spécifiques
- Interdiction formelle de ...
- Obligation d'utiliser ...
```
