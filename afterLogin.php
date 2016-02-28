<?php session_start();
if (empty($_SESSION)){	header('Location: index.php');} 
$_SESSION['logged']='1';

$firstName = $_SESSION['firstName'];
$lastName = $_SESSION['lastName'];
$userName = $_SESSION['userName'];
$location = $_SESSION['location'];
$userType = $_SESSION['userType'];
$profession=$_SESSION['profession'];
$phoneNumber=$_SESSION['phoneNumber'];
if($userType=="admin"){
header('Location: adminPage/adminLogin.php');
}
else if($userType=="sysadmin"){
header('Location: sysAdminPage/sysadmin.php');
}
if($userType=="user"){
header('Location: userPage/user.php');
}
?>
