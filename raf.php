 
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
   
  <form action="", method="POST">
    <div class="form-group">
      <label for="name">name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="age">age:</label>
      <input type="text" class="form-control" id="age" placeholder="Enter age" name="age">
    </div>
     
    <button type="submit" class="btn btn-default" name="submit">Submit</button>
  </form>
</div>

</body>
</html>
 

  <?php

//  $serverName= "LAPTOP-DV1Q0UAV\SQLEXPRESS";  
// $connectionInfo=array("Database"=>"gupta");
// $conn=sqlsrv_connect($serverName, $connectionInfo);
// if( $conn){
//      echo "Connection established.<br />";
//  }
// else{
//      echo "Connection could not be established.<br";
//     die(print_r( sqlsrv_errors (), true));
// }

 
include 'raf_conn.php';
 

if (isset($_POST['submit'])) {
	$name=$_POST['name'];
	$age=$_POST['age'];
$sql = "EXEC proinsertdatapractice4 $name,$age";
$result = sqlsrv_query($conn, $sql);

if (!$result) {
    echo 'Your code is fail.';
}
else {
    echo "nice";
}

}
 

 
?>
 <!-- $fileext=explode('.',$filename);
$filecheck=strtolower(end($fileext));

$fileextstored=array('png','jpg','jpeg');

if(in_array($filecheck,$fileextstored)){
    $destinationfile='jpj/'.$filename;
    move_uploaded_file($filetmp,$destinationfile); -->