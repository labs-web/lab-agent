# Charte Graphique : Portfolio Développeur

## 1. Identité Visuelle
Un design sobre, professionnel et moderne, inspiré de l'écosystème Laravel mais avec une touche "Premium".

## 2. Palette de Couleurs (Tailwind CSS)

### Couleurs Principales (Brand)
- **Primary** : `indigo-600` (#4F46E5) - Action principale, Liens, Titres forts.
- **Primary-Dark** : `indigo-800` (#3730A3) - Hover, état actif.
- **Accent** : `emerald-500` (#10B981) - Succès, Tags de compétences.

### Couleurs Neutres (Structure)
- **Background** : `slate-50` (#F8FAFC) - Fond de page général.
- **Surface** : `white` (#FFFFFF) - Cartes, Conteneurs.
- **Text-Main** : `slate-900` (#0F172A) - Titres, Texte principal.
- **Text-Muted** : `slate-500` (#64748B) - Sous-titres, Métatadonnées.
- **Border** : `slate-200` (#E2E8F0) - Séparateurs, Bordures subtiles.

## 3. Typographie

**Police** : `Inter` (Google Fonts)
- **H1** : Font-Bold, Text-4xl, Tight tracking.
- **H2** : Font-Bold, Text-2xl.
- **Body** : Font-Regular, Text-base.

## 4. UI Tokens

### Espacement
- Utilisation de l'échelle par défaut Tailwind.
- Section Padding : `py-16` ou `py-24`.
- Component Padding : `p-6` ou `p-8`.

### Ombres & Bordures
- **Shadow** : `shadow-lg` pour les cartes au survol (`shadow-sm` par défaut).
- **Radius** : `rounded-xl` (Premium feel).

## 5. Exemple d'Utilisation
```html
<!-- Bouton Primaire -->
<button class="bg-indigo-600 text-white px-6 py-2 rounded-xl font-medium hover:bg-indigo-800 transition-colors">
  Voir mes projets
</button>
```
