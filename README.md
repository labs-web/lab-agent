# Lab Agent - Static WebBuilder

> Un agent IA spécialisé dans la création de sites web statiques modernes avec une approche **UI-First**.

## 🎯 Objectif du Projet

Ce projet est un laboratoire d'apprentissage pour maîtriser la configuration d'agents IA de développement avec **Antigravity**.

L'agent configuré ici est un **WebBuilder Statique** capable de produire des sites vitrines professionnels en HTML5/Tailwind CSS, sans aucune dépendance backend (Pas de PHP, pas de SQL).

## 🏗️ Architecture de l'Agent

L'agent est structuré en **3 composants** distincts dans le dossier `.agent/` :

### Rules (Les Lois)
5 fichiers de gouvernance qui définissent ce que l'agent **ne doit jamais faire** :
- 🔒 Protocoles de communication (`>` et `>>`)
- 🎭 Identité "Architecte Frontend"
- 🚦 Loi UI-First (Composants avant Pages)
- 🛠️ Stack technique stricte (HTML/Tailwind/JS)
- ⚡ Standards de qualité (A11y, Perf, Clean Code)

### Skills (Les Experts)
5 compétences techniques spécialisées :
- 🎨 **Graphiste Charte** : Définit les couleurs et l'ambiance
- 🖼️ **Concepteur UI** : Dessine les wireframes
- 🏗️ **Créateur UI** : Code les composants HTML
- 📖 **Expert Tailwind** : Documentation technique CSS
- 🔧 **Architecte Agent** : Maintenance du système

### Workflows (Les Processus)
5 procédures séquentielles avec checkpoints :
- 🎨 Charte Graphique
- 📐 Conception UI
- 🧱 Création UI (Composants atomiques)
- 🔄 Évolution Agent
- 🎯 **Master** : Processus de Développement (Orchestrateur)

## 📚 Documentation Complète

La documentation est organisée en **6 chapitres progressifs** :

1. **[Introduction & Contexte](docs/01-introduction-et-contexte.md)** - Du Prompt à l'Agent
2. **[Concept Antigravity](docs/02-concept-antigravity.md)** - Architecture sous le capot
3. **[Composant Rules](docs/03-composant-rules.md)** - Les Lois de gouvernance
4. **[Composant Skills](docs/04-composant-skills.md)** - Les Compétences techniques
5. **[Composant Workflows](docs/05-composant-workflows.md)** - Les Processus d'orchestration
6. **[Guide de Démarrage](docs/06-guide-demarrage.md)** - Cheat Sheet rapide

## 🚀 Démarrage Rapide

### Commandes Essentielles

```bash
# Créer une landing page
"Crée une landing page avec Hero, Features et Footer"

# Mode Discussion (aucune modification de fichier)
> "Comment centrer un élément avec Flexbox ?"

# Mode Évolution Agent (modifier la configuration)
>> "Ajoute une règle sur les images WebP"
```

### Workflow Typique

1. **Charte** → L'agent définit les couleurs et typographies
2. **Concept** → L'agent dessine les wireframes
3. **Création** → L'agent code les composants dans `ui-kit/`
4. **Validation** → Vous validez visuellement
5. **Assemblage** → L'agent crée `index.html` à la racine

## 🎓 Méthodologie UI-First

L'agent **refuse** de créer une page complète tant que les composants atomiques ne sont pas validés.

**Exemple :**
```
Vous : "Crée-moi la page d'accueil"
Agent : "Je dois d'abord créer les composants Header, Hero et Footer 
         dans le UI-Kit. Je commence ?"
```

Cette contrainte garantit la **qualité visuelle** et la **réutilisabilité**.

## 📁 Structure du Projet

```
lab-agent/
├── .agent/              # Configuration de l'agent IA
│   ├── rules/           # Les 5 lois de gouvernance
│   ├── skills/          # Les 5 experts techniques
│   └── workflows/       # Les 5 processus
├── docs/                # Documentation complète (6 chapitres)
├── ui-kit/              # Composants HTML atomiques (générés)
├── assets/              # Images, fonts, scripts (générés)
└── *.html               # Pages finales (générées à la racine)
```

## 🛡️ Contraintes Techniques

- ✅ **Autorisé** : HTML5, Tailwind CSS v3, Vanilla JS
- ❌ **Interdit** : React, Vue, Angular, PHP, SQL, Node.js

## 📖 Philosophie

Ce n'est pas un simple générateur de code. C'est une **Usine Logicielle** qui impose une méthode de travail industrielle pour produire des sites statiques de qualité professionnelle.

L'agent ne code jamais "au feeling". Il suit strictement les Workflows et respecte les Rules.

---

**Prêt à créer votre premier site avec l'agent ?** 
👉 Commencez par le [Guide de Démarrage](docs/06-guide-demarrage.md)
