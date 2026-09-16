# Mini manual de marca — Grupo GEN

> Fase 2.2 del plan. Derivado del logo del cliente (PNG recibido, verde confirmado por el CSS del
> sitio actual: `#93c300`). Este documento es el que queda como activo del cliente — no tenía
> manual de marca antes. Todo lo que sigue en `docs/diseno-alta-fidelidad/` se construye sobre esto.

---

## 1. Logo

- Archivo fuente: PNG entregado por el cliente, fondo transparente, 3040×1540. No existe vector —
  se revectoriza a partir de este PNG (tarea interna, no bloquea el resto del manual).
- Isotipo: bloque verde sólido con la esquina superior derecha cortada en diagonal, wordmark "GEN"
  en blanco dentro del bloque. Texto complementario "Desarrollo & Inversión" en negro, a la derecha.
- **La esquina cortada es el elemento gráfico distintivo de la marca** — se reutiliza como motivo
  de firma visual en contenedores clave (ver §4), no como decoración libre en todos lados.
- Zona de seguridad: dejar un margen mínimo alrededor del logo equivalente a la altura de la "G".
- Versión monocromática (blanco, para fondos oscuros) y favicon (recorte cuadrado del isotipo,
  sin el texto): pendientes de producir junto con el vector.

## 2. Color

Paleta clara, cálida y sobria — nada de fondos negros ni estética de terminal (corregido tras la
primera propuesta). El verde es el protagonista, pero dosificado: dominan el blanco y el gris
cálido, el verde entra en bloques sólidos y en acentos, no como fondo general de la app.

| Token | Hex | Uso |
|---|---|---|
| `--green` | `#93C300` | Verde de marca. Bloques sólidos (hero, CTAs, footer), íconos, detalles gráficos. Confirmado por el CSS del sitio actual, no es una lectura aproximada del logo. |
| `--green-deep` | `#5C7A06` | Texto en verde sobre blanco (el verde puro no pasa contraste AA en texto chico), estados hover de botones. |
| `--ink` | `#181A12` | Texto principal, títulos. Negro con leve temperatura cálida, no negro puro. |
| `--ink-soft` | `#565A4E` | Texto secundario, descripciones, metadatos. |
| `--paper` | `#FFFFFF` | Fondo principal. |
| `--paper-soft` | `#F5F6F1` | Fondo alterno de sección, tarjetas sobre fondo blanco. |
| `--line` | `#E3E5DC` | Bordes, separadores. |
| `--amber` | `#D6A92C` | Estado "en desarrollo" (uso semántico puntual, no decorativo). |

**Regla de uso:** en cualquier vista, el verde sólido cubre entre el 10 % y el 30 % de la
superficie (bloques de foto/hero, botones, footer) — nunca es el fondo general de una página
completa, y nunca compite consigo mismo en dos tonos distintos a la vez.

## 3. Tipografía

| Rol | Fuente | Peso | Uso |
|---|---|---|---|
| Títulos / display | **Jost** | 600–800 | H1–H3, cifras destacadas, nombres de empresa/proyecto en tarjetas. |
| Cuerpo | **Hanken Grotesk** | 400–500 | Párrafos, descripciones, formularios, navegación. |

**Por qué Hanken Grotesk y no PG Grotesque:** PG Grotesque (Paulo Goode Type Foundry) también es
**paga**, mismo problema que Moderna Sans. Hanken Grotesk es una grotesca cálida y neutra gratuita
en Google Fonts, de carácter cercano — mismo criterio de reemplazo reversible: si el cliente
consigue la licencia de PG Grotesque, se cambia acá sin tocar el resto del sistema.

**Por qué Jost y no Manrope:** el wordmark "GEN" del logo está compuesto en **Moderna Sans**
(Latinotype) — es una fuente **paga**, no está en Google Fonts ni es de uso libre; usarla sin
licencia no es una opción. El cliente confirmó no tener la licencia todavía, así que se eligió
**Jost** como reemplazo gratuito: es geométrica de la misma familia "gothic" que Moderna Sans
(parientes de Futura / Century Gothic — círculos verdaderos en la O y la G, "a" de un solo piso),
visualmente muy cercana al trazo del wordmark. **Si el cliente consigue la licencia de Moderna
Sans más adelante, se reemplaza acá sin tocar el resto del sistema** — es el único punto de cambio.

Se elimina la tipografía monoespaciada como recurso de "dato técnico" — leía como panel de
control/terminal, no como sitio institucional. Las cifras (190.000 ha, 11,4 MW, etc.) se
tipografían en Jost Bold/ExtraBold, simplemente a mayor escala que el texto que las rodea.

**Escala:** H1 `clamp(2.25rem, 5vw, 3.5rem)` · H2 `clamp(1.5rem, 3vw, 2.25rem)` · cifra destacada
`clamp(2rem, 4.5vw, 3rem)` · cuerpo `1rem–1.125rem` · texto chico `0.875rem`.

## 4. Contenedores y componentes

- **Radio de borde: cero.** *(Corregido — la primera versión de este manual proponía 16px/12px de
  radio; el logo no tiene ninguna curva, solo el corte diagonal. Tarjetas, botones, inputs, bloques
  de imagen: todos con esquinas rectas.)*
- **Motivo de firma — esquina cortada:** los bloques de imagen/hero (no las tarjetas chicas) llevan
  la esquina superior derecha cortada en diagonal, igual que el isotipo. Es el único lugar del
  sistema donde se cita literalmente la forma del logo — y el único corte permitido, no se agregan
  curvas en ningún otro lado para "compensarlo".
- **Tarjetas:** fondo blanco o `--paper-soft`, esquinas rectas, sombra suave
  (`0 4px 24px rgba(20,20,10,0.06)`), sin borde o borde `--line` de 1px. Nunca ambos (sombra + borde
  marcado) a la vez.
- **Botones primarios:** fondo `--green`, texto blanco, esquinas rectas, hover a `--green-deep`.
  Secundarios: borde `--ink`, fondo transparente.
- **Grillas:** tarjetas en grilla de 3–4 columnas desktop, 2 tablet, 1 mobile. Gutter 24–32px.
- **Espaciado:** escala de 8px (8/16/24/32/48/64/96/128). Secciones con padding vertical
  80–120px desktop, 48–64px mobile.

## 5. Imágenes — tratamiento mientras no hay banco de fotos curado

El banco de fotos real (`docs/assets-sitio-actual/`) es de baja resolución y calidad dispareja —
no se usa todavía en la maqueta de alta fidelidad. En su lugar, **todo lugar donde va una foto
real se cubre con un placeholder plano**: un bloque de color sólido (verde o `--ink`, alternando),
con la esquina cortada del logo y un ícono de línea simple representando el rubro (pico y pala para
minería, árbol para forestal, barco para transporte fluvial, etc.). Nunca texto tipo "imagen
próximamente" — el bloque de color y el ícono ya comunican que es un placeholder, no contenido
final.

Cuando el cliente aporte fotografía curada por proyecto, cada placeholder se reemplaza uno a uno
sin tocar el layout — el bloque ya está dimensionado para foto real.

## 6. Qué cambia respecto a la primera propuesta (revertida)

La primera exploración (fondo negro, tipografía monoespaciada, filas tipo tablero de salidas) leía
como panel de datos/terminal, no como sitio institucional — el cliente la rechazó explícitamente.
Este manual la reemplaza por completo: fondo claro, tipografía humanista, tarjetas con sombra suave,
más presencia de "foto" (aunque sea placeholder por ahora), verde de marca dosificado en bloques
sólidos en vez de como acento mínimo sobre negro.
