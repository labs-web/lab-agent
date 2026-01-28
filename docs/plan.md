# Documentation

## Objectif

L'objectif de cette documentation est multiple :

1. **Comprendre et Maintenir** : Faciliter l'appropriation et la maintenance de la structure de l'agent.
2. **Architecture Antigravity** : Détailler la structure standardisée d'un agent conçu avec le framework Antigravity.
3. **Guide de Conception** : Expliquer aux développeurs la méthodologie pour concevoir et configurer leur propre agent.
4. **Workflow de Développement** : Décrire comment utiliser l'agent pour développer des applications en suivant des processus spécialisés et optimisés.



## 1. Contexte : Le "Prompt" et ses limites

### Qu'est-ce qu'un Prompt ?
Un **Prompt** est l'instruction initiale envoyée au modèle de langage (LLM). C'est le point d'entrée qui contient la demande de l'utilisateur. Dans une approche classique, ce prompt doit être exhaustif : contexte, tâche, règles de sécurité, stack technique, etc.

**Exemple de "Mega-Prompt" monolithique (Classique) :**
> "Agis comme un expert Senior PHP. Crée une page de login. IMPORTANT : Utilise l'architecture Hexagonale, pas de logique dans le contrôleur, sécurise avec Argon2, utilise TailwindCSS v3.0, respecte PSR-12... [et 50 autres lignes de contraintes]"

### La Problématique
Pourquoi ne pas simplement utiliser ce type de prompt ?
1.  **Dilution cognitive** : L'IA "oublie" souvent les règles noyées au milieu de centaines de lignes d'instructions.
2.  **Conflits** : Difficile de prioriser entre "Fais vite" et "Fais sécurisé".
3.  **Maintenance nulle** : Si on change de version de CSS, il faut réécrire tous ses prompts.

---

## 2. La Solution : Antigravity

**Antigravity** est une architecture modulaire pour agents IA. Au lieu d'écrire un prompt unique, nous "éclatons" l'intelligence en trois composants distincts stockés dans le dossier `.agent/`.

L'objectif est de passer d'un "Prompt Ingénierie" (rédactionnel) à une "Architecture Agentique" (structurelle).

---

## 3. Les Composants Fondamentaux

### A. Rules (Les Lois)
Les **Rules** constituent le "Code Civil" de l'agent.
*   **Nature** : Contraintes **passives** et permanentes. Elles ne disent pas "comment faire", mais "ce qu'il est interdit de faire".
*   **Fonctionnement** : Elles agissent comme un garde-fou. Qu'on demande une petite correction ou une grosse fonctionnalité, la Règle est toujours active en arrière-plan.
*   **Ce qu'on ne met PAS dans une Rule** :
    *   Des instructions étape par étape (C'est un Workflow).
    *   Des snippets de code ou des tutoriaux (C'est un Skill).

*Exemple :* "Interdiction absolue d'utiliser du SQL brut dans un Contrôleur."

### B. Skills (Les Compétences)
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

### C. Workflows (Les Procédures)
Les **Workflows** sont les **plans d'action**.
*   **Nature** : Séquences ordonnées. Ils orchestrent le travail.
*   **Granularité** : Il existe deux niveaux de workflows :
    1.  **Macro (Processus)** : Gère les grandes phases (ex: "Développer une nouvelle Feature" de A à Z).
    2.  **Micro (Tâche)** : Gère une action précise (ex: "Refactoriser une classe").
*   **Rôle** : Le Workflow est le chef d'orchestre. Il appelle le bon Skill au bon moment et demande validation.

*Exemple :* `Implémentation` : 1. Analyser (Skill Architecte) -> 2. Coder (Skill Dev) -> 3. Tester (Skill QA).

### Résumé des différences

*   **Rule** = Le Code de la Route (Ce qui est autorisé/interdit).
*   **Skill** = Le Pilote (Celui qui sait conduire).
*   **Workflow** = L'Itinéraire (Le chemin à suivre).

---

## 4. Fonctionnement d'Antigravity

Comment l'agent utilise-t-il ces fichiers ?

1.  **Réception** : L'utilisateur envoie une commande courte : "Crée la page Login".
2.  **Chargement** : Antigravity analyse la demande et charge :
    *   Le **Workflow** correspondant (ex: Feature Creation).
    *   Les **Skills** nécessaires (ex: UI, PHP).
    *   Toutes les **Rules** applicables.
3.  **Exécution** : L'agent suit les étapes du Workflow. À chaque étape, il utilise le savoir-faire du Skill, tout en vérifiant qu'il ne viole aucune Rule.

---

## 5. Cas Pratique : Le "Maquettage First"

Pour illustrer, voici comment on transforme une méthode de travail humaine en configuration Antigravity.

**La méthode humaine :**
"On ne code jamais le PHP (Backend) tant que le HTML (Frontend) n'est pas validé visuellement."

**La traduction Antigravity :**

1.  **Config Skills** : On crée un expert `createur-ui` (Frontend) et un expert `developpeur-php` (Backend).
2.  **Config Workflow** : On écrit un script `/creation-page` qui :
    *   Étape 1 : Appelle `createur-ui` pour faire le HTML.
    *   Étape 2 : **STOP**. Demande validation utilisateur.
    *   Étape 3 : Si validé, appelle `developpeur-php` pour la logique.
3.  **Config Rule** : On ajoute une sécurité `no-backend-without-frontend` : "Interdit de modifier un fichier `.php` (Controller) si le fichier `.html.twig` correspondant n'existe pas."

Ainsi, l'architecture force respectueusement le développeur à suivre la bonne méthode.