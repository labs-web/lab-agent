# Workflow : Développement de Composants UI-Kit (Statique)

Ce workflow intervient après la validation de l'analyse. Son but est de produire le "Tier 1" (Présentation) de manière isolée et rigoureuse.

## Étape 1 : Initialisation du Composant
- **Emplacement** : Créer le fichier dans `ui-kit/[nom-du-composant].php`.
- **Principe Atomic Design** :
    - Si c'est un petit élément (Bouton, Badge) -> Dossier `atoms/`.
    - Si c'est un groupe fonctionnel (Input avec Label, Carte) -> Dossier `molecules/`.
    - Si c'est une section complexe (Formulaire complet, Header) -> Dossier `organisms/`.

## Étape 2 : Structure HTML & Styling Tailwind
- **Sémantique** : Utiliser les balises HTML5 appropriées.
- **Tailwind** : Appliquer les classes utilitaires en respectant le "Mobile-First".
- **Accessibilité** : Ajouter les attributs `aria-` nécessaires et gérer les états `:focus` et `:hover`.

## Étape 3 : Injection de Données Mocks (Données en dur)
- **Contrainte PHP** : Interdiction d'utiliser des appels de fonctions globales ou des classes de Service.
- **Variables de Démo** : Au sommet du fichier, définir des variables PHP simples pour simuler les données réelles.
- **Exemple** :
  ```php
  $title = $title ?? "Titre d'exemple";
  $status = $status ?? "en-attente";