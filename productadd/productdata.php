<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "ceramic";
$con = mysqli_connect($host,$username,$password,$database);
if(!$con){
    echo "connection established";
    die("error:" .mysqli_error($con));


}
?>