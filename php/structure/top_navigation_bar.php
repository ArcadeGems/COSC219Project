
<?php
    $gamesLink = "#games";
    $aboutUsLink = "#aboutus";
    $joinNowLink = "#database";
    $feedbackLink = "#feedback";
    $contactLink = "#footer-social";
    $indexLink = "";
    if (!(strpos(basename($_SERVER['PHP_SELF']), "index.php"))) {
      $indexLink = "index.php";
    }
?>
<nav class="navbar">
  <ul class="main-links">
    <li><a href="<?php echo $indexLink . $gamesLink; ?>">GAMES</a></li>
    <li><a href="<?php echo $indexLink . $aboutUsLink; ?>">ABOUT US</a></li>
    <li><a href="<?php echo $indexLink . $joinNowLink; ?>">JOIN NOW</a></li>
    <li><a href="<?php echo $indexLink . $feedbackLink; ?>">FEEDBACK</a></li>
    <li><a href="<?php echo $indexLink . $contactLink; ?>">CONTACT</a></li>
  </ul>
  <ul class="sub-links">
    <li><a href="signup_page.php">SIGN UP</a></li>
    <li><a href="insert ajax">LOGIN</a></li>
  </ul>
</nav>
