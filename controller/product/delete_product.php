<?php


	$id = $_GET['id'];
	$product_query = "SELECT image FROM products";
	$product_result = mysqli_query($conn,$product_query);
	$product = mysqli_fetch_assoc($product_result);

	$old_image = $product['image'];
	
	if(file_exists("./assets/products/$old_image")){
		unlink("./assets/products/$old_image");
	}

	$sql = "DELETE FROM products WHERE id=$id";

	$result = mysqli_query($conn,$sql);

	if($result){
		$_SESSION['success'] = "the product is deleted successfully";
		header("location:index.php");
	}else{
		die("ERROR 500");
	}

?>