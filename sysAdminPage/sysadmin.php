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

if($userType=="Admin")
{
header("location:../adminPage/adminLogin.php");
}
if($userType=="User")
{
header("location:../userPage/user.php");
}
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml: lang="en" lang="en">

<head><title>ELIMS::E-Library Information Management System</title>
<link rel="stylesheet" type="text/css" href="../css/divs.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap-responsive.css">
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/myjquery.js"></script>

</head>

<body>

<div class="body1">

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
    <li><a href="sysadmin.php">Home</a></li>
    <li>
        <a href="sysadmin_site.php">Site</a>
        <ul>
            <li><a href="#">Eastern DR</a>
			<ul>
			<?php
			
			while($row = mysql_fetch_array($edr)) {
			$district1=$row['district'];
			$siteEDR=mysql_query("SELECT * FROM site_maps WHERE district='$district1'") or die(mysql_error());
			while($rowEDR = mysql_fetch_array($siteEDR)) {
			
					echo '<li><a href="sysadmin_site.php?action='.$rowEDR['name'].'">'.$rowEDR['name'].'</a></li>';
							
							}
							
						}
			?>
					
			</ul>
			</li>
            <li><a href="#">Central DR</a>
			<ul>
			
			<?php
			
			while($row = mysql_fetch_array($cdr)) {
			$district1=$row['district'];
			$siteCDR=mysql_query("SELECT * FROM site_maps WHERE district='$district1'") or die(mysql_error());
			while($rowCDR = mysql_fetch_array($siteCDR)) {
					$siteName1=$rowCDR['name'];
					echo '<li><a href="sysadmin_site.php?action='.$siteName1.'">'.$siteName1.'</a></li>';
							
							
							}
							
						}
			?>
			</ul>			
			</li>
            <li><a href="#">Western DR</a>
			
			<ul>
			
			<?php
			
			while($row = mysql_fetch_array($wdr)) {
			$district1=$row['district'];
			$siteWDR=mysql_query("SELECT * FROM site_maps WHERE district='$district1'") or die(mysql_error());
			while($rowWDR = mysql_fetch_array($siteWDR)) {
					$siteName1=$rowWDR['name'];
					echo '<li><a href="sysadmin_site.php?action='.$siteName1.'">'.$siteName1.'</a></li>';
							
							
							}
							
						}
			?>
			</ul>			
			
			</li>
            <li><a href="#">Mid Western DR</a>
			
			
			<ul>
			
			<?php
			
			while($row = mysql_fetch_array($mwdr)) {
			$district1=$row['district'];
			$siteMWDR=mysql_query("SELECT * FROM site_maps WHERE district='$district1'") or die(mysql_error());
			while($rowMWDR = mysql_fetch_array($siteMWDR)) {
					$siteName1=$rowMWDR['name'];
					echo '<li><a href="sysadmin_site.php?action='.$siteName1.'">'.$siteName1.'</a></li>';
							
							
							}
							
						}
			?>
			</ul>			
			
			</li>
			<li><a href="#">Far Western DR</a>
			
			
			<ul>
			
			<?php
			
			while($row = mysql_fetch_array($fwdr)) {
			$district1=$row['district'];
			$siteFWDR=mysql_query("SELECT * FROM site_maps WHERE district='$district1'") or die(mysql_error());
			while($rowFWDR = mysql_fetch_array($siteFWDR)) {
					$siteName1=$rowFWDR['name'];
					echo '<li><a href="sysadmin_site.php?action='.$siteName1.'">'.$siteName1.'</a></li>';
							
							
							}
							
						}
			?>
			</ul>			
			
			</li>
	
		
			
			
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
	
	<li><a href="register(c).php">Add User</a></li>
	
</ul>

<?php			/*End of the drop down menu*/

 ?>

<div class="contentBox"><?php if(isset($_SESSION['msg']))echo $_SESSION['msg'];
$_SESSION['msg']='';
?></div>
</div>
<div class="footer">HeNN(Help Nepal Network)<br>
GPO Box No.: 1794, Kathmandu | Ph.: 977 1 5003060 | Fax: 977 1 5003131<br>
Copyright &#169 2014 , Dhulikhel. All rights reserved<br>
</div>

</body>