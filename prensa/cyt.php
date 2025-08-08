<?php
$title = "Recortes de Prensa";
$currentPage = 'prensa';

$content = <<<HTML
<h1 class="mb-4">Recortes de Prensa</h1>

<div class="list-group">
  
 <a href="/ver_md.php?carpeta=prensa&f=AI" class="list-group-item list-group-item-action">
    🧠 Artículos relacionados con la Inteligencia Artificial
  </a>

  <!-- Aquí puedes ir añadiendo más -->
  <!--
  <a href="/recortes/cambio_climatico.md" class="list-group-item list-group-item-action">
    🌍 Noticias sobre cambio climático
  </a>
  -->

</div>
HTML;

include __DIR__ . '/../template.php';


