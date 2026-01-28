# Guide de Démarrage Rapide : L'Agent WebBuilder

Félicitations ! Vous avez parcouru la documentation théorique et pratique.
Voici un récapitulatif condensé pour configurer votre agent "WebBuilder" (UI-First) en 3 minutes.

## 1. Structure Finale du Dossier `.agent/`

Une fois configuré, votre dossier `.agent` doit ressembler exactement à ceci :

```
.agent/
├── rules/
│   ├── 00-gouvernance.md       <-- "Pas de SQL brut", "Pas de modifs hors sujet"
│   └── 01-ui-first.md          <-- [TUTORIEL] "Interdit de coder sans maquette validée"
├── skills/
│   ├── createur-ui/
│   │   └── SKILL.md            <-- [TUTORIEL] Expert HTML Atomique
│   └── expert-tailwind/
│       └── SKILL.md            <-- [TUTORIEL] Doc technique Tailwind
└── workflows/
    └── creation-site-statique.md <-- [TUTORIEL] Le script d'orchestration
```

## 2. Cheat Sheet : Les Commandes

*   **Lancer le Projet**
    *   *Commande* : "Crée la landing page du site vitrine"
    *   *Agent* : Charge le Workflow `/creation-site-statique.md`.

*   **Modifier une Règle**
    *   *Commande* : `>> Ajoute une règle sur l'accessibilité`
    *   *Agent* : Modifie `.agent/rules/`.

*   **Coder sans Workflow**
    *   *Commande* : `> Comment centrer une div ?`
    *   *Agent* : Répond en consultant le Skill Tailwind (Mode Chat).

## 3. Prochaines Étapes
Maintenant que vous avez un agent de base, vous pouvez l'enrichir :
1.  Ajouter un Skill `expert-js` (pour l'interactivité).
2.  Créer une Règle `performance-web` (Images WebP obligatoires).
3.  Écrire un Workflow `/deploy-netlify` pour la mise en ligne.

> **Rappel** : L'agent ne devient intelligent que si vous lui donnez une STUCTURE, pas juste des ordres.
