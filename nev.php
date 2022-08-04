<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
     <?php 
include 'link.php';
 ?>

    
    <title>Hello, world!</title>
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
      <h5><i class="fas fa-user" style="margin-right: 2px;"></i>Use sumit gupta  </h5>
    </div>
        <!-- text-overflow: ellipsis; white-space: nowrap; overflow: hidden; -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
         <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style=" height: auto; width:650px; border: 2px solid green; border-radius: 10px; ">
        
         
      </ul>
      <form>
         <a href="index.php">
        <button type="button" class="btn btn-outline-success active" >Home </button></a>
        <a href="ragistesan/ragistar.php">
        <button type="button" class="btn btn-outline-success"><i class="fas fa-cart-arrow-down"></i> Cart</button></a>
        <button type="button" class="btn btn-outline-success">Login</button>
      </form>
       
  
    </div>
  </div>

</nav>



 
</body>
</html>