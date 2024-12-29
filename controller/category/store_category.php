<?php 

$category_name = htmlspecialchars(trim($_POST['category_name']));

$sql = "INSERT INTO categories(`category_name`) VALUES('$category_name')";


$result = mysqli_query($conn, $sql);

if($result){
	$_SESSION['success'] = "Category created successfully!";
	header("location:./index.php?page=category");
}else{
	$_SESSION["error"] = "there are internal server error";
}
