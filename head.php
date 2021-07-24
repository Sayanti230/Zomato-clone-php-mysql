<!DOCTYPE html>
<html>
<head>
	<title>ZOMATO</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="crossorigin="anonymous"></script>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
	
</head>
<body>
	<nav class="navbar bg-nav" style="background-color: #E23744;color: white">
		
		<h1 class="navbar-brand" style="color: white;"><b>Zomato</b></h1>
		<?php
			if($is_logged_in){
					echo '<div class="dropdown">
							  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							    '."Hi ".$_SESSION['name'].'
							  </button>
							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							  	<a class="dropdown-item" href="Profile.php">Profile <i class="fas fa-user-circle"></i></a>
							    <a class="dropdown-item" href="bookmark.php">bookmarks <i class="fas fa-bookmark"></i></a>
							    <a class="dropdown-item" href="cart.php">Cart <i class="fas fa-shopping-cart"></i></a>
							    <a class="dropdown-item" href="orders.php">Orders <i class="fas fa-utensils"></i></a>
							    <a class="dropdown-item" href="review.php">Reviews <i class="fas fa-user-edit"></i></a>
							    <a class="dropdown-item" href="zomato_index.php">Home <i class="fas fa-house-user"></i></a>
							    <a class="dropdown-item" href="zom_logout.php">Logout <i class="fas fa-sign-out-alt"></i></a>
							  </div>
							</div>';

			}else{
				echo '<small><a href="zom_registration.php"><h5 class="text-white" style="float: right;margin-left: 750px">Sign-up</h5></a></small>
					 <small><a href="zom_login.php"><h5 class="text-white mr-1" style="float: right">Login</h5></a></small>
					 <small><a href="zomato_index.php"><h5 class="text-white">Home</h5></a></small>
					 <small><h5 style="float: right">Add Restaurants</h5></small>';
			}
		?>

	</nav>

</body>
</html>