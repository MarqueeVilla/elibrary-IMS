<?php
 if(!isset($_SESSION)){
    session_start();
}
require_once("databaseConnect.php") ?>

<?php 
if(isset($_POST['username']) && isset($_POST['password'])){
		$usernameVariable=htmlentities($_POST['username']);
		$passwordVariable=htmlentities($_POST['password']);
		$encryptedPasswordVariable=md5($passwordVariable);
			
		if(!empty($_POST['username']) && !empty($_POST['password'])){
			
			$queryVariable=mysql_query("SELECT * FROM elims_users WHERE Username='$usernameVariable' AND password='$encryptedPasswordVariable'") or die(mysql_error());
			$count=mysql_fetch_assoc($queryVariable);

			if(!empty($count))
			{	
				$_SESSION['firstName']=$count['firstName'];
				$_SESSION['lastName']=$count['lastName'];
				
				$_SESSION['userName']=$count['userName'];
				$_SESSION['password']=$count['password'];
				$_SESSION['location']=$count['location'];
				$_SESSION['profession']=$count['profession'];
				$_SESSION['phoneNumber']=$count['phoneNumber'];
				$_SESSION['userType']=$count['userType'];
				
				
				header('Location: afterLogin.php');
			}
			else{
				$_SESSION['complain']="Incorrect Username or Password";
				header('Location: index.php');
			}
		}
		else{
			$_SESSION['complain']="Incorrect Username or Password";
			header('Location: index.php');
		}
	}
	else{
		$_SESSION['complain']="Incorrect Username or Password";
				
		header('Location: index.php');
	}


 ?>