<!-- <?php
session_start();
?> -->


<!-- <div class="scroll" style="width: 100%; overflow: hidden;">
    <script src="JS/jQueryDemo.js"></script>
  
  </div> -->
  
<h1 id="games" >
  <br>
  <h2>Our Games</h2>
  <img src="img/workingonitclear1.png" class="clipart" alt="Working on it" id="workingonit" style="max-height: 400px; width: auto;">
  <p class="centered" style="text-align: center;">
  <a href='/signup_page.php' ><u style="color: transparent; -webkit-text-stroke: 1px black; -webkit-text-fill-color: #FEFDFC; background-clip: text;">Sign up...</u></a>to receive e-mail updates on our games!
  </p>
  <br><br><br><br><br><br><br><br><br>
</h1>


<h1 id="aboutus" >
  <br>
  <h2>About us</h2>
  <img src="img/studyowlclear1.png" class="clipart" alt="Study Owl" id="studyowl" style="max-height: 400px; width: auto;">
  <p class="centered" style="text-align: center; ">
    Reilly and Cade are game developers,<br> currently enrolled at Okanagan College.
  </p>
  <br><br><br><br><br><br><br><br><br>
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
  <br><br><br><br><br><br><br><br>
</h1>

<h1 id="database">
  <br>
  <h2>See what people are saying!</h2></h1>
  <div class="laptopterminal" id="laptop-terminal">
    <img src="img/laptop_transparent_screen_small.png" alt="laptop" id="laptop">
    <textarea readonly id="terminal" rows="10" cols="50"></textarea>
    <script src="JS/terminalFunction.js"></script>
  </div>

  <br><br><br><br><br><br>
  <h1 id="contact">