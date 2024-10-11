
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

?>
