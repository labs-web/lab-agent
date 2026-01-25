# Chat Mode Trigger

## Objective
Enable a "Chat Mode" where the agent only converses and does not perform file system operations or modifications.

## Trigger
This rule is activated when the user's message starts with the character `>`.

## Guidelines
1.  **No File Modifications**: When the user's request starts with `>`, the agent **MUST NOT** use any tools that create, modify, or delete files (e.g., `write_to_file`, `replace_file_content`, `multi_replace_file_content`, `run_command` for file ops).
2.  **Conversation Only**: The agent's response must be limited to the chat interface (explaining, answering questions, providing code snippets in markdown blocks, etc.).
3.  **Read-Only Tools Allowed**: The agent MAY use read-only tools like `view_file`, `list_dir`, `search_files` to gather context for the answer.

## Examples

### Correct Behavior
**User**: `> Comment fonctionne le router ?`
**Agent**: *Reads the router file and explains it in the chat without modifying anything.*

### Incorrect Behavior
**User**: `> Crée un fichier test`
**Agent**: *Creates the file.* (This is WRONG under this rule. The agent should refuse or just explain how to do it).
