<?php

$server_name = 'localhost';
$username = 'root';
$password = '';
$db_name = 'fuchsia';

$conn = mysql_connect($server_name, $username, $password, $db_name);
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
echo $username . " Connected Succesfully! <br>";

?>