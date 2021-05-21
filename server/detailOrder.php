<?php
	include "connect.php";
	$json = $_POST['jsonDetailOrder'];
	$data = json_decode($json, true);
	foreach ($data as $value) {
		$orderId = $value['orderId'];
		$proId = $value['proId'];
		$proName = $value['proName'];
		$price = $value['price'];
		$proNumber = $value['proNumber'];
		$query = "INSERT INTO detailorder (Detail_Order_Id, OrderId, ProId, ProName, Price, ProNumber) VALUES (null, '$orderId', '$proId', '$proName', '$price', '$proNumber')";
		$Dta = mysqli_query($con, $query);
	}
	if($Dta){
		echo "1";
	}
	else{
		echo "0";
	}
?>