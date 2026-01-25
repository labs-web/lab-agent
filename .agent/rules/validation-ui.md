---
trigger: always_on
---

# Validation Obligatoire des Interfaces Utilisateur (UI)

## Objectif
Garantir que tout élément visuel (composant, page, style) créé par l'agent est validé visuellement par le développeur avant d'être considéré comme terminé ou utilisé massivement.

## Contexte
Les composants UI (UI Kit) dépendent de variables CSS et d'un contexte spécifique. L'IA ne peut pas "voir" le résultat final. Une validation humaine est donc indispensable pour éviter les régressions visuelles ou les designs cassés.

## Directives
1.  **Prévisualisation Autonome** : Pour tout nouveau composant ou modification significative d'UI, l'agent DOIT s'assurer que le composant est prévisualisable isolément (ex: `index.html` exécutable avec CDN et variables incluses, ou page de démo dédiée).
2.  **Point d'Arrêt de Validation** : L'agent DOIT demander explicitement une validation visuelle à l'utilisateur via `notify_user` en fournissant le lien d'accès (ex: `http://localhost:8000/...`).
3.  **Blocage** : L'agent ne doit pas procéder à l'intégration finale ou marquer la tâche comme complètement terminée tant que l'utilisateur n'a pas confirmé explicitement (ex: "C'est validé", "OK pour le design").
4.  **Refus d'Assomption** : Ne jamais supposer que le rendu est correct uniquement basée sur la validité syntaxique du code.

## Exemple de Workflow
1.  Création du composant `ArticleCard` dans `ui-kit/`.
2.  Inclusion des dépendances (CSS variables, Fonts) dans `index.html` pour le rendre affichable seul.
3.  Notification Utilisateur : *"Le composant est testable ici : [URL]. Le design est-il conforme ?"*
4.  Attente de la réponse de l'utilisateur avant de l'utiliser dans `public/index.php`.
