// =================== HEADER ======================
document.addEventListener('DOMContentLoaded', () => {
  const dropdownToggle = document.querySelector('.dropdown-toggle');
  const dropdownParent = document.querySelector('.nav-item-dropdown');

  if (dropdownToggle && dropdownParent) {
    dropdownToggle.addEventListener('click', (e) => {
      e.stopPropagation();
      // Bascule la classe active pour afficher/masquer
      dropdownParent.classList.toggle('active');
      
      // Met à jour l'accessibilité
      const isExpanded = dropdownParent.classList.contains('active');
      dropdownToggle.setAttribute('aria-expanded', isExpanded);
    });

    // Ferme le menu si on clique n'importe où ailleurs sur la page
    document.addEventListener('click', () => {
      dropdownParent.classList.remove('active');
      dropdownToggle.setAttribute('aria-expanded', 'false');
    });
  }
});

// ====================== FOOTER =========================
document.addEventListener('DOMContentLoaded', () => {
  const tooltip = document.getElementById('whatsappTooltip');
  let isScrolling;

  if (tooltip) {
    window.addEventListener('scroll', () => {
      // Masque le texte dès qu'on défile
      tooltip.classList.add('is-hidden');

      // Annule le timer précédent si le défilement continue
      clearTimeout(isScrolling);

      // Réaffiche le texte 800ms après l'arrêt du défilement
      isScrolling = setTimeout(() => {
        tooltip.classList.remove('is-hidden');
      }, 800);
    });
  }
});