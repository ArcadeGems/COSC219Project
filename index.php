<!DOCTYPE html>
<html>

<head>
  <title>Home</title>
  <meta charset="utf-8" />
  <meta name="viewport">
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css">
  <!-- additional fonts for social media icons text if desired later: 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  -->
    
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
      <?php include('php/content/index_body.php'); ?>
    </section>
  </main>

  <footer>
    <section class="footer-content">
      <?php include('php/structure/social_media_icons.php'); ?>
    </section>

    <section class="footer-bottom">
      <?php include('php/content/copyright_attribute.php');?>
    </section>
  </footer>
</body>

</html>