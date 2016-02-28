<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
 if(!isset($_SESSION)){
    session_start();
}
require_once("../databaseConnect.php") ?>

<?php
$firstName = $_SESSION['firstName'];
$lastName = $_SESSION['lastName'];
$userName = $_SESSION['userName'];
$location = $_SESSION['location'];
$userType = $_SESSION['userType'];
$profession=$_SESSION['profession'];
$phoneNumber=$_SESSION['phoneNumber'];
$userType=ucfirst($userType);


if(isset($_SESSION['logged'])){
if($_SESSION['logged']=='0'){
header("location:../index.php");

}
}
if($userType=="User")
{
header("location:../userPage/user.php");
}
if($userType=="Sysadmin")
{
header("location:../sysAdminPage/sysadmin.php");
}



$userName = $_SESSION['userName'];
 
			/*All Message Count*/
			$strSQL = "SELECT * FROM complain WHERE toAdminName='$userName' ORDER BY date DESC";

	$rs = mysql_query($strSQL);
	$allMessages=0;
	while($row = mysql_fetch_array($rs)) {
	$allMessages++;
	}
			/*Old Message Count*/
			$strSQL = "SELECT * FROM complain WHERE toAdminName='$userName' AND isRead='yes' ORDER BY date DESC";

	$rs = mysql_query($strSQL);
	$oldMessages=0;

	while($row = mysql_fetch_array($rs)) {
	$oldMessages++;
}	
			/*New Message Count*/
		$strSQL = "SELECT * FROM complain WHERE toAdminName='$userName' AND isRead='no' ORDER BY date DESC";

	$rs = mysql_query($strSQL);
	$newMessages=0;
	while($row = mysql_fetch_array($rs)) {
	$newMessages++;	
			
			
	}
	

?>

<html xmlns="http://www.w3.org/1999/xhtml" xml: lang="en" lang="en">

<head><title>ELIMS::E-Library Information Management System</title>
<link rel="stylesheet" type="text/css" href="../css/divs.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap-responsive.css">
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/myjquery.js"></script>
<link rel="stylesheet" type="text/css" href="../css/divs.css">
<link rel="shortcut icon" href="../images/icon.ico" />


<style>
.complain{
width:980px;
height:70px;
}
</style>
</head>

<body>

<div class="body2">

<div class="menubox">


<h5 align="center">Welcome, you are currently logged in as <?php echo $firstName; ?>!!</h4>

<h5 class="afterLogin" align="center">User Type:<?php echo $userType;?></h5>

<a href="../logOut.php" class="logout">Logout</a>
</div>
<div class="banner">
<h1>ELIMS<br></h1>

<h2>E-Library Information Management System</h2>
</div>



<?php
/*Adds the locations in the sub menu*/


$edr=mysql_query("SELECT * FROM districtdr WHERE DR='EDR' ORDER BY district ASC") or die(mysql_error());
$cdr=mysql_query("SELECT * FROM districtdr WHERE DR='CDR' ORDER BY district ASC") or die(mysql_error());
$wdr=mysql_query("SELECT * FROM districtdr WHERE DR='WDR' ORDER BY district ASC") or die(mysql_error());
$mwdr=mysql_query("SELECT * FROM districtdr WHERE DR='MWDR' ORDER BY district ASC") or die(mysql_error());
$fwdr=mysql_query("SELECT * FROM districtdr WHERE DR='FWDR' ORDER BY district ASC") or die(mysql_error());


?>
<ul id="menu">
    <li><a href="adminLogin.php">Home</a></li>
    <li>
        <a href="site.php">Site</a>
        <ul>
            <li><a href="#">EDR</a>
			<ul>
			<?php
			
			while($row = mysql_fetch_array($edr)) {
			$district1=$row['district'];
			$siteEDR=mysql_query("SELECT * FROM site_maps WHERE district='$district1'") or die(mysql_error());
			while($rowEDR = mysql_fetch_array($siteEDR)) {
			
					echo '<li><a href="site.php?action='.$rowEDR['name'].'">'.$rowEDR['name'].'</a></li>';
							
							}
							
						}
			?>
					
			</ul>
			</li>
            <li><a href="#">CDR</a>
			<ul>
			
			<?php
			
			while($row = mysql_fetch_array($cdr)) {
			$district1=$row['district'];
			$siteCDR=mysql_query("SELECT * FROM site_maps WHERE district='$district1'") or die(mysql_error());
			while($rowCDR = mysql_fetch_array($siteCDR)) {
					$siteName1=$rowCDR['name'];
					echo '<li><a href="site.php?action='.$siteName1.'">'.$siteName1.'</a></li>';
							
							
							}
							
						}
			?>
			</ul>			
			</li>
            <li><a href="#">WDR</a>
			
			<ul>
			
			<?php
			
			while($row = mysql_fetch_array($wdr)) {
			$district1=$row['district'];
			$siteWDR=mysql_query("SELECT * FROM site_maps WHERE district='$district1'") or die(mysql_error());
			while($rowWDR = mysql_fetch_array($siteWDR)) {
					$siteName1=$rowWDR['name'];
					echo '<li><a href="site.php?action='.$siteName1.'">'.$siteName1.'</a></li>';
							
							
							}
							
						}
			?>
			</ul>			
			
			</li>
            <li><a href="#">MWDR</a>
			
			
			<ul>
			
			<?php
			
			while($row = mysql_fetch_array($mwdr)) {
			$district1=$row['district'];
			$siteMWDR=mysql_query("SELECT * FROM site_maps WHERE district='$district1'") or die(mysql_error());
			while($rowMWDR = mysql_fetch_array($siteMWDR)) {
					$siteName1=$rowMWDR['name'];
					echo '<li><a href="site.php?action='.$siteName1.'">'.$siteName1.'</a></li>';
							
							
							}
							
						}
			?>
			</ul>			
			
			</li>
			<li><a href="#">FWDR</a>
			
			
			<ul>
			
			<?php
			
			while($row = mysql_fetch_array($fwdr)) {
			$district1=$row['district'];
			$siteFWDR=mysql_query("SELECT * FROM site_maps WHERE district='$district1'") or die(mysql_error());
			while($rowFWDR = mysql_fetch_array($siteFWDR)) {
					$siteName1=$rowFWDR['name'];
					echo '<li><a href="site.php?action='.$siteName1.'">'.$siteName1.'</a></li>';
							
							
							}
							
						}
			/*End of the drop down menu*/
			?>
			</ul>			
			
			</li>
	

			<li><a href="addSite.php">ADD SITE</a></li>
			
			
			
        </ul>
    </li>
    <li><a href="#">Work</a>
	    <ul>
            <li><a href="#">Community</a></li>
            <li><a href="#">School Development</a></li>
            <li><a href="#">Computer Destributions</a></li>
            <li><a href="#">LTSP</a></li>
        </ul>
	</li>
    <li><a href="#">About</a></li>
    <li><a href="#">Contact</a></li>
	<li><a href="viewComplains.php">Complains(<?php echo $newMessages;?>)</a></li>
	<li><a href="register(a).php">Add User</a></li>
	
</ul>



<div class="contentBox">
<div class="sideBar">
<ul id="sideBarContent">


<li><a href="viewComplains.php?action=ViewAllComplains">All Complains (<?php echo $allMessages;?>)</a>
<li><br><br><br><a href="viewComplains.php?action=ViewNewComplains">Unread Complains (<?php echo $newMessages;?>)</a>
<li><br><br><br><a href="viewComplains.php?action=ViewOldComplains">Read Complains (<?php echo $oldMessages;?>)</a>

</ul>
</div>
<div class="complainTab">
<?php
/*----------------------------------------------------------------------*/
echo $_SESSION['msg'];
$_SESSION['msg']='';

if(isset($_GET["action"])){
echo'
<table class="table table-hover	" >
<tr>
<th width="50px">S no.</th>

<th width="100px">FROM</th>
<th width="300px">SUBJECT</th>
<th width="100px">DATE</th>

</tr>
<tr>
';
if(isset($_GET["action"]) and $_GET["action"]=="ViewAllComplains"){
viewAllComplains();
}
else if(isset($_GET["action"]) and $_GET["action"]=="ViewNewComplains"){
viewNewComplains();
}
else if(isset($_GET["action"]) and $_GET["action"]=="ViewOldComplains"){
viewOldComplains();
}
}

/*Function to view All complains*/
function viewAllComplains(){
 if(!isset($_SESSION)){
    session_start();
}

require_once("../databaseConnect.php");
$userName = $_SESSION['userName'];
 
			
			$strSQL = "SELECT * FROM complain WHERE toAdminName='$userName' ORDER BY date DESC";

	$rs = mysql_query($strSQL);
	$i=1;
	while($row = mysql_fetch_array($rs)) {
	echo'<td align="center">';echo $i.'</td>';
	
	echo'<td align="center">';echo $row['username'].'</td>';
	echo'<td align="center">';echo $row['subject'].'</td>';
	echo'<td align="center">';echo $row['date'].'</td>';
	echo'<td align="center"><a href="viewComplainSelect.php?action='.$row['date'].'">View</a></td>';
	$i++;	
	echo '</tr>';
	
	
	  }	

}

/*Function to view the new complains*/
function viewNewComplains(){
 if(!isset($_SESSION)){
    session_start();
}

require_once("../databaseConnect.php");
$userName = $_SESSION['userName'];
 
			
			$strSQL = "SELECT * FROM complain WHERE toAdminName='$userName' AND isRead='no' ORDER BY date DESC";

	$rs = mysql_query($strSQL);
	$i=1;
	while($row = mysql_fetch_array($rs)) {
	echo'<td align="center">';echo $i.'</td>';
	
	echo'<td align="center">';echo $row['username'].'</td>';
	echo'<td align="center">';echo $row['subject'].'</td>';
	echo'<td align="center">';echo $row['date'].'</td>';
	echo'<td align="center"><a href="viewComplainSelect.php?action='.$row['date'].'">View</a></td>';
	$i++;	
	echo '</tr>';
	
	
	  }	


}

/*Function to view the old complains*/
function viewOldComplains(){
 if(!isset($_SESSION)){
    session_start();
}

require_once("../databaseConnect.php");
$userName = $_SESSION['userName'];
 
			
			$strSQL = "SELECT * FROM complain WHERE toAdminName='$userName' AND isRead='yes' ORDER BY date DESC";

	$rs = mysql_query($strSQL);
	$i=1;
	while($row = mysql_fetch_array($rs)) {
	echo'<td align="center">';echo $i.'</td>';
	
	echo'<td align="center">';echo $row['username'].'</td>';
	echo'<td align="center">';echo $row['subject'].'</td>';
	echo'<td align="center">';echo $row['date'].'</td>';
	echo'<td align="center"><a href="viewComplainSelect.php?action='.$row['date'].'">View</a></td>';
	$i++;	
	echo '</tr>';
	
	
	  }	


}

/*--------------------------------------------------------------------*/
?>
</table>
</div>
</div>
</div>

</body>