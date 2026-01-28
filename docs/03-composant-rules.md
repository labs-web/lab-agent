# Composant A : Rules (Les Lois)

## Nature
Les **Rules** constituent le "Code Civil" de l'agent. Ce sont des directives qui définissent **ce que l'agent doit être** et les contraintes qu'il doit impérativement respecter.
*   Elles sont **passives** et **permanentes**.
*   Elles ne disent pas "comment faire", mais "ce qu'il est interdit de faire".

## Fonctionnement
Elles agissent comme un garde-fou (Safety Rail). Qu'on demande une petite correction rapide ou une grosse fonctionnalité complexe, la Règle est toujours active en arrière-plan pour surveiller la conformité.

## Utilisation par l'Agent
Au démarrage, l'agent scanne le dossier `.agent/rules/`. Il injecte ces directives dans sa "Mémoire Système" (System Prompt). Ainsi, chaque réponse générée par l'agent est pré-filtrée par ces contraintes avant d'être envoyée.

## Stratégie de découpage
On découpe les Rules par **Périmètre de Responsabilité** :
*   `00-meta.md` : Protocoles d'interaction et comportement de l'agent.
*   `01-stack.md` : Choix technologiques imposés (ex: "Toujours utiliser Tailwind").
*   `02-securite.md` : Interdictions critiques (ex: "Pas de mot de passe en clair").

*Pourquoi ce découpage ?* Pour pouvoir activer/désactiver des blocs entiers de règles facilement selon le contexte du projet.

## Ce qu'on ne met PAS dans une Rule
*   Des instructions étape par étape (C'est un Workflow).
*   Des snippets de code ou des tutoriaux d'implémentation (C'est un Skill).

## Exemple
> "Interdiction absolue d'utiliser du SQL brut dans un Contrôleur."

> **Pourquoi pas dans le Skill ?**
> Si cette interdiction était dans le Skill "Expert SQL", elle disparaîtrait si l'on changeait d'expert (ex: passage à un Expert NoSQL) ou si l'on utilisait un autre Skill (ex: "Expert Prototype"). En la mettant dans une **Rule**, elle devient une **Loi Universelle** qui s'impose à TOUS les Skills, garantissant la sécurité peu importe qui écrit le code.
