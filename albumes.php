
<?php
// Incluir el archivo de conexión
require_once 'conexion.php';

// Función para obtener todos los álbumes
function obtenerAlbumes() {
  $datos = leerArchivoCSV();
  $albumes = array();
  foreach ($datos as $fila) {
    $album = array(
      'AlbumId' => $fila[0],
      'Title' => $fila[1],
      'ArtistId' => $fila[2]
    );
    $albumes[] = $album;
  }
  return $albumes;
}

// Función para obtener un álbum por ID
function obtenerAlbumPorId($id) {
  $albumes = obtenerAlbumes();
  foreach ($albumes as $album) {
    if ($album['AlbumId'] == $id) {
      return $album;
    }
  }
  return null;
}

// Función para crear un nuevo álbum
function crearAlbum($titulo, $artistaId) {
  $datos = leerArchivoCSV();
  $nuevoAlbum = array(count($datos) + 1, $titulo, $artistaId);
  $datos[] = $nuevoAlbum;
  escribirArchivoCSV($datos);
}

// Función para actualizar un álbum
function actualizarAlbum($id, $titulo, $artistaId) {
  $datos = leerArchivoCSV();
  foreach ($datos as &$fila) {
    if ($fila[0] == $id) {
      $fila[1] = $titulo;
      $fila[2] = $artistaId;
    }
  }
  escribirArchivoCSV($datos);
}

// Función para eliminar un álbum
function eliminarAlbum($id) {
  $datos = leerArchivoCSV();
  $nuevosDatos = array();
  foreach ($datos as $fila) {
    if ($fila[0] != $id) {
      $nuevosDatos[] = $fila;
    }
  }
  escribirArchivoCSV($nuevosDatos);
}
?>
