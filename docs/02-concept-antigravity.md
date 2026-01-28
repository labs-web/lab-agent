# Le Concept Antigravity

## La Solution : Antigravity

**Antigravity** est une architecture modulaire pour agents IA. Au lieu d'écrire un prompt unique, nous "éclatons" l'intelligence en trois composants distincts stockés dans le dossier `.agent/`.

L'objectif est de passer d'un "Prompt Ingénierie" (rédactionnel) à une "Architecture Agentique" (structurelle).

## Fonctionnement d'Antigravity

Comment l'agent utilise-t-il ces fichiers ?

1.  **Réception** : L'utilisateur envoie une commande courte : "Crée la page Login".
2.  **Chargement** : Antigravity analyse la demande et charge :
    *   Toutes les **Rules** sont chargées en mémoire (L'agent connait désormais toutes les lois potentielles).
    *   Le **Workflow** correspondant (Le plan d'action est sélectionné).
    *   Les **Skills** nécessaires (Les outils sont convoqués).
3.  **Exécution & Surveillance** : L'agent suit le Workflow. À chaque action (ex: "Créer un fichier PHP"), il vérifie dynamiquement dans sa mémoire si une Règle correspondante (ex: "Règle PHP") doit s'activer.

## L'Architecture Antigravity sous le capot

Comment Antigravity structure les concepts généraux de l'IA ?

| Concept IA Général    | Implémentation Antigravity       | Rôle                                                                               |
| --------------------- | -------------------------------- | ---------------------------------------------------------------------------------- |
| **System Prompt**     | **Rules** (`rules/*.md`)         | Peuple la mémoire initiale avec les Lois.                                          |
| **Logic / Knowledge** | **Skills** (`skills/*.md`)       | Active des blocs de savoir spécialisés à la demande.                               |
| **Planning**          | **Workflows** (`workflows/*.md`) | Externalise le plan d'action dans un fichier fixe plutôt que dans la tête de l'IA. |
| **Long-term Memory**  | **Le Projet** (Fichiers)         | L'agent utilise votre code source comme mémoire réelle.                            |
