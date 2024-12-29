<?php 

$id = $_GET['id'];

$sql = "DELETE FROM categories WHERE id=$id";

$result = mysqli_query($conn,$sql);


if($result){
	$_SESSION['success'] = "the category is deleted!";
	header('location:./index.php?page=category');
}else{
	$_SESSION['error'] = 'there are internal server error';
}