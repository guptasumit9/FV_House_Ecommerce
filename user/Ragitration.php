 <?php
 include 'conn.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ragitration Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

 
<div class="container">
  <h2>Vertical (basic) form</h2>
  <form action="" method="POST">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="Name" required><br>

      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="Email" required><br>
  
      <label for="phone">phone:</label>
      <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="Phone" required><br>

      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="Pass" required><br>

      <label for="pwd">Repeat Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter Repeat password" name="RPass" requiredx><br>

       
    </div>
   
    <button type="submit" class="btn btn-default" name="submit">Submit</button>
  </form>
</div>
<div>
  <a href="login.php"> 
<button type="button" class="btn btn-outline-success">Login</button> 
</a>
</div>
</body>
</html>
<?php
function phpAlert($message) {
      
    // Display the alert box 
    echo "<script>alert('$message');</script>";
}
 
if (isset($_POST['submit'])) {
  $Name=$_POST['Name'];
  $Email=$_POST['Email'];
  $Phone=$_POST['Phone'];
  $Password=$_POST['Pass'];
  // $HPassword=password_hash($Password,PASSWORD_BCRYPT);
  $RPassword=$_POST['RPass'];
  // $HRPassword=password_hash($RPassword,PASSWORD_BCRYPT);

  $Emailquery="select * from registration where Email='$Email '";
  $Equery=mysqli_query($con,$Emailquery);
  $Emailquery = mysqli_num_rows($Equery);
  if ($Emailquery>0) {
    phpAlert ("email are alredy exists");
  }else{
    if ($Password===$RPassword) {
      $query="insert into registration (Name,Email,Number,Password,RPASSWORD)values('$Name','$Email','$Phone','$Password','$RPassword')";
  $Res=mysqli_query($con,$query);
  if ($Res) {
    phpAlert('Account Has Been Create');
    ?>
    <script>
 
        location.replace("login.php")
      </script>
      <?php
  }else{
    echo "data not insertrd";
  }
    }else{
       phpAlert('password are not mach');
    }
  }
      
  
   
    
  
}
?>
