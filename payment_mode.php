<?php
session_start();

if(empty($_SESSION)){
	header('Location:zom_login.php');
}else{
	$is_logged_in = 1;
}
?>

<?php include("head.php"); ?>

<div class="container mt-5">
	<h1>Select Payment Mode</h1>
	<div class="row mt-5">
		<div class="col-6">
			<form action="payment_confirmation.php" method="POST">
				<input type="radio" name="x" value="Credit Card"> Credit Card <i class="fab fa-cc-visa"></i> <i class="fab fa-cc-amazon-pay"></i> <i class="fab fa-cc-mastercard"></i><br><br><hr>
				<input type="radio" name="x" value="Debit Card"> Debit Card <i class="fas fa-credit-card"></i> <i class="far fa-credit-card"></i><br><br><hr>
				<input type="radio" name="x" value="UPI"> UPI <img src="https://logodix.com/logo/1763660.jpg" style="height: 40px"><br><br><hr>
				<input type="radio" name="x" value="NETBanking"> NET Banking <img src="https://image.shutterstock.com/image-vector/mobile-banking-icon-260nw-660554194.jpg" style="height: 40px"><br><br><hr>
				<input type="radio" name="x" value="NETBanking"> Cash on Delivery <img src="https://cdn1.iconfinder.com/data/icons/marketplace-and-shipping/64/COD_cash_on_delivery_shipping_payment_delivery-512.png" style="height: 40px"><br><br><hr>
				<input type="hidden" name="order_id" value="<?php echo $_GET['order_id']; ?>">
				<input type="submit" class="btn btn-danger btn-lg" style="float: right" name="" value="Pay Now">
			</form>
		</div>
	</div>
</div>
