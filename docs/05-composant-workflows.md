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
