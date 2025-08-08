<?php
require_once __DIR__ . '/libs/Parsedown.php';

$folder = $_GET['carpeta'] ?? null;
$file = $_GET['f'] ?? null;

$allowed_folders = ['legislacion', 'prensa', 'software', 'didactica']; // 🔒 Seguridad: solo estas carpetas están permitidas

if (!$folder || !$file || !in_array($folder, $allowed_folders)) {
    http_response_code(400);
    die("⛔ Parámetros inválidos o carpeta no permitida.");
}

// Sanitiza el nombre del archivo (sin extensión ni rutas raras)
$filename = basename($file);

// Ruta al archivo Markdown
$filepath = __DIR__ . "/$folder/$filename.md";

if (!file_exists($filepath)) {
    http_response_code(404);
    $content = "<div class='alert alert-danger'>No se encontró el archivo solicitado.</div>";
} else {
    $markdown = file_get_contents($filepath);
    $Parsedown = new Parsedown();
    $content = '<div class="markdown-body">' . $Parsedown->text($markdown) . '</div>';
}

$title = ucfirst(str_replace('_', ' ', $filename)); // Título legible
$currentPage = $folder;

include __DIR__ . '/template.php';

