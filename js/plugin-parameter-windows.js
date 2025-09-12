function showPluginTable(tabName) {
  // Masquer tous les tableaux
  document.getElementById('vaast-fixation-param').style.display = 'none';
  document.getElementById('vaast-image-param').style.display = 'none';
  document.getElementById('vaast-text-param').style.display = 'none';

  // Retirer la classe active de tous les onglets
  document.querySelectorAll('.nav-link').forEach(link => link.classList.remove('active'));

  // Afficher le bon tableau
  document.getElementById(tabName).style.display = 'block';

  // Ajouter la classe active à l'onglet sélectionné
  const tabBtn = document.querySelector(`[data-tab="${tabName}"]`);
  if (tabBtn) tabBtn.classList.add('active');
}

// Ajoute les écouteurs sur chaque onglet
document.querySelectorAll('.nav-link').forEach(link => {
  link.addEventListener('click', function() {
    // Pour <p class="nav-link" data-tab="vaast-fixation-param">...</p>
    const tabName = this.getAttribute('data-tab');
    if (tabName) showPluginTable(tabName);
  });
});