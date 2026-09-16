# Product

<!-- impeccable:product-schema 1 -->

## Platform

web

## Stack

Producción: Laravel + Livewire + Tailwind v4 sobre Plesk, siguiendo el patrón institucional ya en
producción de webparaguay (repo IPG, aplicado también en "Dante"). Se construye en la Fase 3-4 del
plan (`plan-web-institucional-grupo-gen.md`), heredando el panel de administración de Dante
(Filament) y agregando las entidades nuevas del holding.

**Para el trabajo de diseño actual (Fase 2.2):** HTML/CSS estático de alta fidelidad, mismo formato
que los wireframes de contenido ya aprobados en `docs/ux-flows/wireframes/` (decisión confirmada
con el usuario). Sirve de referencia visual exacta para maquetar después en Blade/Livewire/Tailwind
v4, sin mezclar la aprobación visual con decisiones de implementación que todavía no existen (no
hay modelos ni rutas hasta la Fase 3).

## Users

Público exclusivamente corporativo, sin intención de captación masiva de leads:

1. **Inversor** que evalúa la escala real del grupo — necesita entender en segundos que está frente
   a un holding con activos medibles, no una sola empresa.
2. **Contraparte corporativa** que busca una empresa específica del grupo (Dialeca, Viagen,
   Lumiganor, Vía Confort) para evaluar una negociación puntual.
3. **Periodista o analista** que busca datos verificables (cifras, ubicación, documentos técnicos)
   sobre un proyecto concreto.
4. **Proveedor** que quiere contactar al grupo — por decisión del cliente, el único canal es un
   formulario a `info@grupo-gen.com`, sin teléfono ni WhatsApp publicados (postura de contacto
   filtrado, no de conversión).

## Product Purpose

Reemplazar el sitio HTML estático actual (`grupo-gen.com`, una sola página larga con nueve
verticales apiladas por anclas, sin jerarquía, con cifras enterradas en párrafos y contenido con
fechas vencidas de 2013 a 2023) por una web institucional bilingüe (ES/EN) con panel de
administración propio, que presente a Grupo GEN como lo que es: **un holding**, con la casa matriz
arriba, las empresas participadas como entidades con nombre propio, y los proyectos colgando de
ellas — no una sola compañía con nueve áreas de negocio.

Éxito = que un inversor, en los primeros diez segundos, entienda que está frente a un grupo con
activos reales, medibles y repartidos en tres países, demostrado con números y no con adjetivos.

## Positioning

**La cifra es el elemento gráfico.** El grupo no tiene banco de fotos profesional ni manual de
marca previo, pero tiene datos duros extraordinarios y verificables: 190.000 ha forestales, más de
5.800 ha de propiedad minera con una reserva de 50 millones de toneladas de magnetita, una planta
de biomasa de 11,4 MW, dos puertos propios sobre la Hidrovía, seis remolcadores. En vez de tapar la
carencia de fotografía con banco de imágenes genérico —que en el segmento corporativo se nota y
resta credibilidad—, el sistema visual se construye sobre tipografía de gran escala, numerales
destacados, mapas de presencia territorial y una paleta sobria derivada del logotipo. Es la
decisión de diseño que ya está tomada en el legajo del proyecto, no una opción a evaluar.

Un competidor sin esos activos reales no puede copiar esta posición honestamente — no es una
promesa de marca, es una descripción de lo que el holding ya tiene.

## Operating Context

- Sitio bilingüe con ruteo por prefijo (`/` y `/en/`), no por cookie de sesión — necesita
  `hreflang` real, a diferencia del sitio actual que resuelve el idioma con sesión.
- El contenido se carga desde un panel de administración (Filament, heredado de "Dante"), no se
  edita en código. El diseño tiene que sostenerse con contenido variable en volumen: una empresa
  puede tener ficha completa o solo un logo (`tipo_presentacion`), un proyecto puede no tener
  empresa asociada, una vertical puede no tener cifras.
- Ecosistema de sitios satélite existente: `viagen.com.py`, `carbochaco.com`, `viaconfort.com.uy`,
  `jardinesdeacuario.com`, `pueblodemar.uy`, `terruño.com` — el sitio institucional no reemplaza a
  estos, puede enlazarlos.
- Regla de visibilidad: una sección sin contenido publicado (ej. Novedades) no debe ser navegable
  ni aparecer en el menú — nunca un estado vacío tipo "próximamente".
- Vertical Siderúrgica y Agro no se publican en el lanzamiento (falta información del cliente,
  decisión ya tomada — ver `docs/04-lista-de-insumos-pendientes.md`).

## Capabilities and Constraints

- **Logo:** solo existe en PNG (fondo transparente, 3040×1540). No hay vector — se revectoriza
  como parte de este trabajo de diseño. Color de marca confirmado por el CSS del sitio actual:
  `#93c300` (verde). Gris oscuro de texto usado en el sitio actual: `#353535`. El resto de los
  colores del sitio actual pertenecen a un theme de Bootstrap comprado, no son de marca.
- **Banco de fotos:** 72 imágenes reales extraídas del sitio actual en
  `docs/assets-sitio-actual/` (mapeadas por proyecto en su `INDEX.md`), de resolución y tratamiento
  dispares — exactamente el problema que motiva la decisión de "la cifra es el elemento gráfico".
  Van con tratamiento unificado (filtro, recorte, tono), no se reemplazan una por una salvo pedido
  puntual al cliente.
- **Copy real y completo** ya escrito en `docs/03-copy-completo.md`, con presupuesto de palabras
  por campo definido en `docs/01-mapa-del-sitio-y-modelo-de-contenido.md` §4. El diseño se maqueta
  con este texto, nunca con lorem ipsum — varios registros son deliberadamente cortos porque el
  material de origen no da para más (marcado `PENDIENTE`, no se rellena con relleno visual).
- **Sin teléfono ni WhatsApp** en Contacto — decisión del cliente, el diseño no debe pelear esa
  postura con jerarquía visual que sugiera un canal de contacto directo.
- **8 plantillas de contenido** (más novedades y ficha de novedad): home, quiénes somos, índice de
  empresas, ficha de empresa, índice de inversiones, vertical, ficha de proyecto, contacto.
  Wireframes de contenido ya aprobados en `docs/ux-flows/wireframes/` — el diseño de alta fidelidad
  respeta esa estructura, no la reabre.
- **Responsive 360px a 1920px** (constraint de la Fase 4 del plan, aplica igual al diseño previo).

## Brand Commitments

- Nombre: **Grupo GEN** — wordmark "GEN" en el logo, con línea secundaria "Desarrollo & Inversión".
- Logo entregado por el cliente en PNG, sin vector — ver Capabilities and Constraints.
- Verde `#93c300` como color de marca confirmado (uso real en el sitio actual, no una suposición
  sobre la imagen del logo).
- Español regional neutro en el copy (no paraguayo ni rioplatense marcado), ya aplicado en
  `docs/03-copy-completo.md`.
- Referencias visuales usadas para el diseño de wireframes de contenido: `azeta.com.py` y
  `grupovierci.com` (capturas en `docs/referencias/`) — decisión propia del equipo, **pendiente de
  confirmación explícita del cliente** (`docs/04-lista-de-insumos-pendientes.md`, ítem 8).

## Evidence on Hand

- `docs/03-copy-completo.md` — copy completo y real de todas las plantillas y registros.
- `docs/assets-sitio-actual/` — 72 fotos reales extraídas del sitio actual, mapeadas por proyecto.
- `docs/ux-flows/wireframes/` — wireframes de contenido clickeables de las 14 pantallas, aprobados.
- `legajo-web-institucional-grupo-gen.md` y `plan-web-institucional-grupo-gen.md` — alcance, modelo
  de datos, riesgos y plan de fases completo del proyecto.
- **Ausencias explícitas que no se deben inventar:** logo vectorial (no existe), fotos
  institucionales del grupo (oficinas, equipo — no hay ninguna), manual de marca previo (no existe,
  este trabajo lo produce por primera vez), logos propios de las 4 empresas con ficha completa
  (Dialeca, Viagen, Lumiganor, Vía Confort — no existen en ningún lado, ver
  `docs/05-lista-de-imagenes.md`).

## Product Principles

1. **La cifra es el elemento gráfico, no la fotografía.** Frente a un banco de fotos pobre, la
   escala tipográfica y los numerales destacados cargan el peso visual que en otro sitio
   corporativo llevaría la fotografía de archivo.
2. **El contenido manda, el diseño no infla lo que no hay.** Un registro con copy corto (por falta
   de insumo del cliente, no por decisión de diseño) se ve corto y bien resuelto, no se disimula
   con relleno visual ni con fotografía genérica de stock.
3. **Un holding se ve como un holding.** Jerarquía visual clara entre casa matriz, empresa
   participada y proyecto — nunca una sola marca homogénea tapando la estructura societaria real.
4. **Contacto filtrado, no conversión agresiva.** Sin teléfono ni WhatsApp; el formulario es
   deliberadamente el único canal, y el diseño no debe insinuar urgencia de contacto que el cliente
   no quiere transmitir.
5. **Bilingüe de verdad, no traducción cosmética.** ES/EN con rutas propias y `hreflang`, tratado
   como requisito estructural del diseño (longitud de texto variable, no solo un selector visual).

## Accessibility & Inclusion

AA con navegación por teclado — constraint ya confirmado en el plan del proyecto (Fase 9, QA).
