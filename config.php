<?php include 'index.html';

$DB_HOST = "localhost";
$DB_USER = "root";
$DB_PASS = "";
$DB_NAME = "test";

$dbconnect = mysql_connect ($DB_HOST, $DB_USER, $DB_PASS);
if (!$dbconnect) { echo ("Can`t connect to DB server!"); }

if(@mysql_select_db($DB_NAME)) { echo "Connected to $DB_NAME!<br/>"; }
else die ("Can`t connect to $DB_NAME!"); 

?>
