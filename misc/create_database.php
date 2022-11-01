<?php

require_once "root_config.php";

$sql = "CREATE DATABASE `fuchsia` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;";

mysql_select_db('fuchsia');
$retval = mysql_query($sql,  $conn);

if (! $retval) {
    die ('Could not create database: ' . mysql_error());
}
echo 'fuchsia Created Successfully'

?>