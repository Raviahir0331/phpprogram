<?php 
 include 'database.php';
 if(isset($_POST['submit'])){
    $name=$_POST['uname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $city = $_POST['city'];

 $sql= "insert into student (username,email,password,city) values('$name','$email','$password','$city')";
if(mysqli_query($con,$sql)){
    echo "<script>alert('new reacord set succesfully')</script>";

}
else{
    echo "error:".mysqli_error($con);
}
}
?>