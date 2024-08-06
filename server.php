<?php
$servername = "sql201.infinityfree.com";
$username = "if0_37049318";
$password = "mErgT0wDQUn";
$dbname = "if0_37049318_instagram";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
