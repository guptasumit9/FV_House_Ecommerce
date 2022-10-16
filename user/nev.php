 <?php
// session_start();
// echo $_SESSION['Username'];
?>
 <?php
session_start();
// echo $_SESSION['Username'];
?>
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

    <a class="navbar-brand text-black " href="#"><b>FV_House</b></a>
     
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
        <!-- text-overflow: ellipsis; white-space: nowrap; overflow: hidden; -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
         <input class="form-control me-2" id="search" type="search" placeholder="Search" aria-label="Search" style=" height: auto; width:650px; border: 2px solid green; border-radius: 10px; ">
        
         
      </ul>
<script src="//cdnjs.cloudflare.com/ajax/libs/annyang/2.6.0/annyang.min.js"></script>
<script>
if (annyang) {
  // Let's define our first command. First the text we expect, and then the function it should call
  var commands = {
    'Name *tag': function(variable) {
      let search=document.getElementById(search);
      search.value=variable;
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
      <form>
        <a href="index.php">  
        <button type="button" class="btn btn-outline-success active">Home</button></a>
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
  </div>

</nav>

 
</body>
</html>