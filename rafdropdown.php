 

<!DOCTYPE html>
<html lang="en">
<head>
  <title>drop dwon </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<form action="" method="POST">
  <label for="cars">Choose a car:</label>
  <select name="d" id="cars">
    <option value="1">Volvo</option>
    <option value="2">Saab</option>
    <option value="3">Opel</option>
    <option value="3">Audi</option>
  </select>
  <br><br>
  <input type="submit" value="Submit" name="submit">
</form>
</body>
</html>
<?php
include 'raf_conn.php';

if (isset($_POST['submit'])) {
  $dro=$_POST['d'];
  
$sql = "EXEC rafdd $dro";
$result = sqlsrv_query($conn, $sql);
if ($result) {
 echo "nice";
}else
{
  echo "bad";
}

}
  ?>

<!--   include 'raf_conn.php';
 

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
 

 
?> -->