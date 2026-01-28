# GUIDE DE CONCEPTION : SKILLS (Les Compétences)

**Définition** : Le "Savoir-Faire". Des experts virtuels invoqués temporairement.

### Stratégie
- Découper par **Domaine d'Expertise** (Langage, Framework, Rôle) et non par phase projet.
- Contient : Best practices techniques, Templates, Cheat-sheets.
- Ne JAMAIS y mettre de planification projet (-> Workflow).
- Ne JAMAIS y mettre d'interdictions légales (-> Rule).

### Format de Fichier
**Emplacement** : `.agent/skills/[nom-skill]/SKILL.md`
**Convention** : Un dossier par skill. Le fichier s'appelle TOUJOURS `SKILL.md`.

```markdown
---
name: nom-du-skill
description: Description courte (1 ligne).
---

# Skill : Nom Lisible

## Responsabilité Cœur
Le rôle principal de cet expert.

## Tes Missions
1.  **Mission** : Description. (ex: Générer du code CSS).

## Instructions Techniques
- Insérer ici les prompts système spécifiques, la doc, ou les templates.
```
