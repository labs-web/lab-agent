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

*   **System Prompt** → correspond aux **Rules** (`rules/*.md`)
    *   *Rôle* : Peuple la mémoire initiale avec les Lois.

*   **Logic / Knowledge** → correspond aux **Skills** (`skills/*.md`)
    *   *Rôle* : Active des blocs de savoir spécialisés à la demande.

*   **Planning** → correspond aux **Workflows** (`workflows/*.md`)
    *   *Rôle* : Externalise le plan d'action dans un fichier fixe plutôt que dans la tête de l'IA.

*   **Long-term Memory** → correspond au **Projet** (Fichiers)
    *   *Rôle* : L'agent utilise votre code source comme mémoire réelle.
