<?php
session_start();
$name=$email="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
$name = isset($_POST['name']) ? $_POST['name'] : "DEFAULT";
$email = isset($_POST['email']) ? $_POST['email'] : "DEFAULT123@DEFAULT.com";


echo "<script>alert('Thank you for your feedback $name!');</script>";
echo "<script>window.location = 'index.php';</script>";
echo"thanks $name";

}else{
	echo "Error: You cannot access this page in this way.";
}
exit();


?>