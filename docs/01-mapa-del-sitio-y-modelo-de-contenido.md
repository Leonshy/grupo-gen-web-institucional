# Fase 1 — Mapa del sitio y modelo de contenido

> Entregable de Fase 1 (ver `plan-web-institucional-grupo-gen.md`). Define la estructura y,
> sobre todo, los campos de cada plantilla y su presupuesto de palabras — el puente literal
> con la Fase 2 (copywriting). Base tomada del patrón de Dante (Filament + spatie/laravel-translatable)
> adaptada al modelo jerárquico holding → empresa → vertical → proyecto del legajo.
>
> **v1.1** — revisado tras feedback del cliente: menos página, menos cifra, más logo y foto.
> Referencias visuales usadas: `azeta.com.py` y `grupovierci.com` (capturas en `docs/referencias/`).

---

## 0. Qué cambió respecto a la v1.0 (y por qué)

| Cambio | Motivo |
|---|---|
| Se elimina `/presencia` como página propia | El mapa de presencia territorial pasa a ser un bloque **dentro de** `/empresas`, no una página aparte. No amerita ruta propia. |
| `/sostenibilidad` y `/novedades` se fusionan en una sola sección | Una novedad puede ser de sostenibilidad, responsabilidad social o cualquier otro tema — es una etiqueta (`categoria`), no una plantilla distinta. |
| El ítem de menú de novedades **se oculta si no hay contenido publicado** | Si no hay ninguna novedad visible, la ruta no debe ser navegable ni estar en el menú. Ver §5. |
| Cifras destacadas dejan de ser obligatorias y dejan de ser el elemento gráfico central | Referencia visual: en Vierci las cifras son 5 píldoras chicas en una franja, no el centro de cada página. Se usan con moderación, no una grilla de 3–5 por proyecto. |
| Home se rediseña alrededor de logos + franja de áreas, no de cifras | Ver §3. |
| Ficha de empresa se calibra al tamaño real de contenido disponible | Ver §6 — con lo que hay hoy, entran 4 empresas con ficha completa, el resto sin ficha propia todavía. |

---

## 1. Mapa del sitio

```
/                              Home
/grupo                         Quiénes somos
/empresas                      Empresas del holding + mapa de presencia territorial
/empresas/{slug}                Ficha de empresa
/inversiones                   Índice de verticales
/inversiones/{vertical}         Vertical (listado de proyectos)
/inversiones/{vertical}/{slug}  Ficha de proyecto
/novedades                     Novedades (incluye sostenibilidad/RSE) — oculto si no hay contenido
/novedades/{slug}                Ficha de novedad
/contacto                      Formulario

/en/...                        Espejo completo en inglés (prefijo de ruta, no cookie de sesión)
```

Baja de 11 rutas de plantilla a 9. Menos plantillas que mantener, menos decisiones de navegación
para el visitante.

**Nota técnica heredada de Dante:** Dante resuelve el idioma con `/idioma/{locale}` + sesión
(`SetLocale`), sin prefijo en la URL. GEN necesita `hreflang` real y URL propia por idioma
(`/en/`) — se hereda `spatie/laravel-translatable` tal cual, pero el ruteo por prefijo hay que
construirlo.

---

## 2. Home — rediseñada sobre las referencias

Ya no es "cifras + verticales + mapa". Es, en este orden:

1. **Hero corto**: nombre del grupo + una línea de posicionamiento (no 150 palabras repartidas en
   bloques — una sola bajada breve, al estilo Azeta: *"Plataforma para el desarrollo de negocios
   del Paraguay"* es el largo de referencia).
2. **Franja de logos de las empresas del holding**, cada uno como link a su ficha (patrón Azeta:
   grilla de logos sin texto, o patrón Vierci: carrusel horizontal). Con 4 empresas reales hoy,
   una grilla estática funciona mejor que un carrusel armado para docenas.
3. **Franja de áreas de inversión**, con foto + nombre, sin texto descriptivo (patrón Vierci: tiras
   de imagen que llevan al índice de esa vertical). Reemplaza el listado de 9 verticales con
   texto que tenía la v1.0.
4. **(Opcional, discreto) 3 a 4 cifras** en formato píldora chica, no protagonista — si el cliente
   quiere mantener alguna referencia de escala. Nunca más de una fila.
5. **Últimas novedades** (2–3 tarjetas) — **el bloque entero desaparece si no hay novedades
   publicadas**, igual que el ítem de menú.
6. Cierre con contacto.

**Presupuesto de palabras de home:** ~40–60 palabras de prosa real (hero + eventual bajada de cada
franja como título de 2-3 palabras). El resto es logo, foto y link.

---

## 3. Modelo de contenido (entidades)

### Empresa

**Dos modos de publicación, no uno.** No todas las empresas del holding (ni las 7 "empresas con
las que trabajamos" del sitio actual) tienen contenido para una ficha. El panel tiene que permitir
cargar solo un logo — con o sin link — sin obligar a llenar una ficha completa.

| Campo | Tipo | Traducible | Obligatorio | Notas |
|---|---|---|---|---|
| `tipo_presentacion` | selector | No | Sí | **`ficha_completa`** o **`solo_logo`** — decide si se genera página propia |
| `nombre` | texto corto | No | Sí | |
| `logo` | media | No | Sí | Único campo obligatorio en modo `solo_logo` |
| `url_externa` | URL | No | No | En modo `solo_logo`, si está cargada el logo linkea ahí (su sitio propio o el que sea); si no está, el logo no es clicable |
| `razon_social` | texto corto | No | No | Solo aplica en modo `ficha_completa` |
| `descripcion` | texto | Sí | Solo si `ficha_completa` | **50–70 palabras** — qué hace, no su historia completa |
| `sector` | texto corto | Sí | Solo si `ficha_completa` | Ej. "Minería", como en el patrón Azeta |
| `pais` | selector | No | Solo si `ficha_completa` | UY / PY / AR |
| `anio_fundacion` | número | No | No | |
| `sitio_propio` | URL | No | No | En modo `ficha_completa`, es el link dentro de la ficha (distinto de `url_externa`, que no se usa en ese modo) |
| `ubicacion_mapa` | coordenadas | No | No | Alimenta el bloque de presencia territorial en `/empresas` — solo si `ficha_completa` |
| `verticales` | relación N:N | — | Solo si `ficha_completa` | Una empresa puede tener varias |

**Consecuencia en `/empresas`:** la grilla de logos muestra ambos tipos igual — un logo es un
logo. La diferencia es invisible para el visitante: en `ficha_completa` el logo lleva a
`/empresas/{slug}`, en `solo_logo` lleva a `url_externa` (o a ningún lado si no la cargaron). El
cliente decide el modo al crear el registro, y puede pasar una empresa de `solo_logo` a
`ficha_completa` el día que tenga contenido, sin perder el logo ya cargado.

### Vertical
Sin cambios respecto a v1.0: `nombre`, `resumen` (60–100 palabras), `orden`, `color_acento`,
`imagen`, `publicada`.

### Proyecto
| Campo | Tipo | Traducible | Obligatorio | Notas |
|---|---|---|---|---|
| `nombre` | texto corto | Sí | Sí | |
| `estado` | selector | No | Sí | en operación / en desarrollo / en exploración |
| `ubicacion` | texto + coordenadas | Sí (texto) | Sí | |
| `empresa` | relación | — | **No** | Varios proyectos hoy no tienen empresa identificable — ver §6 |
| `vertical` | relación | — | Sí | |
| `descripcion` | texto | Sí | Sí | **120–200 palabras** |
| `cifras` | relación 1:N | — | No | **0 a 3**, no 3 a 5. Se usan solo si aportan, no por completar una grilla |
| `galeria` | relación 1:N | — | No | |
| `documentos` | relación N:N | — | No | Control de visibilidad pública/privada |

### Cifra destacada
Sin cambios de campos, cambia el criterio de uso: es un recurso puntual, no una sección fija de
cada plantilla.

### Documento y Novedad
Sin cambios respecto a v1.0.

---

## 4. Presupuesto de palabras por plantilla (revisado)

| Plantilla | Prosa | Complemento visual |
|---|---|---|
| Home | **40–60 palabras** | Logos, franja de áreas, novedades (si hay) |
| Quiénes somos | 200–250 palabras | Hitos |
| Empresas (índice) | Sin prosa | Grilla de logos + mapa de presencia |
| **Ficha de empresa** | **50–70 palabras** | Logo, datos duros, submarcas si tiene |
| Índice de inversiones | 60–100 palabras de entrada por vertical | Franja de foto + listado de proyectos |
| **Ficha de proyecto** | **120–200 palabras** | 0–3 cifras (no obligatorias), galería, documentos |
| Novedad | Libre | — |

---

## 5. Regla de visibilidad — el menú no muestra secciones vacías

**"Novedades" (que incluye sostenibilidad/RSE) solo aparece en el menú y es solo accesible si hay
al menos una novedad publicada.** Si el cliente borra o despublica la última, el ítem de menú
desaparece y la ruta `/novedades` deja de resolver como sección navegable (404 o redirección a
home, a definir en Fase 3 — no una página vacía con "próximamente").

Esto es una decisión de diseño, no solo de UI: **una sección vacía visible es peor que no
tenerla**, mismo criterio que el legajo ya aplica a la vertical siderúrgica (riesgo R5). Se
implementa como un scope en el modelo (`Post::published()->exists()`) que decide, en cada
request, si el ítem de menú y la ruta están activos. Se prueba explícitamente en QA (Fase 9):
publicar la única novedad, verificar que aparece; despublicarla, verificar que el menú y la ruta
desaparecen.

---

## 6. Con qué contenido contamos realmente hoy (sin asumir el listado pendiente del cliente)

Repaso honesto después de leer `index.html` e `inversiones.html`: **el contenido actual nombra
empresa operadora explícita en muy pocos casos.**

| Empresa mencionada | Contenido disponible para ficha | ¿Alcanza para ficha completa? |
|---|---|---|
| **Dialeca S.A.** | Minería (7 concesiones) + Construcción (agrimensura, ingeniería civil e hidráulica, urbanismo) | Sí — es la más completa |
| **Viagen S.A.** | Transporte fluvial: 6 remolcadores, 3 barcazas, 1 grúa, ruta Hidrovía | Sí |
| **Lumiganor S.A.** | Planta de biomasa ELTT, Treinta y Tres | Sí |
| **Vía Confort** | Electrodomésticos, fundada 1960, 4 sucursales en Montevideo | Sí |
| Egon | Mencionada en el legajo como posible operadora del sector forestal, **"a confirmar"** | No — no hay confirmación ni descripción propia |
| — | Jardines de Acuario, El Terruño (3 fraccionamientos), ambos shoppings, los lotes en Uruguay, Cerro Largo, CarboChaco | No — son proyectos/propiedades sin razón social asociada en el contenido actual |

**Conclusión operativa:** `/empresas` lanza con **4 fichas completas** (Dialeca, Viagen, Lumiganor,
Vía Confort). Los **7 logos de "empresas con las que trabajamos"** del sitio actual — hoy sin
identificar (Anexo B, ítem 7 del legajo) — entran en modo `solo_logo`: se publican tal cual, sin
ficha, y se les agrega `url_externa` si el cliente confirma a qué empresa corresponde cada uno; si
no, quedan como logo simple sin link. El resto de los ~25 proyectos se publican igual, en su
vertical correspondiente, con el campo `empresa` vacío — el modelo ya lo permite como opcional
(§3), así que nada de esto bloquea el lanzamiento. Si el cliente entrega después el listado
completo (Anexo B, ítem 11), se cargan las empresas faltantes en modo `ficha_completa` y se
asocian, sin tocar código ni estructura.

**Esto reemplaza la expectativa de la v1.0**, que daba por hecho que Fase 1 se cerraba con un
listado completo de sociedades. Se cierra igual, pero con el resultado real: 4 fichas de empresa
al lanzamiento, ampliable después desde el panel.

---

## 7. Flujos de usuario (sin cambios de fondo, ajustado el punto de entrada)

1. **Inversor que evalúa la escala del grupo** → Home (logos + áreas) → Inversiones → Ficha de
   proyecto (documento descargable) → Contacto.
2. **Contraparte que busca una empresa específica** → Empresas (logo) → Ficha de empresa → sitio
   propio o Contacto.
3. **Periodista/analista que busca datos** → Novedades (si hay) / Ficha de proyecto → Documento.
4. **Proveedor que quiere contactar** → Contacto (sin teléfono ni WhatsApp, por decisión del
   cliente).

---

## 8. Pendiente para cerrar Fase 1 (bloqueado por el cliente, ver Anexo B del legajo)

- Logo en vector (para poder tratarlo como elemento gráfico principal de home/empresas).
- Confirmación de si el material comercialmente sensible (costos por hectárea, precios de venta
  proyectados de etanol, hallado en `inversiones.html`) se publica, se retira, o se reserva para
  la Sala de Inversores (v1).
- Listado completo de sociedades del holding — **deja de ser bloqueante para lanzar** (§6), pero
  sigue siendo deseable para ampliar `/empresas` más allá de las 4 fichas iniciales.
