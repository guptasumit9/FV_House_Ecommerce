<?php
include 'link.php';
include 'nev.php';
include 'conn.php';
$UserID = $_SESSION['Username']; 
$grandtotal = 0;
function phpAlertAndRedirect($message,$PageName) {
      
    // Display the alert box 
      echo "<script>
    alert('$message');
    window.location.href='$PageName';
    </script>"; 
  }
  ?>
  <table class="table">
    <tr style="border : 1px ;">
      <th  >Update</th>
      <th >Delete</th>
      <th  >name</th>
      <th  >Image</th>
      <th  >Price</th>
      <th   >quantiy</th>
      <th >Total</th>
    </tr>
</table>
  <?php
  $run = mysqli_query($con,"SELECT * FROM tbl_cartsdatails WHERE UserID ='{$UserID}'");
 // echo "SELECT * FROM tbl_cartsdatails WHERE UserID ='{$UserID}'";
  if(mysqli_num_rows($run) >0){
    while ($row = mysqli_fetch_array($run)){
    $pid  = $row['ProductID'];
    $id = $row['Cid'];
    $pqty = $row['Quantity'];
    $runpid = mysqli_query($con,"SELECT * FROM product WHERE id='{$pid}'") or die("error");
    if(mysqli_num_rows($runpid) >0){
    while ($rowpid = mysqli_fetch_array($runpid)){
      $name = $rowpid['Name'];
      
      $price = $rowpid['Price'];
      $image = $rowpid['Img_file'];
      
      $quantity = 100;
     
      ?>
      <form action="" method="post" enctype="multipart/form-data">

<table class="table">
      <?php
      //echo $price." ".$pqty;
      $bill = ((int)$price * (int)$pqty);
      @$grandtotal  += (int)$price*(int)$pqty;
      $sno = 1;
      
      echo"<tr>";
      echo"<td ><p class='btn btn-warning'>Update<input id='btn' type='submit' name='update[]' value='".$id."' ></input></p> </td>";
      echo"<td id='th'><p class='btn btn-danger'>Delete<input id='btn' type='submit' name='delete[]' value='".$id."' ></input></p> </td>";
      echo"<td id='th'>".$name."</td>";
      echo"<td id='th1'><img id='cartimage'style='
    height: 50px;' src='../fv_admin/IMG/".$image."'></td>";
      echo"<td id='th1'>".$price."₹</td>";
      echo"<input  type='hidden' name='id[]' value='".$id."'></input>";
      echo"<td id='th1'><input style='width : 40px;' type='number' min = 1 max = $quantity name='qty[]' value='".$pqty."'></input>/kg</td>";
      echo"<td id='th1'>".$bill."</td>";
      
      ?>
</table>
</form>
      <?php
    } 
  }
}
}else{
    ?>
<div style="margin: 50px 50px 50px 50px;">
    <center><h3>your cart is empty</h3></center>
  </div>
<?php 
  }
if (isset($_POST['qty'])) {
$qty = $_POST['qty'];
  foreach ($qty as $q) {}}
  if(isset($_POST['update']) ){
  $update = $_POST['update'];
  if (isset($_POST['qty'])) {
    $qty = $_POST['qty'];
  foreach ($update as $id) {
      $query = "UPDATE tbl_cartsdatails set Quantity = '$q'  WHERE Cid= '$id '" or  die(mysqli_error($con));
     // echo "$query";
      $fire =  mysqli_query($con,$query)or  die(mysqli_error($con));
phpAlertAndRedirect("product Updated Successfully","ViewCart.php");
    }
    }
    # code...
  }
if(isset($_POST['delete']) ){
  echo "inside delete";
    $delte = $_POST['delete'];
    foreach ($delte as $id) {
    $query = "DELETE FROM `tbl_cartsdatails` WHERE Cid= '$id'" or die("syntax error");
      $fire =  mysqli_query($con,$query);
      phpAlertAndRedirect("product deleted Successfully","ViewCart.php");
    }
}
 ?>