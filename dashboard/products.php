<?php
session_start();
if(!isset($_SESSION['username'])){
	header("Location:login.php");
}else{
	 include_once 'includes/header.php'; 
	 include_once 'includes/nav.php'; 
	 include_once 'includes/sidebar.php'; 

	if(!$_GET['do']){
		include 'view/view_products.php';
	}elseif($_GET['do'] == "add"){
		include 'view/add_products.php';
	}elseif($_GET['do'] == "edit"){
		include 'view/edit_products.php';
	}
			
	include_once 'includes/footer.php';
}
?>