<?php
/**
 * Gasfiter Autorizado Certificado SEC - Landing Page Principal
 */
$page_title = "Gasfiter Autorizado Certificado SEC | Fugas de Gas, Calefont y Destapes 24/7";
$page_description = "Central Gasfiter Autorizado Certificado SEC en Santiago y Regiones. Detección electrónica de fugas de gas con gas trazador, sellado Prodoral R200 sin romper, mantención de calefont y destapes hidrojet. Llegada rápida 24/7. Llame al 9 3223 7072.";
$page_type = "home";

// Frequently Asked Questions for SEO and UI
$faqs = [
  [
    "question" => "¿Qué respaldo legal y normativo ofrece un Gasfiter Autorizado SEC?",
    "answer" => "Un Gasfiter Autorizado por la SEC cuenta con licencia oficial expedida por la Superintendencia de Electricidad y Combustibles bajo el Decreto Supremo Nº 66. Esto garantiza que cada trabajo en gas, matrices o artefactos cumple con las normas chilenas de seguridad, pruebas de hermeticidad y habilitación para emisión de Sello Verde y certificados TC6."
  ],
  [
    "question" => "¿Cómo detectan una fuga de gas sin romper muros ni pisos?",
    "answer" => "Empleamos tecnología avanzada de Gas Trazador (mezcla de nitrógeno e hidrógeno al 95%/5%) y detectores electrónicos electroacústicos que captan la fuga en superficie con precisión milimétrica. Para reparar sin picar baldosas ni radier, aplicamos el sellado polimérico alemán Prodoral R200."
  ],
  [
    "question" => "¿Cuál es el tiempo de respuesta ante una urgencia de gas o agua?",
    "answer" => "Nuestras unidades móviles de guardia están activas 24/7 y distribuidas en puntos estratégicos de Santiago y regiones. El tiempo de llegada promedio es de 30 a 45 minutos tras recibir su llamado al 9 3223 7072."
  ],
  [
    "question" => "¿Cómo se presupuestan los trabajos a domicilio?",
    "answer" => "Todos los presupuestos se determinan en terreno tras la evaluación diagnóstica del especialista SEC. Antes de iniciar cualquier labor, se le presenta un presupuesto claro y cerrado para su conformidad, sin cobros ocultos ni sorpresas."
  ],
  [
    "question" => "¿Qué marcas de calefont y calderas reparan?",
    "answer" => "Realizamos servicio técnico multimarca oficial para Junkers, Rheem, Splendid, Neckar, Mademsa, Trotter, Bosch y calderas murales para gas licuado y gas natural."
  ]
];

include_once __DIR__ . '/includes/header.php';
include_once __DIR__ . '/includes/faq-schema.php';
?>

<!-- =========================================================================
     HERO SECTION
     ========================================================================= -->
<section class="hero-section" aria-label="Sección Principal">
  <div class="container">
    <div class="hero-grid">
      <!-- Left Content -->
      <div class="hero-content">
        <div class="hero-badge-sec">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
          Instalador Autorizado Clase 1 SEC Chile
        </div>

        <h1 class="hero-title">
          Gasfiter Autorizado <span class="highlight-sec">Certificado SEC</span> y Especialista a Domicilio
        </h1>

        <p class="hero-subtitle">
          Soluciones de alta precisión y seguridad certificada 24/7 en Santiago y Regiones. Detección no invasiva con <strong>Gas Trazador</strong>, sellado <strong>Prodoral R200 sin romper</strong>, mantención de calefont y destapes con hidrojet.
        </p>

        <!-- Bullet Highlights -->
        <ul class="hero-features-list">
          <li class="hero-feature-item">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
            Llegada urgente en 30 a 45 min
          </li>
          <li class="hero-feature-item">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
            Detección con Gas Trazador & Ultrasonido
          </li>
          <li class="hero-feature-item">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
            Sellado Prodoral R200 sin romper pisos
          </li>
          <li class="hero-feature-item">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
            Garantía escrita y Boleta/Factura
          </li>
        </ul>

        <!-- Action Buttons -->
        <div class="hero-cta-group">
          <a href="tel:932237072" class="btn-hero-primary" aria-label="Llamar de Urgencia al 9 3223 7072">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
            Llamar al 9 3223 7072
          </a>
          <a href="cotizar.php" class="btn-hero-secondary">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
            Cotizar Presupuesto
          </a>
        </div>
      </div>

      <!-- Right Visual Card -->
      <div class="hero-visual-card">
        <div class="hero-main-img-wrapper">
          <img src="assets/images/hero-home-main.png" alt="Gasfiter Autorizado Certificado SEC en Terreno" class="hero-main-img" width="580" height="340">
        </div>

        <!-- Floating Official SEC Badge -->
        <div class="hero-sec-floating-badge">
          <img src="assets/images/qr-sec.png" alt="QR de Verificación SEC" class="sec-badge-qr" width="50" height="50">
          <div class="sec-badge-text">
            <strong>Certificación SEC Activa</strong>
            <span>Registro Superintendencia SEC</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- =========================================================================
     LIVE TRUST STATS BAR
     ========================================================================= -->
<section class="stats-bar-section" aria-label="Estadísticas de Confianza">
  <div class="container">
    <div class="stats-grid">
      <div class="stat-item">
        <div class="stat-number">+40 <span>Años</span></div>
        <div class="stat-label">De Experiencia y Trayectoria</div>
      </div>
      <div class="stat-item">
        <div class="stat-number">100% <span>SEC</span></div>
        <div class="stat-label">Instaladores Autorizados</div>
      </div>
      <div class="stat-item">
        <div class="stat-number">30-45 <span>Min</span></div>
        <div class="stat-label">Tiempo Promedio de Respuesta</div>
      </div>
      <div class="stat-item">
        <div class="stat-number">+900k <span>Atenciones</span></div>
        <div class="stat-label">Clientes Satisfechos</div>
      </div>
    </div>
  </div>
</section>

<!-- =========================================================================
     ADVANCED TECHNOLOGY & EQUIPMENT SECTION
     ========================================================================= -->
<section class="section-padding" style="background: var(--bg-body);" aria-label="Tecnología y Equipamiento">
  <div class="container">
    <div class="section-header">
      <span class="section-tag">Equipamiento de Vanguardia</span>
      <h2 class="section-title">Tecnología de Precisión para Diagnósticos No Invasivos</h2>
      <p class="section-desc">
        Equipos de última generación para detectar y reparar fugas de gas y agua sin romper muros, pisos ni alterar la arquitectura de tu inmueble.
      </p>
    </div>

    <div class="tech-grid">
      <!-- Tech 1: Gas Trazador -->
      <div class="tech-card gas-tech">
        <div class="tech-icon-wrapper">💨</div>
        <h3 class="tech-card-title">Gas Trazador (N₂/H₂)</h3>
        <p class="tech-card-desc">
          Mezcla de nitrógeno e hidrógeno al 95%/5% inodora y no inflamable, inyectada a la red de gas para rastrear microfugas invisibles con sensores electroquímicos de precisión milimétrica.
        </p>
        <ul class="tech-benefits-list">
          <li class="tech-benefit-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
            Detecta fugas en redes subterráneas
          </li>
          <li class="tech-benefit-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
            Sin picar muros ni pavimentos
          </li>
        </ul>
      </div>

      <!-- Tech 2: Prodoral R200 -->
      <div class="tech-card">
        <div class="tech-icon-wrapper">🧪</div>
        <h3 class="tech-card-title">Sellado Prodoral R200</h3>
        <p class="tech-card-desc">
          Tecnología alemana homologada por la SEC. Polímero líquido que se inyecta y purga por el interior de las cañerías de gas, sellando uniones roscadas y porosidades de por vida.
        </p>
        <ul class="tech-benefits-list">
          <li class="tech-benefit-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
            Ahorro de hasta un 70% vs romper
          </li>
          <li class="tech-benefit-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
            Aprobación inmediata para Sello Verde
          </li>
        </ul>
      </div>

      <!-- Tech 3: Cámara Térmica -->
      <div class="tech-card water-tech">
        <div class="tech-icon-wrapper">🌡️</div>
        <h3 class="tech-card-title">Cámara Térmica Infrarroja</h3>
        <p class="tech-card-desc">
          Termografía de alta resolución para visualizar gradientes térmicos en cañerías de agua caliente, losas radiantes y tuberías empotradas, localizando humedades ocultas al instante.
        </p>
        <ul class="tech-benefits-list">
          <li class="tech-benefit-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
            Inspección no destructiva
          </li>
          <li class="tech-benefit-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
            Ideal para calefacción central y radier
          </li>
        </ul>
      </div>

      <!-- Tech 4: Ultrasonido & Geófono -->
      <div class="tech-card water-tech">
        <div class="tech-icon-wrapper">🎧</div>
        <h3 class="tech-card-title">Ultrasonido & Geófono Acústico</h3>
        <p class="tech-card-desc">
          Amplificación acústica de frecuencia digital para escuchar el escape de agua a presión a través de concreto, tierra o baldosas, fijando el punto exacto de la rotura.
        </p>
        <ul class="tech-benefits-list">
          <li class="tech-benefit-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
            Evita roturas innecesarias en pisos
          </li>
          <li class="tech-benefit-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
            Efectivo en redes de cobre, PPR y PEX
          </li>
        </ul>
      </div>

      <!-- Tech 5: Hidrojet de Alta Presión -->
      <div class="tech-card">
        <div class="tech-icon-wrapper">🌊</div>
        <h3 class="tech-card-title">Hidrojet de Alta Presión</h3>
        <p class="tech-card-desc">
          Chorro de agua a más de 3.500 PSI con toberas rotativas que trituran grasas compactadas, raíces, sarro y sedimentos en alcantarillados y colectores comerciales.
        </p>
        <ul class="tech-benefits-list">
          <li class="tech-benefit-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
            Limpieza al 100% del diámetro
          </li>
          <li class="tech-benefit-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
            Desobstrucción garantizada
          </li>
        </ul>
      </div>

      <!-- Tech 6: Video Inspección CCTV -->
      <div class="tech-card">
        <div class="tech-icon-wrapper">📹</div>
        <h3 class="tech-card-title">Video Inspección CCTV Robotizada</h3>
        <p class="tech-card-desc">
          Sonda de fibra óptica con cabezal orientable 360° e iluminación LED para recorrer el interior de las cañerías y grabar en video Full HD el estado real de la red.
        </p>
        <ul class="tech-benefits-list">
          <li class="tech-benefit-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
            Informe técnico visual en pendrive/email
          </li>
          <li class="tech-benefit-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
            Localización de fisuras y desacoples
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- =========================================================================
     CORE SERVICES CATALOG
     ========================================================================= -->
<section class="section-padding services-section" id="servicios" aria-label="Servicios Principales">
  <div class="container">
    <div class="section-header">
      <span class="section-tag">Nuestras Especialidades</span>
      <h2 class="section-title">Servicios de Gasfitería Autorizada SEC</h2>
      <p class="section-desc">
        Soluciones integrales de máxima seguridad para hogares, edificios residenciales, locales comerciales e industrias.
      </p>
    </div>

    <div class="services-grid">
      <!-- Service 1 -->
      <article class="service-card">
        <div class="service-card-img-wrap">
          <img src="assets/images/hero-fuga-gas.png" alt="Detección de Fugas de Gas 24/7" class="service-card-img" width="400" height="210">
          <span class="service-badge" style="background: var(--safety-red);">Urgencias 24/7</span>
        </div>
        <div class="service-card-body">
          <h3 class="service-card-title">Detección y Reparación de Fugas de Gas</h3>
          <p class="service-card-text">
            Inspección de hermeticidad con Gas Trazador, reparación inmediata de cañerías de cobre o fierro galvanizado, cambio de llaves de paso y normalización ante cortes de suministro.
          </p>
          <a href="fuga-de-gas.php" class="service-card-link">
            Ver detalles del servicio →
          </a>
        </div>
      </article>

      <!-- Service 2 -->
      <article class="service-card">
        <div class="service-card-img-wrap">
          <img src="assets/images/hero-prodoral.png" alt="Sellado Prodoral R200 sin picar" class="service-card-img" width="400" height="210">
          <span class="service-badge" style="background: var(--accent-blue);">Tecnología Alemana</span>
        </div>
        <div class="service-card-body">
          <h3 class="service-card-title">Sellado Prodoral R200 sin Romper</h3>
          <p class="service-card-text">
            Repara fugas en matrices de gas empotradas mediante polimerización interna. Evita levantar pisos de madera, baldosas o picar muros de hormigón. 100% certificado por la SEC.
          </p>
          <a href="prodoral.php" class="service-card-link">
            Ver detalles de Prodoral →
          </a>
        </div>
      </article>

      <!-- Service 3 -->
      <article class="service-card">
        <div class="service-card-img-wrap">
          <img src="assets/images/hero-sec.png" alt="Certificación Sello Verde SEC" class="service-card-img" width="400" height="210">
          <span class="service-badge" style="background: var(--sec-green);">Normativa Oficial</span>
        </div>
        <div class="service-card-body">
          <h3 class="service-card-title">Certificación SEC & Sello Verde</h3>
          <p class="service-card-text">
            Inspección reglamentaria según DS 66, corrección de anomalías de sello rojo/amarillo, proyectos de gas, declaraciones TC6 y regularización de instalaciones domiciliarias y comerciales.
          </p>
          <a href="gasfiter-sec.php" class="service-card-link">
            Ver Certificación SEC →
          </a>
        </div>
      </article>

      <!-- Service 4 -->
      <article class="service-card">
        <div class="service-card-img-wrap">
          <img src="assets/images/hero-calefont.png" alt="Reparación de Calefont y Calderas" class="service-card-img" width="400" height="210">
          <span class="service-badge" style="background: var(--warning-amber); color: #000;">Multimarca</span>
        </div>
        <div class="service-card-body">
          <h3 class="service-card-title">Calefont, Calderas & Termos</h3>
          <p class="service-card-text">
            Servicio técnico oficial para Junkers, Rheem, Splendid, Neckar y Mademsa. Mantención de serpentín, cambio de membrana, termocuplas, ionizado y conversión a Gas Natural / Licuado.
          </p>
          <a href="calefont.php" class="service-card-link">
            Ver servicio de calefont →
          </a>
        </div>
      </article>

      <!-- Service 5 -->
      <article class="service-card">
        <div class="service-card-img-wrap">
          <img src="assets/images/hero-destapes.png" alt="Destape de Alcantarillado Hidrojet" class="service-card-img" width="400" height="210">
          <span class="service-badge" style="background: #0284c7;">Alta Presión</span>
        </div>
        <div class="service-card-body">
          <h3 class="service-card-title">Destapes de Alcantarillado & Desagües</h3>
          <p class="service-card-text">
            Desobstrucción con máquina Hidrojet y varillas rotativas en WC, cámaras de inspección, lavaplatos, tinas y colectores verticales en edificios. Video inspección CCTV con reporte.
          </p>
          <a href="destape-alcantarillado.php" class="service-card-link">
            Ver servicio de destapes →
          </a>
        </div>
      </article>

      <!-- Service 6 -->
      <article class="service-card">
        <div class="service-card-img-wrap">
          <img src="assets/images/hero-gasfiter.png" alt="Detección de Fugas de Agua con Geófono" class="service-card-img" width="400" height="210">
          <span class="service-badge" style="background: var(--sec-green);">Geófono Digital</span>
        </div>
        <div class="service-card-body">
          <h3 class="service-card-title">Detección de Fugas de Agua Potable</h3>
          <p class="service-card-text">
            Localización de filtraciones no visibles en redes de agua fría, caliente y losas con Geófono electroacústico y cámara termográfica. Reparación inmediata en cobre, PEX y PPR.
          </p>
          <a href="servicios.php" class="service-card-link">
            Ver catálogo completo →
          </a>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- =========================================================================
     INSTITUTIONAL CREDENTIALS & SEC DIRECTOR
     ========================================================================= -->
<section class="section-padding sec-profile-section" aria-label="Dirección y Acreditación SEC">
  <div class="container">
    <div class="sec-profile-grid">
      <!-- Profile Card -->
      <div class="profile-card-box">
        <img src="assets/images/domingo-isain-portrait.jpg" alt="Domingo Isaín Plaza Caamaño - Director General e Instalador Autorizado SEC" class="profile-photo" width="170" height="170">
        <h3 class="profile-name">Domingo Isaín Plaza Caamaño</h3>
        <p class="profile-role">RUT: 12.738.961-6 • Director General Instalgaschile ®</p>
        <div class="profile-sec-badge">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
          Instalador Autorizado SEC Clase 1
        </div>

        <div class="profile-qr-box">
          <img src="assets/images/qr-sec.png" alt="Código QR SEC Oficial" class="profile-qr-img" width="60" height="60">
          <div class="profile-qr-info">
            <strong>Registro Oficial SEC</strong>
            <span>Escanee para verificar acreditación ante la Superintendencia SEC de Chile</span>
          </div>
        </div>
      </div>

      <!-- Institutional Text -->
      <div class="profile-content">
        <span class="section-tag" style="background: rgba(16, 185, 129, 0.2); color: #6ee7b7;">Respaldo Profesional</span>
        <h2>Compromiso con la Seguridad y la Normativa Chilena</h2>
        <p>
          En <strong>Gasfiter Autorizado Certificado SEC</strong>, bajo la dirección técnica de <strong>Domingo Isaín Plaza Caamaño</strong>, brindamos soluciones de ingeniería sanitaria y gasfitería especializada con estricto apego al <strong>Decreto Supremo Nº 66</strong> del Ministerio de Economía y normativas SEC.
        </p>
        <p>
          Atendemos a propietarios de viviendas, comités de administración de edificios, arquitectos y empresas en toda la Región Metropolitana y principales regiones del país.
        </p>

        <div class="sec-guarantees-grid">
          <div class="sec-guarantee-item">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
            <div>
              <strong>Responsabilidad Civil</strong>
              <span>Trabajos 100% seguros y respaldados</span>
            </div>
          </div>
          <div class="sec-guarantee-item">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line></svg>
            <div>
              <strong>Certificados TC6 y Sello Verde</strong>
              <span>Tramitación directa ante la SEC</span>
            </div>
          </div>
          <div class="sec-guarantee-item">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
            <div>
              <strong>Disponibilidad Ininterrumpida</strong>
              <span>Atención 24 horas los 365 días</span>
            </div>
          </div>
          <div class="sec-guarantee-item">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
            <div>
              <strong>Transparencia Absoluta</strong>
              <span>Presupuestos cerrados tras evaluación en terreno</span>
            </div>
          </div>
        </div>

        <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
          <a href="tel:932237072" class="btn-hero-primary">
            Llamar al Director Técnico: 9 3223 7072
          </a>
          <a href="contacto.php" class="btn-hero-secondary">
            Ver Canales de Atención
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- =========================================================================
     INTERACTIVE QUOTE / ESTIMATOR WIDGET (100% A COTIZAR)
     ========================================================================= -->
<section class="section-padding quote-section" id="cotizador" aria-label="Cotizador en Línea">
  <div class="container">
    <div class="section-header">
      <span class="section-tag">Presupuesto Inmediato</span>
      <h2 class="section-title">Solicita tu Cotización Técnica en 1 Minuto</h2>
      <p class="section-desc">
        Selecciona tu servicio y comuna para coordinar la evaluación presencial de un especialista autorizado SEC.
      </p>
    </div>

    <div class="calculator-card">
      <form id="interactive-calc-form">
        <input type="hidden" id="calc-service-input" name="service" value="fuga-gas">

        <div class="calc-step-header">
          <span class="calc-step-title">1. Selecciona el Tipo de Trabajo</span>
          <span style="font-size: 0.85rem; color: var(--sec-green); font-weight: 700;">Paso 1 de 2</span>
        </div>

        <div class="calc-services-grid">
          <button type="button" class="calc-service-btn selected" data-service="fuga-gas">
            <span class="calc-service-icon">🔥</span>
            <span class="calc-service-name">Fuga de Gas 24/7</span>
          </button>
          <button type="button" class="calc-service-btn" data-service="prodoral">
            <span class="calc-service-icon">🧪</span>
            <span class="calc-service-name">Sellado Prodoral</span>
          </button>
          <button type="button" class="calc-service-btn" data-service="calefont">
            <span class="calc-service-icon">⚡</span>
            <span class="calc-service-name">Calefont / Caldera</span>
          </button>
          <button type="button" class="calc-service-btn" data-service="destape">
            <span class="calc-service-icon">🌊</span>
            <span class="calc-service-name">Destape Hidrojet</span>
          </button>
          <button type="button" class="calc-service-btn" data-service="fuga-agua">
            <span class="calc-service-icon">💧</span>
            <span class="calc-service-name">Fuga de Agua</span>
          </button>
          <button type="button" class="calc-service-btn" data-service="sec-cert">
            <span class="calc-service-icon">🛡️</span>
            <span class="calc-service-name">Certificación SEC</span>
          </button>
        </div>

        <div class="calc-step-header">
          <span class="calc-step-title">2. Datos de Ubicación y Contacto</span>
          <span style="font-size: 0.85rem; color: var(--sec-green); font-weight: 700;">Paso 2 de 2</span>
        </div>

        <div class="calc-form-grid">
          <div class="form-group">
            <label for="calc-comuna">Comuna / Sector</label>
            <select id="calc-comuna" name="comuna" class="form-control" required>
              <option value="Santiago">Santiago Centro</option>
              <option value="Las Condes">Las Condes</option>
              <option value="Providencia">Providencia</option>
              <option value="Vitacura">Vitacura</option>
              <option value="Lo Barnechea">Lo Barnechea</option>
              <option value="Ñuñoa">Ñuñoa</option>
              <option value="La Reina">La Reina</option>
              <option value="La Florida">La Florida</option>
              <option value="Puente Alto">Puente Alto</option>
              <option value="San Bernardo">San Bernardo</option>
              <option value="San Miguel">San Miguel</option>
              <option value="Quinta Normal">Quinta Normal</option>
              <option value="Chicureo / Colina">Chicureo / Colina</option>
              <option value="Huechuraba">Huechuraba</option>
              <option value="Recoleta">Recoleta</option>
              <option value="Estación Central">Estación Central</option>
              <option value="Maipú">Maipú</option>
              <option value="Peñalolén">Peñalolén</option>
              <option value="Macul">Macul</option>
              <option value="San Joaquín">San Joaquín</option>
              <option value="La Cisterna">La Cisterna</option>
              <option value="Quilicura">Quilicura</option>
              <option value="Pudahuel">Pudahuel</option>
              <option value="Renca">Renca</option>
              <option value="Conchalí">Conchalí</option>
              <option value="Independencia">Independencia</option>
              <option value="Buin / Paine">Buin / Paine</option>
              <option value="Talagante / Peñaflor">Talagante / Peñaflor</option>
              <option value="Melipilla">Melipilla</option>
              <option value="Valparaíso / Viña del Mar">Valparaíso / Viña del Mar</option>
              <option value="Villa Alemana / Quilpué">Villa Alemana / Quilpué</option>
              <option value="Concón">Concón</option>
              <option value="Rancagua">Rancagua</option>
            </select>
          </div>

          <div class="form-group">
            <label for="calc-property">Tipo de Inmueble</label>
            <select id="calc-property" name="property" class="form-control">
              <option value="casa">Casa Residencial</option>
              <option value="depto">Departamento</option>
              <option value="comercio">Local Comercial / Restaurante</option>
              <option value="empresa">Edificio / Industria</option>
            </select>
          </div>

          <div class="form-group">
            <label for="calc-urgency">Nivel de Urgencia</label>
            <select id="calc-urgency" name="urgency" class="form-control">
              <option value="inmediata">🚨 Urgente (Llegada en 30 a 45 min)</option>
              <option value="hoy">📅 Durante el Día</option>
              <option value="programada">🗓️ Programar para fecha posterior</option>
            </select>
          </div>

          <div class="form-group">
            <label for="calc-name">Nombre y Apellido</label>
            <input type="text" id="calc-name" name="name" class="form-control" placeholder="Ej: Juan Pérez" required>
          </div>

          <div class="form-group">
            <label for="calc-phone">Teléfono de Contacto</label>
            <input type="tel" id="calc-phone" name="phone" class="form-control" placeholder="Ej: 9 8765 4321" required>
          </div>

          <div class="form-group">
            <label for="calc-details">Detalle del Problema (Opcional)</label>
            <input type="text" id="calc-details" name="details" class="form-control" placeholder="Ej: Olor a gas cerca del calefont">
          </div>
        </div>

        <div class="calc-estimate-box">
          <div class="calc-estimate-text">
            <span style="color: var(--text-muted);">Modalidad de Presupuesto:</span>
            <strong id="calc-estimate-range" style="color: var(--primary);">A Cotizar (Evaluación con Gas Trazador y Manómetro)</strong>
          </div>
          <div class="calc-estimate-text" style="text-align: right;">
            <span style="color: var(--text-muted);">Tiempo de Asignación:</span>
            <strong id="calc-estimate-time" style="color: var(--sec-green);">🚨 Llegada Prioritaria en 30 a 45 min</strong>
          </div>
        </div>

        <button type="submit" class="btn-calc-submit">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.312.045-.698.073-2.027-.478-1.637-.678-2.685-2.355-2.766-2.464-.082-.11-.652-.868-.652-1.652 0-.783.411-1.168.558-1.326.147-.158.322-.197.43-.197.108 0 .216.002.311.007.101.006.236-.039.37.283.136.323.468 1.141.51 1.226.042.086.069.185.011.3-.058.115-.088.188-.175.29-.088.102-.185.228-.264.307-.088.087-.18.182-.077.36.103.177.46 1.029 1.157 1.65.897.799 1.653 1.046 1.888 1.162.235.116.372.102.51-.057.138-.158.591-.688.749-.924.158-.236.316-.197.531-.118.216.079 1.369.646 1.605.764.236.118.393.177.45.275.058.098.058.571-.086.976z"/></svg>
          Solicitar Cotización por WhatsApp
        </button>
      </form>
    </div>
  </div>
</section>

<!-- =========================================================================
     COVERAGE & COMUNAS PREVIEW
     ========================================================================= -->
<section class="section-padding coverage-section" aria-label="Cobertura de Gasfitería">
  <div class="container">
    <div class="section-header">
      <span class="section-tag">Presencia en Terreno</span>
      <h2 class="section-title">Gasfiter Autorizado en tu Comuna</h2>
      <p class="section-desc">
        Unidades móviles equipadas con instrumental de última generación para atender emergencias en todas las comunas de la Región Metropolitana y V Región.
      </p>
    </div>

    <!-- RM Comunas Grid -->
    <div class="region-block">
      <h3 class="region-title">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
        Región Metropolitana de Santiago (Cobertura 24/7)
      </h3>
      <div class="comunas-pill-grid">
        <a href="cobertura.php" class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Las Condes</a>
        <a href="cobertura.php" class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Providencia</a>
        <a href="cobertura.php" class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Vitacura</a>
        <a href="cobertura.php" class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Lo Barnechea</a>
        <a href="cobertura.php" class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Ñuñoa</a>
        <a href="cobertura.php" class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>La Reina</a>
        <a href="cobertura.php" class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Santiago Centro</a>
        <a href="cobertura.php" class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>La Florida</a>
        <a href="cobertura.php" class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Puente Alto</a>
        <a href="cobertura.php" class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>San Bernardo</a>
        <a href="cobertura.php" class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>San Miguel</a>
        <a href="cobertura.php" class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Quinta Normal</a>
        <a href="cobertura.php" class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Chicureo / Colina</a>
        <a href="cobertura.php" class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Huechuraba</a>
        <a href="cobertura.php" class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Recoleta</a>
        <a href="cobertura.php" class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Estación Central</a>
        <a href="cobertura.php" class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Maipú</a>
        <a href="cobertura.php" class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Peñalolén</a>
        <a href="cobertura.php" class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Macul</a>
        <a href="cobertura.php" class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Quilicura</a>
        <a href="cobertura.php" class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Buin / Paine</a>
        <a href="cobertura.php" class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Valparaíso / Viña del Mar</a>
        <a href="cobertura.php" class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Villa Alemana</a>
      </div>
    </div>
  </div>
</section>

<!-- =========================================================================
     CUSTOMER REVIEWS & SOCIAL PROOF
     ========================================================================= -->
<?php include_once __DIR__ . '/includes/reviews-section.php'; ?>

<!-- =========================================================================
     FAQS ACCORDION SECTION
     ========================================================================= -->
<section class="section-padding faqs-section" aria-label="Preguntas Frecuentes">
  <div class="container">
    <div class="section-header">
      <span class="section-tag">Dudas Habituales</span>
      <h2 class="section-title">Preguntas Frecuentes sobre Servicios de Gasfitería</h2>
      <p class="section-desc">
        Todo lo que necesitas saber antes de contratar un Gasfiter Autorizado Certificado SEC.
      </p>
    </div>

    <div class="accordion-container">
      <?php foreach ($faqs as $i => $faq): ?>
      <div class="accordion-item <?php echo ($i === 0) ? 'active' : ''; ?>">
        <button class="accordion-header" type="button" aria-expanded="<?php echo ($i === 0) ? 'true' : 'false'; ?>">
          <span><?php echo htmlspecialchars($faq['question']); ?></span>
          <svg class="accordion-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
        </button>
        <div class="accordion-content">
          <p><?php echo htmlspecialchars($faq['answer']); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- =========================================================================
     EMERGENCY CALL-TO-ACTION STRIP
     ========================================================================= -->
<?php include_once __DIR__ . '/includes/cta-urgencia.php'; ?>

<!-- Include Calculator JavaScript -->
<script src="assets/js/calculator.js" defer></script>

<?php include_once __DIR__ . '/includes/footer.php'; ?>
