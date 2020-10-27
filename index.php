<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">

  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="style2.css">
</head>



<body>    

<div class="topnav">
    <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to North Face Lite</b></h1>
  


    <a class="#home" href="index.php" role="button">Home</a>
    <a class="#cart" href="cart.html" role="button">Cart</a>
    <a class="#catalog" href="catalog.html" role="button">Catalog</a>
    <a class="#about" href="about.html " role="button">About Us</a>
    <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
    <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
       


</div>


 


<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="https://images.ctfassets.net/3j1dmaup7ego/2mIMcgWgf2dUNEmSedUJCU/14549007e1b7aefbc4cf87d81f2a7f39/DSC04812-2-SNB.jpg?h=540" class="d-block w-100" alt="snowboarding">
        <div class="carousel-caption d-none d-md-block">
          <h4>HIGH QUALITY APPAREL AND GEAR</h4>
          <p>Nobody can match our prices and quality</p>
        </div>
      </div>
    
      </div>
</div>








<section class="items">
  <div class="container">
  <div class="row">
  <div class="col-md-4">
    <img src="https://m.media-amazon.com/images/I/51OPLM8NE4L._AC_UL320_ML3_.jpg" alt="">
    <h2>Mens Jacket</h2>
  <p class="price">$49.99</p>
 
  <p><button>Add to Cart</button></p>
  </div>
 
  <div class="col-md-4">
    <img src="https://m.media-amazon.com/images/I/71JNLDHgq6L._AC_UL320_ML3_.jpg" alt="">
    <h2>Womens jacket</h2>
  <p class="price">$39.99</p>

  <p><button>Add to Cart</button></p>
  </div>
  <div class="col-md-4">
    <img src="https://m.media-amazon.com/images/I/81YCnSNRuTL._AC_UL320_ML3_.jpg" alt="">
    <h2>Mens jacket</h2>
  <p class="price">$69.99</p>
 
  <p><button>Add to Cart</button></p>
  </div>
  </div>
  </div>
  </section>




</body>



</html>