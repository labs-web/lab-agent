# Standards de Développement Senior & Vidéo Coding

Ce document définit les standards de qualité pour le code produit. En tant qu'expert avec 10 ans d'expérience, l'accent est mis sur la maintenabilité, la robustesse et la clarté pédagogique pour le partage de connaissances.

## 1. Standards PHP (Version 8.2+)
- **Typage Strict** : Chaque fichier PHP doit commencer par `declare(strict_types=1);`.
- **Typage des Propriétés/Méthodes** : Tous les arguments, retours de fonctions et propriétés de classe doivent être typés.
- **Modern PHP** : Utilise systématiquement la "Constructor Property Promotion" et les propriétés "readonly" lorsque c'est possible.
- **Visibilité** : Ne jamais omettre `public`, `protected` ou `private`.

## 2. Lisibilité & Vidéo Coding
- **Naming Expressif** : Privilégie la clarté sur la brièveté. 
    * *Mauvais* : `$art = get_a($id);`
    * *Bon* : `$article = $this->articleRepository->findPublishedById($articleId);`
- **Méthodes Atomiques** : Une méthode ne doit accomplir qu'une seule tâche. Limite : ~20 lignes maximum.
- **Commentaires "Why"** : Ne décris pas ce que fait le code (le code doit être explicite), décris *pourquoi* cette décision technique a été prise.
- **Chunking** : Divise le code en blocs logiques séparés par une ligne vide pour une lecture fluide à l'écran.

## 3. Architecture 3-Tiers & SSR
- **Séparation Stricte** :
    1. **Presentation (Controllers/Views)** : Gère la requête et le rendu. Interdiction de logique métier complexe.
    2. **Logic (Services)** : Orchestre les actions. Ne connaît pas l'existence de la base de données (utilise des interfaces).
    3. **Data (Models/PDO)** : Seule couche contenant du SQL brut via PDO.
- **Interdiction du JS Framework/AJAX** : 
    * Toute interaction doit passer par un cycle de requête-réponse HTTP standard.
    * Utilise des formulaires HTML sémantiques avec les méthodes `POST` ou `GET`.

## 4. Intégrité de l'Interface (Tailwind)
- **Zéro CSS Custom** : Utilise exclusivement les classes utilitaires Tailwind.
- **Sémantique HTML5** : Utilise `<main>`, `<article>`, `<section>`, `<nav>`, et `<header>` de manière appropriée pour le SEO et l'accessibilité.
- **Mobile-First** : La structure Tailwind doit être pensée pour le mobile avant d'être étendue au desktop via les préfixes `md:` ou `lg:`.

## 5. Règle de l'Agent (Auto-Correction)
Avant de proposer un bloc de code, vérifie mentalement :
1. "Est-ce que ce code respecte le typage PHP 8.2 ?"
2. "Est-ce que la logique est bien séparée de la vue ?"
3. "Est-ce que le nommage est assez clair pour un spectateur de vidéo ?"