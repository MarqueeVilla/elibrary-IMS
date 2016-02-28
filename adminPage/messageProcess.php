<?php


 if(!isset($_SESSION)){
    session_start();
}
require_once("../databaseConnect.php") ;

$date=$_SESSION['dateGiven'];

if(!empty($_POST['delete'])){
		$query="DELETE FROM complain WHERE date='$date';";
		mysql_query($query,$connect) or die("Error".mysql_error());
	
		$_SESSION['msg']="Message has been deleted";
	     
		header("location:viewComplains.php?action=ViewAllComplains");
		

}

else if(!empty($_POST['read'])){
		
	$query="UPDATE complain SET isRead='yes' WHERE date='$date';";
	
	mysql_query($query,$connect) or die("Error".mysql_error());
	
	$_SESSION['message']="Message has been marked as read";
		
	header("location:viewComplains.php");

}
else
echo "Unsuccessful";
?>