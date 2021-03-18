<?php
if(isset($_POST['submit'])){
include_once 'connection.php';
$id = $_POST['id'];
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

if(!empty($image_name)){
    $update_image = "UPDATE `users` SET `image`='$image_name' WHERE id = $id";
    $conn->query($update_image);
}

$update_user = "UPDATE `users` SET `first_name`='$first_name',`last_name`='$last_name',`password`='$password',`email`='$email',`image`='$image_name',`phone`='$phone',`gender`='$gender',`date`='$date' WHERE id = $id";
$conn->query($update_user);
header("location:../users.php");
}
?>