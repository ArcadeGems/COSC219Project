<?php
session_start();
// Create connection
$conn = mysqli_connect("sql201.infinityfree.com", "if0_35513046", "EjF9MFxXjeeh", "if0_35513046_arcadegems");
// Check connection
if (mysqli_connect_error()) {
	die("Connection failed: " . mysqli_connect_error());
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM members WHERE email = '$email' AND password = SHA1('$password')";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	$row = mysqli_fetch_assoc($result);
	setcookie("username", $row['firstname'], time() + (3,600 * 60), "/"); // 86400 = 1 day
	echo "success";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
