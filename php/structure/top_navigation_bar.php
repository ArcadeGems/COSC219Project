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
	<script src="JS/loginFunction.js"></script>
	<script src="JS/cookie.js"></script>
</body>