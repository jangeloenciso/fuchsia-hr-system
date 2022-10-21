<?php

$server_name = 'localhost';
$username = 'root';
$password = '';

$conn = mysql_connect($server_name, $username, $password);
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
echo $username . " Connected Succesfully! <br>";

$sql = "CREATE DATABASE `fuchsia` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;";

mysql_select_db('fuchsia');
$retval = mysql_query($sql,  $conn);

if (! $retval) {
    die ('Could not create database: ' . mysql_error());
}
echo 'fuchsia Created Successfully'

?>