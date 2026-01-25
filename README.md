# Lab agent 

## Travail à faire 

Apprendre comment configurer un agent pour qu'il soit un outils de développement IA


- Apprendre à créer les comosant d'un agent IA
  - rules
  - skills
  - workflow
  - ressouces

## Mini-projet 

Création d'une application Trois tiers avec PHP 

- Couche présentation : HTML, CSS, JavaScript
- Couche métier : PHP
- Couche données : MySQL

Application de gestion des articles

## Installation

1. **Base de données** :
   - Créez une base de données MySQL.
   - Importez le fichier `setup_db.sql` situé à la racine pour créer la structure et les données.
   - Configurez les accès dans `config.php`.

2. **Démarrage** :
   - Lancez le serveur local PHP :
     ```bash
     php -S localhost:8000
     ```

3. **Utilisation** :
   - Accédez à la page d'un article : [http://localhost:8000/public/article.php?id=1](http://localhost:8000/public/article.php?id=1)
