<body>
	<h1>Signup Form</h1>
	<form action="processForm.php" method="post">
		<input type="text" id="firstName" name="firstName" placeholder="First Name"><br>
		<input type="text" id="lastName" name="lastName" placeholder="Last Name"><br>
		<input type="email" id="email" name="email" placeholder="Email" required="@"><br>
		<input type="number" id="age" name="age" min="18" max="100" placeholder="Age" required><br>
		<input type="password" id="password" name="password" placeholder="Password" required><br>
		<input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" required><br><br>
		<input type="submit" value="Submit">
</body>