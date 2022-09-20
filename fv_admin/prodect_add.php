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
Product description" name="description" required>
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
      <label for="file">Prodect Img:</label>
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
  $Name=$_POST['name'];
  $Description=$_POST['description'];
  $Quantity=$_POST['quantity'];
  $Price=$_POST['price'];
  $M_Price=$_POST['m_price'];
  $File=$_FILES['file'];
  $Page=$_POST['page'];

  // print_r($Name);
  

$Filename=$File['name'];
$Fileerror=$File['error'];
$Filetmp=$File['tmp_name'];
// print_r($Filename);

 
$Fileext=explode('.',$Filename);//string divided by two part
$Filecheck=strtolower(end($Fileext));//this line string capital to lower convarted and give last values
 // print_r($filecheck);
$Fileextstored=array('png','jpg','jpeg');
 
 if(in_array($Filecheck,$Fileextstored)){
    $Destinationfile='IMG/'.$Filename;
    move_uploaded_file($Filetmp,$Destinationfile);


$ProdectInsert = "insert into  product (Name,Descriptoin,Quantity,Price,M_Price,Img_file,Page)values('$Name','$Description','$Quantity','$Price','$M_Price','$Destinationfile','$Page')" ;
$result =mysqli_query($con,$ProdectInsert);
 
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
    location.replace("Insert_Update_Delete_Prodect.php")
     
  </script>
  <?php
}

  


}
 

}
// error_reporting(0);
header("conn.php");

  ?>