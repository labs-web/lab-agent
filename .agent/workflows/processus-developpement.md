---
description: Workflow Maître pour le développement d'une nouvelle fonctionnalité (4 phases).
---

# Workflow : Processus de Développement

Ce workflow orchestre l'ensemble du cycle de vie d'une fonctionnalité.

## Trigger
Demande explicite de nouvelle fonctionnalité (ex: "Ajouter une page de liste articles").

## Phases Séquentielles (Avec Checkpoints)

### Phase 1 : Conception UI
1. Lancer le workflow `/conception-ui`.
2. **STOP** : Attendre la validation du concept visuel par l'utilisateur.

### Phase 2 : Création UI (Maquettage)
3. Lancer le workflow `/creation-ui`.
4. **STOP** : Attendre la validation des maquettes statiques par l'utilisateur.

### Phase 3 : Conception Technique
5. Lancer le workflow `/conception-technique`.
6. **STOP** : Attendre la validation du plan technique par l'utilisateur.

### Phase 4 : Implémentation
7. Lancer le workflow `/implementation`.
8. **STOP** : Livrable final, demander la validation fonctionnelle.

## Loi Checkpoint
**INTERDICTION** de passer à la phase suivante sans "GO" explicite.
