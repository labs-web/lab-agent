---
name: clean-php-logic
description: Expert en logique métier pure, services stateless et architecture 3-tiers en PHP 8.2+.
---

# Expertise : Service Layer & Business Logic

Ce skill est activé pour la conception de la couche intermédiaire (Tier 2). L'objectif est de centraliser "l'intelligence" de l'application de manière isolée et testable.

## 1. Principes de Conception (Service Layer)
- **Statelessness** : Un service ne doit pas stocker d'état. Chaque méthode doit être pure : elle reçoit des données, les traite et retourne un résultat ou lève une exception.
- **Single Responsibility** : Un service par domaine (ex: `ArticleService`, `AuthService`). Une méthode par cas d'utilisation (ex: `publish()`, `archive()`).
- **Indépendance** : Le service ne sait pas s'il est appelé par un Controller Web, une commande CLI ou un script de test.

## 2. Patterns & Implémentation
- **DTO (Data Transfer Objects)** : Pour les structures de données complexes, utilise des classes `readonly` ou des tableaux typés pour passer les données du Controller au Service.
- **Validation Métier** : Avant d'appeler le Model (Data Layer), le service doit valider les règles métier (ex: "Un article ne peut pas être publié sans titre").
- **Exceptions de Domaine** : Crée des classes d'exception spécifiques (ex: `ArticleValidationException`) au lieu de retourner des codes d'erreur ou des booléens.

## 3. Standards de Code (Senior)
- **Typage Intégral** : Utilise les types d'intersection, d'union et le type `never` si nécessaire (PHP 8.2+).
- **Inference de Types** : Favorise le retour de type `void` pour les actions, ou l'objet créé/modifié pour les lectures.
- **Naming** : Utilise des verbes d'action clairs pour les méthodes : `createArticle`, `toggleStatus`, `calculateReadingTime`.

## 4. Interaction avec les autres Tiers
- **Vers le Data Layer** : Le service appelle les méthodes du `Model` (via injection ou instanciation propre). Il ne manipule JAMAIS l'objet PDO directement.
- **Vers le Presentation Layer** : Le service retourne des objets de domaine ou des tableaux propres au Controller. Il ne contient JAMAIS de balises HTML ou de `echo`.

## 5. Exemple de structure attendue
```php
public function updateArticle(int $id, array $data): ArticleEntity 
{
    // 1. Validation métier
    if (empty($data['content'])) {
        throw new DomainException("Le contenu est obligatoire.");
    }

    // 2. Appel au Model
    $this->repository->update($id, $data);

    // 3. Retour du résultat
    return $this->repository->findById($id);
}