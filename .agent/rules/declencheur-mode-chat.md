---
trigger: always_on
---

# Chat Mode Trigger

## Objectif
Activer un "Chat Mode" où l'agent converse uniquement et n'effectue pas d'opérations ou de modifications sur le système de fichiers.

## Déclencheur
Cette règle est activée lorsque le message de l'utilisateur commence par le caractère `>`.

## Directives
1.  **Pas de Modifications de Fichiers** : Lorsque la demande de l'utilisateur commence par `>`, l'agent NE DOIT PAS utiliser d'outils qui créent, modifient ou suppriment des fichiers (ex: `write_to_file`, `replace_file_content`, `multi_replace_file_content`, `run_command` pour les opérations sur fichiers).
2.  **Conversation Uniquement** : La réponse de l'agent doit se limiter à l'interface de chat (expliquer, répondre aux questions, fournir des snippets de code dans des blocs markdown, etc.).
3.  **Outils en Lecture Seule Autorisés** : L'agent PEUT utiliser des outils en lecture seule comme `view_file`, `list_dir`, `search_files` pour rassembler du contexte pour la réponse.

## Exemples

### Comportement Correct
**Utilisateur** : `> Comment fonctionne le router ?`
**Agent** : *Lit le fichier router et l'explique dans le chat sans rien modifier.*

### Comportement Incorrect
**Utilisateur** : `> Crée un fichier test`
**Agent** : *Crée le fichier.* (Ceci est FAUX sous cette règle. L'agent devrait refuser ou simplement expliquer comment le faire).
