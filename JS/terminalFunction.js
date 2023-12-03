var username = getCookie("username");
      if (username) {
        refreshData();
        setInterval(refreshData, 15000);
      } else {
        document.getElementById("terminal").innerHTML = "Welcome to our database! Please sign up to join.";
      }

      function refreshData() {
        // Step 1: Create a new XMLHttpRequest object
        var xhr = new XMLHttpRequest();

        // Step 2: Define a callback function for the onreadystatechange event
        xhr.onreadystatechange = function() {
          if (xhr.readyState == 4 && xhr.status == 200) {
            // Step 5: Update the text on the page
            document.getElementById("terminal").innerHTML = xhr.responseText;
          }
        };

        // Step 3: Open a connection to the server
        xhr.open("GET", "php/content/terminal.php", true);

        // Step 4: Send the request
        xhr.send();
      }