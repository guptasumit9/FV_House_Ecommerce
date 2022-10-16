 
 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
     <?php 
include 'link.php';
 ?>

    
    <title>leaves_V page</title>
  </head>
  <body>

<!-- ---------------------------------nev bar--------------------------- -->
   <?php 
include 'nev.php';
 ?>
<!-- ---------------------nev bar end------------------------- -->
 



<style>
	.mcart{
			margin-top: 20px;

		
	}
	.cart{
		margin-top: 220px;
		 
 
	}
	.cart img{
		height: 200px;
		width: 100%;
		margin-top: 10px;

	}
	.text p{
		width: 60%;
  height: 40%;

	}
	.text button{
		 margin-top: -55px;
  float: right;
  width: 40%;
  padding-left: 0px;
  border-radius: 10px;

	}

	 
</style>


 <div class="mcart container">
  <div class="row">
<?php

include 'conn.php';

$Select="select * from product where Page=3 ORDER BY Name";
$qurey = mysqli_query($con, $Select);
$Row= mysqli_num_rows($qurey);

while ($b=mysqli_fetch_array($qurey)) {
   ?>
 
 



 
    <div class="cart col-sm-3">
       <img src="../fv_admin/IMG/<?php echo $b['Img_file']; ?>" alt="sumit"><!--  <?php echo $b['Img_file']; ?> -->
       <!--  <img src="fv_admin/fv_img/Onion.jpg">   -->
       <h4> <?php echo $b['Name']; ?>
        <span style="font-size: 15px;"> (<?php echo $b['Descriptoin']; ?>)</span>
      </h4>
       <h6><?php echo $b['Quantity']; ?></h6>
       <div class="text">
       	   <p style="font-size: 20px;"><b><?php echo $b['Price']; ?></b>
          <span style="text-decoration: line-through;padding-left: 2px;color: #E44236;font-size: 15px ;"><?php echo $b['M_Price']; ?>₹</span></p>
       	<a href="card.php?id=<?php echo $b['id']; ?>"><button type="button" class="btn btn-success"   >Add to Cart</button></a>
       </div>
    </div>
     
<?php  
}

?>

  </div>
</div>


 





<!-- ----------------------------------futar----------------------------------------- -->
<?php 
include 'futer.php';
 ?>
 <!-- -------------------------futar end---------------------------- -->
 </body>
</html>