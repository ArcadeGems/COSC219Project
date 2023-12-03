<?php
session_start();
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
@keyframes rainbow {
  0% {color: red;}
  14% {color: orange;}
  28% {color: yellow;}
  42% {color: lime;}
  57% {color: blue;}
  71% {color: indigo;}
  85% {color: violet;}
  100% {color: red;}
}
</style>
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

<h1 id="feedback">
  <br>
  <h2>Give us your feedback!</h2>

  <div class="image-text-container">
    <img src="img/cartoonmanjumpingclear.png" class="clipart" alt="Cartoon man jumping" id="cartoonmanjumping" style="max-height: 300px; width: auto;">

    <?php
    include('php/content/contact_form.php');
    ?>
  </div>
  <br><br><br><br>
</h1>


<h1 id="database">
  <br>
  <h2>Join our database!</h2>
  <div class="laptopterminal" id="laptop-terminal">
    <img src="img/laptop_transparent_screen_small.png" alt="laptop" id="laptop">
    <textarea readonly id="terminal" rows="10" cols="50"></textarea>
    <script src="JS/terminalFunction.js"></script>
  </div>
  <div class="scroll" style="width: 100%; overflow: hidden;">
  <p id="scrolltext" style="font-size: 50px; position: relative; left: 100%; white-space: nowrap; animation: rainbow 5s linear infinite;">I hope you enjoyed!</p>
  <p id="scrolltext2" style="font-size: 50px; position: relative; left: 100%; white-space: nowrap; animation: rainbow 5s linear infinite;">our Website!</p>

  <script src="JS/jQueryDemo.js"></script>
</div>
  <br><br>
</h1>