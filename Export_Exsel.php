<?php
include 'raf_conn.php';
$a="EXEC proinsertdatapractice4_fach";
$qurey = sqlsrv_query($conn, $a);
$html ='<table><tr><td>Name</td> <td>age</td></tr> ';
while ($b=sqlsrv_fetch_array($qurey)) {
	$html.='<tr><td>'.$b['name'].'</td><td>'.$b['name'].'</td></tr>';
	}
	$html.='<table>';
	header('content-type:application/xls');
	header('content-disposition:attachment;filename=report.xls');
echo $html;
?>