<?php 
if(isset($_POST['submit'])){
	include_once 'connection.php';
	$name = $_POST['name'];
	$image_name = $_FILES['image']['name'];
	$image_temp = $_FILES['image']['tmp_name'];
	move_uploaded_file($image_temp, "../images/$image_name");
	$insert_category = "INSERT INTO `category`(`name`,`img`)VALUES('$name','$image_name')";
	$conn->query($insert_category);
	header("Location:../categories.php");
}

?>