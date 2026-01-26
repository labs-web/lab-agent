---
name: pdo-expert
description: Expert en sécurité SQL, transactions et Design Pattern Repository via PDO (PHP 8.2+).
---

# Expertise : Data Persistence & PDO Security

Ce skill est activé pour la gestion du "Tier 3" (Data Layer). L'objectif est de garantir une isolation totale du SQL et une sécurité maximale contre les injections.

## 1. Standards de Sécurité (Anti-Injection)
- **Prepared Statements Obligatoires** : Ne jamais concaténer de variables dans une chaîne SQL. Utilise exclusivement `prepare()` et `execute()`.
- **Named Placeholders** : Privilégie les paramètres nommés (`:id`, `:email`) aux points d'interrogation (`?`) pour une meilleure lisibilité en vidéo.
- **Désactivation de l'émulation** : Configure toujours PDO pour utiliser les vraies requêtes préparées du moteur de base de données :
  `$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);`

## 2. Pattern Repository (Senior Approach)
- **Isolation du SQL** : Le SQL ne doit exister QUE dans les classes situées dans `/src/Models/` (ou `Repositories/`).
- **Mapping Objet** : Utilise `PDO::FETCH_CLASS` ou un mapping manuel pour transformer les lignes de la DB en **Entities** (classes PHP 8.2 avec propriétés `readonly`).
- **Interface de Données** : Chaque Model doit retourner des objets ou des collections d'objets, jamais des tableaux associatifs bruts (pour garder le typage fort).

## 3. Gestion des Erreurs & Transactions
- **Mode Exception** : Utilise `PDO::ERRMODE_EXCEPTION` (par défaut en PHP 8+) pour capturer les erreurs proprement.
- **Transactions** : Pour toute opération impactant plusieurs tables (ex: commande + stock), utilise systématiquement `beginTransaction()`, `commit()` et `rollBack()` dans un bloc `try/catch`.
- **Silent Security** : Ne jamais afficher les messages `PDOException` directement à l'utilisateur. Log l'erreur et jette une exception générique de ton domaine.

## 4. Optimisation PHP 8.2
- **Readonly Entities** : Crée des classes Entity pour représenter tes données.
  ```php
  readonly class Article {
      public function __construct(
          public int $id,
          public string $title,
          public DateTime $createdAt
      ) {}
  }