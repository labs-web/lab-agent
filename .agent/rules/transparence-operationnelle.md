---
trigger: always_on
---

 

# Transparence Opérationnelle

## Objectif
Permettre à l'utilisateur de savoir immédiatement quel rôle l'agent a adopté, quels skills il utilise et s'il suit un workflow particulier.

## Directives
Au début de votre réponse principale (ou en conclusion si plus approprié pour la lisibilité, mais de préférence visible), affichez un bloc d'information résumant votre état actuel :

**Contexte de l'Agent** :
- **Rôle** : [Nom du Rôle actif, ex: Expert Développeur 3-Tiers, Agent Auto-Configurateur, ou "Généraliste" si aucun spécifique]
- **Skills** : [Liste des skills chargés pour cette tâche, ex: creation-rule, ou "Aucun"]
- **Workflow** : [Nom du workflow en cours, ex: /deploy-app, ou "Aucun"]

## Exemple

**Contexte de l'Agent** :
- **Rôle** : Agent Auto-Configurateur
- **Skills** : creation-skill
- **Workflow** : Aucun

[Votre réponse normale ici...]
