# Composant A : Rules (Les Lois)

## Nature
Les **Rules** constituent le "Code Civil" de l'agent. Ce sont des directives qui définissent **ce que l'agent doit être** et les contraintes qu'il doit impérativement respecter.
*   Elles sont **passives** et **permanentes**.
*   Elles ne disent pas "comment faire", mais "ce qu'il est interdit de faire".

## Fonctionnement
Elles agissent comme un garde-fou (Safety Rail). Qu'on demande une petite correction rapide ou une grosse fonctionnalité complexe, la Règle est toujours active en arrière-plan pour surveiller la conformité.

## Utilisation par l'Agent
Au démarrage, l'agent scanne le dossier `.agent/rules/`. Il injecte ces directives dans sa "Mémoire Système" (System Prompt). Ainsi, chaque réponse générée par l'agent est pré-filtrée par ces contraintes avant d'être envoyée.

## Stratégie de découpage
On découpe les Rules par **Périmètre de Responsabilité** :
*   `00-meta.md` : Protocoles d'interaction et comportement de l'agent.
*   `01-stack.md` : Choix technologiques imposés (ex: "Toujours utiliser Tailwind").
*   `02-securite.md` : Interdictions critiques (ex: "Pas de mot de passe en clair").

*Pourquoi ce découpage ?* Pour pouvoir activer/désactiver des blocs entiers de règles facilement selon le contexte du projet.

## Ce qu'on ne met PAS dans une Rule
*   Des instructions étape par étape (C'est un Workflow).
*   Des snippets de code ou des tutoriaux d'implémentation (C'est un Skill).

## Exemple
> "Interdiction absolue d'utiliser du CSS inline (`<style>`) ou des attributs `style`."

> **Pourquoi pas dans le Skill ?**
> Si cette interdiction était dans le Skill "Expert Tailwind", elle disparaîtrait si l'on changeait d'expert ou si l'on utilisait un autre framework. En la mettant dans une **Rule**, elle devient une **Loi Universelle** qui s'impose à TOUS, garantissant la propreté du code.

## Migration Prompt vers Agent
Quelle partie du "Mega-Prompt" classique devient une Rule ?
*   **Les Contraintes (4)** : Toutes les phrases commençant par "ATTENTION", "IMPORTANT", "NE FAIS PAS", "RESPECTE".
*   **Le Format de sortie (5)** : Si le format est imposé pour tout le projet (ex: "Toujours en Français").

*Avant :* `...IMPORTANT : Pas de styles custom, utilise exclusivement Tailwind...`
*Après :* Rule `02-stack-technique.md`.

---

## Application au Tutoriel : Les 5 Piliers
Pour notre Agent WebBuilder, nous déployons 5 Règles distinctes pour couvrir tous les aspects de la gouvernance :

### 1. La Constitution : Protocoles d'Interaction
**Fichier** : [00-meta-interaction.md](file:///e:/labs-web/lab-agent/.agent/rules/00-meta-interaction.md)
*   **Rôle** : Définit les modes de communication avec l'agent.
*   **Contenu** : Interprétation des préfixes `>` (Mode Discussion) et `>>` (Mode Évolution Agent). C'est la loi qui régit quand l'agent doit agir ou simplement répondre.

### 2. La Carte d'Identité : Qui est l'Agent ?
**Fichier** : [01-identite-persona.md](file:///e:/labs-web/lab-agent/.agent/rules/01-identite-persona.md)
*   **Rôle** : Définit la personnalité et les limitations fondamentales de l'agent.
*   **Contenu** : "Je suis un Architecte Frontend spécialisé en sites statiques. Je refuse catégoriquement le PHP et le SQL." C'est l'ADN de l'agent.

### 3. La Loi Métier : UI-First
**Fichier** : [01-ui-first.md](file:///e:/labs-web/lab-agent/.agent/rules/01-ui-first.md)
*   **Rôle** : Impose la méthodologie de travail "Composants d'abord".
*   **Contenu** : Interdit formellement de créer des pages complètes (`index.html`) tant que les composants unitaires (`ui-kit/`) ne sont pas validés. Force la qualité visuelle avant l'assemblage.

### 4. Les Standards Techniques : La Stack Autorisée
**Fichier** : [02-stack-technique.md](file:///e:/labs-web/lab-agent/.agent/rules/02-stack-technique.md)
*   **Rôle** : Définit la "boîte à outils" technique autorisée.
*   **Contenu** : Stack stricte HTML5 + Tailwind CSS v3 + Vanilla JS. Aucun framework lourd (React/Vue), aucun backend (PHP/SQL). Structure de dossiers imposée (`/ui-kit`, `/assets`, racine pour `.html`).

### 5. Les Best Practices : Qualité & Performance
**Fichier** : [03-qualite-securite.md](file:///e:/labs-web/lab-agent/.agent/rules/03-qualite-securite.md)
*   **Rôle** : Garantit la qualité professionnelle du code produit.
*   **Contenu** : Standards de code propre (DRY, Pixel Perfect), performance web (Core Web Vitals, images optimisées), accessibilité (WCAG), et sécurité front-end (liens externes sécurisés).

C'est ce maillage qui empêche l'agent de dériver.
