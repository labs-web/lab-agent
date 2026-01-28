# Introduction et Contexte

## Objectif

L'objectif de cette documentation est multiple :

1. **Comprendre et Maintenir** : Faciliter l'appropriation et la maintenance de la structure de l'agent.
2. **Architecture Antigravity** : Détailler la structure standardisée d'un agent conçu avec le framework Antigravity.
3. **Guide de Conception** : Expliquer aux développeurs la méthodologie pour concevoir et configurer leur propre agent.
4. **Workflow de Développement** : Décrire comment utiliser l'agent pour développer des applications en suivant des processus spécialisés et optimisés.

## Anatomie d'une IA Agentique (Théorie Générale)

Avant de parler d'Antigravity, il faut comprendre de quoi est composé un agent IA standard :

1.  **Le Modèle (LLM)** : C'est le cerveau (ex: GPT-4, Claude 3.5). Il raisonne et génère du texte.
2.  **La Mémoire (Contexte)** : C'est sa capacité à retenir l'information.
    *   *System Prompt* : Sa personnalité de base.
    *   *Context Window* : Sa mémoire de travail immédiate (limitée en taille).
3.  **Les Outils (Tools)** : Ce sont ses bras. Le LLM ne peut que *parler*, mais avec des outils, il peut *agir* (lire un fichier, exécuter une commande).

## 1. Contexte : Le "Prompt" et ses limites

### Qu'est-ce qu'un Prompt ?
Un **Prompt** est l'instruction initiale envoyée au modèle de langage (LLM). C'est le point d'entrée qui contient la demande de l'utilisateur. Dans une approche classique, ce prompt doit être exhaustif : contexte, tâche, règles de sécurité, stack technique, etc.

**Exemple de "Mega-Prompt" monolithique (Classique) :**
> "Agis comme un expert Senior PHP. Crée une page de login. IMPORTANT : Utilise l'architecture Hexagonale, pas de logique dans le contrôleur, sécurise avec Argon2, utilise TailwindCSS v3.0, respecte PSR-12... [et 50 autres lignes de contraintes]"

## Composants d'un Prompt de Développement

Pour qu'un prompt soit efficace dans le développement logiciel, il doit généralement contenir ces 5 briques :

1.  **Persona (Rôle)** : "Agis comme un Expert Symfony Senior."
2.  **Contexte** : "Nous sommes sur un projet e-commerce legacy en PHP 7.4."
3.  **Instruction (Tâche)** : "Crée le contrôleur pour le panier d'achat."
4.  **Contraintes (Règles)** : "Utilise l'injection de dépendance, pas de `new`, et respecte PSR-12."
5.  **Format de sortie** : "Donne-moi uniquement le code PHP, sans explications textuelles."

Dans l'approche monolithique, tout cela est mélangé dans un seul bloc de texte. Antigravity propose de séparer ces briques.

### La Problématique
Pourquoi ne pas simplement utiliser ce type de prompt ?
1.  **Dilution cognitive** : L'IA "oublie" souvent les règles noyées au milieu de centaines de lignes d'instructions.
2.  **Conflits** : Difficile de prioriser entre "Fais vite" et "Fais sécurisé".
3.  **Maintenance nulle** : Si on change de version de CSS, il faut réécrire tous ses prompts.

---

## 2. Objectif du Tutoriel : Le "Static WebBuilder" Industriel

Ce n'est pas une simple démo. Cette documentation est le **Blueprint** exact de l'agent "Static WebBuilder" que vous utilisez actuellement.

**Notre Mission :**
Comprendre comment on passe d'un script simple à une **Usine Logicielle Statique** capable d'assembler des sites web complexes sans aucune dette technique backend.

**L'Architecture Cible (Ce que nous allons décortiquer) :**
*   **5 Règles** de Gouvernance (Identité, UI-First, Stack...).
*   **5 Experts** (Skills) spécialisés (du Graphiste à l'Intégrateur).
*   **1 Master Workflow** qui orchestre des sous-processus.

C'est une approche "Reverse Engineering" : nous partons du résultat final (l'agent complet) pour expliquer chaque pièce du puzzle.
