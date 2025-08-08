// js/includes-loader.js
document.addEventListener("DOMContentLoaded", function () {
  const path = window.location.pathname;
  const depth = (path.match(/\//g) || []).length - 1;
  const prefix = '../'.repeat(depth); // sube de nivel según profundidad

  // Cargar nav.html
  fetch(prefix + 'nav.html')
    .then(res => res.text())
    .then(data => {
      document.getElementById('nav-placeholder').innerHTML = data;
    })
    .catch(err => console.error('Error al cargar nav:', err));

  // Cargar footer.html
  fetch(prefix + 'footer.html')
    .then(res => res.text())
    .then(data => {
      document.getElementById('footer-placeholder').innerHTML = data;
    })
    .catch(err => console.error('Error al cargar footer:', err));
});

