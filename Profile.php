<?php
    session_start();
    $conn = mysqli_connect("localhost","root","","zomato");

    if(!empty($_SESSION)){
        $is_logged_in = 1;
    }else{
        $is_logged_in = 0;
    }

    $user_id = $_SESSION['user_id'];

    $query = "SELECT * FROM users WHERE user_id = $user_id";
    $result = mysqli_query($conn,$query);
   $result = mysqli_fetch_assoc($result);
?>
<?php include("head.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</head>
<style type="text/css">
    .container{
        width: 100%;
        height: 350px;
        position: relative;
        background-size: cover;
        background-repeat: no-repeat;
        margin-top: 0px;
        background-image: linear-gradient(to right, rgba(0,0,0,0.4),rgba(0,0,0,0.6)), url('https://6ballygungeplace.in/wp-content/uploads/2020/01/Bengali-Food-Etiquette-.png');
    }

.picture-container{
    position: relative;
    cursor: pointer;
    text-align: center;
}
.picture{
    width: 206px;
    height: 206px;
    background-color: #999999;
    border: 4px solid #CCCCCC;
    color: #FFFFFF;
    border-radius: 50%;
    margin: 0px auto;
    overflow: hidden;
    transition: all 0.2s;
    -webkit-transition: all 0.2s;
    margin-left: 40px;

}
.picture:hover{
    border-color: #2ca8ff;
}
.content.ct-wizard-green .picture:hover{
    border-color: #05ae0e;
}
.content.ct-wizard-blue .picture:hover{
    border-color: #3472f7;
}
.content.ct-wizard-orange .picture:hover{
    border-color: #ff9500;
}
.content.ct-wizard-red .picture:hover{
    border-color: #ff3b30;
}
.picture input[type="file"] {
    cursor: pointer;
    display: block;
    height: 350px;
    left: 0;
    opacity: 0 !important;
    position: absolute;
    top: 0;
    width: 100%;
}

.picture-src{
    width: 100%;

    
}
/*Profile Pic End*/
.vertical-ln {
    border-left: 1px solid white;
    height: 31px;
    position:relative;
    left: 50%;
    margin-left: 335px !important; 
    float: center;
    top: 61%;
    
}


.vertical {
    border-left: 1px solid white;
    height: 30px;
    position:relative;
    left: 50%;
    margin-left: 230px !important; 
    float: center;
    top: 70%;    
}


.vertical-line {
    border-left: 1px solid grey;
    height: 600px;
    position:relative;
    left: 50%;
    margin-left: -250px !important; 
    float: left;
}


</style>
<script type="text/javascript">
	$(document).ready(function(){
// Prepare the preview for profile picture
    $("#wizard-picture").change(function(){
        readURL(this);
    });
});
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
        }
        reader.readAsDataURL(input.files[0]);
    }
}
	
</script>
<body>
    
	<div class="container">
        <button class="btn btn-danger btn-lg" style="float: right;margin-top: 50px"><i class="far fa-edit"></i> Edit Profile</button>
        <h3 style="color: white;float: right;margin-top: 145px;margin-right: 600px"><?php echo $result['name']; ?></h3>
        <h5 style="color: white;float: right;margin-top: 65px;margin-right: 330px">Reviews(0)</h5>
        <h5 style="color: white;float: right;margin-top: 65px;margin-right: -200px">Photos(0)</h5>
        <h5 style="color: white;float: right;margin-top: 65px;margin-right: -330px">Followers(0)</h5>
        <div class="vertical">
        </div>
        <div class="vertical-ln">
        </div>
         <div class="row">
            <div class="picture-container">
                <div class="picture" style="margin-top: 10px;">
                    
                    <img style="float: center" src="https://lh3.googleusercontent.com/LfmMVU71g-HKXTCP_QWlDOemmWg4Dn1rJjxeEsZKMNaQprgunDTtEuzmcwUBgupKQVTuP0vczT9bH32ywaF7h68mF-osUSBAeM6MxyhvJhG6HKZMTYjgEv3WkWCfLB7czfODidNQPdja99HMb4qhCY1uFS8X0OQOVGeuhdHy8ln7eyr-6MnkCcy64wl6S_S6ep9j7aJIIopZ9wxk7Iqm-gFjmBtg6KJVkBD0IA6BnS-XlIVpbqL5LYi62elCrbDgiaD6Oe8uluucbYeL1i9kgr4c1b_NBSNe6zFwj7vrju4Zdbax-GPHmiuirf2h86eKdRl7A5h8PXGrCDNIYMID-J7_KuHKqaM-I7W5yI00QDpG9x5q5xOQMgCy1bbu3St1paqt9KHrvNS_SCx-QJgBTOIWW6T0DHVlvV_9YF5UZpN7aV5a79xvN1Gdrc7spvSs82v6gta8AJHCgzNSWQw5QUR8EN_-cTPF6S-vifLa2KtRdRAV7q-CQvhMrbBCaEYY73bQcPZFd9XE7HIbHXwXYA=s200-no" class="picture-src"  id="wizardPicturePreview" title="" >
                    <input type="file" id="wizard-picture" class=""><p style="margin-right: -200px">name</p>
                </div>
                
             </div>
 
        </div>
    
    </div>
    <hr>
    <div class = "vertical-line">
        <h1 style="margin-left: -300px;margin-top: 15px">ACTIVITIES</h1>
        <hr>
        <div class="button" style="margin-left: -300px;margin-top: 40px">
            <a href="orders.php"><button class="btn-danger btn-lg">ORDERS</button></a>        
        </div>
        <div class="button" style="margin-left: -300px;margin-top: 40px">
            <button class="btn-danger btn-lg">PHOTOS</button>        
        </div>
        <div class="button" style="margin-left: -300px;margin-top: 40px">
            <a href="bookmark.php"><button class="btn-danger btn-lg">BOOKMARKS</button></a>       
        </div>
        <div class="button" style="margin-left: -300px;margin-top: 40px">
            <a href="cart.php"><button class="btn-danger btn-lg">CART</button></a>        
        </div>
        
        <div class="button" style="margin-left: -300px;margin-top: 40px">
            <a href="review.php"><button class="btn-danger btn-lg">ADD REVIEWS</button></a> 
            <hr>       
        </div>
    </div>

    <div class="col-12">
        <h1 style="margin-left: 600px;margin-top: 30px;">Reviews</h1>
        <img src="https://b.zmtcdn.com/webFrontend/691ad4ad27a5804a3033977d45390c811584432410.png" style="margin-left: 540px;width: auto;height: 300px;margin-top: 50px;">
        <p class="text-muted" style="margin-left: 580px;font-size: 30px">Nothing here yet</p>
    </div>
    <hr style="float: center;margin-left: 450px">
    <div>
        <h1 style="margin-left: 630px;margin-top: 30px;">Photos</h1>
        <img src="https://b.zmtcdn.com/webFrontend/1a33af2333871e0c1222a3ee21ea697f1581070577.png" style="margin-left: 510px;width: auto;height: 300px;margin-top: 50px;">
        <p class="text-muted" style="margin-left: 580px;font-size: 30px;margin-top: 10px">Nothing here yet</p>
    </div>

    <hr>
    <div>
        <h1 style="margin-left: 630px;margin-top: 30px;">Followers</h1>
        <span style="float: right;margin-right: 500px">
            <button class="btn btn-danger text-muted" style="background-color: white;border: 1px solid grey;width: auto;height: 35px">Following(0)</button>
            <button class="btn btn-danger" style="margin-left: 20px">Followers(0)</button>  
        </span>
        <img src="https://b.zmtcdn.com/webFrontend/c33e5cd0b755a03f9b2f374b1b8271a91581004801.png" style="margin-left: 570px;width: auto;height: 300px;margin-top: 50px;">
        <p class="text-muted" style="margin-left: 620px;font-size: 30px;margin-top: 10px">Nothing here yet</p>
    </div>
    <hr>
    <div>
        <h1 style="margin-left: 610px;margin-top: 30px;">Blog Posts</h1>
        <img src="https://b.zmtcdn.com/webFrontend/691ad4ad27a5804a3033977d45390c811584432410.png" style="margin-left: 550px;width: auto;height: 300px;margin-top: 50px;">
        <p class="text-muted" style="margin-left: 580px;font-size: 30px;margin-top: 10px">Nothing here yet</p>
    </div>
    <hr>


   
</body>
</html>







