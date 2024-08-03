<?php


include 'productdata.php';
// $Pro_id = $_GET['Pro_id'];
if (isset($_GET['Pro_id'])) {
    $Pro_id = $_GET['Pro_id'];
$sel_ravi = "select * from product where Pro_id = $Pro_id";
$res_product = mysqli_query($con,$sel_ravi);
$fetch_data = mysqli_fetch_array($res_product);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="product_update.php">
        <tr>
            <td>
                <h3>Product update</h3>
            </td>
        </tr>
        <tr>
            <td>Product Name : <select name="Pro_id" id="">
                <option value="">please select</option>
                <?php $sel_ravi = "SELECT * FROM product ORDER BY Pro_name";
                $qry = mysqli_query($con,$sel_product);
                $fetch_data = mysqli_fetch_array($res_product);
                while($row_search_product = mysqli_fetch_array($fetch_data)){
                ?>
                <option value="<?php echo $row_search_product["Pro_id"];?>"<?php if($row_search_product["Pro_id"]==$Pro_id){echo "selected";}else{echo "";} ?>>
            <?php echo $row_search_product['Pro_name']; ?>
            </option>
            <?php } } ?>
            </select></td>
        </tr>
        <tr>
            <td>Quantity : <input type="text" name = "QOH" value = "<?php echo $QOH;?>"></td>
        </tr>
        <tr>
            <td>
            <input type="submit" name="submit" value="Submit">
            </td>
        </tr>
    </form>
</body>
</html>