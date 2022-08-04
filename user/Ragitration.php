<!-- <!DOCTYPE html>
<html>
<head>
  <title>Ragitration Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>
  <?php  

  include 'conn.php';
 if (isset($_POST['submit'])) {
 
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $pass=$_POST['pass'];
  $rpass=$_POST['rpass'];

  if ($pass==$rpass) {
   
   
   
 
  $emailqurey="Exec ProRegistration1 '$name','$email','$phone','$pass','$rpass'";
  $qurey = sqlsrv_query($conn, $emailqurey);
//echo($qurey);
    while ($b=sqlsrv_fetch_array($qurey)) {

   $message = $b['message'];
   // $stetas = $b['stetas'];
   phpAlert($message); 
   if ($message='inserted sussesfulli') {
     ?>
      <script>
        location.replace("login.php")
      </script>
      <?php
   } else{
      // ?>
      // <script>
      //   location.replace("Ragitration.php")
      // </script>
      // <?php
   }
 
}

 }else{
  phpAlert('password are not mach');
   
 }
  
 
   }
  ?>

<form action="" method="POST">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" id="name" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="phone"><b>phone</b></label>
    <input type="text" placeholder="Enter phone" name="phone" id="phone" required>

    <label for="pass"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" id="psw" required>

    <label for="rpass"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="rpass" id="rpass" required>
    <hr>
  
    <button type="submit" class="btn btn-default" name="submit">Submit</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>
</form>

</body>
</html> -->
<!-- <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required><br>

      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required><br>
  
      <label for="phone">phone:</label>
      <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone" required><br>

      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pass" required><br>

      <label for="pwd">Repeat Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter Repeat password" name="rpass" requiredx><br>
 -->

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

 <?php  

  include 'conn.php';
 if (isset($_POST['submit'])) {
 
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $pass=$_POST['pass'];
  $rpass=$_POST['rpass'];

  if ($pass==$rpass) {
   
   
   
 
  $emailqurey="Exec ProRegistration1 '$name','$email','$phone','$pass','$rpass'";
  $qurey = sqlsrv_query($conn, $emailqurey);
//echo($qurey);
    while ($b=sqlsrv_fetch_array($qurey)) {

   $message = $b['message'];
   // $stetas = $b['stetas'];
   phpAlert($message); 


  ?>
      <script>
        location.replace("login.php")
      </script>
      <?php
}
 }else{
 	phpAlert('password are not mach');
 }
 
   }
  ?>
  
  

<div class="container">
  <h2>Vertical (basic) form</h2>
  <form action="" method="POST">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required><br>

      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required><br>
  
      <label for="phone">phone:</label>
      <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone" required><br>

      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pass" required><br>

      <label for="pwd">Repeat Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter Repeat password" name="rpass" requiredx><br>

       
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
