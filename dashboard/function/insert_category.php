<?php
if(isset($_POST['submit'])){
include_once 'connection.php';
$name = $_POST['name'];
$insert_category = "INSERT INTO `category`(`name`) VALUES ('$name')";
$conn->query($insert_category);
header("location:../category.php");
}
?>