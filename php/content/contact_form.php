<form action="php/content/contact_form_response.php" id="join" method="post" autocomplete=off>

  <input type="text" id="fname" name="fname" placeholder="Your First Name" required style="text-align:center;"><br>
  <input type="email" id="email" name="email" placeholder="Email Address" required="@" style="text-align:center;"><br><br>
  <textarea name="message" rows="10" cols="20" placeholder="Tell us what you think!" maxlength="255" required></textarea>
  <br>
  <input id="emailListSubmit" type="submit" value="Submit" name="submit">


</form>
<script src="JS/joinFunction.js"></script><script>
  document.getElementById("join").addEventListener("submit", function() {
    document.getElementById("fname").value = "";
    document.getElementById("email").value = "";
    document.getElementsByName("message")[0].value = "";
  });
</script>
