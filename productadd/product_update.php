<?php
 include 'productdata.php';
 echo $Pro_id = $_POST["Pro_id"];
 echo $QOH = $_POST["QOH"];
 if(!empty($QOH)){
    echo $update_query = "update product set QOH = $QOH where Pro_id = $Pro_id";
    $update_res = mysqli_query($con,$update_query);
    if($update_res){
        header("location:productrecord.php");
    }
    else{
        header("location:update_qry.php");
    }
 }

?>