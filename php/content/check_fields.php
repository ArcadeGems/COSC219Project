<?php
$email = strtolower($_POST['email'] ?? $_GET['email']);
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];

$conn = mysqli_connect("sql3.freesqldatabase.com", "sql3665664", "CgfGZSk8Ij", "sql3665664");

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