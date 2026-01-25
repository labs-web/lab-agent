# 01. Définir les Règles (Le "Code Civil" de l'Agent)

Les **Rules** (Règles) sont la fondation de l'architecture d'un agent. Elles définissent son identité, ses contraintes indépassables et ses directives comportementales. Contrairement aux Workflows qui disent *comment faire*, les Règles disent *ce qu'il faut être*.

## Pourquoi créer des Règles ?
Pour imposer des standards stricts que l'IA ne doit jamais transgresser, même si elle pense trouver une "meilleure" solution.
Exemple : "Interdiction d'utiliser jQuery", "Toujours créer les tests avant le code".

## Comment créer une Règle ?

Les fichiers de règles sont stockés dans `.agent/rules/`. Ce sont des fichiers Markdown avec un en-tête YAML spécifique.

### Structure Type
```markdown
---
trigger: glob                  # Quand activer cette règle ?
globs: "**/*"                  # Sur quels fichiers ? (Ici, tous)
---

# Titre du Rôle ou de la Règle

## Objectif
Décrivez ici la mission de l'agent lorsqu'il adopte ce rôle.

## Directives Impératives
- [ ] **Priorité Absolue** : Règle n°1.
- [ ] **Interdictions** : Ce qu'il ne faut PAS faire.
- [ ] **Standards** : Les choix technologiques imposés.
```

### Cas Pratique : Imposer le "Design First"
Pour une application 3-Tiers, nous voulons que le développeur commence toujours par l'UI.

**Fichier : `.agent/rules/role-developpeur.md`**
```markdown
# Développeur 3-Tiers

## Architecture
1. **Frontend (Prioritaire)** :
   - Vous devez obligatoirement valider les composants UI (HTML/CSS) AVANT de coder la logique PHP.
   - Tout composant doit provenir du UI Kit.
```

## Bonnes Pratiques
1. **Soyez Explicite** : Ne laissez pas de place à l'interprétation. Utilisez "DOIT", "NE DOIT PAS".
2. **Séparation des Rôles** : Créez un fichier par rôle (`role-architecte.md`, `role-developpeur.md`) pour éviter la confusion.
3. **Hiérarchie** : Les Règles l'emportent sur les suggestions de l'utilisateur.
