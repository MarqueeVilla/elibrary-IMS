<?php
session_start();
$_SESSION['logged']=0;

header("location:index.php");

?>