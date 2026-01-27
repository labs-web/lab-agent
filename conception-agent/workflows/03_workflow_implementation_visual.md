# Visualisation Workflow : Implémentation 3-Tiers

Basé sur `.agent/workflows/wire-3-tier.md`.

## Diagramme d'Architecture & Flux

```mermaid
graph LR
    subgraph "Tier 1 : Présentation (Access Point)"
        Route["Route (index.php)"] --> Ctrl["Controller"]
        Ctrl --> View["View (PHP + HTML)"]
    end
    
    subgraph "Tier 2 : Logique Métier (Brain)"
        Service["Service Layer"]
        Exception["Domain Exceptions"]
    end
    
    subgraph "Tier 3 : Données (Persistence)"
        Repo["Repository (PDO)"]
        Entity["Entity (DTO)"]
        DB[(MySQL Database)]
    end
    
    %% Flux d'exécution
    Route -->|Dispatch| Ctrl
    Ctrl -->|Appelle| Service
    Service -->|Valide/Traite| Service
    Service -->|Appelle| Repo
    Repo -->|SQL Query| DB
    DB -->|Result Set| Repo
    Repo -->|Hydrate| Entity
    Entity -->|Retourne| Service
    Service -->|Retourne| Ctrl
    Ctrl -->|Injecte Data| View
    
    %% Dépendances UI-Kit
    UIKit[("UI-Kit (Static HTML)")] -.->|Hydratation| View
    
    style Tier 1 fill:#e1f5fe,stroke:#01579b
    style Tier 2 fill:#fff3e0,stroke:#e65100
    style Tier 3 fill:#e8f5e9,stroke:#1b5e20
```

## Points de Cohérence

- **Règle liée** : `01-stack-architecture.md` (Structure 3-Tiers) et `02-quality-security.md` (PDO, Typage).
- **Skills liés** : 
    - `pdo-repository-master` (Tier 3)
    - `business-logic-expert` (Tier 2)
    - `tier1-integrator` (Tier 1 & Vue)
- **Sécurité** : Le flux garantit que les données brutes (DB) ne touchent jamais directement la Vue sans passer par le Service et le Controller.
