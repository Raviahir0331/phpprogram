<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method ="post" >
        username: <input type="text" name = "username" required><br><br>
        Password: <input type="password" name = "password" required><br>
        confirm password: <input type="password" name ="confirmpassword" required><br><br>
        <input type="submit" name="submit" value="Submit">
        <input type="reset" name="reset" value="reset">

    </form>
</body>
</html>-->

<?php 



// echo rand(10,100);
// $ravi = array("hello","hi","how are you","have a nice day");
// echo join(" ",$ravi);

#$about = "hi my name is ravi dangar i am student of navgujarat college of computer application";
// $arr = explode(" ",$about);
// print_r($arr);
// $itrim = ltrim($about);
// $rtrim = rtrim($about);
//  echo $itrim ;
//  echo  $rtrim;

// $time = time();

// echo "today is date";
// echo date('d-m-y');
// echo "<br> Today date ";
// echo date('h-i-s-a'); 

echo "you have entered following username and password <br>";
print_r( $_POST["username"]);
print_r( $_POST["password"]);
echo $_POST["confirmpassword"] 
echo $_POST["password"];
//  echo("hello world");
//  $Price = 1213;
//  echo("the price is : $Price");

//  $no = 90;
//  function printno(){
//     $no=100;
//     echo "local number =" .$no;
//  }
//  printno();
//  echo "outside number =" .$no;



// $emp = array("name"=>"ram","destination"=>"accountant","name"=>"ram");
// $k = array_unique($emp);
// print_r($k);

// $ravi = array(1,10,7,8,3,2);
// rsort($ravi);
// print_r($ravi);
// $student = array("Name"=>"Ravi Dangar","Age"=>"21","heigh"=>"5.5","City"=>"ahmedabad");
// // print_r($student);
// foreach ($student as $key => $value) {
//     # code...
//     echo "<br>[$value]=";
// }

// echo "<br>".$student["Name"]."<br>";
// echo $student["Age"]."<br>";
// echo $student["City"]."<br>";



?>