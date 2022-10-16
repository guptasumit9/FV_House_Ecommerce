<?php
include 'conn.php';
$id=$_GET['id'];
$select="delete from product where id=$id";
$query=mysqli_query($con,$select);

if ($query) {
	// echo "your data is delete";
	// header($localtion:"Insert_Update_Delete_Prodect.php");
	?>
    <script>
    	alert("your data is delete");
        location.replace("Insert_Update_Delete_Prodect.php")
      </script>
      <?php
}else{
	echo "data id not delete";
}
?>
