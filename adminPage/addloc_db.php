<?php
require_once("../databaseConnect.php");

 if(!isset($_SESSION)){
    session_start();
}

$name=mysql_real_escape_string(stripslashes($_POST['name']));

$latitude=$_POST['lat'];
$longitude=$_POST['lon'];
$orgName=mysql_real_escape_string(stripslashes($_POST['organisationName']));

$contactPerson=mysql_real_escape_string(stripslashes($_POST['contactPerson']));

$contactNumber=mysql_real_escape_string(stripslashes($_POST['contactNumber']));

$clientNumber=mysql_real_escape_string(stripslashes($_POST['clientNumber']));

$serverDist=mysql_real_escape_string(stripslashes($_POST['serverDist']));

$contactEmail=mysql_real_escape_string(stripslashes($_POST['contactEmail']));

$designation=mysql_real_escape_string(stripslashes($_POST['designation']));


$district=mysql_real_escape_string(stripslashes($_POST['district']));

$userName=$_SESSION['userName'];

if(!isset($_POST['submit'])) die("Form not submitted.");
if(!isset($_POST['name'])) die("Site Name is required.");
if(!isset($_POST['lat'])) die("Latitude is required.");
if(!isset($_POST['lon'])) die("Longitude is required.");
if(!isset($_POST['organisationName'])) die("Organisation Name required.");
if(!isset($_POST['contactNumber'])) die("Contact Number Required");
if(!isset($_POST['clientNumber'])) die("Client Number is required.");
if(!isset($_POST['serverDist'])) die("serverDist Required");



	$query="INSERT INTO site_maps(name,latitude,longitude,organisationName,district,contactPerson, contactNumber,contactEmail,designation,clientNumber,
	serverDist,siteAddedBy)
	VALUES('$name','$latitude','$longitude','$orgName','$district','$contactPerson','$contactNumber','$contactEmail','$designation','$clientNumber',
	'$serverDist','$userName')";
	mysql_query($query,$connect) or die("not done".mysql_error());
	$_SESSION['message']="Location is added";
	header("location:site.php?action=".$name);

?>



