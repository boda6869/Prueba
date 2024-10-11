
<?php
// Incluir el archivo de albumes
require_once 'álbumes.php';

// Obtener todos los álbumes
$albumes = obtenerAlbumes();

// Mostrar los álbumes
foreach ($albumes as $album) {
  echo "ID: " . $album["AlbumId"]. " - Título: " . $album["Title"]. " - Artista ID: " . $album["ArtistId"]. "<br>";
}

?>
