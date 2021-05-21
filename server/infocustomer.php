<?php
	include "connect.php";
	$cusName = $_POST['cusName'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	if(strlen($cusName) > 0 && strlen($email) > 0 && strlen($phone) > 0){
		$query = "INSERT INTO orderproduct(OrderId, CusName, Phone, Email)
		 VALUES (null, '$cusName', '$phone', '$email')";
		if(mysqli_query($con, $query)){
			$iddonhang = $con->insert_id;
			echo $iddonhang;
		}else{
			echo "Fail";
		}
	}else{
		echo "Please check your data!";
	}
?>