<?php
/**
 * Gasfiter Autorizado Certificado SEC - Contacto y Central de Emergencias 24/7
 */
$page_title = "Contacto Gasfiter Autorizado SEC | Central de Emergencias 24/7";
$page_description = "Contacta a la Central de Gasfiter Autorizado Certificado SEC. Asistencia técnica inmediata al 9 3223 7072 o por WhatsApp. Dirección: Av Libertador Bernardo O’Higgins 1302, Santiago, Chile.";
$breadcrumb_title = "Contacto";
$breadcrumb_url = "https://gasfiter-autorizado.cl/contacto";

$faqs = [
  [
    "question" => "¿Qué medios de pago aceptan para los servicios de gasfitería?",
    "answer" => "Aceptamos efectivo, tarjetas de débito (Redcompra), tarjetas de crédito (con opción de cuotas) y transferencia bancaria directa. Todos los pagos se respaldan con boleta o factura electrónica."
  ],
  [
    "question" => "¿Cómo puedo solicitar una visita técnica urgente?",
    "answer" => "Puede llamar inmediatamente a nuestra línea telefónica directa 9 3223 7072 o escribirnos por WhatsApp con su dirección y tipo de emergencia. Un técnico asignado se pondrá en contacto y le responderá y coordinará en 30 a 40 minutos."
  ]
];

include_once __DIR__ . '/includes/header.php';
include_once __DIR__ . '/includes/faq-schema.php';
?>

<!-- Hero Section Contacto -->
<section class="hero-section" style="padding: 3.5rem 0 4rem 0;">
  <div class="container" style="text-align: center; max-width: 850px;">
    <span class="hero-badge-sec">Central Telefónica 24/7</span>
    <h1 class="hero-title" style="font-size: 2.6rem;">Contacto y Central de Emergencias</h1>
    <p class="hero-subtitle" style="margin-left: auto; margin-right: auto;">
      Estamos a su disposición las 24 horas del día, los 365 días del año para resolver cualquier requerimiento en gas, agua y calefacción.
    </p>
  </div>
</section>

<!-- Contact Info & Form -->
<section class="section-padding" style="background: var(--bg-body);">
  <div class="container">
    <div class="contact-page-grid">
      
      <!-- Direct Contact Channels -->
      <div style="display: flex; flex-direction: column; gap: 1.5rem;">
        <div style="background: #ffffff; border: 1px solid var(--border-color); border-radius: var(--radius-xl); padding: 2rem; box-shadow: var(--shadow-sm);">
          <h2 style="font-size: 1.4rem; color: var(--primary); margin-bottom: 1.5rem; display: flex; align-items: center; gap: 0.5rem;">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
            Canales de Atención Directa
          </h2>

          <div style="display: flex; flex-direction: column; gap: 1.25rem;">
            <div style="display: flex; align-items: flex-start; gap: 1rem;">
              <div style="width: 44px; height: 44px; border-radius: var(--radius-md); background: #fee2e2; color: var(--safety-red); display: flex; align-items: center; justify-content: center; font-size: 1.25rem; flex-shrink: 0;">
                📞
              </div>
              <div>
                <strong style="color: var(--text-muted); font-size: 0.85rem; display: block;">Teléfono Central 24 Horas:</strong>
                <a href="tel:932237072" style="font-size: 1.35rem; font-weight: 900; color: var(--safety-red);">9 3223 7072</a>
              </div>
            </div>

            <div style="display: flex; align-items: flex-start; gap: 1rem;">
              <div style="width: 44px; height: 44px; border-radius: var(--radius-md); background: #dcfce7; color: #15803d; display: flex; align-items: center; justify-content: center; font-size: 1.25rem; flex-shrink: 0;">
                💬
              </div>
              <div>
                <strong style="color: var(--text-muted); font-size: 0.85rem; display: block;">WhatsApp Urgencias 24/7:</strong>
                <a href="https://api.whatsapp.com/send?phone=56932237072&text=Hola,%20necesito%20asistencia%20de%20un%20Gasfiter%20Autorizado%20SEC" target="_blank" rel="noopener noreferrer" style="font-size: 1.1rem; font-weight: 800; color: #15803d;">+56 9 3223 7072</a>
              </div>
            </div>

            <div style="display: flex; align-items: flex-start; gap: 1rem;">
              <div style="width: 44px; height: 44px; border-radius: var(--radius-md); background: #e0f2fe; color: #0284c7; display: flex; align-items: center; justify-content: center; font-size: 1.25rem; flex-shrink: 0;">
                📍
              </div>
              <div>
                <strong style="color: var(--text-muted); font-size: 0.85rem; display: block;">Dirección Postal:</strong>
                <span style="font-size: 0.95rem; color: var(--primary); font-weight: 600;">Av Libertador Bernardo O’Higgins 1302, Santiago, Chile</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Institutional SEC Badge -->
        <div style="background: #0f2b48; color: #ffffff; border-radius: var(--radius-xl); padding: 1.75rem; display: flex; align-items: center; gap: 1.25rem;">
          <img src="assets/images/qr-sec.webp" alt="Validación QR SEC" style="width: 70px; height: 70px; background: #fff; padding: 3px; border-radius: var(--radius-sm);" loading="lazy" decoding="async">
          <div>
            <strong style="color: #6ee7b7; font-size: 1rem; display: block; margin-bottom: 0.25rem;">Acreditación Oficial SEC</strong>
            <span style="font-size: 0.85rem; color: #cbd5e1; line-height: 1.4; display: block;">Instalador Autorizado Domingo Isain Caamaño. Cobertura en toda la Región Metropolitana y Regiones.</span>
          </div>
        </div>
      </div>

      <!-- Contact Message Form -->
      <div style="background: #ffffff; border: 1px solid var(--border-color); border-radius: var(--radius-xl); padding: 2.5rem; box-shadow: var(--shadow-sm);">
        <h2 style="font-size: 1.4rem; color: var(--primary); margin-bottom: 0.5rem;">Envíanos un Mensaje</h2>
        <p style="color: var(--text-muted); font-size: 0.9rem; margin-bottom: 1.5rem;">
          Complete el formulario y un técnico especialista se pondrá en contacto en minutos.
        </p>

        <form id="contact-form" action="api/contact.php" method="POST">
          <div class="calc-form-grid" style="margin-bottom: 1.25rem;">
            <div class="form-group">
              <label for="contact-name">Nombre Completo</label>
              <input type="text" id="contact-name" name="name" class="form-control" placeholder="Ej: Andrea Silva" required>
            </div>
            <div class="form-group">
              <label for="contact-phone">Teléfono / Móvil</label>
              <input type="tel" id="contact-phone" name="phone" class="form-control" placeholder="Ej: 9 8765 4321" required>
            </div>
            <div class="form-group">
              <label for="contact-email">Correo Electrónico</label>
              <input type="email" id="contact-email" name="email" class="form-control" placeholder="Ej: correo@ejemplo.cl">
            </div>
            <div class="form-group">
              <label for="contact-comuna">Comuna</label>
              <input type="text" id="contact-comuna" name="comuna" class="form-control" placeholder="Ej: Las Condes" required>
            </div>
          </div>

          <div class="form-group" style="margin-bottom: 1.25rem;">
            <label for="contact-service">Servicio Requerido</label>
            <select id="contact-service" name="service" class="form-control" required>
              <option value="Fuga de Gas">Detección / Reparación de Fuga de Gas</option>
              <option value="Sellado Prodoral R6-1">Sellado Prodoral R6-1 Sin Picar</option>
              <option value="Certificación SEC">Certificación SEC / Sello Verde / TC6</option>
              <option value="Reparación Calefont">Reparación / Mantención de Calefont o Caldera</option>
              <option value="Destape Alcantarillado">Destape de Alcantarillado con Hidrojet</option>
              <option value="Fuga de Agua">Detección de Fuga de Agua con Geófono</option>
              <option value="Otro">Otro requerimiento técnico</option>
            </select>
          </div>

          <div class="form-group" style="margin-bottom: 1.5rem;">
            <label for="contact-message">Mensaje o Detalle del Problema</label>
            <textarea id="contact-message" name="message" class="form-control" rows="4" placeholder="Describa brevemente la situación o dirección del inmueble..."></textarea>
          </div>

          <div id="contact-feedback" style="display: none; padding: 0.85rem; border-radius: var(--radius-md); margin-bottom: 1rem; font-size: 0.9rem;"></div>

          <button type="submit" class="btn-calc-submit">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
            Enviar Mensaje
          </button>
        </form>
      </div>

    </div>
  </div>
</section>

<!-- FAQs Section -->
<section class="section-padding faqs-section">
  <div class="container">
    <div class="section-header">
      <span class="section-tag">Preguntas Frecuentes</span>
      <h2 class="section-title">Consultas sobre Atención y Métodos de Pago</h2>
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

<script>
document.addEventListener('DOMContentLoaded', () => {
  const contactForm = document.getElementById('contact-form');
  const feedbackEl = document.getElementById('contact-feedback');

  if (contactForm && feedbackEl) {
    contactForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const formData = new FormData(contactForm);
      
      fetch('api/contact.php', {
        method: 'POST',
        body: formData
      })
      .then(res => res.json())
      .then(data => {
        if (data.success) {
          feedbackEl.style.display = 'block';
          feedbackEl.style.background = 'var(--sec-green-bg)';
          feedbackEl.style.color = 'var(--sec-green)';
          feedbackEl.style.border = '1px solid var(--sec-green)';
          feedbackEl.textContent = '✓ ' + data.message;
          contactForm.reset();
        } else {
          feedbackEl.style.display = 'block';
          feedbackEl.style.background = '#fef2f2';
          feedbackEl.style.color = 'var(--safety-red)';
          feedbackEl.style.border = '1px solid var(--safety-red)';
          feedbackEl.textContent = '✕ Error al enviar el mensaje. Por favor llame al 9 3223 7072.';
        }
      })
      .catch(() => {
        feedbackEl.style.display = 'block';
        feedbackEl.style.background = '#fef2f2';
        feedbackEl.style.color = 'var(--safety-red)';
        feedbackEl.style.border = '1px solid var(--safety-red)';
        feedbackEl.textContent = '✕ Error de conexión. Por favor llame directamente al 9 3223 7072.';
      });
    });
  }
});
</script>

<?php include_once __DIR__ . '/includes/cta-urgencia.php'; ?>
<?php include_once __DIR__ . '/includes/footer.php'; ?>
