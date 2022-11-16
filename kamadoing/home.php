<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {


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
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="css\styleinlogs.css">
</head>
<body>
     <h1>Hallo Admin, <?php echo $_SESSION['name']; ?></h1>
     <a href="admin.php">Blog Posten</a><br>
     <a href="changepassword.php">wachtwoord verranderen</a><br>
     <a href="addusers.php">account toevoegen</a><br>
     <a href="logout.php">Log uit</a>
</body>
</html>

<?php
}else{
     header("Location: admin.php");
     exit();
}
 ?>
