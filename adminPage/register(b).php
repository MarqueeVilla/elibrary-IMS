
<?php
require_once '../databaseConnect.php';
include_once '../session.php';
session_start();

$fname=mysql_real_escape_string(stripslashes($_POST['fname']));
$lname=mysql_real_escape_string(stripslashes($_POST['lname']));
$uname=mysql_real_escape_string(stripslashes($_POST['username']));
$pass1=md5($_POST['password']);
$utype=$_POST['usertype'];
$pass2=md5($_POST['cpassword']);
$phone=$_POST['phone'];
$address=mysql_real_escape_string(stripslashes($_POST['address']));
$email=mysql_real_escape_string(stripslashes($_POST['email']));
$gender=$_POST['gender'];
$prof=mysql_real_escape_string(stripslashes($_POST['profession']));


if($pass1==$pass2)
	{
		$query="INSERT INTO elims_users(firstName,lastName,userName,password,userType,phoneNumber,location,email,gender,profession) VALUES ('$fname','$lname','$uname','$pass1','$utype','$phone','$address','$email','$gender','$prof')";
		mysql_query($query,$connect) or die("not done".mysql_error());
		echo "<center>";
		$_SESSION['msg']= "CONGRATULATIONS!!! NEW ACCOUNT HAS BEEN CREATED.<br> User Name: ".$uname."<br>Usertype: ".$utype;
		if ($_SESSION['userType']=="admin")
		header("location:adminLogin.php");
		else header("location:../sysAdminPage/sysadmin.php");
	}	
		else
	{
		$_SESSION['msg']= "PASSWORD NOT MATCHED.TRY AGAIN";
		
		header("location:../sysAdminPage/sysadmin.php");

		}
	




