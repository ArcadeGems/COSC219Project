var username = getCookie("username");
if (username) {
  refreshData();
  setInterval(refreshData, 15000);
} else {
  document.getElementById("terminal").innerHTML = "Welcome to our database! Please sign up to join.";
}

function refreshData() {
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
    if (xhr.readyState == 4 && xhr.status == 200) {
      document.getElementById("terminal").innerHTML = xhr.responseText;
    }
  };
  xhr.open("GET", "php/content/terminal.php", true);
  xhr.send();
}
