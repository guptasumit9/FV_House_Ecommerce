 <?php
session_start();
// echo $_SESSION['Username'];
//echo $_SESSION['id'];
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


    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: Yellow;">
  <div class="container-fluid"> 

    <a class="navbar-brand text-black " href="#" style="margin-left: 10px;"><b> FV_House </b></a>
     
    <button class="navbar-toggler text-black" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="padding-left: 50px;">
    <div style="color:black; padding-right: 10px; width: 200px; text-overflow: ellipsis; white-space: nowrap; overflow: hidden;">
    <?php
    if (!isset($_SESSION['Username'])) {
    ?>
    <h5><i class="fas fa-user" style="margin-right: 2px;"></i> plzz login</h5>
    <?php
  }else{
    ?>
    <h5><i class="fas fa-user" style="margin-right: 2px;"></i><?php echo $_SESSION['Username']; ?></h5>
    <?php
  }
    ?> 
</div>
          <?php
    include 'conn.php';
    $ProSelecter=mysqli_query($con,"select * from product ORDER BY Name");
    // SELECT * FROM Customers ORDER BY Country;
 
    // $fetch=mysqli_fetch_array($ProSelecter);
    while ($fetch=mysqli_fetch_array($ProSelecter)) {
      
    

    ?>  
     
 
        <!-- text-overflow: ellipsis; white-space: nowrap; overflow: hidden; -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
         <input list="product" id="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style=" height: auto; width:550px; border: 2px solid green; border-radius: 10px; ">
         <datalist id="product">
        <option value="<?php echo $fetch['Name']; ?>"></option>
        <?php
      }

        ?>
         
    </datalist>
        
         
      </ul>
      </div>
      <form>
          
        <button type="button" class="btn btn-outline-success active">Home</button>
        <a href="">
        <button type="button" class="btn btn-outline-success"><i class="fas fa-cart-arrow-down"></i> Cart</button></a>
        <?php
        if (!isset($_SESSION['Username'])) {
?>
<a href="login.php"> 
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
  
</nav>
<br>
 
<!-- <hr style="border: 2px solid white; margin: 0px;"> -->
 
<!-- slider -->
 <!-- Carousel -->
  
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators text-center" >


    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../fv_admin/fv_img/slider.jpg"   alt="Chicago" class="d-block" style="width:100%; height: 400px;  ">
      <div class="carousel-caption"> 
         
      </div>
    </div>
    <div class="carousel-item">
      <img src="../fv_admin/fv_img/slider_2.jpg"   alt="Chicago" class="d-block" style="width:100%; height: 400px;" >
      <div class="carousel-caption">
        
      </div> 
    </div>
    <div class="carousel-item">
      <img src="../fv_admin/fv_img/slider_1.jpg"  alt="New York" class="d-block" style="width:100%; height: 400px;">
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
      <a href="1fruit.php"> 
       <img class="card-img-top"   src="../fv_admin/fv_img/fruit.jpg" alt="image">
        
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
      <a href="2vegetables.php"> 
       <img class="card-img-top"   src="../fv_admin/fv_img/vegetables3.jpg" alt="image"  >
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
      <a href="3leaves_vegetable.php"> 
       <img class="card-img-top"   src="../fv_admin/fv_img/leaves vegetable.webp" alt="image" >
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
       <h6>A1 Quality leaves vegetable</h6>
    </div>

    <!-- 4 -->
    <div class="col-md-3"  >
      <a href="4chinese_vege.php"> 
       <img class="card-img-top"   src="../fv_admin/fv_img/4.jpg" alt="image" >
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
      <a href="5Season.php"> 
       <img class="card-img-top"   src="../fv_admin/fv_img/15.jpg" alt="image" >
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
      <a href="6juice.php"> 
       <img class="card-img-top"   src="../fv_admin/fv_img/6.jpg" alt="image" >
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
      <a href="7fruit_gift_basket.php"> 
       <img class="card-img-top"   src="../fv_admin/fv_img/7.webp" alt="image" >
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
      <a href="8Hotel_used_FV.php"> 
       <img class="card-img-top"   src="../fv_admin/fv_img/8.jpg" alt="image" >
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
<?php
include 'futer.php';
?>
     <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/annyang/2.6.0/annyang.min.js"></script>
<script>
if (annyang) {
  // Let's define our first command. First the text we expect, and then the function it should call
  var commands = {
    'search *tag': function(variable){
      let search = document.getElementById('search');
      search.value = variable;
    }
    // 'confirm password *tag': function(variable) {
    //   let cpwd = document.getElementById("cpwd");
    //   cpwd.value = variable;
    // },
  };

  // Add our commands to annyang
  annyang.addCommands(commands);

  // Start listening. You can call this here, or attach this call to an event, button, etc.
  annyang.start();
}
</script>
  </body>
</html>
