<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $username = $_GET['username'];
     if($username!=""){
        echo strtoupper($username);
     }else{
        echo "please enter username";
     }
?>
<a href="link_upper.php">Go Back</a>
</body>
</html>