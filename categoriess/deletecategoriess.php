<?php
include_once('Categoriess.php');
$server = new Categoriess();
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$server->deletecategoriess($id);
	header("Location: https://www.thiscodeschool.com/confab/categoriess/");
}


 ?>