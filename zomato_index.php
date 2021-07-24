<?php
	session_start();
	$conn = mysqli_connect("localhost","root","","zomato");

	if(!empty($_SESSION)){
		$is_logged_in = 1;
	}else{
		$is_logged_in = 0;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>ZOMATO</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	
</head>
<style type="text/css">
	.cover{
		width: 100%;
		height: 500px;
		position: relative;
		background-image: linear-gradient(to right, rgba(0,0,0,0.4),rgba(0,0,0,0.6)), url('https://thumbs.dreamstime.com/b/assorted-various-indian-food-dark-rustic-background-traditional-dishes-chicken-tikka-masala-palak-paneer-saffron-rice-lentil-163316040.jpg'); 
		background-size: cover;
		background-repeat: no-repeat;

	
	}
	.cover-content{
		max-width: 500px;
		margin: auto;
		padding-top: 40px;
	}

	.cover-content h1{
		margin-top: 0px;
		color: #fff;
		font-size: 80px;
		text-align: center;
	}

	.cover-btn{
		max-width: 80px;
		margin: auto;
	}

	.cover-btn button{
		background-color: red;
		color: #fff;
		width: 200px;
		height: 60px;
		border:none;
		font-size: 20px;
	}

	.main{
		max-width: 1300px;
		margin: auto;
	}
	#zom{
		display: block;
		font-weight: bolder;
		color: white;
		text-align: center;
		font-size: 60px;
		margin: 0px;
		font-family: Verdana, Geneva, Tahoma, sans-serif;

	}
	#head{
		font-size: 50px;
		color: white;
		text-align: center;
		display: inline-block;
		margin: 0px;
		font-family: Verdana, Geneva, Tahoma, sans-serif;

	}
	.search-box{
		margin-top: 10px;
		width: 40vw;
		height: 60px;
		border-radius: 5px;
		border: 20px solid white;
		border-top-left-radius: 10px;
		border-top-right-radius: 10px;
		border-bottom-left-radius: 10px;
		border-bottom-right-radius: 10px;
		text-align: center;
		margin-left: -150px;
		
	}
	.card{
		width: 30%;
		height: auto;
		background-color: #fff;
		border-radius: 10px;
		box-shadow: 5px 5px 10px #000;
		float: left;
		margin: 20px;
	}

	.card-img{
		width: 100%;
		height: 300px;
	}

	.card-text{
		margin-left: 20px;
	}

	.card button{
		width: 100%;
		height:60px;
		background-color: red;
		border:none;
		font-size: 20px;
		color: #fff;

	}
	.container{
		width: 100%;
		height: 500px;
		padding: 20px 30px;
		background: #fff;
		border:1px solid white;
		border-radius: 5px;
		display: flex;
		align-items: center;
		justify-content: center;
		flex-direction: column;
	}
	.container .star-widget input{
		display: none;
	}
	.star-widget label{
		margin-right: 30px;
		font-size: 40px;
		color: #444;
		padding: 10px;
		float: right;
		transition: all 0.2s ease;
	}
	input:not(checked) ~ label:hover,
	input:not(checked) ~ label:hover{
		color: #fd4;
	}
	input:checked ~ label{
		color: #fd4;
	}
	input#rate-5:checked ~label{
		color: #fe7;
		text-shadow: 0 0 20px #952;

	}
	form header{
		width: 100%;
		font-size: 25px;
		color: black;
		font-weight: 500;
		margin: 5px 0 20px 0;
		text-align: center;
		transition: all 0.2 ease;
	}
	#rate-1:checked ~ form header:before{
		content: "I just hate it.";
	}
	#rate-2:checked ~ form header:before{
		content: "I do not like it.";
	}
	#rate-3:checked ~ form header:before{
		content: "I like it.";
	}
	#rate-4:checked ~ form header:before{
		content: "I love it.";
	}
	#rate-5:checked ~ form header:before{
		content: "It's awesome!!!";
	}
	input:checked ~ form{
		display: block;
	}
	header{
		width: 100%;
		transition: all 0.2s ease;
	}
	.rating{
		color: #FFCC00;
		font-size: 20px;
		margin-bottom: 10px;
	}


</style>
<body>
	<?php include("head.php"); ?>
	<div class="cover">
		<div class="cover-content">
			<h1 id="zom">Zomato</h1>
			<h3 id="head">Restaurants in Kolkata</h3>
			<span class="cover-btn">
				<input align="center" type="text" name="" placeholder="Search for Dishes and Cuisines..." class="search-box mt-4 mr-0.5">
				<button class="search-btn mt-4" style="float: right;margin-right: -100px;margin-left: 2px;border: 2px solid red;border-radius: 10px;width: 200px;">Browse All</button>
			</span>
		</div>
	</div>

	<div class="main">
		<h1 class="mt-4">Top Brands In Spotlight</h1>
		<div class="row">
			<div class="card-logo mt-1">
				<img class="img" style="width: 150px;height: 150px;margin-left: 40px" src="https://b.zmtcdn.com/data/brand_creatives/logos/775f928725d1a9dd80422632de22c224_1611375845.png?output-format=webp">
				<img class="img" style="width: 150px;height: 150px;margin-left: 20px" src="https://b.zmtcdn.com/data/brand_creatives/logos/1a985408ca7ad8fd097f2c47db9c5cb6_1611252699.png?output-format=webp">
				<img class="img" style="width: 150px;height: 150px" src="https://b.zmtcdn.com/data/brand_creatives/logos/6a11fd0f30c9fd9ceaff2f5b21f61d23_1617187857.png?output-format=webp">
				<img class="img" style="width: 150px;height: 150px" src="https://b.zmtcdn.com/data/brand_creatives/logos/466f8fc74274145f3b21795c3d21816d_1589433692.png?output-format=webp">
				<img class="img" style="width: 150px;height: 150px" src="https://b.zmtcdn.com/data/brand_creatives/logos/d919948baa416a7dc8f85ab7d5db05c3_1611253622.png?output-format=webp">
				<img class="img" style="width: 150px;height: 150px" src="https://b.zmtcdn.com/data/brand_creatives/logos/9742d760cf95e9dbf9b869ca9c753f8f_1613211158.png?output-format=webp">
				<img class="img" style="width: 150px;height: 150px" src="https://b.zmtcdn.com/data/brand_creatives/logos/d5bc39842bb926fdca4d4cb2339430fd_1605099585.png?output-format=webp">
				<img class="img" style="width: 150px;height: 150px;margin-left: 20px" src="https://b.zmtcdn.com/data/brand_creatives/logos/afa6e187aa54706feb93263f37c21a4d_1624021600.png?output-format=webp">
			</div>
		</div>

			<h1 class="mt-5">All Restaurants</h1>
			<div class="row">
				<?php
				$query = "SELECT * FROM products WHERE details LIKE '%North Indian,Biriyani,Beverages%'";
				$result = mysqli_query($conn,$query);
				while($row = mysqli_fetch_assoc($result)){
					$str = explode(",", $row['bg'])[0];
					$str = substr($str, 2,strlen($str)-3);
					echo '<div class="card">
							<img src="'.$row['bg'].'" class="card-img">	
							<div class="card-text">
								<h2 class="mt-1">'.$row['name'].'</h2>
								<p class="text-muted">'.$row['details'].'</p>
								<p class="text-muted">Rs '.$row['price'].' for one. '.$row['delivery'].'</p>	
							</div>
							<span class="rating ml-3">
								<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i>
							</span>
							<a href="zom_details.php?id='.$row['product_id'].'"><button>Order Now</button></a>
							
						</div>';

				}
				?>	
				<?php
				$query = "SELECT * FROM products WHERE details LIKE '%North Indian,Chinese,Mughlai Fast Food%'";
				$result = mysqli_query($conn,$query);
				while($row = mysqli_fetch_assoc($result)){
					$str = explode(",", $row['bg'])[0];
					$str = substr($str, 2,strlen($str)-3);
					echo '<div class="card">
							<img src="'.$row['bg'].'" class="card-img">	
							<div class="card-text">
								<h2 class="mt-1">'.$row['name'].'</h2>
								<p class="text-muted">'.$row['details'].'</p>
								<p class="text-muted">Rs '.$row['price'].' for one. '.$row['delivery'].'</p>	
							</div>
							<span class="rating ml-3">
								<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
							</span>
							<a href="zom_details.php?id='.$row['product_id'].'"><button>Order Now</button></a>
							
						</div>';

				}
				?>

				<?php
				$query = "SELECT * FROM products WHERE details LIKE '%North Indian, Mughlai,Kebab ,Fast Food%'";
				$result = mysqli_query($conn,$query);
				while($row = mysqli_fetch_assoc($result)){
					$str = explode(",", $row['bg'])[0];
					$str = substr($str, 2,strlen($str)-3);
					echo '<div class="card">
							<img src="'.$row['bg'].'" class="card-img">	
							<div class="card-text">
								<h2 class="mt-1">'.$row['name'].'</h2>
								<p class="text-muted">'.$row['details'].'</p>
								<p class="text-muted">Rs '.$row['price'].' for one. '.$row['delivery'].'</p>	
							</div>
							<span class="rating ml-3">
								<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
							</span>
							<a href="zom_details.php?id='.$row['product_id'].'"><button>Order Now</button></a>
							
						</div>';

				}
				?>

				
				<?php
				$query = "SELECT * FROM products WHERE details LIKE '%Beverages ,Desserts, Ice Creams %'";
				$result = mysqli_query($conn,$query);
				while($row = mysqli_fetch_assoc($result)){
					$str = explode(",", $row['bg'])[0];
					$str = substr($str, 2,strlen($str)-3);
					echo '<div class="card">
							<img src="'.$row['bg'].'" class="card-img">	
							<div class="card-text">
								<h2 class="mt-1">'.$row['name'].'</h2>
								<p class="text-muted">'.$row['details'].'</p>
								<p class="text-muted">Rs '.$row['price'].' for one. '.$row['delivery'].'</p>	
							</div>
							<span class="rating ml-3">
								<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
							</span>
							<a href="zom_details.php?id='.$row['product_id'].'"><button>Order Now</button></a>
							
						</div>';

				}
				?>

				<?php
				$query = "SELECT * FROM products WHERE details LIKE '%Junk Food, Fast Food%'";
				$result = mysqli_query($conn,$query);
				while($row = mysqli_fetch_assoc($result)){
					$str = explode(",", $row['bg'])[0];
					$str = substr($str, 2,strlen($str)-3);
					echo '<div class="card">
							<img src="'.$row['bg'].'" class="card-img">	
							<div class="card-text">
								<h2 class="mt-1">'.$row['name'].'</h2>
								<p class="text-muted">'.$row['details'].'</p>
								<p class="text-muted">Rs '.$row['price'].' for one. '.$row['delivery'].'</p>	
							</div>
							<span class="rating ml-3">
								<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i>
							</span>
							<a href="zom_details.php?id='.$row['product_id'].'"><button>Order Now</button></a>
							
						</div>';

				}
				?>

				<?php
				$query = "SELECT * FROM products WHERE details LIKE '%Italian,spicy Pizza, Fast Food%'";
				$result = mysqli_query($conn,$query);
				while($row = mysqli_fetch_assoc($result)){
					$str = explode(",", $row['bg'])[0];
					$str = substr($str, 2,strlen($str)-3);
					echo '<div class="card">
							<img src="'.$row['bg'].'" class="card-img">	
							<div class="card-text">
								<h2 class="mt-1">'.$row['name'].'</h2>
								<p class="text-muted">'.$row['details'].'</p>
								<p class="text-muted">Rs '.$row['price'].' for one. '.$row['delivery'].'</p>	
							</div>
							<span class="rating ml-3">
								<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
							</span>
							<a href="zom_details.php?id='.$row['product_id'].'"><button>Order Now</button></a>
							
						</div>';

				}
				?>

				<?php
				$query = "SELECT * FROM products WHERE details LIKE '%Biryani ,Hyderabadi ,Fast food%'";
				$result = mysqli_query($conn,$query);
				while($row = mysqli_fetch_assoc($result)){
					$str = explode(",", $row['bg'])[0];
					$str = substr($str, 2,strlen($str)-3);
					echo '<div class="card">
							<img src="'.$row['bg'].'" class="card-img">	
							<div class="card-text">
								<h2 class="mt-1">'.$row['name'].'</h2>
								<p class="text-muted">'.$row['details'].'</p>
								<p class="text-muted">Rs '.$row['price'].' for one. '.$row['delivery'].'</p>	
							</div>
							<span class="rating ml-3">
								<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></i>
							</span>
							<a href="zom_details.php?id='.$row['product_id'].'"><button>Order Now</button></a>
							
						</div>';

				}
				?>

				<?php
				$query = "SELECT * FROM products WHERE details LIKE '%Biryani, Mughlai , Hyderabadi%'";
				$result = mysqli_query($conn,$query);
				while($row = mysqli_fetch_assoc($result)){
					$str = explode(",", $row['bg'])[0];
					$str = substr($str, 2,strlen($str)-3);
					echo '<div class="card">
							<img src="'.$row['bg'].'" class="card-img">	
							<div class="card-text">
								<h2 class="mt-1">'.$row['name'].'</h2>
								<p class="text-muted">'.$row['details'].'</p>
								<p class="text-muted">Rs '.$row['price'].' for one. '.$row['delivery'].'</p>	
							</div>
							<span class="rating ml-3">
								<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
							</span>
							<a href="zom_details.php?id='.$row['product_id'].'"><button>Order Now</button></a>
							
						</div>';

				}
				?>

				<?php
				$query = "SELECT * FROM products WHERE details LIKE '%Bengali Sweets%'";
				$result = mysqli_query($conn,$query);
				while($row = mysqli_fetch_assoc($result)){
					$str = explode(",", $row['bg'])[0];
					$str = substr($str, 2,strlen($str)-3);
					echo '<div class="card">
							<img src="'.$row['bg'].'" class="card-img">	
							<div class="card-text">
								<h2 class="mt-1">'.$row['name'].'</h2>
								<p class="text-muted">'.$row['details'].'</p>
								<p class="text-muted">Rs '.$row['price'].' for one. '.$row['delivery'].'</p>	
							</div>
							<span class="rating ml-3">
								<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
							</span>
							<a href="zom_details.php?id='.$row['product_id'].'"><button>Order Now</button></a>
							
						</div>';

				}
				?>

			</div>
		</div>
	</div>

<hr style="height: 100px;margin-top: 50px">
<div class="container">
	<img src="https://b.zmtcdn.com/data/o2_assets/a7c35e5e665dda9d67a279f4f814947f1568208663.png
">
	<div class="mt-1">
		<h1 style="margin-left: 110px;margin-top: -40px;">Rate Us <i class="fas fa-grin-beam" style="color: #fd4"></i></h1>
		<div class="star-widget mt-2">
			<form action="#" method="POST">
				<input type="radio" name="rate" id="rate-5">
				<label for="rate-5" class="far fa-grin-hearts"></label>
				<input type="radio" name="rate" id="rate-4">
				<label for="rate-4" class="far fa-smile-beam"></label>
				<input type="radio" name="rate" id="rate-3">
				<label for="rate-3" class="far fa-grin-alt"></label>
				<input type="radio" name="rate" id="rate-2">
				<label for="rate-2" class="far fa-angry"></label>
				<input type="radio" name="rate" id="rate-1">
				<label for="rate-1" class="far fa-tired"></label>

				<header class="mt-1"></header>
			</form>
		</div>
	</div>
	<p style="margin-bottom: 20px; ">Your ratings and reviews go a long way towards helping people decide where to eat.</p>
	<hr style="height: 100px;margin-top: 70px">
</div>



</body>
</html>
