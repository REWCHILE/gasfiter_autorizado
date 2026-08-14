/**
 * Gasfiter Autorizado Certificado SEC - Interactive Quote Calculator (100% A Cotizar)
 */

document.addEventListener('DOMContentLoaded', () => {
  const calcForm = document.getElementById('interactive-calc-form');
  const serviceButtons = document.querySelectorAll('.calc-service-btn');
  const selectedServiceInput = document.getElementById('calc-service-input');
  const calcComunaSelect = document.getElementById('calc-comuna');
  const calcPropertySelect = document.getElementById('calc-property');
  const calcUrgencySelect = document.getElementById('calc-urgency');
  const calcEstimateRange = document.getElementById('calc-estimate-range');
  const calcEstimateTime = document.getElementById('calc-estimate-time');

  let selectedServiceName = "Detección / Reparación Fuga de Gas 24/7";

  const serviceDescriptions = {
    "fuga-gas": {
      name: "Detección / Reparación Fuga de Gas 24/7",
      scope: "A Cotizar (Evaluación con Gas Trazador y Manómetro)",
      time: "Llegada en 30 a 45 min"
    },
    "prodoral": {
      name: "Sellado Prodoral R200 Sin Picar Pisos",
      scope: "A Cotizar (Polimerización Interna Homologada SEC)",
      time: "Atención Durante el Día"
    },
    "calefont": {
      name: "Mantención / Reparación de Calefont y Calderas",
      scope: "A Cotizar (Servicio Técnico Multimarca a Domicilio)",
      time: "Llegada en 45 a 60 min"
    },
    "destape": {
      name: "Destape de Alcantarillado con Hidrojet",
      scope: "A Cotizar (Alta Presión + Video Inspección CCTV)",
      time: "Llegada en 30 a 60 min"
    },
    "fuga-agua": {
      name: "Detección de Fuga de Agua con Geófono",
      scope: "A Cotizar (Diagnóstico Acústico y Termografía Infrarroja)",
      time: "Llegada en 45 min"
    },
    "sec-cert": {
      name: "Certificación SEC, Sello Verde y Trámites TC6",
      scope: "A Cotizar (Inspección Reglamentaria DS 66)",
      time: "Coordinación 24 a 48 hrs"
    }
  };

  function updateEstimate() {
    const serviceKey = selectedServiceInput ? selectedServiceInput.value : "fuga-gas";
    const data = serviceDescriptions[serviceKey] || serviceDescriptions["fuga-gas"];
    
    if (calcEstimateRange) {
      calcEstimateRange.textContent = data.scope;
    }
    if (calcEstimateTime) {
      if (calcUrgencySelect && calcUrgencySelect.value === 'inmediata') {
        calcEstimateTime.textContent = "🚨 Llegada Prioritaria en 30 a 45 min";
      } else {
        calcEstimateTime.textContent = data.time;
      }
    }
  }

  // Handle service button selection
  serviceButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      serviceButtons.forEach(b => b.classList.remove('selected'));
      btn.classList.add('selected');
      const serviceVal = btn.getAttribute('data-service');
      if (selectedServiceInput) selectedServiceInput.value = serviceVal;
      selectedServiceName = btn.querySelector('.calc-service-name').textContent;
      updateEstimate();
    });
  });

  if (calcPropertySelect) calcPropertySelect.addEventListener('change', updateEstimate);
  if (calcUrgencySelect) calcUrgencySelect.addEventListener('change', updateEstimate);

  // Form Submit Handler
  if (calcForm) {
    calcForm.addEventListener('submit', (e) => {
      e.preventDefault();
      
      const clientName = document.getElementById('calc-name') ? document.getElementById('calc-name').value : '';
      const clientPhone = document.getElementById('calc-phone') ? document.getElementById('calc-phone').value : '';
      const clientComuna = calcComunaSelect ? calcComunaSelect.value : 'Santiago';
      const clientUrgency = calcUrgencySelect ? calcUrgencySelect.options[calcUrgencySelect.selectedIndex].text : 'Inmediata';
      const clientProperty = calcPropertySelect ? calcPropertySelect.options[calcPropertySelect.selectedIndex].text : 'Casa Residencial';
      const clientDetails = document.getElementById('calc-details') ? document.getElementById('calc-details').value : '';

      // Build WhatsApp message without any prices
      let message = `Hola Gasfiter Autorizado Certificado SEC,\n`;
      message += `Solicito cotización técnica a domicilio:\n`;
      message += `• *Servicio:* ${selectedServiceName}\n`;
      message += `• *Comuna:* ${clientComuna}\n`;
      message += `• *Tipo de Inmueble:* ${clientProperty}\n`;
      message += `• *Urgencia:* ${clientUrgency}\n`;
      if (clientName) message += `• *Nombre:* ${clientName}\n`;
      if (clientPhone) message += `• *Teléfono:* ${clientPhone}\n`;
      if (clientDetails) message += `• *Detalle del problema:* ${clientDetails}\n`;
      message += `\nFavor confirmar disponibilidad del especialista SEC. Gracias.`;

      const whatsappUrl = `https://api.whatsapp.com/send?phone=56932237072&text=${encodeURIComponent(message)}`;

      // Save via AJAX in background
      const formData = new FormData(calcForm);
      fetch('api/quote.php', {
        method: 'POST',
        body: formData
      }).catch(err => console.log('Lead recorded'));

      // Open WhatsApp
      window.open(whatsappUrl, '_blank');
    });
  }

  // Initial calculation
  updateEstimate();
});
