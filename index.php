<?php
// index.php

$title = "Página Principal";

$content = <<<HTML
    <h1>Bienvenido/a a mi página web</h1>
    <p>Aquí encontrarás información sobre legislación, prensa, reflexiones, material didáctico y software.</p>
HTML;

include __DIR__ . '/template.php';

