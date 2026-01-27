# Vue d'Ensemble de la Cohérence de l'Agent

Ce document synthétise les relations entre les **Règles**, les **Skills** et les **Workflows** définis dans la configuration de l'agent.

## Architecture Conceptuelle

L'agent est structuré autour de trois piliers qui se renforcent mutuellement :

1.  **Workflows** (Le "Quoi" et le "Quand") : Définissent les processus étape par étape. Ils sont les chefs d'orchestre.
2.  **Skills** (Le "Comment") : Capacités spécialisées invoquées par les workflows pour exécuter des tâches techniques précises.
3.  **Règles** (Le "Cadre") : Contraintes immuables qui s'appliquent (transversalement) à toutes les actions.

## Diagramme de Flux Global

```mermaid
graph TD
    subgraph Rules [Règles Transversales]
        R1[Identity & Persona]
        R2[Stack Architecture]
        R3[Quality & Security]
        R4[Implementation Protocol]
    end

    subgraph Workflows [Processus Séquentiels]
        W_Init[Init Structure] --> W_Analyze[Analyze & UI Decomp]
        W_Analyze --> W_UI[UI-Kit Dev]
        W_UI --> W_Wire[3-Tier Implementation]
    end

    subgraph Skills [Capacités Spécialisées]
        S_UI[UI Researcher / Tailwind]
        S_Logic[Business Logic Expert]
        S_Data[PDO Repository Master]
        S_Integrator[Tier 1 Integrator]
    end

    %% Relations Workflows -> Skills
    W_UI -->|Utilise| S_UI
    W_Wire -->|Utilise| S_Data
    W_Wire -->|Utilise| S_Logic
    W_Wire -->|Utilise| S_Integrator

    %% Relations Rules -> Workflows (Constraintes)
    R2 -.->|Impose| W_Init
    R4 -.->|Impose| W_Analyze
    R1 -.->|Guide| AllWorkflows

    style Rules fill:#f9f,stroke:#333,stroke-width:2px;
    style Workflows fill:#bbf,stroke:#333,stroke-width:2px;
    style Skills fill:#bfb,stroke:#333,stroke-width:2px;
```

## Observations de Cohérence

- **Protocoles d'Implémentation** : La règle `03_implementation_protocol.md` impose un ordre strict (UI-First) qui est parfaitement reflété par la séquence des workflows `analyze` -> `ui-kit` -> `wire-3-tier`.
- **Architecture 3-Tiers** : La règle `01-stack-architecture.md` définit des dossiers (`App`, `Views`, `ui-kit`) qui sont créés par le workflow `init-structure` et peuplés par `ui-kit` et `wire-3-tier`.
- **Isolation** : La séparation nette entre la création visuelle (`ui-kit`) et la logique backend (`wire-3-tier`) respecte le principe de "Séparation des Responsabilités" édicté dans les règles.
