# UX Flows — Web Institucional Grupo GEN

> Consolidado de Fase 1 (UX). Ver `docs/01-mapa-del-sitio-y-modelo-de-contenido.md` para el
> modelo de datos completo y `docs/02-copy-muestra.md` para el copy aprobado que alimenta estos
> wireframes.

## Mapa maestro de pantallas
Ver [diagrams/screen-map.md](diagrams/screen-map.md).

## Inventario de pantallas
Ver [wireframes/INDEX.md](wireframes/INDEX.md) — 14 pantallas, prototipo clickeable sin JS.

## Casos de uso
Ver [use-cases.md](use-cases.md) — UC-001 a UC-005, tomados de los flujos ya definidos en Fase 1.

## Prototipo clickeable — mapa de navegación

| Desde | Elemento | Hacia |
|---|---|---|
| home.html | logo Dialeca | empresa-dialeca.html |
| home.html | franja "Minería" | vertical-mineria.html |
| home.html | franja "Bienes raíces" | vertical-bienes-raices.html |
| home.html | "Novedades*" (nav) | novedades-index.html |
| empresas-index.html | logo Dialeca/Viagen/Lumiganor/Vía Confort | empresa-{slug}.html |
| empresas-index.html | logos `solo_logo` | sin destino (a confirmar `url_externa`) |
| vertical-mineria.html | "Cerro Papagayo" | proyecto-cerro-papagayo.html |
| vertical-bienes-raices.html | "Jardines de Acuario" | proyecto-jardines-de-acuario.html |
| proyecto-cerro-papagayo.html | tag "Dialeca S.A." | empresa-dialeca.html |
| cualquier ficha | back | vertical o índice correspondiente |

## Decisiones de diseño validadas en esta pasada

1. **Home sin bloque de cifras protagonista** — logos y franja de foto por delante, cifras como
   fila opcional de píldoras.
2. **`/presencia` no existe como página** — el mapa vive dentro de `empresas-index.html`.
3. **Novedades y Sostenibilidad son una sola sección**, con categoría, y **desaparece del menú y
   deja de ser navegable si no hay contenido publicado** (ver nota en `novedades-index.html` y
   §5 de `01-...md`).
4. **Empresa tiene dos modos**: `ficha_completa` (4 casos reales) y `solo_logo` (con o sin
   `url_externa`) — visible en `empresas-index.html`.
5. **Ficha de proyecto probada en sus dos variantes**: con empresa y cifras (Cerro Papagayo) y sin
   ninguna de las dos (Jardines de Acuario) — la plantilla no se rompe ni se ve vacía en ningún
   caso.

## Preguntas abiertas para la siguiente pasada (diseño visual de alta fidelidad)

- Paleta y tipografía dependen del logo en vector, todavía pendiente del cliente.
- Tratamiento fotográfico único para unificar imágenes de calidad y época dispares (legajo, riesgo R1).
- Definir si el bloque de cifras de home se mantiene, se reduce a menos de 4, o se retira del todo
  — quedó como "opcional" en este wireframe a propósito, para decidirlo con el cliente viendo el
  layout ya construido.

## Exportar a Figma (opcional)

Estos wireframes se pueden llevar a Figma con la integración oficial Code to Canvas. Requiere
Figma desktop con el Dev Mode MCP Server habilitado. Si te interesa, decime y sigo el proceso de
configuración.
