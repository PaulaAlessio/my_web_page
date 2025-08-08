<?php
$title = "Legislación Educativa";
$currentPage = 'legislacion';

$content = <<<HTML
<h1 class="mb-4">📚 Legislación Educativa</h1>

<div class="list-group">

 <a href="/ver_md.php?carpeta=legislacion&f=lex_vigente" class="list-group-item list-group-item-action">
    📄 Enlaces a la legislación vigente en el curso 2025–26 para la Comunidad de Madrid
  </a>

 <a href="/ver_md.php?carpeta=legislacion&f=maestros_eso" class="list-group-item list-group-item-action">
    👩‍🏫 ¿Pueden los maestros impartir clases de primero y segundo de la ESO?
  </a>

 <a href="/ver_md.php?carpeta=legislacion&f=12_eso_ceips" class="list-group-item list-group-item-action">
    🏫 Información sobre la medida: 1º y 2º de ESO en los CEIPs de la Comunidad de Madrid
  </a>

 <a href="/ver_md.php?carpeta=legislacion&f=titulacion_eso" class="list-group-item list-group-item-action">
    🎓 Titulación de ESO
  </a>

 <a href="/ver_md.php?carpeta=legislacion&f=pruebas_diagnosticas" class="list-group-item list-group-item-action">
    📝 Pruebas diagnósticas de la Comunidad de Madrid y Ley Maestra
  </a>

<a href="/ver_md.php?carpeta=legislacion&f=solicitud_copia_examen" class="list-group-item list-group-item-action">
  📥 Solicitud de copia de examen durante el curso
</a>

</div>
HTML;

include __DIR__ . '/../template.php';

