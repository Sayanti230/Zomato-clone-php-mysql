<?php
session_start();

if(empty($_SESSION)){
	header('Location:zom_login.php');
}else{
	$is_logged_in = 1;
}
?>

<?php include("head.php"); ?>

<div class="container">
	<div class="row">
		<div class="col-6">
			<h3 class="mt-5 mb-5">Your Addresses</h3>
			<form action="payment_mode.php" method="POST">
			<?php
				include "db.php";
				$user_id = $_SESSION['user_id'];
				$query = "SELECT * FROM address WHERE user_id = $user_id";
				$result = mysqli_query($conn,$query);
				while($row = mysqli_fetch_assoc($result)){
					echo '<input type="radio" name="x" class="mr-3"><span>
								'.$row['street_address'].' 
								'.$row['landmark'].'<br>
								'.$row['city'].', '.$row['state'].' 
								'.$row['pin'].'<br>
								'.$row['contact_number'].'</span>';
				}
			
			?>

			<input type="hidden" name="order_id" value="<?php echo $_GET['order_id'] ?>">
			
			</form>
			<hr>
			<a href="payment_mode.php"><button id="select-address" style="float: right" class="btn btn-danger btn-lg text-white">Select Address</button></a>

		</div>
		<div class="col-6">
			<button data-toggle="modal" data-target="#exampleModal" class="btn btn-primary btn-lg mt-5">Add new Address</button>
		</div>
	</div>
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
		    <h5 class="modal-title" id="exampleModalLabel">Add Address</h5>
		    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		      <span aria-hidden="true">&times;</span>
		    </button>
		  </div>
	      <div class="modal-body">
	        <form action="add_address.php" method="POST">
	        	<label>Street Address</label><br>
	        	<textarea name="street_address" class="form-control"></textarea><br>
	        	<label>Landmark</label><br>
	        	<textarea name="landmark" class="form-control"></textarea><br>
	        	<label>City</label><Br>
	        	<input class="form-control" type="text" name="city"><br>
	        	<label>State</label><br>
	        	<input class="form-control" type="text" name="state"><br>
	        	<label>Pincode</label><br>
	        	<input class="form-control" type="text" name="pin"><br>
	        	<label>Contact Number</label><br>
	        	<input class="form-control" type="text" name="contact"><br><br>
	        	<input type="submit" value="Add Address" class="btn-danger btn-lg text-white" name="">
	        </form>
	      </div>
	    </div>
	  </div>
	</div>
</div>
<script type="text/javascript">
	$('#select-address').click(function(){
		var selected = $('input[name="x"]:checked').val();
		console.log(selected);
	})
</script>
</body>
</html>