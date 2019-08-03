<?php
$servername = "sql301.epizy.com";
$username = "epiz_20279950";
$password = "ms199700";
$dbname = "epiz_20279950_serve";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//mysqli_close($conn);
?>