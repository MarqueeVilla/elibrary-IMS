<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
 if(!isset($_SESSION)){
    session_start();
}
require_once("databaseConnect.php");

if(isset($_SESSION['logged'])){
if($_SESSION['logged']=='1'){
header("location:adminPage/adminLogin.php");

}
}




?>
<html xmlns="http://www.w3.org/1999/xhtml" xml: lang="en" lang="en">


<head><title>ELIMS::E-Library Information Management System</title>
<link rel="shortcut icon" href="images/icon.ico" />
<link rel="stylesheet" type="text/css" href="css/divs.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/my_code.js"></script>

    <link href="css/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="js/js-image-slider.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />

	
 <style>
#login{
margin-left:60px;
}
 </style>

 </head>

<body>


<div class="body1">

<div class="menubox">

<h4 class ="loginh4" align="center">ELIMS Login</h4>
<form action="checkLogin.php" method="post">
<p class="error">

<?php 
if(isset($_SESSION['complain'])){
$complain=$_SESSION['complain'];
echo $complain;
$_SESSION['complain']='';
}


?></p>
<input type="text" name="username" id="username1" placeholder="User Name" />
<input type="password" name="password" id="password1" placeholder="Password" />
<input type="submit" class="btn btn-success" id="login" value="login"/>
</form>

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
    <li><a href="index.php">Home</a></li>
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
	
</ul>

<?php			/*End of the drop down menu*/

 ?>

<div class="contentBox">

<?php /* Slider Part*/?>
       
   
    <div id="sliderFrame">
        <div id="ribbon"></div>
        <div id="slider">
            <a href="#">
                <img src="images/1.jpg" alt="ELIMS" />
            </a>
            <a class="lazyImage" href="images/2.jpg" title="Helping">Customizable Transition Effects</a>
            <a href="#">
                <b data-src="images/3.jpg" data-alt="Serving">Image Slider</b>
            </a>
            <a class="lazyImage" href="images/4.jpg" title="Changing Lives">Plain Javascript Slider</a>
            
        </div>
        <div style="display: none;">
            
        </div>
                
        <!--thumbnails-->
        <div id="thumbs">
            <div class="thumb"><img src="images/thumb_1.jpg" /></div>
            <div class="thumb"><img src="images/thumb_2.jpg" /></div>
            <div class="thumb"><img src="images/thumb_3.jpg" /></div>
            <div class="thumb"><img src="images/thumb_4.jpg" /></div>
            
        </div>
    </div>

</div>
<?php /*---------Slider Part ends----------*/?>

</div>

<div class="footer">
HeNN(Help Nepal Network)<br>
GPO Box No.: 1794, Kathmandu | Ph.: 977 1 5003060 | Fax: 977 1 5003131<br>
Copyright &#169 2014  Dhulikhel. All rights reserved<br>

</div>
</body>
</html>
