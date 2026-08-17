<!DOCTYPE html>
<html lang="es-CL">
<head>
  <base href="/">
  <?php include_once __DIR__ . '/seo-meta.php'; ?>
  <!-- Google Fonts Preconnect & Optimized Loading -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&family=Outfit:wght@600;700;800;900&display=swap">

  <!-- Core Stylesheets -->
  <link rel="stylesheet" href="/assets/css/main.css">
  <link rel="stylesheet" href="/assets/css/responsive.css">

  <!-- Favicons -->
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon-16x16.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/apple-touch-icon.png">
</head>
<body>

  <!-- Topbar Emergency 24/7 -->
  <aside class="topbar-emergency" aria-label="Aviso de Emergencias 24 Horas">
    <div class="container topbar-container">
      <div class="topbar-left">
        <span class="radar-live">
          <span class="radar-dot"></span>
          Urgencias 24/7
        </span>
        <span class="topbar-text">
          <strong>+40 años de trayectoria</strong> prestando servicios de gasfitería autorizada SEC
        </span>
      </div>

      <div class="topbar-right">
        <span class="topbar-item">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
          Instaladores Autorizados SEC
        </span>
        <span class="topbar-item">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
          Respuesta 30 a 40 min
        </span>
        <a href="tel:932237072" class="topbar-phone-link" aria-label="Llamar a Central Gasfiter Autorizado">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
          Central: 9 3223 7072
        </a>
      </div>
    </div>
  </aside>

  <!-- Main Sticky Navigation Header -->
  <header class="header-main" id="header-main">
    <div class="container navbar-container">
      <!-- Brand Logo & Identity -->
      <a href="/" class="brand-logo-link" aria-label="Gasfiter Autorizado SEC - Inicio">
        <img src="/assets/images/logo.webp" alt="Logotipo Gasfiter Autorizado SEC" class="brand-logo-img" width="46" height="46" decoding="async">
        <div class="brand-text-block">
          <span class="brand-name">Gasfiter<span>Autorizado</span></span>
          <span class="brand-sub">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
            SEC AUTORIZADO 24/7
          </span>
        </div>
      </a>

      <!-- Desktop Navigation Menu -->
      <nav class="desktop-nav" aria-label="Menú Principal">
        <ul class="nav-menu-desktop">
          <li class="nav-item">
            <a href="/" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>">Inicio</a>
          </li>

          <li class="nav-item">
            <a href="/servicios" class="nav-link <?php echo (in_array(basename($_SERVER['PHP_SELF']), ['servicios.php', 'fuga-de-gas.php', 'prodoral.php', 'gasfiter-sec.php', 'calefont.php', 'destape-alcantarillado.php'])) ? 'active' : ''; ?>">
              Servicios
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="/fuga-de-gas" class="dropdown-link">
                  <span class="dropdown-icon" style="color: var(--safety-red);">🔥</span>
                  <div>
                    <strong>Fugas de Gas 24/7</strong>
                    <div style="font-size: 0.75rem; color: var(--text-muted);">Gas trazador & hermeticidad</div>
                  </div>
                </a>
              </li>
              <li>
                <a href="/prodoral" class="dropdown-link">
                  <span class="dropdown-icon" style="color: #0284c7;">🧪</span>
                  <div>
                    <strong>Sellado Prodoral R6-1</strong>
                    <div style="font-size: 0.75rem; color: var(--text-muted);">Reparación sin romper pisos</div>
                  </div>
                </a>
              </li>
              <li>
                <a href="/gasfiter-sec" class="dropdown-link">
                  <span class="dropdown-icon" style="color: var(--sec-green);">🛡️</span>
                  <div>
                    <strong>Certificación Sello Verde SEC</strong>
                    <div style="font-size: 0.75rem; color: var(--text-muted);">Inspección y regularización TC6</div>
                  </div>
                </a>
              </li>
              <li>
                <a href="/calefont" class="dropdown-link">
                  <span class="dropdown-icon" style="color: #f59e0b;">⚡</span>
                  <div>
                    <strong>Calefont & Calderas</strong>
                    <div style="font-size: 0.75rem; color: var(--text-muted);">Mantención multimarca</div>
                  </div>
                </a>
              </li>
              <li>
                <a href="/destape-alcantarillado" class="dropdown-link">
                  <span class="dropdown-icon" style="color: #06b6d4;">🌊</span>
                  <div>
                    <strong>Destapes con Hidrojet</strong>
                    <div style="font-size: 0.75rem; color: var(--text-muted);">Cámara CCTV e inspección</div>
                  </div>
                </a>
              </li>
              <li>
                <a href="/servicios" class="dropdown-link" style="border-top: 1px solid var(--border-light);">
                  <span class="dropdown-icon">📋</span>
                  <div>
                    <strong>Ver Todos los Servicios</strong>
                    <div style="font-size: 0.75rem; color: var(--text-muted);">Catálogo técnico integral</div>
                  </div>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="/cobertura" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'cobertura.php') ? 'active' : ''; ?>">Cobertura</a>
          </li>

          <li class="nav-item">
            <a href="/cotizar" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'cotizar.php') ? 'active' : ''; ?>">Cotizador</a>
          </li>

          <li class="nav-item">
            <a href="/contacto" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'contacto.php') ? 'active' : ''; ?>">Contacto</a>
          </li>
        </ul>
      </nav>

      <!-- Action Buttons -->
      <div class="nav-actions">
        <a href="tel:932237072" class="btn-header-call" aria-label="Llamar al 9 3223 7072">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
          9 3223 7072
        </a>
        <a href="/cotizar" class="btn-header-quote">
          Cotizar en Línea
        </a>
      </div>

      <!-- Mobile Menu Button -->
      <button class="mobile-toggle-btn" id="mobile-toggle-btn" aria-label="Abrir Menú">
        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
      </button>
    </div>
  </header>

  <!-- Mobile Drawer Menu -->
  <div class="mobile-overlay" id="mobile-overlay"></div>
  <aside class="mobile-nav-drawer" id="mobile-nav-drawer" aria-label="Menú Móvil">
    <div class="mobile-nav-header">
      <a href="/" class="brand-logo-link">
        <img src="/assets/images/logo.webp" alt="Logo Gasfiter Autorizado SEC" width="38" height="38" loading="lazy" decoding="async">
        <div class="brand-text-block">
          <span class="brand-name" style="font-size: 1.15rem;">Gasfiter<span>Autorizado</span></span>
          <span class="brand-sub">SEC 24/7</span>
        </div>
      </a>
      <button id="mobile-close-btn" style="background:none; border:none; padding:0.4rem; cursor:pointer;" aria-label="Cerrar Menú">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
      </button>
    </div>

    <ul class="mobile-nav-links">
      <li>
        <a href="/" class="mobile-nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>">
          Inicio
        </a>
      </li>
      <li>
        <a href="/servicios" class="mobile-nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'servicios.php') ? 'active' : ''; ?>">
          Servicios Especializados
        </a>
        <ul class="mobile-sub-menu">
          <li><a href="/fuga-de-gas" class="mobile-sub-link">🔥 Fugas de Gas 24/7</a></li>
          <li><a href="/prodoral" class="mobile-sub-link">🧪 Sellado Prodoral R6-1</a></li>
          <li><a href="/gasfiter-sec" class="mobile-sub-link">🛡️ Certificación Sello Verde SEC</a></li>
          <li><a href="/calefont" class="mobile-sub-link">⚡ Calefont y Calderas</a></li>
          <li><a href="/destape-alcantarillado" class="mobile-sub-link">🌊 Destapes con Hidrojet</a></li>
        </ul>
      </li>
      <li>
        <a href="/cobertura" class="mobile-nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'cobertura.php') ? 'active' : ''; ?>">
          Cobertura por Comunas
        </a>
      </li>
      <li>
        <a href="/cotizar" class="mobile-nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'cotizar.php') ? 'active' : ''; ?>">
          Cotizador en Línea
        </a>
      </li>
      <li>
        <a href="/contacto" class="mobile-nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'contacto.php') ? 'active' : ''; ?>">
          Contacto y Emergencias
        </a>
      </li>
    </ul>

    <div style="margin-top: auto; padding-top: 1.5rem; display: flex; flex-direction: column; gap: 0.75rem;">
      <a href="tel:932237072" class="btn-hero-primary" style="justify-content: center; font-size: 0.95rem; padding: 0.75rem;">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
        Llamar al 9 3223 7072
      </a>
      <a href="https://api.whatsapp.com/send?phone=56932237072&text=Hola,%20necesito%20un%20Gasfiter%20Autorizado%20SEC%20urgente" class="btn-cta-whatsapp" style="justify-content: center; font-size: 0.95rem; padding: 0.75rem;" target="_blank" rel="noopener noreferrer">
        WhatsApp Urgencias 24/7
      </a>
    </div>
  </aside>

  <!-- Semantic Main Content Landmark -->
  <main id="main-content">
