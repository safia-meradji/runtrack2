<?php

if (isset($_POST["username"])AND isset($_POST["password"])){
    if ($_POST["username"] == "John" AND $_POST["password"] == "Rambo")
 {
    echo "C’est pas ma guerre";
 }

 else
 {
    echo "Votre pire cauchemar";
 }

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section>
        <form method="post" action="job05.php">

            <label for="username">Username</label>
            <input type="text" name="username" id="username"> <br>

            <label for="password">Password</label>
            <input type="password" name="password" id="password"> <br>

            <input type="submit" name="submit" value="submit">

        </form>
    </section>
</body>

</html>