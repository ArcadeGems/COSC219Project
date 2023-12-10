<body>
	<h1 class="text-center">Create Account</h1>
	<h6 class="text-center">Already have an account? <a href="login.php">Log in</a></h6>

	<form action="php/content/processForm.php" method="post">
		<div class="mb-3">
			<input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name">
		</div>
		<div class="mb-3">
			<input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name">
		</div>
		<div class="mb-3">
			<input type="email" class="form-control" id="email" name="email" placeholder="Email" required="@">
		</div>
		<div class="mb-3">
			<input type="number" class="form-control" id="age" name="age" min="18" max="100" placeholder="Age" required>
		</div>
		<div class="mb-3">
			<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
		</div>
		<div class="mb-3">
			<input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" required>
			<small id="passwordMismatch" class="text-danger d-none">Passwords do not match</small>
		</div>
		<div class="mb-3">
			<input type="submit" class="btn btn-primary" value="Submit">
		</div>
	</form>
</body>