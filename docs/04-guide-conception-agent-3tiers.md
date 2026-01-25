# 04. Guide de Conception : L'Agent de Développement 3-Tiers

Cet article synthétise les concepts précédents (Règles, Skills, Workflows) pour montrer comment concevoir concrètement un Agent IA capable de réaliser un projet d'application **Web 3-Tiers** (Presentation, Logic, Data).

---

## Étape 1 : Définir les Règles (Le Cadre Législatif)

La première étape est de définir les contraintes inviolables du projet. Pour une app 3-Tiers, nous voulons éviter le "Code Spaghetti" et garantir la qualité.

### Exemples de Règles à créer
1.  **`rules/architecture-3tiers.md`** :
    *   **Contrainte** : Interdiction stricte de mettre des requêtes SQL dans les fichiers de Vue (`public/*.php`).
    *   **Architecture** : Obligation de passer par un `Service` pour la logique et un `Repository` pour la donnée.
2.  **`rules/validation-ui.md`** (Celle que nous avons créée) :
    *   **Contrainte** : Interdiction d'implémenter le backend d'une fonctionnalité tant que l'interface (HTML/CSS) n'est pas validée visuellement par l'humain.
3.  **`rules/stack-technique.md`** :
    *   **Stack** : PHP 8.2, MySQL, Vanilla CSS (Pas de frameworks JS lourds), HTML5 Sémantique.

---

## Étape 2 : Construire les Skills (La Boîte à Outils)

Une fois les règles posées, l'agent doit savoir *comment* les appliquer. Nous créons des Skills pour standardiser la production de code.

### Exemples de Skills à implémenter
1.  **`skills/ui-kit-master/`** :
    *   **Savoir-faire** : Créer des composants UI isolés (Cards, Buttons, Heros) utilisant des variables CSS globales.
    *   **Ressource** : Contient le fichier `variables.css` de référence.
2.  **`skills/pattern-repository/`** :
    *   **Savoir-faire** : Comment générer une classe `Repository` avec PDO.
    *   **Template** : Fournit le squelette de code pour les méthodes `find`, `findAll`, `save`.
3.  **`skills/service-layer/`** :
    *   **Savoir-faire** : Comment écrire une classe `Service` qui valide les données avant d'appeler le Repository.

---

## Étape 3 : Orchestrer avec des Workflows (Le Processus)

Enfin, nous définissons la séquence d'actions pour réaliser une fonctionnalité de bout en bout sans rien oublier.

### Exemple de Workflow : `/implement-feature`

**Fichier : `.agent/workflows/implement-feature.md`**

1.  **Analyse & Design** :
    *   Lire le besoin utilisateur.
    *   Utiliser le skill `ui-kit-master` pour créer la maquette HTML/CSS.
2.  **Validation Visuelle** (Point de contrôle Règle UI) :
    *   Notifier l'utilisateur pour valider le rendu du composant.
    *   *Si refusé* : Boucler sur l'étape 1.
3.  **Implémentation Base de Données** :
    *   Créer le script SQL de migration.
    *   Utiliser le skill `pattern-repository` pour créer la classe d'accès aux données.
4.  **Logique Métier** :
    *   Utiliser le skill `service-layer` pour connecter le Controller au Repository.
5.  **Assemblage & Test** :
    *   Mettre à jour la vue publique (`index.php`) pour afficher les vraies données.
    *   Lancer script de test.

---

## Résumé de la Conception

| Niveau       | Rôle dans le Projet 3-Tiers   | Exemple Concret                                                   |
| :----------- | :---------------------------- | :---------------------------------------------------------------- |
| **Règle**    | **INTERDICTION** / OBLIGATION | "Pas de SQL dans le HTML."                                        |
| **Skill**    | **CAPACITÉ** TECHNIQUE        | "Je sais générer une classe Repository propre."                   |
| **Workflow** | **PLAN D'ACTION**             | "Je fais d'abord le design, puis je valide, puis je code le PHP." |

## Conclusion sur les Relations
Pour réussir votre projet :
1.  **Les Règles** limitent le champ des possibles (Sécurité/Qualité).
2.  **Les Workflows** optimisent le chemin à parcourir (Efficacité).
3.  **Les Skills** fournissent la force de travail nécessaire (Compétence).

L'un ne va pas sans l'autre : Un Workflow sans Skill est une coquille vide. Un Skill sans Règle est un outil dangereux.

## Comment Bootstrapper cet Agent ?
Vous pouvez demander à l'IA de mettre en place cette structure pour vous.

**Exemple de Prompt Global :**
> *"Analyse ce projet et propose-moi une structure de Règles et Skills adaptée pour une architecture 3-Tiers."*

**Exemple de Prompt Spécifique :**
> *"Initialise les règles de base pour un projet 3-Tiers (séparation logic/data) et crée le skill correspondant pour les Repositories."*
