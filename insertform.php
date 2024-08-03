<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .sumbitform{
            display: flex;
            flex-direction: column;
            align-items:center;
            text-align:center;
            justify-content:center;
            
        }
    </style>
</head>
<body>
    <form action="process.php" method="post">
        <div class="sumbitform" >
            <label for="username">username:</label>
            <input type="text" name="uname" value="" placeholder="enter username" required>
            <br>
            <label for="email">Email:</label>
            <input type="text" name="email" value = "" ><br>
            <label for="password">password:</label>
            <input type="password" value="" name = "password" placeholder="enter password" require>
            <label for="city">City :</label>
            <input type="text" name ="city" value = ""><br>
            <input type="submit" value="submit" name="submit">

        </div>
    </form>
</body>
</html>