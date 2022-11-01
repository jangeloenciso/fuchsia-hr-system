<?php

require_once "root_config.php";

$sql = "INSERT INTO `fuchsia`.`users` (
    `id` ,
    `username` ,
    `user_type` ,
    `password`
    )
    VALUES (
    NULL , 'employee', 'employee', 'employee123'
    ), (
    NULL , 'admin', 'admin', 'admin123'
    );";

mysql_select_db('fuchsia');
$retval = mysql_query($sql,  $conn);

if (! $retval) {
    die ('Could not create users: ' . mysql_error());
}
echo '"<html><br /></html>" . users inserted Successfully'

?>

