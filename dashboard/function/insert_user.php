<?php
if(isset($_POST['submit'])){
include_once 'connection.php';
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = -1;
if($_POST['gender']=="female"){
    $gender=2;
}elseif($_POST['gender']=="male"){
    $gender=1;
}
$date = date("Y-m-d");
$image_name = $_FILES['image']['name'];
$image_temp = $_FILES['image']['tmp_name'];
move_uploaded_file($image_temp,"../images/$image_name");

$insert_user = "INSERT INTO `users`(`first_name`, `last_name`, `password`, `email`, `image`, `phone`, `gender`, `date`) VALUES ('$first_name','$last_name','$password','$email','$image_name','$phone','$gender','$date')";
$conn->query($insert_user);
header("location:../users.php");
}
?>