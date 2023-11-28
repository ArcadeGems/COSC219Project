<form action="php/content/contact_form_response.php" id="join" method="post" autocomplete=off>
  <style></style>
  <input type="text" id="fname" name="fname" placeholder="Your First Name" required style="text-align:center;"><br>
  <input type="email" id="email" name="email" placeholder="Email Address" required="@" style="text-align:center;"><br><br>
  <textarea name="message" rows="10" cols="20" placeholder="Tell us what you think!" maxlength="255" required></textarea>
  <br>
  <input id="emailListSubmit" type="submit" value="submit" name="submit">


</form>
<script>
  document.getElementById("join").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent the form from submitting normally

    var formData = new FormData(this);
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
      if (xhr.readyState == 4 && xhr.status == 200) {
        var response = xhr.responseText;
        if (response == "success") {
          // Sign-up was successful, show a success message
          alert("Thanks for your feedback!");
        } else {
          // Sign-up was not successful, show an error message
          alert("Something went wrong. Please try again.");
        }
      }
    };
    xhr.open("POST", "php/content/contact_form_response.php", true);
    xhr.send(formData);
  });
</script>