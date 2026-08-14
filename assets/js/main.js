/**
 * Gasfiter Autorizado Certificado SEC - Master Script
 * Interactive UI, Mobile Navigation, Accordions & Live Toast
 */

document.addEventListener('DOMContentLoaded', () => {
  // 1. Mobile Navigation Toggle & Drawer
  const mobileToggleBtn = document.getElementById('mobile-toggle-btn');
  const mobileCloseBtn = document.getElementById('mobile-close-btn');
  const mobileNavDrawer = document.getElementById('mobile-nav-drawer');
  const mobileOverlay = document.getElementById('mobile-overlay');

  function openMobileNav() {
    if (mobileNavDrawer && mobileOverlay) {
      mobileNavDrawer.classList.add('open');
      mobileOverlay.classList.add('active');
      document.body.style.overflow = 'hidden';
    }
  }

  function closeMobileNav() {
    if (mobileNavDrawer && mobileOverlay) {
      mobileNavDrawer.classList.remove('open');
      mobileOverlay.classList.remove('active');
      document.body.style.overflow = '';
    }
  }

  if (mobileToggleBtn) mobileToggleBtn.addEventListener('click', openMobileNav);
  if (mobileCloseBtn) mobileCloseBtn.addEventListener('click', closeMobileNav);
  if (mobileOverlay) mobileOverlay.addEventListener('click', closeMobileNav);

  // 2. Sticky Header Scroll Effect
  const headerMain = document.getElementById('header-main');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 40) {
      if (headerMain) headerMain.classList.add('scrolled');
    } else {
      if (headerMain) headerMain.classList.remove('scrolled');
    }
  });

  // 3. FAQ Accordion Functionality
  const accordionItems = document.querySelectorAll('.accordion-item');
  accordionItems.forEach(item => {
    const header = item.querySelector('.accordion-header');
    if (header) {
      header.addEventListener('click', () => {
        const isActive = item.classList.contains('active');
        // Close other items
        accordionItems.forEach(other => {
          if (other !== item) other.classList.remove('active');
        });
        // Toggle current item
        item.classList.toggle('active', !isActive);
      });
    }
  });

  // 4. Live Activity Toast (Social Proof)
  const toastEl = document.getElementById('toast-activity');
  const toastTitle = document.getElementById('toast-title');
  const toastDesc = document.getElementById('toast-desc');

  const toastNotifications = [
    { title: "Servicio Asignado", desc: "Técnico SEC en camino a Las Condes (hace 2 min)" },
    { title: "Fuga de Gas Detectada", desc: "Inspección con Gas Trazador en Providencia finalizada" },
    { title: "Urgencia 24/7 Atendida", desc: "Reparación de Calefont Junkers en Ñuñoa (hace 5 min)" },
    { title: "Sellado Prodoral R6-1", desc: "Matriz sellada con éxito en Vitacura sin picar" },
    { title: "Destape de Alcantarillado", desc: "Camión Hidrojet operativo en Puente Alto" },
    { title: "Certificación SEC", desc: "Sello Verde emitido en San Miguel (hace 12 min)" },
    { title: "Atención Inmediata", desc: "Gasfiter Autorizado asignado en Chicureo / Colina" },
    { title: "Fuga de Agua Reparada", desc: "Localización con Geófono en La Florida" }
  ];

  if (toastEl && toastTitle && toastDesc) {
    let toastIndex = 0;
    
    function showToast() {
      const item = toastNotifications[toastIndex];
      toastTitle.textContent = item.title;
      toastDesc.textContent = item.desc;
      
      toastEl.classList.add('show');
      
      setTimeout(() => {
        toastEl.classList.remove('show');
      }, 5000);

      toastIndex = (toastIndex + 1) % toastNotifications.length;
    }

    // First trigger after 6 seconds, then repeat every 18 seconds
    setTimeout(() => {
      showToast();
      setInterval(showToast, 18000);
    }, 6000);
  }
});
