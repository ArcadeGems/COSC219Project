<?php
//TODO:Active test page!


// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  // TODO: Validate and process the form data

  // Redirect to a success page
  header("Location: success.php");
  exit;
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Home</title>
  <meta charset="utf-8" />
  <meta name="viewport">
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
  <header>
    <?php include('php/structure/top_navigation_bar.php'); ?>

    <section class="logo">
      <img src="img/logo_square_1485x1485_tight.jpg" alt="logo" id="logo" />
    </section>
  </header>
  <main>
    <section class="main-content">

      <?php include('php/content/signup_form.php'); ?>
    </section>
  </main>

  <footer>
    <section class="footer-content">
      <?php include('php/structure/social_media_icons.php'); ?>
    </section>

    <section class="footer-bottom">
      <?php include('php/content/copyright_attribute.php'); ?>
    </section>
  </footer>
</body>

</html>