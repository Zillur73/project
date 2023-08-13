<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "loin_register";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}

?>