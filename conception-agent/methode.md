# Méthode de Conception d'Agent : L'Approche "Tri-Force"

Cette méthodologie structure la création du "Cerveau" d'un agent IA en trois couches distinctes mais interdépendantes. L'objectif est de garantir autonomie, cohérence et maintenabilité.

## 1. Le Modèle Conceptuel

Un agent n'est pas un prompt unique. C'est un système composé de :
1.  **Skills (Capacités)** : *Le "Savoir-Faire"* (Bras).
2.  **Workflows (Procédures)** : *Le "Savoir-Procéder"* (Méthode).
3.  **Rules (Lois)** : *Le "Savoir-Être"* (Conscience).

---

## Phase 1 : Scénarisation des Workflows (Orchestration)
Ne laissez pas l'agent improviser le plan. Donnez-lui la carte.

*   **Principe** : Un Workflow = Une Recette de Cuisine étape par étape.
*   **Structure** :
    *   **Trigger** : Quand utiliser ce workflow ?
    *   **Steps** : Liste séquentielle. Chaque étape identifie un **besoin de Skill**.
    *   **Checkpoints** : Moments de validation humaine obligatoire.
*   **Question de conception** : *"Quel est le chemin critique pour livrer cette fonctionnalité, et de quels experts j'ai besoin à chaque étape ?"*

## Phase 2 : Atomisation des Skills (Capacités)
Une fois les besoins identifiés par les workflows, créez les spécialistes pour y répondre.

*   **Principe** : Un Skill = Une Expertise Technique isolée répondant à une étape de Workflow.
*   **Action** : Créez un dossier par compétence (ex: `sql-expert`, `tailwind-designer`).
*   **Question de conception** : *"Si je devais embaucher un freelance juste pour réaliser l'étape 3 du workflow, quel serait son titre ?"*

## Phase 3 : Constitution des Rules (Garde-Fous)
Ne répétez pas les consignes de sécurité dans chaque tâche. Faites-en des lois.

*   **Principe** : Une Rule = Une Contrainte Transversale Immuable.
*   **Scope** : Sécurité, Stack Technique, Persona, Convention de Nommage.
*   **Question de conception** : *"Quelles sont les erreurs que je ne veux PLUS JAMAIS voir, quel que soit le contexte ?"*

---

## Bonnes Pratiques de Cohérence

### 2. Gestion de la Redondance
*   Si une consigne apparaît dans plus de 2 workflows -> **Montez-la en Rule**.
*   Si une Rule devient trop procédurale (étape 1, 2, 3) -> **Descendez-la en Workflow**.

### 3. Cycle d'Évolution
L'agent évolue par itération :
1.  **Constat d'échec** : L'agent a mal codé une boucle.
2.  **Analyse** : Est-ce un manque de savoir (Skill), de méthode (Workflow) ou de rigueur (Rule) ?
3.  **Patch** : Créez ou modifiez le fichier unique correspondant.
