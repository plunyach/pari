<?
        error_reporting(E_ALL ^ E_NOTICE);
	$dbhost="localhost";
	$dbusr="root";
	$dbpass="";
	$database="college";
	$conn=mysql_connect($dbhost,$dbusr,$dbpass);
	mysql_select_db($database) or die("databse not connected");
	 
$mysqli = new mysqli("localhost", "root", "", "college");
?>