<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Online store</title>
  
  <link rel="stylesheet" type="text/css" href="Home.css">


  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
  <style> 
    * {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
  background-color:rgb(11, 11, 24);
}

.topnav a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  background-color: #2196F3;

}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;

}

.topnav .search-container button:hover {
  background: #ccc;

}

@media screen and (max-width: 600px) {
.topnav .search-container {
    float: none;
  }
  
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;

  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  

  }
}

.username,.password{
  background-color:rgb(11, 11, 24);
}

.login{
  background-color:rgb(11, 11, 24);
}
form{
  background-color:rgb(11, 11, 24);
  text-align: center;
}
h1{
  background-color:orange;
  text-align: center;
  font-family: "URW Chancery L", serif
}
.leg{
  color:white;
}


h2{
    font-family: "Times New Roman", Times, serif;
}


div > img{
    border-bottom:3px solid orange;
}

.items{
    margin:auto;
   text-align:center;
}



h4,p{
    color:orange;
    font-weight:bold;
}



.items button {
  border: none;
  outline: 0;
  padding: 12px;
  color: orange;
  background-color: #000;
  text-align: center;
  width: 100%;
  font-size: 18px;

  
}

.items button:hover {
    opacity: 0.7;
  }



  .container{
    display:inline;
}


/*


@media(max-width:768px){
    .btn{
        width:100%;
    }
}

*/
</style>
</head>
<body>
  
  <div class="topnav">
    <h1><b>North Face Lite</b></h1>
  
    <a class="#home" href="login.php" role="button">Login</a>
    <a class="#cart" href="cart.html" role="button">Cart</a>
    <a class="#checkout" href="checkout.html" role="button">Checkout</a>
    <a class="#catalog" href="catalog.html" role="button">Catalog</a>
    <a class="#about" href="about.html" role="button">About Us</a>

  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
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