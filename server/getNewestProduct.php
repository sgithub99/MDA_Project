<?php
	include "connect.php";
	$query = "SELECT * FROM product ORDER BY ProId DESC LIMIT 6";
	$data = mysqli_query($con, $query);
	$listPro = array();
	while($row = mysqli_fetch_assoc($data)){
		array_push($listPro, new Product(
			$row['ProId'],
			$row['ProName'],
			$row['Price'],
			$row['ProImage'],
			$row['Description'],
			$row['TypeProId']));
	}
	echo json_encode($listPro);
	class Product{
		function Product($proId, $proName, 
			$price, $proImage, $description, $typeProId){
		$this -> proId = $proId; 
		$this -> proName = $proName;
		$this -> price = $price;
		$this -> proImage = $proImage;
		$this -> description = $description;
		$this -> typeProId = $typeProId;

		}
	}
?>