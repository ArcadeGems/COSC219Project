document.getElementById("signUpForm").addEventListener("submit", function(event) {
	event.preventDefault(); // Prevent the form from submitting normally

	var formData = new FormData(this);
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
	  if (xhr.readyState == 4 && xhr.status == 200) {
		var response = xhr.responseText;
		if (response == "success") {
		  // Sign-up was successful, redirect to the main page
		  window.location.href = "index.php"; // Replace with the URL of your main page
		} else {
		  // Sign-up was not successful, show an error message
		  document.getElementById("popupText").innerHTML = "Sign-up failed: " + response;
		  document.getElementById("popup").style.display = "block";
		}
	  }
	};
	xhr.open("POST", "php/content/processForm.php", true);
	xhr.send(formData);
  });