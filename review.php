<?php
	session_start();
	$conn = mysqli_connect("localhost","root","","zomato");

	if(!empty($_SESSION)){
		$is_logged_in = 1;
	}else{
		$is_logged_in = 0;
	}
?>
<?php include("head.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Review</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="crossorigin="anonymous"></script>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
	
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="crossorigin="anonymous"></script>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
	
</head>
<style type="text/css">
	*{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
	}
	html,body{
		display: grid;
		float: center;
		align-self: center;
		text-align: center;
		background-color: white;
	}
	.container .card input{
		display: none;
	}
	.card label{
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

	form .textarea{
		overflow: hidden;
	}
	form .textarea textarea{
		outline: none;
		color: black;
		border: 1px solid #333;
		background: #fff;
		padding: 10px;
		font-size: 17px;
		resize: none;

	}
	form .btn{
		height: 50px;
		width: 100%;
		margin: 15px 0;
	}
	form .btn button{
		height: 50px;
		width: 80%;
		border:1px solid #444;
		outline: none;
		background: red;
		color: white;
		font-size: 20px;
		font-weight: 500;
		text-transform: uppercase;
		cursor: pointer;
	}
	form .btn button:hover{
		background: red;
	}

</style>
<body>
	<h1 style="margin-left: 10px;margin-top: 20px;">Reviews</h1>
	<?php
	include "db.php";
		$user_id = $_SESSION['user_id'];
		$query = "SELECT * FROM review WHERE user_id = $user_id";
		$result = mysqli_query($conn,$query);
		echo "<p>";
		while($row = mysqli_fetch_assoc($result)){
			echo '<input type="radio" name="x" class="mr-3"><span>
					'.$row['comments'].' 
					';
			echo done;
						
		}
		echo "</p>";
	?>
	<div class="container">
	    <div class="row">
	        <div class="card" style="margin-left: 30px;margin-top: 20px;width: 90%;height: 350px;">
	            <form action="#" method="Post">
	            	<input type="radio" name="rate" id="rate-5">
					<label for="rate-5" class="fas fa-star" style="margin-right: 350px;"></label>
					<input type="radio" name="rate" id="rate-4">
					<label for="rate-4" class="fas fa-star"></label>
					<input type="radio" name="rate" id="rate-3">
					<label for="rate-3" class="fas fa-star"></label>
					<input type="radio" name="rate" id="rate-2">
					<label for="rate-2" class="fas fa-star"></label>
					<input type="radio" name="rate" id="rate-1">
					<label for="rate-1" class="fas fa-star"></label>
					<div class="textarea" style="margin-top: 80px;">
						<textarea rows="6" cols="80"></textarea><br>
					</div>
					 <div class="btn">
						<button id=review-btn type="submit">Post</button>
					</div>
	            </form>
	        </div>
    </div>
</div>


</body>
</html>
<script type="text/javascript">
	$('#review-btn').click(function(){
		var selected = $('input[name="x"]:checked').val();
		console.log(selected);
	})
</script>