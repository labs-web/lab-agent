# Guide d'Installation : Agent Global

Ce dossier contient tous les fichiers nécessaires pour configurer votre Agent Antigravity en mode "Global".
Cela vous permettra d'avoir vos règles, workflows ET skills disponibles dans tous vos projets sans copie manuelle.

## 1. Installation des Règles Globales (GEMINI.md)

Le fichier `GEMINI.md` contient les règles fondamentales (Protocoles, Identité) qui doivent être actives partout.

**Procédure (Manuelle) :**
1.  Ouvrez votre fichier de configuration global : `~/.gemini/GEMINI.md` (sur votre disque dur).
2.  Copiez **l'intégralité** du contenu du fichier `agent-global/rules/GEMINI.md`.
3.  Collez-le dans votre fichier de règles globales.

## 2. Installation des Skills Globaux

Antigravity supporte les skills globaux dans le dossier `~/.gemini/antigravity/global_skills/`.

**Procédure (Manuelle) :**
1.  Localisez (ou créez) le dossier `~/.gemini/antigravity/global_skills/` sur votre machine.
    *   *Note : `~` correspond généralement à `C:\Users\VotreNom\` sous Windows.*
2.  Copiez le dossier `agent-global/skills/architecte-agent` vers ce dossier global.
    *   Résultat attendu : `C:\Users\...\.gemini\antigravity\global_skills\architecte-agent\`

## 3. Installation des Workflows Globaux

Les workflows suivants doivent être ajoutés à votre configuration globale :

*   `init-agent.md`
*   `evolution-agent.md`

**Procédure (Manuelle) :**
1.  Dans l'IDE, ouvrez le Panel Agent -> `...` -> **Workflows**.
2.  Pour chaque fichier de workflow présent dans le dossier `agent-global/workflows` :
    *   Cliquez sur **+ Global**.
    *   Nommez le workflow exactement comme le nom du fichier (ex: `init-agent`).
    *   Copiez le contenu du fichier et collez-le dans l'éditeur.
    *   Sauvegardez.

## 4. Vérification

1.  Ouvrez un nouveau dossier vide dans votre IDE.
2.  Tapez la commande `/init-agent`.
3.  L'agent doit utiliser le skill global `architecte-agent` pour initialiser la structure du projet.

---
*Généré par Antigravity*
