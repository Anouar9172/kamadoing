<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kamadoing</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css\style.css">
</head>
<body>
  <nav>
    <div class="logo">
      <img src="img\goedelogo.png" alt="">
      </div>
    <ul>
      <li><a href="index.php" class="underline">Home</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="info.php">Info</a></li>
      <li><a href="blog.php">Blog</a></li>
    </ul>

  </nav>
    <div class="container">
        <h1>Contact Me</h1>
        <p>Wees altijd open me te berichten en ik zal zo snel mogelijk met u in contact kopen</p>
        <form action="mail.php" method="POST">
            <label for="name">Naam:</label>
            <input type="text" name="name" id="name">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
            <label for="subject">Onderwer[]:</label>
            <input type="text" name="subject" id="subject">
            <label for="message">Bericht</label>
            <textarea name="message" cols="30" rows="10"></textarea>
            <input type="submit" value="Send">
        </form>
    </div>
</body>
</html>
