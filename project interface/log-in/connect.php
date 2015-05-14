<?php

$mysql_hostname = "localhost";
$mysql_username = "root";
$mysql_password = "";
$mysql_database = "student_support_system";
$db = mysql_connect ($mysql_hostname,$mysql_username, $mysql_password) ;
mysql_select_db($mysql_database, $db) or die("can not find database");

?>