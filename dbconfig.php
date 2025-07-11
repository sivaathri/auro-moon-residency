<?php
$hostname = "localhost";
$username = "root";
$password = "";
$databasename = "aahahomestayNew";

$dbconn = new PDO("mysql:host=$hostname;dbname=$databasename", $username, $password);

if ($dbconn) {
    //echo "database connected successfully";
} else {
    echo "somthing is wrong" . mysqli_connect_error();
}

//define('BASE_URL', 'http://localhost/AAHAHOMESTAY/');
