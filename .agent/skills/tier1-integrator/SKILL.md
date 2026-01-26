---
name: tier1-integrator
description: Expert en orchestration du Tier Présentation. Spécialisé dans le câblage entre les Services et les vues finales en utilisant les composants du /ui-kit. Focus sur /Controllers et /public.
---

# Expertise : Tier 1 Integration & SSR Orchestration

Ce skill est activé durant la **Phase 3 (Intégration)** pour gérer le Tier 1 de l'architecture. Son rôle est de transformer les intentions visuelles du `/ui-kit` en une application vivante.

## 1. Périmètre d'Action (/Controllers & /public)
- **Cible** : Classes de routage dans `/Controllers` et point d'entrée dans `/public`.
- **Mission** : Réceptionner la requête HTTP, solliciter la logique métier (Services) et injecter les données dans les vues.
- **Référence Visuelle** : Doit impérativement lire et respecter la structure HTML/Tailwind définie dans le dossier `/ui-kit`.

## 2. Standards de Contrôleur (Senior)
- **Lean Controllers** : Un contrôleur ne doit pas contenir de logique métier ni de SQL. Il délègue tout aux **Services**.
- **Gestion Request/Response** : Extraction propre des données (`$_GET`, `$_POST`) et gestion des redirections HTTP (`header('Location: ...')`).
- **Dependency Injection** : Les Services requis doivent être injectés via le constructeur pour garantir un code testable.

## 3. Méthode d'Intégration UI (Câblage)
- **Transformation Dynamique** : Prendre le code HTML statique validé dans le `/ui-kit` et remplacer les variables de "Mock" par les données réelles fournies par le Service.
- **Zéro Logique dans la Vue** : La vue finale ne doit contenir que des échos (`<?= $var ?>`) et des structures de contrôle simples (`if`, `foreach`). Aucune manipulation de données complexe.

## 4. Cycle SSR & Feedback
- **Post-Redirect-Get** : Après un formulaire `POST` réussi, toujours rediriger vers une page `GET` pour éviter le renvoi de formulaire au rafraîchissement.
- **Messages Flash** : Transmettre les notifications de succès ou d'erreur via la session pour affichage dans la vue.

## 5. Exemple de Structure Attendue
```php
declare(strict_types=1);

namespace App\Controllers;

use App\Services\ArticleService;

readonly class ArticleController 
{
    public function __construct(
        private ArticleService $service
    ) {}

    public function show(int $id): void 
    {
        // 1. Récupération des données via le Service
        $article = $this->service->getArticleById($id);

        // 2. Rendu de la vue (basé sur la structure du /ui-kit)
        require_once __DIR__ . '/../Views/article-detail.php';
    }
}