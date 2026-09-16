# Inventario de wireframes — Grupo GEN

> Orden por prioridad de flujo (01 = primer contacto del visitante, 14 = plantilla fuera de
> alcance de esta muestra, solo referencial).

| # | Pantalla | Archivo | Casos de uso | Elementos clave | Links salientes |
|---|---|---|---|---|---|
| 01 | Home | [home.html](home.html) | UC-001, 002, 003 | Hero, logos de empresas, franja de áreas, cifras opcionales, novedades | empresas-index, inversiones-index, novedades-index, contacto, grupo, vertical-mineria, vertical-bienes-raices |
| 02 | Empresas (índice) | [empresas-index.html](empresas-index.html) | UC-002 | Grilla `ficha_completa` + grilla `solo_logo`, mapa de presencia | empresa-dialeca/viagen/lumiganor/viaconfort |
| 03 | Ficha de empresa — Dialeca | [empresa-dialeca.html](empresa-dialeca.html) | UC-002 | Logo, 3 párrafos, datos duros, otras empresas | empresas-index, vertical-mineria, otras fichas |
| 04 | Ficha de empresa — Viagen | [empresa-viagen.html](empresa-viagen.html) | UC-002 | Ídem, contenido real de Anexo A | empresas-index |
| 05 | Ficha de empresa — Lumiganor | [empresa-lumiganor.html](empresa-lumiganor.html) | UC-002 | Ídem | empresas-index |
| 06 | Ficha de empresa — Vía Confort | [empresa-viaconfort.html](empresa-viaconfort.html) | UC-002 | Ídem | empresas-index |
| 07 | Inversiones (índice) | [inversiones-index.html](inversiones-index.html) | UC-001 | Grilla de 8 verticales, foto + nombre | vertical-mineria, vertical-bienes-raices |
| 08 | Vertical — Minería | [vertical-mineria.html](vertical-mineria.html) | UC-001 | Entrada 45 palabras, listado de 4 proyectos | proyecto-cerro-papagayo, inversiones-index |
| 09 | Ficha de proyecto — Cerro Papagayo | [proyecto-cerro-papagayo.html](proyecto-cerro-papagayo.html) | UC-001 | Descripción, 3 cifras, galería, documento, mapa | vertical-mineria, empresa-dialeca |
| 10 | Vertical — Bienes raíces | [vertical-bienes-raices.html](vertical-bienes-raices.html) | UC-001, UC-005 | Entrada, proyectos sin empresa asociada | proyecto-jardines-de-acuario |
| 11 | Ficha de proyecto — Jardines de Acuario | [proyecto-jardines-de-acuario.html](proyecto-jardines-de-acuario.html) | UC-005 | Sin empresa, sin cifras — prueba de plantilla "vacía" | vertical-bienes-raices |
| 12 | Novedades (índice) | [novedades-index.html](novedades-index.html) | UC-003 | Nota de regla de visibilidad condicional | — |
| 13 | Contacto | [contacto.html](contacto.html) | UC-004 | Formulario, direcciones, sin teléfono/WhatsApp | home |
| 14 | Quiénes somos | [grupo.html](grupo.html) | — | Placeholder referencial, fuera de alcance de esta muestra | — |

**Cómo revisarlos:** abrir `home.html` en el navegador y navegar con los links — es un prototipo
clickeable sin JavaScript. Estética intencionalmente de wireframe (grises, bordes punteados) para
no distraer con decisiones de diseño visual todavía; el contenido de texto sí es el real y
aprobado (`docs/02-copy-muestra.md`), no lorem ipsum.

## Capturas (desktop 1280px y mobile 390px), numeradas por prioridad

Carpetas separadas: `screenshots/desktop/` y `screenshots/mobile/`, mismo número y nombre en ambas.

| # | Pantalla | Desktop | Mobile |
|---|---|---|---|
| 01 | Home | [desktop/01-home.png](screenshots/desktop/01-home.png) | [mobile/01-home.png](screenshots/mobile/01-home.png) |
| 02 | Empresas (índice) | [desktop/02-empresas-index.png](screenshots/desktop/02-empresas-index.png) | [mobile/02-empresas-index.png](screenshots/mobile/02-empresas-index.png) |
| 03 | Empresa — Dialeca | [desktop/03-empresa-dialeca.png](screenshots/desktop/03-empresa-dialeca.png) | [mobile/03-empresa-dialeca.png](screenshots/mobile/03-empresa-dialeca.png) |
| 04 | Empresa — Viagen | [desktop/04-empresa-viagen.png](screenshots/desktop/04-empresa-viagen.png) | [mobile/04-empresa-viagen.png](screenshots/mobile/04-empresa-viagen.png) |
| 05 | Empresa — Lumiganor | [desktop/05-empresa-lumiganor.png](screenshots/desktop/05-empresa-lumiganor.png) | [mobile/05-empresa-lumiganor.png](screenshots/mobile/05-empresa-lumiganor.png) |
| 06 | Empresa — Vía Confort | [desktop/06-empresa-viaconfort.png](screenshots/desktop/06-empresa-viaconfort.png) | [mobile/06-empresa-viaconfort.png](screenshots/mobile/06-empresa-viaconfort.png) |
| 07 | Inversiones (índice) | [desktop/07-inversiones-index.png](screenshots/desktop/07-inversiones-index.png) | [mobile/07-inversiones-index.png](screenshots/mobile/07-inversiones-index.png) |
| 08 | Vertical — Minería | [desktop/08-vertical-mineria.png](screenshots/desktop/08-vertical-mineria.png) | [mobile/08-vertical-mineria.png](screenshots/mobile/08-vertical-mineria.png) |
| 09 | Proyecto — Cerro Papagayo | [desktop/09-proyecto-cerro-papagayo.png](screenshots/desktop/09-proyecto-cerro-papagayo.png) | [mobile/09-proyecto-cerro-papagayo.png](screenshots/mobile/09-proyecto-cerro-papagayo.png) |
| 10 | Vertical — Bienes raíces | [desktop/10-vertical-bienes-raices.png](screenshots/desktop/10-vertical-bienes-raices.png) | [mobile/10-vertical-bienes-raices.png](screenshots/mobile/10-vertical-bienes-raices.png) |
| 11 | Proyecto — Jardines de Acuario | [desktop/11-proyecto-jardines-de-acuario.png](screenshots/desktop/11-proyecto-jardines-de-acuario.png) | [mobile/11-proyecto-jardines-de-acuario.png](screenshots/mobile/11-proyecto-jardines-de-acuario.png) |
| 12 | Novedades (índice) | [desktop/12-novedades-index.png](screenshots/desktop/12-novedades-index.png) | [mobile/12-novedades-index.png](screenshots/mobile/12-novedades-index.png) |
| 13 | Contacto | [desktop/13-contacto.png](screenshots/desktop/13-contacto.png) | [mobile/13-contacto.png](screenshots/mobile/13-contacto.png) |
| 14 | Quiénes somos | [desktop/14-grupo.png](screenshots/desktop/14-grupo.png) | [mobile/14-grupo.png](screenshots/mobile/14-grupo.png) |

**Nota sobre mobile:** las capturas mobile muestran el layout tal cual, sin breakpoints responsive
todavía — a esta altura (wireframe de contenido y flujo) no hace falta resolver el responsive real;
eso se define en la Fase 2 de diseño visual de alta fidelidad, cuando entren la paleta y la
tipografía definitivas.
