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

## Étape 4 : Intégration de la Vue Finale
- **Action** : Transformer le composant statique du `ui-kit/` en une vue dynamique dans `/Views/`.
- **Liaison** : Remplacer les variables de "Mock" par les données réelles injectées par le Controller.
- **Formulaires** : S'assurer que les balises `<form>` pointent vers les bonnes routes avec la méthode `POST`.

## Étape 5 : Revue de Qualité & Finalisation (Checkpoint)
- **Action de l'Agent** : Faire un récapitulatif du code généré pour les 3 couches.
- **Vérification** : "Est-ce que le typage strict PHP 8.2 est respecté partout ?"
- **Question de Clôture** : 
    > "L'implémentation 3-Tiers est terminée et l'UI est connectée. Souhaitez-vous effectuer un test de bout en bout ou passer à une autre fonctionnalité ?"

## Instructions pour l'Agent
Pendant cette phase, tu dois être intraitable sur la sécurité. Toute donnée provenant de l'utilisateur doit être validée avant d'atteindre le Service, et toute donnée sortante vers le HTML doit être échappée avec `htmlspecialchars()`. Rappel : On n'utilise jamais d'AJAX, donc les succès de formulaire se terminent par une redirection `header('Location: ...')`.