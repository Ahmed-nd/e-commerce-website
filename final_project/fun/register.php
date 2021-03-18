<?php 
if(isset($_POST['submit'])){
	include_once 'connection.php';
	$firstname = $_POST['first_name'];
	$lastname = $_POST['last_name'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$gender = $_POST['gender'];
	$date = date("Y-m-d");
	$image_name = $_FILES['image']['name'];
	$image_temp = $_FILES['image']['tmp_name'];
	move_uploaded_file($image_temp, "../images/$image_name");
	

	$insert_users = "INSERT INTO `users`(`first_name`,`last_name`,`image`,`email`,`address`,`phone`,`gender`,`password`,`u_date`)VALUES('$firstname' ,'$lastname' , '$image_name','$email','$address','$phone','$gender' ,'$password','$date')";
	$conn->query($insert_users);
	header("Location:../login.php");
}

?>