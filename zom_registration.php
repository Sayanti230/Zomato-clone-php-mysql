<?php
session_start();
if(!empty($_SESSION)){
	header('Location:zomato_index.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</head>
<style type="text/css">
	.container{
		max-width: 350px;
	}
	.btn-primary{

		background-color: #FFFFFF;
	}
</style>
<body>
	<div class="container">
		<div align="center">
			<img src="https://cdn.worldvectorlogo.com/logos/zomato-2.svg" style="width: 100px;height: 50px">
		</div>

		<div class="card p-3">
			<h3>Create Account</h3>
			<?php
				if(!empty($_GET)){
					if($_GET['error'] == 1){
						echo '<p style="color: red">Email already exists</p>';
					}else{
						echo '<p style="color: red">Some error occured.Try again</p>';
					}
					
				}

			?>
			<form action="zomreg_validation.php" method="POST">
				<label>Name</label>
				<input type="text" name="name" class="form-control"><br>
				<label>Email</label>
				<input type="email" name="email" class="form-control"><br>
				<label>Password</label>
				<input type="password" name="password" class="form-control"><br>
				<input type="submit" class="btn btn-danger btn-block text-white mt-4" value="Create Account">
			</form>
			<small class="mt-2"><input type="checkbox" name="" required="">&nbspI agree to Zomato's Terms of Service, Privacy Policy and Content Policies</small>
		</div>
		<div align="center">
			
			<button class="btn btn-secondary btn-block mt-2"><img src="https://blog.hubspot.com/hubfs/image8-2.jpg" style="width: 20px;height: 20px"> Continue with Google</button>
			<small style="text-align: center">Already have an account?<a href="zom_login.php">Sign-In </a></small>

		</div>
		
		
	</div>


</body>
</html>