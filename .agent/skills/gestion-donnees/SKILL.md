---
name: gestion-donnees
description: Responsable de la couche Données (Tier 3). Gère l'accès sécurisé à la base de données via PDO et les Repositories. Aucun SQL n'est autorisé en dehors de ce skill.
---

# Expertise : Gestion des Données (SQL & PDO)

Ce skill est le gardien de la Base de Données. Il intervient durant la **Phase 3** pour implémenter la couche de persistance.

## 1. Périmètre d'Action (/App/Models)
- **Cible** : Classes dans `/App/Models/Repositories` et `/App/Models/Entities`.
- **Mission** : Traduites les objets PHP en lignes SQL et inversement.
- **Exclusivité** : C'est le **seul endroit** de l'application où le mot-clé `SQL` et l'objet `PDO` sont autorisés.

## 2. Standards de Sécurité (PDO Strict)
- **Requêtes Préparées** : Utilisation OBLIGATOIRE de `prepare()` et `execute()` pour toute variable injectée.
- **Typage Fort** : Les méthodes retournent des objets typés (Entities ou DTOs), jamais des tableaux bruts `['id' => 1]`.
- **Fetch Mode** : Utiliser `FETCH_ASSOC` puis hydrater une Entity.

## 3. Séparation des Responsabilités
- **Pas de Métier** : Un Repository ne valide pas les règles métier (ex: "âge > 18"). Il se contente de sauvegarder ou lire.
- **Pas de Présentation** : Un Repository ne fait jamais d'echo ou de formatage HTML.

## 4. Exemple de Structure Attendue
```php
declare(strict_types=1);

namespace App\Models\Repositories;

use App\Models\Entities\Article;
use PDO;

class ArticleRepository
{
    public function __construct(
        private PDO $db
    ) {}

    public function find(int $id): ?Article
    {
        $stmt = $this->db->prepare("SELECT * FROM articles WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$data) return null;

        return new Article(
            id: (int)$data['id'],
            title: $data['title'],
            content: $data['content']
        );
    }
}
```
