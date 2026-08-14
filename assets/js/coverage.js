/**
 * Gasfiter Autorizado Certificado SEC - Coverage Search & Filtering
 */

document.addEventListener('DOMContentLoaded', () => {
  const searchInput = document.getElementById('comuna-search-input');
  const comunaPills = document.querySelectorAll('.comuna-pill');
  const regionBlocks = document.querySelectorAll('.region-block');
  const noResultsMsg = document.getElementById('comunas-no-results');

  function normalizeText(str) {
    return str.toLowerCase().normalize("NFD").replace(/[\u0300-\u036f]/g, "").trim();
  }

  if (searchInput) {
    searchInput.addEventListener('input', (e) => {
      const term = normalizeText(e.target.value);
      let totalVisible = 0;

      regionBlocks.forEach(block => {
        let blockHasMatches = false;
        const pills = block.querySelectorAll('.comuna-pill');
        
        pills.forEach(pill => {
          const text = normalizeText(pill.textContent);
          if (text.includes(term)) {
            pill.style.display = 'inline-flex';
            blockHasMatches = true;
            totalVisible++;
          } else {
            pill.style.display = 'none';
          }
        });

        if (blockHasMatches) {
          block.style.display = 'block';
        } else {
          block.style.display = 'none';
        }
      });

      if (noResultsMsg) {
        noResultsMsg.style.display = (totalVisible === 0) ? 'block' : 'none';
      }
    });
  }
});
