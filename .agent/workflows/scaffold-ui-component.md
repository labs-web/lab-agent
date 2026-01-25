---
description: Workflow pour créer un nouveau composant UI isolé dans le UI Kit.
---

# Scaffold New UI Component

Ce workflow guide la création d'un nouveau composant visuel dans le UI Kit en respectant les principes de l'Atomic Design et du développement isolé.

## Étapes

1.  **Définition du Besoin**
    - Demander à l'utilisateur le nom du composant (ex: `GlassCard`, `PrimaryButton`).
    - Identifier le type : Atome, Molécule ou Organisme.

2.  **Création de la Structure**
    - Créer le répertoire : `ui-kit/components/[NomComposant]/`.
    - Créer le fichier unique : `index.html` (qui contiendra HTML, CSS et JS).

// turbo
3.  **Implémentation du Code (HTML/CSS/JS)**
    - Remplir `index.html`.
    - Ajouter la structure HTML.
    - Ajouter le CSS "Premium" dans une balise `<style>`.
    - Ajouter l'interactivité dans une balise `<script>` (si nécessaire).



5.  **Validation**
    - Demander à l'utilisateur de vérifier `ui-kit/components/[NomComposant]/index.html`.
    - Affiner le design selon les retours.
