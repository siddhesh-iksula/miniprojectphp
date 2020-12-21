<?php
$servername = "localhost";
$username = "adminadmin";
$password = "SID@12dec";
$dbname = "testdatabase";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>