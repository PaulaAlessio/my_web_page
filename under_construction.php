<?php
$title = "Página en Construcción";
$currentPage = ''; // Puedes dejar vacío o poner el nombre si quieres resaltar algo

$content = <<<HTML
<div class="text-center my-5">
  <h1>🚧 Página en Construcción 🚧</h1>
  <p>Lo sentimos, esta sección aún no está disponible. ¡Vuelve pronto!</p>
  <img src="https://cdn-icons-png.flaticon.com/512/565/565547.png" alt="Under construction" style="max-width:200px;">
</div>
HTML;

include __DIR__ . '/template.php';

