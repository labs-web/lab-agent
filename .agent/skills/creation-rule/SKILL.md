---
name: creation-rule
description: Guide for creating and managing Agent Rules (Global & Workspace).
---

# Creation Rule Skill

This skill provides guidelines and procedures for creating Agent Rules.

## What are Rules?
Rules are manually defined constraints that guide the Agent's behavior, stack, and style.
- **Global Rules**: Located at `~/.gemini/GEMINI.md`. These are applied across all workspaces.
- **Workspace Rules**: Located in the `.agent/rules` folder of the workspace. These are specific to the current project.

## Rule Activation Types
When creating a rule, consider how it will be activated (this is configured in the Rules panel, but the content should reflect the usage):
- **Manual**: Activated via `@` mention.
- **Always On**: Always applied.
- **Model Decision**: The model decides to apply it based on a natural language description.
- **Glob**: Applied to files matching a specific pattern (e.g., `*.js`).

## How to Create a Workspace Rule

1. **Create the File**:
   - Navigate to `.agent/rules/`.
   - Create a new Markdown file (e.g., `my-rule.md`).
   
2. **Define the Content**:
   - Rules are Markdown files.
   - Limit: 12,000 characters per file.
   - You can reference other files using `@` syntax (e.g., `@/path/to/file.md`).

3. **Best Practices**:
   - Be specific about constraints (e.g., "Always use `const` instead of `var`").
   - Provide examples of correct vs. incorrect usage.
   - Group related rules into a single file (e.g., `testing-rules.md`, `style-guide.md`).

## Template for a New Rule

```markdown
# [Rule Name]

## Objective
[Brief description of what this rule aims to achieve]

## Guidelines
1. [Guideline 1]
2. [Guideline 2]

## Examples
Correct:
...

Incorrect:
...
```
