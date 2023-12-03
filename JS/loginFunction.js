document.querySelector('.btn').addEventListener('click', function(e) {
	e.preventDefault();
	var email = document.querySelector('#defaultForm-email').value;
	var password = document.querySelector('#defaultForm-pass').value;
	var xhr = new XMLHttpRequest();
	xhr.open('POST', 'php/content/login.php', true);
	xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	xhr.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			if (this.responseText == 'success') {
				// Redirect to dashboard or reload page
				window.location.href = 'index.php';
			} else {
				// Show error message
				alert('Invalid email or password');
			}
		}
	};
	xhr.send('email=' + encodeURIComponent(email) + '&password=' + encodeURIComponent(password));
});