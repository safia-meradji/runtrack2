<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombreArguments = count($_POST);
    echo "Le nombre d'arguments POST envoyés est : " . $nombreArguments;
}
?>

<form action="" method="POST">
    <label for="champ1">Champ 1 :</label>
    <input type="text" name="champ1" id="champ1"><br>

    <label for="champ2">Champ 2 :</label>
    <input type="text" name="champ2" id="champ2"><br>

    <input type="submit" value="Envoyer">
</form>




