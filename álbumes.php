
<?php
// Incluir el archivo de conexión
require_once 'conexion.php';

// Función para obtener todos los álbumes
function obtenerAlbumes() {
  global $conn;
  $sql = "SELECT * FROM albumes";
  $result = $conn->query($sql);
  $albumes = array();
  while ($row = $result->fetch_assoc()) {
    $albumes[] = $row;
  }
  return $albumes;
}

// Función para obtener un álbum por ID
function obtenerAlbumPorId($id) {
  global $conn;
  $sql = "SELECT * FROM albumes WHERE AlbumId = $id";
  $result = $conn->query($sql);
  $album = $result->fetch_assoc();
  return $album;
}

// Función para crear un nuevo álbum
function crearAlbum($titulo, $artistaId) {
  global $conn;
  $sql = "INSERT INTO albumes (Title, ArtistId) VALUES ('$titulo', $artistaId)";
  $conn->query($sql);
}

// Función para actualizar un álbum
function actualizarAlbum($id, $titulo, $artistaId) {
  global $conn;
  $sql = "UPDATE albumes SET Title = '$titulo', ArtistId = $artistaId WHERE AlbumId = $id";
  $conn->query($sql);
}

// Función para eliminar un álbum
function eliminarAlbum($id) {
  global $conn;
  $sql = "DELETE FROM albumes WHERE AlbumId = $id";
  $conn->query($sql);
}

?>
