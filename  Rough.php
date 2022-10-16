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
      <input type="password" class="form-control" id="cpwd" placeholder="Enter Repeat password" name="RPass" requiredx><br>

       
    </div>
   
    <button type="submit" id="submit"  class="btn btn-default" name="submit">Submit</button>
  </form>