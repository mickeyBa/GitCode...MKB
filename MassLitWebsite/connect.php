<?php

$dbhost ='localhost';
$dbuser = 'mickey';
$dbpass = 'mickeybass';
$dbname = 'nysc_register';
// Create database connection
$conn = mysqli_connect($dbhost,$dbuser,$dbpass);
mysqli_select_db($conn,$dbname);
//Check connection

if ($conn->connect_error){
die ("Connection failed: ".$conn->connect_error);
}
// else{
//echo "connected successfully";
// }


?>
