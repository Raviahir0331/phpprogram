<?php 

$sername="localhost";
$username="root";
$password="";
$database="library";
$con = mysqli_connect($sername,$username,$password,$database);
if(!$con){
    die("error detected".mysqli_error($con));

}


?>