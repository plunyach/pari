<?php
error_reporting();

	 
$mysqli = new mysqli("localhost", "root", "", "parishkar");

$sn=$_POST['uname'];
$email=$_POST['email'];
$password=$_POST['password'];


/*******************************************Insert Table********************************************/


 $sql = "INSERT INTO staff_login (  sn, email, pasword ) VALUES ( '$sn',  '$email', '$password')"; 


$result=$mysqli->Query($sql);

header("location: ./index.html");	


?>