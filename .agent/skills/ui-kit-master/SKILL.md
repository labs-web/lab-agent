---
name: ui-kit-master
description: Guide pour la création et l'utilisation de composants UI réutilisables et esthétiques (Design-First).
---

# UI Kit Master

## Objectif
Créer des interfaces "Premium", cohérentes et réutilisables en suivant une approche Atomic Design.

## Principes de Design
1.  **Esthétique Premium** :
    - Utiliser des ombres douces et des gradients subtils.
    - Privilégier le **Glassmorphism** (transparence floutée) pour les conteneurs sur fond complexe.
    - Soigner la typographie (Inter, Roboto) et l'espacement (Whitespace).
2.  **Micro-Interactions** :
    - Tous les éléments interactifs doivent avoir des états `hover`, `active`, et `focus` visibles et animés (transition CSS).

## Règles de Développement des Composants

### 1. Isolation
- Tout nouveau composant doit être créé dans `ui-kit/components/[NomComposant]/`.
- Il doit être indépendant du reste de l'application (pas de dépendance métier).

### 2. Structure d'un Composant
Chaque dossier composant doit contenir :
- `index.html` : Ce fichier UNIQUE contient tout le code du composant :
    - **Structure** : HTML.
    - **Style** : CSS encapsulé dans une balise `<style>`.
    - **Logique** : JS encapsulé dans une balise `<script>`.

### 3. Réutilisabilité (No Hardcoding)
- Ne jamais coder en dur des textes ou des couleurs spécifiques à un contexte métier.
- Utiliser des **Variables CSS** pour les couleurs, fonts, et spacings (définis dans `ui-kit/base/variables.css`).
- Les composants doivent accepter des arguments de configuration (classes, data-attributes, paramètres de fonction).

### 4. Atomic Design
- **Atomes** : Boutons, Inputs, Labels, Icones.
- **Molécules** : Cartes, Formulaires simples, Barres de recherche.
- **Organismes** : Navbars, Footers, Grilles de produits.
