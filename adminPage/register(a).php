<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
 if(!isset($_SESSION)){
    session_start();
}
require_once("../databaseConnect.php");
 ?>

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
<link rel="shortcut icon" href="../images/icon.ico" />



<script>

function validateForm()
{
var x=document.forms["register"]["fname"].value;
if (x==null || x=="")
  {
  alert("First name must be filled out");
  return false;
  }
}
</script>
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
    <li><a href="adminLogin.php">Home</a></li>
    <li>
        <a href="site.php">Site</a>
        <ul>
            <li><a href="#">Eastern DR</a>
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
            <li><a href="#">Central DR</a>
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
            <li><a href="#">Western DR</a>
			
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
            <li><a href="#">Mid Western DR</a>
			
			
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
			<li><a href="#">Far Western DR</a>
			
			
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

<?php			/*End of the drop down menu*/

 ?>

<div class="contentBox">

<form name="register" method="post" action="register(b).php"	class="regform" onsubmit="return validateForm()">
				


				
				
					
					<h3>Register Users for ELIMS</h3>
					
					<!---Form Elements--->
					<div class="form">
					<table>
						<tr>
						<td><label for="fname"><strong><span class="blue">*</span>First Name:</strong></label></td>
						<td><input id="fname" name="fname" type="text"  size="35" class="form-control"/></td>
						</tr>	
					
					
						<tr>
						<td><label for="lname"><strong><span class="blue">*</span>Last Name:</strong></label></td>
						<td><input id="lname" name="lname" type="text"  size="35" class="form-control" /></td>
						</tr>
						
						<tr>
						<td><label for="username"><strong><span class="blue">*</span>Username:</strong></label></td>
						<td><input id="username" name="username"  type="text"  size="35" class="form-control" /></td>
						</tr>
					
						<tr>
						<td><label for="password"><strong><span class="blue">*</span>Password:</strong></label></td>
						<td><input id="password" name="password"  type="password"  size="35" class="form-control" /></td>
						</tr>
					
						<tr>
						<td><label for="cpassword" ><strong><span class="blue">*</span>Confirm Password:</strong></label></td>
						<td><input id="cpassword" name="cpassword"  type="password" class="form-control" size="35" /></td>
						</tr>
						
						<tr>
						<td><label for="logintype"><strong><span class="blue">*</span>Account Type:</strong></label></td>
						<td><select name="usertype" class="form-control">
						<option value="admin"/>Admin</option>
						<option value="sysadmin">System Admin</option>
						<option value="user">User</option>
						</select></td>
						</tr>
					
						
						<tr>
						<td><label for="phone"><strong><span class="blue">*</span>Phone Number:</strong></label></td>
						<td><input id="phone" name="phone"  type="text"  class="form-control" size="35" /></td>
						</tr>
						<tr>
						<td><label for="address"><strong><span class="blue">*</span>Address:</strong></label></td>
						<td><input id="address" name="address"  type="text"  class="form-control" size="35" /></td>
						</tr>
						<tr>
						<td><label for="email"><strong><span class="blue">*</span> Email : </strong></label></td>
						<td><input id="email" name="email"  type="email" class="form-control"   size="35" /></td>
						</tr>
						<tr>
						<td><label for="gender"> <strong><span class="blue">*</span>Gender: </strong></label></td>
						<td><input type="radio"  name="gender"  value="male" >Male</font>
						<input type="radio"  name="gender"  value="female">Female</font></td>
						</tr>
						<tr>
						<td><label for="profession"><strong><span class="blue">*</span>Profession:</strong></label></td>
						<td><input id="profession" name="profession"  type="text"  size="35" class="form-control" /></td>
						</tr>	
						
					</div>
					
					</table>
					<p align="right"><input type="submit" class="btn btn-success"  value="Submit"/>
					</p>
					</form>
					</div>
			
</div>
</div>
<div class="footer">HeNN(Help Nepal Network)<br>
GPO Box No.: 1794, Kathmandu | Ph.: 977 1 5003060 | Fax: 977 1 5003131<br>
Copyright &#169 2014  Dhulikhel. All rights reserved<br>
</div>

</body>
</html>
			
			





