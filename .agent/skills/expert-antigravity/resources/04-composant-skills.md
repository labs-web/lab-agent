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
*   *Bon découpage* : `expert-html`, `expert-tailwind`, `createur-ui`.
*   *Pourquoi ?* Car l'`expert-tailwind` intervient aussi bien en phase de création qu'en phase de retouches.

## Relation Skill <-> Rule
> *Si un SKILL doit indiquer des règles, on doit d'abord citer les règles dans Rules ?*

**Oui, absolument.**
Le Skill contient les "Best Practices" techniques (la bonne façon de faire).
La Rule contient les "Interdictions" légales (ce qu'il ne faut pas faire).

Si une pratique est critique et obligatoire (ex: "Images responsives"), elle doit être écrite dans une **Rule**. Le Skill, lui, contiendra le code pour appliquer cette contrainte.
*   **Rule** : "Toute image doit avoir `width` et `height`."
*   **Skill** : "Voici le snippet HTML pour une image `<img>` optimisée."

## Ce qu'on ne met PAS dans un Skill
*   La planification des étapes du projet (C'est un Workflow).
*   Les interdictions absolues et globales (C'est une Rule). Le Skill ne décide pas de la loi, il l'exécute.

## Contenu type d'un Skill
*   Instructions techniques ("Best practices Tailwind v3").
*   Templates de code.
*   Documentation de référence court (Cheat-sheets).

## Exemple
Le Skill `createur-ui` sait transformer une maquette mentale en code HTML/Tailwind valide.

## Migration Prompt vers Agent
Quelle partie du "Mega-Prompt" classique devient un Skill ?
*   **Le Persona (1)** : "Agis comme un Expert HTML Sémantique".
*   **Le Contexte Technique (2)** : "Projet Web Statique Tailwind v3".

Chaque fois que vous avez envie de dire à l'IA "Qui elle est" ou "Quels outils utiliser", c'est un Skill.

*Avant :* `Agis comme un expert CSS... utilise TailwindCSS v3.0...`
*Après :* Skill `expert-tailwind`.

---

## Application au Tutoriel : La "Dream Team" (5 Experts)

Pour notre agence Web Statique, nous recrutons 5 profils distincts. L'agent changera de casquette selon le besoin :

### 1. Le Créatif
*   **[graphiste-charte](file:///e:/labs-web/lab-agent/.agent/skills/graphiste-charte/SKILL.md)** : L'Artiste.
    *   *Rôle* : Définit les palettes de couleurs, les typographies, l'ambiance émotionnelle. Intervient au tout début.

### 2. Les Concepteurs (Le Bureau d'Étude)
*   **[concepteur-ui](file:///e:/labs-web/lab-agent/.agent/skills/concepteur-ui/SKILL.md)** : L'UX Designer.
    *   *Rôle* : Dessine les Wireframes et définit l'expérience utilisateur sans toucher au code.
*   **[architecte-agent](file:///e:/labs-web/lab-agent/.agent/skills/architecte-agent/SKILL.md)** : Le Gardien du système.
    *   *Rôle* : Gère la structure interne `.agent`, s'assure que les Skills et Workflows sont bien rangés.

### 3. Les Réalisateurs (La Factory)
*   **[createur-ui](file:///e:/labs-web/lab-agent/.agent/skills/createur-ui/SKILL.md)** : L'Intégrateur.
    *   *Rôle* : Transforme les wireframes en HTML. C'est le "maçon" qui pose les briques.
*   **[expert-tailwind](file:///e:/labs-web/lab-agent/.agent/skills/expert-tailwind/SKILL.md)** : La Bible Technique.
    *   *Rôle* : Skill purement passif qui contient la documentation de Tailwind v3. C'est le dictionnaire que consulte le `createur-ui`.

*L'agent orchestre ces 5 talents pour produire le site.*
