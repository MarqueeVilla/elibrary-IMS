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
$_SESSION['message']='';

if($userType=="Admin")
{
header("location:../adminPage/adminLogin.php");
}
if($userType=="Sysadmin")
{
header("location:../sysAdminPage/sysadmin.php");
}

?>

<html xmlns="http://www.w3.org/1999/xhtml" xml: lang="en" lang="en">

<head><title>ELIMS::E-Library Information Management System</title>
<link rel="shortcut icon" href="../images/icon.ico" />

<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <style type="text/css">
            body { font: normal 10pt Helvetica, Arial; }
            #map { width: 500px; height: 380px; border: 0px; padding: 0px; }
        </style>
    


        <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false">
        </script>
		<script type="text/javascript">

            var icon = new google.maps.MarkerImage("http://maps.google.com/mapfiles/ms/micons/blue.png",
                    new google.maps.Size(64, 32), new google.maps.Point(0, 0),
                    new google.maps.Point(16, 32));
            var center = null;
            var map = null;
            var currentPopup;
            var bounds = new google.maps.LatLngBounds();
            function addMarker(lat, lng, info) {
                var pt = new google.maps.LatLng(lat, lng);
                bounds.extend(pt);


                var marker = new google.maps.Marker({
                    position: pt,
                    icon: icon,
                    map: map
                });
                
                var information=info
                var popup = new google.maps.InfoWindow({
                    content: '<a href="user_site.php?action='+information+'">'+info+'</a>',
                    maxWidth: 600
                });

                google.maps.event.addDomListener(map, 'tilesloaded', function() {
                    var infoWindowMap = '<a href="user_site.php?action='+information+'">'+info+'</a>';
                    var popup = new google.maps.InfoWindow({
                        content: infoWindowMap
                    });
                });

                google.maps.event.addListener(marker, "click", function() {
                    if (currentPopup != null) {
                        currentPopup.close();
                        currentPopup = null;
                    }
                    popup.open(map, marker);
                    currentPopup = popup;
                });
                google.maps.event.addListener(popup, "closeclick", function() {
                    map.panTo(center);
                    currentPopup = null;
                });


            }
            function initMap() {
                    center: new google.maps.LatLng(28.695406, 84.0),
                map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 2,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    mapTypeControl: true,
                    mapTypeControlOptions: {
                        style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR
                    },
                    navigationControl: true,
                    navigationControlOptions: {
                        style: google.maps.NavigationControlStyle.ZOOM_PAN
                    }
                });
<?php
$query = mysql_query("SELECT * FROM site_maps")or die(mysql_error());
while ($row = mysql_fetch_array($query)) {
    $name = $row['name'];
    $lat = $row['latitude'];
    $lon = $row['longitude'];
    echo("addMarker($lat, $lon, '$name');\n");
}
?>
                center = bounds.getCenter();
                map.fitBounds(bounds);
/*
               google.maps.event.addListener(map, 'rightclick', function(event) {
                    var inpLat = event.latLng.lat();
                    var inpLong = event.latLng.lng();

                    document.getElementById('lat').value = inpLat;
                    document.getElementById('lon').value = inpLong;

                    var siteName = prompt("Enter the name of site for the point you selected, \n\n ("
                            + inpLat + ", " + inpLong + ")", "For eg, Kathmandu University, Dhulikhel");



                    document.getElementById('name').value = siteName;
                    return false;
                });
*/
            }
        </script>




<link rel="stylesheet" type="text/css" href="../css/divs.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap-responsive.css">
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/myjquery.js"></script>

</head>
		<body onload="initMap()" style="margin:0px; border:0px; padding:0px;">

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
    <li><a href="user.php">Home</a></li>
    <li>
        <a href="user_site.php">Site</a>
        <ul>
            <li><a href="#">Eastern DR</a>
			<ul>
			<?php
			
			while($row = mysql_fetch_array($edr)) {
			$district1=$row['district'];
			$siteEDR=mysql_query("SELECT * FROM site_maps WHERE district='$district1'") or die(mysql_error());
			while($rowEDR = mysql_fetch_array($siteEDR)) {
			
					echo '<li><a href="user_site.php?action='.$rowEDR['name'].'">'.$rowEDR['name'].'</a></li>';
							
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
					echo '<li><a href="user_site.php?action='.$siteName1.'">'.$siteName1.'</a></li>';
							
							
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
					echo '<li><a href="user_site.php?action='.$siteName1.'">'.$siteName1.'</a></li>';
							
							
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
					echo '<li><a href="user_site.php?action='.$siteName1.'">'.$siteName1.'</a></li>';
							
							
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
					echo '<li><a href="user_site.php?action='.$siteName1.'">'.$siteName1.'</a></li>';
							
							
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
	<li><a href="complain.php">Complain</a></li>
	
</ul>

<?php			/*End of the drop down menu*/

 ?>
<div>

	
     <h3 align="center">ELIMS sites as of present</h3>
	 <div id="map" style="width:600px;height:400px;float:left;position:absolute"></div>
	<?php
	if(isset($_GET["action"])){
	$siteName=$_GET["action"];

	require_once("../databaseConnect.php");
	$strSQL = "SELECT * FROM site_maps WHERE name='$siteName'";
	
	
	$rs = mysql_query($strSQL);
	
	while($row = mysql_fetch_array($rs)) {
	$organisationName=$row['organisationName'];
	$contactPerson=$row['contactPerson'];
	$contactNumber=$row['contactNumber'];
	$contactEmail=$row['contactEmail'];
	$designation=$row['designation'];
	$clientNumber=$row['clientNumber'];
	$serverDist=$row['serverDist'];
	
	
	}
	echo'
	<div id="information" style="float:right;width:375px;height:400px;">
	<table class="table table-hover">
	<tr><td>Site Name:<td>'.$siteName.'	</tr>
	<tr><td>Organisation Name:<td>'.$organisationName.'	</tr>
	<tr><td>Contact Person:<td>'.$contactPerson.'	</tr>
	<tr><td>Contact Number:<td>'.$contactNumber.'	</tr>
	<tr><td>Contact Email:<td>'.$contactEmail.'	</tr>
	<tr><td>Designation:<td>'.$designation.'	</tr>
	<tr><td>Client Number:<td>'.$clientNumber.'	</tr>
	<tr><td>Server Distribution:<td>'.$serverDist.'	</tr>


	</table>
';}
	?>
	</div>
		
		</div>
</div>

<div class="footer">HeNN(Help Nepal Network)<br>
GPO Box No.: 1794, Kathmandu | Ph.: 977 1 5003060 | Fax: 977 1 5003131<br>
Copyright &#169 2014  Dhulikhel. All rights reserved<br>
</div>

</body>
</html>