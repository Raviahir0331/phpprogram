<?php
 include 'productdata.php';
    $Pro_id = $_POST['Pro_id'];
    $Pro_name= $_POST['Pro_name'];
    $Pro_price = $_POST['Pro_price'];
    $QOH = $_POST['QOH'];
 if( !empty($Pro_id)&&!empty($Pro_name) && !empty($Pro_price)&& !empty($QOH)){
    $ins = "insert into product (Pro_id,Pro_name,Pro_price,QOH) values('$Pro_id','$Pro_name','$Pro_price','$QOH')";
    $res = mysqli_query($con,$ins);
   // $delete = "DELETE FROM product where Pro_id ='0'";
   // $delete_res = mysqli_query($con,$delete);

    if($res){
        // echo "<script> alert('New record has been set succsessfully')</script>";
        header("location:productrecord.php");
    }
 }
 else{
    header("location: html.php");
 }
 if(!empty($_POST["Pro_search"])){
   $Pro_search = $_POST['Pro_search'];
   $seq = "select * from product where Pro_name = $Pro_search";
   $res_search = mysqli_query($con,$seq);
 }
 else{
  $sel_qry = "select * from product";
  $res = mysqli_query($con, $sel_qry);
 }
// if($delete_res){
//    echo "<script> alert('record has been deleted')</script>";
// }

?>