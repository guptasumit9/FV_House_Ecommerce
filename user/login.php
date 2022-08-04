  <?php
 session_start();
  
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>login form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}
.body{
	height: 700px;
	width: 600px;
	position: absolute;
left: 50%;
top: 70%;
transform: translate(-50%, -50%);
 
padding: 10px;

}
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<h2 style="text-align: center;">Login Form</h2>
<div  class="  body"> 
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
  <div class="imgcontainer">
    <img src="fv_admin/fv_img/aalu.jpg" alt="Avatar" class="avatar">

  </div>

  <div class="container">
    <label for="psw"><b>email</b></label>
    <input type="text" placeholder="Enter Password" name="email" required>

    <label for="uname"><b>password</b></label>
    <input type="password" placeholder="Enter password" name="pass" required>

        
    <button type="submit" class="btn btn-default" name="Submit">Submit</button>
    
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <a href="Ragitration.php"> <button type="button" class="cancelbtn">New acount create</button></a>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
</div>
</body>
</html>
<?php
include 'conn.php';
if (isset($_POST['Submit'])) {
  $email=$_POST['email'];
  $pass=$_POST['pass'];


  $data="EXEC LoginValidation '$email','$pass'";
   
  $query=sqlsrv_query($conn,$data); 
  

while ($b=sqlsrv_fetch_array($query)) {
   
   $message = $b['message'];
     
    error_reporting(0);
  
    

   if ($message=='login sussesfulli') {
$_SESSION['username']=$b['Name'];
      phpAlert($message);
      ?>
      <script>
        location.replace("/fv/index.php")
      </script>
      <?php
   }else{
    echo"bad coder";
   }
   // $stetas = $b['stetas'];
   
 }

}
 
?>
 



<!-- 
 <?php
 session_start();
  
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>login page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
   
  <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pass" required>
    </div>
     
    <button type="submit" class="btn btn-default" name="Submit">Submit</button>
  </form>
</div>

</body>
</html>
<?php
include 'conn.php';
if (isset($_POST['Submit'])) {
	$email=$_POST['email'];
	$pass=$_POST['pass'];


	$data="EXEC LoginValidation '$email','$pass'";
	 
	$query=sqlsrv_query($conn,$data); 
  

while ($b=sqlsrv_fetch_array($query)) {
   
 	 $message = $b['message'];
     
    error_reporting(0);
  
    

   if ($message=='login sussesfulli') {
$_SESSION['username']=$b['Name'];
      phpAlert($message);
      ?>
      <script>
        location.replace("/fv/index.php")
      </script>
      <?php
   }else{
    echo"bad coder";
   }
   // $stetas = $b['stetas'];
   
 }

}
 
?>
 

 -->