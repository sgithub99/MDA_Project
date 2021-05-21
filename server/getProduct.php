<?php
	include "connect.php";
	$page = $_GET['page'];
	$idsp = $_POST['typeProId'];
	$space = 6;
	$limit = ($page - 1) * $space;
	$listPro = array();
	$query = "SELECT * FROM product WHERE TypeProId = $idsp LIMIT $limit, $space";
	$data = mysqli_query($con, $query);
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