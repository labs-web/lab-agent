# Guide de Démarrage Rapide : L'Agent WebBuilder

Félicitations ! Vous avez parcouru la documentation théorique et pratique.
Voici un récapitulatif condensé pour configurer votre agent "WebBuilder" (UI-First) en 3 minutes.

## 1. Structure Finale du Dossier `.agent/`

## 1. Structure Finale du Dossier `.agent/`

Voici la configuration complète de l'agent "Usine Statique" que vous avez maintenant :

```
.agent/
├── rules/
│   ├── 00-gouvernance.md       <-- Protocoles > et >>
│   ├── 01-identite.md          <-- Persona "Architecte Frontend"
│   ├── 01-ui-first.md          <-- [CRITIQUE] Bloque le code sans maquette
│   ├── 02-stack.md             <-- Stack HTML5/Tailwind Only
│   └── 03-qualite.md           <-- A11y & Perf
├── skills/
│   ├── architecte-agent/       <-- Maintenance du système
│   ├── concepteur-ui/          <-- Wireframes
│   ├── createur-ui/            <-- Code HTML Atomique
│   ├── expert-tailwind/        <-- Dictionnaire CSS v3
│   └── graphiste-charte/       <-- Couleurs & Fonts
└── workflows/
    ├── processus-developpement.md <-- [MASTER] L'orchestrateur général
    ├── charte-graphique.md        <-- [SUB]
    ├── conception-ui.md           <-- [SUB]
    ├── creation-ui.md             <-- [SUB]
    └── evolution-agent.md         <-- [MAINTENANCE]
```

## 2. Cheat Sheet : Les Commandes

*   **Lancer le Projet**
    *   *Commande* : "Crée la landing page du site vitrine"
    *   *Agent* : Charge le Workflow Master `/processus-developpement` (qui orchestre automatiquement Charte → Concept → Création).

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
