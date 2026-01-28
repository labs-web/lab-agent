# Documentation

<!-- Clean et strcurer ce fichier de documentation, il ne faut pas parler d'une notions avant de le définire avant, par exemple, parler de prompt avant de définir ce qu'est un prompt, ou parler de Antigravity avant de définir ce qu'est Antigravity -->

## Objectif

L'objectif de cette documentation est multiple :

1. **Comprendre et Maintenir** : Faciliter l'appropriation et la maintenance de la structure de l'agent.
2. **Architecture Antigravity** : Détailler la structure standardisée d'un agent conçu avec le framework Antigravity.
3. **Guide de Conception** : Expliquer aux développeurs la méthodologie pour concevoir et configurer leur propre agent.
4. **Workflow de Développement** : Décrire comment utiliser l'agent pour développer des applications en suivant des processus spécialisés et optimisés.



## Qu'est-ce qu'un Prompt ?

Un **Prompt** est l'instruction initiale envoyée au modèle de langage (LLM). C'est le point d'entrée qui contient la demande de l'utilisateur.
Dans un développement classique, ce prompt doit tout contenir : le contexte, la tâche, le code existant, les règles de sécurité, le style de code, etc.

<!-- donner un exemple de prompt -->

## Problématique :  Pourquoi diviser le Prompt en Rules, Skills et Workflows ?

Pourquoi ne pas simplement écrire un très long prompt (ou une longue liste de Rules) ?

1.  **Limitation Cognitive de l'IA** : Si on mélange "Interdictions" (Rules) et "Savoir-faire" (Skills) dans le même texte, l'IA a tendance à "diluer" les interdictions. Une règle noyée dans 200 lignes d'instructions techniques est souvent ignorée.
2.  **Conflits de Responsabilité** : Si une règle dit "Fais du code sécurisé" et un Skill dit "Fais vite un prototype", l'IA ne sait pas qui écouter. En séparant les deux, Antigravity donne explicitement la priorité aux Rules (Lois) sur les Skills (Actions).
3.  **Modularité** : On veut pouvoir changer de méthode de travail (Workflow) sans avoir à réécrire les lois fondamentales du projet (Rules).

C'est pourquoi nous ne mettons pas tout dans les Rules.
*   Les **Rules** sont passives et permanentes (Lois).
*   Les **Skills** et **Workflows** sont actifs et temporaires (Actions).


## Définition de Antigravity

<!-- Définition de Antigravity -->

## Structure de l'agent avec Antigravity

L'agent avec Antigravity est composé de plusieurs composants.

le dossier .agent contient :
- le dossier rules 
- le dossier skills
- le dossier workflows


## Définition de rules

Les **Rules** (Règles) constituent le "Code Civil" de l'agent. Ce sont des directives qui définissent **ce que l'agent doit être** et les contraintes qu'il doit impérativement respecter.

Elles s'activent automatiquement ou contextuellement (par exemple, si l'on touche à un fichier PHP, les règles PHP s'appliquent). Elles garantissent la qualité, la sécurité et l'homogénéité du code, quel que soit la tâche en cours.

<!-- Expliquer contraintes passives et non passives -->



*Exemple :* "Interdiction absolue d'utiliser du SQL brut dans un Contrôleur", "Les variables doivent être nommées en camelCase".

<!-- Indiquer les chose à ne pas écrire dans les rules en indisant sont emplacement : SKILL ou WORKFLOW -->



## Définition de skills

Les **Skills** (Compétences) représentent le **savoir-faire technique** de l'agent. Chaque Skill est un "expert virtuel" spécialisé dans un domaine précis (UX, Backend, CSS, SQL, etc.).

<!-- Donc on peut déterminer les skills en analysant le projet techniquement et détertminer les expert que nous avons besoin, pour chaque technique ( langage, framework, etc)  on peut déterminer un exemple : confirmer ou proposer une correction de cet constat, est ce que on construite les skiil par langage, framework, etc  ou par phase de développement (analyse, conception, implémentation, test, déploiement) -->

<!-- Est ce que les skills sont la réponde technique des tâche technique à réaliser dans le projet ? -->

Un skill contient :
- Des instructions détaillées sur "comment faire".
- Des outils spécifiques (scripts, templates).
- Une documentation de référence.

<!-- Une documentation de référence. ?? c'est à dire dans SKILL on met des fichiers de documentation ? -->


Contrairement aux rules qui sont des contraintes passives, les skills sont des capacités actives que l'agent "endosse" pour agir.

*Exemple :* Le skill `createur-ui` sait comment convertir une maquette en HTML/Tailwind propre.


## Définition de workflows

Les **Workflows** (Processus) sont les **plans d'action** : ils définissent la méthode à suivre, étape par étape, pour accomplir un objectif macro.

Ils orchestrent le travail en appelant les différents Skills au bon moment et en vérifiant que les Rules sont respectées. Ils assurent qu'aucun développeur ne saute une étape critique (comme la validation avant le déploiement).

*Exemple :* Le workflow `/implementation` guide l'agent : 1. Analyser le besoin -> 2. Créer l'entité -> 3. Créer le Repository -> 4. Créer le Service.


## Fonctionnement de antigravity

<!-- Comment antigravity fonctionne : comment il lit les rules, skills et workflows -->

<!-- Expliquer par un exemple -->

## Prompt ingénierie

Avant l'approche agentique structurée, le développeur devait maîtriser le "Prompt Engineering" monolithique. Pour obtenir un résultat correct, il fallait rédiger des prompts immenses et complexes à chaque requête.

**Exemple de "Mega-Prompt" classique (sans Antigravity) :**
```text
Agis comme un expert Senior PHP/Symfony. 
Je veux que tu crées une page de login. (Tâche)
ATTENTION : (Contraintes)
1. Utilise l'architecture Hexagonale.
2. Pas de logicier métier dans le contrôleur.
3. Sécurise les mots de passe avec Argon2.
4. Utilise Tailwind pour le CSS (version 3.0).
5. Respecte les conventions PSR-12.
... (et encore 50 lignes de contexte projet) ...
```
**Problème :** C'est répétitif, instable (l'LLM "oublie" souvent une ligne au milieu) et difficile à maintenir.

## Comment passer d'un prompt ingénierie à un agent antigravity ?

Avec Antigravity, nous "éclatons" ce Mega-Prompt en composants modulaires, stockés dans le dossier `.agent`. Le prompt de l'utilisateur devient alors minimaliste.

**Transformation :**
1. **"Agis comme un expert PHP..."** -> Devient le Skill `developpeur-php`.
2. **"ATTENTION : Architecture Hexagonale..."** -> Devient une Rule `architecture-hexagonal`.
3. **"Tâche: Créer page login"** -> Devient l'objectif passé au Workflow.

**Nouveau Prompt utilisateur :**
> "Utilise le workflow Feature pour créer la page login."

L'agent charge alors automatiquement les Skills et Rules nécessaires. C'est plus fiable, plus propre et réutilisable.


## Différence entre Rules, Skills et Workflows

| Composant    | Nature     | Question clé                               | Analogie                          |
| ------------ | ---------- | ------------------------------------------ | --------------------------------- |
| **Rule**     | Contrainte | *Qu'est-ce qui est interdit/obligatoire ?* | Le Code de la Route               |
| **Skill**    | Compétence | *Comment réaliser cette tâche technique ?* | Le Métier (Menuisier, Architecte) |
| **Workflow** | Procédure  | *Dans quel ordre enchaîner les étapes ?*   | La Recette de Cuisine             |


## Exemple de processus de développement basé sur Maquettage first

Dans ce laboratoire, nous suivons une approche "Maquettage First" stricte : on ne code pas le backend tant que l'interface n'est pas validée.

**Le Processus Humain :**
1. **Conception** : On dessine ce qu'on veut (Wireframe).
2. **Design** : On établit l'apparence (Charte).
3. **Intégration** : On code le HTML/CSS statique (Maquette).
4. **Implémentation** : On ajoute le PHP/SQL pour rendre la page dynamique.

Si on ne suit pas cet ordre, on risque de coder du PHP inutile pour une page qui va changer radicalement visuellement.

## Comment, à partir d'un processus de développement basé sur Maquettage first, créer un agent antigravity ?

Pour "agentifier" ce processus, nous créons des structures correspondantes dans Antigravity :

1. **Les Skills spécialisés** : 
   - `concepteur-ui` (Étape 1 & 2)
   - `createur-ui` (Étape 3)
   - `developpeur-php` (Étape 4)

2. **Le Workflow Maître** :
   - `/processus-developpement` : Un script qui appelle séquentiellement ces skills et demande une validation humaine entre chaque étape ("La maquette est-elle bonne ? Si oui, on passe au PHP").

3. **Les Rules de garde-fou** :
   - Une règle interdisant de modifier les contrôleurs PHP si la vue HTML correspondante n'existe pas encore.

Ainsi, l'agent **force** le respect de la méthode de travail idéale.