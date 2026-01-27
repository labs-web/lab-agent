# Proposition de Refonte de l'Agent : Application de la Méthode "Tri-Force"

Ce document formalise la reconstruction complète de l'agent selon la méthodologie définie dans `docs/methode.md`. Il détaille les trois couches : Workflows (Orchestration), Skills (Savoir-faire) et Rules (Garde-fous).

---

## Phase 1 : Scénarisation des Workflows (L'Orchestration)
*La "Carte" qui guide l'agent. Nous distinguons un Workflow Maître (Orchestrateur) et des Sous-Workflows opérationnels.*

### 1. Workflow Maître `/processus-developpement` (Orchestrateur)
**Description** : Le workflow standard pour toute création de fonctionnalité. Il appelle les experts tour à tour.
**Trigger** : Demande explicite de nouvelle fonctionnalité.
*   **Phase 1 (Conception UI)** : Lancer `/conception-ui`. (Wireframes, UX, User Stories).
*   **Phase 2 (Maquettage)** : Lancer `/creation-ui`. (Composants, Assemblage Statique).
*   **Phase 3 (Conception Technique)** : Lancer `/conception-technique`. (BDD, Classes, Plan).
*   **Phase 4 (Implémentation)** : Lancer `/implementation`. (Code Backend, Intégration).

---

### 2. Sous-Workflows Opérationnels

#### Workflow A : `/evolution-agent` (Maintenance de l'Agent)
**Trigger** : Commande `>>` ou demande de modification comportementale.
*   **Étape 1 (Analyse)** : Identifier le fichier de configuration (.agent) impacté. (Besoin Skill : *Architecte Agent*)
*   **Étape 2 (Modification)** : Appliquer les modifications sur Règles/Compétences/Workflows. (Besoin Skill : *Architecte Agent*)
*   **Checkpoint** : Validation de la cohérence systémique.

#### Workflow B : `/conception-ui` (Design & UX)
**Trigger** : Appelé par `/processus-developpement`.
*   **Étape 1 (Besoins)** : Identifier les User Stories et le flux utilisateur. (Besoin Skill : *concepteur-ui*)
*   **Étape 2 (Wireframing)** : Décrire la structure des pages (Zones, Navigation). (Besoin Skill : *concepteur-ui*)
*   **Checkpoint** : Validation du concept visuel.

#### Workflow C : `/creation-ui` (Maquettage Visuel)
**Trigger** : Validation de `/conception-ui`.
*   **Étape 1 (Composants)** : Créer les atomes/molécules UI dans `ui-kit/`. (Besoin Skill : *createur-ui*)
*   **Étape 2 (Assemblage)** : Monter la page statique complète avec fausses données. (Besoin Skill : *createur-ui*)
*   **Checkpoint** : Validation visuelle (Design Review).

#### Workflow D : `/conception-technique` (Anciennement Analyse)
**Trigger** : Validation de `/creation-ui`.
*   **Étape 1 (Modélisation)** : Définir le schéma SQL et les Entités. (Besoin Skill : *concepteur-bdd*)
*   **Étape 2 (Structure)** : Lister les fichiers Controllers/Services à créer. (Besoin Skill : *concepteur-technique*)
*   **Checkpoint** : Validation du plan technique.

#### Workflow E : `/implementation` (Implémentation Backend)
**Trigger** : Validation de `/architecture-technique`.
*   **Étape 1 (Couche Données)** : Créer Table SQL, Repository et Entity (typée). (Besoin Skill : *developpeur-php*)
*   **Étape 2 (Couche Service)** : Implémenter la logique métier pure et validations. (Besoin Skill : *developpeur-php*)
*   **Étape 3 (Couche Présentation)** : Créer le Contrôleur et injecter les données dans la Vue. (Besoin Skill : *Intégrateur Fullstack*)
*   **Checkpoint** : Test fonctionnel final.

---

## Phase 2 : Atomisation des Compétences (Les Spécialistes)
*Les noms des "Skills" sont désormais francisés pour une cohérence totale.*

*   **`architecte-agent`** : Expert de la structure `.agent`. Sait lire, créer et modifier règles/skills/workflows. (Usage : `/evolution-agent`).
*   **`concepteur-technique`** : Architecte logiciel. Connaît par cœur le pattern 3-Tiers (Usage : `/conception-technique`).
*   **`concepteur-ui`** : Expert en User Experience. Sait transformer un besoin métier en interface intuitive. (Usage : `/conception-ui`).
*   **`createur-ui`** : Expert HTML5 / Tailwind CSS. Produit du code sémantique et "Pixel Perfect". (Usage : `/creation-ui`).
*   **`concepteur-bdd`** : DBA MySQL. Expert en modélisation (MCD) et requêtes SQL optimisées (PDO). (Usage : `/conception-technique`, `/implementation`).
*   **`developpeur-php`** : Développeur PHP 8.2+ Strict. Expert POO, Services sans état. Ne fait pas de SQL. (Usage : `/implementation`).
*   **`integrateur-fullstack`** : Le "Monteur". Sait connecter un Contrôleur PHP à une Vue HTML existante. (Usage : `/implementation`).

---

## Phase 3 : Constitution des Règles (Les Garde-Fous)
*Les "Rules" assurent la sécurité et la qualité du code.*

### Règle 01 : `01-identite-persona.md`
*   **Loi** : Agir comme un Mentor Senior. Explication "Pourquoi" avant "Comment".
*   **Loi** : Respect absolu des modes (Chat vs Configuration vs Code).
*   **Loi** : Toujours afficher le contexte (Rôle | Compétence | Workflow) en en-tête.

### Règle 02 : `02-stack-technique.md`
*   **Backend** : PHP 8.2+ Vanilla uniquement. (Pas de Frameworks, pas d'ORM).
*   **Frontend** : Tailwind CSS utility-first, Rendu SSR. (Pas de JS Frameworks).
*   **Architecture** : 3-Tiers strict (Données / Domaine / Présentation).

### Règle 03 : `03-qualite-securite.md`
*   **PHP** : `strict_types=1` obligatoire. Typage fort partout.
*   **Sécurité** : `htmlspecialchars()` pour l'affichage, requêtes préparées PDO obligatoires.
*   **Code** : Commentaires explicatifs d'intention.

### Règle 04 : `04-protocole-implementation.md`
*   **Loi UI-First** : Interdiction de coder le PHP tant que le HTML statique (`/ui-kit`) n'est pas validé.
*   **Loi Workflow** : Obligation de suivre le cycle `/conception-ui` -> `/creation-ui` -> `/conception-technique` -> `/implementation`.
*   **Loi Checkpoint** : INTERDICTION FORMELLE de passer au workflow suivant sans un "GO" explicite de l'utilisateur sur le livrable du workflow courant. L'agent doit s'arrêter et attendre la validation.
