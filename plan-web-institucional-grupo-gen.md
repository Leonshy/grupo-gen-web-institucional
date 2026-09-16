# PLAN — Web Institucional Grupo GEN

> Documento operativo. El alcance, el modelo de negocio y los riesgos están en
> `legajo-web-institucional-grupo-gen.md`. Acá está el **cómo** y el **en qué orden**.
> Versión 1.0 — Septiembre 2026.

---

## La regla que ordena todo el plan

**Cada etapa produce el insumo de la siguiente. Ninguna arranca sin la anterior aprobada.**

```
UX  ──────►  COPY  ──────►  BACKEND  ──────►  FRONTEND
 │             │               │                 │
 │             │               │                 └─ maqueta contenido real, nunca texto falso
 │             │               └─ el esquema sale de los campos, no se adivina
 │             └─ se escribe contra campos definidos, no contra una página en blanco
 └─ define qué campos existen y cuántas palabras entra en cada uno
```

Las tres razones por las que este orden no es negociable:

1. **El copy no se escribe en el vacío.** Si no sabés que la bajada de la ficha de proyecto son
   120–200 palabras y tiene tres cifras al lado, escribís un texto que después no entra.
2. **El backend no adivina el modelo de datos.** La planilla de contenido de la Fase 2 *es* la
   especificación de tablas y campos. Cada columna de la planilla es una columna de la base.
3. **El frontend no se maqueta con lorem ipsum.** Con presupuesto de palabras acotado, un diseño
   validado con texto falso miente: el texto real siempre es más corto o más largo, y el equilibrio
   visual se rompe. Acá el contenido ya está escrito cuando se maqueta.

**Tres hitos de aprobación del cliente. Ni uno más.** Cada hito se aprueba entero, de una vez.
No hay aprobación página por página — es lo que hace que un proyecto de doce semanas se vuelva de
veinticuatro.

---

## Mapa de fases

| Fase | Nombre | Horas | Hito de cliente |
|---|---|---|---|
| 0 | Descubrimiento y cierre de alcance | 10–14 | — |
| **1** | **UX: organización y flujo** | **18–24** | 🚩 **HITO 1** |
| **2** | **Copywriting y sistema de diseño** | **20–28** | 🚩 **HITO 2** |
| 2b | Versión en inglés | 8–12 | (dentro del Hito 2) |
| 3 | Backend y panel de administración | 38–50 | — (interna) |
| **4** | **Frontend** | **34–46** | 🚩 **HITO 3** |
| 5 | Carga de contenido y documentos | 16–22 | — |
| 6 | SEO e integraciones | 10–14 | — |
| 7 | Rendimiento | 8–12 | — |
| 8 | Seguridad | 10–14 | — |
| 9 | QA y testing | 12–18 | — |
| 10 | Despliegue, capacitación y cutover | 8–12 | Entrega |
| | **Total** | **192–266 h** | |

**Plazo de aprobación en cada hito: 5 días hábiles.** Vencido el plazo sin observaciones, se
considera aprobado y el equipo avanza. Va en el contrato.

---

## Fase 0 — Descubrimiento y cierre de alcance

**Objetivo:** que no quede ninguna incógnita que pueda mover el precio o romper el cutover.

**Entregables**

- Inventario de contenido del sitio actual *(hecho — Anexo A del legajo)*
- Planilla de trazabilidad, esqueleto: cada pieza de contenido actual con su destino asignado
  (página / documento descargable / se retira)
- Relevamiento técnico: dónde está alojado el sitio hoy, **dónde está alojado el correo
  `@grupo-gen.com`**, versión de PHP del Plesk destino, estado de los seis sitios satélite
- Listado de las sociedades del holding: razón social, país, año, vertical, sitio propio
- Decisión por escrito sobre qué material deja de ser público (costos por hectárea, precios
  proyectados, resoluciones, padrones, KMZ)
- Logotipo recibido en PNG (no hay vector — se revectoriza internamente) y sitios de referencia,
  recibidos del cliente
- Motivo de la salida de carbón vegetal y qué se hace con `carbochaco.com`

**Criterio de salida:** alcance y precio cerrados, contrato firmado, acceso al DNS coordinado con
Alan Segovia.

---

## Fase 1 — UX: organización y flujo 🚩 HITO 1

**Objetivo:** definir la estructura del sitio y, sobre todo, **qué campos existen en cada plantilla**.
Esta fase produce el andamio que llenan las dos siguientes.

**Entregables**

1. **Mapa del sitio completo**, ES y EN, con la jerarquía holding → empresas → proyectos y las
   verticales como vista transversal.
2. **Modelo de contenido**: las entidades (Empresa, Vertical, Proyecto, Cifra, Documento, Novedad,
   Página) con sus campos, tipos, obligatoriedad y relaciones.
3. **Flujos de usuario**, cuatro perfiles: el inversor que evalúa la escala del grupo, la contraparte
   que busca una empresa específica, el periodista o analista que busca datos, el proveedor que
   quiere contactar. Cada flujo termina en una acción concreta del sitio.
4. **Wireframes de las ocho plantillas**: home · quiénes somos · índice de inversiones · vertical ·
   ficha de proyecto · índice de empresas · ficha de empresa · contacto. Más novedades y ficha de
   novedad.
5. **Tabla de campos con presupuesto de palabras**, plantilla por plantilla. Es el puente literal
   con la Fase 2.

**Herramienta:** `ux-flow-designer`.

**Criterio de salida:** cada campo de cada plantilla tiene nombre, tipo, si es obligatorio, si es
traducible y cuántas palabras entran. Si un campo no tiene techo de palabras definido, la fase no
está cerrada.

**Aprueba:** Marcel Saps. Se presenta el mapa del sitio y los wireframes juntos, en una reunión.

---

## Fase 2 — Copywriting y sistema de diseño 🚩 HITO 2

**Objetivo:** escribir todo el contenido del sitio y definir cómo se ve. Van juntos porque con
prosa acotada el texto y el diseño se sostienen mutuamente: aprobarlos por separado lleva a
aprobar un texto que después no funciona en su caja.

### 2.1 — Contenido

**El entregable central es la planilla de contenido**, no un documento de prosa.

| Columna | Contenido |
|---|---|
| Plantilla | Ficha de proyecto |
| Registro | Cerro Papagayo |
| Campo | `bajada` |
| Techo | 200 palabras |
| Texto ES | *(el texto final)* |
| Texto EN | *(Fase 2b)* |
| Origen | `inversiones.html#MineriaSub2` |
| Destino del resto | Documento — "Hierro, resumen técnico" |

Una fila por campo. Esa planilla **es** el contenido del sitio: en la Fase 5 se carga tal cual, y
en la Fase 3 sus columnas definen las tablas. Nadie escribe texto en otro lado.

**Además:**

- Planilla de trazabilidad completa y aprobada: todo el contenido actual con destino asignado, sin
  huérfanos
- **Lista de documentos descargables**, con estado de cada uno: ya existe en PDF / hay que maquetarlo
  como ficha técnica / se retira. *(Pendiente de decisión del cliente: los informes de biomasa y de
  Cerro Papagayo hoy están en HTML, no en PDF.)*
- Revisión de fechas y cifras vencidas, ítem por ítem, con aprobación explícita
- Decisión sobre la vertical siderúrgica: mínimo aportado por el cliente / publicada "en desarrollo" /
  despublicada al lanzamiento

### 2.2 — Diseño

- **Mini manual de marca** derivado del logotipo: paleta, tipografía y escala, grilla, iconografía,
  tratamiento unificado de las fotos existentes, estados y componentes. El cliente no tiene manual,
  así que este documento le queda a él como activo.
- Si el logo solo existe en PNG, se revectoriza y se entrega el SVG.
- **Diseño de alta fidelidad de las ocho plantillas**, maquetadas **con el texto real de la planilla**.
- Tratamiento visual de las cifras destacadas: es el elemento gráfico que sostiene las páginas cortas.
- Diseño del mapa de presencia territorial.

**Herramientas:** `impeccable` (sin colores ni tipografías literales en los componentes — tokens de
marca como datos), `emil-design-eng` para el motion.

**Criterio de salida:** no queda un solo campo sin texto aprobado ni una plantilla sin diseño.

**Aprueba:** Marcel Saps, copy y diseño en una sola aprobación.

### Fase 2b — Inglés

La misma planilla, columna EN, respetando los mismos techos de palabras. Se aprueba en un pase
único, no ficha por ficha.

---

## Fase 3 — Backend y panel (interna, sin hito de cliente)

**Objetivo:** que el panel permita cargar el sitio entero a mano, sin tocar código.

**Punto de partida: el panel de Dante**, adjuntado como recurso en VS Code. Se hereda lo que ya
funciona y se agrega lo del holding.

### Verificación previa al primer commit

**Dante ya es bilingüe (español / alemán)**, así que la capa de traducción se hereda en lugar de
construirse. Lo que hay que hacer al abrir el repo no es decidir una estrategia, es **leer la que ya
está** y confirmar que aguanta lo de GEN:

- Qué mecanismo usa: columnas JSON traducibles, tabla de traducciones o fila por locale.
- Si cubre **todos** los módulos o solo páginas y noticias. Es la pregunta que más importa: si el
  segundo idioma está resuelto para páginas pero no para entidades con relaciones, las entidades
  nuevas del holding no lo heredan gratis.
- Cómo se comporta el sitio público cuando a un registro le falta la traducción: ¿cae al idioma
  base, se oculta, rompe?
- Si los menús son por idioma.
- Si el SEO por página tiene campos por idioma y si emite `hreflang`.
- Cómo se ve el formulario del editor: lado a lado, por pestañas, o un panel por idioma.
- Cómo se resuelve el ruteo: prefijo, subdominio o dominio por idioma. GEN necesita prefijo (`/en/`).

Con eso resuelto, el cambio ES/DE → ES/EN es de configuración, no de arquitectura.

### Qué se hereda y qué se construye

| Módulo | Estado | Trabajo |
|---|---|---|
| Páginas jerárquicas con constructor de bloques | Hereda tal cual | Idioma incluido |
| Bloques (hero, texto, galería, CTA, acordeón, tarjetas, video, mapa) | Hereda tal cual | Revisar si falta algún bloque para las fichas |
| Noticias / novedades con categorías y destacados | Hereda tal cual | — |
| Biblioteca de medios con conversiones y alt obligatorio | Hereda tal cual | — |
| Menús jerárquicos drag & drop | Hereda | **Verificar que sean por idioma** |
| SEO por página (título, descripción, OG, canonical, index) | Hereda | Verificar campos por idioma y `hreflang` |
| Formularios con envíos, notificación y export CSV | Hereda tal cual | Solo se usa uno, pero viene gratis |
| Redirecciones 301 | Hereda tal cual | — |
| Configuración global | Hereda, adapta | **Sin teléfono, sin WhatsApp, sin horarios. Dos direcciones. Solo LinkedIn** |
| Usuarios, roles y 2FA | Hereda tal cual | — |
| Registro de auditoría | Hereda tal cual | — |
| **Capa de traducción** | **Hereda** | ES/DE → ES/EN. Cambio de configuración, no de arquitectura |
| **Empresas del holding** | **Nuevo** | Razón social, país, año, rol, sitio propio, verticales (muchos a muchos) |
| **Verticales / unidades de negocio** | **Nuevo** | Nombre, orden, resumen, imagen, color de acento, publicada sí/no |
| **Proyectos** | **Nuevo** | Ficha estándar: estado, ubicación, empresa, vertical, cifras, galería, documentos |
| **Cifras destacadas** | **Nuevo** | Valor, unidad, etiqueta, contexto. Reutilizables en home, vertical y ficha |
| **Biblioteca de documentos** | **Nuevo** | PDF, KMZ, PPTX y video, con visibilidad pública/privada |
| **Contador de palabras por campo** | **Nuevo** | Con el rango sugerido de la Fase 1 |

> Las cinco entidades nuevas se construyen **siguiendo el mismo patrón de traducción que ya usa
> Dante**. Copiar el patrón, no inventar uno nuevo al lado: dos mecanismos de i18n conviviendo en el
> mismo panel es deuda técnica desde el día uno.

**Además:** migraciones y modelos derivados de la tabla de campos de la Fase 1 y de la planilla de
la Fase 2, más tests Pest de todas las rutas del panel.

**Criterio de salida:** un editor puede crear una vertical nueva, con sus proyectos, cifras, galería
y documentos, en ambos idiomas, sin ayuda. Se prueba antes de pasar a la Fase 4.

---

## Fase 4 — Frontend 🚩 HITO 3

**Objetivo:** el sitio navegable en staging, con contenido real.

**Entregables**

- Las ocho plantillas en Blade + Livewire + Tailwind v4, consumiendo los modelos de la Fase 3
- **Cero vistas específicas por vertical.** Todo tratamiento particular es un bloque configurable
- Responsive de 360 px a 1920 px
- Motion: contadores de cifras, revelados al scroll, transiciones entre secciones
- Mapa interactivo de presencia territorial (solución liviana, sin cargar Google Maps en la home)
- Selector de idioma y ruteo `/` y `/en/`
- Biblioteca de documentos y descargas
- Formulario de contacto a `info@grupo-gen.com`, con el lead persistido **antes** de intentar el
  correo

**Criterio de salida:** sitio recorrible de punta a punta en staging, con el contenido aprobado
cargado. Nada de texto de relleno.

**Aprueba:** Marcel Saps, navegando el staging.

---

## Fases 5 a 10 — Cierre

| Fase | Entregables | Criterio de salida |
|---|---|---|
| **5 — Contenido** | Carga de la planilla completa ES/EN, imágenes curadas y tratadas, PDFs, KMZ y videos migrados | Planilla de trazabilidad al 100 %, sin contenido huérfano |
| **6 — SEO** | Mapa de redirecciones 301, `hreflang`, schema.org `Organization`, sitemap bilingüe, GA4/GTM, Search Console, banner de cookies, captcha | Posicionamiento de marca resuelto frente a los otros "Grupo GEN" |
| **7 — Rendimiento** | Optimización de imágenes, caché por locale, carga diferida de mapas y videos | Lighthouse móvil ≥ 90, CWV en verde |
| **8 — Seguridad** | Pentest con `strix`, endurecimiento de cabeceras, respaldos con `spatie/laravel-backup` y restauración probada | Cero hallazgos Críticos/Altos |
| **9 — QA** | Suite Pest, E2E con `playwright-cli`, accesibilidad AA con teclado, prueba de envío real del formulario | **Más una prueba obligatoria: crear una vertical nueva de cero desde el panel.** Si no se puede, la promesa de crecimiento ilimitado no existe |
| **10 — Despliegue** | Producción en Plesk, SSL, cutover del registro A/web, manual del cliente, capacitación | **Cero incidentes de correo.** MX y registros de correo no se tocan |

**Capacitación — contenido obligatorio:**

1. Publicar una novedad.
2. Actualizar una cifra destacada.
3. Subir un documento y decidir si es público.
4. **Crear un área nueva de cero, con un proyecto adentro, en los dos idiomas.** Ejercicio práctico
   hecho por Marcel, no explicado por nosotros.
5. Cuándo un contenido va a la página y cuándo va a documento descargable.

---

## Lo que puede frenar el plan hoy

| Bloqueo | Fase que traba | Quién lo destraba |
|---|---|---|
| Sitios web de referencia | 1 | Cliente |
| Listado de sociedades del holding | 1 | Cliente |
| Dónde está alojado el correo `@grupo-gen.com` | 0 | Cliente / Alan Segovia |
| Qué material deja de ser público | 0 | Marcel Saps, por escrito |
| Formato original de los informes técnicos (¿PDF o hay que maquetarlos?) | 2 | Cliente |
| Mínimo de la vertical siderúrgica | 2 | Cliente |
| Perfil de LinkedIn correcto | 6 | Cliente |
| Identificación y autorización de los 7 logos de "empresas con las que trabajamos" | 4 | Cliente |

**Cerrado:** el logo en vector no existe — el cliente confirmó que solo hay PNG (fondo
transparente, 3040×1540). Se revectoriza internamente en la Fase 2.2, deja de ser un bloqueo
externo. Ver `docs/05-lista-de-imagenes.md` §0.

Los dos primeros son los que hay que pedir hoy: sin ellos la Fase 1 no arranca.
