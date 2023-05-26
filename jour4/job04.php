<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];

    echo '<table>';
    echo '<tr><th>Argument</th><th>Valeur</th></tr>';

    foreach ($_POST as $argument => $valeur) {
        echo '<tr>';
        echo '<td>' . $argument . '</td>';
        echo '<td>' . $valeur . '</td>';
        echo '</tr>';
    }

    echo '</table>';
}
?>

<form method="POST" action="">
    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" id="prenom">
    <br>
    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom">
    <br>
    <input type="submit" value="Envoyer">
</form>
