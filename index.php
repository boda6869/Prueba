
<?php
// Incluir el archivo de albumes
require_once 'albumes.php';

// Obtener todos los álbumes
$albumes = obtenerAlbumes();

// Mostrar todos los álbumes
echo "<h1>Todos los álbumes</h1>";
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Título</th><th>Artista ID</th></tr>";

foreach ($albumes as $album) {
  echo "<tr>";
  echo "<td>" . $album["AlbumId"] . "</td>";
  echo "<td>" . $album["Title"] . "</td>";
  echo "<td>" . $album["ArtistId"] . "</td>";
  echo "</tr>";
}

echo "</table>";

// Formulario para crear un nuevo álbum
echo "<h1>Crear nuevo álbum</h1>";
echo "<form action='' method='post'>";
echo "Título: <input type='text' name='titulo'><br>";
echo "Artista ID: <input type='number' name='artistaId'><br>";
echo "<input type='submit' value='Crear'>";
echo "</form>";

// Crear nuevo álbum
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $titulo = $_POST["titulo"];
  $artistaId = $_POST["artistaId"];
  crearAlbum($titulo, $artistaId);
  echo "Álbum creado con éxito!";
}

// Formulario para actualizar un álbum
echo "<h1>Actualizar álbum</h1>";
echo "<form action='' method='post'>";
echo "ID: <input type='number' name='id'><br>";
echo "Título: <input type='text' name='titulo'><br>";
echo "Artista ID: <input type='number' name='artistaId'><br>";
echo "<input type='submit' value='Actualizar'>";
echo "</form>";

// Actualizar álbum
if (isset($_POST["id"])) {
  $id = $_POST["id"];
  $titulo = $_POST["titulo"];
  $artistaId = $_POST["artistaId"];
  actualizarAlbum($id, $titulo, $artistaId);
  echo "Álbum actualizado con éxito!";
}

// Formulario para eliminar un álbum
echo "<h1>Eliminar álbum</h1>";
echo "<form action='' method='post'>";
echo "ID: <input type='number' name='id'><br>";
echo "<input type='submit' value='Eliminar'>";
echo "</form>";

// Eliminar álbum
if (isset($_POST["id"])) {
  $id = $_POST["id"];
  eliminarAlbum($id);
  echo "Álbum eliminado con éxito!";
}
?>
