<?php
require_once("../databaseConnect.php");
	if(!isset($_SESSION)){
    session_start();
}
$siteName=$_SESSION['siteName'];
$contactPerson=$_SESSION['contactPerson'];
$contactNumber=$_SESSION['contactNumber'];


	$query="DELETE FROM site_maps WHERE name='$siteName'";
	mysql_query($query,$connect) or die("not done".mysql_error());
	$_SESSION['deleted']="yes";
	
	header("location:site.php");

?>
