---
description: Workflow de conception de l'expérience utilisateur (UX) et du wireframing.
---

# Workflow : Conception UI

Ce workflow définit l'interface AVANT tout code.

## Trigger
Appelé par `/processus-developpement` (Étape 1).

## Étapes

### Étape 0 : Charte Graphique (Prérequis)
- **Skill** : `concepteur-ui`
- **Action** : Vérifier si `ui-kit/charte-graphique/charte.md` existe.
    - **Si NON** : Créer la charte graphique (couleurs, typographie, espacements).
    - **Si OUI** : Utiliser la charte existante.
- **Output** : Fichier `ui-kit/charte-graphique/charte.md` validé.
- **CHECKPOINT** : Demander la validation de la charte avant de continuer.

### Étape 1 : Identification des Besoins
- **Skill** : `concepteur-ui`
- **Action** : Lister les User Stories.
    - Format : "En tant que [rôle], je veux [action] pour [bénéfice]."
- **Output** : Liste des fonctionnalités du point de vue utilisateur.

### Étape 2 : Wireframing Textuel
- **Skill** : `concepteur-ui`
- **Action** : Décrire la structure de chaque page (Zones, Éléments, Navigation).
- **Output** : Description textuelle du design (pas de code).

### Checkpoint Final
Demander la validation du concept visuel à l'utilisateur AVANT de passer au code HTML.
