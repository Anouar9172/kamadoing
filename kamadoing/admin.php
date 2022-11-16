<?php
require("config.php");

$error = "";
if (isset($_POST["add"])){
    if(!empty($_POST["naam"]))

require("config.php");

    $naam = trim($_POST["naam"]);
    $recept = trim($_POST["recept"]);

    $naam = $conn->real_escape_string($naam);
    $recept = $conn->real_escape_string($recept);

    $sql = "INSERT INTO posting_blogs VALUES (NULL, '$naam', '$recept')";

if($conn->query($sql)) {
    echo "Gepost op blog";
}

}

?>
<html>
    <head>
        <meta charset="UTF">
        <link rel="stylesheet" type="text/css" href="css\styleinlogs.css">
        <title>kamadoing</title>
    </head>

    <body>
        <h1>post blog</h1>
        <?php
        echo $error;
        ?>
        <form method="POST">
            <label>naam:</label><br><input type= "text" name= "naam"/><br>
            <label>recept:</label><br><input type= "text" name= "recept"/><br>
            <input type="submit" name= "add" value="Post">
            <a href="mainlogin.php">admin menu</a>
        </form>
    </body>
</html>
