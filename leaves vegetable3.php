<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
     <?php 
include 'link.php';
 ?>

    
    <title>leaves vegetable page</title>
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

$a="EXEC proselect 3";
$qurey = sqlsrv_query($conn, $a);
$row= sqlsrv_num_rows($qurey);

while ($b=sqlsrv_fetch_array($qurey)) {
   ?>
 
 



 
    <div class="cart col-sm-3">
       <img src="fv_admin/<?php echo $b['img_file']; ?>"> 
       <!--  <img src="fv_admin/fv_img/Onion.jpg">   -->
       <h4> <?php echo $b['name']; ?>
        <span style="font-size: 15px;"> (<?php echo $b['description']; ?>)</span>
      </h4>
       <h6><?php echo $b['quantity']; ?></h6>
       <div class="text">
       	   <p style="font-size: 20px;"><b><?php echo $b['price']; ?></b>
          <span style="text-decoration: line-through;padding-left: 2px;color: #E44236;font-size: 15px ;"><?php echo $b['m_price']; ?>₹</span></p>
       	<button type="button" class="btn btn-success"   >Add to Cart</button>
       </div>
    </div>
     
<?php  
}

?>

  </div>
</div>








<!-- ----------------------------------futar----------------------------------------- -->
<?php 
include 'futar.php';
 ?>
 <!-- -------------------------futar end---------------------------- -->
 </body>
</html>