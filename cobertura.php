<?php
/**
 * Gasfiter Autorizado Certificado SEC - Cobertura Geográfica Completa
 */
$page_title = "📞 9 3223 7072 | Gásfiter a Domicilio en Santiago y Comunas RM";
$page_description = "Servicio de Gasfiter Autorizado Certificado SEC en todas las comunas de Santiago (Las Condes, Providencia, Vitacura, Ñuñoa, Puente Alto, San Bernardo, etc.), V Región y VI Región. Respuesta en 30 a 40 min. Llame al 9 3223 7072.";
$breadcrumb_title = "Cobertura por Comunas";
$breadcrumb_url = "https://gasfiter-autorizado.cl/cobertura";

$faqs = [
  [
    "question" => "¿Cuánto demora en llegar el técnico a mi comuna?",
    "answer" => "Disponemos de móviles equipados de guardia distribuidos en puntos estratégicos de Santiago Oriente, Centro, Norte, Poniente y Sur. El tiempo promedio de respuesta es de 30 a 40 minutos."
  ],
  [
    "question" => "¿Atienden comunas fuera de Santiago como Valparaíso o Rancagua?",
    "answer" => "Sí, prestamos cobertura técnica especializada para emergencias de gas, sellado Prodoral R6-1 y proyectos SEC en la Región de Valparaíso (Viña del Mar, Valparaíso, Concón, Villa Alemana, Quilpué) y Región de O'Higgins (Rancagua, Machalí, San Fernando)."
  ],
  [
    "question" => "¿El costo de la visita técnica varía según la comuna?",
    "answer" => "Mantenemos tarifas transparentes y competitivas en todo el radio urbano. Puede consultar el valor exacto de su servicio llamando directamente al 9 3223 7072 o utilizando nuestro cotizador en línea."
  ]
];

include_once __DIR__ . '/includes/header.php';
include_once __DIR__ . '/includes/faq-schema.php';
?>

<!-- Hero Section Cobertura -->
<section class="hero-section" style="padding: 3.5rem 0 4rem 0;">
  <div class="container" style="text-align: center; max-width: 850px;">
    <span class="hero-badge-sec">Móviles en Terreno 24/7</span>
    <h1 class="hero-title" style="font-size: 2.6rem;">Cobertura de Gasfitería en tu Comuna</h1>
    <p class="hero-subtitle" style="margin-left: auto; margin-right: auto;">
      Atención inmediata para fugas de gas, sellado con Prodoral, reparación de calefonts y destapes en toda la Región Metropolitana y principales regiones del país.
    </p>

    <!-- Search Input -->
    <div class="comunas-search-box">
      <svg class="comunas-search-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
      <input type="text" id="comuna-search-input" class="comunas-search-input" placeholder="Escribe tu comuna (Ej: Las Condes, Maipú, Viña del Mar)..." autocomplete="off">
    </div>
  </div>
</section>

<!-- Regions & Comunas Directory -->
<section class="section-padding" style="background: var(--bg-body);">
  <div class="container">
    
    <div id="comunas-no-results" style="display: none; text-align: center; padding: 2rem; background: #ffffff; border-radius: var(--radius-lg); margin-bottom: 2rem;">
      <p style="color: var(--text-muted); font-size: 1.1rem;">No se encontraron resultados para su búsqueda. Pero no se preocupe: <strong>atendemos toda la Región Metropolitana y Regiones</strong>. Llámenos al <a href="tel:932237072" style="color: var(--safety-red); font-weight: 800;">9 3223 7072</a>.</p>
    </div>

    <!-- Región Metropolitana: Sector Oriente -->
    <div class="region-block">
      <h3 class="region-title">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
        Santiago Sector Oriente (Llegada 30 min)
      </h3>
      <div class="comunas-pill-grid">
        <span class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Las Condes</span>
        <span class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Providencia</span>
        <span class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Vitacura</span>
        <span class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Lo Barnechea (La Dehesa)</span>
        <span class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Ñuñoa</span>
        <span class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>La Reina</span>
        <span class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Peñalolén</span>
        <span class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Macul</span>
      </div>
    </div>

    <!-- Región Metropolitana: Sector Centro y Norte -->
    <div class="region-block">
      <h3 class="region-title">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
        Santiago Centro, Norte & Chicureo
      </h3>
      <div class="comunas-pill-grid">
        <span class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Santiago Centro</span>
        <span class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Chicureo / Chamisero / Piedra Roja</span>
        <span class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Colina</span>
        <span class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Huechuraba (Ciudad Empresarial)</span>
        <span class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Recoleta</span>
        <span class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Independencia</span>
        <span class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Conchalí</span>
        <span class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Quilicura</span>
        <span class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Lampa</span>
      </div>
    </div>

    <!-- Región Metropolitana: Sector Sur y Poniente -->
    <div class="region-block">
      <h3 class="region-title">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
        Santiago Sector Sur y Poniente
      </h3>
      <div class="comunas-pill-grid">
        <span class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>La Florida</span>
        <span class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Puente Alto</span>
        <span class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>San Bernardo</span>
        <span class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>San Miguel (Gran Avenida)</span>
        <span class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>San Joaquín</span>
        <span class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>La Cisterna</span>
        <span class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Quinta Normal</span>
        <span class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Estación Central</span>
        <span class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Maipú</span>
        <span class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Pudahuel</span>
        <span class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Cerrillos</span>
        <span class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Renca</span>
        <span class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Lo Prado</span>
        <span class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Cerro Navia</span>
        <span class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Buin</span>
        <span class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Paine</span>
        <span class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Calera de Tango</span>
        <span class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Talagante / Peñaflor / Padre Hurtado</span>
        <span class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Melipilla</span>
      </div>
    </div>

    <!-- Región de Valparaíso & O'Higgins -->
    <div class="region-block">
      <h3 class="region-title">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
        Región de Valparaíso (V Región) & O'Higgins (VI Región)
      </h3>
      <div class="comunas-pill-grid">
        <span class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Viña del Mar</span>
        <span class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Valparaíso</span>
        <span class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Concón</span>
        <span class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Villa Alemana</span>
        <span class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Quilpué</span>
        <span class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>San Antonio</span>
        <span class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Los Andes / San Felipe</span>
        <span class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Rancagua</span>
        <span class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>Machalí</span>
        <span class="comuna-pill"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>San Fernando</span>
      </div>
    </div>

  </div>
</section>

<!-- FAQs Section -->
<section class="section-padding faqs-section">
  <div class="container">
    <div class="section-header">
      <span class="section-tag">Preguntas Frecuentes</span>
      <h2 class="section-title">Consultas sobre Cobertura y Tiempos de Respuesta</h2>
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

<script src="assets/js/coverage.js" defer></script>

<?php include_once __DIR__ . '/includes/cta-urgencia.php'; ?>
<?php include_once __DIR__ . '/includes/footer.php'; ?>
