
<?php
 if(!isset($_SESSION)){
    session_start();
}
if($_SESSION['loggged']==0)
{
header("location:../index.php");

}

?>