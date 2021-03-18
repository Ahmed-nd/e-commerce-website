<?php
if(isset($_POST['submit'])){
include_once 'connection.php';
$id = $_POST['id'];
$name = $_POST['name'];

$update_category = "UPDATE `category` SET `name`='$name' WHERE id = $id";
$conn->query($update_category);
header("location:../category.php");
}
?>