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
function phpAlert($message) {
      
    // Display the alert box 
    echo "<script>alert('$message');</script>";
}
include 'conn.php';
if (isset($_POST['Submit'])) {
  $email=$_POST['email'];
  $pass=$_POST['pass'];
   
$Loginquery="select * from registration where Email='$email' AND Password='$pass'";
$Lquery=mysqli_query($con,$Loginquery);
$Loginnquery = mysqli_num_rows($Lquery);
if ($Loginnquery>0) {
  $fetch=mysqli_fetch_assoc($Lquery);
  $_SESSION['Username']=$fetch['Name'];
  // echo $_SESSION['Username'];
  ?>
      <script>
        location.replace("index.php")
      </script>
      <?php
}else{
  // echo "Invalid Email and password";
  phpAlert ("Invalid Email and password");
 }
}
 
?>
 


 