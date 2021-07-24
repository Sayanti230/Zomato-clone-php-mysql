<?php
session_start();

if(empty($_SESSION)){
	header('Location:login_form.php');
}else{
	$is_logged_in = 1;
}
?>

<?php include("head.php"); ?>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container mt-5">
		<div class="row mt-5">
			<div class="col-12">
				<img style="display: block;margin: auto;width: 200px;height: 200px" src="https://static.toiimg.com/thumb/msid-81923053,width-1200,height-900,resizemode-4/.jpg">
				<h1 class="text-md-center">Order Placed successfully</h1>
				<h3 class="text-md-center">Your food will reach you within 30 mins.</h3>
				<small><p>Amidst the current lockdown situation in India, ensuring delivery of safe, hygienic food to our customers is paramount for us. To ensure this, we have launched "Contactless Delivery." Customers can opt to allow the delivery partner to leave the package outside their home, ensuring no human-to-human interaction and hence lowering risk of any transmission.</p></small>
				<a href="orders.php" class="btn btn-danger btn-lg" style="display: block;margin: auto;">Go to your Orders</a>
			</div>
		</div>
	</div>
</body>
</html>
