# Imágenes extraídas del sitio actual (grupo-gen.com)

> 72 archivos descargados el 2026-09-16 desde `https://grupo-gen.com/index.html` y
> `https://grupo-gen.com/inversiones.html` (el servidor devuelve 406 sin headers de navegador —
> se usó user-agent y Accept de Chrome). Mapeo hecho leyendo el HTML fuente: cada imagen tiene el
> encabezado (`<h2>`/`<h3>`) y el `alt` bajo el que aparece en el sitio actual, no es una
> suposición. Estructura de carpetas idéntica a la del sitio original para no perder trazabilidad.
>
> **2 imágenes rotas en el sitio actual** (404 ya en producción, consistente con lo que señala el
> legajo sobre higiene técnica): `img/puertos/img-4.jpg`, `img/puertos/img-7.jpg`, más
> `imgotros/11 Has Mdeo Rural.jpg`. No se pudieron descargar porque no existen — hay que pedirle al
> cliente el original si lo tiene, no es recuperable del sitio en vivo.

---

## Cómo se usa esta carpeta

Reemplaza, en `docs/05-lista-de-imagenes.md`, todo lo que decía "no hay foto identificada" para
los proyectos donde el sitio actual sí tenía imagen — quedó actualizado ahí. Estas son fotos de
**baja resolución y tratamiento visual disperso** (es exactamente el problema que señala el
legajo, §2 y §3.2): sirven para maquetar con contenido real en la Fase 2.2 y como referencia, pero
antes de producción probablemente haya que pedir versiones en mayor resolución de las que sí
valga la pena reemplazar — la Fase 2.2 ya prevé un tratamiento unificado de todo el banco de fotos.

---

## Mapa de imágenes por vertical / proyecto

### Home — franja de áreas de inversión (`img/inversiones/`)

Las 9 fotos de tapa que usaba el índice de inversiones del sitio actual — **resuelve el pendiente
de "falta foto de tapa" para Energía y Electrodomésticos** que señalaba `05-lista-de-imagenes.md`.

| Archivo | Vertical |
|---|---|
| `forestacion.jpg` | Forestal |
| `eolica.jpg` | Energía *(nombre de archivo heredado — el sitio actual la usa para la sección de energía/biomasa, no hay proyecto eólico real)* |
| `mineria.jpg` | Minería |
| `puertos.jpg` | Puertos |
| `transporte.jpg` | Transporte fluvial |
| `bienesraices.jpg` | Bienes raíces |
| `construccion.jpg` | Construcción |
| `electrodomesticos.jpg` | Electrodomésticos |
| `carbon.jpg` | *(Carbón vegetal — fuera de alcance, no se usa, se conserva solo de referencia)* |

### Empresas — logos de terceros (`img/clients/`)

**Son los 7 logos de "empresas con las que trabajamos"** del Anexo B, ítem 7. Ya están los
archivos (`clients-logo1.png`, `2`, `3`, `4`, `6`, `7`, `8.png` — el `5` no existe ni en el sitio
actual). **Sigue pendiente identificar a qué empresa corresponde cada uno y su autorización de
uso** — tener el archivo no resuelve esa parte del insumo.

### Minería

| Archivo | Corresponde a |
|---|---|
| `img/mineria/hierro/hierro_1.png` … `hierro_5.jpg` | Ficha de proyecto: **Hierro — Cerro Papagayo** |
| `img/mineria/img5.jpg` | Gráfico de resultados/antecedentes de reservas, mismo proyecto (Cerro Papagayo) |
| `img/mineria/piedra_partida_1.jpg` | Ficha de proyecto: **Piedra partida — Pueblo Centenario** (alt original: "Piedra Partida") |
| `img/mineria/img4.jpg` | ⚠️ **No es de minería** — alt original "Arrabio - Paraguay". Es la única foto de la vertical Siderúrgica (proyecto Arrabio). Quedó en la carpeta `mineria/` del sitio viejo porque Siderúrgica hoy es una subsección de Minería (ver legajo, Anexo A) |
| `img/mineria/M748-20_Resolucion_de_Otorgamiento.jpeg` | 🔴 **Documento legal (resolución de otorgamiento), no foto de producto.** Es candidato directo al punto pendiente "qué documentos no deben seguir siendo públicos" (`04-lista-de-insumos-pendientes.md` ítem 2) — no publicar sin confirmación explícita |

### Energía

| Archivo | Corresponde a |
|---|---|
| `img/energia/banner_3.jpg` | Ficha de proyecto: **Planta de biomasa ELTT** — foto de portada ("Planta de Biomasa - Uruguay") |
| `img/energia/energia-antecedentes-1/2/3.jpg` | Mismo proyecto, sección de antecedentes técnicos |
| `img/energia/energia-4.jpg`, `energia-5.jpg` | Mismo proyecto — cosecha de biomasa (caption original: "John Deere 1490D para la cosecha de biomasa") |
| `img/energia/energia-6.jpg` | Ficha de proyecto: **Etanol Chaco paraguayo (Chovoreca)** — única imagen de este proyecto |

### Puertos

| Archivo | Corresponde a |
|---|---|
| `img/puertos/img1.jpg` | Ficha de proyecto: **Puerto Bahía Negra** |
| `img/puertos/img2.jpg`, `img3.jpg` | Ficha de proyecto: **Puerto Villeta** — sección "Ubicación" |
| `img/puertos/img-5.jpg`, `img-6.jpg` | Puerto Villeta — sección "Comienzo de obras" |
| `img/puertos/img-4.jpg`, `img-7.jpg` | 🔴 **Rotas en el sitio actual, no recuperables.** Pertenecían a la misma sección "Comienzo de obras" de Puerto Villeta |

### Bienes raíces

| Archivo | Corresponde a |
|---|---|
| `img/bienes/pde/img1.jpg`, `img2.jpg`, `img3.jpg`, `principal.png` | Ficha de proyecto: **Jardines de Acuario** (alt original: "Jardines de Acuario"; `pde` = Punta del Este) |
| `img/bienes/pde/complejo.png` | Plano de implantación de Jardines de Acuario. **Nota técnica:** en el HTML original el link está roto (`../grupogen/img/...`, sube un nivel de más); el archivo sí existe en `img/bienes/pde/complejo.png` — mismo tipo de error de rutas que ya señala el legajo |
| `img/bienes/shopping/img4.jpg`, `img5.jpg`, `img6.jpg` | Ficha de proyecto: **Shopping Fernando de la Mora** |
| `img/bienes/shopping/img8.jpg`, `img9.jpg` | Ficha de proyecto: **Shopping San Nicolás** — `img9.jpg` tiene el `alt` mal copiado como "Shopping Fernando de la Mora" en el sitio original, pero está bajo el encabezado de San Nicolás. `img8.jpg` es el render del proyecto (hotel + oficinas) |
| `img/bienes/lotes/11HasMdeoRural.jpg` | Ficha de proyecto: **Lotes Uruguay** — lote "Montevideo Rural, 11 Ha" específicamente (hay otros lotes en el listado sin imagen, solo KMZ) |
| `img/bienes/distrito/Lambare.jpg` | Ficha de proyecto: **Distrito Lambaré**. Superficie confirmada en el sitio original: 1 Ha 5.418 m² 5.603 cm² (dato de escala, no sensible — se puede usar en el copy) |

**Corrección importante:** Depósito fiscal, El Terruño y Unidad industrial Cerro Largo **sí tienen
texto** en `inversiones.html` — lo que no tienen es imagen. El Anexo A del legajo los relevó solo
por nombre, pero el HTML fuente trae bastante más detalle del que llegó a `03-copy-completo.md`
(superficies, cantidad de lotes, capacidad de secado y almacenaje, etc.). **Ver nota aparte más
abajo — esto cambia el estado de varias fichas que hoy figuran como "PENDIENTE, falta casi todo".**
Shopping San Nicolás, en cambio, confirmado: no tiene más fotos que las dos ya listadas.

### Forestal

| Archivo | Corresponde a |
|---|---|
| `img/forestal/compania3.jpg` | Ficha de proyecto: **Plantaciones forestales — Chaco paraguayo** |
| `img/forestal/mapa-estrellas.jpg` | El mapa de distritos mencionado en el Anexo A del legajo |

### Construcción (Dialeca)

`img/construccion/img1.jpg` a `img4.jpg` — galería general de servicios (agrimensura, ingeniería
civil e hidráulica, urbanismo), sin asignación a un proyecto individual porque el sitio actual
tampoco los distingue.

### Transporte fluvial (Viagen) ⚠️ requiere aclaración del cliente

| Archivo | Nota |
|---|---|
| `img/transporte/img_1.jpg` | Foto de la flota, bajo el encabezado "VIAGEN" |
| `img/transporte/logo_marean2.png` | **El `alt` original dice "Marean Corporation", no "Viagen".** Aparece dentro de la misma sección. No queda claro si Marean Corporation es una marca comercial de Viagen S.A., un socio, o un logo puesto por error. **Sumar esta pregunta a la lista de insumos** antes de usarlo en la ficha de empresa de Viagen |

### Siderúrgica (Arrabio Paraguay / Fábrica de hierros)

| Archivo | Corresponde a |
|---|---|
| `img/mineria/img4.jpg` | Arrabio Paraguay (ver nota en §Minería — está mal ubicado en esa carpeta) |
| `img/fabrica/fabrica-1.jpg`, `fabrica-2.jpg`, `fabrica-3.jpg` | Fábrica de hierros |

Recordatorio: esta vertical sigue en borrador condicional (Anexo B ítem 12) — tener las fotos no
cambia esa decisión pendiente.

### Home / generales (`img/principal/`, `img/cuenta.png`, `favicon.png`)

| Archivo | Uso original |
|---|---|
| `img/principal/logo.png` | Logo anterior, en PNG de baja resolución — **reemplazado** por el PNG nuevo que envió el cliente (mejor calidad, ver `docs/05-lista-de-imagenes.md` §0) |
| `img/principal/quienes-somos.png` | Imagen del bloque "Quiénes somos" de la home actual |
| `img/principal/planta.jpg` | Imagen de la sección "Responsabilidad Social" |
| `img/principal/flag-english.png` | Ícono de bandera para el selector de idioma — no aplica al sitio nuevo, que usa prefijo `/en/` en vez de banderas |
| `img/principal/linkedin.png` | Ícono de LinkedIn del footer |
| `img/cuenta.png`, `favicon.png` | Iconografía menor del sitio actual, revisar si aplica al nuevo diseño |

### Carbón vegetal (`img/carbon/`) — fuera de alcance

`logo_grande.png`, `bolsa1.png`, `bolsa2.png`, `carbon-1.jpg`, `carbon-2.jpg`. CarboChaco sale del
sitio nuevo (legajo, Anexo A). Se conservan acá solo como referencia histórica, no se cargan al
panel salvo que el cliente decida lo contrario (Anexo B, ítem 14, sigue pendiente).

---

## Hallazgo aparte: el HTML fuente tiene más texto que el Anexo A del legajo

Al buscar las imágenes se leyó el HTML completo, no solo el resumen del Anexo A, y aparecieron
párrafos de contenido real para fichas que en `03-copy-completo.md` quedaron marcadas
`PENDIENTE — falta casi todo`:

- **Pueblo de Mar (Jaureguiberry):** 20 hectáreas, 180 m de frente de mar, 166 lotes en propiedad
  horizontal, solares promedio de 500 m², acceso controlado 24 hs.
- **El Terruño**, con datos propios **por fraccionamiento** (no un solo bloque genérico): Treinta y
  Tres (+120.000 m², 185 terrenos, lotes de 300 m²), Tacuarembó (+120.000 m², 400 terrenos, lotes
  de 300 m²) y Melo (+56.600 m², 110 terrenos, lotes de 400 a 650 m²).
- **Unidad industrial Cerro Largo:** ubicación exacta (paraje Tres Islas, 65 km de Melo, 365 km de
  Montevideo), uso (recibo y secado de cereales/oleaginosos), 3 secadores con capacidad estática de
  170 TT y secado promedio de 510 TT/día, capacidad de almacenaje de 12.000 TT.
- **Lotes Uruguay**, con el listado completo de 4 lotes y sus superficies exactas (Montevideo Rural
  43 Ha y 11 Ha, Ciudad de la Costa 2 Ha, Canelones Rural 21 Ha y 7 Ha).

Ninguno de estos datos es sensible (son superficies y capacidades, no costos ni precios — sigue
aplicando la exclusión de R3 del legajo). **Recomendación: re-escribir estas cuatro fichas en
`03-copy-completo.md` con este material real**, en vez de dejarlas como PENDIENTE — dejo esto
señalado para hacerlo en el próximo paso, a confirmar con vos.

---

## Consecuencia directa sobre `04-lista-de-insumos-pendientes.md`

- El ítem 6 (logos de "empresas con las que trabajamos") pasa de "conseguir los archivos" a
  **"identificar y autorizar"** — los 7 archivos ya están.
- Nuevo ítem: aclarar qué es "Marean Corporation" en la sección de Viagen.
- Nuevo ítem: confirmar si el documento `M748-20_Resolucion_de_Otorgamiento.jpeg` puede publicarse
  (entra directo en la pregunta ya pendiente sobre qué información no debe seguir siendo pública).
- Se confirma, leyendo el HTML fuente y no solo el Anexo A, que Depósito fiscal, El Terruño y
  Unidad industrial Cerro Largo **no tienen ninguna presencia en el sitio actual** — ni texto ni
  imagen. Ese contenido depende 100 % de que el cliente lo aporte de cero.
