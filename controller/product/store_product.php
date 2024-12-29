<?php 


	if($_SERVER['REQUEST_METHOD'] == "POST"){

		foreach($_POST as $key => $value){

			$$key = htmlspecialchars(trim($value));

		}
		$image = $_FILES['image'];

		if($image['error'] == 0){
			$ext = pathinfo($image['name'],PATHINFO_EXTENSION);
			$image_name = "product-".rand(1000,10000).".".$ext;
			if(move_uploaded_file($image['tmp_name'],"./assets/products/$image_name")){
				echo "the image uploaded successfully";
			}else{
				echo "failed to upload image";
			}
		}

		$sql = "INSERT INTO products(`name`,`price`,`discount`,`image`,`description`,`qty`,`category_id`)
				VALUES('$name',$price,$discount,'$image_name','$description',$qty,'$category_id')";
		$result = mysqli_query($conn,$sql);

		if($result){
			$_SESSION['success'] = "the product is created successfully";
			header("location:./index.php?page=home");
		}else{
			die("ERROR 500");
		}


	}else{
		die("ERROR 404");
	}

?>