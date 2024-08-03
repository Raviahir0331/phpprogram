<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_GET['username']) && isset($_GET['password'])) {
        $name = $_GET['username'];
        $pass = $_GET['password'];

        if (empty($name) || empty($pass)) {
            echo "Please enter both username and password";
        } else {
            echo "Welcome $name";
            echo "<br>Password: $pass";
        }
    } else {
        echo "Please provide both username and password";
    }
    ?>
    <a href="form_data.php"> Go back
        
    </a>
</body>
</html>