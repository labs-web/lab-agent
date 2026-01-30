# Guide d'Installation : Agent Global

Ce dossier contient tous les fichiers nécessaires pour configurer votre Agent Antigravity en mode "Global".
Cela vous permettra d'avoir vos règles et workflows disponibles dans tous vos projets sans copie manuelle.

## 1. Installation des Règles Globales

Le fichier `GEMINI.md` contient les règles fondamentales (Protocoles, Identité) qui doivent être actives partout.

**Procédure :**
1.  Ouvrez votre fichier de configuration global :
    *   L'emplacement standard est : `~/.gemini/GEMINI.md` (sur votre disque dur).
    *   Ou via l'IDE : Panel Agent -> `...` -> **Rules** -> **+ Global**.
2.  Copiez **l'intégralité** du contenu du fichier `Agent Global/GEMINI.md` présent dans ce dossier.
3.  Collez-le dans votre fichier de règles globales.

## 2. Installation des Workflows Globaux

Les workflows suivants doivent être ajoutés à votre configuration globale :

*   `init-agent.md`
*   `evolution-agent.md`

**Procédure :**
1.  Dans l'IDE, ouvrez le Panel Agent -> `...` -> **Workflows**.
2.  Pour chaque fichier de workflow présent dans ce dossier :
    *   Cliquez sur **+ Global**.
    *   Nommez le workflow exactement comme le nom du fichier (ex: `init-agent`).
    *   Copiez le contenu du fichier et collez-le dans l'éditeur.
    *   Sauvegardez.

## 3. Vérification

1.  Ouvrez un nouveau dossier vide dans votre IDE.
2.  Tapez la commande `/init-agent`.
3.  L'agent doit se réveiller et vous proposer d'initialiser la structure du projet.

---
*Généré par Antigravity*
