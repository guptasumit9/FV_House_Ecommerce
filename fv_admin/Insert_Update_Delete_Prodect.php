<?php
$user="sumit";
$pass=1209;
if ($user=="sumit" and $pass==1209) {
    # code...
 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Admin panel</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet"  href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

  </head>
   
  <body style="width:90%; margin-left: 20px; margin-top: 10px">
	 <table id="example" class="table table-striped"   >
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Descriptoin</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Market Price</th>
                <th>IMG</th>
                <th>Page</th>
                <th>Update</th>
                <th>Add</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        	<?php
  include 'conn.php';
  $select="select * from product";
  $qurey=mysqli_query($con,$select);
  $count=mysqli_num_rows($qurey);
  // echo $count;

  while ($fetch=mysqli_fetch_array($qurey)) {
 
 ?>
            <tr>
                <td><?php echo $fetch['id']; ?></td>
                <td><?php echo $fetch['Name']; ?></td>
                <td><?php echo $fetch['Descriptoin']; ?></td>
                <td><?php echo $fetch['Quantity']; ?></td>
                <td><?php echo $fetch['Price']; ?></td>
                <td><?php echo $fetch['M_Price']; ?></td>
                <td><?php echo $fetch['Img_file']; ?></td>
                <td><?php echo $fetch['Page']; ?></td>
                <td><a href='Upadate.php?id=<?php echo $fetch['id']; ?>';> <button type="button" class="btn btn-primary">Update</button></a></td>
                <td><button onclick="location.href = 'prodect_add.php';" type="button" class="btn btn-primary"> Add</button></td> 
                <td><a href='Delete.php?id=<?php echo $fetch['id']; ?>';><button type="button" class="btn btn-danger">Delete</button></a></td>
            </tr>
    <?php

     }
    ?>
        </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
    	$(document).ready(function () {
 		$('#example').DataTable();
		});
    </script>
  </body>
</html>
<?php
}else{
    echo "user name and pass are not mach";
}
?>
