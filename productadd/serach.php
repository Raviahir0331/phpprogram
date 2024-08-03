
<?php
include 'productdata.php';
$Pro_search = $_GET['Pro_search'];

?>
 <div style = "">

 <table border="1">

<tr bgcolor = "#6699FF">
 <th>Product id</th>
 <th>Product name</th>
 <th>Product price</th>
 <th>Quantity</th>
</tr>
<?php 
//  $sel_data = "select * from product";
//  $sel_data_con = mysqli_query($con,$sel_data);

 $datastore = "select * from product where pro_name = $Pro_search";
 $datares = mysqli_query($con,$datastore);

 while($row_data = mysqli_fetch_array($datares)){
?>
<tr bgcolor = "#FFCC33">
 
 <td><?php echo $row_data['Pro_id'];?></td>
 <td><?php echo $row_data['Pro_name'];?></td>
 <td><?php echo $row_data['Pro_price'];?></td>
 <td><?php echo $row_data['QOH'];?></td>
</tr>
<?php } ?>
</table>
<a href="html.php">gp back</a>
 

</div>
