# Spécification : ArticleCard

## Description
Carte d'aperçu d'un article, affichée dans une grille sur la page liste.

## Structure Visuelle (Wireframe Textuel)
```
┌─────────────────────────┐
│  ┌───────────────────┐  │
│  │      Image        │  │
│  │   (couverture)    │  │
│  └───────────────────┘  │
│                         │
│  Titre Article (H3)     │
│                         │
│  Résumé court...        │
│                         │
│  📅 27 Jan 2026         │
│                         │
│  [Lire la suite →]      │
└─────────────────────────┘
```

## Éléments Requis
- [ ] Container : bg-white, rounded-lg, shadow, hover:shadow-md
- [ ] Image : aspect-video, object-cover, rounded-t-lg
- [ ] Titre : text-xl, font-semibold, text-gray-800
- [ ] Résumé : text-sm, text-gray-500, line-clamp-2
- [ ] Date : text-xs, text-gray-400
- [ ] Bouton : text-blue-500, hover:text-blue-600, font-medium

## Données Attendues
- `image` : URL de l'image (ou placeholder)
- `titre` : Titre de l'article
- `resume` : Extrait (max 100 caractères)
- `date` : Date de publication (format: "27 Jan 2026")
- `lien` : URL vers l'article complet

## Notes pour le Créateur UI
- Transition smooth sur le hover (transition-shadow)
- Image placeholder si absente : fond gris avec icône
- Truncate le résumé avec line-clamp-2
