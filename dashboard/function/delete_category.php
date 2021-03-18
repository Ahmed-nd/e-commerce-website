<?php
include_once 'connection.php';
$id = $_GET['id'];
$delete_category = "DELETE FROM `category` WHERE id = $id";
$conn->query($delete_category);
header("location:../category.php");
?>