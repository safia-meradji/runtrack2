<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $largeur = $_POST['largeur'];
  $hauteur = $_POST['hauteur'];

  // Générer la représentation de la maison en fonction des valeurs saisies
  $maison = "";
  for ($i = 0; $i < $hauteur; $i++) {
    $maison .= str_repeat(" ", $largeur / 2 - $i) . str_repeat("/\\", $i + 1) . str_repeat(" ", $largeur / 2 - $i) . "<br>";
  }
}
?>

<form method="POST">
  <label for="largeur">Largeur :</label>
  <input type="text" id="largeur" name="largeur">
  <br>
  <label for="hauteur">Hauteur :</label>
  <input type="text" id="hauteur" name="hauteur">
  <br>
  <input type="submit" value="Afficher la maison">
</form>

<div id="maisonAffichee">
  <?php
  if (isset($maison)) {
    echo $maison;
  }
  ?>
</div>
