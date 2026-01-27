# Visualisation Workflow : UI-Kit (Statique)

Basé sur `.agent/workflows/ui-kit.md`.

## Diagramme de Flux

```mermaid
graph TD
    Start([Début : UI-Kit]) --> Input[/Entrée : Plan UI Validé/]
    
    subgraph "Phase 2 : Prototypage Statique"
        Input --> Check{Type Composant?}
        
        Check -->|Simple| Atom[Créer Atome]
        Check -->|Groupe| Mol[Créer Molécule]
        Check -->|Complexe| Org[Créer Organisme]
        
        Atom --> HTML[Structure HTML5]
        Mol --> HTML
        Org --> HTML
        
        HTML --> Tailwind[Styling Tailwind CSS]
        Tailwind --> Mock[Injection Données Mock]
        
        Mock --> Preview[Prévisualisation locale]
    end
    
    Preview --> Valid{Validation Visuelle?}
    Valid -->|Non| Tailwind
    Valid -->|Oui| UpdateMask[Mise à jour Manifeste]
    
    UpdateMask --> End([Fin : Composant Prêt pour Intégration])
    
    style Start fill:#f9f,stroke:#333
    style End fill:#f9f,stroke:#333
    style Input fill:#bbf,stroke:#333
```

## Points de Cohérence

- **Règle liée** : `03-implementation-protocol.md` (Phase 2 : Isolation UI-Kit).
- **Skill lié** : `ui-designer-tailwind` (Design, Tailwind, Mocks).
- **Contrainte** : Aucune logique Backend. Fichier 100% autonome.
- **Output** : Fournit le template HTML validé pour le workflow `wire-3-tier`.
