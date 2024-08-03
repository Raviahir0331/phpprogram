<?php
 include ("connection.php");
 $db_table = "CREATE TABLE Product 
  (Prod_id int(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  Pro_name varchar(100) NOT NULL,
  Pro_Price float(7,2)NOT NULL,
  QOH int(5)NOT NULL)";
  $qry = mysqli_query($con,$db_table);
  if($qry){
    echo "TABLE CREATE SUCCESSFULLY";
  }
  else{
    die("error detected : ".mysqli_error($qry));
  }

?>