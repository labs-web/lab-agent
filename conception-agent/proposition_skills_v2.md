# Proposition de Refonte de la Structure des Skills

Pour aligner parfaitement les compétences de l'agent avec votre cycle de développement et l'architecture 3-Tiers, je propose une refonte complète des Skills basée sur des **Rôles Métiers Clairs**.

Cette structure élimine la confusion technique (ex: "tier1-integrator") au profit de titres de poste explicites, comme dans une agence web réelle.

## La Nouvelle "Dream Team" (Skills)

Voici les 4 Skills fondamentaux pour couvrir votre cycle complet "UI-First -> 3-Tiers" :

### 1. `ui-prototyper` (Layer 0 : Maquettage)
*   *Remplace : `ui-designer-tailwind`*
*   **Rôle** : Architecte Visuel.
*   **Mission** : Créer les composants statiques (HTML/Tailwind) et gérer le `ui-kit`. Il ne connaît *rien* au PHP ou à la Base de Données.
*   **Analogie** : Le Designer qui livre les maquettes Figma/HTML.

### 2. `view-orchestrator` (Layer 1 : Présentation)
*   *Remplace : `tier1-integrator`*
*   **Rôle** : Contrôleur Frontal.
*   **Mission** : Recevoir la requête HTTP, appeler le service, et *hydrater* la Vue avec les données. C'est le chef d'orchestre du `Controller` et des `Views`.
*   **Analogie** : Le Développeur Frontend (côté serveur).

### 3. `domain-logic-expert` (Layer 2 : Métier)
*   *Remplace : `business-logic-expert`*
*   **Rôle** : Gardien des Règles Métier.
*   **Mission** : Contenir toute l'intelligence de l'application (Services). Il valide les données, effectue les calculs, lève les exceptions. Il ne sait pas *comment* on stocke ou affiche.
*   **Analogie** : L'Ingénieur Backend pur.

### 4. `data-persistence-guard` (Layer 3 : Data)
*   *Remplace : `pdo-repository-master`*
*   **Rôle** : Gestionnaire de Stockage.
*   **Mission** : Parler SQL. Il transforme les objets PHP en lignes MySQL et inversement (Repositories, Entities). C'est le seul autorisé à toucher à PDO.
*   **Analogie** : L'Administrateur de Base de Données (DBA).

---

## Comparatif Avant / Après

| Layer | Besoin        | Ancien Nom (Technique)  | Nouveau Nom (Rôle)           |
| :---- | :------------ | :---------------------- | :--------------------------- |
| **0** | Maquettage UI | `ui-designer-tailwind`  | **`ui-prototyper`**          |
| **1** | Présentation  | `tier1-integrator`      | **`view-orchestrator`**      |
| **2** | Logique       | `business-logic-expert` | **`domain-logic-expert`**    |
| **3** | Données       | `pdo-repository-master` | **`data-persistence-guard`** |

## Impact sur les Workflows

Cette refonte rendra les workflows beaucoup plus lisibles :
*   *Avant* : "Utiliser `tier1-integrator` pour faire le controller."
*   *Maintenant* : "Le `view-orchestrator` prend le relais pour connecter l'interface."

Est-ce que cette nomenclature "Rôles Métiers" vous convient pour lancer la migration ?
