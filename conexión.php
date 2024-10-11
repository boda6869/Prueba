
<?php
// Ruta del archivo CSV
$rutaArchivo = 'prueba.csv';

// Función para leer el archivo CSV
function leerArchivoCSV() {
  global $rutaArchivo;
  $archivo = fopen($rutaArchivo, 'r');
  $datos = array();
  while (($fila = fgetcsv($archivo, 1000, ",")) !== FALSE) {
    $datos[] = $fila;
  }
  fclose($archivo);
  return $datos;
}

// Función para escribir en el archivo CSV
function escribirArchivoCSV($datos) {
  global $rutaArchivo;
  $archivo = fopen($rutaArchivo, 'w');
  foreach ($datos as $fila) {
    fputcsv($archivo, $fila);
  }
  fclose($archivo);
}
?>
