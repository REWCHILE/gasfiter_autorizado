<?php
/**
 * Gasfiter Autorizado Certificado SEC - Detección y Reparación de Fugas de Gas 24/7
 */
$page_title = "Detección y Reparación de Fugas de Gas 24/7 | Gas Trazador | Gasfiter Autorizado SEC";
$page_description = "Urgencias por fugas de gas 24/7 en Santiago y Regiones. Detección electrónica con Gas Trazador (N2/H2), pruebas de hermeticidad y reparación inmediata certificada SEC. Llegamos en 30 a 45 min. Llame al 9 3223 7072.";
$breadcrumb_title = "Fugas de Gas 24/7";
$breadcrumb_url = "https://gasfiter-autorizado.cl/fuga-de-gas.php";

$faqs = [
  [
    "question" => "¿Qué debo hacer si siento un fuerte olor a gas en mi casa o departamento?",
    "answer" => "1. Cierre inmediatamente la llave de paso general del medidor o de los cilindros de gas. 2. Abra puertas y ventanas para ventilar el ambiente. 3. No accione interruptores eléctricos, timbres ni encienda fósforos. 4. Evacúe el área y llame de inmediato a nuestra central de emergencias al 9 3223 7072 para la asistencia de un instalador SEC."
  ],
  [
    "question" => "¿Cómo funciona la detección con Gas Trazador?",
    "answer" => "El gas trazador es una mezcla segura y no inflamable compuesta por 95% de nitrógeno y 5% de hidrógeno. Al inyectarse en la tubería despresurizada, las moléculas de hidrógeno (las más pequeñas del universo) escapan por la microfisura y son captadas en la superficie por sensores electroquímicos de ultra alta sensibilidad, localizando el punto exacto sin necesidad de romper."
  ],
  [
    "question" => "¿Qué entrega el técnico al finalizar la reparación de gas?",
    "answer" => "Tras reparar la fuga, el instalador SEC realiza una nueva prueba de presión manométrica para verificar la hermeticidad total al 100%, emitiendo un informe técnico de conformidad y la boleta/factura con garantía escrita."
  ]
];

include_once __DIR__ . '/includes/header.php';
include_once __DIR__ . '/includes/faq-schema.php';
?>

<!-- Hero Section Fuga de Gas -->
<section class="hero-section" style="background: linear-gradient(135deg, #1c1917 0%, #7f1d1d 50%, #991b1b 100%);">
  <div class="container">
    <div class="hero-grid">
      <div class="hero-content">
        <div class="hero-badge-sec" style="background: rgba(239, 68, 68, 0.25); border-color: rgba(239, 68, 68, 0.5); color: #fca5a5;">
          🚨 Urgencia Fugas de Gas 24 Horas
        </div>
        <h1 class="hero-title">
          Detección y Reparación de <span style="color: #fca5a5;">Fugas de Gas</span> con Gas Trazador
        </h1>
        <p class="hero-subtitle">
          Localización electrónica de máxima precisión sin romper pisos ni paredes. Atención inmediata en 30 a 45 minutos por instaladores autorizados SEC en toda la Región Metropolitana y Regiones.
        </p>

        <ul class="hero-features-list">
          <li class="hero-feature-item">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
            Gas Trazador (Nitrógeno/Hidrógeno 95/5)
          </li>
          <li class="hero-feature-item">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
            Pruebas manométricas de hermeticidad
          </li>
          <li class="hero-feature-item">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
            Reparación en cobre, fierro y matrices
          </li>
          <li class="hero-feature-item">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
            Certificado e informe técnico SEC
          </li>
        </ul>

        <div class="hero-cta-group">
          <a href="tel:932237072" class="btn-hero-primary" style="background: #ffffff; color: var(--safety-red);">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
            Llamar Emergencia 9 3223 7072
          </a>
          <a href="https://api.whatsapp.com/send?phone=56932237072&text=Hola,%20tengo%20una%20emergencia%20por%20fuga%20de%20gas" class="btn-hero-secondary" style="background: #25d366; border-color: #25d366;" target="_blank" rel="noopener noreferrer">
            WhatsApp 24/7
          </a>
        </div>
      </div>

      <div class="hero-visual-card">
        <div class="hero-main-img-wrapper">
          <img src="assets/images/hero-fuga-gas.png" alt="Detección de Fugas de Gas con Gas Trazador" class="hero-main-img" width="580" height="340">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Protocolo de Seguridad -->
<section class="section-padding" style="background: #ffffff;">
  <div class="container">
    <div class="section-header">
      <span class="section-tag">Metodología Certificada</span>
      <h2 class="section-title">Protocolo de Diagnóstico y Reparación de Fugas</h2>
      <p class="section-desc">
        Procedimiento técnico riguroso bajo normativas SEC para garantizar la seguridad de las personas e infraestructura.
      </p>
    </div>

    <div class="protocol-steps-grid">
      <div style="background: var(--bg-body); border: 1px solid var(--border-color); border-radius: var(--radius-lg); padding: 1.75rem;">
        <div style="font-size: 1.75rem; color: var(--safety-red); font-weight: 900; margin-bottom: 0.5rem;">01</div>
        <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 0.5rem;">Aislamiento y Seguridad</h3>
        <p style="font-size: 0.9rem; color: var(--text-muted); line-height: 1.6;">
          Corte de suministro, medición de concentración de gas en el ambiente con explosímetro digital y ventilación de recintos.
        </p>
      </div>

      <div style="background: var(--bg-body); border: 1px solid var(--border-color); border-radius: var(--radius-lg); padding: 1.75rem;">
        <div style="font-size: 1.75rem; color: var(--safety-red); font-weight: 900; margin-bottom: 0.5rem;">02</div>
        <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 0.5rem;">Inyección de Gas Trazador</h3>
        <p style="font-size: 0.9rem; color: var(--text-muted); line-height: 1.6;">
          Presurización de la red con mezcla N₂/H₂ inocua para rastrear microfiltraciones en ductos enterrados o bajo radier.
        </p>
      </div>

      <div style="background: var(--bg-body); border: 1px solid var(--border-color); border-radius: var(--radius-lg); padding: 1.75rem;">
        <div style="font-size: 1.75rem; color: var(--safety-red); font-weight: 900; margin-bottom: 0.5rem;">03</div>
        <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 0.5rem;">Reparación o Sellado</h3>
        <p style="font-size: 0.9rem; color: var(--text-muted); line-height: 1.6;">
          Corrección mediante soldadura fuerte en plata, reemplazo de fittings o aplicación de sellado Prodoral R200 sin picar.
        </p>
      </div>

      <div style="background: var(--bg-body); border: 1px solid var(--border-color); border-radius: var(--radius-lg); padding: 1.75rem;">
        <div style="font-size: 1.75rem; color: var(--safety-red); font-weight: 900; margin-bottom: 0.5rem;">04</div>
        <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 0.5rem;">Certificado de Hermeticidad</h3>
        <p style="font-size: 0.9rem; color: var(--text-muted); line-height: 1.6;">
          Prueba manométrica final reglamentaria SEC, emisión de informe técnico y restablecimiento seguro del suministro.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- FAQs Section -->
<section class="section-padding faqs-section">
  <div class="container">
    <div class="section-header">
      <span class="section-tag">Preguntas Frecuentes</span>
      <h2 class="section-title">Dudas sobre Fugas de Gas y Seguridad</h2>
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
