<?php
$firstname = $_POST['fname'];
$email = strtolower($_POST['email']);
$comment = $_POST['message'];

$conn = mysqli_connect("sql3.freesqldatabase.com", "sql3665664", "CgfGZSk8Ij", "sql3665664");

if (mysqli_connect_errno()) {
	die("Connection failed: " . mysqli_connect_error());
}

// Check if comment and email are the same
$sql = "SELECT * FROM comments WHERE email = '$email' AND comment = '$comment'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	echo "Comment and email already exist.";
} else {
	// Insert comment and email into database
	$sql = "INSERT INTO comments (email, comment) VALUES ('$email', '$comment')";

	if ($conn->query($sql) === TRUE) {
		echo "success";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

?>