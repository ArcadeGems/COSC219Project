<?php
$firstname = $_POST['firstName'];
$lastname = $_POST['lastName'];
$email = strtolower($_POST['email']);
$password = $_POST['password'];

$age = $_POST['age'];

$conn = mysqli_connect("sql3.freesqldatabase.com", "sql3665664", "CgfGZSk8Ij", "sql3665664");

if (mysqli_connect_errno()) {
	die("Connection failed: " . mysqli_connect_error());
}

if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM members WHERE email = '$email'")) > 0) {
	echo "exists";
} else {
	$sql = "INSERT INTO members (firstname, lastname, email, password, age) VALUES ('$firstname', '$lastname', '$email', SHA1('$password'), '$age')";

	if ($conn->query($sql) === TRUE) {
		echo "success";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

?>