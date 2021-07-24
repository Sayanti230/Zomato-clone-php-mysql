<?php
session_start();

$conn = mysqli_connect("localhost","root","","zomato");

$email = $_POST['email'];
$password = $_POST['password'];
$query = "SELECT * FROM users WHERE email LIKE '$email' AND password LIKE '$password'";

$result = mysqli_query($conn,$query);
$result_arr = mysqli_fetch_assoc($result);
print_r($result);
$num_rows = mysqli_num_rows($result);

//if($num_rows == 1){
	//echo "Welcome";
	//header('Location:zomato_index.php');
//}else{
	//echo "Incorrect email/password";
//}
 

 if($num_rows == 1){
 	$_SESSION['name'] = $result_arr['name']; 
 	$_SESSION['user_id'] = $result_arr['user_id']; 
 	header('Location:zomato_index.php');

 }else{
 	header('Location:zom_login.php?error=1');
 }


?>