<?php
  $server_name = 'localhost';
  $username = 'guest';
  $password = 'guest123';
  $db_name = 'fuchsia';

  $conn = mysqli_connect($server_name, $username, $password, $db_name);
  if($conn === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  echo "Fuchsia Connected Succesfully!";
?>