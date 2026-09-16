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
| 2 🔴 | **Qué documentos e información no deben seguir siendo públicos** (costos por hectárea, precios de venta proyectados, resoluciones, padrones, KMZ) | Decidir qué contenido se publica, se retira o se reserva | El equipo no puede cerrar la política de contenido de la Fase 0, y por precaución esa información **no se publica** hasta que el cliente decida — puede ser una pérdida de contenido que sí quería mostrar |
| 3 🔴 | **Decisión sobre la vertical Siderúrgica** (Arrabio Paraguay y Fábrica de hierros): empresa operadora, ubicación, capacidad, estado — o directamente despublicarla | Publicar o no la vertical completa en el lanzamiento | Ya está resuelto por default: **no se publica** en el lanzamiento (ver `03-copy-completo.md` §3 y §4). Se puede agregar después sin tocar código |

> **Cerrado — logo:** el cliente confirmó que no hay vector; se trabaja con el PNG recibido
> (3040×1540, fondo transparente) y el equipo lo revectoriza. Sale de esta lista, ver
> `05-lista-de-imagenes.md` §0.

---

## B. Importantes — condicionan copy o alcance ya escrito

| # | Insumo | Para qué sirve | Estado si no llega |
|---|---|---|---|
| 5 🟡 | **Listado completo de sociedades del holding** (razón social, país, año, vertical, sitio propio) | Ampliar `/empresas` más allá de las 4 fichas completas actuales (Dialeca, Viagen, Lumiganor, Vía Confort) | El sitio lanza igual con esas 4 fichas; el resto de las ~25 proyectos sale sin empresa asociada, que el modelo de datos ya permite |
| 6 🟡 | **Identificación de los 7 logos de "empresas con las que trabajamos"** + autorización de uso de cada uno | Publicarlos en modo `solo_logo` en `/empresas`, con o sin link a su sitio | Salen como logo simple sin link, hasta que se identifiquen |
| 7 🟡 | **2 o 3 sitios de referencia que le gusten al cliente** | Ya se usó Azeta y Vierci como referencia por decisión propia del equipo — confirmar si coinciden con el gusto del cliente o hay que ajustar | El diseño de alta fidelidad sigue con Azeta/Vierci como base |
| 8 🟡 | **Revisión de cifras y fechas del contenido actual**, una por una (hay proyecciones a 2018 y 2023, informes de 2013 y 2021) | Que ninguna cifra o fecha vencida llegue al sitio nuevo | Se publican solo las cifras que ya están confirmadas como vigentes en el copy actual; el resto queda fuera hasta su revisión |
| 9 🟡 | **URL del perfil de LinkedIn correcto** | Es el único canal social del sitio | El sitio lanza sin el link, se agrega después sin tocar código |
| 10 🟡 | **Confirmación de las dos direcciones a publicar y su jerarquía** (Uruguay + Asunción, Av. Primer Presidente 3508) | Completar la sección de Contacto | Se publica solo la dirección de Asunción, que ya está confirmada en el legajo |
| 11 🟡 | **Nombres y cargos de la conducción**, si se quieren publicar | Sumarlos a "Quiénes somos" | La sección sale sin mencionar personas, solo empresas — es lo que ya está redactado en `03-copy-completo.md` §1 |
| 12 🟡 | **Formato original de los informes técnicos** (biomasa y Cerro Papagayo están en HTML, no PDF) | Definir si se maquetan como fichas técnicas descargables o se migran tal cual | El documento descargable de Cerro Papagayo queda marcado "pendiente en formato original" hasta resolverlo |
| 13 🟡 | **Motivo de la salida de carbón vegetal y qué se hace con `carbochaco.com`** | Cerrar qué pasa con ese dominio y ese contenido (sale del sitio nuevo, ya decidido) | El dominio queda sin resolución de redirect o cierre — pendiente para la Fase 6 |

---

## C. Deseables — mejoran fichas puntuales, no bloquean nada

Esta sección es nueva respecto al Anexo B del legajo: son los faltantes que aparecieron proyecto
por proyecto al escribir el copy completo. Ninguno frena el lanzamiento — esos proyectos salen con
un texto más corto y honesto en vez de uno largo con datos inventados.

| # | Proyecto | Qué falta | Vertical |
|---|---|---|---|
| 14 🟢 | Permisos mineros (concesiones) | Detalle mineral y estado por concesión | Minería |
| 15 🟢 | Oro Zapucay | Ubicación, estado, una cifra de referencia (reserva, producción o superficie) | Minería |
| 16 🟢 | Piedra partida Pueblo Centenario | Ubicación específica, estado, cifras propias | Minería |
| 17 🟢 | Etanol Chaco paraguayo (Chovoreca) | Estado actual del proyecto (evaluación / desarrollo / pausa) | Energía |
| 18 🟢 | Puerto Bahía Negra / Puerto Villeta | Capacidad de carga, calado, volumen operado | Puertos |
| 19 🟢 | El Terruño | Superficie total, lotes por locación (Treinta y Tres / Tacuarembó / Melo), estado comercial | Bienes raíces |
| 20 🟢 | Shopping Fernando de la Mora | Superficie construida, nivel de ocupación, año de inauguración | Bienes raíces |
| 21 🟢 | Shopping San Nicolás | Ubicación, superficie, cantidad de locales — prácticamente todo | Bienes raíces |
| 22 🟢 | Depósito fiscal | Ubicación, capacidad, régimen aduanero | Bienes raíces |
| 23 🟢 | Lotes Uruguay | Localizaciones específicas, cantidad de lotes, estado comercial | Bienes raíces |
| 24 🟢 | Pueblo de Mar (Jaureguiberry) | Cantidad de lotes, amenities, estado de avance (o decidir si solo se enlaza el sitio propio) | Bienes raíces |
| 25 🟢 | Distrito Lambaré | Tipo de desarrollo, superficie, estado | Bienes raíces |
| 26 🟢 | Unidad industrial Cerro Largo | Uso o rubro, superficie cubierta, estado | Bienes raíces |
| 27 🟢 | Forestal (plantaciones Chaco) | Empresa operadora (hoy "a confirmar" vía Egon), estado por distrito | Forestal |

**Nota sobre agro:** no está en esta lista — ya está decidido que el cliente lo carga desde el
panel cuando tenga material propio, post-lanzamiento (Anexo B, ítem 13 del legajo).

---

## Resumen para copiar y pegar en el pedido al cliente

**Urgente (Fase 0/1, sin esto no arrancamos o no cerramos el Hito 1):**
1. Dónde está alojado el correo `@grupo-gen.com`
2. Qué información no debe seguir siendo pública
3. Decisión sobre la vertical Siderúrgica (o confirmar que queda despublicada)

*(El logo ya se resolvió: se trabaja con el PNG recibido, se revectoriza internamente.)*

**Para completar el Hito 2 (copy y diseño) sin default:**
5. Listado de sociedades del holding
6. Identificación + autorización de los 7 logos de terceros
7. Confirmación de los sitios de referencia (Azeta/Vierci u otros)
8. Revisión de cifras y fechas vencidas
9. LinkedIn correcto
10. Dirección en Uruguay y jerarquía con Asunción
11. Nombres y cargos de la conducción (si se publican)
12. Formato de los informes técnicos (biomasa, Cerro Papagayo)
13. Qué pasa con `carbochaco.com`

**Para enriquecer fichas puntuales (no bloquea nada, se carga después desde el panel):**
14 a 27 — el detalle de cada proyecto de minería y bienes raíces que hoy solo tiene fotos, listado
arriba en la sección C.
