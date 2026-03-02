<?php
// Descomprimir archivo .gz
$filename = 'pbstudio_back.sql.gz';
$filepath = __DIR__ . '/' . $filename;

if (!file_exists($filepath)) {
    die("Archivo no encontrado: $filepath\n");
}

// Leer archivo gzip
$gz = gzopen($filepath, 'rb');
if (!$gz) {
    die("No se pudo abrir el archivo gzip\n");
}

// Escribir decomprimido
$output_file = str_replace('.gz', '', $filepath);
$fp = fopen($output_file, 'wb');
if (!$fp) {
    die("No se pudo crear archivo de salida\n");
}

while (!gzeof($gz)) {
    fwrite($fp, gzread($gz, 4096));
}

gzclose($gz);
fclose($fp);

echo "Archivo descomprimido exitosamente: $output_file\n";
echo "Tamaño: " . filesize($output_file) . " bytes\n";
?>
