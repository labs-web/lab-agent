---
description: Initialisation de la structure complète du projet selon l'architecture 3-Tiers
---

# Workflow : Initialisation de la Structure du Projet

Ce workflow doit être exécuté une seule fois au début du projet pour générer l'arborescence standard et les fichiers de configuration de base conformes à l'architecture définie.

## Étape 1 : Création de l'Arborescence
// turbo-all
1. Créer le dossier `public` pour la racine web.
2. Créer le dossier `config` pour la configuration.
3. Créer le dossier `App` pour le code source (Classes).
4. Créer le dossier `App/Controllers` pour le Tier 1.
5. Créer le dossier `App/Services` pour le Tier 2.
6. Créer le dossier `App/Models` pour le Tier 3, avec :
   - `App/Models/Entities`
   - `App/Models/Repositories`
7. Créer le dossier `Views` pour les templates HTML.
8. Créer le dossier `ui-kit` pour le prototypage statique.
9. Dans `ui-kit`, créer le fichier `components-manifest.yaml` avec le contenu initial suivant :
   ```yaml
   # Manifeste des composants UI-Kit
   meta:
     version: 1.0.0
     description: "Registre centralisé des composants UI"
   components: []
   ```

## Étape 2 : Configuration de l'Autoloading (Native PHP)
- **Fichier** : Créer `autoload.php` à la racine.
- **Contenu** : 
  - Utiliser `spl_autoload_register`.
  - Mapper le namespace `App\` vers le dossier `App/`.
  - Scanner les dossiers pour inclure les classes dynamiquement si nécessaire.

## Étape 3 : Fichiers de Démarrage
1. **Contrôleur Frontal** : Créer `public/index.php`.
   - Charger l'autoloader natif : `require_once __DIR__ . '/../autoload.php';`.
   - Initialiser la gestion des erreurs.
   - (Placeholder) Point d'entrée du routage.
2. **Configuration DB** : Créer `config/database.php`.
   - Retourner un tableau de configuration pour PDO (Host, DBName, User, Pass).
3. **Ignore** : Créer un `.gitignore` standard (vendor/, .env, etc.).

## Étape 4 : Validation
- Vérifier que tous les dossiers existent.
- Vérifier que tous les dossiers existent.
- Créer un script de test `test_autoload.php` pour valider que les classes `App\` sont bien chargées.
- Confirmer à l'utilisateur : "Structure 3-Tiers initialisée. Prêt à démarrer le développement."
