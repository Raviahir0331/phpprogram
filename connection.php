<?php 
$hostname = "localhost";
$username = "root";
$password = "";
 $database = "db1";
$con = mysqli_connect($hostname,$username,$password,$database);
if(!$con){
    echo "connection not established ";
    die("error detected =" .mysqli_error($con));
}
else{
    echo "connection established";
}


?>