<?php

/*
1. connect to the database
2. receive user input from registration_form.php
3. run sql query and add the user to our database
*/

//step1 
session_start();
$conn = mysqli_connect("localhost","root","","zomato");

// step2
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];	

// step3
$query = "INSERT INTO users VALUES (NULL,'$name','$email','$password')";

$query1 = "SELECT * FROM users WHERE email LIKE '$email'";
$result = mysqli_query($conn,$query1);

$num_rows = mysqli_num_rows($result);

if($num_rows==0){
	
	if(mysqli_query($conn,$query)){
		
		$query2 = "SELECT * FROM users WHERE email LIKE '$email'";
		$result2 = mysqli_query($conn,$query2);
		$result2_arr = mysqli_fetch_assoc($result2);
		$_SESSION['name'] = $result2_arr['name'];
		$_SESSION['user_id'] = $result2_arr['user_id'];
		
		echo "registration successfull";
		header('Location:zomato_index.php');
	

	}else{
		echo "some error occured";
		header('Location:z.php?error=0');

	}

	
}else{
	//echo "email already registered";
	header('Location:zom_registration.php?error=1');
}
/*
}else{
	header('Location:zom_login.php?error=1');	

}
*/

?>