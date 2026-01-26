---
trigger: always_on
---

# Protocole Méthodologique et Pédagogie

## 1. Cycle de Développement "UI-First" (Ordre Immuable)
Pour toute nouvelle fonctionnalité, l'agent doit OBLIGATOIREMENT suivre cet ordre strict et identifier les Skills/Workflows appropriés :

### PHASE 1 : Analyse & Atomisation UI (Design System)
**Avant toute ligne de code**, l'agent doit scanner le projet pour identifier les composants UI.
- **Objectif** : Détecter les composants nécessaires (Boutons, Cards, Inputs...) et valider leur existence.
- **Règle d'Or** : **Toujours consulter `ui-kit/components-manifest.yaml`** avant toute création.
- **Maintenance** : Toute création de composant doit être enregistrée dans ce manifeste.
- **Livrable** : Plan d'action et mise à jour du statut des composants dans le manifeste.
- **Skill Requis** : `ui-designer-tailwind` (Mode Analyse).

### PHASE 2 : Prototypage Statique (UI-Kit)
Création des composants HTML/Tailwind isolés avec données "Mocks".
- **Lieu** : Uniquement dans le dossier `ui-kit/`.
- **Interdiction** : Aucune logique PHP ni dépendance backend à ce stade.
- **Skill Requis** : `ui-designer-tailwind`.

### PHASE 3 : Intégration & Logique (Architecture 3-Tiers)
Câblage final entre le Controller, le Service et le Model une fois le design validé.
- **Flux d'Implémentation** : `Model` (Données) -> `Service` (Logique) -> `Controller` (Orchestration).
- **Skills Requis** : `business-logic-expert` (Backend) puis `tier1-integrator` (Frontend/Routing).

## 2. Validation et Points d'Arrêt (Checkpoints)
- **Validation UI Obligatoire** : Tout élément visuel doit être validé par le développeur avant d'être intégré à la logique métier.
- **Point d'Arrêt** : L'agent doit s'arrêter après chaque phase et demander explicitement : *"L'étape [Nom] est terminée. Souhaitez-vous valider pour passer à la suite ?"*.
- **Refus d'Assomption** : Ne jamais supposer qu'un design est correct sans confirmation humaine explicite.

## 3. Standard de Communication (Video Coding)
- **Explication de l'Intention** : Avant de générer du code, l'agent doit expliquer brièvement l'objectif pédagogique et la règle respectée.
- **Transparence** : Afficher systématiquement l'en-tête de contexte (Rôle, Skills, Workflow) au début de chaque réponse.
- **Aide à la Lecture** : Utiliser des blocs de code aérés et des commentaires axés sur le "Pourquoi" pour faciliter la compréhension à l'écran.

## 4. Mode Chat (Conversationnel)
- **Déclencheur** : Activé lorsque le message de l'utilisateur commence par le caractère `>`.
- **Comportement** : L'agent passe en lecture seule. Il ne doit pas utiliser d'outils de modification de fichiers (`write_to_file`, etc.).
- **Utilisation** : Idéal pour poser des questions théoriques ou analyser du code sans impacter le projet.

## 5. Isolation du UI-Kit
- Les fichiers dans `ui-kit/` doivent rester strictement statiques.
- Ils doivent inclure leurs propres dépendances (ex: CDN Tailwind) pour être prévisualisables de manière autonome par le développeur.