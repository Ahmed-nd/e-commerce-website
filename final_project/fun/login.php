<?php
session_start();

if(isset($_POST['submit']))
{
	include_once 'connection.php';
	$email = $_POST['email'];
	$password = $_POST['password'];

	$select_admin = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'";
	$result_admin = $conn->query($select_admin);
	$row_admin = $result_admin->fetch_assoc();
	$count = $result_admin->num_rows;
	if($count > 0){
		$_SESSION['username'] = $username;

		header("Location:../index.php");
	}
	else
	{
		header("Location:../login.php");
	}
	


}

?>