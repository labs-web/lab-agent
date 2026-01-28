# Composant B : Skills (Les Compétences)

## Nature
Les **Skills** représentent le **savoir-faire technique**.
*   Ce sont des capacités **actives**.
*   Un Skill est un "Expert Virtuel" (persona) que l'agent invoque temporairement pour réaliser une tâche précise.

## Fonctionnement
Un Skill agit comme une **librairie cognition**. Il fournit à l'agent :
*   Le contexte technique précis (ex: Documentation de Tailwind 3.0).
*   Les commandes terminal spécifiques.
*   Les templates de code optimisés.

Quand un Skill est actif, l'agent "pense" et agit comme cet expert spécifique.

## Utilisation par l'Agent
L'agent ne charge pas tous les Skills en permanence (pour économiser sa fenêtre de contexte).
Il charge un Skill uniquement :
1.  Lorsque le Workflow le demande explicitement (via une commande *Activer Skill X*).
2.  Lorsqu'il détecte un besoin spécifique lié au fichier ouvert (inférence contextuelle).

## Stratégie de découpage
On définit généralement les Skills par **Domaine d'Expertise Technique** (Langage, Framework, Rôle) plutôt que par phase de projet.
*   *Bon découpage* : `expert-php`, `expert-tailwind`, `analyste-bdd`.
*   *Pourquoi ?* Car l'`expert-php` intervient aussi bien en phase d'implémentation (création) qu'en phase de maintenance (bugfix).

## Relation Skill <-> Rule
> *Si un SKILL doit indiquer des règles, on doit d'abord citer les règles dans Rules ?*

**Oui, absolument.**
Le Skill contient les "Best Practices" techniques (la bonne façon de faire).
La Rule contient les "Interdictions" légales (ce qu'il ne faut pas faire).

Si une pratique est critique et obligatoire (ex: "Sécuriser les routes"), elle doit être écrite dans une **Rule**. Le Skill, lui, contiendra le code pour appliquer cette sécurité.
*   **Rule** : "Toute route administrative DOIT être protégée."
*   **Skill** : "Voici le code Middleware pour protéger une route."

## Ce qu'on ne met PAS dans un Skill
*   La planification des étapes du projet (C'est un Workflow).
*   Les interdictions absolues et globales (C'est une Rule). Le Skill ne décide pas de la loi, il l'exécute.

## Contenu type d'un Skill
*   Instructions techniques ("Best practices PHP 8.2").
*   Templates de code.
*   Documentation de référence court (Cheat-sheets).

## Exemple
Le Skill `createur-ui` sait transformer une maquette mentale en code HTML/Tailwind valide.

## Migration Prompt vers Agent
Quelle partie du "Mega-Prompt" classique devient un Skill ?
*   **Le Persona (1)** : "Agis comme un Expert Symfony Senior".
*   **Le Contexte Technique (2)** : "Projet PHP 7.4 avec ces librairies...".

Chaque fois que vous avez envie de dire à l'IA "Qui elle est" ou "Quels outils utiliser", c'est un Skill.

*Avant :* `Agis comme un expert Senior PHP... utilise TailwindCSS v3.0...`
*Après :* Skill `expert-php` et Skill `expert-tailwind`.
