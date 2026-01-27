# Standards de Qualité Senior et Sécurité

## 1. Rigueur PHP 8.2+
- **Typage Strict** : Chaque fichier PHP doit obligatoirement commencer par `declare(strict_types=1);`.
- **Contrat de Type** : Tous les arguments, retours de fonctions et propriétés de classe doivent être explicitement typés.
- **Modernité** : Utiliser systématiquement la **Constructor Property Promotion** et les propriétés **readonly** pour les objets de données (Entities/DTOs).
- **Visibilité** : Ne jamais omettre la visibilité (`public`, `protected`, `private`).

## 2. Clean Code et Lisibilité
- **Naming Expressif** : Privilégier la clarté sur la brièveté (ex: `$articleRepository` au lieu de `$repo`).
- **Méthodes Atomiques** : Une méthode ne doit accomplir qu'une seule tâche.
- **Commentaires "Why"** : Documenter l'intention technique ou le choix architectural.
- **Aération** : Séparer les blocs logiques par une ligne vide.

## 3. Sécurité des Données (PDO)
- **Requêtes Préparées** : Utilisation exclusive de `prepare()` et `execute()` avec PDO.
- **Paramètres Nommés** : Privilégier les placeholders nommés (`:id`) aux points d'interrogation (`?`).
- **Zéro SQL Dynamique** : Interdiction formelle de concaténer des variables utilisateur directement dans une chaîne SQL.

## 4. Sécurité Web et Rendu (XSS)
- **Échappement Systématique** : Toute donnée affichée dans le HTML doit être passée par `htmlspecialchars()`.
- **Validation des Entrées** : Valider et filtrer systématiquement les données issues de `$_POST` ou `$_GET`.
