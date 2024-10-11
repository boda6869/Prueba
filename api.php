
<?php
// Llamar a la API
$url = 'api.php'; // o 'api/api.php' si está en un directorio separado
$data = file_get_contents($url);
$datos = json_decode($data, true);

// Mostrar los datos
foreach ($datos as $dato) {
  echo "id: " . $dato["id"]. " - Texto: " . $dato["texto_prueba"]. "<br>";
}
?>
