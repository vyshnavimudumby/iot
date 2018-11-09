<?php
define('DB_HOST', 'jfrpocyduwfg38kq.chr7pe7iynqr.eu-west-1.rds.amazonaws.com');
define('DB_USER', 'b8wib9i2mk7g6ejb');
define('DB_PASSWORD', 'oxea6npqrd3ujrly');
define('DB_NAME', 'mmub67bw1c8vermf');
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME); 


 if(isset($_GET['value'])){
	$value = $_GET['value'];
	$rowValue;
	if(strtolower($value) == "on") {
		$rowValue = 1;
	} else 
		if(strtolower($value) == "off"){
		$rowValue = 0;
	}
	$query = "UPDATE device_values SET is_active = '$rowValue' WHERE id = 1";
	mysqli_query($dbc, $query);
	echo "Row value updated to ". $rowValue;
 }else{
	$query = "SELECT * FROM device_values";
	$data = mysqli_query($dbc, $query);
	$row = mysqli_fetch_array($data);
	echo $row['is_active']; 
 }
mysqli_close($dbc); 
?>