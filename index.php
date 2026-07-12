<?php
$empresa = [
    'nombre'    => 'JR Services SpA',
    'slogan'    => 'Soluciones Integrales',
    'subtitulo' => 'Tu proveedor confiable',
    'telefono1' => '+56 946968948',
    'telefono2' => '+56 969050605',
    'email'     => 'sistem23sisten@gmail.com',
    'facebook'  => 'JR Cervices Spa',
    'direccion' => 'Cerro el Plomo 5931 Of 1213',
];

$vision = 'Convertirnos en una empresa de referencia en el área de servicios integrales con expansión a nivel nacional, aportando soluciones profesionales enfocadas en la calidad y excelencia con rápida gestión y acción.';

$mision = 'Brindar un excelente servicio en diversas áreas y satisfacer las necesidades principales de nuestros clientes aportando soluciones profesionales de alta calidad, cumpliendo con los tiempos de entrega establecidos, promoviendo una buena relación cliente-proveedor con miras a lograr una fidelización comercial.';

$productos_principales = [
    [
        'icono' => '🔒',
        'nombre' => 'Seguridad Perimetral',
        'desc' => 'Protegemos tu hogar, local o empresa con cámaras, alarmas y cercos eléctricos instalados por nuestros especialistas.',
    ],
    [
        'icono' => '🛠️',
        'nombre' => 'Servicios Integrales',
        'desc' => 'Un solo proveedor para todas tus necesidades. Coordinamos todo para que tú no tengas que preocuparte de nada.',
    ],
    [
        'icono' => '❄️',
        'nombre' => 'Climatización',
        'desc' => 'Instalamos tu aire acondicionado de forma profesional, con la marca y el equipo que mejor se adapta a tu espacio.',
    ],
    [
        'icono' => '🏠',
        'nombre' => 'Domótica',
        'desc' => 'Convierte tu hogar o local en un espacio inteligente: controla luces, accesos y más desde tu celular.',
    ],
    [
        'icono' => '💻',
        'nombre' => 'Computación',
        'desc' => 'Reparamos, configuramos y optimizamos tus equipos. También asesoramos en compras para que elijas bien.',
    ],
    [
        'icono' => '🌐',
        'nombre' => 'Redes LAN',
        'desc' => 'Diseñamos e instalamos tu red cableada o inalámbrica para que tengas conectividad estable en todo tu espacio.',
    ],
];

$seguridad = [
    [
        'titulo' => 'Cámaras de Seguridad IP-Análogas',
        'desc'   => 'Sistema CCTV para empresas, locales comerciales, galpones, parcelas, domicilios, entre otros.',
    ],
    [
        'titulo' => 'Alarmas Contra Intrusos',
        'desc'   => 'Sistemas de alarmas inalámbrico y cableados, alarmas comunitarias, botón de pánico.',
    ],
    [
        'titulo' => 'Cercos Electrónicos Perimetrales',
        'desc'   => 'Cercos electrónicos y barreras foto magnéticas.',
    ],
    [
        'titulo' => 'Controles de Accesos',
        'desc'   => 'Puertas automáticas, retenedores, brazos hidráulicos, sensor biométrico, automatización de accesos.',
    ],
    [
        'titulo' => 'Puertas Automáticas',
        'desc'   => 'Botón de apertura y cierre, video porteros, intercomunicador wifi.',
    ],
];

$nuevos_productos = [
    [
        'titulo' => 'Domótica',
        'desc'   => 'Automatización de sistemas de dispositivos electrónicos, especialmente para domicilios, locales y otros escenarios.',
        'icono'  => '🏡',
        'imagen' => 'assets/nuevo-bg-domotica.jpg',
        'caracteristicas' => [
            'Control de luces, persianas y enchufes desde el celular',
            'Integración con asistentes de voz (Google Home, Alexa)',
            'Escenas y automatizaciones programables, como "modo noche"',
            'Instalación sin obra mayor, compatible con instalaciones existentes',
        ],
    ],
    [
        'titulo' => 'Instalación de Equipos',
        'desc'   => 'Instalamos equipos electrónicos y eléctricos, montaje de equipamiento tecnológico.',
        'icono'  => '⚙️',
        'imagen' => 'assets/nuevo-bg-instalacion.jpg',
        'caracteristicas' => [
            'Montaje de equipos eléctricos y electrónicos certificado',
            'Conexión, configuración y pruebas de funcionamiento incluidas',
            'Soporte técnico posterior a la instalación',
            'Para hogares, oficinas y locales comerciales',
        ],
    ],
    [
        'titulo' => 'Remodelación de Interiores',
        'desc'   => 'Instalación de láminas acrílicas, pintura y renovaciones menores, yeso, masilla, instalación de mobiliario.',
        'icono'  => '🪟',
        'imagen' => 'assets/nuevo-bg-remodelacion.jpg',
        'caracteristicas' => [
            'Instalación de láminas acrílicas y revestimientos',
            'Pintura interior y exterior con materiales de calidad',
            'Reparaciones menores: yeso, masilla y terminaciones',
            'Instalación de mobiliario y estructuras livianas',
        ],
    ],
    [
        'titulo' => 'Pintura, Demarcaciones y Señaléticas',
        'desc'   => 'Rallados y demarcaciones con materiales acrílicos de alto tráfico, pintura para estructuras, muros y techos.',
        'icono'  => '🖌️',
        'imagen' => 'assets/nuevo-bg-pintura.jpg',
        'caracteristicas' => [
            'Demarcación de estacionamientos y zonas de tránsito',
            'Pintura para pisos de alto tráfico (bodegas, estacionamientos)',
            'Señalética normativa y de seguridad',
            'Materiales acrílicos resistentes a la intemperie',
        ],
    ],
    [
        'titulo' => 'Metalúrgica',
        'desc'   => 'Soldadura profesional en bronce, plata, aluminio, acero inoxidable, eléctrica y distintos materiales de fundición.',
        'icono'  => '🔩',
        'imagen' => 'assets/nuevo-bg-metalurgia.jpg',
        'caracteristicas' => [
            'Soldadura en bronce, plata, aluminio y acero inoxidable',
            'Fabricación y reparación de estructuras metálicas',
            'Trabajos a medida según especificación del cliente',
            'Atención para proyectos industriales y residenciales',
        ],
    ],
];

$alianzas = [
    [
        'titulo' => 'Electrónica',
        'desc'   => 'Soluciones electrónicas, reparación de tarjetas y reemplazo de componentes con soporte técnico especializado.',
        'icono'  => '🔌',
    ],
    [
        'titulo' => 'Gasfitería',
        'desc'   => 'Venta, instalación y mantención de equipamiento de gasfitería, calefacción y aguas grises.',
        'icono'  => '🔧',
    ],
    [
        'titulo' => 'Textil y Serigrafía',
        'desc'   => 'Venta de uniformes, serigrafía, impresión gráfica, plóter de corte entre otros servicios relacionados.',
        'icono'  => '👕',
    ],
    [
        'titulo' => 'Metalúrgica y Montajes',
        'desc'   => 'Soldaduras profesionales en bronce, aluminio, cobre, plata, acero inoxidable. Montajes de equipamiento eléctrico y estructuras metálicas.',
        'icono'  => '🏗️',
    ],
];

$marcas = [
    [
        'nombre'   => 'Hikvision',
        'categoria'=> 'Cámaras de Seguridad',
        'desc'     => 'Por su gran calidad y tecnología de punta, Hikvision es nuestra marca preferida. Ofrece excelente garantía y muy buen soporte técnico.',
    ],
    [
        'nombre'   => 'Dahua Technology',
        'categoria'=> 'Cámaras de Seguridad',
        'desc'     => 'Tecnología de punta con un software amigable y completo, ideal para sistemas medianos y pequeños.',
    ],
    [
        'nombre'   => 'Midea',
        'categoria'=> 'Climatización',
        'desc'     => 'Marca líder en Chile en electrodomésticos. Con alianza con Carrier, crearon la línea Midea Clima con excelente calidad y distribución nacional.',
    ],
    [
        'nombre'   => 'Clark Air Conditioning',
        'categoria'=> 'Climatización y Refrigeración',
        'desc'     => 'Especialistas en clima y refrigeración con equipamiento de excelente calidad, precio competitivo y distribución a nivel nacional.',
    ],
];

$zonas = [
    ['nombre' => 'Región Metropolitana', 'desc' => 'Zona principal de operación', 'principal' => true],
    ['nombre' => 'Región de Valparaíso', 'desc' => 'Litoral y Zona Costera', 'principal' => false],
    ['nombre' => 'Región O\'Higgins', 'desc' => 'Comunas Centro-Norte de la Región', 'principal' => false],
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($empresa['nombre']) ?> — <?= htmlspecialchars($empresa['slogan']) ?></title>
    <meta name="description" content="JR Services SpA — Tu proveedor confiable de soluciones integrales en seguridad, climatización, domótica, redes y más.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aldrich&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- ===== NAVBAR ===== -->
<header class="navbar" id="navbar">
    <div class="container navbar__inner">
        <a href="#inicio" class="navbar__logo">
            <img src="assets/jr-services-logo-nav.png" alt="JR Services SpA" class="logo-img logo-img--nav">
        </a>
        <nav class="navbar__nav" id="main-nav">
            <a href="#nosotros">Nosotros</a>
            <a href="#productos">Productos</a>
            <a href="#seguridad">Seguridad</a>
            <a href="#alianzas">Alianzas</a>
            <a href="#marcas">Marcas</a>
            <a href="#cobertura">Cobertura</a>
        </nav>
        <button class="hamburger" id="hamburger" aria-label="Menú">
            <span></span><span></span><span></span>
        </button>
    </div>
</header>

<!-- ===== HERO ===== -->
<section class="hero" id="inicio">
    <div class="hero__bg-shapes" aria-hidden="true">
        <div class="shape shape--1"></div>
        <div class="shape shape--2"></div>
    </div>
    <div class="container hero__content">
        <img src="assets/jr-services-logo.png" alt="JR Services SpA" class="hero__logo">
        <p class="hero__eyebrow">Tu proveedor confiable</p>
        <h1 class="hero__title">
            Soluciones<br>
            <span class="hero__accent">Integrales</span>
        </h1>
        <p class="hero__sub">Seguridad, climatización, domótica, redes y mucho más — todo en un solo proveedor.</p>
        <div class="hero__ctas">
            <a href="#contacto" class="btn btn--red">Cotizar ahora</a>
            <a href="#productos" class="btn btn--outline">Ver servicios</a>
        </div>
    </div>
    <div class="hero__scroll-hint" aria-hidden="true">
        <span></span>
    </div>
</section>

<!-- ===== VISIÓN Y MISIÓN ===== -->
<section class="section vm-section" id="nosotros">
    <div class="container">
        <h2 class="section-title">Visión <span>&</span> Misión</h2>
        <div class="vm-grid">
            <div class="vm-card">
                <div class="vm-card__icon" aria-hidden="true">👁️</div>
                <h3>Visión</h3>
                <p><?= htmlspecialchars($vision) ?></p>
            </div>
            <div class="vm-card vm-card--accent">
                <div class="vm-card__icon" aria-hidden="true">🎯</div>
                <h3>Misión</h3>
                <p><?= htmlspecialchars($mision) ?></p>
            </div>
        </div>
    </div>
</section>

<!-- ===== PRODUCTOS PRINCIPALES ===== -->
<section class="section productos-section" id="productos">
    <div class="container">
        <h2 class="section-title">Servicios <span>Principales</span></h2>
        <div class="productos-grid">
            <?php foreach ($productos_principales as $p): ?>
            <div class="producto-card"
                 tabindex="0"
                 role="button"
                 aria-haspopup="dialog"
                 data-titulo="<?= htmlspecialchars($p['nombre']) ?>"
                 data-icono="<?= htmlspecialchars($p['icono']) ?>"
                 data-desc="<?= htmlspecialchars($p['desc']) ?>">
                <span class="producto-card__icon" aria-hidden="true"><?= $p['icono'] ?></span>
                <div class="producto-card__body">
                    <span class="producto-card__nombre"><?= htmlspecialchars($p['nombre']) ?></span>
                    <span class="producto-card__ver-mas">Ver más →</span>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ===== SEGURIDAD DIGITAL ===== -->
<section class="section seguridad-section" id="seguridad">
    <div class="container">
        <h2 class="section-title">Seguridad <span>Digital</span></h2>
        <div class="seguridad-list">
            <?php foreach ($seguridad as $i => $item): ?>
            <div class="seguridad-item" data-index="<?= $i + 1 ?>">
                <div class="seguridad-item__check" aria-hidden="true">✓</div>
                <div class="seguridad-item__body">
                    <h3><?= htmlspecialchars($item['titulo']) ?></h3>
                    <p><?= htmlspecialchars($item['desc']) ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ===== NUEVOS PRODUCTOS ===== -->
<section class="section nuevos-section" id="nuevos">
    <div class="container">
        <h2 class="section-title">Nuestros <span>Nuevos Servicios</span></h2>
        <div class="nuevos-grid">
            <?php foreach ($nuevos_productos as $np): ?>
            <div class="nuevo-card"
                 tabindex="0"
                 role="button"
                 aria-haspopup="dialog"
                 style="background-image: url('<?= htmlspecialchars($np['imagen']) ?>')"
                 data-titulo="<?= htmlspecialchars($np['titulo']) ?>"
                 data-icono="<?= htmlspecialchars($np['icono']) ?>"
                 data-desc="<?= htmlspecialchars($np['desc']) ?>"
                 data-caracteristicas='<?= htmlspecialchars(json_encode($np['caracteristicas']), ENT_QUOTES) ?>'>
                <div class="nuevo-card__overlay" aria-hidden="true"></div>
                <div class="nuevo-card__content">
                    <div class="nuevo-card__icono" aria-hidden="true"><?= $np['icono'] ?></div>
                    <h3><?= htmlspecialchars($np['titulo']) ?></h3>
                    <p><?= htmlspecialchars($np['desc']) ?></p>
                    <span class="nuevo-card__ver-mas">Ver más →</span>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ===== SERVICIOS INTEGRALES ===== -->
<section class="section integrales-section">
    <div class="container integrales-inner">
        <div class="integrales-brand">
            <div class="integrales-brand__badge">
                <img src="assets/jr-services-logo.png" alt="JR Services SpA" class="integrales-brand__icon">
            </div>
            <h2 class="integrales-brand__title">Servicios <span>Integrales</span></h2>
        </div>
        <p class="integrales-text__desc">
            Un producto creado pensando en nuestros clientes. Nos permite brindar soluciones en áreas distintas a nuestros productos principales. Hemos creado alianzas comerciales con emprendedores especialistas en distintas materias, lo que nos permite ofrecer una solución rápida y confiable con precio justo y competitivo — bajo nuestra supervisión, garantizando la calidad. <strong>Todo en un mismo proveedor.</strong>
        </p>
        <div class="integrales-visual" aria-hidden="true">
            <div class="integrales-badge">1 proveedor</div>
            <div class="integrales-badge integrales-badge--2">Múltiples soluciones</div>
            <div class="integrales-badge integrales-badge--3">Calidad garantizada</div>
        </div>
    </div>
</section>

<!-- ===== ALIANZAS COMERCIALES ===== -->
<section class="section alianzas-section" id="alianzas">
    <div class="container">
        <h2 class="section-title">Nuestras <span>Alianzas Comerciales</span></h2>
        <div class="alianzas-grid">
            <?php foreach ($alianzas as $a): ?>
            <div class="alianza-card">
                <div class="alianza-card__icono" aria-hidden="true"><?= $a['icono'] ?></div>
                <h3><?= htmlspecialchars($a['titulo']) ?></h3>
                <p><?= htmlspecialchars($a['desc']) ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ===== MARCAS ===== -->
<section class="section marcas-section" id="marcas">
    <div class="container">
        <h2 class="section-title">Marcas en las que <span>Somos Especialistas</span></h2>
        <div class="marcas-grid">
            <?php
            $logos_marcas = [
                'Hikvision'        => 'assets/hikvisions.png',
                'Dahua Technology' => 'assets/alhua.png',
                'Midea'            => 'assets/midea.png',
                'Clark Air Conditioning' => 'assets/clark.png',
            ];
            foreach ($marcas as $m):
                $logo_src = $logos_marcas[$m['nombre']] ?? null;
            ?>
            <div class="marca-card">
                <p class="marca-card__categoria"><?= htmlspecialchars($m['categoria']) ?></p>
                <?php if ($logo_src): ?>
                <img src="<?= htmlspecialchars($logo_src) ?>" alt="Logo <?= htmlspecialchars($m['nombre']) ?>" class="marca-card__logo">
                <?php else: ?>
                <h3 class="marca-card__nombre"><?= htmlspecialchars($m['nombre']) ?></h3>
                <?php endif; ?>
                <p class="marca-card__desc"><?= htmlspecialchars($m['desc']) ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ===== COBERTURA ===== -->
<section class="section cobertura-section" id="cobertura">
    <div class="container">
        <h2 class="section-title">Zona de <span>Atención</span></h2>
        <p class="cobertura-intro">Principalmente nos concentramos en la Región Metropolitana. Podemos extender nuestros servicios a zonas vecinas con planificación previa.</p>
        <div class="zonas-grid">
            <?php foreach ($zonas as $z): ?>
            <div class="zona-card <?= $z['principal'] ? 'zona-card--principal' : '' ?>">
                <div class="zona-card__pin" aria-hidden="true">📍</div>
                <h3><?= htmlspecialchars($z['nombre']) ?></h3>
                <p><?= htmlspecialchars($z['desc']) ?></p>
                <?php if ($z['principal']): ?>
                <span class="zona-badge">Zona Principal</span>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ===== CONTACTO ===== -->
<section class="section contacto-section" id="contacto">
    <div class="container contacto-inner">
        <div class="contacto-info">
            <h2>Contáctanos</h2>
            <p>Atendemos las 24 horas del día a través de nuestras redes sociales, correo electrónico o WhatsApp.</p>
            <ul class="contacto-list">
                <li>
                    <span class="contacto-list__icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.36 11.36 0 003.56.57 1 1 0 011 1V21a1 1 0 01-1 1A17 17 0 013 5a1 1 0 011-1h3.5a1 1 0 011 1c0 1.25.2 2.45.57 3.57a1 1 0 01-.25 1.01l-2.2 2.21z" fill="#CC1414"/></svg>
                    </span>
                    <div>
                        <a href="tel:<?= preg_replace('/\s+/', '', $empresa['telefono1']) ?>"><?= htmlspecialchars($empresa['telefono1']) ?></a>
                        
                    </div>
                </li>
                <li>
                    <span class="contacto-list__icon" aria-hidden="true">
                        <img src="assets/icon-gmail.svg" alt="Gmail">
                    </span>
                    <a href="mailto:<?= htmlspecialchars($empresa['email']) ?>"><?= htmlspecialchars($empresa['email']) ?></a>
                </li>
                <li>
                    <span class="contacto-list__icon" aria-hidden="true">
                        <img src="assets/icon-facebook.svg" alt="Facebook">
                    </span>
                    <span><a href="https://www.facebook.com/profile.php?id=61557084193563#"><?= htmlspecialchars($empresa['facebook']) ?></a></span>
                </li>
                <li>
                    <span class="contacto-list__icon" aria-hidden="true">
                        <img src="assets/icon-instagram.svg" alt="Instagram">
                    </span>
                    <span><a href="https://www.instagram.com/jrservices.ven/">Jrservices.ven</a></span>
                </li>
                <li>
                    <span class="contacto-list__icon" aria-hidden="true">
                        <img src="assets/icon-googlemaps.svg" alt="Google Maps">
                    </span>
                    <span><?= htmlspecialchars($empresa['direccion']) ?></span>
                </li>
            </ul>
        </div>
        <form class="contacto-form" id="contacto-form" novalidate data-whatsapp="<?= preg_replace('/\D+/', '', $empresa['telefono1']) ?>">
            <h3>Envíanos un mensaje</h3>
            <div class="form-row">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" required>
                </div>
                <div class="form-group">
                    <label for="comuna">Comuna</label>
                    <input type="text" id="comuna" name="comuna" placeholder="Tu comuna">
                </div>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="tu@email.com" required>
            </div>
            <div class="form-group">
                <label for="servicio">Servicio de interés</label>
                <select id="servicio" name="servicio">
                    <option value="">Selecciona un servicio</option>
                    <?php foreach ($productos_principales as $p): ?>
                    <option value="<?= htmlspecialchars($p['nombre']) ?>"><?= htmlspecialchars($p['nombre']) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="mensaje">Mensaje</label>
                <textarea id="mensaje" name="mensaje" rows="4" placeholder="¿En qué podemos ayudarte?" required></textarea>
            </div>
            <button type="submit" class="btn btn--red btn--full">Enviar por WhatsApp</button>
            <p class="form-notice" id="form-notice" aria-live="polite"></p>
        </form>
    </div>
</section>

<!-- ===== FOOTER ===== -->
<footer class="footer">
    <div class="container footer__inner">
        <div class="footer__brand">
            <img src="assets/jr-services-logo.png" alt="JR Services SpA logo" class="logo-img logo-img--sm">
            <span>JR<strong>SERVICES</strong> SpA</span>
        </div>
        <p class="footer__copy">&copy; <?= date('Y') ?> <?= htmlspecialchars($empresa['nombre']) ?>. Todos los derechos reservados.</p>
        <nav class="footer__nav">
            <a href="#nosotros">Nosotros</a>
            <a href="#productos">Productos</a>
            <a href="#contacto">Contacto</a>
        </nav>
    </div>
</footer>

<a href="#contacto" class="fab" aria-label="Contactar por WhatsApp" title="WhatsApp">
    <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
    </svg>
</a>

<!-- ===== MODAL: SERVICIOS PRINCIPALES ===== -->
<div class="modal-overlay" id="producto-modal" aria-hidden="true">
    <div class="modal-box" role="dialog" aria-modal="true" aria-labelledby="producto-modal-title">
        <button type="button" class="modal-close" id="producto-modal-close" aria-label="Cerrar">&times;</button>
        <div class="modal-icono" id="producto-modal-icono" aria-hidden="true"></div>
        <h3 class="modal-title" id="producto-modal-title"></h3>
        <p class="modal-desc" id="producto-modal-desc"></p>
        <a href="#contacto" class="btn btn--red btn--full modal-cta" id="producto-modal-cta">Cotizar este servicio</a>
    </div>
</div>

<!-- ===== MODAL: NUEVOS PRODUCTOS ===== -->
<div class="modal-overlay" id="nuevo-modal" aria-hidden="true">
    <div class="modal-box" role="dialog" aria-modal="true" aria-labelledby="nuevo-modal-title">
        <button type="button" class="modal-close" id="nuevo-modal-close" aria-label="Cerrar">&times;</button>
        <div class="modal-icono" id="nuevo-modal-icono" aria-hidden="true"></div>
        <h3 class="modal-title" id="nuevo-modal-title"></h3>
        <p class="modal-desc" id="nuevo-modal-desc"></p>
        <ul class="modal-features" id="nuevo-modal-features"></ul>
        <a href="#contacto" class="btn btn--red btn--full modal-cta" id="nuevo-modal-cta">Solicitar este servicio</a>
    </div>
</div>

<script src="main.js"></script>
</body>
</html>
