<?php
session_start();
if (!isset($_SESSION['username'])) {
  $a="you need to login ";
   echo "<script>alert('$a');</script>";
  } 
  
?> 
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
     <?php 
include 'link.php';
 ?>

    
    <title>Home page</title>
  </head>
  <body>


    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:  Yellow;">
  <div class="container-fluid"> 

    <a class="navbar-brand text-black " href="#"><b>  Navbar </b></a>
     
    <button class="navbar-toggler text-black" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="padding-left: 50px;">
    <div style="color:black; padding-right: 10px; width: 200px; text-overflow: ellipsis; white-space: nowrap; overflow: hidden;">
    <?php
    if (!isset($_SESSION['username'])) {
    ?>
    <h5><i class="fas fa-user" style="margin-right: 2px;"></i> plzz login</h5>
    <?php
  }else{
    ?>
    <h5><i class="fas fa-user" style="margin-right: 2px;"></i><?php echo $_SESSION['username']; ?></h5>
    <?php
  }
    ?> 
       
    </div>
        <!-- text-overflow: ellipsis; white-space: nowrap; overflow: hidden; -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
         <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style=" height: auto; width:650px; border: 2px solid green; border-radius: 10px; ">
        
         
      </ul>
      <form>
         
        <button type="button" class="btn btn-outline-success active">Home</button>
        <a href="">
        <button type="button" class="btn btn-outline-success"><i class="fas fa-cart-arrow-down"></i> Cart</button></a>
        <?php
        if (!isset($_SESSION['username'])) {
?>
<a href="user/Ragitration.php"> 
<button type="button" class="btn btn-outline-success">Login</button> 
</a>
<?php
}else{
   ?>
   <a href="logout.php"> 
<button type="button" class="btn btn-outline-success">Logout</button> 
</a>
   <?php
}
         ?>
        <!-- <a href="user/Ragitration.php"> -->
         
      </form>
       
  
    </div>
  </div>

</nav>
<br>
 
<!-- <hr style="border: 2px solid white; margin: 0px;"> -->
 
<!-- slider -->
 <!-- Carousel -->
  
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">


    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="slider_1.jpg"   alt="Chicago" class="d-block" style="width:100%;  ">
      <div class="carousel-caption"> 
         
      </div>
    </div>
    <div class="carousel-item">
      <img src="slider_1.jpg"   alt="Chicago" class="d-block" style="width:100%">
      <div class="carousel-caption">
        
      </div> 
    </div>
    <div class="carousel-item">
      <img src="slider_1.jpg"  alt="New York" class="d-block" style="width:100%">
      <div class="carousel-caption">
        
         
      </div>  
    </div>
  </div>
  
   
   
</div>

 

<!-- slider end -->

 <style>
   #categori{
    background-color:Yellow;
    width: 250px;
    height: 40px;
    margin-top: 10px;
    margin-bottom: 15px;
     
    border: 1px solid green;
    border-radius: 0px 40px 40px 0px / 0px 40px 40px 0px ;
    padding-left: 20px;
    
   }
    
 </style>
 <div id="categori">
      <h4>Category</h4>
 </div>
 
<!-- 1 st row -->
<style>
  .type{
    background-color: white;

  }
  .type img{
    height:250px;
    width: 90%;


  }
  .type img:hover{
    transform: scale(1.1);
    z-index: 2;

  }

  
</style>




 <div class="container-fluid">
  <div class="type"> 
   
  <div class="row">
    <!-- silider img 1 -->
    <div class="col-md-3" >
      <a href="Fruits1.php"> 
       <img class="card-img-top"   src="img v/t1a.jpg" alt="image">
       </a>
       <div> 
        <h5 style="width: 40%; height: 50%;">Fruits</h5>
        <div style="margin-top: -35px; float: right; width: 60%; padding-left: 20px; color: red;">
        <i class="fas fa-star"></i> 
        <i class="fas fa-star"></i> 
        <i class="fas fa-star"></i> 
        <i class="fas fa-star"></i> 
        <i class="fas fa-star-half-alt"></i>
        </div>
       </div>
       <h6>A1 Quality Fruits</h6>
    </div>

    <!-- 2 -->
    <div class="col-md-3">
      <a href="vegetables2.php"> 
       <img class="card-img-top"   src="img v/t2a.jpg" alt="image"  >
     </a>
       <div> 
        <h5 style="width: 40%; height: 50%;">vegetables</h5>
        <div style="margin-top: -35px; float: right; width: 60%; padding-left: 20px; color: red;">
        <i class="fas fa-star"></i> 
        <i class="fas fa-star"></i> 
        <i class="fas fa-star"></i> 
        <i class="fas fa-star"></i> 
        <i class="fas fa-star-half-alt"></i>
        </div>

       </div>
       <h6>img v/t3.jpg</h6>
        
    </div>
    <!-- 3 -->
     

    <div class="col-md-3"  >
      <a href="leaves vegetable3.php"> 
       <img class="card-img-top"   src="img v/t5a.jpg" alt="image" >
       </a>
       <div> 
        <h5 style="width: 40%; height: 50%;">leaves vegetable  </h5>
        <div style="margin-top: -35px; float: right; width: 60%; padding-left: 20px; color: red;">
        <i class="fas fa-star"></i> 
        <i class="fas fa-star"></i> 
        <i class="fas fa-star"></i> 
        <i class="fas fa-star"></i> 
        <i class="fas fa-star-half-alt"></i>
        </div>

       </div>
       <h6>A1 Quality chinese Vegetable</h6>
    </div>

    <!-- 4 -->
    <div class="col-md-3"  >
      <a href="chinese4.php"> 
       <img class="card-img-top"   src="img v/t4a.jpg" alt="image" >
       </a>
       <div> 
        <h5 style="width: 40%; height: 50%;">chinese  </h5>
        <div style="margin-top: -35px; float: right; width: 60%; padding-left: 20px; color: red;">
        <i class="fas fa-star"></i> 
        <i class="fas fa-star"></i> 
        <i class="fas fa-star"></i> 
        <i class="fas fa-star"></i> 
        <i class="fas fa-star-half-alt"></i>
        </div>

       </div>
       <h6>A1 Quality chinese Vegetable</h6>
    </div>

    <!-- 5 -->
    <div class="col-md-3" >
      <a href="Season5.php"> 
       <img class="card-img-top"   src="img v/t3.jpg" alt="image" >
       </a>
       <div> 
        <h5 style="width: 40%; height: 50%;">Season</h5>
        <div style="margin-top: -35px; float: right; width: 60%; padding-left: 20px; color: red;">
        <i class="fas fa-star"></i> 
        <i class="fas fa-star"></i> 
        <i class="fas fa-star"></i> 
        <i class="fas fa-star"></i> 
        <i class="fas fa-star-half-alt"></i>
        </div>

       </div>
       <h6>Summer Season Fruits.</h6>
    </div>

    <!-- 6 -->
    <div class="col-md-3"  >
      <a href="Juice6.php"> 
       <img class="card-img-top"   src="img v/t6.jpg" alt="image" >
       </a>
       <div> 
        <h5 style="width: 40%; height: 50%;">Juice  </h5>
        <div style="margin-top: -35px; float: right; width: 60%; padding-left: 20px; color: red;">
        <i class="fas fa-star"></i> 
        <i class="fas fa-star"></i> 
        <i class="fas fa-star"></i> 
        <i class="fas fa-star"></i> 
        <i class="fas fa-star-half-alt"></i>
        </div>

       </div>
       <h6>Fresh All Juice</h6>
    </div>


    <!-- 7 -->
    <div class="col-md-3"  >
      <a href="Fruit Gift Baskets7.php"> 
       <img class="card-img-top"   src="img v/t7c.jpg" alt="image" >
       </a>
       <div> 
        <h5 style="width: 40%; height: 50%;">Fruit Gift Baskets</h5>
        <div style="margin-top: -35px; float: right; width: 60%; padding-left: 20px; color: red;">
        <i class="fas fa-star"></i> 
        <i class="fas fa-star"></i> 
        <i class="fas fa-star"></i> 
        <i class="fas fa-star"></i> 
        <i class="fas fa-star-half-alt"></i>
        </div>

       </div>
       <h6>Fresh Fruit Gift Baskets</h6>
    </div>

    <!-- 8 -->
    <div class="col-md-3"  >
      <a href="Hotel used vegetables8.php"> 
       <img class="card-img-top"   src="img v/t8.jpg" alt="image" >
       </a>
       <div> 
        <h5 style="width: 40%; height: 50%;">Hotel used vegetables  </h5>
        <div style="margin-top: -35px; float: right; width: 60%; padding-left: 20px; color: red;">
        <i class="fas fa-star"></i> 
        <i class="fas fa-star"></i> 
        <i class="fas fa-star"></i> 
        <i class="fas fa-star"></i> 
        <i class="fas fa-star-half-alt"></i>
        </div>

       </div>
       <h6>lov Cost Hotel used vegetables  </h6>
    </div>
    
  </div>
  </div>
</div>

<!-- -----------------website-features-------------- -->
<hr style="border: 1px solid green;">
<style>
      .website-features
{
  margin: 30px 0;
}
.website-features img
{
  width: 20%;
  height: 40%;
}
.feature-text
{
  margin-top: 10px;
  float: right;
  width: 80%;
  padding-left: 20px;
}
.feature-box
{
  padding-top: 20px;
}
    </style>

    <section class="website-features">
<div class="container">
<div class="row">
<div class="col-md-3 feature-box">
<img src="img v/fotar2.jpg">
<div class="feature-text">
<p><b>10 minute grocery now</b>
Get your order delivered from dark stores near you.</p> 
</div>  
</div>
<div class="col-md-3 feature-box">
<img src="img v/futar3.jpg">
<div class="feature-text">
<p><b>Free Delivery of products </b> above 300 of shoping</p> 
</div>  
</div>
<div class="col-md-3 feature-box">
<img src="img v/futar6.jpg">
<div class="feature-text">
<p><b>Customer Service</b> Support On WhatsApp/Telephone</p>  
</div>  
</div>
<div class="col-md-3 feature-box">
<img src="img v/futar8.jpg">
<div class="feature-text">
<p><b>Secure Payments</b>100% Refund Within 3 days</p>  
</div>  
</div>
</div>  
</div>
</section> 


<!-- payment paytan -->
    <style>
      .payment
{
  margin: 30px 0;
}
.payment img{
  width: 90%;x
}
</style>
<hr style="border: 1px solid green;">

   <section class="payment">

<div class="container">
  <h4>Payment partanar</h4>
<div class="row">
<div class="col-md-1 ">
<img src="img v/p3.png">
</div>  
 
<div class="col-md-1 ">
<img src="img v/p8.png">
</div>

<div class="col-md-1 ">
<img src="img v/p9.png">
</div>

<div class="col-md-1 ">
<img src="img v/p5.png">
</div>

<div class="col-md-1 ">
<img src="img v/p6.png">
</div>

<div class="col-md-1 ">
<img src="img v/p7.png">
</div>

<div class="col-md-1 ">
<img src="img v/p10.jpg">
</div>

<div class="col-md-1 ">
<img src="img v/p11.png" style="height: 50px;">
</div>

<div class="col-md-2">
<h4><b>Net Banking</b></h4>
</div>
 
<div class="col-md-2">
<h4><b>Cash</b></h4>
</div>
 
</div>  
</div>
</section>

<!-- foter -->
<style>
  .futar {
  margin:0px;
  padding: 0px; 
  text-align: center;
  background-color: black;
  color: white;
  height: auto;
  width: 100%;
  /*justify-content: center;
  align-content: center;*/
}
</style>


<div class="futar"> 
<div class="container-fluid ">
  <div class="row">
    <div class="col-sm-4" lign-content: center;>
      <h3>Contact US</h3>
      <p><i class="fas fa-map-marker-alt"> Mumbai</i></p>
      <p><i class="fas fa-phone-alt"> 9082381952 </i></p>
      <p><i class="fas fa-envelope"> sumitgupta6896@gmail.com </i></p>
         
    </div>
    <div class="col-sm-4">
      <h3>Quick links</h3>
      <p><i class="fas fa-home"></i>Home </p>
      <p><i class="fab fa-product-hunt"></i> Products </p>
      <p><i class="fas fa-registered"> Login </i></p>
    </div>
    <div class="col-sm-4">
      <h3>Social Media</h3>
      <p><i class="fab fa-facebook-f"> Facebook </i></p>
       <p><i class="fab fa-instagram-square"> Instagram </i> </p>
      <p><i class="fab fa-telegram-plane"> telegram </i></p>
       
       
    </div>
    <hr style="border: 1px solid white;">
  <center> 
    <p >@ digen by sumit gupta  </p></center>

    <hr>
  </div>
</div>
</div>
 

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
 