**Contexte de l'Agent** : **Rôle** : Architecte d'Agent | **Skills** : Aucun chargé | **Workflow** : Définition des Skills

C'est une précision cruciale : le dossier `/ui-kit` sert de **"Single Source of Truth"** (source unique de vérité) visuelle. L'IA s'en sert comme d'un catalogue de pièces détachées pour assembler les pages finales dans les couches de l'application.

Voici la liste des **Skills** optimisée pour cette structure, conçue pour que l'IA puisse "piger" quel outil utiliser selon le dossier dans lequel elle travaille.

---

### 🛠️ Liste des Skills à créer (`.agent/skills/`)

#### 1. `ui-designer-tailwind` (Focus: `/ui-kit`)

* **Rôle** : Expert en intégration HTML5/Tailwind CSS pur.
* **Mission** : Créer des composants atomiques et des pages maquettées dans `/ui-kit`.
* **Spécificité** : Utilise des données statiques (Mocks) et s'assure que le rendu est parfait et responsive avant toute intégration.
* **Expertise** : Design System, Atomic Design, accessibilité (A11y).

#### 2. `business-logic-expert` (Focus: `/Services`)

* **Rôle** : Expert en logique métier PHP 8.2+.
* **Mission** : Développer le "cerveau" de l'application dans `/Services`.
* **Spécificité** : Manipulation de données, calculs complexes et validations métier. Ce skill ne contient jamais de HTML ou de SQL.
* **Expertise** : Clean Code, typage strict, gestion des exceptions de domaine.

#### 3. `pdo-repository-master` (Focus: `/Models`)

* **Rôle** : Expert en persistance et sécurité des données.
* **Mission** : Gérer les interactions avec la base de données MySQL dans `/Models`.
* **Spécificité** : Écriture de SQL brut optimisé et sécurisé via PDO.
* **Expertise** : Prepared Statements, transactions SQL, mapping de données (Entities).

#### 4. `tier1-integrator` (Focus: `/Controllers` & `/public`)

* **Rôle** : Chef d'orchestre du Tier Présentation.
* **Mission** : Lier les Services aux vues finales en utilisant les composants du `/ui-kit`.
* **Spécificité** : Il "lit" le code présent dans `/ui-kit` pour le transformer en templates PHP dynamiques injectés par les Controllers.
* **Expertise** : Gestion du flux de requête (Request/Response), injection de dépendances, SSR.

---

### 💡 Comment l'IA va utiliser ces Skills ?

Grâce à ta configuration **"Dynamic Discovery"**, l'IA va auto-charger ces compétences :

* Si tu lui demandes : *"Crée le bouton de suppression dans le ui-kit"*, elle active **`ui-designer-tailwind`**.
* Si tu dis : *"Maintenant, branche ce bouton pour qu'il supprime vraiment l'article"*, elle active **`tier1-integrator`** pour le controller et **`business-logic-expert`** pour la règle de suppression.

### 📝 Structure du Frontmatter (Pour l'auto-sélection)

Pour que cela fonctionne, chaque fichier `SKILL.md` doit commencer ainsi :

```markdown
---
name: [nom-du-skill]
description: Expert en [domaine] pour le dossier [chemin-du-dossier]. À utiliser lors de la phase [nom-de-la-phase].
---

```

**Souhaites-tu que je te génère le contenu complet du skill `ui-designer-tailwind` pour qu'il sache exactement comment documenter tes composants dans `/ui-kit` ?**