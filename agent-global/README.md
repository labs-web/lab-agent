# Agent Global Antigravity

Ce répertoire contient la configuration "Noyau" de l'agent, conçue pour être installée au niveau système (Global) afin d'être partagée entre tous vos projets.

Cela vous permet de bénéficier d'un agent intelligent et configuré dès l'ouverture d'un nouveau projet vide.

## Contenu

*   **`GEMINI.md`** : Le fichier de configuration des Règles Globales (Rules).
*   **`architecte-agent/`** : Le dossier du Skill Global contenant les capacités d'évolution et les templates.
*   **`init-agent.md`** : Le Workflow Global d'initialisation de projet.
*   **`evolution-agent.md`** : Le Workflow Global de maintenance de l'agent.
*   **`guide-installation.md`** : Les instructions détaillées pour copier ces fichiers aux bons endroits sur votre machine.

## Installation

Vous avez deux méthodes pour installer l'agent global :

### Option 1 : Installation Automatique (Recommandée)
Un script PowerShell est fourni pour copier automatiquement les règles et les skills au bon endroit.

1.  Ouvrez un terminal PowerShell dans ce dossier.
2.  Exécutez la commande suivante :
    ```powershell
    .\install.ps1
    ```
3.  Suivez les instructions affichées à l'écran pour finaliser l'ajout des Workflows (étape manuelle obligatoire).

### Option 2 : Installation Manuelle
Si vous préférez tout contrôler ou si vous êtes sur un autre OS (macOS/Linux), suivez le guide détaillé :

👉 **[Lire le Guide d'Installation Complet](guide-installation.md)**
