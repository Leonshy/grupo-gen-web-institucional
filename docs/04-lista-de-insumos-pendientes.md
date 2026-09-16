# Lista de insumos pendientes — para Marcel Saps

> Consolida el Anexo B del legajo con los faltantes puntuales que aparecieron al escribir el copy
> completo (`03-copy-completo.md`). Es la lista para enviar al cliente. Cada ítem dice **qué se
> necesita, para qué sirve y qué pasa si no llega**. Pensada para mandarse tal cual o copiarse a un
> mail/formulario.

---

## Cómo leer esta lista

- 🔴 **Bloqueante** — sin esto no se puede cerrar la fase indicada.
- 🟡 **Importante** — no frena el lanzamiento, pero el sitio sale incompleto o con una decisión
  tomada por default en su lugar.
- 🟢 **Deseable** — mejora el sitio, se puede cargar después del lanzamiento sin tocar código.

---

## A. Bloqueantes — hay que pedirlos ya

| # | Insumo | Para qué sirve | Si no llega |
|---|---|---|---|
| 1 🔴 | **Dónde está alojado el correo `@grupo-gen.com`** (proveedor, panel de control) | Coordinar el cutover de DNS sin cortar el correo del holding | Riesgo real de que el correo del grupo se caiga el día del cambio de sitio |
| 2 🔴 | **Qué documentos e información no deben seguir siendo públicos** (costos por hectárea, precios de venta proyectados, resoluciones, padrones, KMZ) — incluye puntualmente `M748-20_Resolucion_de_Otorgamiento.jpeg`, encontrada en la carpeta de minería del sitio actual, que parece una resolución de otorgamiento minero escaneada | Decidir qué contenido se publica, se retira o se reserva | El equipo no puede cerrar la política de contenido de la Fase 0, y por precaución esa información **no se publica** hasta que el cliente decida — puede ser una pérdida de contenido que sí quería mostrar |
| 3 🔴 | **Decisión sobre la vertical Siderúrgica** (Arrabio Paraguay y Fábrica de hierros): empresa operadora, ubicación, capacidad, estado — o directamente despublicarla | Publicar o no la vertical completa en el lanzamiento | Ya está resuelto por default: **no se publica** en el lanzamiento (ver `03-copy-completo.md` §3 y §4). Se puede agregar después sin tocar código |

> **Cerrado — logo:** el cliente confirmó que no hay vector; se trabaja con el PNG recibido
> (3040×1540, fondo transparente) y el equipo lo revectoriza. Sale de esta lista, ver
> `05-lista-de-imagenes.md` §0.

---

## B. Importantes — condicionan copy o alcance ya escrito

| # | Insumo | Para qué sirve | Estado si no llega |
|---|---|---|---|
| 4 🟡 | **Logos individuales de Dialeca S.A., Viagen S.A., Lumiganor S.A. y Vía Confort** | Fichas de empresa y franja "Nuestras empresas" de home | Ninguna de las 4 tiene isotipo propio relevado ni en el legajo ni en el sitio actual — se pidió al extraer las imágenes del sitio, ver `05-lista-de-imagenes.md` §1 |
| 5 🟡 | **Listado completo de sociedades del holding** (razón social, país, año, vertical, sitio propio) | Ampliar `/empresas` más allá de las 4 fichas completas actuales | El sitio lanza igual con esas 4 fichas; el resto de las ~25 proyectos sale sin empresa asociada, que el modelo de datos ya permite |
| 6 🟡 | **Identificación de los 7 logos de "empresas con las que trabajamos"** + autorización de uso de cada uno | Publicarlos en modo `solo_logo` en `/empresas`, con o sin link a su sitio | **El archivo ya está** (se recuperó del sitio actual, `clients-logo1,2,3,4,6,7,8.png`) — salen como logo simple sin link hasta que se identifiquen |
| 7 🟡 | **Aclarar qué es "Marean Corporation"** — el logo y una foto de flota en la sección de Viagen del sitio actual llevan ese nombre en el `alt`, no "Viagen S.A." | Saber si es una marca comercial de Viagen, un socio, o un error de carga antes de usar esa foto/logo en la ficha de empresa | Se usa solo la foto de flota sin el logo "Marean Corporation", hasta aclarar |
| 8 🟡 | **2 o 3 sitios de referencia que le gusten al cliente** | Ya se usó Azeta y Vierci como referencia por decisión propia del equipo — confirmar si coinciden con el gusto del cliente o hay que ajustar | El diseño de alta fidelidad sigue con Azeta/Vierci como base |
| 9 🟡 | **Revisión de cifras y fechas del contenido actual**, una por una (hay proyecciones a 2018 y 2023, informes de 2013 y 2021) | Que ninguna cifra o fecha vencida llegue al sitio nuevo | Se publican solo las cifras que ya están confirmadas como vigentes en el copy actual; el resto queda fuera hasta su revisión |
| 10 🟡 | **URL del perfil de LinkedIn correcto** | Es el único canal social del sitio | El sitio lanza sin el link, se agrega después sin tocar código |
| 11 🟡 | **Confirmación de las dos direcciones a publicar y su jerarquía** (Uruguay + Asunción, Av. Primer Presidente 3508) | Completar la sección de Contacto | Se publica solo la dirección de Asunción, que ya está confirmada en el legajo |
| 12 🟡 | **Nombres y cargos de la conducción**, si se quieren publicar | Sumarlos a "Quiénes somos" | La sección sale sin mencionar personas, solo empresas — es lo que ya está redactado en `03-copy-completo.md` §1 |
| 13 🟡 | **Formato original de los informes técnicos** (biomasa y Cerro Papagayo están en HTML, no PDF) | Definir si se maquetan como fichas técnicas descargables o se migran tal cual | El documento descargable de Cerro Papagayo queda marcado "pendiente en formato original" hasta resolverlo |
| 14 🟡 | **Contenido de las galerías embebidas** de El Terruño (3) y Pueblo de Mar (1) — el sitio actual las carga por `iframe` (`galerias/*.html`) y no se pudieron extraer con el resto de las imágenes | Completar la galería de esos 4 proyectos | Salen sin galería propia hasta que el cliente aporte esas fotos |
| 15 🟡 | **Motivo de la salida de carbón vegetal y qué se hace con `carbochaco.com`** | Cerrar qué pasa con ese dominio y ese contenido (sale del sitio nuevo, ya decidido) | El dominio queda sin resolución de redirect o cierre — pendiente para la Fase 6 |

---

## C. Deseables — mejoran fichas puntuales, no bloquean nada

Esta sección es nueva respecto al Anexo B del legajo: son los faltantes que aparecieron proyecto
por proyecto al escribir el copy completo. Ninguno frena el lanzamiento — esos proyectos salen con
un texto más corto y honesto en vez de uno largo con datos inventados.

**Actualización tras leer el HTML fuente del sitio actual (2026-09-16):** varios de estos dejaron
de ser "falta casi todo" — el sitio tiene texto que el Anexo A del legajo no había volcado. Se
marca ✅ lo que ya se puede escribir sin pedir nada nuevo (pendiente de trasladarlo a
`03-copy-completo.md`) y 🟢 lo que sigue faltando de verdad.

| # | Proyecto | Qué falta | Vertical |
|---|---|---|---|
| 16 🟢 | Permisos mineros (concesiones) | Detalle mineral y estado por concesión | Minería |
| 17 🟢 | Oro Zapucay | Ubicación, estado, una cifra de referencia (reserva, producción o superficie) | Minería |
| 18 🟢 | Piedra partida Pueblo Centenario | Ubicación específica, estado, cifras propias (ya hay foto) | Minería |
| 19 ✅ | Etanol Chaco paraguayo (Chovoreca) | Ya hay foto de portada; sigue faltando el estado actual del proyecto (evaluación / desarrollo / pausa) | Energía |
| 20 🟢 | Puerto Bahía Negra / Puerto Villeta | Capacidad de carga, calado, volumen operado | Puertos |
| 21 ✅ | El Terruño | **Resuelto en su mayoría** — el sitio trae superficie total, tamaño de lote y cantidad de terrenos a la venta por cada una de las 3 locaciones (Treinta y Tres, Tacuarembó, Melo). Falta solo confirmar si esas cifras siguen vigentes (cruza con ítem 9) y las fotos de las 3 galerías (ítem 14) | Bienes raíces |
| 22 🟢 | Shopping Fernando de la Mora | Superficie construida, nivel de ocupación, año de inauguración | Bienes raíces |
| 23 ✅ | Shopping San Nicolás | El sitio trae más contexto del que se relevó: genera +1.000 empleos directos e indirectos, incluye hotel y edificio de oficinas | Bienes raíces |
| 24 🟢 | Depósito fiscal | Sigue sin descripción — el sitio solo linkea 4 PDFs de una propuesta de 2013, sin texto | Bienes raíces |
| 25 ✅ | Lotes Uruguay | **Resuelto** — el sitio trae los 4 lotes con ubicación y superficie exacta (Montevideo Rural 43 Ha y 11 Ha, Ciudad de la Costa 2 Ha, Canelones Rural 21 Ha y 7 Ha). Falta el estado comercial (¿siguen disponibles?) | Bienes raíces |
| 26 ✅ | Pueblo de Mar (Jaureguiberry) | **Resuelto en su mayoría** — 20 ha, 180 m de frente de playa, 166 lotes en propiedad horizontal, solares promedio 500 m². Falta el estado de avance actual y las fotos de la galería (ítem 14) | Bienes raíces |
| 27 ✅ | Distrito Lambaré | Superficie exacta ya confirmada en el sitio (1 Ha 5.418 m² 5.603 cm²). Falta tipo de desarrollo y estado | Bienes raíces |
| 28 ✅ | Unidad industrial Cerro Largo | **Resuelto** — ubicación exacta, uso (recibo/secado de cereales y oleaginosos), capacidad de secado (170 TT estática, 510 TT/día) y de almacenaje (12.000 TT). No falta nada para escribir la ficha completa | Bienes raíces |
| 29 🟢 | Forestal (plantaciones Chaco) | Empresa operadora (hoy "a confirmar" vía Egon), estado por distrito | Forestal |

**Nota sobre agro:** no está en esta lista — ya está decidido que el cliente lo carga desde el
panel cuando tenga material propio, post-lanzamiento (Anexo B, ítem 13 del legajo).

---

## Resumen para copiar y pegar en el pedido al cliente

**Urgente (Fase 0/1, sin esto no arrancamos o no cerramos el Hito 1):**
1. Dónde está alojado el correo `@grupo-gen.com`
2. Qué información no debe seguir siendo pública (incluye confirmar si se puede publicar
   `M748-20_Resolucion_de_Otorgamiento.jpeg`)
3. Decisión sobre la vertical Siderúrgica (o confirmar que queda despublicada)

*(El logo ya se resolvió: se trabaja con el PNG recibido, se revectoriza internamente.)*

**Para completar el Hito 2 (copy y diseño) sin default:**
4. Logos individuales de Dialeca, Viagen, Lumiganor y Vía Confort
5. Listado de sociedades del holding
6. Identificación + autorización de los 7 logos de terceros (el archivo ya está)
7. Qué es "Marean Corporation" en la sección de Viagen
8. Confirmación de los sitios de referencia (Azeta/Vierci u otros)
9. Revisión de cifras y fechas vencidas
10. LinkedIn correcto
11. Dirección en Uruguay y jerarquía con Asunción
12. Nombres y cargos de la conducción (si se publican)
13. Formato de los informes técnicos (biomasa, Cerro Papagayo)
14. Fotos de las galerías embebidas de El Terruño (3) y Pueblo de Mar (1)
15. Qué pasa con `carbochaco.com`

**Para enriquecer fichas puntuales (no bloquea nada, se carga después desde el panel):**
16 a 29 — el detalle de cada proyecto de minería y bienes raíces, listado arriba en la sección C.
La mayoría de Bienes raíces (El Terruño, Lotes Uruguay, Pueblo de Mar, Distrito Lambaré, Unidad
industrial Cerro Largo) ya tiene texto real disponible — falta trasladarlo al copy, no pedirlo al
cliente.
