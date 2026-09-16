---
name: Grupo GEN — Tablero del holding
description: Sistema de diseño tipo tablero de estado, negro y verde de marca, para el sitio institucional de Grupo GEN.
colors:
  ground: "#0b0c0b"
  raised: "#141513"
  hover: "#1c1e1b"
  rule: "#33352f"
  rule-strong: "#4a4d43"
  paper: "#f4f3ee"
  paper-dim: "#b9bab2"
  paper-faint: "#8b8d80"
  green: "#93c300"
  green-dim: "#5c7a06"
  amber: "#d6a92c"
  focus: "#c8ea6e"
typography:
  display:
    fontFamily: "Big Shoulders Display, Arial Narrow, sans-serif"
    fontSize: "clamp(2.8rem, 9vw, 5.6rem)"
    fontWeight: 800
    lineHeight: 0.9
    letterSpacing: "0.01em"
  subline:
    fontFamily: "Big Shoulders Display, sans-serif"
    fontSize: "clamp(1.3rem, 3vw, 2rem)"
    fontWeight: 700
    letterSpacing: "0.01em"
  body:
    fontFamily: "Work Sans, system-ui, sans-serif"
    fontSize: "1rem"
    fontWeight: 400
    lineHeight: 1.55
  data:
    fontFamily: "JetBrains Mono, ui-monospace, monospace"
    fontWeight: 600
    fontVariantNumeric: "tabular-nums"
  meta:
    fontFamily: "Work Sans, system-ui, sans-serif"
    fontSize: "0.78rem"
    fontWeight: 400
spacing:
  row: "18px"
  section: "clamp(24px, 3.5vw, 40px)"
  gutter: "clamp(16px, 3vw, 32px)"
rounded:
  none: "0px"
components:
  button-primary:
    backgroundColor: "{colors.green}"
    textColor: "{colors.ground}"
    typography: "{typography.subline}"
    rounded: "{rounded.none}"
    padding: "14px 28px"
  button-primary-hover:
    backgroundColor: "{colors.paper}"
  row-link:
    backgroundColor: "{colors.raised}"
    textColor: "{colors.paper}"
    rounded: "{rounded.none}"
---

# Design System: Grupo GEN — Tablero del holding

## Overview

**Creative North Star: "El tablero de salidas de un puerto de inversión"**

Grupo GEN no se presenta como una empresa contando su historia — se presenta como un tablero de
estado que informa, fila por fila, la escala de un holding real: cada empresa, vertical y proyecto
es una fila reglada con su cifra en tipografía tabular, un indicador de estado y nada más. El
mundo visual nace de fusionar el lenguaje de un tablero de salidas de puerto/aeropuerto/bolsa
(matte black, tipografía condensada en mayúscula, filas y columnas como toda la composición) con
la tesis del legajo del proyecto: *"la cifra es el elemento gráfico"*. No hay tarjetas, no hay
degradados, no hay fotografía de archivo — el banco de fotos real es pobre y disperso, así que el
sistema no depende de él para verse serio.

Rechazos confirmados: sin foto de stock genérica como hero, sin cards de ícono+título+texto como
estructura de página, sin kickers/eyebrows sobre los títulos, sin flechas Unicode haciendo de
ícono (se dibujan en SVG).

**Key Characteristics:**
- Fondo negro casi puro, tipografía blanca cálida, un único acento verde reservado para el estado
  activo/actual.
- Toda cifra (hectáreas, MW, toneladas, remolcadores, años) se tipografía en monoespaciada
  tabular — nunca en la misma fuente que la prosa.
- La grilla la dan las costuras regladas (bordes de 1px), no sombras ni tarjetas.
- Las fotos reales del sitio actual se usan en escala de grises con un leve tratamiento de
  contraste, nunca a todo color ni a página completa.

## Colors

Paleta restringida (Restrained): neutros oscuros + un único acento saturado, coherente con un
sitio de "operar/persuadir" corporativo que no puede darse el lujo de verse frívolo.

### Primary
- **Verde GEN** (`#93c300`): el color de marca, confirmado por el CSS del sitio actual del
  cliente (no una lectura del logo). Se usa **solo** en el indicador de estado activo, el subtítulo
  del hero, el hover de filas/links y el botón de envío del formulario. Nunca decorativo, nunca de
  fondo de sección.
- **Verde profundo** (`#5c7a06`): reservado para estados hover/pressed del verde primario cuando
  se necesita un tono más oscuro sobre fondo claro. Sin uso todavía en las 8 plantillas.

### Secondary
- **Ámbar de estado** (`#d6a92c`): exclusivo del badge/dot de estado "en desarrollo" (`Proyecto.estado`).
  No es un acento de marca, es semántica de dato.

### Neutral
- **Negro tablero** (`#0b0c0b`): fondo de toda la aplicación.
- **Gris elevado** (`#141513`): fondo de las filas de encabezado de sección (`.section-head`).
- **Gris hover** (`#1c1e1b`): fondo al pasar el mouse sobre una fila interactiva.
- **Costura** (`#33352f`): todos los bordes de 1px que separan filas, columnas y secciones.
- **Costura fuerte** (`#4a4d43`): bordes de controles (selector de idioma, inputs).
- **Papel** (`#f4f3ee`): texto primario — blanco cálido, nunca `#fff` puro.
- **Papel tenue** (`#b9bab2`): texto secundario (sectores, párrafos largos).
- **Papel apenas visible** (`#8b8d80`): metadatos (labels de cifras, conteos de sección, footer).
  Ajustado en esta pasada para sostener ≥4.5:1 de contraste sobre el fondo negro.

### Named Rules
**La regla del acento único.** El verde de marca aparece en un solo lugar por vista a la vez: el
indicador de estado activo, o el subtítulo del hero, o el hover de una fila — nunca varios a la
vez compitiendo. Si una pantalla necesita "más color", la respuesta es tipografía más grande, no
más verde.

## Typography

**Display Font:** Big Shoulders Display (condensada, industrial — carácter de tablero de señalización, no un default de plantilla de IA)
**Body Font:** Work Sans (texto largo: descripciones de empresa/proyecto, formularios)
**Data Font:** JetBrains Mono (toda cifra, toda unidad, contadores de sección)

**Character:** una condensada muy alta en mayúscula para todo lo que es identidad/título, una
monoespaciada tabular para todo lo que es dato verificable, y una humanista simple para todo lo que
es prosa — la fricción entre las tres es intencional: el visitante distingue al toque "esto es un
título", "esto es un número real", "esto es una explicación".

### Hierarchy
- **Display** (800, `clamp(2.8rem,9vw,5.6rem)`, line-height 0.9): H1 de cada plantilla. Siempre en
  mayúscula vía `text-transform`, nunca escrito en mayúscula en el HTML.
- **Subline** (700, `clamp(1.3rem,3vw,2rem)`): la bajada inmediatamente debajo del H1 (ej. "Desarrollo
  & Inversión" bajo "Grupo GEN"), en verde de marca — es la única combinación título+subtítulo
  permitida; no es un kicker porque el título ya lidera en tamaño.
- **Nombre de fila** (`.co-name`, `clamp(1.05rem,1.8vw,1.3rem)`, Big Shoulders): nombre de
  empresa/proyecto dentro de una fila de tablero.
- **Body** (400, 1rem, line-height 1.55, medida máx. 72ch en `.prose`): descripciones largas.
- **Data** (JetBrains Mono 600, tabular-nums): cualquier cifra — desde "190.000 ha" hasta "5.817 ha"
  hasta "01" del contador de sección.
- **Meta** (Work Sans 400, 0.78rem): metadatos de apoyo — sector bajo el nombre de una fila,
  leyendas de mapa, notas al pie de sección. Un único tamaño chico para todo lo secundario, no uno
  distinto por componente.

### Named Rules
**La regla de la cifra tipografiada.** Ningún número relevante para el negocio (hectáreas,
toneladas, MW, año, cantidad de remolcadores) se escribe jamás en la fuente de cuerpo. Siempre
monoespaciada tabular. Es la traducción tipográfica literal de "la cifra es el elemento gráfico".

## Layout

Composición de tablero: una columna central de máx. `1180px` (`.board`), con bordes verticales de
costura a izquierda y derecha que delimitan todo el contenido — nunca full-bleed edge-to-edge en
desktop. Todo el contenido se apila en **filas regladas** (border-bottom de 1px), agrupadas bajo
una fila de encabezado de sección (`.section-head`, fondo gris elevado, contador en mono a la
derecha). No hay grilla de tarjetas en ningún punto del sistema.

Responsive: los grids de N columnas (ticker de 4, cifras de 1–3, áreas de 4, logos de 7, galería de
3) colapsan a 1–2 columnas por breakpoint sin reordenar el contenido, nunca ocultan información.
Las filas de empresa/proyecto (`.co-row`) reorganizan sus columnas con CSS Grid `order` en mobile
en vez de esconder la cifra o la flecha.

## Elevation & Depth

Sistema plano por decisión, no por omisión: cero `box-shadow` en las 8 plantillas. La profundidad y
la jerarquía las da el color de fondo por capas (`--ink-0` → `--ink-1` → `--ink-2`, cada vez más
claro) y las costuras regladas, nunca una sombra. Es coherente con el mundo de un tablero físico:
un tablero de salidas no tiene sombras, tiene paneles.

### Named Rules
**La regla del panel, no la tarjeta.** Ninguna superficie flota sobre otra con sombra. Si algo
necesita destacarse, sube un escalón de `--ink` o se separa con una costura, nunca con elevación.

## Shapes

Cero radio de borde en todo el sistema (`border-radius: 0` implícito por no declararlo). Esquinas
rectas en inputs, botones, badges y celdas de foto — coherente con el mundo de señalética/tablero,
donde el borde recto es lo que lee como "instrumento", no como "app de consumo".

## Components

### Filas de dato (`.co-row`, patrón central del sistema)
- **Estructura:** grid de 5 columnas (punto de estado · nombre+subtítulo · ubicación/sector · cifra
  mono · flecha SVG). En mobile colapsa a 3 columnas, la flecha se oculta.
- **Estado:** punto de 9px sin borde — gris (`--paper-faint`) por defecto, verde si `data-estado="activo"`,
  ámbar si `="desarrollo"`. Nunca un `border-left` de color (prohibido explícitamente por el piso de
  calidad del sistema).
- **Hover/focus:** fondo sube a `--ink-2`, la flecha pasa a verde. Sin transform, sin sombra.

### Badge de estado (`.badge`, fichas de proyecto/empresa)
- Punto de 8px + texto mono en mayúscula. Mismo mapeo de color que el punto de fila.

### Botón primario (`.submit`, único botón sólido del sistema)
- Fondo verde de marca, texto negro, tipografía Display, sin radio. Hover invierte a fondo papel.
  Es la única superficie donde el verde cubre un área grande — justificado porque es literalmente
  la acción activa del formulario.

### Inputs (`.field input/textarea`)
- Fondo `--ink-1`, borde 1px `--rule-strong`, sin radio. Foco: outline verde-claro (`--focus`)
  offset 1px — nunca solo cambio de borde, siempre outline visible para teclado.

### Navegación de idioma (`.locales`)
- Dos celdas ES/EN con borde, la activa se invierte a fondo papel/texto negro — mismo lenguaje de
  "estado activo = superficie invertida" que usa el resto del sistema para "seleccionado".

### Ícono de flecha/chevron (signature component)
SVG de 16×16, un solo trazo (`stroke-width:1.5`, `stroke-linecap:square`), `stroke="currentColor"`
para heredar el color del texto. Es el único ícono del sistema; reemplaza cualquier flecha Unicode.

## Do's and Don'ts

### Do:
- **Do** tipografiar toda cifra de negocio en JetBrains Mono tabular, nunca en Work Sans.
- **Do** reservar el verde de marca para un solo elemento activo por vista.
- **Do** dibujar cualquier ícono nuevo como SVG de un trazo, mismo `stroke-width` que la flecha
  existente.
- **Do** tratar las fotos reales en escala de grises con `contrast(1.1–1.2) brightness(0.55–0.7)`
  antes de mostrarlas — nunca a color pleno, para unificar un banco de fotos disperso.
- **Do** marcar explícitamente con `PENDIENTE` (mono, `--paper-faint`) cualquier dato que falte, en
  vez de rellenar con contenido inventado o placeholder genérico tipo "Lorem ipsum".

### Don't:
- **Don't** usar `border-left` de color en filas, tarjetas o alertas — es el patrón prohibido por
  el piso de calidad del sistema; el estado se comunica con un punto, no con un borde.
- **Don't** poner un kicker/eyebrow en mayúscula chica arriba de un título — el título lidera
  siempre en tamaño; si hace falta una bajada, va debajo y más grande que un eyebrow típico (ver
  `.hero .sub`).
- **Don't** usar sombras (`box-shadow`) en ninguna superficie — el sistema es plano por decisión.
- **Don't** usar más de un acento verde grande por vista.
- **Don't** reemplazar una flecha o ícono por un glifo Unicode (→, ✓, etc.) — siempre SVG dibujado.
