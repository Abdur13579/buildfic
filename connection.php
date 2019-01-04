<?php
$host = "localhost" ;
$user ="root";
$pass = "" ;
$DB = "buildficdB" ;
$connection = mysqli_connect($host , $user , $pass) or die("connection fail") ;
mysqli_select_db($connection , $DB) or die("database not exist");
?>