<?php 
if(isset($_POST['submit'])){
	include_once 'connection.php';
	$id = $_POST['id'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$image_name = $_FILES['image']['name'];
	$image_temp = $_FILES['image']['tmp_name'];
	move_uploaded_file($image_temp, "../images/$image_name");

	if(!empty($image_name)){
		$update_image = "UPDATE `users` SET `image` = '$image_name' WHERE id = $id";
		$conn->query($update_image); 

	}

	$update_user = "UPDATE `users` SET `first_name` = '$firstname' , `last_name` = '$lastname' ,`password` = '$password' ,`address` ='$address' , `email` = '$email' ,`phone` = '$phone' WHERE id = $id";
	$conn->query($update_user);
	

	header("Location:../users.php");
}

?>