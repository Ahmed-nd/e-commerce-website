<?php
include_once 'connection.php';
$id = $_GET['id'];
$delete_user = "DELETE FROM `users` WHERE id = $id";
$conn->query($delete_user);
header("location:../users.php");
?>