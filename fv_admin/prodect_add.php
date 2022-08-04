<!--   die(mysqli_error($con)) -->
  <!DOCTYPE html>
<html lang="en">
<head>
  <title>add prodect</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<h2 style="align-content">Add item </h2>
<div class="container">
   <!-- 1 -->
  <form action="", method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="name">name:</label>
      <input type="text"   class="form-control" id="name" placeholder="Enter name" name="name" required>
    </div>

 <!-- 2 -->

    <div class="form-group">
      <label for="description">Product description  *:</label>
      <input type="text" class="form-control" id="file" placeholder="
choose file" name="description" required>
    </div>

     <!-- 3 -->
     
    <div class="form-group">
      <label for="quantity">Quantity:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Quantity" name="quantity" required>
    </div>

    
     <!-- 4 -->
 
    <div class="form-group">
      <label for="price">Net price:</label>
      <input type="text" class="form-control" id="price" placeholder="Net price" name="price" required>
    </div>

     <!-- 5 -->
     
    <div class="form-group">
      <label for="m_price">Repeat market price:</label>
      <input type="text" class="form-control" id="m_price" placeholder="Enter market price" name="m_price" required>
    </div>


     <!-- 6 -->
     <div class="form-group">
      <label for="file">profile pic:</label>
      <input type="file" class="form-control" id="file" placeholder="
choose file" name="file" required>
    </div>
                
<br>
     <!-- 7 -->
     <label for="cars" required>Choose a page:</label>
  <select name="page" id="cars" required >
    <option value="">Choose a page</option>
    <option value="1">Fruits</option>
    <option value="2">vegetables</option>
    <option value="3">leaves vegetable</option>
    <option value="4">chinese</option>
    <option value="5">Season</option>
    <option value="6">Juice</option>
    <option value="7">Fruit Gift Baskets</option>
    <option value="8">Hotel used vegetables</option>
  </select>
  <br>
    <button type="submit" class="btn btn-default" name="submit">Submit</button>
  </form>
</div>
 
</body>
</html>
 

  <?php 
include 'conn.php';


if (isset($_POST['submit'])) {
  $name=$_POST['name'];
  $description=$_POST['description'];
  $quantity=$_POST['quantity'];
  $price=$_POST['price'];
  $m_price=$_POST['m_price'];
  $file=$_FILES['file'];
  $page=$_POST['page'];

  // print_r($name);
  

$filename=$file['name'];
$fileerror=$file['error'];
$filetmp=$file['tmp_name'];

 
$fileext=explode('.',$filename);
$filecheck=strtolower(end($fileext));
 // print_r($filecheck);
$fileextstored=array('png','jpg','jpeg');
 
if(in_array($filecheck,$fileextstored)){
    $destinationfile='fv_img/'.$filename;
    move_uploaded_file($filetmp,$destinationfile);

$sql = "EXEC proinsertprodect '$name','$description','$quantity',$price,$m_price,'$destinationfile',$page";
$result = sqlsrv_query($conn, $sql);

if (!$result) {
    // echo 'Your code is fail.';
  ?>
  <script>
    alert("your prodect are not insert");
  </script>
  <?php
}
else {
    ?>
  <script>
    alert("your prodect are insert");
  </script>
  <?php
}

  


}
 

}
error_reporting(0);

  ?>