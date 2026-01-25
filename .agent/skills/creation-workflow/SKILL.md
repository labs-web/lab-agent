---
name: creation-workflow
description: Guide for creating and managing Agent Workflows.
---

# Creation Workflow Skill

This skill provides guidelines and procedures for creating Agent Workflows.

## What are Workflows?
Workflows define a series of steps to guide the Agent through repetitive tasks (e.g., deployments, PR reviews).
- They are saved as Markdown files.
- Can be invoked via slash commands (e.g., `/workflow-name`).
- Can call other workflows.

## Workflow Locations
- **Global Workflows**: Accessed across all workspaces (managed via Customizations panel).
- **Workspace Workflows**: Located in `.agent/workflows/` within the workspace.

## How to Create a Workspace Workflow

1.  **Create the File**:
    - Navigate to `.agent/workflows/`.
    - Create a new Markdown file (e.g., `deploy-app.md`).
    
2.  **Define the Content**:
    - **Frontmatter**: Must include a `description`.
    - **Steps**: Numbered list of instructions.
    - **Limit**: 12,000 characters per file.

## Workflow File Format

```markdown
---
description: [Short title, e.g., How to deploy the application]
---
[Specific steps on how to run this workflow]

1. Step one...
2. Step two...
```

## Special Features

### Auto-run Commands (Turbo Mode)
- `// turbo`: Place this annotation *above* a step to auto-run that specific command step without waiting for user approval.
- `// turbo-all`: Place this annotation anywhere in the file to auto-run *all* command steps in the workflow.

**Example**:
```markdown
1. Make a folder called foo
// turbo
2. Make a folder called bar
```

### Slash Commands
- The filename determines the slash command.
- File `deploy-app.md` -> Command `/deploy-app`.
- Use the `view_file` tool to read the workflow file if the user invokes the command.

## Workflow Chaining
You can reference other workflows within a workflow step:
"Call /workflow-name to perform the sub-task."
