  
 
<!DOCTYPE html>
<html>
<head>
	<title>Export sql to exel</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<a href="export.php"> <button type="button" class="btn btn-primary">Export</button></a>
		<table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>age</th>
         
      </tr>
    </thead>
    <?php

include 'raf_conn.php';

$a="EXEC proinsertdatapractice4_fach";
$qurey = sqlsrv_query($conn, $a);
$row= sqlsrv_num_rows($qurey);

while ($b=sqlsrv_fetch_array($qurey)) {
	 ?>
    <tbody>
    	 
      <tr>
        <td><?php echo $b['name']; ?></td>
        <td><?php echo $b['age']; ?></td>
         
      </tr>
 
    </tbody>
            <?php	 
}

?>
  </table>

		
	</div>

</body>
</html>
 