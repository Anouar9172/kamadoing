<?php

	include 'config.php';

	if (isset($_POST['post_review'])) {

		$naam = $_POST['naam'];
		$recept = $_POST['recept'];
		$bericht = $_POST['bericht'];

		$sql = "INSERT INTO review (naam, bericht, recept)
		VALUES ('$naam', '$bericht','$recept')";

		if ($conn->query($sql) === TRUE) {
		  echo "";
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css\styles.css">
	<title>Kamadoing</title>
</head>
<body>
	<header class="header">
		<a href="#" class="logo">Kamadoing</a>
		<nav class="nav-items">
			<a href="index.php">Home</a>
			<a href="Contact.php">Contact</a>
			<a href="blog.php">Blog</a>
			<a href="review.php">Review</a>
			<a href="mainlogin.php">log in</a>
		</nav>
	</header>
	<div class="wrapper">
		<form action="" method="post" class="form">
			<input type="text" class="naam" name="naam" placeholder="Naam">
			<br>
			<input type="recept" class="recept" name="recept" placeholder="Recept">
			<br>
			<textarea name="bericht" cols="30" rows="10" class="bericht" placeholder="Bericht"></textarea>
			<br>
			<button type="post" class="btn" name="post_review">Post Review</button>
		</form>
	</div>

	<div class="content">
		<?php

			$sql = "SELECT * FROM review";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			  // output data of each row
			  while($row = $result->fetch_assoc()) {

		?>
		<h3><?php echo $row['naam']; ?></h3>
		<h3><?php echo $row['recept']; ?></h3>
		<p><?php echo $row['bericht']; ?></p>

		<?php } } ?>
	</div>
</body>
</html>
