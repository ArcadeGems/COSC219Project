<?php
session_start();
// Create connection
$conn = mysqli_connect("sql3.freesqldatabase.com", "sql3665664", "CgfGZSk8Ij", "sql3665664");

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
	setcookie("username", $row['firstname'], time() + (86400 * 30), "/"); // 86400 = 1 day
	echo "success";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
