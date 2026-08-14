<?php
/**
 * Gasfiter Autorizado Certificado SEC - Catálogo General de Servicios
 */
$page_title = "Servicios de Gasfitería Autorizada SEC | Gas, Agua, Calefont y Alcantarillado";
$page_description = "Catálogo integral de servicios de gasfitería autorizada SEC: detección de fugas de gas con gas trazador, sellado Prodoral R6-1, certificación Sello Verde, calefont y destapes hidrojet 24/7.";
$breadcrumb_title = "Servicios";
$breadcrumb_url = "https://gasfiter-autorizado.cl/servicios";

$faqs = [
  [
    "question" => "¿Qué tipos de servicios de gasfitería realizan a domicilio?",
    "answer" => "Realizamos detección y reparación de fugas de gas y agua, sellado de matrices con Prodoral R6-1 sin romper, mantención e instalación de calefonts y calderas multimarca, destapes de alcantarillado con Hidrojet y tramitación de Sello Verde SEC."
  ],
  [
    "question" => "¿Entregan boleta, factura y garantía por los trabajos?",
    "answer" => "Sí, todos nuestros servicios cuentan con boleta o factura legal y garantía escrita que respalda tanto la mano de obra certificada SEC como los materiales y repuestos utilizados."
  ],
  [
    "question" => "¿Atienden emergencias durante la noche y fines de semana?",
    "answer" => "Sí, disponemos de servicio de guardia 24 horas los 365 días del año para fugas de gas, anegamientos de agua y emergencias sanitarias graves en toda la Región Metropolitana y zonas aledañas."
  ]
];

include_once __DIR__ . '/includes/header.php';
include_once __DIR__ . '/includes/faq-schema.php';
?>

<!-- Header Banner -->
<section class="hero-section" style="padding: 3.5rem 0 4rem 0;">
  <div class="container" style="text-align: center; max-width: 850px;">
    <span class="hero-badge-sec">Especialistas Certificados SEC</span>
    <h1 class="hero-title" style="font-size: 2.6rem;">Catálogo de Servicios Profesionales de Gasfitería</h1>
    <p class="hero-subtitle" style="margin-left: auto; margin-right: auto;">
      Soluciones técnicas de alta ingeniería para redes de gas natural y licuado, agua potable, sistemas de calefacción y saneamiento sanitario.
    </p>
    <div style="display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap;">
      <a href="tel:932237072" class="btn-hero-primary">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
        Llamar al 9 3223 7072
      </a>
      <a href="cotizar" class="btn-hero-secondary">
        Cotizar en Línea
      </a>
    </div>
  </div>
</section>

<!-- Services Details Grid -->
<section class="section-padding" style="background: var(--bg-body);">
  <div class="container">
    <div class="service-showcase-list">

      <!-- Service Item 1: Fugas de Gas -->
      <div class="service-showcase-card">
        <div class="service-showcase-img-wrap">
          <img src="assets/images/hero-fuga-gas.webp" alt="Detección de Fugas de Gas con Gas Trazador" class="service-showcase-img" loading="lazy" decoding="async">
          <span class="service-badge-tag" style="background: var(--safety-red);">Emergencias 24/7</span>
        </div>
        <div class="service-showcase-content">
          <h2 class="service-card-heading">Detección y Reparación de Fugas de Gas</h2>
          <p class="service-card-text">
            Inspección de hermeticidad con instrumental electrónico y Gas Trazador (mezcla de nitrógeno e hidrógeno al 95%/5%) para localizar microfugas invisibles en cañerías subterráneas o empotradas sin romper pavimentos. Reparación inmediata con garantía por escrito.
          </p>
          <div class="service-card-actions">
            <a href="fuga-de-gas" class="btn-header-call" style="background: var(--safety-red);">Ver Especialidad Fugas de Gas →</a>
            <a href="tel:932237072" class="btn-header-quote" style="background: var(--primary);">Llamar Técnico SEC</a>
          </div>
        </div>
      </div>

      <!-- Service Item 2: Prodoral R6-1 -->
      <div class="service-showcase-card reverse">
        <div class="service-showcase-content">
          <span style="display: inline-block; color: var(--accent-blue); font-weight: 800; font-size: 0.8rem; text-transform: uppercase; margin-bottom: 0.5rem;">Tecnología No Invasiva</span>
          <h2 class="service-card-heading">Sellado Prodoral R6-1 sin Romper</h2>
          <p class="service-card-text">
            Tecnología alemana de vanguardia para reparar cañerías de gas con fugas o pérdidas de presión sin necesidad de picar muros, romper porcelanatos ni alterar la estética del edificio o vivienda. Aprobado por la SEC para la regularización de sellos rojos.
          </p>
          <div class="service-card-actions">
            <a href="prodoral" class="btn-header-call" style="background: var(--accent-blue);">Conocer Procedimiento Prodoral →</a>
            <a href="cotizar" class="btn-header-quote">Cotizar Sellado</a>
          </div>
        </div>
        <div class="service-showcase-img-wrap">
          <img src="assets/images/hero-prodoral.webp" alt="Sellado de Tuberías con Prodoral R6-1" class="service-showcase-img" loading="lazy" decoding="async">
        </div>
      </div>

      <!-- Service Item 3: Certificación SEC -->
      <div class="service-showcase-card">
        <div class="service-showcase-img-wrap">
          <img src="assets/images/hero-sec.webp" alt="Certificación Sello Verde SEC Chile" class="service-showcase-img" loading="lazy" decoding="async">
          <span class="service-badge-tag" style="background: var(--sec-green);">Acreditación Oficial</span>
        </div>
        <div class="service-showcase-content">
          <h2 class="service-card-heading">Certificación SEC & Sello Verde (DS 66)</h2>
          <p class="service-card-text">
            Inspecciones reglamentarias para obtención de Sello Verde, corrección de observaciones de Sello Amarillo y Rojo, proyectos de ingeniería de gas, declaraciones TC6 y regularización de instalaciones domiciliarias, comerciales e industriales.
          </p>
          <div class="service-card-actions">
            <a href="gasfiter-sec" class="btn-header-call" style="background: var(--sec-green);">Ver Certificación SEC →</a>
            <a href="contacto" class="btn-header-quote" style="background: var(--primary);">Consultar Trámite</a>
          </div>
        </div>
      </div>

      <!-- Service Item 4: Calefont y Calderas -->
      <div class="service-showcase-card reverse">
        <div class="service-showcase-content">
          <span style="display: inline-block; color: var(--warning-amber); font-weight: 800; font-size: 0.8rem; text-transform: uppercase; margin-bottom: 0.5rem;">Servicio Técnico Multimarca</span>
          <h2 class="service-card-heading">Reparación y Mantención de Calefont</h2>
          <p class="service-card-text">
            Servicio a domicilio para calefonts ionizados, tiro forzado y calderas Junkers, Rheem, Splendid, Neckar, Mademsa y Trotter. Limpieza de quemadores, descalcificación de serpentín, cambio de membranas y calibración de termostatos.
          </p>
          <div class="service-card-actions">
            <a href="calefont" class="btn-header-call" style="background: #d97706;">Ver Reparación de Calefont →</a>
            <a href="tel:932237072" class="btn-header-quote">Pedir Técnico Hoy</a>
          </div>
        </div>
        <div class="service-showcase-img-wrap">
          <img src="assets/images/hero-calefont.webp" alt="Servicio Técnico de Calefont a Domicilio" class="service-showcase-img" loading="lazy" decoding="async">
        </div>
      </div>

      <!-- Service Item 5: Destapes Hidrojet -->
      <div class="service-showcase-card">
        <div class="service-showcase-img-wrap">
          <img src="assets/images/hero-destapes.webp" alt="Destapes con Hidrojet y Video Inspección" class="service-showcase-img" loading="lazy" decoding="async">
          <span class="service-badge-tag" style="background: #0284c7;">Cámara CCTV Robotizada</span>
        </div>
        <div class="service-showcase-content">
          <h2 class="service-card-heading">Destapes de Alcantarillado con Hidrojet</h2>
          <p class="service-card-text">
            Desobstrucción garantizada de cámaras de inspección, redes de alcantarillado, colectores, verticales de edificios, WC y desagües de cocinas con máquinas de agua a ultra alta presión y varillas electromecánicas.
          </p>
          <div class="service-card-actions">
            <a href="destape-alcantarillado" class="btn-header-call" style="background: #0284c7;">Ver Servicio de Destapes →</a>
            <a href="cotizar" class="btn-header-quote">Solicitar Presupuesto</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- FAQs Section -->
<section class="section-padding faqs-section">
  <div class="container">
    <div class="section-header">
      <span class="section-tag">Preguntas Frecuentes</span>
      <h2 class="section-title">Consultas Habituales sobre Servicios</h2>
    </div>
    <div class="accordion-container">
      <?php foreach ($faqs as $i => $faq): ?>
      <div class="accordion-item <?php echo ($i === 0) ? 'active' : ''; ?>">
        <button class="accordion-header" type="button">
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

<?php include_once __DIR__ . '/includes/cta-urgencia.php'; ?>
<?php include_once __DIR__ . '/includes/footer.php'; ?>
