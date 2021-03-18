<?php
session_start();
if(isset($_POST['submit'])){
    include_once 'connection.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $select = "SELECT * FROM `admin` WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($select);
    $count = $result->num_rows;
    $array = $result->fetch_assoc();
    $img = $array['image'];
    if($count > 0){
        $_SESSION['username']= $username;
        $_SESSION['image'] = $img;
        header("Location:../index.php");
    }else{
        header("Location:../login.php");
    }
}
?>