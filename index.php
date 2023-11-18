<!DOCTYPE html>
<html>

<head>
  <title>Home</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <header>
    <nav class="navbar">
      <ul>
        <li><a href="#games">GAMES</a></li>
        <li><a href="#aboutus">ABOUT US</a></li>
        <li><a href="#database">JOIN NOW</a></li>
        <li><a href="#feedback">FEEDBACK</a></li>
        <li><a href="#footer-social">CONTACT</a></li>
      </ul>


    </nav>
    <section class="logo">
      <img src="img/logo_square_1485x1485_tight.jpg" alt="logo" id="logo" />
    </section>
  </header>
  <main>
    <section class="main-content">
      <h1 id="games">
        <br>
        <h2>Our Games</h2>
        <p>
          <img src="img/workingonitclear.png" class="clipart" alt="Working on it" id="workingonit" style="max-height: 400px; width: auto;">
          Come Back Soon!
        </p>
        <br><br><br><br><br>
      </h1>
      <h1 id="aboutus">
        <br>
        <h2>About us</h2>
        <p>
          <img src="img/studyowlclear.png" class="clipart" alt="Study Owl" id="studyowl" style="max-height: 400px; width: auto;">
          Reilly and Cade are two novice game developers currently studying Computer Science at Okanagan College.
          With a passion for gaming and a drive to create their own games, they have been working hard to learn the skills necessary to bring their ideas to life. Through their studies, they have gained experience in programming languages such as Java and C++, as well as game engines like Unity.
          They are excited to continue learning and growing as game developers, and can't wait to share their creations with the world.
        </p>
        <br><br><br><br><br>
      </h1>

      <h1 id="database">
        <br>
        <h2>Join our database!</h2>
        <div id="laptop-terminal">
          <img src="img/laptop_transparent_screen.png" class="clipart" alt="laptop" id="laptop" style="max-height: 750px; width: auto;">
        </div>
        <br><br>
      </h1>

      <h1 id="feedback">
        <br>
        <h2>Give us your feedback!</h2>

        <div class="image-text-container">
          <img src="img/cartoonmanjumpingclear.png" class="clipart" alt="Cartoon man jumping" id="cartoonmanjumping" style="max-height: 300px; width: auto;">

          <?php
          include('php_snippet/contact_form.php');
          isset($_POST['submit']) ? include('php_snippet/contact_form_response.php') : NULL;
          ?>
        </div>
        <br><br><br><br>
      </h1>
    </section>
  </main>

  <footer>
    <section class="footer-content">
      <div class="footer-social" id="footer-social">
        <ul>
          <li><a>INDEED</a></li>
          <li><a>GITHUB</a></li>
          <li><a>INSTAGRAM</a></li>
          <li><a href="http://www.youtube.com/">YOUTUBE</a></li>
        </ul>
      </div>
    </section>

    <section class="footer-bottom">

      Images & Logo
      <a href="https://www.freepik.com/free-vector/cute-arcade-machine-game-cartoon-vector-icon-illustrationholiday-technology-isolated-flat_62088914.htm#query=arcade&position=1&from_view=author&uuid=810b9e5e-fc22-4a96-b972-14b8dc56e07e">a</a>
      and
      <a href="https://www.freepik.com/free-vector/diamond-cartoon-icon-illustration-wealth-object-icon-concept_12006510.htm#query=gem&position=0&from_view=author&uuid=3db7f551-2e82-4111-b5bd-a0ba6cac2724">b</a>
      courtesy of
      <a href="https://www.freepik.com/author/catalyststuff">catalyststuff</a> on Freepik
      <br />Arcade-Gems &copy; 2023
    </section>
  </footer>
</body>

</html>