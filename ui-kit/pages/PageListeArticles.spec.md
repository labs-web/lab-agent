# Spécification : PageListeArticles

## Description
Page publique affichant la liste de tous les articles disponibles. C'est la page d'accueil de la section publique du site.

## User Stories
- En tant que **visiteur**, je veux voir la liste des articles pour découvrir le contenu disponible.
- En tant que **visiteur**, je veux voir un aperçu de chaque article (titre, résumé, date) pour choisir celui qui m'intéresse.
- En tant que **visiteur**, je veux cliquer sur un article pour lire son contenu complet.

## Structure Visuelle (Wireframe Textuel)

```
┌─────────────────────────────────────────────────────────┐
│                      HEADER                              │
│  Logo                              Navigation (Accueil)  │
├─────────────────────────────────────────────────────────┤
│                                                          │
│  ┌─────────────────────────────────────────────────┐    │
│  │              TITRE PAGE (H1)                     │    │
│  │           "Nos Articles"                         │    │
│  └─────────────────────────────────────────────────┘    │
│                                                          │
│  ┌─────────────────────────────────────────────────┐    │
│  │  GRILLE D'ARTICLES (3 colonnes sur desktop)      │    │
│  │                                                   │    │
│  │  ┌─────────┐  ┌─────────┐  ┌─────────┐          │    │
│  │  │ Image   │  │ Image   │  │ Image   │          │    │
│  │  │ Titre   │  │ Titre   │  │ Titre   │          │    │
│  │  │ Résumé  │  │ Résumé  │  │ Résumé  │          │    │
│  │  │ Date    │  │ Date    │  │ Date    │          │    │
│  │  │ [Lire+] │  │ [Lire+] │  │ [Lire+] │          │    │
│  │  └─────────┘  └─────────┘  └─────────┘          │    │
│  │                                                   │    │
│  └─────────────────────────────────────────────────┘    │
│                                                          │
├─────────────────────────────────────────────────────────┤
│                      FOOTER                              │
│                © 2026 Tous droits réservés               │
└─────────────────────────────────────────────────────────┘
```

## Composants Requis (Atomic Design)

### Layouts
- [ ] **LayoutPublic** : Structure globale (Header, Main, Footer)

### Molecules
- [ ] **Header** : Logo + Navigation
- [ ] **Footer** : Copyright
- [ ] **ArticleCard** : Carte d'aperçu d'un article

### Pages
- [ ] **PageListeArticles** : Assemblage final

## Éléments de ArticleCard
- [ ] Image de couverture (placeholder si absente)
- [ ] Titre de l'article (H3)
- [ ] Résumé (extrait, max 100 caractères)
- [ ] Date de publication
- [ ] Bouton/Lien "Lire la suite"

## Données Attendues (Mockup)
```
articles = [
    {
        id: 1,
        titre: "Premier article",
        resume: "Ceci est un résumé du premier article...",
        date: "2026-01-27",
        image: "placeholder.jpg"
    },
    ...
]
```

## Notes pour le Créateur UI
- Utiliser la charte graphique (`ui-kit/charte-graphique/charte.md`)
- Grille responsive : 1 colonne mobile, 2 tablette, 3 desktop
- Cartes avec effet hover (shadow-md → shadow-lg)
- Bouton "Lire la suite" en couleur primary
