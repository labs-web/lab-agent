---
name: architecture-3tier
description: Guide pour le développement d'applications respectant l'architecture 3-Tier (Presentation, Business, Data).
---

# Architecture 3-Tier

## Objectif
Garantir une séparation stricte des responsabilités entre la couche de présentation, la couche métier (services) et la couche de données.

## Structure des Couches

### 1. Presentation Layer (UI)
- **Rôle** : Gérer les interactions utilisateur et l'affichage.
- **Responsabilités** :
    - HTML/CSS (via UI Kit).
    - Gestion des événements DOM.
    - Appel des Services (Business Layer).
- **Interdictions** :
    - Aucune logique métier complexe (calculs, règles de validation métier).
    - Aucun accès direct aux données (API, Storage).

### 2. Business Layer (Services)
- **Rôle** : Cœur de l'application, contient la logique métier.
- **Emplacement** : `app/services/`
- **Convention de nommage** : `[Nom]Service.php` (ex: `AuthService.php`).
- **Responsabilités** :
    - Validation des règles métier.
    - Orchestration des données provenant des Repositories.
    - Retourne des données formatées à la Vue/Contrôleur.
- **Indépendance** : Doit être totalement découplé de l'interface utilisateur (pas de référence au HTML/DOM).

### 3. Data Layer (Repositories)
- **Rôle** : Abstraction de l'accès aux données.
- **Emplacement** : `app/data/`
- **Convention de nommage** : `[Nom]Repository.php` (ex: `UserRepository.php`).
- **Responsabilités** :
    - CRUD (Create, Read, Update, Delete).
    - Requêtes SQL (PDO).
    - Gestion de la persistance.
- **Retour** : Retourne des Tableaux associatifs ou Objets PHP.

## Flux de Données
1. L'UI (Page PHP) appelle une méthode du Service PHP.
2. Le Service applique la logique et appelle le Repository PHP si besoin.
3. Le Repository exécute la requête (SQL) et retourne les données brutes.
4. Le Service retourne les données traitées à la Page pour affichage.
