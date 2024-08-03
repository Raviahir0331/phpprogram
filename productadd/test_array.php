<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php 

// $student = array('ravi','dangar',1213);
// print_r($student);
// $self = array("name"=>"ravi","age"=> 21,"height"=>5.6);
// // foreach($self as  $key){
// //     print_r( "<br>" .$key);
// // }
// foreach ($self as $key => $value) {
//     echo "<br> $key = " .$value;
// }
// echo  "<br>".$self['name'];


function string_cat(){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $flname = $fname.$lname."<br>";
    echo $flname;
}
function str_cat($firstname,$lastname){
    $fullname = $firstname.$lastname;

}
 string_cat();
 str_cat($_POST['fname'],$_POST['lname']);

// echo "php version = ".phpversion();
// // phpinfo();
// phpinfo(INFO_MODULES);

// Sample array of 5 numbers
$numbers = array(5, 2, 8, 1, 3,11);

// Sort the array in ascending order
sort($numbers);

echo "Ascending order:";
foreach ($numbers as $number) {
    echo " $number";
}
echo "<br>";

// Sort the array in descending order
rsort($numbers);

echo "Descending order:";
foreach ($numbers as $number) {
    echo " $number";
}


// Sample array
$array = [1, 2, 3, 2, 4, 2, 5, 2, 6,2,1,1];
// Value to count occurrences
$valueToCount = 1;

// Count the occurrences of the specified value in the array
$count = 0;
foreach ($array as $element) {
    if ($element === $valueToCount) {
        $count++;
    }
}

echo "The value $valueToCount appears $count times in the array.";


?>


<!-- <form action="" method="post">
<table>
    <tr>
        <td>
            firstname: <input type="text" name ="fname">
        </td>
    </tr>
    <tr>
        <td>lastname : <input type="text " name = "lname"></td>
    </tr>
    <tr>
        <td>
            <input type="submit" name = "submit" value = "submit">
        </td>
    </tr>
</table>
</form> -->
</body>
</html>