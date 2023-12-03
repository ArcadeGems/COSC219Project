<?php
$email = strtolower($_POST['email'] ?? $_GET['email']);
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];

$conn = mysqli_connect("sql201.infinityfree.com", "if0_35513046", "EjF9MFxXjeeh", "if0_35513046_arcadegems");

if (mysqli_connect_errno()) {
	die("Connection failed: " . mysqli_connect_error());
}

if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM members WHERE email = '$email'")) > 0) {
	echo "exists";
	exit();
} else {
	echo "not exists";
	exit();
}
?>