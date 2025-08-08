<?php
// template.php

// Variables que pueden ser definidas por la página que incluya este template
// Si no existen, ponemos valores por defecto
$title = $title ?? 'Mi sitio web';
$content = $content ?? '<p>Contenido no definido.</p>';
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?= htmlspecialchars($title) ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>

  <?php include __DIR__ . '/nav.php'; ?>

  <div class="container mt-4">
    <?= $content ?>
  </div>

  <?php include __DIR__ . '/footer.html'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

