<!DOCTYPE html>
<html>
<head>
  <title>Formulaire GET</title>
</head>
<body>
  <form method="GET" action="traitement.php">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre">
    <input type="submit" value="Valider">
  </form>
</body>
</html>
<?php
if (isset($_GET['nombre'])) {
  $nombre = $_GET['nombre'];
  if (is_numeric($nombre)) {
    if ($nombre % 2 == 0) {
      echo "Nombre pair";
    } else {
      echo "Nombre impair";
    }
  } else {
    echo "Veuillez entrer un nombre valide.";
  }
}
?>
