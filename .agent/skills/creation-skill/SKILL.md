---
name: creation-skill
description: Guide for creating and managing Agent Skills.
---

# Creation Skill Skill

This skill provides guidelines and procedures for creating new Agent Skills.

## What are Skills?
Skills are reusable packages of knowledge that extend the agent's capabilities. They instruct the agent on how to approach specific tasks, conventions, or tools.

## Skill Locations
- **Workspace Skills**: `<workspace-root>/.agent/skills/<skill-folder>/` (Project-specific)
- **Global Skills**: `~/.gemini/antigravity/global_skills/<skill-folder>/` (Available across all projects)

## How to Create a Skill

1. **Create the Folder**:
   - Create a directory for your skill in `.agent/skills/` (e.g., `my-new-skill`).
   
2. **Create the Main Instruction File**:
   - Create `SKILL.md` inside that folder.
   - This is the *only* required file.

3. **Add Optional Resources** (if needed):
   - `scripts/`: Helper scripts.
   - `examples/`: Reference implementations.
   - `resources/`: Templates or assets.

## SKILL.md Template

Every `SKILL.md` must start with YAML frontmatter.

```markdown
---
name: my-skill-name
description: A clear, third-person description of what the skill does. The agent uses this to decide if it should activate the skill.
---

# My Skill Name

## When to use this skill
- Use this when...
- Helpful for...

## How to use it
Detailed step-by-step instructions...
```

## Best Practices
- **Focused Scope**: One skill per distinct task.
- **Clear Description**: Crucial for the agent to "discover" the skill. Use keywords.
- **Progressive Disclosure**: The agent sees the list of skills first, then reads `SKILL.md` if relevant.
- **Scripts**: If using scripts, instruct the agent to use `--help` first.
