<?php

require_once "root_config.php";

$sql = 'GRANT SELECT, INSERT, UPDATE, DELETE ON *.* TO \'guest\'@\'localhost\'WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;';

mysql_select_db('fuchsia');
$retval = mysql_query($sql,  $conn);

if (! $retval) {
    die ('Could not set delete privilege: ' . mysql_error());
}
echo '<html><br /></html>Delete Privileges Set Successfully'

?>