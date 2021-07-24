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
	<h1 class="mt-5">Bookmarks</h1>
	<div class="row">
		<div class="col-8">
			<?php
			include("db.php");

			$user_id = $_SESSION['user_id'];

			$query = "SELECT * FROM bookmark b JOIN products p ON b.product_id = p.product_id WHERE b.user_id = $user_id";

			$result = mysqli_query($conn,$query);
			$counter = 0;
			while($row = mysqli_fetch_assoc($result)){
				
				$img_path = explode(",", $row['bg'])[0];
				$img_path = substr($img_path, 2,strlen($img_path)-3);

				echo '<div class="card mt-3">
					<div class="row">
						<div class="col-4">
							<img src="'.$row['bg'].'" style="width: 100%;height: 150px">
						</div>
						<div class="col-8">
							<h4 class="mt-3">'.$row['name'].'</h4>
							<h5 class="text-muted"> '.$row['details'].'</h5>
							<h5 class="text-muted"> '.$row['delivery'].'</h5>
							<h5 class="text-muted">Rs '.$row['price'].' for one</h5>
						</div>
					</div>
				</div>';
				$counter++;
			}

			if($counter == 0){
				echo '<h4>You have no bookmarked Restraunt</h4>';
			}

			?>
			
		</div>
		
	</div>
</div>


 