<?php
session_start();
include("db.php");

$product_id = $_GET['product_id'];
$user_id = $_SESSION['user_id'];

// insert in db
$query = "INSERT INTO bookmark VALUES (NULL,$user_id,$product_id)";

if(mysqli_query($conn,$query)){
	echo 1;
}else{
	echo 0;
}


?>