
<?php
 //if (isset($_GET["champ1"]) && isset($_GET["champ2"])){
//    echo $_GET["champ1"] ." " .$_GET["champ2"];
  
//  }       Avec la méthode GET pour afficher les données directement dans l'URL
//          Si on utilise la méthode POST : les données sont sécurisées et invisibles


if (isset($_GET["champ1"]) && isset($_GET["champ2"])){
    echo $_GET["champ2"] ." " .$_GET["champ2"];
  
   }
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=" job01.php" method="post">
    <label for = "champ1">Champ 1 :</label>
    <input type = "text" name = "champ1" id="champ1"><br>
    
    <label for = "champ2">Champ 2 :</label>
    <input type = "text" name = "champ2" id= "champ2"><br>
    <input type = "submit" value = "Envoyer">

    </form>
</body>
</html>