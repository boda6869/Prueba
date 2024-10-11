
<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "prueba";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

// Consultar datos de la tabla
$sql = "SELECT * FROM tabla_prueba";
$result = $conn->query($sql);

// Mostrar datos
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Texto: " . $row["texto_prueba"]. "<br>";
  }
} else {
  echo "No hay datos";
}

// Cerrar conexión
$conn->close();
?>
