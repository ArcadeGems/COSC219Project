window.onload = function() {
	var username = getCookie('username');
	if (username) {
		document.querySelector('#signUpBtn').textContent = "HELLO, " + username.toUpperCase();
		document.querySelector('signUpBtn').disabled = true;
		document.querySelector('#loginBtn').textContent = "LOGOUT";
		document.querySelector('#loginBtn').href = "";
		document.querySelector('#loginBtn').removeAttribute("data-toggle");
		document.querySelector('#loginBtn').removeAttribute("data-target");
		document.querySelector('#loginBtn').addEventListener('click', function(e) {
			document.cookie = "username=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
			document.querySelector('#signUpBtn').textContent = "SIGN UP";
			document.querySelector('signUpBtn').disabled = false;
			document.querySelector('#loginBtn').textContent = "LOGIN";
			document.querySelector('#loginBtn').href = "";
			document.querySelector('#loginBtn').setAttribute("data-toggle", "modal");
			document.querySelector('#loginBtn').setAttribute("data-target", "#modalLoginForm");
		});
	}
};


// Function to get a cookie by name
function getCookie(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for (var i = 0; i < ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0) == ' ') c = c.substring(1, c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
	}
	return null;
}

function checkCookie(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for (var i = 0; i < ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0) == ' ') c = c.substring(1, c.length);
		if (c.indexOf(nameEQ) == 0) return true;
	}
	return false;
}

if (checkCookie('username')) {
	console.log('The username cookie exists');
} else {
	console.log('The username cookie does not exist');
}