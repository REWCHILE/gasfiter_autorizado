<?php
/**
 * Gasfiter Autorizado Certificado SEC - Reparación y Mantención de Calefont a Domicilio
 */
$page_title = "Reparación y Mantención de Calefont a Domicilio | Junkers, Rheem, Splendid | Gasfiter SEC";
$page_description = "Servicio técnico multimarca de calefonts a domicilio en Santiago y Regiones. Reparación de calefont Junkers, Rheem, Splendid, Neckar, Mademsa, tiro forzado e ionizado. Llegada rápida y repuestos originales. Llame al 9 3223 7072.";
$breadcrumb_title = "Calefont y Calderas";
$breadcrumb_url = "https://gasfiter-autorizado.cl/calefont";

$faqs = [
  [
    "question" => "¿Por qué mi calefont se apaga cuando abro el agua caliente?",
    "answer" => "Las causas más frecuentes son: desgaste de la membrana de agua, acumulación de sarro en el serpentín, suciedad o falla en el sensor de ionización / termocupla, o mala evacuación de gases quemados por obstrucción del ducto de ventilación (tiro)."
  ],
  [
    "question" => "¿Cada cuánto tiempo se debe realizar la mantención preventiva de un calefont?",
    "answer" => "La SEC recomienda realizar la mantención preventiva al menos una vez al año. Esto incluye limpieza de inyectores y quemador, desincrustación de sarro, lubricación del cuerpo de gas y verificación de sensores de seguridad y monóxido."
  ],
  [
    "question" => "¿Realizan conversiones de gas de Gas Licuado a Gas Natural o viceversa?",
    "answer" => "Sí, realizamos el cambio de inyectores, calibración de presiones y regulación de aire para convertir calefonts, calderas, cocinas y encimeras entre Gas Natural y Gas Licuado con certificación SEC."
  ]
];

include_once __DIR__ . '/includes/header.php';
include_once __DIR__ . '/includes/faq-schema.php';
?>

<!-- Hero Section Calefont -->
<section class="hero-section" style="background: linear-gradient(135deg, #1e1b4b 0%, #312e81 50%, #4338ca 100%);">
  <div class="container">
    <div class="hero-grid">
      <div class="hero-content">
        <div class="hero-badge-sec" style="background: rgba(245, 158, 11, 0.2); border-color: rgba(245, 158, 11, 0.5); color: #fde68a;">
          ⚡ Servicio Técnico Calefont 24/7
        </div>
        <h1 class="hero-title">
          Reparación, Mantención e <span style="color: #fde68a;">Instalación de Calefont</span> a Domicilio
        </h1>
        <p class="hero-subtitle">
          Especialistas certificados SEC en calefonts convencionales, ionizados, tiro forzado y calderas murales multimarca en toda la Región Metropolitana y Regiones.
        </p>

        <ul class="hero-features-list">
          <li class="hero-feature-item">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
            Junkers, Rheem, Splendid, Neckar, Mademsa, Trotter
          </li>
          <li class="hero-feature-item">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
            Descalcificación de serpentín y cambio de membrana
          </li>
          <li class="hero-feature-item">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
            Repuestos originales y garantía escrita
          </li>
          <li class="hero-feature-item">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
            Conversión Gas Natural / Gas Licuado
          </li>
        </ul>

        <div class="hero-cta-group">
          <a href="tel:932237072" class="btn-hero-primary">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
            Llamar Técnico: 9 3223 7072
          </a>
          <a href="cotizar" class="btn-hero-secondary">
            Cotizar Mantención
          </a>
        </div>
      </div>

      <div class="hero-visual-card">
        <div class="hero-main-img-wrapper">
          <img src="assets/images/hero-calefont.webp" alt="Técnico Reparando Calefont Junkers" class="hero-main-img" width="580" height="340" fetchpriority="high" loading="eager" decoding="async">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Fallas Frecuentes y Soluciones -->
<section class="section-padding" style="background: #ffffff;">
  <div class="container">
    <div class="section-header">
      <span class="section-tag">Diagnóstico Rápido</span>
      <h2 class="section-title">Fallas Frecuentes que Reparamos a Domicilio</h2>
      <p class="section-desc">
        Atendemos problemas de encendido, temperatura, apagado repentino y fugas de agua o gas en su equipo.
      </p>
    </div>

    <div class="protocol-steps-grid">
      <div style="background: var(--bg-body); border: 1px solid var(--border-color); border-radius: var(--radius-lg); padding: 1.75rem;">
        <h3 style="font-size: 1.25rem; color: var(--primary); margin-bottom: 0.5rem;">🔥 No Enciende o No da Chispa</h3>
        <p style="font-size: 0.9rem; color: var(--text-muted); line-height: 1.6;">
          Revisión de caja de pilas, microswitch, sensor de flujo, módulo electrónico de encendido e inyectores piloto.
        </p>
      </div>

      <div style="background: var(--bg-body); border: 1px solid var(--border-color); border-radius: var(--radius-lg); padding: 1.75rem;">
        <h3 style="font-size: 1.25rem; color: var(--primary); margin-bottom: 0.5rem;">❄️ Agua No Calienta Suficiente</h3>
        <p style="font-size: 0.9rem; color: var(--text-muted); line-height: 1.6;">
          Limpieza y descalcificación con bomba de recirculación química para eliminar sarro adherido en las aletas del serpentín.
        </p>
      </div>

      <div style="background: var(--bg-body); border: 1px solid var(--border-color); border-radius: var(--radius-lg); padding: 1.75rem;">
        <h3 style="font-size: 1.25rem; color: var(--primary); margin-bottom: 0.5rem;">🛑 Se Apaga a los Pocos Segundos</h3>
        <p style="font-size: 0.9rem; color: var(--text-muted); line-height: 1.6;">
          Calibración del sensor de sobrecalentamiento, termocupla o sensor de retorno de gases de combustión según norma SEC.
        </p>
      </div>

      <div style="background: var(--bg-body); border: 1px solid var(--border-color); border-radius: var(--radius-lg); padding: 1.75rem;">
        <h3 style="font-size: 1.25rem; color: var(--primary); margin-bottom: 0.5rem;">💧 Gotea Agua por la Base</h3>
        <p style="font-size: 0.9rem; color: var(--text-muted); line-height: 1.6;">
          Cambio del kit de sellos, empaquetaduras de oring, vástago, prensaestopas y membrana del cuerpo de agua.
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
      <h2 class="section-title">Consultas sobre Calefonts y Calderas</h2>
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
