  <!-- Footer -->
  <footer class="footer-main" id="footer-main">
    <div class="container">
      <div class="footer-grid">
        <!-- Brand and Credentials -->
        <div class="footer-brand-block">
          <div class="footer-brand-title">
            Gasfiter<span>Autorizado</span> SEC
          </div>
          <p class="footer-desc">
            Servicio profesional de gasfitería especializada con certificación SEC. Más de 40 años de experiencia prestando soluciones seguras en redes de gas, agua potable, calefacción, destapes con hidrojet y sellado Prodoral R200.
          </p>
          <div style="display: flex; align-items: center; gap: 0.75rem; margin-top: 0.5rem;">
            <img src="assets/images/qr-sec.png" alt="Validación QR SEC" style="width: 48px; height: 48px; background: #fff; padding: 2px; border-radius: 4px;">
            <div style="font-size: 0.75rem; color: #94a3b8;">
              <strong style="color: var(--sec-green-light); display: block;">Certificación Oficial SEC</strong>
              Instalador Autorizado Clase 1<br>
              Director General: Domingo Isain
            </div>
          </div>
        </div>

        <!-- Quick Links -->
        <div>
          <h3 class="footer-heading">Servicios Especializados</h3>
          <ul class="footer-links-list">
            <li><a href="fuga-de-gas.php" class="footer-link">Detección de Fugas de Gas 24/7</a></li>
            <li><a href="prodoral.php" class="footer-link">Sellado Prodoral R200 sin picar</a></li>
            <li><a href="gasfiter-sec.php" class="footer-link">Certificación Sello Verde SEC</a></li>
            <li><a href="calefont.php" class="footer-link">Reparación de Calefont Junkers / Rheem</a></li>
            <li><a href="destape-alcantarillado.php" class="footer-link">Destapes con Hidrojet y Cámara CCTV</a></li>
            <li><a href="servicios.php" class="footer-link">Fugas de Agua con Geófono</a></li>
          </ul>
        </div>

        <!-- Coverage & Comunas -->
        <div>
          <h3 class="footer-heading">Cobertura Destacada</h3>
          <ul class="footer-links-list">
            <li><a href="cobertura.php" class="footer-link">Las Condes, Vitacura & Lo Barnechea</a></li>
            <li><a href="cobertura.php" class="footer-link">Providencia, Ñuñoa & La Reina</a></li>
            <li><a href="cobertura.php" class="footer-link">Santiago Centro & Estación Central</a></li>
            <li><a href="cobertura.php" class="footer-link">La Florida & Puente Alto</a></li>
            <li><a href="cobertura.php" class="footer-link">San Bernardo & San Miguel</a></li>
            <li><a href="cobertura.php" class="footer-link">Chicureo, Colina & Huechuraba</a></li>
            <li><a href="cobertura.php" class="footer-link">Valparaíso, Viña & Villa Alemana</a></li>
          </ul>
        </div>

        <!-- Contact & Direct Assistance -->
        <div>
          <h3 class="footer-heading">Central de Atención 24/7</h3>
          <ul class="footer-contact-list">
            <li class="footer-contact-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
              <div>
                <strong>Teléfono Directo:</strong><br>
                <a href="tel:932237072" style="color: #ffffff; font-weight: 700; font-size: 1.05rem;">9 3223 7072</a>
              </div>
            </li>
            <li class="footer-contact-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
              <div>
                <strong>Dirección Central:</strong><br>
                Av Libertador Bernardo O’Higgins 1302, Santiago, Chile
              </div>
            </li>
            <li class="footer-contact-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
              <div>
                <strong>Horario de Urgencias:</strong><br>
                24 Horas / 7 Días a la Semana
              </div>
            </li>
          </ul>
        </div>
      </div>

      <!-- Footer Bottom -->
      <div class="footer-bottom">
        <div>
          © <?php echo date('Y'); ?> <strong>Gasfiter Autorizado Certificado SEC</strong> - Instalgaschile ®. Todos los derechos reservados.
        </div>
        <div style="display: flex; gap: 1.5rem;">
          <a href="cotizar.php" class="footer-link">Cotizador Online</a>
          <a href="cobertura.php" class="footer-link">Comunas</a>
          <a href="contacto.php" class="footer-link">Emergencias 24/7</a>
        </div>
      </div>
    </div>
  </footer>

  <?php include_once __DIR__ . '/floating-buttons.php'; ?>
  <?php include_once __DIR__ . '/toast-activity.php'; ?>

  <!-- Core JavaScript -->
  <script src="assets/js/main.js" defer></script>
</body>
</html>
