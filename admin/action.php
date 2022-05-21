<?php  
//action.php
$connect = mysqli_connect('localhost', 'root', '', 'pet_smart');

$input = filter_input_array(INPUT_POST);

$name = mysqli_real_escape_string($connect, $input["name"]);
$password = mysqli_real_escape_string($connect, $input["password"]);

if($input["action"] === 'edit')
{
 $query = "
 UPDATE registration 
 SET name = '".$name."', 
 password = '".$password."' 
 WHERE email = '".$input["email"]."'
 ";

 mysqli_query($connect, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM registration 
 WHERE email = '".$input["email"]."'
 ";
 mysqli_query($connect, $query);
}

echo json_encode($input);

?>