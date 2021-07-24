<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</head>
<style type="text/css">
	.container{
		max-width: 350px;
	}
	
</style>
<body>

	<div class="container">
		<div align="center">
			<img src="https://cdn.worldvectorlogo.com/logos/zomato-2.svg" style="width: 100px;height: 50px">
		</div>

		<div class="card p-3">
			<h3>Log In</h3>
			<?php
				if(!empty($_GET)){
					if($_GET['error'] == 1){
						echo '<p style="color: red">Email does not exists</p>';
					}else{
						echo '<p style="color: red">Some error occured.Try again</p>';
					}
					
				}
			?>
			<form action="zom_validation.php" method="POST">
				<label>Name</label>
				<input type="text" name="name" class="form-control"><br>
				<label>Email</label>
				<input type="email" name="email" class="form-control"><br>
				<label>Password</label>
				<input type="password" name="password" class="form-control"><br>
				<input type="submit" class="btn btn-danger btn-block text-white mt-4" value="Login">

			</form>
			
			<small class="mt-2">New to Zomato? <a href="zom_registration.php">Sign in</a></small>
		</div>
		
		
	</div>

</body>
</html>