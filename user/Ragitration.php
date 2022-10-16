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
</div>
<div>
  <a href="login.php"> 
<button type="button" id="login" class="btn btn-outline-success">Login</button> 
</a>
</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/annyang/2.6.0/annyang.min.js"></script>
<script>
if (annyang) {
  
  var commands = {
    'write name *tag': function(variable){
      let name = document.getElementById('name');
      name.value = variable;
    },
      'email *tag': function(variable) {
      let email = document.getElementById("email");
      email.value = variable;
    },
    'number *tag': function(variable) {
      let phone = document.getElementById("phone");
      phone.value = variable;
    },
    'password *tag': function(variable) {
      let password = document.getElementById("pwd");
      password.value = variable;
    },
    'confirm password *tag': function(variable) {
      let cpwd = document.getElementById("cpwd");
      cpwd.value = variable;
    },


    // 'submit form':function(){
    //   let form = document.getElementById("submit");
    //   let formareainner = document.querySelector('.container');
    // }
    'submit form': function() {
          document.getElementById('submit').click();
        }
  };

  // Add our commands to annyang
  annyang.addCommands(commands);

  // Start listening. You can call this here, or attach this call to an event, button, etc.
  annyang.start();
}
</script>
</body>
</html>
<?php
function phpAlert($message) {
      
    // Display the alert box 
    echo "<script>alert('$message');</script>";
}

function ISEmailAlreadyExist($Email,$con){
 $Emailquery="select * from registration where Email='$Email'";
  $Equery=mysqli_query($con,$Emailquery);
  $EmailCount = mysqli_num_rows($Equery);
  return $EmailCount;
}

 
if (isset($_POST['submit'])) {
  $Name=$_POST['Name'];
  $Email=$_POST['Email'];
  $Phone=$_POST['Phone'];
  $Password=$_POST['Pass'];
  // $HPassword=password_hash($Password,PASSWORD_BCRYPT);
  $RPassword=$_POST['RPass'];
  // $HRPassword=password_hash($RPassword,PASSWORD_BCRYPT);
  if (filter_var($Email, FILTER_VALIDATE_EMAIL)) {
if(preg_match("/^[789]\d{9}$/", $Phone)) {
 $EmailCount = ISEmailAlreadyExist($Email,$con);
  if ($EmailCount>0) {
    phpAlert ("email are alredy exists");
    return;
  }
    if ($Password===$RPassword) {
      $query="insert into registration (Name,Email,Number,Password)values('$Name','$Email','$Phone','$Password')";
  $Res=mysqli_query($con,$query);
  if ($Res) {
   
    echo "<script>
alert('Account Has been Created!');
window.location.href='login.php';
</script>";
   
  }else{
     phpAlert('Something went wrong! Please try again');
  }
    }else{
       phpAlert('password are not mach');
    }


}else
{
  phpAlert('Please enter a valid Phone number!');
}
  //  end of phone validateion
}else{
 phpAlert('Please enter a valid Email Address!'); 
}

}
      
  
   
    
  

?>
 
 
