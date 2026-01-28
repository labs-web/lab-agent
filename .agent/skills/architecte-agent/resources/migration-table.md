# TABLE DE MIGRATION (Prompt -> Agent)

Utilise cette table pour traduire les demandes utilisateurs en composants :

| Concept Prompt Classique        | Composant Agent Cible | Exemple                               |
| :------------------------------ | :-------------------- | :------------------------------------ |
| **"IMPORTANT", "NE FAIS PAS"**  | **Rule**              | "Pas de PHP" -> `02-stack.md`         |
| **"Format de sortie imposé"**   | **Rule**              | "Toujours JSON" -> `00-meta.md`       |
| **"Agis comme un expert..."**   | **Skill**             | "Expert React" -> `expert-react/`     |
| **"Voici la doc technique..."** | **Skill**             | Doc Tailwind -> `expert-tailwind/`    |
| **"Crée, puis teste, puis..."** | **Workflow**          | Processus complet -> `feature-dev.md` |
