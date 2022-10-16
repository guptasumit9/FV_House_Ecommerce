 
<!DOCTYPE html>
<html>
<head>
	<?php
include 'link.php';
?>
	<title>My Cart</title>
</head>
<body>
	<?php
if (!isset($_SESSION['Username'])) {
	include 'nev.php';
	include 'conn.php';
	$UserID = $_SESSION['Username']; 
	$ProductID=$_GET['ProductID'];
	function phpAlertAndRedirect($message,$PageName) {
      
    // Display the alert box 
    	echo "<script>
		alert('$message');
		window.location.href='$PageName';
		</script>";	
	}
function InsertIntoCart($ProductID,$con){
	$UserID1 = $_SESSION['Username']; 
			$ProductID1=$_GET['ProductID'];
		if(IsValidProductID($ProductID,$con)){
			if(!IsProductExistInCart($ProductID1,$UserID1,$con)){
			//echo "IsValidProductID = true";
						$InsertQuery="INSERT INTO tbl_cartsdatails(Cid, UserID, ProductID, Quantity, CreatedDate) VALUES ('ID','$UserID1','$ProductID1','1',curdate())";
						//echo "$InsertQuery";
						$IsInserted=mysqli_query($con,$InsertQuery);
						return $IsInserted;
			}else{
				  phpAlertAndRedirect("Product is Already Added in Your cart",'index.php');
				 // return;
			}
			//


		}else{
			echo "IsValidProductID = true";
			phpAlert("Jada Sana bat ban lavde");

		}

	}
	function IsValidProductID($ProductID,$con){

		$select="select * from product where id=$ProductID";
		$query=mysqli_query($con,$select);
		$count=mysqli_num_rows($query);
		return true;
	}
	function IsProductExistInCart($ProductID,$UserID,$con){

		$select="select * from tbl_cartsdatails where UserID='$UserID' and ProductID = '$ProductID'";
		echo "$select";
		$Equery=mysqli_query($con,$select);
		//echo $Equery;
  		$total = mysqli_num_rows($Equery);
  		echo "$total";
		if((int)$total>0){
			return true;
		}
		return false;
	}
	if($ProductID != "" or $ProductID=null){
     // insert in cart table
		echo "ProductID is ". $ProductID;
		if(InsertIntoCart($ProductID,$con)){
			phpAlertAndRedirect("Data Inserted Successfully",'ViewCart.php');
			//header('Location: ');
		}else{
			phpAlertAndRedirect("Something went wrong",'index.php');
			//header('Location: );
		}
	}

	
	
	
	}else{
			phpAlert("Jada Sana bat ban lavde login kr");
			header('Location: login.php');
	}
	?>


</body>
</html>