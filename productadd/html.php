<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Product_query.php" method="post">
        <table>
            <!-- <tr>
                <td><label for="Pro_id">Product_id</label></td>
                <td><input type="text" name="Pro_id"></td>
            </tr> -->
            <tr>
                <td><label for="Pro_id">Product_id</label></td>
                <td><input type="number" name="Pro_id" ></td>
            </tr>
          
            <tr>
                <td><label for="Pro_name">Product_name</label></td>
                <td><input type="text" name="Pro_name"></td>
            </tr>
            <tr>
                <td><label for="Pro_price">Product_price</label></td>
                <td><input type="number" name="Pro_price" ></td>
            </tr>
            <tr>
                <td><label for="QOH">Quality</label></td>
                <td><input type="number" name="QOH"></td>

            </tr>
            <tr>
                <td><input type="submit" value="submit" name ="submit"></td>
                <td><input type="reset" value="reset" name ="reset"></td>

            </tr>
        </table>
    </form>
</body>
</html>