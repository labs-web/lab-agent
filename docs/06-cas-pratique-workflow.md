# Cas Pratique : Le "Maquettage First"

Pour illustrer, voici comment on transforme une méthode de travail humaine en configuration Antigravity.

**La méthode humaine :**
"On ne code jamais le PHP (Backend) tant que le HTML (Frontend) n'est pas validé visuellement."

**La traduction Antigravity :**

1.  **Config Skills** : On crée un expert `createur-ui` (Frontend) et un expert `developpeur-php` (Backend).
2.  **Config Workflow** : On écrit un script `/creation-page` qui :
    *   Étape 1 : Appelle `createur-ui` pour faire le HTML.
    *   Étape 2 : **STOP**. Demande validation utilisateur.
    *   Étape 3 : Si validé, appelle `developpeur-php` pour la logique.
3.  **Config Rule** : On ajoute une sécurité `no-backend-without-frontend` : "Interdit de modifier un fichier `.php` (Controller) si le fichier `.html.twig` correspondant n'existe pas."

Ainsi, l'architecture force respectueusement le développeur à suivre la bonne méthode.
