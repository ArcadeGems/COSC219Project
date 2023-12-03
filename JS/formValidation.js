var passwordsMatch = false;
    var emailIsUnique = false;

    function checkPassword(password, confirmPassword) {
      if (password != confirmPassword) {
        // Passwords do not match, show the popup
        document.getElementById("popupText").innerHTML = "Passwords do not match";
        document.getElementById("popup").style.display = "block";
        passwordsMatch = false;
      } else {
        // Passwords match, hide the popup
        document.getElementById("popup").style.display = "none";
        passwordsMatch = true;
      }
      checkFormValidity();
    }

    function checkEmail(email) {
      // Your existing AJAX request to check_email.php
      // In the callback function, set emailIsUnique to true if the email is unique, and false otherwise
      // Then call checkFormValidity()
      var xhr = new XMLHttpRequest();
      xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
          var response = xhr.responseText;
          if (response == "exists") {
            // Email exists, show the popup
            document.getElementById("popupText").innerHTML = "Email already exists";
            document.getElementById("popup").style.display = "block";
            emailIsUnique = false;
          } else {
            // Email does not exist, hide the popup
            document.getElementById("popup").style.display = "none";
            emailIsUnique = true;
          }
          checkFormValidity();
        }
      };
      xhr.open("GET", "php/content/check_fields.php?email=" + email, true);
      xhr.send();
    }

    // Call checkEmail when the email input field loses focus
    document.getElementById("email").addEventListener("keyup", function() {
      checkEmail(this.value);
    });

    function checkFormValidity() {
      document.getElementById("submit").disabled = !(passwordsMatch && emailIsUnique);
    }

    // Call checkPassword when the confirmPassword input field loses focus
    document.getElementById("confirmPassword").addEventListener("blur", function() {
      checkPassword(document.getElementById("password").value, this.value);
    });

    // Call checkEmail when the email input field loses focus
    document.getElementById("email").addEventListener("blur", function() {
      checkEmail(this.value);
    });