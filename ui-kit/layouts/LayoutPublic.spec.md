# Spécification : LayoutPublic

## Description
Structure globale des pages publiques. Contient le Header, le contenu principal, et le Footer.

## Structure Visuelle (Wireframe Textuel)
```
┌─────────────────────────────────────────────────────────┐
│                      HEADER                              │
├─────────────────────────────────────────────────────────┤
│                                                          │
│                       MAIN                               │
│                   (Slot Content)                         │
│                                                          │
├─────────────────────────────────────────────────────────┤
│                      FOOTER                              │
└─────────────────────────────────────────────────────────┘
```

## Éléments Requis
- [ ] Container : min-h-screen, flex, flex-col
- [ ] Header : composant Header
- [ ] Main : flex-1, bg-gray-100, p-8
- [ ] Footer : composant Footer

## Notes pour le Créateur UI
- Le layout utilise flexbox pour que le footer reste en bas
- Le main prend tout l'espace disponible (flex-1)
