<?php
// nav.php
$currentPage = $currentPage ?? ''; // Variable que indica la sección activa
?>

<!-- Barra de navegación -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/index.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">

        <!-- Legislación -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle <?= $currentPage === 'legislacion' ? 'active' : '' ?>" href="#" id="legislacionDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Legislación
          </a>
          <ul class="dropdown-menu" aria-labelledby="legislacionDropdown">
            <li><a class="dropdown-item" href="/legislacion/educa_lex.php">Legislación educativa</a></li>
            <li><a class="dropdown-item" href="/under_construction.php">Otros</a></li>
          </ul>
        </li>

        <!-- Recortes de prensa -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle <?= $currentPage === 'prensa' ? 'active' : '' ?>" href="#" id="prensaDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Recortes de prensa
          </a>
          <ul class="dropdown-menu" aria-labelledby="prensaDropdown">
            <li><a class="dropdown-item" href="/prensa/cyt.php">Ciencia y tecnologia</a></li>
            <li><a class="dropdown-item" href="/under_construction.php">Cambio climático</a></li>
          </ul>
        </li>

        <!-- Reflexiones -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle <?= $currentPage === 'reflexiones' ? 'active' : '' ?>" href="#" id="reflexionesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Reflexiones
          </a>
          <ul class="dropdown-menu" aria-labelledby="reflexionesDropdown">
            <li><a class="dropdown-item" href="/under_construction.php">miscelanea</a></li>
            <li><a class="dropdown-item" href="/under_construction.php">IDW</a></li>
          </ul>
        </li>

        <!-- Material didáctico -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle <?= $currentPage === 'material' ? 'active' : '' ?>" href="#" id="materialDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Material didáctico
          </a>
          <ul class="dropdown-menu" aria-labelledby="materialDropdown">
            <li><a class="dropdown-item" href="/under_construction.php">4ESO-matemáticas</a></li>
            <li><a class="dropdown-item" href="/under_construction.php">1BACH</a></li>
            <li><a class="dropdown-item" href="/under_construction.php">2ESO</a></li>
            <li><a class="dropdown-item" href="/under_construction.php">talleres</a></li>
          </ul>
        </li>

        <!-- Software -->
        <li class="nav-item">
          <a class="nav-link <?= $currentPage === 'software' ? 'active' : '' ?>" href="/ver_md.php?carpeta=software&f=dev_list">Software</a>
        </li>

      </ul>
    </div>
  </div>
</nav>

