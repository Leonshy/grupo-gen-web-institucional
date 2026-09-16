# Lista de imágenes necesarias — para Marcel Saps

> Basada en las 8 plantillas de `docs/01-mapa-del-sitio-y-modelo-de-contenido.md` y el copy de
> `docs/03-copy-completo.md`. **Actualizado tras extraer las 72 imágenes del sitio actual**
> (`https://grupo-gen.com`) el 2026-09-16 — ver `docs/assets-sitio-actual/INDEX.md` para el mapeo
> archivo por archivo, con la fuente HTML de cada asignación (no es una suposición). La curaduría
> "qué foto es de qué proyecto" que esta lista pedía como tarea pendiente **ya está hecha**.
>
> **Regla general:** todas las fotos van tratadas con un filtro unificado (mini manual de marca,
> Fase 2.2) porque hoy son de resoluciones y épocas dispares y de baja calidad — eso ya está en el
> plan, no es un pedido nuevo. Esta lista es sobre **qué falta conseguir**, no sobre el tratamiento.

---

## 0. Logo — cerrado, se trabaja con el PNG

| Ítem | Estado |
|---|---|
| Logo en PNG, fondo transparente, alta resolución (3040×1540) | ✅ Recibido |
| Logo en SVG/AI/EPS (vector real) | ✅ **Cerrado — no existe.** El cliente confirmó que no hay otro archivo. Se revectoriza internamente desde este PNG; la forma es simple (bloque geométrico + tipografía), no debería llevar más de un par de horas |
| Favicon (recorte cuadrado del isotipo "GEN", sin el texto "Desarrollo & Inversión") | 🟡 Se deriva del vector una vez producido |
| Versión monocromática (blanco, para fondos oscuros o fotos) | 🟡 Se deriva del vector una vez producido |
| Logo anterior en PNG de baja resolución (`img/principal/logo.png`, extraído del sitio actual) | 🟢 Queda descartado — el PNG nuevo del cliente es de mejor calidad |

---

## 1. Home

| Imagen | Uso | Cantidad | Estado |
|---|---|---|---|
| Logo del grupo | Header + hero | 1 (ver §0) | ✅ Recibido — vector se produce internamente |
| Logos de las 4 empresas con ficha completa (Dialeca, Viagen, Lumiganor, Vía Confort) | Franja "Nuestras empresas" | 4 | 🔴 **Siguen sin existir.** El sitio actual no muestra al holding como tal — no tiene isotipo propio de cada empresa participada en ningún lado. Hay que pedirlos uno por uno |
| Logos de las 7 "empresas con las que trabajamos" | Misma franja, modo `solo_logo` | 7 | ✅ **Archivos recuperados** — `assets-sitio-actual/img/clients/clients-logo{1,2,3,4,6,7,8}.png`. 🟡 Sigue faltando identificarlas y su autorización de uso (insumo #6) |
| Foto por área de inversión (Forestal, Energía, Minería, Puertos, Transporte fluvial, Bienes raíces, Construcción, Electrodomésticos) | Franja "Áreas de inversión" | 8 | ✅ **Resuelto completo** — `assets-sitio-actual/img/inversiones/*.jpg`, una por vertical (ver mapeo en el INDEX). Quedan de baja resolución, van al tratamiento unificado de la Fase 2.2 |

---

## 2. Quiénes somos

| Imagen | Uso | Estado |
|---|---|---|
| Foto o gráfico de fondo del hero | Cabecera de la página | 🟡 El sitio actual usa `img/principal/quienes-somos.png` para este bloque — ya extraída, pero es un gráfico genérico, no una foto institucional real (oficinas, equipo). Se puede reusar como placeholder o resolver con tipografía + mapa, mismo criterio del legajo ("la cifra es el elemento gráfico") |
| Mapa de presencia territorial (Uruguay + Paraguay + Argentina) | Ilustra los 3 países de operación | 🟢 Se construye como gráfico vectorial propio, con los puntos de `ubicacion_mapa` de cada empresa |

---

## 3. Empresas (índice + fichas)

| Imagen | Uso | Estado |
|---|---|---|
| Mapa de presencia territorial | Bloque dentro de `/empresas` | 🟢 Mismo gráfico que Quiénes somos |
| Logo Dialeca S.A. / Viagen S.A. / Lumiganor S.A. / Vía Confort | Ficha de empresa | 🔴 Pedir al cliente — ninguna de las cuatro tiene isotipo propio relevado (ver §1) |
| Foto de portada — Dialeca | Ficha de empresa | ✅ `assets-sitio-actual/img/construccion/img1-4.jpg` |
| Foto de portada — Viagen | Ficha de empresa | ✅ `assets-sitio-actual/img/transporte/img_1.jpg` — ⚠️ ver nota "Marean Corporation" en el INDEX, hay que aclarar con el cliente antes de usarla sin más contexto |
| Foto de portada — Lumiganor | Ficha de empresa | ✅ `assets-sitio-actual/img/energia/banner_3.jpg` |
| Foto de portada — Vía Confort | Ficha de empresa | 🔴 **No hay ninguna** — el sitio actual no tiene sección de electrodomésticos con fotos propias, solo la foto de tapa genérica en `img/inversiones/electrodomesticos.jpg` |
| Logos de las 7 empresas modo `solo_logo` | Grilla de `/empresas` | ✅ Archivos recuperados, ver §1 |

---

## 4. Índice de inversiones (8 verticales)

Mismas fotos que la franja de home (§1) — ya resuelto completo con `img/inversiones/*.jpg`.

---

## 5. Fichas de proyecto — galería por proyecto (curaduría ya hecha)

Detalle completo y trazable en `docs/assets-sitio-actual/INDEX.md`. Resumen:

| Proyecto | Fotos | Estado |
|---|---|---|
| Hierro — Cerro Papagayo | `mineria/hierro/hierro_1-5.*`, `mineria/img5.jpg` | ✅ Completo |
| Permisos mineros (concesiones) | — | 🔴 Sigue sin foto propia distinguible |
| Oro Zapucay | — | 🔴 Sigue sin foto propia distinguible |
| Piedra partida — Pueblo Centenario | `mineria/piedra_partida_1.jpg` | ✅ |
| Planta de biomasa ELTT | `energia/banner_3.jpg`, `energia-antecedentes-1/2/3.jpg`, `energia-4.jpg`, `energia-5.jpg` | ✅ Completo |
| Etanol Chaco paraguayo (Chovoreca) | `energia/energia-6.jpg` | ✅ Una imagen (antes decía que no había ninguna) |
| Puerto Bahía Negra | `puertos/img1.jpg` | ✅ |
| Puerto Villeta | `puertos/img2.jpg`, `img3.jpg`, `img-5.jpg`, `img-6.jpg` | ✅ — faltan `img-4.jpg` e `img-7.jpg`, **rotas también en el sitio actual**, no recuperables sin que el cliente las tenga guardadas aparte |
| Jardines de Acuario | `bienes/pde/img1-3.jpg`, `principal.png`, `complejo.png` (plano de implantación) | ✅ Completo |
| El Terruño (3 locaciones) | — | 🔴 Sigue sin foto — el sitio actual solo tiene iframes de galería externa (`galerias/treintaytres.html`, etc.) que no se pudieron extraer como imagen directa. **Pedir al cliente el contenido de esas 3 galerías** |
| Shopping Fernando de la Mora | `bienes/shopping/img4.jpg`, `img5.jpg`, `img6.jpg` | ✅ |
| Shopping San Nicolás | `bienes/shopping/img8.jpg`, `img9.jpg` | ✅ |
| Depósito fiscal | — | 🔴 Sin foto — el sitio actual solo linkea 4 PDFs de propuesta (2013), sin imagen |
| Lotes Uruguay | `bienes/lotes/11HasMdeoRural.jpg` | 🟡 Solo el lote "Montevideo Rural 11 Ha" tiene foto; los otros 3 lotes (43 Ha, Ciudad de la Costa, Canelones) solo tienen KMZ, sin imagen |
| Pueblo de Mar (Jaureguiberry) | — | 🔴 Sin foto en `inversiones.html` — hay un iframe a `galerias/urbanizacion.html` sin extraer, y banco propio probable en `pueblodemar.uy` |
| Distrito Lambaré | `bienes/distrito/Lambare.jpg` | ✅ |
| Unidad industrial Cerro Largo | — | 🔴 Sin foto — solo texto |
| Forestal (plantaciones Chaco) | `forestal/compania3.jpg`, `mapa-estrellas.jpg` | ✅ |
| Arrabio Paraguay | `mineria/img4.jpg` (mal ubicada en esa carpeta, ver INDEX) | ✅ Una imagen |
| Fábrica de hierros | `fabrica/fabrica-1/2/3.jpg` | ✅ Completo |

**Lo que sigue realmente faltando** (no es curaduría, es que no existe en ningún lado): Permisos
mineros, Oro Zapucay, El Terruño, Depósito fiscal, Unidad industrial Cerro Largo, Pueblo de Mar, y
3 de los 4 lotes de "Lotes Uruguay". Además, las 3 galerías embebidas por iframe (`galerias/*.html`
de El Terruño y Pueblo de Mar) no se pudieron extraer con este método — si tienen fotos propias,
hay que pedirlas directo.

---

## 6. Novedades

| Imagen | Uso | Estado |
|---|---|---|
| Foto de portada por novedad | Tarjeta en el índice y cabecera de la ficha | 🟢 Se carga a futuro, novedad por novedad, desde el panel |

---

## 7. Contacto

Sin imágenes — formulario + texto + mapa de ubicación (embebido liviano, no Google Maps pesado en
home, ya definido en el plan de Fase 4).

---

## Resumen — qué pedir ahora, en orden de impacto

1. **Logos individuales de las 4 empresas** con ficha completa (Dialeca, Viagen, Lumiganor, Vía
   Confort) — no existen en ningún lado, ni en el sitio actual.
2. **Identificación + autorización de los 7 logos de "empresas con las que trabajamos"** — el
   archivo ya está, falta saber de quién es cada uno (insumo #6).
3. **Contenido de las 3 galerías embebidas** de El Terruño y la de Pueblo de Mar
   (`galerias/treintaytres.html`, `tacuarembo.html`, `melo.html`, `urbanizacion.html`) — no se
   pudieron extraer con el método usado hoy.
4. **Fotos para los proyectos sin ninguna**: Permisos mineros, Oro Zapucay, Depósito fiscal,
   Unidad industrial Cerro Largo, y 3 de los 4 lotes de "Lotes Uruguay".
5. **Foto propia para Vía Confort** (electrodomésticos) — hoy solo hay una foto de tapa genérica
   de la vertical, no de la empresa.
6. **Puerto Bahía Negra e imágenes rotas de Puerto Villeta** (`img-4.jpg`, `img-7.jpg`) — si el
   cliente las tiene guardadas aparte, porque en el sitio en vivo están caídas.

*(El vector del logo del grupo ya no está en esta lista — el cliente confirmó que no existe, se
revectoriza internamente desde el PNG recibido, ver §0. Las 8 fotos de la franja de home y la
mayoría de las galerías de proyecto tampoco están más acá — ya se resolvieron extrayéndolas del
sitio actual, ver `docs/assets-sitio-actual/`.)*
