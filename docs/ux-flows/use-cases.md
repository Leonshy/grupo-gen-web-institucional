# Casos de uso — Web Institucional Grupo GEN

> Tomados de los flujos ya definidos en `docs/01-mapa-del-sitio-y-modelo-de-contenido.md` §7.
> No hay PRD de producto SaaS: esto es un sitio institucional, así que los "casos de uso" son
> recorridos de navegación de un visitante, no interacciones de una app con estado de usuario.

## UC-001 — Inversor evalúa la escala del grupo
- **Actor:** inversor o contraparte corporativa
- **Precondición:** llega a la home sin contexto previo
- **Flujo principal:** Home (logos + áreas de inversión) → Inversiones → Vertical (ej. Minería) →
  Ficha de proyecto (ej. Cerro Papagayo) → descarga documento técnico → Contacto
- **Postcondición:** entiende la escala real del holding y sabe a quién escribirle

## UC-002 — Contraparte busca una empresa específica
- **Actor:** proveedor, socio potencial
- **Flujo principal:** Home o Empresas → Ficha de empresa (ej. Dialeca S.A.) → sitio propio o
  Contacto
- **Alternativo:** la empresa buscada está en modo `solo_logo` (sin ficha) → el logo lleva
  directo a `url_externa` si existe, o no es navegable

## UC-003 — Periodista/analista busca datos
- **Flujo principal:** Novedades (si hay contenido publicado) o Ficha de proyecto → documento
  descargable
- **Alternativo — sección vacía:** si no hay ninguna novedad publicada, el ítem de menú
  "Novedades" no aparece y la ruta no es navegable (ver `01-...md` §5)

## UC-004 — Proveedor quiere contactar
- **Flujo principal:** Contacto → formulario (sin teléfono/WhatsApp, por decisión del cliente)

## UC-005 — Proyecto sin empresa asociada
- **Contexto:** ~20 de los 25 proyectos no tienen empresa operadora identificada en el contenido
  actual (ver `01-...md` §6)
- **Flujo:** Vertical → Ficha de proyecto (ej. Jardines de Acuario) — el campo empresa no se
  muestra, la plantilla no se ve incompleta
