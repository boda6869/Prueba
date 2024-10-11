
<?php
// Configuración de la conexión
$servername = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "prueba";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

// Función para obtener datos
function obtenerDatos() {
  $sql = "SELECT * FROM tabla_prueba";
  $result = $conn->query($sql);
  $datos = array();
  while($row = $result->fetch_assoc()) {
    $datos[] = $row;
  }
  return $datos;
}

// Función para cerrar la conexión
function cerrarConexion() {
  $conn->close();
}

// Llamar a la función obtenerDatos
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  $datos = obtenerDatos();
  echo json_encode($datos);
  cerrarConexion();
}
?>
