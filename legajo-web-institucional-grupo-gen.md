# Legajo Técnico — Web Institucional Grupo GEN

> Formato estándar de webparaguay. Elaborado a partir del brief del cliente y del relevamiento
> completo del sitio actual (`grupo-gen.com`, `inversiones.html`, `english.html`).
> Las secciones marcadas **(a confirmar)** requieren respuesta del cliente antes de cerrar precio.

---

## 0. Ficha del proyecto

| Campo | Valor |
|---|---|
| **Nombre** | Web Institucional Grupo GEN — reemplazo del sitio estático actual |
| **Cliente** | GRUPO GEN DESARROLLO & INVERSIÓN (`grupo-gen.com`) — holding de inversiones, origen uruguayo |
| **Estado** | Fase 0 — descubrimiento (relevamiento del sitio actual completado) |
| **Responsable** | Leonardo Chi (webparaguay) |
| **Equipo** | 2 desarrolladores senior + 1 junior avanzado |
| **Aprobador del cliente** | Marcel Saps — +598 99 97 02 12 — sapsmarcel@gmail.com |
| **Administrador del dominio** | Alan Segovia — +598 98 284 609 — afsg23@gmail.com (acceso a DNS confirmado) |
| **Versión del legajo** | 1.0 |
| **Fecha** | Septiembre 2026 |
| **Tipo** | Proyecto de cliente (no producto interno) |

---

## 1. Resumen ejecutivo

Grupo GEN **no es una empresa: es un holding de empresas** de origen uruguayo, con operaciones
reales y de escala en Uruguay, Paraguay y Argentina. Opera a través de sociedades participadas —
Dialeca S.A. en minería y construcción, Viagen S.A. en transporte fluvial, Lumiganor S.A. en
energía, Vía Confort en electrodomésticos, entre otras — que suman 190.000 hectáreas forestales en
el Chaco paraguayo, más de 5.800 hectáreas de propiedad minera con una mina de hierro de 50 millones
de toneladas probadas de magnetita, una planta de biomasa de 11,4 MW, dos puertos sobre la Hidrovía,
seis remolcadores, seis fraccionamientos inmobiliarios y un shopping en Fernando de la Mora.

**Esa distinción es la decisión estructural del proyecto.** El sitio actual presenta al grupo como
si fuera una sola compañía con nueve áreas, y por eso las empresas que hacen el trabajo quedan
mencionadas al pasar dentro de párrafos. Un holding se presenta de otra forma: la casa matriz
arriba, las empresas participadas como entidades con nombre propio, y los proyectos colgando de
ellas. El modelo de datos y la navegación del sitio nuevo se construyen sobre esa jerarquía.

**Nada de eso se percibe entrando al sitio actual.** El sitio es un HTML estático de una sola
página larga donde nueve verticales de negocio conviven apiladas con anclas, sin jerarquía visual,
sin un solo dato destacado, con fotografías de resoluciones y épocas dispares, y con informes
técnicos de geología pegados en crudo. La información más valiosa que tiene el grupo — las cifras —
está enterrada en párrafos y tablas sin formato. Un inversor o una contraparte corporativa que
llega ahí no sale con la impresión de estar frente a un holding con activos de esta magnitud.

Este proyecto reemplaza ese sitio por una **web institucional corporativa nueva en Laravel**, con
panel de administración propio y **bilingüe español/inglés**, construida sobre el patrón que
webparaguay ya tiene en producción (repo IPG) y que se está aplicando en Dante. El contenido actual
se conserva en su totalidad pero **se reorganiza en una arquitectura de información pensada desde
la tarea real del visitante** — entender qué hace el grupo, en qué sectores, con qué escala y a
quién contactar — en lugar de heredar la lista de anclas del sitio viejo.

**Por qué ahora:** el grupo abrió dirección comercial en Asunción (Avenida Primer Presidente 3508),
cosa que el sitio ni menciona, y el brief pone el foco en **agro** como principal línea — un sector
que hoy prácticamente no figura en la web. El sitio actual no acompaña la etapa en la que está la
empresa. Además arrastra contenido con fechas de 2013, 2018, 2021 y 2023 redactado en futuro
("se estima el arribo de los equipos... para noviembre de 2023"), lo que a un lector atento le
transmite que el grupo está detenido. Para una compañía de inversiones, **un sitio desactualizado
no es un problema estético: es un problema de credibilidad**.

---

## 2. Problema y oportunidad

### El dolor concreto

- **La escala no se comunica.** El activo diferencial de Grupo GEN son las cifras, y hoy están
  escritas como texto corrido. 190.000 hectáreas, 50 millones de toneladas probadas, 11,4 MW,
  6 remolcadores: ninguno de esos números tiene tratamiento visual.
- **Arquitectura de información inexistente.** Nueve verticales y más de veinticinco proyectos
  individuales comprimidos en una única página con anclas. No hay forma de linkear un proyecto,
  ni de que Google indexe uno por separado.
- **Contenido congelado en el tiempo.** Proyecciones a 2018, arribos previstos para 2023, informes
  de 2013 y 2021. Nada indica actividad reciente.
- **Cero autoadministración.** HTML estático. Cualquier cambio de texto o de foto depende de un
  proveedor externo.
- **Bilingüe a medias.** Existe `english.html`, pero es una traducción parcial y desincronizada del
  sitio en español, sin estructura propia ni hreflang.
- **Confusión de marca.** Hay al menos otras tres entidades llamadas "Grupo GEN" con presencia web
  (un grupo inmobiliario boliviano, una central de supermercados uruguaya y otra). Buscar la marca
  no lleva de forma confiable a este grupo.
- **Sin rastro del brazo paraguayo.** La dirección de Asunción, los puertos de Villeta y Bahía
  Negra y la operación de Viagen no tienen la visibilidad que su peso justifica.
- **Higiene técnica.** Enlaces internos en `http://` mezclados con `https://`, rutas rotas del tipo
  `/grupogen/img/...`, y enlaces salientes a un dominio con eñe (`www.terruño.com`) que difícilmente
  resuelva hoy.

### Quién paga y por qué

Paga el holding. La justificación no es captación masiva de leads: **es credibilidad institucional**.
El público es corporativo — inversores, socios estratégicos, contrapartes, compradores institucionales,
organismos y proveedores de escala. El sitio es la pieza que respalda una conversación que empieza
en otro lado. Consistente con eso, el cliente decidió **no publicar teléfono ni WhatsApp**: el único
canal es un formulario que llega a `info@grupo-gen.com`. Es una postura de contacto filtrado, y el
diseño tiene que respetarla en lugar de pelearla.

### Oportunidad para webparaguay

1. **Tercera instancia del patrón institucional** (IPG → Dante → GEN). Cada aplicación baja el costo
   marginal de la siguiente, y esta suma la capa bilingüe, que después queda disponible para todos.
2. **Cuenta con ecosistema.** El grupo tiene o referencia al menos seis sitios satélite:
   `viagen.com.py`, `carbochaco.com`, `viaconfort.com.uy`, `jardinesdeacuario.com`, `pueblodemar.uy`
   y `terruño.com`. Varios están en estados dudosos. Ganar el institucional habilita la conversación
   por el resto del ecosistema, y por hosting consolidado.
3. **Cliente regional con presencia paraguaya creciente.** El argumento de servidores locales +
   atención cercana pesa distinto en un grupo que acaba de abrir oficina en Asunción.
4. **Patrón de web corporativa multi-vertical**, reutilizable para cualquier holding, constructora o
   grupo empresarial — segmento de ticket alto y con necesidad recurrente.

---

## 3. Visión y propuesta de valor

**Un sitio que, en los primeros diez segundos, le hace entender a un inversor que está frente a un
grupo con activos reales, medibles y repartidos en tres países — y que se lo demuestra con números,
no con adjetivos.**

La decisión de diseño que ordena todo el proyecto: **la cifra es el elemento gráfico**. El grupo no
tiene banco de fotos ni manual de marca, pero tiene datos duros extraordinarios. En vez de tapar
esa carencia con fotografía de archivo genérica — que en el segmento corporativo se nota y resta —
el sistema visual se construye sobre tipografía de gran escala, numerales destacados, mapas de
presencia territorial y una paleta sobria derivada del logotipo. Es el mismo criterio que se aplicó
en Tres Sesenta cuando no había fotografía, llevado a escala corporativa.

Apoyo en los diferenciadores de webparaguay:

| Diferenciador | Cómo se aprovecha |
|---|---|
| **Servidores locales en Paraguay** | El grupo tiene operación y oficina en Paraguay y público regional. Latencia baja en PY/UY/AR y datos en la región. Alternativa evaluable: servidor con CDN si el tráfico internacional lo amerita |
| **Atención cercana** | Un holding que publica cifras necesita poder corregir un número el mismo día. Acuerdo de mantenimiento con respuesta local |
| **IA en el desarrollo** | El stack (impeccable, ux-flow-designer, emil-design-eng, strix, playwright) permite entregar veinticinco fichas de proyecto en dos idiomas con calidad de agencia grande, con un equipo de tres. Es lo que hace rentable el proyecto |
| **Stack propio y probado** | Laravel sobre Plesk, el patrón institucional ya en producción. Cero curva de aprendizaje |

---

## 4. Alcance por etapas (columna vertebral)

### MVP — Sitio institucional bilingüe en producción (fases 0 a 10)

**Entra:**

- Inventario y auditoría del contenido actual (ya iniciado — ver Anexo A)
- Arquitectura de información nueva, mapa del sitio y wireframes de cada plantilla
- **Copywriting breve en español**, con presupuesto de palabras por plantilla. El contenido técnico
  extenso no se borra: se baja a documento descargable (ver "Política de contenido" en §5)
- **Versión en inglés completa y sincronizada**, con `hreflang` y estructura propia (`/en/`)
- Sistema de diseño derivado del logotipo (mini manual de marca, ya que el cliente no tiene uno) +
  diseño de alta fidelidad de cada plantilla
- **El contenido de lanzamiento es el que hoy existe en la web**, reescrito y reorganizado. No se
  crea contenido de verticales nuevas: el cliente las agrega desde el panel cuando tenga el material
- Backend Laravel con panel de administración propio: **empresas del holding**, unidades de negocio,
  proyectos, cifras destacadas, galerías, biblioteca de documentos, noticias, páginas, menús, medios,
  configuración, formulario, usuarios y roles, redirecciones, SEO por página, auditoría — **todo con
  campos traducibles ES/EN**
- Frontend Blade + Livewire, responsivo, con motion cuidado (contadores, revelados, transiciones)
- Migración completa del contenido, imágenes, PDFs, KMZ y videos del sitio actual
- Mapa interactivo de presencia territorial (UY / PY / AR)
- SEO técnico + redirecciones 301 + schema.org `Organization` + sitemap bilingüe
- Integraciones: GA4/GTM, captcha, banner de cookies
- Rendimiento con Core Web Vitals en verde
- Endurecimiento de seguridad + pentest con strix + respaldos automáticos probados
- QA: suite Pest + E2E Playwright + accesibilidad AA
- Despliegue en Plesk, cutover sin tocar el correo, manual del cliente y capacitación

**NO entra en el MVP:**

- Área privada de inversores o reportes financieros autenticados
- Portal de proveedores o licitaciones
- Bolsa de trabajo / postulación en línea
- Integración con los sitios satélite (Viagen, CarboChaco, Vía Confort, etc.) más allá del enlace
- Rediseño de cualquiera de esos sitios satélite
- Un tercer idioma (portugués). Si el cliente lo pide, es cambio de alcance
- Newsletter con gestión de suscriptores
- Fotografía o video de producción propia (**el cliente no tiene material y no está presupuestado**)

### v1 — Sala de inversores

Área autenticada con reportes, presentaciones institucionales, fichas técnicas confidenciales y
control de acceso por invitación. Es la evolución natural para un holding que hoy publica en abierto
material que probablemente no debería ser público (ver R3). El modelo de datos del MVP se diseña
para no cerrarle la puerta.

### v2 — Consolidación del ecosistema digital

Unificación de los sitios satélite bajo una arquitectura y un hosting común, con identidad
compartida. Legajo propio.

### Producto derivado (interno de webparaguay)

Extracción del patrón **"web corporativa multi-vertical bilingüe"**: unidades de negocio, fichas de
proyecto, cifras destacadas, biblioteca de documentos y capa de traducción. **Este es el retorno
estratégico del proyecto** y se documenta al cerrar la Fase 10.

---

## 5. Especificación técnica

### Arquitectura

Monolito Laravel clásico, renderizado en servidor con Blade e islas de interactividad con Livewire.
Sin SPA ni API separada — para un sitio institucional sería complejidad sin retorno y perjudicaría
el SEO, que acá es doblemente importante por la ambigüedad de marca.

```
Navegador
   │
   ├── Sitio público  /  y  /en/   (Blade + Livewire + Alpine + Tailwind v4)
   │      ├── resolución de locale por prefijo de ruta
   │      └── caché de respuesta por locale, invalidada al publicar
   │
   └── Panel admin (/[ruta-no-adivinable])
          └── Fortify + 2FA + roles + auditoría + editor ES/EN lado a lado
                 │
          Laravel (PHP 8.3+)
                 │
          ┌──────┴──────┐
       MySQL 8      Almacenamiento local (medios, PDFs, KMZ, video)
```

### Arquitectura de información propuesta

| Ruta | Contenido |
|---|---|
| `/` | Home: posicionamiento, cifras del grupo, las verticales, presencia territorial, responsabilidad social, contacto |
| `/grupo` | Quiénes somos, trayectoria, conducción, valores |
| `/empresas` | **Las sociedades del holding**, con su vertical, su rol y su sitio propio si lo tiene |
| `/empresas/{empresa}` | Ficha de empresa: qué hace, desde cuándo, dónde opera, proyectos asociados |
| `/inversiones` | Índice de las nueve verticales, con jerarquía visual y acceso directo |
| `/inversiones/{vertical}` | Una página por vertical |
| `/inversiones/{vertical}/{proyecto}` | Ficha de proyecto individual — **la unidad de contenido del sitio** |
| `/presencia` | Mapa de operaciones en Uruguay, Paraguay y Argentina |
| `/sostenibilidad` | Responsabilidad social y ambiental, con el material ambiental existente |
| `/novedades` | Noticias — **la pieza que resuelve el problema de "sitio congelado"** |
| `/contacto` | Formulario a `info@grupo-gen.com` + ambas direcciones + LinkedIn |
| `/en/...` | Espejo completo en inglés |

### Política de contenido — la página es corta, el documento es profundo

El cliente identificó que el contenido actual es demasiado extenso, y tiene razón: hay informes de
once secciones con datos de fabricante de turbina y composición mineralógica pegados en el cuerpo de
la página. Nadie los lee ahí.

**La regla que ordena todo el copywriting: nada se borra, se relocaliza.**

| Dónde va | Qué contiene |
|---|---|
| **La página** | Lo que alguien necesita para entender el activo en menos de un minuto: qué es, dónde está, en qué estado, y tres a cinco cifras |
| **El documento descargable** | El informe técnico completo, la geología, los planos, las resoluciones, los datos de planta |

Para un inversor, un informe técnico descargable es **más creíble** que un muro de texto: demuestra
que el dato existe y está documentado. Pasar el contenido pesado a la biblioteca de documentos no
resta profundidad, la ordena.

**Presupuesto de palabras por plantilla** (español; el inglés respeta el mismo techo):

| Plantilla | Prosa | Complemento |
|---|---|---|
| Home | ~150 palabras en total | Cifras del grupo, verticales, mapa |
| Quiénes somos | 200–250 palabras | Hitos, presencia |
| Vertical | 60–100 palabras de entrada | Listado de proyectos + cifras |
| **Ficha de proyecto** | **120–200 palabras** | 3–5 cifras destacadas, galería, documentos, mapa |
| Ficha de empresa | 60–80 palabras | Datos duros + enlace a su sitio |
| Novedad | Libre | — |

**Regla de no pérdida:** ninguna cifra del sitio actual se elimina en el resumen. Los párrafos se
acortan; los números se conservan y, en muchos casos, ganan protagonismo al salir del texto corrido.

**Consecuencia de diseño:** con la prosa acotada, el peso visual tiene que venir de otro lado —
numerales grandes, mapas, tratamiento tipográfico y espacio. Refuerza la dirección ya definida en §3
en lugar de contradecirla. Una ficha de 150 palabras mal diseñada queda vacía; bien diseñada queda
contundente.

**Freno a la regresión:** el panel muestra un contador de palabras con el rango sugerido en cada
campo largo. El contenido actual se volvió largo porque nadie tenía una referencia mientras
escribía. Es un detalle chico de implementación y es lo que evita que en dos años el sitio nuevo
tenga el mismo problema que el viejo.

### Las verticales (criterio de alcance)

**Las verticales no son estructura del sitio: son contenido.** Cada área es un registro que el
cliente crea, ordena, publica o despublica desde el panel, con su plantilla completa. El sitio
arranca con las que ya existen en la web actual y crece sin límite ni intervención de webparaguay.

Al lanzamiento, con un solo cambio respecto del sitio actual: **sale carbón vegetal, entra siderúrgica**.

| # | Vertical | Empresa asociada | Origen del contenido |
|---|---|---|---|
| 1 | Sector forestal | Egon (a confirmar) | Existente — incluye las menciones a agricultura, caña de azúcar, ganadería y feedlot |
| 2 | Energía | Lumiganor S.A. | Existente, muy completo |
| 3 | Minería | Dialeca S.A. | Existente, muy completo |
| 4 | **Siderúrgica** | A confirmar | Se extrae de lo que hoy está dentro de minería: "Arrabio Paraguay" y "Fábrica de hierros". **Es poco material** — ver R5 |
| 5 | Puertos | — | Existente, solo fotos |
| 6 | Transporte fluvial | Viagen S.A. | Existente |
| 7 | Bienes raíces | Varias | Existente, el más voluminoso |
| 8 | Construcción | Dialeca S.A. | Existente |
| 9 | Electrodomésticos | Vía Confort | Existente |
| — | ~~Carbón vegetal~~ | ~~CarboChaco~~ | **Sale del sitio** |

**Agro queda para después.** El brief lo mencionaba como rubro principal, pero no hay material
propio: hoy aparece solo de costado dentro de forestal. Se publica cuando el cliente cargue los
datos, desde el panel, sin tocar código ni volver a contratarnos.

> Esta decisión tiene una consecuencia de ingeniería que hay que respetar: **la plantilla de
> vertical y la de ficha de proyecto tienen que ser genuinamente genéricas**. Nada de maquetar
> "la página de minería" a mano porque es la que tiene más contenido. Si una vertical necesita
> tratamiento especial, es un bloque configurable, no una vista propia. Y la capacitación al
> cliente debe incluir explícitamente **"cómo crear una vertical nueva de cero"** como ejercicio
> práctico, no como párrafo del manual.

> **La siderúrgica es la pieza que cierra el relato del grupo.** Mina de hierro propia en Rivera →
> beneficiamiento a Fe > 65 % → arrabio en Paraguay → puertos propios y flota propia sobre la
> Hidrovía para sacarlo. Eso es integración vertical real, y hoy el sitio no la cuenta en ningún
> lado porque el arrabio está escondido como una subsección de minería. Sacarla a vertical propia y
> narrar la cadena completa es, probablemente, el contenido de mayor impacto de todo el sitio.

### Modelo de datos — la jerarquía del holding

```
Holding (Grupo GEN)
   │
   ├── Empresa (Dialeca S.A., Viagen S.A., Lumiganor S.A., Vía Confort, Egon…)
   │      ├── vertical a la que pertenece  (una empresa puede tocar más de una:
   │      │   Dialeca aparece en minería y en construcción)
   │      └── Proyecto (Cerro Papagayo, Puerto Villeta, Jardines de Acuario…)
   │             ├── Cifras destacadas
   │             ├── Galería
   │             └── Documentos
   │
   └── Vertical  ── vista transversal, agrupa proyectos de distintas empresas
```

La relación empresa ↔ vertical es de muchos a muchos. Esto no es rebuscamiento: Dialeca hoy ya
aparece en dos verticales, y si mañana el grupo incorpora una sociedad nueva, entra como un registro
más sin tocar código.

**Ficha de proyecto — plantilla estándar** (se reutiliza en los ~25 proyectos):
encabezado con nombre, vertical y ubicación · estado (en operación / en desarrollo / en exploración) ·
bloque de cifras clave · descripción · galería · documentos descargables · mapa · proyectos relacionados.

> Esta plantilla es la decisión técnica que hace viable el proyecto. Convierte veinticinco páginas
> distintas en veinticinco registros de la misma tabla, y le da al cliente la capacidad de agregar
> el proyecto veintiséis sin llamarnos.

### Componentes del panel

| Componente | Descripción |
|---|---|
| **Empresas** | Las sociedades del holding: nombre, razón social, rol, país, año, sitio propio, verticales asociadas |
| Unidades de negocio | Las verticales: nombre, orden, resumen, imagen, color de acento |
| Proyectos | Ficha completa, con estado, ubicación geográfica, empresa y vertical asociadas |
| Cifras destacadas | Valor, unidad, etiqueta y contexto. Reutilizables en home, vertical y ficha |
| Galerías | Agrupadas por proyecto, con alt text obligatorio |
| Documentos | Biblioteca de PDFs, KMZ y presentaciones, con **control de visibilidad pública/privada**. Absorbe todo el contenido técnico que sale de las páginas |
| Noticias | Con fecha, categoría y destacado |
| Páginas | Jerárquicas, con constructor de bloques |
| Medios | Biblioteca central con conversiones automáticas |
| Menús | Arrastrar y soltar, por idioma |
| SEO | Por página y por idioma: título, descripción, OG, canonical, hreflang |
| Formulario | Envíos almacenados + notificación a `info@grupo-gen.com` + exportación CSV |
| Traducción | Editor ES/EN lado a lado, con indicador de contenido sin traducir |
| Usuarios | Roles admin/editor, 2FA obligatorio |
| Auditoría | Quién cambió qué y cuándo |

### Integraciones

| Integración | Implementación |
|---|---|
| Google Analytics 4 | Vía GTM, ID configurable desde el panel, bloqueado hasta consentimiento |
| Captcha | Cloudflare Turnstile |
| Correo saliente | SMTP. **Verificar en Fase 0 dónde está alojado el correo de `grupo-gen.com`** |
| Mapas | Solución liviana (mapa vectorial propio o embed diferido) — no cargar Google Maps en la home |
| Search Console / Bing | Verificación por metaetiqueta, sitemap bilingüe |
| LinkedIn | Enlace al perfil corporativo **(a confirmar cuál es — ver R6)** |
| Respaldos | `spatie/laravel-backup` a almacenamiento externo |

> **Meta Pixel no se incluye** salvo pedido expreso: el público es corporativo y el cliente no
> declaró estrategia de pauta. Se deja el hueco listo en el panel.

### Requerimientos no funcionales

| Requerimiento | Objetivo |
|---|---|
| Rendimiento | LCP < 2.5 s, INP < 200 ms, CLS < 0.1, Lighthouse móvil ≥ 90 |
| Accesibilidad | WCAG 2.1 nivel AA |
| Seguridad | Cero hallazgos Críticos/Altos de strix antes de producción |
| Disponibilidad | 99.5 % mensual |
| Respaldo | Diario, retención 30 días, restauración probada |
| Navegadores | Últimas 2 versiones de Chrome, Firefox, Safari, Edge + iOS/Android |
| Idiomas | Español (regional neutro, no paraguayo — el grupo es uruguayo con público internacional) e inglés |

---

## 6. Modelo de negocio y monetización

Proyecto de cliente, precio cerrado. Dos componentes:

**a) Desarrollo (pago único, por etapas)**

Estructura de pago sugerida: 40 % al inicio, 30 % al aprobar el diseño y el copy (cierre de Fase 2),
30 % contra puesta en producción.

**b) Recurrente mensual**

- **Hosting** en servidor Plesk de webparaguay
- **Mantenimiento**: actualizaciones, monitoreo, respaldos verificados, bolsa de horas para
  actualización de cifras y publicación de novedades

> **Observación comercial.** Este cliente tiene un patrón claro: dejó que su sitio se congelara
> durante años porque no tenía cómo actualizarlo. El panel resuelve la capacidad, pero **la bolsa
> de horas de mantenimiento resuelve el hábito**. Vender el recurrente junto con el desarrollo no es
> un agregado, es lo que evita que en 2029 el sitio nuevo esté tan desactualizado como el actual.
> Y para un holding con oficina nueva en Asunción, el argumento se sostiene solo.

**Retorno estratégico (interno):** el patrón de web corporativa multi-vertical bilingüe, más la
puerta abierta al ecosistema de sitios satélite del grupo.

**(A confirmar: cifras de cotización, una vez cerrado el alcance bilingüe y el volumen definitivo
de fichas de proyecto.)**

---

## 7. Esfuerzo y recursos por etapa

| Fase | Descripción | Horas | Rol principal |
|---|---|---|---|
| 0 | Descubrimiento e inventario (parcialmente hecho) | 10–14 | Senior |
| 1 | UX y arquitectura de información | 18–24 | Senior + UX |
| 2 | Sistema de marca y copywriting ES (breve) | 20–28 | Senior + diseño |
| 2b | Versión en inglés y curaduría | 8–12 | Senior |
| 3 | Backend, panel admin y capa multiidioma | 44–58 | Senior + junior |
| 4 | Frontend | 34–46 | Senior + junior |
| 5 | Carga de contenido, imágenes y documentos | 16–22 | Junior + senior |
| 6 | SEO e integraciones | 10–14 | Senior |
| 7 | Rendimiento | 8–12 | Senior |
| 8 | Seguridad | 10–14 | Senior |
| 9 | QA y testing | 12–18 | Junior + senior |
| 10 | Despliegue y producción | 8–12 | Senior |
| | **Total** | **198–274 h** | |

**Rango calendario:** 8 a 12 semanas, trabajando en paralelo con otros proyectos.

**Costos de terceros:**

| Concepto | Costo |
|---|---|
| Hosting Plesk | Infraestructura propia — costo interno |
| SSL Let's Encrypt | Gratis |
| Cloudflare Turnstile | Gratis |
| GA4 / GTM | Gratis |
| Tipografías | A definir en Fase 2. Se prioriza licencia abierta; si se elige una comercial, hay licencia web a pagar |
| Fotografía | **No presupuestada.** Si el cliente quiere producción fotográfica en campo, es un ítem aparte |
| Traducción profesional | Incluida como trabajo del equipo con asistencia de IA + revisión. Si el cliente exige traductor jurado o nativo certificado, es costo adicional |
| Almacenamiento externo de respaldos | Bajo, según volumen |

> ⚠️ Dos ítems pueden mover el número: **la producción fotográfica** (si el cliente cambia de idea)
> y **el volumen final de fichas de proyecto**, hoy estimado en veinticinco.

---

## 8. Riesgos y supuestos

| # | Riesgo | Prob. | Impacto | Mitigación |
|---|---|---|---|---|
| R1 | Material gráfico pobre: solo se dispone de las imágenes del sitio actual, de baja resolución y épocas dispares | **Alta** | Alto | El sistema de diseño se construye sin dependencia de fotografía, apoyado en tipografía, cifras y mapas. Las fotos existentes se curan, recortan y tratan con un filtro común. Se ofrece producción fotográfica como ítem aparte |
| R2 | Contenido desactualizado que el cliente no revisa (fechas 2013–2023, proyecciones vencidas) | **Alta** | Alto | Lista de verificación de contenido en Fase 2, ítem por ítem, con aprobación explícita de Marcel Saps. Nada con fecha vencida se publica sin actualizar o sin reescribir a tiempo presente |
| R3 | El sitio actual publica información potencialmente sensible: costos por hectárea, precios de venta proyectados, resoluciones mineras, padrones catastrales, archivos KMZ con coordenadas | Media | **Alto** | Revisión ítem por ítem en Fase 0 con el cliente. Lo que no deba ser público se retira o se reserva para el v1 (sala de inversores). **Decisión del cliente por escrito** |
| R4 | El alcance bilingüe se subestima: duplica copywriting, QA y carga de contenido | Media | Alto | Cotizado como fase propia (2b). El inglés se aprueba de una sola vez al cierre de la Fase 2, no ficha por ficha |
| R5 | **La siderúrgica se lanza casi vacía.** El único contenido existente es una leyenda que dice "en breve actualizaremos la información" y una foto | **Alta** | Medio | Una vertical con placeholder es peor que no tener la vertical. O el cliente aporta un mínimo en Fase 2 (qué empresa la opera, dónde, capacidad, estado), o se publica marcada "en desarrollo" con lo poco que hay bien redactado, o se deja despublicada y la prende él cuando tenga material. **Decisión del cliente en Fase 2** |
| R5b | Sale carbón vegetal, pero CarboChaco existe, tiene planta en Villa Hayes, licencias de SEAM e INFONA y sitio propio (`carbochaco.com`) | Media | Medio | Confirmar el motivo: ¿se vendió, se discontinuó, o simplemente no se muestra? Cambia qué se hace con el sitio satélite y si corresponde una redirección |
| R5c | La plantilla de vertical se maqueta a medida para las áreas con más contenido y después no sirve para crear una nueva | Media | **Alto** | Regla de ingeniería: cero vistas específicas por vertical. Todo tratamiento particular es un bloque configurable. Se valida creando una vertical de prueba desde cero durante el QA de Fase 9 |
| R5d | Al acortar el contenido se pierde el dato que daba credibilidad, y el sitio queda lindo pero vacío | Media | **Alto** | Regla de no pérdida (§5): ninguna cifra se elimina, y todo informe técnico baja a documento descargable. En Fase 2 se aprueba una planilla de trazabilidad: contenido actual → destino en el sitio nuevo. Nada queda sin destino asignado |
| R5e | El cliente vuelve a alargar el contenido una vez que tiene el panel | Media | Medio | Contador de palabras con rango sugerido por campo, y el criterio explicado en la capacitación: lo largo va a documento, no a la página |
| R6 | Ambigüedad de marca: existen al menos tres "Grupo GEN" con presencia web | Media | Medio | Posicionamiento explícito como "GRUPO GEN Desarrollo & Inversión", schema.org `Organization`, y confirmación del perfil de LinkedIn correcto antes de enlazarlo |
| R7 | El cliente demora en aprobar contenido y diseño | **Alta** | Medio | Plazos de aprobación explícitos en contrato. Un único aprobador designado (Marcel Saps). Aprobación tácita a los N días hábiles |
| R8 | El correo del dominio se rompe en el cutover | Baja | **Crítico** | Relevar dónde está alojado `info@grupo-gen.com` **antes** de tocar nada. En el cutover se cambia solo el registro A/web; MX y registros de correo no se tocan |
| R9 | El dominio lo administra un tercero (Alan Segovia) que no forma parte del proyecto | Media | Alto | Acceso ya confirmado por el cliente. Coordinar la ventana de cambio con él por escrito, con al menos una semana de anticipación |
| R10 | El logotipo solo existe en PNG de baja resolución | **Alta** | Medio | Pedir el vector. Si no existe, se revectoriza en Fase 2 y se entrega al cliente como parte del mini manual de marca — **entregable de valor, no costo hundido** |
| R11 | El cliente pide alcance del v1 (sala de inversores) durante el MVP | Media | Alto | El "NO entra" de la sección 4 está escrito para eso. Cambio de alcance = nuevo legajo |
| R12 | Los enlaces salientes a sitios satélite están rotos o los sitios están caídos | Media | Bajo | Verificar uno por uno en Fase 0. Los que no resuelvan, se quitan. Es además la entrada a la conversación del v2 |

**Supuestos:**

- El aprobador es Marcel Saps, y tiene autoridad para cerrar contenido y diseño.
- Alan Segovia dará acceso al DNS en la ventana de cutover.
- `info@grupo-gen.com` es una casilla operativa y es la que recibe los leads.
- El grupo tiene derecho de uso sobre todo el material gráfico y los logos de terceros que hoy
  aparecen en la sección "empresas con las que trabajamos". **Esto se confirma por escrito.**
- No hay teléfono ni WhatsApp a publicar, por decisión del cliente.
- Las dos direcciones a publicar son Montevideo (8 de Octubre 3883) y Asunción (Avenida Primer
  Presidente 3508).
- El contenido técnico existente (informes de geología, datos de planta) es correcto y publicable.

---

## 9. Métricas de éxito / KPIs

### Al cierre del proyecto

| Métrica | Objetivo |
|---|---|
| Lighthouse móvil (home, vertical, ficha de proyecto) | ≥ 90 |
| Core Web Vitals | LCP < 2.5 s · INP < 200 ms · CLS < 0.1 |
| Hallazgos de seguridad Críticos/Altos abiertos | 0 |
| Accesibilidad | WCAG 2.1 AA en todas las plantillas |
| Contenido migrado | 100 % (o descarte justificado por escrito) |
| Paridad ES/EN | 100 % del contenido publicado en ambos idiomas |
| Fichas de proyecto con al menos una cifra destacada | 100 % |
| Fichas de proyecto dentro del presupuesto de palabras | 100 % |
| Contenido del sitio actual con destino asignado en la planilla de trazabilidad | 100 % |
| Contenido con fecha vencida publicado sin revisar | **0** |
| Caída durante el cutover | < 5 minutos |
| Incidentes de correo durante el cutover | 0 |

### A 90 días de producción

| Métrica | Objetivo |
|---|---|
| Páginas indexadas en Google | ≥ 30 (hoy son 3) |
| Posición para la búsqueda "Grupo GEN inversiones" | Primer resultado |
| Tráfico orgánico vs. línea base pre-migración | ≥ 150 % |
| Novedades publicadas por el cliente **sin intervención de webparaguay** | ≥ 3 |
| **Verticales o proyectos nuevos creados por el cliente desde el panel** | ≥ 1 |
| Consultas recibidas por el formulario | ≥ 5 |
| Consultas perdidas por fallo técnico | **0** |
| Tickets de soporte por mes | ≤ 2 |

> El KPI que más importa es **"novedades publicadas por el cliente sin ayuda"**. El problema real
> de Grupo GEN nunca fue que su sitio fuera feo: fue que se quedó quieto. Si dentro de tres meses
> no publicaron nada, el proyecto entregó un sitio lindo y no resolvió el problema.

### Interno de webparaguay

| Métrica | Objetivo |
|---|---|
| Horas reales vs. estimadas | Desvío < 20 % |
| Patrón "corporativa multi-vertical bilingüe" extraído y documentado | Sí, al cerrar Fase 10 |
| Recurrente mensual cerrado (hosting + mantenimiento) | Sí, junto con el desarrollo |
| Conversación abierta sobre el ecosistema de sitios satélite | Sí, dentro de los 90 días |

---

## Anexo A — Inventario del contenido actual (relevamiento)

Nueve verticales, con aproximadamente veinticinco proyectos individuales.

| Vertical | Proyectos | Material disponible |
|---|---|---|
| **Sector forestal** | Paraguay — 190.000 ha en Bahía Negra, Fuerte Olimpo, Mcal. Estigarribia, Filadelfia, Eugenio Garay, Lagerenza, Colonia Tte. Pico | Tabla de distritos por hectárea, mapa, 1 foto |
| **Energía** | Planta de biomasa ELTT / Lumiganor S.A. (UY, 11,4 MW) · Etanol Chaco paraguayo (20.000 ha de caña) | Informe técnico de 11 secciones, 3 esquemas, 2 videos de YouTube, informe ambiental en PDF, PPTX del proyecto Chovoreca |
| **Puertos** | Puerto Bahía Negra · Puerto Villeta | 6 fotos |
| **Minería** | Permisos mineros (7 concesiones, 5.817 ha) · Oro Zapucay · Hierro Cerro Papagayo · Piedra partida Pueblo Centenario · Arrabio Paraguay · Fábrica de hierros | Tabla de permisos, informes geológicos, 2 PDFs, 2 videos MP4, ~8 fotos |
| **Bienes raíces** | Jardines de Acuario (Punta del Este) · El Terruño Treinta y Tres / Tacuarembó / Melo · Shopping Fernando de la Mora · Shopping San Nicolás · Depósito fiscal · Lotes UY · Pueblo de Mar (Jaureguiberry) · Distrito Lambaré · Unidad industrial Cerro Largo | ~12 fotos, 10+ PDFs de planos, 4 archivos KMZ, embed de Google Maps, enlaces a sitios propios |
| **Electrodomésticos** | Vía Confort (4 locales en Montevideo, desde 1960) | Texto + galería |
| ~~**Carbón vegetal**~~ | ~~CarboChaco (planta de 11 ha, 7.000 m² techados, Villa Hayes)~~ | **Sale del sitio nuevo.** Material existente: logo, 2 fotos de producto, 2 fotos de planta |
| **Siderúrgica** *(vertical nueva)* | Arrabio Paraguay · Fábrica de hierros | **Casi sin contenido.** Hoy son dos subsecciones de minería: una con la leyenda "en breve actualizaremos la información" y otra con una sola foto. **Hay que crear la vertical entera** |
| **Transporte fluvial** | Viagen S.A. (6 remolcadores, 3 barcazas, 1 grúa, Hidrovía) | 1 foto + galería |
| **Construcción** | Dialeca S.A. (agrimensura, ingeniería civil e hidráulica, urbanismo) | 4 fotos, listado de servicios y experiencia |
| **Agro** *(en el brief, no en la web)* | Referido indirectamente vía Egon: agricultura, soja, caña de azúcar, feedlot | **Sin contenido propio — hay que crearlo** |

**Otras secciones:** Quiénes somos · Responsabilidad social · Empresas con las que trabajamos
(7 logos sin identificar) · Contacto.

**Sitios satélite referenciados:** `viagen.com.py` · `carbochaco.com` · `viaconfort.com.uy` ·
`jardinesdeacuario.com` · `pueblodemar.uy` · `terruño.com` (dominio con eñe, verificar).

### Cifras candidatas a destacar visualmente

190.000 ha forestales · 5.817 ha de propiedad minera · 50 M t de magnetita probadas y +300 M t
probables · 11,4 MW de potencia instalada · 130 M litros de etanol anuales proyectados ·
350.000 t/año de mineral de hierro beneficiado · 6 remolcadores + 3 barcazas · 2 puertos sobre la
Hidrovía · 3 países · Vía Confort desde 1960 · 74 locales en el Shopping Fernando de la Mora ·
+900 lotes entre los fraccionamientos de El Terruño.

---

## Anexo B — Insumos pendientes del cliente

| # | Insumo | Estado | Bloquea |
|---|---|---|---|
| 1 | Logotipo en vector (SVG, AI o EPS) | Prometido | Fase 2 |
| 2 | 2 o 3 sitios de referencia que le gusten | Prometido | Fase 1 |
| 3 | Decisión sobre el peso de **agro** en el relato | Pendiente | Fase 1 |
| 4 | Revisión de las cifras y fechas del contenido actual | Pendiente | Fase 2 |
| 5 | Qué documentos e información **no** deben seguir siendo públicos | Pendiente | Fase 0 |
| 6 | URL del perfil de LinkedIn correcto | Pendiente | Fase 6 |
| 7 | Identificación de los 7 logos de "empresas con las que trabajamos" + autorización de uso | Pendiente | Fase 4 |
| 8 | Dónde está alojado el correo `@grupo-gen.com` | Pendiente | Fase 0 — **crítico para el cutover** |
| 9 | Confirmación de si se publican o no las dos direcciones y con qué jerarquía | Pendiente | Fase 1 |
| 10 | Nombres y cargos de la conducción, si quieren publicarlos | Pendiente | Fase 2 |
| 11 | **Listado completo de las sociedades del holding**: razón social, país, año, vertical y si tienen sitio propio | Pendiente | Fase 1 — **estructural** |
| 12 | **Mínimo de la vertical siderúrgica**: qué empresa la opera, ubicación, capacidad, estado — o decisión de dejarla despublicada | Pendiente | Fase 2 |
| 13 | ~~Insumos de agro~~ | **Pospuesto** — lo carga el cliente desde el panel cuando tenga material | Post-lanzamiento |
| 14 | Motivo de la salida de carbón vegetal y qué se hace con `carbochaco.com` | Pendiente | Fase 1 |
