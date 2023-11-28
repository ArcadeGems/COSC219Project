<?php
session_start();
$gamesLink = "#games";
$aboutUsLink = "#aboutus";
$joinNowLink = "#database";
$feedbackLink = "#feedback";
$contactLink = "#footer-social";
$indexLink = "";
if (!(strpos(basename($_SERVER['PHP_SELF']), "index.php"))) {
	$indexLink = "index.php";
}
?>

<body>

	<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header text-center">
					<h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body mx-3">
					<div class="md-form mb-5">
						<i class="fas fa-envelope prefix grey-text"></i>
						<input type="email" id="defaultForm-email" class="form-control validate">
						<label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
					</div>

					<div class="md-form mb-4">
						<i class="fas fa-lock prefix grey-text"></i>
						<input type="password" id="defaultForm-pass" class="form-control validate">
						<label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
					</div>

				</div>
				<div class="modal-footer d-flex justify-content-center">
					<button class="btn btn-default">Login</button>
				</div>
			</div>
		</div>
	</div>

	<div class="text-center">

	</div>


	<nav class="navbar">
		<ul class="main-links">
			<li><a href="<?php echo $indexLink . $gamesLink; ?>">GAMES</a></li>
			<li><a href="<?php echo $indexLink . $aboutUsLink; ?>">ABOUT US</a></li>
			<li><a href="<?php echo $indexLink . $feedbackLink; ?>">FEEDBACK</a></li>
			<li><a href="<?php echo $indexLink . $joinNowLink; ?>">JOIN NOW</a></li>
			<li><a href="<?php echo $indexLink . $contactLink; ?>">CONTACT</a></li>
		</ul>
		<ul class="sub-links">
			<li><a id="signUpBtn" href="./signup_page.php">SIGN UP</a></li>
			<li><a> <a id="loginBtn" href="" data-toggle="modal" data-target="#modalLoginForm">LOGIN</a></li>
		</ul>

	</nav>
	<script>
		// JavaScript
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
	</script>
	<script>
		// JavaScript
		// JavaScript
		window.onload = function() {
			var username = getCookie('username');
			if (username) {
				document.querySelector('#signUpBtn').textContent = "hello, " + username;
				document.querySelector('#loginBtn').textContent = "logout";
				document.querySelector('#loginBtn').href = "";
				document.querySelector('#loginBtn').removeAttribute("data-toggle");
				document.querySelector('#loginBtn').removeAttribute("data-target");
				document.querySelector('#loginBtn').addEventListener('click', function(e) {
					document.cookie = "username=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
					document.querySelector('#signUpBtn').textContent = "SIGN UP";
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

		// Usage
		if (checkCookie('username')) {
			console.log('The username cookie exists');
		} else {
			console.log('The username cookie does not exist');
		}
	</script>
</body>