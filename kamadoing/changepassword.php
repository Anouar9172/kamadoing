<?php
require("config.php");

$error = "";
if (isset($_POST["submit"])){
    if(!empty($_POST["user_name"]) && !empty($_POST["password"]))

require("config.php");

    $user_name = trim($_POST["user_name"]);
    $password = trim($_POST["password"]);
    $password = $conn->real_escape_string($password);

    $sql = "INSERT INTO gebruiker VALUES (NULL, '$user_name', '$password')";

if($conn->query($sql)) {
    echo "toegevoegd aan databases";
}

}

    elseif(isset($_POST["ww"])){
    if(!empty($_POST["password"]) && !empty($_POST["ww"])){
        require("config.php");

        $user_name = trim($_POST["user_name"]);
        $password = trim($_POST["password"]);
        $password = $conn->real_escape_string($password);


        $sql = "UPDATE gebruiker SET password = '$password' WHERE user_name LIKE '$user_name' ";

    if($conn->query($sql)) {
        echo "wachtwoord aangepast";
    }
    }
    }
?>
<html>
    <head>
        <meta charset="UTF">
        <link rel="stylesheet" type="text/css" href="css\styleinlogs.css">
        <title>Titel</title>
    </head>

    <body>
        <h1>Nieuwe Wachtwoord</h1>
        <?php
        echo $error;
        ?>
        <form method="POST">
            <label>Gebruiker:</label><br><input type= "text" name= "user_name"/><br>
            <label>Nieuwe Wachtwoord:</label><br><input type= "password" name= "password"/><br><br>
            <input type="submit" name= "ww" value="wachtwoord veranderen" >
            <a href="home.php">terug</a>
        </form>
    </body>
</html>
