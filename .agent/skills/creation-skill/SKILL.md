---
name: creation-skill
description: Guide pour créer et gérer les Skills de l'Agent.
---

# Skill de Création de Skill

Ce skill fournit des directives et des procédures pour créer de nouveaux Skills d'Agent.

## Que sont les Skills ?
Les Skills sont des paquets de connaissances réutilisables qui étendent les capacités de l'agent. Ils instruisent l'agent sur la façon d'aborder des tâches spécifiques, des conventions ou des outils.

## Emplacements des Skills
- **Skills de Workspace** : `<workspace-root>/.agent/skills/<dossier-skill>/` (Spécifique au projet)
- **Skills Globaux** : `~/.gemini/antigravity/global_skills/<dossier-skill>/` (Disponible pour tous les projets)

## Comment Créer un Skill

1. **Créer le Dossier** :
   - Créer un répertoire pour votre skill dans `.agent/skills/` (ex: `mon-nouveau-skill`).
   
2. **Créer le Fichier d'Instruction Principal** :
   - Créer `SKILL.md` à l'intérieur de ce dossier.
   - C'est le *seul* fichier requis.

3. **Ajouter des Ressources Optionnelles** (si nécessaire) :
   - `scripts/` : Scripts utilitaires.
   - `examples/` : Implémentations de référence.
   - `resources/` : Templates ou assets.

## Template SKILL.md

Chaque `SKILL.md` doit commencer par un frontmatter YAML.

```markdown
---
name: nom-de-mon-skill
description: Une description claire à la troisième personne de ce que fait le skill. L'agent utilise ceci pour décider s'il doit activer le skill.
---

# Nom de Mon Skill

## Quand utiliser ce skill
- Utilisez ceci quand...
- Utile pour...

## Comment l'utiliser
Instructions détaillées étape par étape...
```

## Bonnes Pratiques
- **Portée Focalisée** : Un skill par tâche distincte.
- **Description Claire** : Crucial pour que l'agent "découvre" le skill. Utilisez des mots-clés.
- **Divulgation Progressive** : L'agent voit d'abord la liste des skills, puis lit `SKILL.md` si pertinent.
- **Scripts** : Si vous utilisez des scripts, instruisez l'agent d'utiliser `--help` en premier.
