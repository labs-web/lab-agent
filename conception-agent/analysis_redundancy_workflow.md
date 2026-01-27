# Analyse des Redondances dans le Workflow de Développement

## 1. Constat : Une Triplication de l'Information

Actuellement, la définition du "Comment développer" est fragmentée et dupliquée sur trois niveaux distincts qui risquent de se désynchroniser :

1.  **Niveau Législatif (Règles)** : `03-implementation-protocol.md` définit les *phases* (Phase 1, 2, 3) et les obligations.
2.  **Niveau Exécutif (Workflows)** : Les fichiers dans `.agent/workflows/` (`analyze.md`, `ui-kit.md`, `wire-3-tier.md`) répètent ces phases sous forme d'instructions pas-à-pas.
3.  **Niveau Descriptif (Conception)** : Le dossier `conception-agent/` ajoute une couche de documentation visuelle qui re-décrit une troisième fois ces mêmes processus.

**Problème Majeur** : Si vous modifiez une règle dans le protocole (ex: passer du UI-First au API-First), vous devez mettre à jour :
- La règle (`03-implementation-protocol.md`)
- Les 3 workflows (`analyze`, `ui-kit`, `wire-tier`)
- Les 3 documents de conception (`01`, `02`, `03`) et leurs diagrammes.

## 2. Analyse de la Valeur Ajoutée

| Niveau         | Valeur                                                                             | Redondance / Risque                                                   |
| :------------- | :--------------------------------------------------------------------------------- | :-------------------------------------------------------------------- |
| **Règles**     | Indispensable pour l'identité de l'agent (ne pas faire d'AJAX, utiliser Tailwind). | Faible. C'est la "Constitution".                                      |
| **Workflows**  | Indispensable pour l'automatisation. C'est ce que l'agent *exécute*.               | Moyenne. Certains recopies le protocole.                              |
| **Conception** | Utile *uniquement* pour l'humain. L'agent ne le lit pas pour travailler.           | **Critique**. C'est une documentation statique d'un processus vivant. |

## 3. Solution Proposée : Consolidation "Single Source of Truth"

Il faut faire de la configuration `.agent` la seule source de vérité et générer la documentation à partir de celle-ci, ou simplifier la structure.

### Action A : Fusionner Règle et Workflow
Supprimer la description procédurale dans `03-implementation-protocol.md` pour ne garder que les *Principes* (ex: "Toujours valider le UI avant le Code"). Déplacer le détail des *Étapes* (Phase 1, 2, 3) exclusivement dans les fichiers `.agent/workflows/`.
-> *Résultat : Le protocole dit "Quoi respecter", le Workflow dit "Quelles étapes suivre". Plus de chevauchement.*

### Action B : Transformer "Conception" en "Référence Dynamique"
Le dossier `conception-agent` ne doit pas contenir de texte explicatif redondant.
- **Supprimer** les fichiers `.md` explicatifs (`01_workflow_analyze_visual.md`, etc.).
- **Garder uniquement** les diagrammes `.mmd` qui sont synthétiques.
- **Injecter** les diagrammes directement dans les fichiers `.agent/workflows/` correspondants.

### Action C : Structure Cible Optimisée

```text
.agent/
  rules/
    03-principles.md       # Règles immutables (Pas d'AJAX, Sécurité...)
  workflows/
    01-analyze.md          # Le Steps + Diagramme MMD inclus
    02-ui-kit.md           # Le Steps + Diagramme MMD inclus
    03-implementation.md   # Le Steps + Diagramme MMD inclus
conception-agent/          # SUPPRIMÉ ou ARCHIVÉ
```

**Avantage** : La documentation visuelle (Mermaid) vit à côté du script d'exécution. Si on change le script, on voit le diagramme juste à côté.
