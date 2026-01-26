---
description: Workflow d'implémentation backend 3-tiers et d'intégration finale de la vue
---
# Workflow : Implémentation 3-Tiers & Câblage Logique

Ce workflow est la phase finale. Il consiste à construire le moteur de la fonctionnalité derrière l'interface déjà validée dans le UI-Kit.

## Étape 1 : Construction du Tier 3 (Data Layer)
- **Action** : Utiliser le skill `pdo-expert`.
- **Livrable** : Création ou mise à jour du Model dans `/Models/`.
- **Exigence** : 
    - Définir les méthodes CRUD nécessaires (ex: `save()`, `findAll()`).
    - Utiliser exclusivement du SQL préparé via PDO.
    - Créer une classe `Entity` (readonly) pour représenter les données si nécessaire.

## Étape 2 : Construction du Tier 2 (Service Layer)
- **Action** : Utiliser le skill `clean-php-logic`.
- **Livrable** : Création du Service dans `/Services/`.
- **Exigence** : 
    - Implémenter la logique métier (calculs, validations de règles).
    - Gérer les exceptions de domaine (ex: `ArticleTitleTooShortException`).
    - Le Service doit être le seul à appeler le Model.

## Étape 3 : Construction du Tier 1 (Presentation Layer)
- **Action** : Création/Mise à jour du Controller dans `/Controllers/`.
- **Livrable** : Méthodes de gestion de la requête (Request/Response).
- **Flux de données** : 
    - Récupérer les données entrantes (via `$_POST` ou `$_GET`).
    - Appeler le Service adéquat.
    - Gérer le succès ou l'échec (Redirection avec message flash ou rendu de vue).
- **Règle SSR** : Pas de retour JSON. Le contrôleur doit inclure une vue PHP.

## Étape 4 : Intégration de la Vue Finale (Mapping UI-Kit)
- **Action** : Créer le fichier final `.php` dans `/Views/` en se basant STRICTEMENT sur le fichier HTML validé du `/ui-kit/`.
- **Règle d'Hydratation** :
    - Copier le HTML du composant `ui-kit` vers la vue.
    - Remplacer les données "Mocks" par les variables PHP (`$article->title`, etc.).
    - **Sécurité XSS** : Tout écho PHP doit être sécurisé : `<?= htmlspecialchars($var) ?>`.
- **Formulaires** : S'assurer que les balises `<form>` pointent vers les bonnes routes (attribut `action`) avec la méthode `POST`.
- **Note** : Ne jamais réinventer le design à cette étape. On "hydrate" simplement le design validé.

## Étape 5 : Revue de Qualité & Finalisation (Checkpoint)
- **Action de l'Agent** : Faire un récapitulatif du code généré pour les 3 couches.
- **Vérification** : "Est-ce que le typage strict PHP 8.2 est respecté partout ?"
- **Question de Clôture** : 
    > "L'implémentation 3-Tiers est terminée et l'UI est connectée. Souhaitez-vous effectuer un test de bout en bout ou passer à une autre fonctionnalité ?"

## Instructions pour l'Agent
Pendant cette phase, tu dois être intraitable sur la sécurité. Toute donnée provenant de l'utilisateur doit être validée avant d'atteindre le Service, et toute donnée sortante vers le HTML doit être échappée avec `htmlspecialchars()`. Rappel : On n'utilise jamais d'AJAX, donc les succès de formulaire se terminent par une redirection `header('Location: ...')`.