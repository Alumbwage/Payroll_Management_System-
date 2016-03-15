<?php 
$db = mysql_connect('localhost','root','');
if(!$db){
	echo "Unable to connect to MySQL";
}
$dbname = 'payroll';
$db_connect = mysql_select_db($dbname);

if(!$db_connect){
	echo "Unable to connect to the Database";
}
 ?>