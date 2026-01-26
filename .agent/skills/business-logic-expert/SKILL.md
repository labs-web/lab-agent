---
name: business-logic-expert
description: Expert en logique métier pure et Services PHP 8.2+. Spécialisé dans le développement du "cerveau" de l'application dans le dossier /Services.
---

# Expertise : Business Logic & Service Layer

Ce skill est activé durant la **Phase 3 (Intégration)** pour gérer le Tier 2 de l'architecture. L'objectif est de garantir une logique métier robuste, découplée et hautement typée.

## 1. Périmètre d'Action (/Services)
- **Cible** : Toutes les classes résidant dans le répertoire `/Services`.
- **Nature** : Classes PHP "Stateless" orchestrant les règles métier (ex: `QueueService`, `AuthService`, `BookingService`).
- **Isolation** : Un Service ne doit jamais savoir s'il est appelé par un **Controller** Web ou une commande CLI.

## 2. Standards de Développement (Clean PHP)
- **Statelessness** : Les méthodes de service doivent être pures : elles reçoivent des données, les traitent selon des règles métier, et retournent un résultat ou lèvent une **Exception**.
- **Typage Intégral** : Utilisation systématique du typage strict PHP 8.2 pour les paramètres et les retours.
- **Single Responsibility** : Une méthode de service = Un cas d'utilisation métier précis.

## 3. Séparation des Responsabilités (Strict)
- **Zéro SQL** : Interdiction formelle d'écrire du SQL ou d'utiliser l'objet PDO ici. Le service appelle les **Models** pour la persistance.
- **Zéro HTML** : Interdiction de générer des balises HTML, de faire des `echo` ou d'utiliser des fonctions de rendu.
- **Validation Métier** : Le service est le seul responsable de la validation des règles complexes (ex: "Un utilisateur ne peut pas réserver deux fois le même créneau").

## 4. Gestion des Erreurs (Domain Exceptions)
- Ne pas retourner de codes d'erreur ou de booléens ambigus.
- Créer et lancer des **Exceptions** de domaine spécifiques (ex: `InsufficientStockException`, `InvalidUserStatusException`).

## 5. Exemple de Structure Attendue
```php
declare(strict_types=1);

namespace App\Services;

use App\Models\OrderRepository;
use App\Exceptions\OrderValidationException;

readonly class OrderService 
{
    public function __construct(
        private OrderRepository $repository
    ) {}

    public function processOrder(int $userId, array $items): void 
    {
        // 1. Validation métier
        if (empty($items)) {
            throw new OrderValidationException("Le panier ne peut pas être vide.");
        }

        // 2. Appel au Model pour la persistance
        $this->repository->create($userId, $items);
    }
}