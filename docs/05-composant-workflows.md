# Composant C : Workflows (Les Procédures)

## Nature
Les **Workflows** sont les **plans d'action**.
*   Ce sont des séquences ordonnées.
*   Ils orchestrent le travail dans le temps.

## Fonctionnement
Un Workflow est un **script impératif**. Il définit une liste d'étapes (Steps) sequentielles. Il gère :
*   L'ordre d'exécution (1, 2, 3...).
*   Les appels aux Skills (Qui fait quoi ?).
*   Les points d'arrêt pour validation utilisateur (Human-in-the-loop).

## Utilisation par l'Agent
C'est le point d'entrée de l'action pour une tâche complexe. L'agent lit le fichier `.md` du workflow et l'exécute ligne par ligne. C'est le workflow qui pilote le changement de contexte ("Maintenant, deviens Designer", puis "Maintenant, deviens Développeur").

## Granularité et Nuance
*   Si la tâche est **atomique** (ex: "Créer une classe"), c'est le rôle du **Skill**.
*   Si la tâche nécessite d'**orchestrer plusieurs experts** ou étapes de validation (ex: "Refactoriser = Analyser + Tester + Coder"), alors c'est un **Workflow**.

Il existe deux niveaux de workflows :
1.  **Macro (Processus)** : Gère les grandes phases du projet (ex: "Nouvelle Feature" de A à Z).
2.  **Micro (Orchestration)** : Gère une séquence complexe (ex: "Correction de Bug Critique" qui demande test -> fix -> re-test).

## Stratégie de découpage
On découpe les Workflows par **Type de Mission**.
*   Ne créez pas un workflow par fonction technique (ça c'est le Skill).
*   Créez un workflow quand il y a un **Début** clair, une **Fin** claire, et des **Étapes intermédiaires** nécessitant validation ou changement de compétence.

## Ce qu'on ne met PAS dans un Workflow
*   Les détails techniques d'implémentation ("Utilise telle fonction PHP"). C'est le rôle du Skill. Le Workflow doit rester lisible par un humain non-expert.
*   Les règles permanentes ("N'oublie pas la sécu"). C'est le rôle des Rules.

## Exemple
**Workflow `/implementation`** : 
1. `Analyser` (Appel Skill Architecte) 
2. `Coder` (Appel Skill Dev) 
3. `Tester` (Appel Skill QA).

## Migration Prompt vers Agent
Quelle partie du "Mega-Prompt" classique devient un Workflow ?
*   **L'Instruction / Tâche (3)** : "Crée le contrôleur pour le panier d'achat... vérifie que... fais ensuite...".

Si l'instruction contient plus d'un verbe d'action (ex: "Crée ET Teste"), c'est un signal fort pour créer un Workflow. L'ancien prompt monolithique décrivait souvent une procédure implicite ; le Workflow la rend explicite et répétable.

*Avant :* `Crée une page de login [instructions implicites de procéder par étapes]`
*Après :* Workflow `/feature-login.md` (Étapes 1, 2, 3 explicites).

---

## Application au Tutoriel : L'Orchestrateur Industriel

Pour notre WebBuilder, un simple script ne suffit pas. Nous avons mis en place une **Orchestration Hiérarchique**.

### 1. Le Chef d'Orchestre (Master Workflow)
*   **Fichier** : `processus-developpement.md`
*   **Rôle** : Il ne fait rien lui-même. Il délègue.
*   **Logique** :
    1.  Appelle `/charte-graphique` (Si besoin).
    2.  Appelle `/conception-ui`.
    3.  Appelle `/creation-ui`.
    4.  Finit le travail (Assemblage).

### 2. Les Spécialistes (Sub-Workflows)
Chaque sous-workflow est une procédure autonome :
*   `/charte-graphique.md` : Guide le `graphiste-charte` pour définir les couleurs.
*   `/conception-ui.md` : Guide le `concepteur-ui` pour les wireframes.
*   `/creation-ui.md` : Guide le `createur-ui` pour le code HTML.

### La Puissance du Système
Grâce à ce découpage, si demain vous voulez changer votre méthode de design (ex: passer de "Wireframe" à "Mockup Haute Fidélité"), vous modifiez uniquement le sous-workflow `/conception-ui.md`. Le Master Workflow, lui, reste identique. C'est du **Code Modulaire Appliqué aux Process**.
