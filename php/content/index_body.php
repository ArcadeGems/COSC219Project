<?php
session_start();
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
  @keyframes rainbow {
    0% {
      color: red;
    }

    14% {
      color: orange;
    }

    28% {
      color: yellow;
    }

    42% {
      color: lime;
    }
    57% {
      color: blue;
    }

    71% {
      color: indigo;
    }

    85% {
      color: violet;
    }

    100% {
      color: red;
    }
  }
</style>
<h1 id="games">
  <br>
  <h2>Our Games</h2>
  <img src="img/workingonitclear1.png" class="clipart" alt="Working on it" id="workingonit" style="max-height: 400px; width: auto;">
  <p class="centered" style="text-align: center;">
    <a href='/signup_page.php' style="color:blue;"><u>Sign up</u></a> today to receive e-mail updates on our games!
  </p>
  <br><br><br><br><br>
</h1>


<h1 id="aboutus">
  <br>
  <h2>About us</h2>
  <img src="img/studyowlclear1.png" class="clipart" alt="Study Owl" id="studyowl" style="max-height: 400px; width: auto;">
  <p class="centered" style="text-align: center;">
    Reilly and Cade are game developers,<br> currently enrolled at Okanagan College.
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
  <h2>See what people are saying!</h2>
  <div class="laptopterminal" id="laptop-terminal">
    <img src="img/laptop_transparent_screen_small.png" alt="laptop" id="laptop">
    <textarea readonly id="terminal" rows="10" cols="50"></textarea>
    <script src="JS/terminalFunction.js"></script>
  </div>
  <div class="scroll" style="width: 100%; overflow: hidden;">
    <p id="scrolltext" style="font-size: 50px; position: relative; right: 100%; white-space: nowrap; animation: rainbow 5s linear infinite;">Contact Us</p>
    <p id="scrolltext2" style="font-size: 50px; position: relative; right: 100%; white-space: nowrap; animation: rainbow 5s linear infinite;">our social links down below!</p>
    <script src="JS/jQueryDemo.js"></script>
  </div>
  <br><br>
</h1>