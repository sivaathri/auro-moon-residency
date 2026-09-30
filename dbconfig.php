<?php
$hostname = "localhost";
$username = "aahahomestayNew";
$password = "Monday@123456789";
$databasename = "aahahomestayNew";

$dbconn = new PDO("mysql:host=$hostname;dbname=$databasename", $username, $password);

if ($dbconn) {
    // Set MySQL timezone to IST (+05:30)
    $dbconn->exec("SET time_zone = '+05:30'");
    //echo "database connected successfully";
} else {
    echo "somthing is wrong" . mysqli_connect_error();
}

//define('BASE_URL', 'http://localhost/AAHAHOMESTAY/');