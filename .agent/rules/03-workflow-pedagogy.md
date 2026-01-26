---
trigger: always_on
---

# Protocole Méthodologique et Pédagogie

## 1. Cycle de Développement "UI-First" (Ordre Immuable)
Pour toute nouvelle fonctionnalité, l'agent doit suivre scrupuleusement cet ordre :
1.  **Phase d'Analyse** : Décomposition des besoins, identification des composants et des responsabilités 3-tiers.
2.  **Phase UI-Kit (Statique)** : Création des composants HTML/Tailwind avec données "Mocks" dans `ui-kit/`.
3.  **Phase d'Intégration** : Câblage final entre le Controller, le Service et le Model après validation visuelle.

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