Contexte de l'Agent : Rôle : Développeur | Skills : Aucun (Mode Chat) | Workflow : Aucun

Voici la stratégie idéale pour développer cette fonctionnalité en respectant scrupuleusement votre architecture. Je l'ai découpée en 2 phases logiques (Design d'abord, Logique ensuite) avec les messages exacts à m'envoyer.

Phase 1 : Création du Composant Visuel (UI Kit)
Le but est d'avoir une carte d'article HTML/CSS prête avant de toucher au PHP.

Action : Créer le composant ArticleCard.
Workflow utilisé : /scaffold-ui-component
Skill activé : ui-kit-master
📝 Message à envoyer à l'IA :

/scaffold-ui-component Je veux créer un composant "ArticleCard" pour afficher un résumé d'article (Titre, Image, Extrait, Bouton Lire).
💡 Remarque Technique :

L'agent va créer uniquement ui-kit/components/ArticleCard/index.html.
Il va appliquer le design "Premium" (ombres, glassmorphism) défini dans le skill.
Vous pourrez valider le visuel immédiatement en ouvrant ce fichier dans votre navigateur, sans avoir besoin de serveur PHP ou de base de données.
Phase 2 : Implémentation Logicielle (3-Tiers)
Une fois le design validé, on connecte tout.

Action : Créer le Repository, le Service et la Page PHP.
Workflow utilisé : /implement-feature-3tier
Skill activé : architecture-3tier
📝 Message à envoyer à l'IA :

/implement-feature-3tier Je veux créer la page d'accueil publique qui liste les articles.
Contextes :
1. Utilise le composant "ArticleCard" qu'on vient de créer.
2. Pour la Data : Utilise SQLite ou un mock PDO pour l'instant.
3. La page doit être accessible via "public/index.php".
💡 Remarque Technique :

Data Layer : L'IA va créer app/data/ArticleRepository.php avec une classe PHP qui gère le SQL.
Business Layer : Elle va créer app/services/ArticleService.php qui appellera le repository et formatera peut-être les dates ou résumés.
Presentation Layer : Elle va créer la page index.php. L'IA va "injecter" le HTML de votre ArticleCard à l'intérieur d'une boucle PHP (foreach ($articles as $article)...).
Résumé du Flux
En faisant cela, vous garantissez que :

Le Design est isolé et propre (UI Kit).
Le code PHP ne contient pas de HTML "spaghetti" (3-Tiers).
L'agent suit une procédure standardisée (Workflows).