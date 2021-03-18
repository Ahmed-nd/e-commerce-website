<?php 

if(isset($_POST['submit'])){

	include 'connection.php';
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $conn->real_escape_string($_POST['message']);
	$date = date("Y-m-d h:m:s");


	$insert_message = "INSERT INTO message (name ,email , message ,m_date)VALUES('$name' ,'$email','$message' ,'$date')";
	$conn->query($insert_message);
	header("Location:../contact.php");

}

?>