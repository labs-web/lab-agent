# Les Composants Fondamentaux

## A. Rules (Les Lois)
Les **Rules** constituent le "Code Civil" de l'agent.
*   **Nature** : Contraintes **passives** et permanentes. Elles ne disent pas "comment faire", mais "ce qu'il est interdit de faire".
*   **Fonctionnement** : Elles agissent comme un garde-fou. Qu'on demande une petite correction ou une grosse fonctionnalité, la Règle est toujours active en arrière-plan.
*   **Ce qu'on ne met PAS dans une Rule** :
    *   Des instructions étape par étape (C'est un Workflow).
    *   Des snippets de code ou des tutoriaux (C'est un Skill).

*Exemple :* "Interdiction absolue d'utiliser du SQL brut dans un Contrôleur."

> **Pourquoi pas dans le Skill ?**
> Si cette interdiction était dans le Skill "Expert SQL", elle disparaîtrait si l'on changeait d'expert ou si l'on utilisait un autre Skill (ex: "Expert Prototype"). En la mettant dans une **Rule**, elle devient une **Loi Universelle** qui s'impose à TOUS les Skills, garantissant la sécurité peu importe qui écrit le code.

## B. Skills (Les Compétences)
Les **Skills** représentent le **savoir-faire technique**.
*   **Nature** : Capacités **actives**. Un Skill est un "Expert Virtuel" que l'agent convoque au besoin.
*   **Stratégie de découpage** : On définit généralement les Skills par **Domaine d'Expertise Technique** (Langage, Framework, Rôle) plutôt que par phase de projet.
    *   *Bon découpage* : `expert-php`, `expert-tailwind`, `analyste-bdd`.
    *   *Pourquoi ?* Car l'`expert-php` intervient aussi bien en phase d'implémentation qu'en phase de correction de bugs.
*   **Contenu d'un Skill** :
    *   Instructions techniques ("Best practices PHP 8.2").
    *   Templates de code.
    *   Documentation de référence (Cheat-sheets, patterns à reproduire).

*Exemple :* Le Skill `createur-ui` sait transformer une maquette mentale en code HTML/Tailwind valide.

## C. Workflows (Les Procédures)
Les **Workflows** sont les **plans d'action**.
*   **Nature** : Séquences ordonnées. Ils orchestrent le travail.
*   **Granularité et Nuance** :
    *   Si la tâche est **atomique** (ex: "Créer une classe"), c'est le rôle du **Skill**.
    *   Si la tâche nécessite d'**orchestrer plusieurs experts** ou étapes de validation (ex: "Refactoriser = Analyser + Tester + Coder"), alors c'est un **Workflow Micro**.
    
    1.  **Macro (Processus)** : Gère les grandes phases du projet (ex: "Nouvelle Feature").
    2.  **Micro (Orchestration)** : Gère une séquence complexe (ex: "Correction de Bug Critique" qui demande test -> fix -> re-test).
*   **Rôle** : Le Workflow est le chef d'orchestre. Il appelle le bon Skill au bon moment et demande validation.

*Exemple :* `Implémentation` : 1. Analyser (Skill Architecte) -> 2. Coder (Skill Dev) -> 3. Tester (Skill QA).

## Résumé des différences

| Composant    | Nature     | Question clé                           | Analogie            |
| ------------ | ---------- | -------------------------------------- | ------------------- |
| **Rule**     | Contrainte | Ce qui est interdit/obligatoire ?      | Le Code de la Route |
| **Skill**    | Compétence | Comment réaliser cette tâche ?         | Le Pilote           |
| **Workflow** | Procédure  | Dans quel ordre enchainer les étapes ? | L'Itinéraire        |
