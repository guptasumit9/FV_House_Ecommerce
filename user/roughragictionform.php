 

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
  <h2>Vertical (basic) form</h2>
  <form action="#" method="POST">
    <div class="form-group">
       

      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required><br>

      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required><br>
  
      <label for="age">age:</label>
      <input type="text" class="form-control" id="age" placeholder="Enter age" name="age" required><br>

       

       
    </div>
   
    <button type="submit" class="btn btn-default" name="submit">Submit</button>
  </form>
</div>

</body>
</html>
  
 <?php  

  include 'conn.php';
 if (isset($_POST['submit'])) {
 
  $email=$_POST['email'];
  $name=$_POST['name'];
  $age=$_POST['age'];
   
 
  $emailqurey="Exec rra3 '$email','$name','$age'";
  $qurey = sqlsrv_query($conn, $emailqurey);
//echo($qurey);
    while ($b=sqlsrv_fetch_array($qurey)) {

   $message = $b['message'];
   // $stetas = $b['stetas'];
   phpAlert($message); 


  // echo($message);

 }

 

 
   }
  ?>
  