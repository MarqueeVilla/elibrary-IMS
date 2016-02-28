<?php 

$host='localhost';
$username='root';
$password='';
$database='elims';
$connect=mysql_connect($host,$username,$password) or die("databse connection failed...".mysql_error());;
$db_select=mysql_select_db($database,$connect) or die("databse connection failed...".mysql_error());




 ?>