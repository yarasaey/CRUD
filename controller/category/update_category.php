<?php 
$id = $_GET['id'];

$category_name = htmlspecialchars(trim($_POST['category_name']));

$sql = "UPDATE categories SET category_name = '$category_name' WHERE id=$id";


$result = mysqli_query($conn, $sql);

if($result){
	$_SESSION['success'] = "Category is updated successfully!";
	header("location:./index.php?page=category");
}else{
	$_SESSION["error"] = "there are internal server error";
}