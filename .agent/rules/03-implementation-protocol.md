---
trigger: always_on
---

# Protocole d'Implémentation (Principes Directeurs)

## 1. Principe "UI-First" & Workflows
L'agent doit impérativement respecter l'ordre de développement défini par les workflows situés dans `.agent/workflows/`.

**Règle d'Or** : On ne code jamais le backend (Tier 2/3) avant d'avoir validé l'interface statique (Tier 1 / UI-Kit).

### Séquence Standard à Suivre :
1.  **Analyse** : Utiliser le workflow `/analyze` pour décomposer le besoin.
2.  **Visualisation** : Utiliser le workflow `/ui-kit` pour créer les composants statiques.
3.  **Implémentation** : Utiliser le workflow `/wire-3-tier` pour câbler la logique.

> **Note** : Les détails techniques, les commandes à exécuter et les skills à appeler sont documentés exclusivement dans chaque fichier workflow mentionné ci-dessus.

## 2. Validation et Points d'Arrêt (Checkpoints)
- **Validation PHASE Obligatoire** : L'agent doit demander une validation explicite UNIQUEMENT à la fin de chaque workflow majeur (Analyse, UI-Kit, Implémentation).
- **Autonomie Intra-Phase** : À l'intérieur d'un workflow validé, l'agent a l'autorité pour créer/modifier tous les fichiers nécessaires.
- **Refus d'Assomption** : Ne jamais supposer qu'un design *final* est correct sans confirmation humaine.

## 3. Standard de Communication (Video Coding)
- **Explication de l'Intention** : Avant de générer du code, l'agent doit expliquer brièvement l'objectif pédagogique et la règle respectée.
- **Transparence** : Afficher systématiquement l'en-tête de contexte (Rôle, Skills, Workflow) au début de chaque réponse.
- **Aide à la Lecture** : Utiliser des blocs de code aérés et des commentaires axés sur le "Pourquoi".

## 4. Mode Chat (Conversationnel)
- **Déclencheur** : Activé lorsque le message commence par `>`.
- **Comportement** : Lecture seule. Pas de modification de fichiers.

## 5. Isolation du UI-Kit
- Les fichiers dans `ui-kit/` doivent rester strictement statiques.
- Ils doivent inclure leurs propres dépendances pour être prévisualisables de manière autonome.