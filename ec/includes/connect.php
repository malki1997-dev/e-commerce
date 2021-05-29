<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$servername = "localhost";
$username = "root";
$dbname = "ecomerce_web";

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$db = mysqli_connect($servername, $username, '', $dbname);
 
// Check connection
if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Print host information
// echo "Connect Successfully. Host info: " . mysqli_get_host_info($link);
?>