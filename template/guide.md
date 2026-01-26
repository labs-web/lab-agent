
## 🏗️ Architecture du dossier `.agent`

C’est une excellente décision. En séparant l'**Identité** (qui est l'IA) de la **Stack/Architecture** (ce qu'elle construit), tu rends la configuration encore plus "propre" et modulaire. Cela permet à l'IA de bien distinguer son comportement comportemental de ses contraintes techniques.

Voici la structure finale optimisée et réindexée.

```text
.agent/
├── rules/
│   ├── 00-persona-mentor.md      # Identité : Senior Architecte & Mentor
│   ├── 01-stack-architecture.md  # Socle : PHP 8.2+, SSR, 3-Tiers
│   ├── 02-php-logic.md           # Standards : Code propre et typage strict
│   ├── 03-ui-ux-standard.md      # Présentation : Tailwind & Accessibilité
│   ├── 04-workflow-priority.md   # Méthode : UI-First & Checkpoints
│   ├── 05-security-data.md       # Données : PDO & Sécurité SQL
│   └── 06-video-coding.md        # Style : Lisibilité et pédagogie
├── skills/
│   ├── pdo-expert/               # Expertise SQL brute et sécurité
│   ├── tailwind-architect/       # Expertise Design System statique
│   └── clean-php-logic/          # Expertise Logique métier et Services
└── workflows/
    ├── analyze.md                # Phase 1 : Planification
    ├── ui-kit.md                 # Phase 2 : Prototypage visuel
    └── wire-3-tier.md            # Phase 3 : Codage et intégration

```

---

## 📝 Détails des nouveaux fichiers (00 et 01)

### `00-persona-mentor.md`

> **Rôle** : Définit le comportement.

* **Identité** : Architecte Senior (15 ans d'XP) calme, précis et critique.
* **Ton** : Mentorat. Explique les concepts avant de coder.
* **Posture** : Ne se contente pas d'exécuter ; il propose des améliorations architecturales s'il voit un risque futur.

### `01-stack-architecture.md`

> **Rôle** : Définit l'environnement.

* **Stack** : PHP 8.2 (Vanilla), MySQL (PDO), Tailwind CSS.
* **Architecture** : Séparation stricte en 3 tiers (Dossiers `Controllers/`, `Services/`, `Models/`).
* **Contrainte SSR** : Tout rendu est fait par le serveur. Pas d'AJAX, pas de frameworks JS.

---

## 💡 Pourquoi cette version est la "Version Finale" ?

1. **Granularité Maximale** : Chaque fichier a une responsabilité unique. C'est l'application du principe **Single Responsibility** à ta configuration.
2. **Facilité de Maintenance** : Si demain tu veux changer ton style de "Video Coding", tu ne touches qu'au fichier `06`, sans risquer de casser tes règles de sécurité `05`.
3. **Performance de l'IA** : En séparant le "Qui je suis" (00) du "Comment je code" (01 et 02), l'IA évite de mélanger sa personnalité avec les contraintes techniques.
4. **Séquençage Logique** : La numérotation de `00` à `06` crée un chemin de lecture naturel pour l'agent Antigravity dès qu'il "entre" dans ton projet.

> [!TIP]
> **Conseil d'Expert** : Cette structure est tellement propre qu'elle peut elle-même servir de modèle (template) pour tous tes futurs projets. Tu n'auras qu'à copier-coller le dossier `.agent`.

Souhaites-tu que je génère le contenu détaillé du fichier **`06-video-coding.md`** pour qu'il soit parfaitement optimisé pour tes tutoriels ?



---

## 📜 1. Les Rules : "La Constitution"

*Ces fichiers sont toujours actifs. Ils dictent le comportement et forcent l'usage des workflows.*

### `rules/01-standards.md` (Qualité Senior)

* **Code Style** : PHP 8.2+ typage strict (`declare(strict_types=1)`).
* **Lisibilité** : Méthodes de moins de 20 lignes. Pas de commentaires évidents, uniquement des commentaires "Pourquoi".
* **Nommage** : Variables explicites et verbeuses pour la compréhension en vidéo.

### `rules/02-workflow-rules.md` (L'Orchestration)

* **UI-First Mandatory** : Interdiction de générer du code `/src` avant que `/src/Views/ui-kit` ne soit validé.
* **Points d'arrêt** : L'IA doit s'arrêter après chaque workflow pour demander une validation.
* **Appel des Skills** : Utilise le skill `pdo-expert` pour toute interaction avec `Models/` et `tailwind-architect` pour `Views/`.

### `rules/03-stack-constraints.md` (Les Limites Techniques)

* **Zéro Framework JS** : Aucun usage de React, Vue, ou Alpine. JS Vanilla uniquement.
* **SSR Uniquement** : Pas d'AJAX. Soumission de formulaires standard (`POST`/`GET`).
* **Architecture 3-Tiers** : Séparation hermétique entre Controllers, Services et Models.

---

## 🛠️ 2. Les Skills : "L'Expertise Modulaire"

*On les sépare pour économiser la mémoire et éviter les confusions de contexte.*

### `skills/tailwind-architect/SKILL.md` (Design System)

* **Focus** : Création de composants UI réutilisables avec Tailwind CSS.
* **Patterns** : Layouts responsives, états de boutons (hover, focus, disabled), gestion des formulaires sans JS.

### `skills/pdo-expert/SKILL.md` (Data Layer)

* **Focus** : Requêtes SQL sécurisées via PDO.
* **Sécurité** : Prepared statements systématiques, protection contre les injections SQL.
* **Mapping** : Transformation des fetch SQL en Objets de domaine (Entities).

### `skills/clean-php-logic/SKILL.md` (Service Layer)

* **Focus** : Logique métier pure.
* **Patterns** : Services stateless, gestion des exceptions métier personnalisées, validation de données (FormRequests manuelles).

---

## 🔄 3. Les Workflows : "Le Manuel Opératoire"

*Ce sont les scripts que tu déclenches avec `/`.*

### `workflows/01-analyze.md` (Phase 1 : Découverte)

1. Lister les besoins en données (ex: titre, contenu, auteur).
2. Identifier les composants UI nécessaires (ex: `Card`, `Form`, `Breadcrumb`).
3. **Checkpoint** : Présenter la liste au développeur et attendre : `"Analyse validée"`.

### `workflows/02-ui-kit.md` (Phase 2 : Maquettage statique)

1. Créer le composant dans `ui-kit/`.
2. Utiliser du HTML5 sémantique et Tailwind pur.
3. Utiliser des données "dummy" (statiques).
4. **Checkpoint** : Présenter le rendu et attendre : `"UI validée"`.

### `workflows/03-wire-3-tier.md` (Phase 3 : Implémentation réelle)

1. **Model** : Créer la table SQL et la classe de données (PDO).
2. **Service** : Créer la logique de traitement (ex: `ArticleService`).
3. **Controller** : Créer le contrôleur PHP qui reçoit les données et appelle la vue.
4. **Finalisation** : Déplacer/Lier le code du UI-kit vers la vue finale de l'application.

---

## 💡 Pourquoi cette configuration est la meilleure ?

| Aspect                      | Avantage pour un Senior                                                            |
| --------------------------- | ---------------------------------------------------------------------------------- |
| **Séparation Rules/Skills** | **Économie de mémoire** : L'IA ne réfléchit à SQL que quand elle en a besoin.      |
| **Workflow UI-First**       | **Réduction des bugs** : On valide l'ergonomie avant de complexifier le code.      |
| **Workflows détaillés**     | **Vidéo Coding** : Chaque étape du workflow devient un chapitre clair de ta vidéo. |
| **Stack Vanilla**           | **Pérennité** : Pas de dépendances qui expirent, code robuste et rapide.           |

> [!IMPORTANT]
> **Le secret du "Video Coding"** : Dans tes `rules`, demande à l'agent de toujours expliquer **quelle règle il applique** avant de générer du code. Cela rend tes démonstrations beaucoup plus didactiques.

Souhaites-tu que je génère le code source complet d'un composant de ton **UI-Kit** (par exemple, une carte d'article avec Tailwind) pour tester cette configuration ?