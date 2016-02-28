<?php
 if(!isset($_SESSION)){
    session_start();
}
require_once("../databaseConnect.php") ?>

<?php
$firstName = mysql_real_escape_string(stripslashes($_SESSION['firstName']));
$lastName = mysql_real_escape_string(stripslashes($_SESSION['lastName']));
$userName = mysql_real_escape_string(stripslashes($_SESSION['userName']));
$location = mysql_real_escape_string(stripslashes($_SESSION['location']));
$userType = mysql_real_escape_string(stripslashes($_SESSION['userType']));
$profession=mysql_real_escape_string(stripslashes($_SESSION['profession']));
$phoneNumber=mysql_real_escape_string(stripslashes($_SESSION['phoneNumber']));
$userType=ucfirst($userType);
$userType=ucfirst($userType);
if($userType=="Admin")
{
header("location:../AdminPage/adminLogin.php");
}
if($userType=="Sysadmin")
{
header("location:../sysAdminPage/sysadmin.php");
}

?>
?>


<?php
require_once("../databaseConnect.php");

$currentTime=date ( "g:i:s a");

$date=date("Y/m/d").' '.$currentTime;
//$time=time();
$subject=$_POST['title'];
$adminName=$_POST['adminName'];

$complain=mysql_real_escape_string(stripslashes($_POST['complain']));

		
				if(!isset($_SESSION)){
				session_start();
									}
						
				$strSQL = "SELECT * FROM elims_users WHERE userName ='$adminName'" ;

				$rs = mysql_query($strSQL);
				
				while($row = mysql_fetch_array($rs)) {
				
				$email=$row['email'];
				}
			
if(!empty($_POST['title']) && !empty($_POST['complain'])){
		
	$query="INSERT INTO complain(subject,Complain,date,username,email,toAdminName,isRead) VALUES ('$subject','$complain','$date','$userName','$email','$adminName','no')";
	mysql_query($query,$connect) or die("Error".mysql_error());
	
/*	$send="SELECT subject,complain,username FROM complain";
	$result=mysql_query($send,$connect) or die("Error".mysql_error());
	$data = mysql_fetch_row($result);
*/	
	
	$_SESSION['complain']='Complain Sucessfully Delivered';
	header("location:../userPage/user.php");

}
else
echo "Unsuccessful";


?>	

