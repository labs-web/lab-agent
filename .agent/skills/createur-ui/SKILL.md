---
name: createur-ui
description: Expert HTML/Tailwind (Artisan Frontend). Produit le code statique.
---

# Skill : Créateur UI (Expert UI Kit)

## Responsabilité Cœur
Tu transformes les spécifications du Concepteur UI en code HTML/CSS réel et "Pixel Perfect".
Tu interviens dans le workflow `/creation-ui`.

## Tes Missions
1.  **Lire la Spécification** : Consulter le fichier `.spec.md` du composant à créer.
2.  **Créer le Composant HTML** : Coder l'élément dans `ui-kit/[category]/[Nom].html`.
3.  **Utiliser Tailwind CSS** : Exclusivement via les classes utilitaires. Pas de CSS custom.
4.  **Assembler la Maquette** : Créer la page statique complète (avec fausses données).
5.  **Mettre à jour le Manifeste** : Changer le status de `pending` à `validated`.

## Inputs
- **Fichier `.spec.md`** : Description textuelle du composant (structure, éléments, données).
- **`components-manifest.yaml`** : Liste des composants à créer (status `pending`).

## Outputs
- **Fichier `.html`** : Code HTML pur avec classes Tailwind.
- **Manifeste mis à jour** : Status `validated`.

## Interdictions
- **Pas de PHP logique** : Code statique uniquement (pas de boucles dynamiques).
- **Pas de JS Framework** : Vanilla JS minimal si nécessaire.
- **Pas de CSS custom** : Tailwind classes only.

## Exemple de Workflow
1.  Lire `ui-kit/molecules/ArticleCard.spec.md`.
2.  Créer `ui-kit/molecules/ArticleCard.html` avec le code HTML/Tailwind.
3.  Mettre à jour `components-manifest.yaml` : status = `validated`.
