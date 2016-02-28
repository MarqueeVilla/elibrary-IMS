<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
session_start();
if(isset($_SESSION['userName'])){
if($_SESSION['logged']=='1'){

header('Location: adminLogin.php');
}}
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml: lang="en" lang="en">


<head><title>ELIMS::E-Library Information Management System</title>
<link rel="stylesheet" type="text/css" href="css/divs.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/myjquery.js"></script>

    <link href="css/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="js/js-image-slider.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />

</head>

<body>


<div class="body1">

<div class="menubox">

</style>
<h4 align="center">ELIMS Login</h4>
<form action="checkLogin.php" method="post">
<p align="center" class="invalid">Invalid Username or Password</p>
<input type="text" name="username" id="username1" placeholder="User Name" />
<input type="password" name="password" id="password1" placeholder="Password" />
<input type="submit"  name="submitbutton" id="loginButton" value="Login"/>

</form>


</div>
<div class="banner">
<h1>ELIMS<br></h1>

<h2>E-Library Information Management System</h2>
</div>

<ul id="menu">
    <li><a href="#">Home</a></li>
    <li>
        <a href="#">Site  </a>
        <ul>
            <li><a href="#">EDR</a></li>
            <li><a href="#">CDR</a></li>
            <li><a href="#">WDR</a></li>
            <li><a href="#">MWDR</a></li>
			<li><a href="#">FWDR</a></li>
			
			
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

</div>
<div class="footer">
HeNN(Help Nepal Network)<br>
GPO Box No.: 1794, Kathmandu | Ph.: 977 1 5003060 | Fax: 977 1 5003131<br>
Copyright &#169 2014  Dhulikhel. All rights reserved<br>

</div>

</body>