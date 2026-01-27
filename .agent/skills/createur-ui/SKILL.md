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
5.  **Synchroniser les Fichiers** : À chaque modification du composant :
    - Mettre à jour le fichier `.spec.md` (ajout de notes, modifications de structure).
    - Mettre à jour `components-manifest.yaml` (status, description, dépendances).

## Inputs
- **Fichier `.spec.md`** : Description textuelle du composant (structure, éléments, données).
- **`components-manifest.yaml`** : Liste des composants à créer (status `pending`).

## Outputs
- **Fichier `.html`** : Code HTML pur avec classes Tailwind.
- **Fichier `.spec.md` mis à jour** : Ajout des notes de réalisation, modifications.
- **Manifeste mis à jour** : Status `validated`, éventuelles nouvelles dépendances.

## Exigence : Pages HTML Autonomes (OBLIGATOIRE)

Chaque fichier `.html` DOIT être une **page HTML complète et fonctionnelle** que le développeur peut ouvrir directement dans son navigateur pour tester.

### Structure minimale obligatoire
```html
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[Nom du Composant] - Preview</title>
    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Inter', sans-serif; }</style>
</head>
<body>
    <!-- Composant ici -->
</body>
</html>
```

### Règles
- **CDN obligatoire** : Tailwind + Google Fonts
- **Données mockées** : Utiliser de fausses données réalistes
- **Aucune dépendance locale** : Le fichier doit fonctionner seul
- **UN SEUL composant par fichier** : Chaque fichier `.html` affiche UN SEUL exemplaire du composant (pas de grille, pas de multiples instances)

## Règle de Synchronisation
**À CHAQUE modification d'un composant HTML**, tu DOIS :
1.  Mettre à jour le `.spec.md` correspondant (documenter les changements).
2.  Mettre à jour le `components-manifest.yaml` si nécessaire.

## Interdictions
- **Pas de PHP logique** : Code statique uniquement.
- **Pas de JS Framework** : Vanilla JS minimal si nécessaire.
- **Pas de CSS custom** : Tailwind classes only.

---

## Exigences UI/UX (OBLIGATOIRE)

Les maquettes doivent **impressionner visuellement** et offrir une **expérience utilisateur premium**.

### Design Visuel
- **Esthétique moderne** : Éviter les designs plats/basiques. Utiliser gradients, ombres, bordures subtiles.
- **Palette harmonieuse** : Respecter strictement la charte graphique.
- **Typographie soignée** : Hiérarchie claire (H1 > H2 > H3), espacement généreux.
- **Espacement aéré** : Utiliser les tokens d'espacement (p-4, p-6, p-8). Jamais trop compact.

### Expérience Utilisateur
- **Micro-interactions** : Tous les éléments interactifs doivent avoir des effets hover/focus (transition, shadow, couleur).
- **Feedback visuel** : L'utilisateur doit savoir où il peut cliquer.
- **Responsive** : Tester mobile, tablette, desktop. Utiliser les breakpoints Tailwind (sm:, md:, lg:).
- **Accessibilité** : Contraste suffisant, focus visible, alt sur images.

### Checklist Qualité UI
Avant de valider un composant, vérifier :
- [ ] Effet hover sur tous les éléments cliquables
- [ ] Transitions smooth (transition, duration-200)
- [ ] Ombres appropriées (shadow, shadow-md, shadow-lg)
- [ ] Bordures arrondies cohérentes (rounded-md, rounded-lg)
- [ ] Espacement suffisant (minimum p-4 pour les conteneurs)
- [ ] Responsive sur 3 tailles d'écran

---

## Exigence : Page Index Galerie (OBLIGATOIRE)

**Emplacement** : `ui-kit/index.html`
**But** : Vue d'ensemble de tous les composants UI du projet.

### Structure obligatoire
- **Sidebar fixe** (à gauche) : Liste hiérarchique de tous les composants
  - Catégories : Charte Graphique, Molecules, Layouts, Pages
  - Chaque item cliquable charge le composant
- **Zone principale** : Iframe affichant le composant sélectionné
- **Toolbar** : Nom du composant + bouton "Ouvrir dans nouvel onglet"

### Mise à jour automatique
À chaque ajout de composant, mettre à jour `ui-kit/index.html` pour l'inclure dans la sidebar.
