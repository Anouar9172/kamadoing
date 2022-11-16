<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kamadoing</title>
  <link rel="stylesheet" href="css\stylesheet.css">

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
  <main>
    <?php
        include("config.php");
        $sql = "SELECT * FROM posting_blogs ;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<br>" .$row['naam'] ."<br> ". $row['recept'] . "<br> " ;
          }
        }


         ?>
  </main>
  <footer class="footer">
    <div class="copy">&copyright; Kamadoing 2022</div>
    <div class="bottom-links">
      <div class="links">
        <span>More Info</span>
        <a href="index.php">Home</a>
        <a href="info.php">Info</a>
        <a href="contact.php">Contact</a>
        <a href="blog.php">Blog</a>
        <a href="review.php">Review</a>
      </div>
      <div class="links">
        <span>Social Links</span>
        <a href="#">Facebook<i class="fab fa-facebook"></i></a>
        <a href="#">Twitter<i class="fab fa-twitter"></i></a>
        <a href="#">Instagram<i class="fab fa-instagram"></i></a>
      </div>
    </div>
  </footer>
</body>

</html>
