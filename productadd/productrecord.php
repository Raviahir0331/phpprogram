<?php
 include 'productdata.php';
 $slq = "select * from product";
 $connectquery = mysqli_query($con,$slq)
// $Pro_id =$_GET["Pro_id"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><a href="html.php">Add New record</a></h3>
    <form action="serach.php" method="post">
<table>
    <tr>
        <td><select name = "Pro_search">
            <option value="">please select</option>
            <?php 
            $sl_qry = "select * from product ";
            $sl_response = mysqli_query($con,$sl_qry);
            
            while($sl_search = mysqli_fetch_array($sl_response)
            ){  ?>
 <option value="<?php echo $sl_search ['Pro_id'];?>"><?php  echo $sl_search ['Pro_name']?></option>
          
          <?php } ?>
        </select></td>
        <td>
            <input type="submit" name = "submit" value = "search">
        </td>
    </tr>
</table></form>
<br>
<br>
<br>
    <table border="1">

        <tr bgcolor = "#6699FF">
            <th>Product id</th>
            <th>Product name</th>
            <th>Product price</th>
            <th>Quantity</th>
        </tr>
        <?php 
        
        while($row = mysqli_fetch_array($connectquery)){

        
        ?>
        <tr bgcolor = "#FFCC33">
            
            <td><?php echo $row['Pro_id'];?></td>
            <td><?php echo $row['Pro_name'];?></td>
            <td><?php echo $row['Pro_price'];?></td>
            <td><?php echo $row['QOH'];?></td>
        </tr>
        <?php } ?>
    </table>
   
</body>
</html>