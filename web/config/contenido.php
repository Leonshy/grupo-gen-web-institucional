<?php

/**
 * Contenido real del sitio (Fase 2 — docs/03-copy-completo.md y 02-copy-muestra.md).
 * Sin base de datos por ahora: array plano que alimenta las plantillas dinámicas
 * de empresa, vertical y proyecto. Cuando exista panel, esto migra a tablas sin
 * tocar las vistas (mismos nombres de campo).
 */

return [

    'empresas' => [
        'dialeca' => [
            'nombre' => 'Dialeca S.A.',
            'sector' => 'Minería y Construcción',
            'pais' => 'Uruguay',
            'verticales' => ['mineria', 'construccion'],
            'descripcion' => 'Dialeca S.A. opera concesiones mineras en Rivera y Durazno, con foco en hierro y oro, y presta servicios de agrimensura, ingeniería civil e hidráulica y urbanismo. Es la empresa detrás de Cerro Papagayo, el yacimiento de hierro que conecta la minería del grupo con el proyecto de arrabio en Paraguay y la salida por los puertos propios sobre la Hidrovía.',
            'razon_social' => 'Dialeca S.A.',
            'icon' => 'tabler--mountain',
            'cifra' => ['valor' => '5.817 ha', 'label' => 'concesiones mineras'],
        ],
        'viagen' => [
            'nombre' => 'Viagen S.A.',
            'sector' => 'Transporte fluvial',
            'pais' => 'Uruguay/Paraguay',
            'verticales' => ['transporte-fluvial'],
            'descripcion' => 'Viagen S.A. opera una flota propia de seis remolcadores, tres barcazas y una grúa sobre la Hidrovía Paraná-Paraguay, conectando los puertos del grupo en Bahía Negra y Villeta con las rutas comerciales de la región. Es la empresa que transporta la producción de las otras verticales del holding, entre ellas el hierro de Cerro Papagayo y la carga forestal del Chaco paraguayo, integrando la cadena logística de Grupo GEN de punta a punta.',
            'razon_social' => 'Viagen S.A.',
            'sitio_propio' => 'viagen.com.py',
            'icon' => 'tabler--anchor',
            'cifra' => ['valor' => '6 remolcadores', 'label' => 'flota propia'],
        ],
        'lumiganor' => [
            'nombre' => 'Lumiganor S.A.',
            'sector' => 'Energía',
            'pais' => 'Uruguay',
            'verticales' => ['energia'],
            'descripcion' => 'Lumiganor S.A. opera la planta de biomasa ELTT en Treinta y Tres, Uruguay, con una potencia instalada de 11,4 MW generados a partir de residuos forestales. Es la base energética del grupo en Uruguay y el antecedente técnico y ambiental sobre el que se evalúan nuevos proyectos de generación en la región, incluido el desarrollo de etanol en el Chaco paraguayo.',
            'razon_social' => 'Lumiganor S.A.',
            'icon' => 'tabler--bolt',
            'cifra' => ['valor' => '11,4 MW', 'label' => 'potencia instalada'],
        ],
        'via-confort' => [
            'nombre' => 'Vía Confort',
            'sector' => 'Electrodomésticos',
            'pais' => 'Uruguay',
            'verticales' => ['electrodomesticos'],
            'descripcion' => 'Vía Confort comercializa electrodomésticos y equipamiento para el hogar desde 1960, con cuatro sucursales en Montevideo. Es la empresa de mayor trayectoria del grupo y la que conecta a Grupo GEN con el consumidor final, en contraste con el perfil mayormente industrial del resto de las verticales.',
            'razon_social' => 'Vía Confort',
            'sitio_propio' => 'viaconfort.com.uy',
            'icon' => 'tabler--plug',
            'cifra' => ['valor' => 'Desde 1960', 'label' => 'en el mercado'],
        ],
        'igp-metales' => [
            'nombre' => 'IGP Metales',
            'sector' => 'Siderurgia',
            'pais' => 'Paraguay',
            'verticales' => ['siderurgica'],
            'descripcion' => 'IGP Metales (Industrias Globales Paraguayas) opera una planta industrial en Villa Hayes, Paraguay, y fabrica productos de acero al carbono: palanquillas, varillas lisas y varillas de construcción nervuradas. Es la empresa que cierra la cadena de valor del hierro del grupo, aguas abajo de la minería de Dialeca S.A. en Cerro Papagayo.',
            'razon_social' => 'IGP Metales (Industrias Globales Paraguayas)',
            'sitio_propio' => 'igp.com.py',
            'icon' => 'tabler--flame',
            'cifra' => ['valor' => 'ONC/INTN', 'label' => 'certificación de conformidad'],
        ],
    ],

    'verticales' => [
        'forestal' => [
            'nombre' => 'Forestal',
            'icon' => 'tabler--tree',
            'color' => 'primary-1',
            'imagen' => 'inversiones/forestacion.jpg',
            'resumen' => 'El grupo desarrolla plantaciones forestales en el Chaco paraguayo, con 190.000 hectáreas distribuidas entre los distritos de Bahía Negra, Fuerte Olimpo, Mariscal Estigarribia, Filadelfia, Eugenio Garay, Lagerenza y Colonia Teniente Pico. Es la vertical de mayor superficie del holding y la base territorial de la que dependen otros desarrollos de la región, como los puertos de Bahía Negra y Villeta y la logística fluvial de Viagen S.A.',
        ],
        'energia' => [
            'nombre' => 'Energía',
            'icon' => 'tabler--bolt',
            'color' => 'white',
            'imagen' => 'inversiones/eolica.jpg',
            'resumen' => 'El grupo opera la planta de biomasa ELTT (Lumiganor S.A.) en Treinta y Tres, Uruguay, con 11,4 MW de potencia instalada a partir de residuos forestales, y evalúa un proyecto de etanol en el Chaco paraguayo sobre 20.000 hectáreas de caña de azúcar. Dos escalas de la misma apuesta: generación consolidada en Uruguay y un desarrollo agroindustrial en etapa de estudio en Paraguay.',
        ],
        'mineria' => [
            'nombre' => 'Minería',
            'icon' => 'tabler--mountain',
            'color' => 'primary-1',
            'imagen' => 'inversiones/mineria.jpg',
            'resumen' => 'Dialeca S.A. opera siete concesiones mineras sobre más de 5.800 hectáreas en Rivera y Durazno, Uruguay. El activo central es Cerro Papagayo, una reserva de hierro que integra toda la cadena: extracción, beneficiamiento, arrabio en Paraguay y salida propia por los puertos del grupo sobre la Hidrovía.',
        ],
        'siderurgica' => [
            'nombre' => 'Siderurgia',
            'icon' => 'tabler--flame',
            'color' => 'white',
            'imagen' => 'inversiones/siderurgia.jpg',
            'resumen' => 'IGP Metales fabrica palanquillas y varillas de acero al carbono en su planta de Villa Hayes, Paraguay, cerrando la cadena de valor del hierro del grupo aguas abajo de la minería de Cerro Papagayo. Los productos cuentan con licencia de uso de la marca ONC de conformidad, otorgada por el INTN, que garantiza el cumplimiento de los requisitos de seguridad estructural de la construcción en Paraguay.',
        ],
        'puertos' => [
            'nombre' => 'Puertos',
            'icon' => 'tabler--anchor',
            'color' => 'primary-1',
            'imagen' => 'inversiones/puertos.jpg',
            'resumen' => 'Grupo GEN opera dos puertos propios sobre la Hidrovía Paraná-Paraguay: Puerto Bahía Negra y Puerto Villeta. Son la salida logística de la producción forestal, minera y agroindustrial del grupo en Paraguay, y el nexo con la flota fluvial de Viagen S.A. Su ubicación sobre uno de los corredores de carga más activos de Sudamérica es un activo diferencial del holding en la región.',
        ],
        'transporte-fluvial' => [
            'nombre' => 'Transporte fluvial',
            'icon' => 'tabler--ship',
            'color' => 'primary-1',
            'imagen' => 'inversiones/transporte.jpg',
            'resumen' => 'Viagen S.A. opera seis remolcadores, tres barcazas y una grúa sobre la Hidrovía Paraná-Paraguay, conectando los puertos propios del grupo en Bahía Negra y Villeta con las rutas comerciales de la región. Es la vertical logística que integra la producción del resto del holding.',
        ],
        'bienes-raices' => [
            'nombre' => 'Bienes raíces',
            'icon' => 'tabler--building-estate',
            'color' => 'white',
            'imagen' => 'inversiones/bienesraices.jpg',
            'resumen' => 'La cartera inmobiliaria del grupo incluye desarrollos residenciales en la costa uruguaya como Jardines de Acuario y los fraccionamientos de El Terruño en Treinta y Tres, Tacuarembó y Melo, además de activos comerciales e industriales como los shoppings de Fernando de la Mora y San Nicolás, un depósito fiscal, lotes en Uruguay y una unidad industrial en Cerro Largo. Es la vertical con más proyectos individuales del holding.',
        ],
        'construccion' => [
            'nombre' => 'Construcción',
            'icon' => 'tabler--building-warehouse',
            'color' => 'primary-1',
            'imagen' => 'inversiones/construccion.jpg',
            'resumen' => 'Dialeca S.A. presta servicios de agrimensura, ingeniería civil e hidráulica y urbanismo, la misma empresa que opera las concesiones mineras del grupo en Rivera y Durazno. La combinación de minería y construcción bajo una sola sociedad refleja cómo Grupo GEN integra capacidades técnicas entre verticales en lugar de tercerizarlas.',
        ],
        'electrodomesticos' => [
            'nombre' => 'Electrodomésticos',
            'icon' => 'tabler--plug',
            'color' => 'primary-1',
            'imagen' => 'inversiones/electrodomesticos.jpg',
            'resumen' => 'Vía Confort comercializa electrodomésticos y equipamiento para el hogar en cuatro sucursales de Montevideo desde 1960. Es la vertical de contacto directo con el consumidor final dentro de un grupo cuyo perfil es, en el resto de sus verticales, industrial y de infraestructura.',
        ],
    ],

    'proyectos' => [

        // Minería
        'cerro-papagayo' => [
            'nombre' => 'Cerro Papagayo',
            'vertical' => 'mineria',
            'empresa' => 'dialeca',
            'ubicacion' => 'Isla Cristalina, Rivera, Uruguay',
            'estado' => 'En desarrollo',
            'descripcion' => [
                'Cerro Papagayo es el yacimiento de hierro más relevante de Dialeca S.A., con una reserva probada de 50 millones de toneladas de magnetita y recursos probables que superan los 300 millones. El mineral beneficiado alcanza una ley superior a 65 % de hierro, calidad que habilita su uso directo en la cadena siderúrgica del grupo.',
                'Cerro Papagayo conecta la minería con el resto de las operaciones de GEN: el hierro extraído aquí alimenta el proyecto de arrabio en Paraguay y sale por los puertos propios del grupo sobre la Hidrovía, transportado por Viagen S.A.',
            ],
            'cifras' => [
                ['valor' => '50 M t', 'label' => 'reservas probadas de magnetita'],
                ['valor' => 'Fe > 65 %', 'label' => 'ley del mineral beneficiado'],
                ['valor' => '350.000 t/año', 'label' => 'producción proyectada'],
            ],
        ],
        'permisos-mineros' => [
            'nombre' => 'Permisos mineros — concesiones Rivera y Durazno',
            'vertical' => 'mineria',
            'empresa' => 'dialeca',
            'ubicacion' => 'Rivera y Durazno, Uruguay',
            'descripcion' => [
                'Dialeca S.A. mantiene siete concesiones mineras vigentes sobre 5.817 hectáreas en los departamentos de Rivera y Durazno, Uruguay. El conjunto de permisos es la base territorial sobre la que se apoyan los desarrollos puntuales del grupo en minería, entre ellos el yacimiento de hierro de Cerro Papagayo.',
            ],
            'cifras' => [
                ['valor' => '7', 'label' => 'concesiones vigentes'],
                ['valor' => '5.817 ha', 'label' => 'superficie total'],
            ],
        ],
        'oro-zapucay' => [
            'nombre' => 'Oro — Zapucay',
            'vertical' => 'mineria',
            'descripcion' => [
                'Zapucay es uno de los proyectos auríferos del grupo en Uruguay, dentro del mismo esquema de concesiones mineras que opera Dialeca S.A.',
            ],
        ],
        'piedra-partida-pueblo-centenario' => [
            'nombre' => 'Piedra partida — Pueblo Centenario',
            'vertical' => 'mineria',
            'descripcion' => [
                'Pueblo Centenario es el proyecto de piedra partida del grupo, dentro del mismo esquema de concesiones mineras que opera Dialeca S.A. en Uruguay.',
            ],
        ],

        // Siderurgia
        'planta-igp-villa-hayes' => [
            'nombre' => 'Planta industrial IGP — Villa Hayes',
            'vertical' => 'siderurgica',
            'empresa' => 'igp-metales',
            'ubicacion' => 'Ruta PY09 Km 37.5, Zona Industrial, Villa Hayes, Paraguay',
            'estado' => 'En operación',
            'descripcion' => [
                'IGP Metales (Industrias Globales Paraguayas) opera su planta industrial sobre la Ruta PY09, en la zona industrial de Villa Hayes, Paraguay, donde fabrica palanquillas y varillas de acero al carbono 1035: varillas lisas y varillas de construcción nervuradas para la industria de la construcción paraguaya.',
                'Es el eslabón siderúrgico de la cadena del hierro del grupo, aguas abajo de la minería de Dialeca S.A. en Cerro Papagayo, Uruguay. Sus productos cuentan con licencia de uso de la marca ONC de conformidad, otorgada por el Instituto Nacional de Tecnología, Normalización y Metrología (INTN), que certifica el cumplimiento de los requisitos de seguridad estructural exigidos por la normativa de construcción paraguaya.',
            ],
            'documentos' => ['Licencia de uso de marca ONC de conformidad (INTN)'],
        ],

        // Energía
        'planta-biomasa-eltt' => [
            'nombre' => 'Planta de biomasa ELTT',
            'vertical' => 'energia',
            'empresa' => 'lumiganor',
            'ubicacion' => 'Treinta y Tres, Uruguay',
            'estado' => 'En operación',
            'descripcion' => [
                'La planta de biomasa ELTT, operada por Lumiganor S.A. en Treinta y Tres, genera 11,4 MW de potencia instalada a partir de residuos forestales de la región. Es el proyecto energético de mayor madurez del grupo: cuenta con informe técnico propio de once secciones, informe ambiental aprobado y registro audiovisual del proceso de generación.',
                'La planta convierte un subproducto de la actividad forestal —el residuo de biomasa— en energía eléctrica despachada a la red uruguaya, cerrando un ciclo productivo entre dos verticales del holding. Es también el antecedente técnico y ambiental que el grupo usa para evaluar nuevos desarrollos de generación en la región, incluido el proyecto de etanol en el Chaco paraguayo.',
            ],
            'cifras' => [
                ['valor' => '11,4 MW', 'label' => 'potencia instalada'],
            ],
            'documentos' => ['Informe técnico (11 secciones)', 'Informe ambiental', '2 videos del proceso'],
        ],
        'etanol-chovoreca' => [
            'nombre' => 'Etanol — Chaco paraguayo (Chovoreca)',
            'vertical' => 'energia',
            'ubicacion' => 'Chaco paraguayo',
            'descripcion' => [
                'El grupo evalúa un proyecto agroindustrial de etanol en el Chaco paraguayo, sobre 20.000 hectáreas destinadas al cultivo de caña de azúcar, conocido internamente como Chovoreca. Es un desarrollo que combina agricultura a escala con producción energética, en línea con la experiencia del grupo en biomasa a través de Lumiganor S.A. en Uruguay.',
            ],
            'cifras' => [
                ['valor' => '20.000 ha', 'label' => 'destinadas a caña de azúcar'],
            ],
            'documentos' => ['Presentación del proyecto Chovoreca'],
        ],

        // Puertos
        'puerto-bahia-negra' => [
            'nombre' => 'Puerto Bahía Negra',
            'vertical' => 'puertos',
            'ubicacion' => 'Bahía Negra, Alto Paraguay',
            'estado' => 'En operación',
            'descripcion' => [
                'Puerto Bahía Negra es uno de los dos puertos propios del grupo sobre la Hidrovía Paraná-Paraguay. Es la salida natural de la producción forestal del Chaco paraguayo, cuyas 190.000 hectáreas se concentran en distritos cercanos, y opera en conjunto con la flota de Viagen S.A.',
            ],
        ],
        'puerto-villeta' => [
            'nombre' => 'Puerto Villeta',
            'vertical' => 'puertos',
            'ubicacion' => 'Villeta, Paraguay',
            'estado' => 'En operación',
            'descripcion' => [
                'Puerto Villeta es el segundo puerto propio del grupo sobre la Hidrovía Paraná-Paraguay, con una ubicación más cercana a Asunción que Puerto Bahía Negra. Complementa la salida logística de la producción del grupo y su cercanía a la capital lo conecta con la oficina comercial de Asunción.',
            ],
        ],

        // Forestal
        'plantaciones-chaco-paraguayo' => [
            'nombre' => 'Plantaciones forestales — Chaco paraguayo',
            'vertical' => 'forestal',
            'ubicacion' => 'Bahía Negra, Fuerte Olimpo, Mariscal Estigarribia, Filadelfia, Eugenio Garay, Lagerenza y Colonia Teniente Pico, Paraguay',
            'descripcion' => [
                'El grupo mantiene 190.000 hectáreas forestales distribuidas en siete distritos del Chaco paraguayo: Bahía Negra, Fuerte Olimpo, Mariscal Estigarribia, Filadelfia, Eugenio Garay, Lagerenza y Colonia Teniente Pico. Es la mayor extensión de tierra del holding y la base territorial de la que dependen los puertos de Bahía Negra y Villeta.',
            ],
            'cifras' => [
                ['valor' => '190.000 ha', 'label' => 'superficie forestal'],
                ['valor' => '7', 'label' => 'distritos del Chaco paraguayo'],
            ],
        ],

        // Bienes raíces
        'el-terruno' => [
            'nombre' => 'El Terruño',
            'vertical' => 'bienes-raices',
            'ubicacion' => 'Treinta y Tres, Tacuarembó y Melo, Uruguay',
            'estado' => 'En comercialización',
            'descripcion' => [
                'El Terruño es una marca de fraccionamientos residenciales del grupo, con tres desarrollos activos en el interior uruguayo, cada uno en una avenida o ruta principal de su ciudad y pensado para sumar terrenos de uso libre —residencial, comercial o institucional— a barrios en expansión.',
            ],
            'tabla' => [
                'encabezados' => ['Fraccionamiento', 'Superficie total', 'Lote típico', 'Terrenos a la venta', 'Espacio verde'],
                'filas' => [
                    ['Treinta y Tres', '+120.000 m²', '300 m² (12 × 25 m)', '185', '12.000 m²'],
                    ['Tacuarembó', '+120.000 m²', '300 m² (10 × 30 m)', '400', '3 plazas + rambla sobre el Arroyo Sandú'],
                    ['Melo', '+56.600 m²', '400–650 m² (13 × 30–45 m)', '110', '2 plazas'],
                ],
            ],
        ],
        'shopping-fernando-de-la-mora' => [
            'nombre' => 'Shopping Fernando de la Mora',
            'vertical' => 'bienes-raices',
            'ubicacion' => 'Fernando de la Mora, Paraguay',
            'estado' => 'En operación',
            'descripcion' => [
                'El Shopping Fernando de la Mora es un centro comercial del grupo en Paraguay, con 74 locales comerciales. Es el activo comercial de mayor escala de la cartera inmobiliaria del holding, y uno de los pocos con ingresos recurrentes de renta, a diferencia del resto de los desarrollos, orientados a la venta de lotes o unidades.',
            ],
            'cifras' => [
                ['valor' => '74', 'label' => 'locales comerciales'],
            ],
        ],
        'shopping-san-nicolas' => [
            'nombre' => 'Shopping San Nicolás',
            'vertical' => 'bienes-raices',
            'descripcion' => [
                'El Shopping San Nicolás es el segundo activo comercial de la cartera inmobiliaria del grupo.',
            ],
        ],
        'deposito-fiscal' => [
            'nombre' => 'Depósito fiscal',
            'vertical' => 'bienes-raices',
            'descripcion' => [
                'El grupo opera un depósito fiscal dentro de su cartera de bienes raíces e infraestructura logística.',
            ],
        ],
        'lotes-uruguay' => [
            'nombre' => 'Lotes Uruguay',
            'vertical' => 'bienes-raices',
            'ubicacion' => 'Montevideo y Canelones, Uruguay',
            'estado' => 'En comercialización',
            'descripcion' => [
                'El grupo comercializa cuatro lotes en distintas localizaciones de Uruguay, fuera de los fraccionamientos de marca propia (El Terruño, Jardines de Acuario). Cada lote tiene su propia ubicación en KMZ para Google Earth; el de Montevideo Rural de 11 ha es el único con foto y plano propios.',
            ],
            'tabla' => [
                'encabezados' => ['Ubicación', 'Superficie'],
                'filas' => [
                    ['Montevideo Rural', '43 ha 4.742 m²'],
                    ['Montevideo Rural', '11 ha'],
                    ['Ciudad de la Costa — suburbano, Av. Calcagno', '2 ha 3.813 m²'],
                    ['Canelones Rural', '21 ha 9.817 m² y 7 ha 2.250 m²'],
                ],
            ],
        ],
        'pueblo-de-mar' => [
            'nombre' => 'Pueblo de Mar — Jaureguiberry',
            'vertical' => 'bienes-raices',
            'ubicacion' => 'Jaureguiberry, Uruguay',
            'estado' => 'En desarrollo',
            'descripcion' => [
                'Pueblo de Mar es un complejo turístico y de viviendas unifamiliares sobre un predio de 20 hectáreas, con 180 metros de frente de playa y bajada directa al mar para todos los propietarios. El proyecto se divide en 166 lotes en propiedad horizontal, con solares de 500 m² en promedio y todas las instalaciones subterráneas resueltas.',
                'La arquitectura y los jardines están regulados por comisiones propias del desarrollo, para sostener un estándar de construcción uniforme en armonía con el entorno natural. El acceso es controlado las 24 horas sobre la Ruta Interbalnearia.',
            ],
            'cifras' => [
                ['valor' => '20 ha', 'label' => 'predio total'],
                ['valor' => '180 m', 'label' => 'frente de playa'],
                ['valor' => '166', 'label' => 'lotes en propiedad horizontal'],
            ],
            'sitio_propio' => 'pueblodemar.uy',
        ],
        'distrito-lambare' => [
            'nombre' => 'Distrito Lambaré',
            'vertical' => 'bienes-raices',
            'ubicacion' => 'Lambaré, Paraguay',
            'descripcion' => [
                'Distrito Lambaré es un desarrollo del grupo en Paraguay, con una superficie de 1 hectárea, 5.418 m² y 5.603 cm², lindero al ensanche de la Avenida Presidente Juan Domingo Perón.',
            ],
        ],
        'unidad-industrial-cerro-largo' => [
            'nombre' => 'Unidad industrial — Cerro Largo',
            'vertical' => 'bienes-raices',
            'ubicacion' => 'Paraje Tres Islas, Cerro Largo, Uruguay',
            'estado' => 'En operación',
            'descripcion' => [
                'Ubicado en el paraje Tres Islas, a 65 km de Melo y 365 km de Montevideo, es un complejo agroindustrial de 8 hectáreas dedicado al recibo, secado y almacenaje de cereales y oleaginosos. Cuenta con tres secadores de 170 toneladas de capacidad estática, que secan en promedio 510 toneladas diarias, y tres tolvas de recibo con prelimpieza propia. La capacidad de almacenaje es de 12.000 toneladas (10.500 en silos y 1.500 en galpones).',
                'El complejo integra además una industria arrocera de 3 toneladas por hora, con descascarado, pulido de 4 pasos y separación de grano entero y quebrado, más 1.500 toneladas de capacidad para productos terminados, un laboratorio de análisis de grano con balanza para camiones, y vivienda para el personal de gerencia.',
            ],
            'cifras' => [
                ['valor' => '8 ha', 'label' => 'complejo agroindustrial'],
                ['valor' => '12.000 t', 'label' => 'capacidad de almacenaje'],
                ['valor' => '510 t/día', 'label' => 'capacidad de secado'],
            ],
        ],
        'jardines-de-acuario' => [
            'nombre' => 'Jardines de Acuario',
            'vertical' => 'bienes-raices',
            'ubicacion' => 'Maldonado, Uruguay',
            'estado' => 'En desarrollo',
            'descripcion' => [
                'Jardines de Acuario es un fraccionamiento residencial a diez minutos de Punta del Este y a dos minutos de la playa mansa, con paisajismo y diseño pensado bajo criterios de sustentabilidad. Forma parte de la cartera de bienes raíces del grupo en la costa uruguaya, uno de los sectores con mayor volumen de proyectos individuales dentro del holding.',
            ],
        ],
    ],

];
