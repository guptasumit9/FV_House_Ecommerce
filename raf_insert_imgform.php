 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
   
  <form action="", method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="name">name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="file">profile pic:</label>
      <input type="file" class="form-control" id="file" placeholder="
choose file" name="file">
    </div>
     
    <button type="submit" class="btn btn-default" name="submit">Submit</button>
  </form>
</div>

</body>
</html>
 
 <?php
 include 'raf_conn.php';
 

if (isset($_POST['submit'])) {
  $name=$_POST['name'];
  $file=$_FILES['file'];

  print_r($name);
  

$filename=$file['name'];
$fileerror=$file['error'];
$filetmp=$file['tmp_name'];

 
$fileext=explode('.',$filename);
$filecheck=strtolower(end($fileext));
 print_r($filecheck);
$fileextstored=array('png','jpg','jpeg');
 
if(in_array($filecheck,$fileextstored)){
    $destinationfile='jpj/'.$filename;
    move_uploaded_file($filetmp,$destinationfile);

$sql = "EXEC uu '$name','$destinationfile'";
$result = sqlsrv_query($conn, $sql);

if (!$result) {
    echo 'Your code is fail.';
}
else {
    echo "nice";
}

  


}
 

}
 
$sql = "EXEC fuu";
$result = sqlsrv_query($conn, $sql);

 
  while($row = sqlsrv_fetch_array($result)) {
  ?>

<p><?php echo $row['Name'];  ?></p>
<img src="<?php echo $row['destinationfile']; ?>
">


 



  <?php
     
  }
 
 
 
 
?>
 
 