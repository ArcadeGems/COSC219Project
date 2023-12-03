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