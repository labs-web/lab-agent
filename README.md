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

1. **Configuration** :
   - Ouvrez `config.php` et configurez les accès à votre base de données (Hôte, Utilisateur, Mot de passe).

2. **Base de données** :
   - Lancez le script d'installation automatique :
     - **En ligne de commande** :
       ```bash
       php install.php
       ```
     - **Ou via le navigateur** (après démarrage du serveur) :
       [http://localhost:8000/install.php](http://localhost:8000/install.php)

3. **Démarrage** :
   - Lancez le serveur local PHP :
     ```bash
     php -S localhost:8000
     ```

4. **Utilisation** :
   - Accédez à la page d'un article : [http://localhost:8000/public/article.php?id=1](http://localhost:8000/public/article.php?id=1)
