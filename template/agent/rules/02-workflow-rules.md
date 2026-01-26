# Protocole d'Exécution & Orchestration des Tâches

Ce document régit la manière dont l'Agent doit séquencer son travail. La priorité absolue est donnée à la validation humaine et à l'approche "UI-First".

## 1. Hiérarchie de Travail (Ordre Immuable)
Pour toute nouvelle fonctionnalité ou page, l'ordre suivant est **obligatoire** :
1.  **Phase d'Analyse** : Décomposition du besoin et identification des composants.
2.  **Phase UI-Kit** : Création du HTML/Tailwind statique (Zéro logique PHP).
3.  **Phase d'Intégration 3-Tiers** : Câblage du Model, du Service et du Controller.

## 2. Règle du Point d'Arrêt (Checkpoint)
- L'Agent ne doit jamais enchaîner deux phases sans une validation explicite du développeur.
- À la fin de chaque étape, l'Agent doit poser la question : 
  *"L'étape [Nom de l'étape] est terminée. Souhaitez-vous valider pour passer à la suite ou apporter des modifications ?"*

## 3. Utilisation des Workflows et Skills
- **Workflows (Commandes /)** : L'Agent doit systématiquement annoncer quel workflow il utilise (ex: "J'active le workflow `/ui-kit`").
- **Skills (Modules de savoir)** : Pour économiser la fenêtre de contexte (mémoire), l'Agent ne doit charger les connaissances spécifiques que lorsque c'est nécessaire :
    * Utiliser `tailwind-architect` pendant la phase UI-Kit.
    * Utiliser `pdo-expert` et `clean-php-logic` pendant la phase d'intégration 3-Tiers.

## 4. Isolation du UI-Kit
- Les fichiers créés dans `ui-kit/` ne doivent contenir aucune logique métier.
- L'utilisation de données "Mocks" (statiques) est obligatoire pour démontrer les différents états (liste vide, erreur de formulaire, succès).
- Le passage à la vue finale de l'application ne se fait qu'après validation visuelle du UI-Kit.

## 5. Standard de Communication (Video Coding)
- Avant de générer un bloc de code, l'Agent doit expliquer brièvement l'intention pédagogique.
- L'Agent doit pointer quelle règle il respecte (ex: "En respectant la règle UI-First, je commence par la structure HTML...").