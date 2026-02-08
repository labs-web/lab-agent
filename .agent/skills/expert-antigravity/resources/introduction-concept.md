# Introduction et Concept Antigravity

## 1. Introduction et Contexte

### Objectif

L'objectif de cette documentation est multiple :

1. **Comprendre et Maintenir** : Faciliter l'appropriation et la maintenance de la structure de l'agent.
2. **Architecture Antigravity** : Détailler la structure standardisée d'un agent conçu avec le framework Antigravity.
3. **Guide de Conception** : Expliquer aux développeurs la méthodologie pour concevoir et configurer leur propre agent.
4. **Workflow de Développement** : Décrire comment utiliser l'agent pour développer des applications en suivant des processus spécialisés et optimisés.

### Anatomie d'une IA Agentique (Théorie Générale)

Avant de parler d'Antigravity, il faut comprendre de quoi est composé un agent IA standard :

1.  **Le Modèle (LLM)** : C'est le cerveau (ex: GPT-4, Claude 3.5). Il raisonne et génère du texte.
2.  **La Mémoire (Contexte)** : C'est sa capacité à retenir l'information.
    *   *System Prompt* : Sa personnalité de base.
    *   *Context Window* : Sa mémoire de travail immédiate (limitée en taille).
3.  **Les Outils (Tools)** : Ce sont ses bras. Le LLM ne peut que *parler*, mais avec des outils, il peut *agir* (lire un fichier, exécuter une commande).

### 1. Contexte : Le "Prompt" et ses limites

#### Qu'est-ce un Prompt ?
Un **Prompt** est l'instruction initiale envoyée au modèle de langage (LLM). C'est le point d'entrée qui contient la demande de l'utilisateur. Dans une approche classique, ce prompt doit être exhaustif : contexte, tâche, règles de sécurité, stack technique, etc.

**Exemple de "Mega-Prompt" monolithique (Classique) :**
> "Agis comme un expert Senior Tailwind. Crée une landing page. IMPORTANT : Utilise le set de couleurs 'Slate', pas de CSS custom, utilise Flexbox pour le header, la police Inter... [et 50 autres lignes de contraintes]"

### Composants d'un Prompt de Développement

Pour qu'un prompt soit efficace dans le développement logiciel, il doit généralement contenir ces 5 briques :

1.  **Persona (Rôle)** : "Agis comme un Expert HTML/CSS."
2.  **Contexte** : "Nous créons un site vitrine ultra-rapide sans backend."
3.  **Instruction (Tâche)** : "Crée le composant 'Hero Section'."
4.  **Contraintes (Règles)** : "Utilise uniquement les classes Tailwind, pas de `<style>`."
5.  **Format de sortie** : "Donne-moi uniquement le code HTML, sans explications."

Dans l'approche monolithique, tout cela est mélangé dans un seul bloc de texte. Antigravity propose de séparer ces briques.

#### La Problématique
Pourquoi ne pas simplement utiliser ce type de prompt ?
1.  **Dilution cognitive** : L'IA "oublie" souvent les règles noyées au milieu de centaines de lignes d'instructions.
2.  **Conflits** : Difficile de prioriser entre "Fais vite" et "Fais sécurisé".
3.  **Maintenance nulle** : Si on change de version de CSS, il faut réécrire tous ses prompts.

---

### 2. Objectif du Tutoriel : Le "Static WebBuilder" Industriel

Ce n'est pas une simple démo. Cette documentation est le **Blueprint** exact de l'agent "Static WebBuilder" que vous utilisez actuellement.

**Notre Mission :**
Comprendre comment on passe d'un script simple à une **Usine Logicielle Statique** capable d'assembler des sites web complexes sans aucune dette technique backend.

**L'Architecture Cible (Ce que nous allons décortiquer) :**
*   **5 Règles** de Gouvernance (Identité, UI-First, Stack...).
*   **5 Experts** (Skills) spécialisés (du Graphiste à l'Intégrateur).
*   **1 Master Workflow** qui orchestre des sous-processus.

C'est une approche "Reverse Engineering" : nous partons du résultat final (l'agent complet) pour expliquer chaque pièce du puzzle.

## 2. Le Concept Antigravity

### La Solution : Antigravity

**Antigravity** est une architecture modulaire pour agents IA. Au lieu d'écrire un prompt unique, nous "éclatons" l'intelligence en trois composants distincts stockés dans le dossier `.agent/`.

L'objectif est de passer d'un "Prompt Ingénierie" (rédactionnel) à une "Architecture Agentique" (structurelle).

### Fonctionnement d'Antigravity

Comment l'agent utilise-t-il ces fichiers ?

1.  **Réception** : L'utilisateur envoie une commande courte : "Crée la page Login".
2.  **Chargement** : Antigravity analyse la demande et charge :
    *   Toutes les **Rules** sont chargées en mémoire (L'agent connait désormais toutes les lois potentielles).
    *   Le **Workflow** correspondant (Le plan d'action est sélectionné).
    *   Les **Skills** nécessaires (Les outils sont convoqués).
3.  **Exécution & Surveillance** : L'agent suit le Workflow. À chaque action (ex: "Créer un fichier HTML"), il vérifie dynamiquement dans sa mémoire si une Règle correspondante (ex: "Règle UI-First") doit s'activer.

### L'Architecture Antigravity sous le capot

Comment Antigravity structure les concepts généraux de l'IA ?

*   **System Prompt** → correspond aux **Rules** (`rules/*.md`)
    *   *Rôle* : Peuple la mémoire initiale avec les Lois.

*   **Logic / Knowledge** → correspond aux **Skills** (`skills/*.md`)
    *   *Rôle* : Active des blocs de savoir spécialisés à la demande.

*   **Planning** → correspond aux **Workflows** (`workflows/*.md`)
    *   *Rôle* : Externalise le plan d'action dans un fichier fixe plutôt que dans la tête de l'IA.

*   **Long-term Memory** → correspond au **Projet** (Fichiers)
    *   *Rôle* : L'agent utilise votre code source comme mémoire réelle.
