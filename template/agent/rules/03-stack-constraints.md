# Contraintes Techniques & Limitations de la Stack

Ce document définit les limites technologiques strictes du projet. Toute proposition de code hors de ce cadre doit être rejetée.

## 1. Backend : PHP 8.2+ "Pure"
- **Zéro Framework** : L'utilisation de Laravel, Symfony, Slim ou tout autre micro-framework est strictement interdite.
- **Autoloading** : Utilise un système d'autoloading simple (PSR-4 via Composer ou un autoloader manuel dans `src/`).
- **MVC Manuel** : 
    - **Model** : Classes PHP gérant les données via PDO.
    - **View** : Fichiers `.php` contenant principalement du HTML avec des injections de variables PHP simples (`<?= $var ?>`).
    - **Controller** : Classes orchestrant la logique et incluant la vue finale.

## 2. Frontend : SSR & Vanilla JS
- **Server-Side Rendering (SSR)** : Toute la logique d'affichage est générée côté serveur par PHP.
- **Interdictions Strictes (Frontend)** :
    - PAS de Frameworks JS (React, Vue, Angular, Alpine.js, Svelte).
    - PAS d'AJAX ou de Fetch API. 
    - TOUTES les interactions utilisateur (envoi de formulaire, suppression, filtres) doivent provoquer un rechargement de page via des requêtes HTTP standards (`POST` ou `GET`).
- **JavaScript** : Utilise uniquement du JS Vanilla si une manipulation du DOM immédiate est absolument nécessaire (ex: masquer/afficher une modale).

## 3. Style : Tailwind CSS Uniquement
- **Méthode d'inclusion** : Tailwind via CDN pour le développement rapide ou build process minimaliste.
- **Zéro Fichier CSS** : L'écriture de règles CSS dans des balises `<style>` ou des fichiers `.css` est interdite. Tout doit passer par les classes utilitaires Tailwind.
- **Gestion des Formulaires** : Focus sur les états natifs du navigateur et les classes Tailwind pour le feedback utilisateur.

## 4. Accès aux Données : PDO & MySQL
- **Sécurité** : Utilisation exclusive de PDO avec requêtes préparées. 
- **Zéro ORM** : L'utilisation d'Eloquent, Doctrine ou autre ORM est interdite. Le SQL doit être écrit manuellement dans les Models.
- **Configuration** : Les accès DB doivent être isolés dans un fichier `/config/database.php` retournant une instance de PDO.

## 5. Structure de Fichiers Cible
L'agent doit respecter scrupuleusement cette arborescence lors de la création de nouveaux fichiers :
- `/public` : Point d'entrée (index.php), assets (images).
- `/src/Controllers` : Logique de routage et de réponse.
- `/src/Models` : Logique de données et requêtes SQL.
- `/src/Services` : Logique métier (calculs, validations).
- `/src/Views` : Templates HTML et sous-dossier `ui-kit/`.