<?php
/**
 * Gasfiter Autorizado Certificado SEC - Cotizador y Solicitud de Presupuesto en Línea
 */
$page_title = "Cotizador de Gasfitería Online | Solicita tu Presupuesto | Gasfiter Autorizado SEC";
$page_description = "Solicita tu presupuesto a domicilio para gasfitería autorizada SEC: detección de fugas de gas con gas trazador, sellado Prodoral R6-1 sin romper, reparación de calefonts y destapes. Asistencia técnica inmediata por WhatsApp o al 9 3223 7072.";
$breadcrumb_title = "Cotizador Online";
$breadcrumb_url = "https://gasfiter-autorizado.cl/cotizar";

$faqs = [
  [
    "question" => "¿La cotización en línea tiene algún costo o compromiso?",
    "answer" => "No, solicitar tu cotización o visita de evaluación técnica es 100% libre de compromiso. Nuestro especialista coordina contigo por WhatsApp o llamada directa para agendar la atención."
  ],
  [
    "question" => "¿Cómo se determina el presupuesto definitivo del trabajo?",
    "answer" => "El instalador autorizado SEC evalúa en terreno la red y los artefactos con instrumental calibrado (manómetros, gas trazador, termografía). Te entrega el presupuesto cerrado y detallado antes de iniciar cualquier reparación, garantizando transparencia absoluta."
  ],
  [
    "question" => "¿Qué formas de pago están disponibles?",
    "answer" => "Aceptamos pago con tarjeta de crédito en cuotas, tarjeta de débito Redcompra, transferencia bancaria y efectivo, siempre respaldado con boleta o factura legal."
  ]
];

include_once __DIR__ . '/includes/header.php';
include_once __DIR__ . '/includes/faq-schema.php';
?>

<!-- Hero Section Cotizador -->
<section class="hero-section" style="padding: 3.5rem 0 4rem 0;">
  <div class="container" style="text-align: center; max-width: 850px;">
    <span class="hero-badge-sec">Evaluación Técnica en Terreno</span>
    <h1 class="hero-title" style="font-size: 2.6rem;">Cotizador y Solicitud de Servicio Técnico SEC</h1>
    <p class="hero-subtitle" style="margin-left: auto; margin-right: auto;">
      Completa los datos de tu requerimiento y recibe atención prioritaria y presupuesto personalizado directamente con nuestro equipo de guardia.
    </p>
  </div>
</section>

<!-- Calculator Section -->
<section class="section-padding quote-section" style="background: var(--bg-body);">
  <div class="container">
    <div class="calculator-card" style="background: #ffffff;">
      <form id="interactive-calc-form">
        <input type="hidden" id="calc-service-input" name="service" value="fuga-gas">

        <div class="calc-step-header">
          <span class="calc-step-title">1. Selecciona tu Requerimiento Técnico</span>
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
          <span class="calc-step-title">2. Información del Inmueble y Contacto</span>
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
              <option value="inmediata">🚨 Urgente (Respuesta en 30 a 40 min)</option>
              <option value="hoy">📅 Durante el Día</option>
              <option value="programada">🗓️ Programar para fecha posterior</option>
            </select>
          </div>

          <div class="form-group">
            <label for="calc-name">Nombre y Apellido</label>
            <input type="text" id="calc-name" name="name" class="form-control" placeholder="Ej: Marcela Gómez" required>
          </div>

          <div class="form-group">
            <label for="calc-phone">Teléfono de Contacto</label>
            <input type="tel" id="calc-phone" name="phone" class="form-control" placeholder="Ej: 9 8765 4321" required>
          </div>

          <div class="form-group">
            <label for="calc-details">Detalle del Requerimiento</label>
            <input type="text" id="calc-details" name="details" class="form-control" placeholder="Ej: Necesito certificación Sello Verde para edificio">
          </div>
        </div>

        <div class="calc-estimate-box">
          <div class="calc-estimate-text">
            <span style="color: var(--text-muted);">Modalidad de Presupuesto:</span>
            <strong id="calc-estimate-range" style="color: var(--primary);">A Cotizar (Evaluación con Gas Trazador y Manómetro)</strong>
          </div>
          <div class="calc-estimate-text" style="text-align: right;">
            <span style="color: var(--text-muted);">Tiempo de Asignación:</span>
            <strong id="calc-estimate-time" style="color: var(--sec-green);">🚨 Respuesta Prioritaria en 30 a 40 min</strong>
          </div>
        </div>

        <button type="submit" class="btn-calc-submit">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.312.045-.698.073-2.027-.478-1.637-.678-2.685-2.355-2.766-2.464-.082-.11-.652-.868-.652-1.652 0-.783.411-1.168.558-1.326.147-.158.322-.197.43-.197.108 0 .216.002.311.007.101.006.236-.039.37.283.136.323.468 1.141.51 1.226.042.086.069.185.011.3-.058.115-.088.188-.175.29-.088.102-.185.228-.264.307-.088.087-.18.182-.077.36.103.177.46 1.029 1.157 1.65.897.799 1.653 1.046 1.888 1.162.235.116.372.102.51-.057.138-.158.591-.688.749-.924.158-.236.316-.197.531-.118.216.079 1.369.646 1.605.764.236.118.393.177.45.275.058.098.058.571-.086.976z"/></svg>
          Enviar Solicitud por WhatsApp
        </button>
      </form>
    </div>
  </div>
</section>

<!-- FAQs Section -->
<section class="section-padding faqs-section">
  <div class="container">
    <div class="section-header">
      <span class="section-tag">Preguntas Frecuentes</span>
      <h2 class="section-title">Consultas sobre Presupuestos y Pagos</h2>
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

<script src="assets/js/calculator.js" defer></script>

<?php include_once __DIR__ . '/includes/cta-urgencia.php'; ?>
<?php include_once __DIR__ . '/includes/footer.php'; ?>
