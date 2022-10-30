<?php

require_once "root_config.php";

$sql = "CREATE TABLE employees (
        id INT NOT NULL AUTO_INCREMENT ,
        first_name VARCHAR( 40 ) NOT NULL,
        last_name VARCHAR( 40 ) NOT NULL ,
        age SMALLINT( 100 ) NOT NULL ,
        gender VARCHAR( 100 ) NOT NULL ,
        home_address VARCHAR( 200 ) NOT NULL ,
        contact_number VARCHAR( 100 ) NOT NULL ,
        email_address VARCHAR( 300 ) NOT NULL ,
        company_position VARCHAR( 100 ) NOT NULL ,
        monthly_salary DECIMAL NOT NULL ,
        PRIMARY KEY ( id )
        ) ENGINE = MYISAM";

mysql_select_db('fuchsia');
$retval = mysql_query($sql,  $conn);

if (! $retval) {
    die ('Could not create table: ' . mysql_error());
}
echo 'employees Table Created Successfully'

?>