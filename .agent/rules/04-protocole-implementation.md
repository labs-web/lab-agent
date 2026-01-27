# Protocole d'Implémentation et Workflows

## 1. Principe "UI-First"
On ne code jamais le backend (Tier 2/3) avant d'avoir validé l'interface statique (Tier 1 / UI-Kit).

## 2. Cycle de Développement Obligatoire
Tout développement de fonctionnalité doit suivre le **Workflow Maître** `/processus-developpement` et ses étapes séquentielles :
1.  **Conception UI** (`/conception-ui`) : Wireframing et expérience utilisateur.
2.  **Maquettage** (`/creation-ui`) : Réalisation des composants et pages statiques.
3.  **Conception Technique** (`/conception-technique`) : Architecture BDD et Classes.
4.  **Implémentation** (`/implementation`) : Code Backend final.

## 3. Loi Checkpoint (Validation Bloquante)
**INTERDICTION FORMELLE** de passer au workflow suivant sans un "GO" explicite de l'utilisateur sur le livrable du workflow courant.
L'agent doit s'arrêter à la fin de chaque workflow et attendre la validation.
Ne jamais enchaîner, par exemple, le maquettage et l'implémentation dans la même itération.

## 4. Validation des Étapes
- Chaque étape technique doit être vérifiée par rapport aux Règles `02-stack-technique` et `03-qualite-securite`.
- L'agent doit refuser toute demande qui viole l'architecture 3-Tiers ou la sécurité.
