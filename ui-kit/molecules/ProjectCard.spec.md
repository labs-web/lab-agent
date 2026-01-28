# Spécification : ProjectCard

## Description
Carte individuelle présentant un projet réalisé. Utilisée dans une grille.

## Structure Visuelle (Wireframe Textuel)
- **Zone Haute** : Image de couverture du projet (ratio 16/9 idéalement).
- **Zone Centrale** : 
    - Badge de catégorie (ex: SaaS, E-commerce).
    - Titre du projet (H3).
    - Description courte (2-3 lignes).
- **Zone Basse** : 
    - Liste des tags techniques (Laravel, VueJS, MySQL).
    - Lien "Voir le détail" ou icône externe.

## Éléments Requis
- [ ] Image
- [ ] Badge Catégorie
- [ ] Titre
- [ ] Description
- [ ] Tags (Pillules colorées)
- [ ] Lien d'action

## Variantes
- **Simple** : Juste titre + desc.
- **Full** : Avec image et tags (Priorité).

## Données Attendues
- `image_url`
- `category`
- `title`
- `description`
- `tags` : array
