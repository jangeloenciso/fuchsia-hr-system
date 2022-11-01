<?php

require_once "root_config.php";

$sql = "CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    user_type VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL
);";

mysql_select_db('fuchsia');
$retval = mysql_query($sql,  $conn);

if (! $retval) {
    die ('Could not create table: ' . mysql_error());
}
echo '<html><br /></html>users Table Created Successfully'

?>