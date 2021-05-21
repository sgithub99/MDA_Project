<?php
	include "connect.php";
	$query = "SELECT * FROM typeofproduct";
	$data = mysqli_query($con, $query);
	$listTypePro = array();
	while($row = mysqli_fetch_assoc($data)){
		array_push($listTypePro, new TypeOfProduct(
			$row['TypeProId'],
			$row['TypeProName'],
			$row['TypeProImage']));
	}
	echo json_encode($listTypePro);
	class TypeOfProduct{
		function TypeOfProduct($id, $typeOfProductName, 
			$typeOfProductImage){
		$this -> id = $id; 
		$this -> typeOfProductName = $typeOfProductName;
		$this -> typeOfProductImage = $typeOfProductImage;
		}
	}
?>