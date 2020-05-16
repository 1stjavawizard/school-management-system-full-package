<?php


include_once('Categoriess.php');
$server = new Categoriess();


if(isset($_POST)){
	
	$server->updatecategoriess($_POST);
	header("Location: https://www.thiscodeschool.com/confab/categoriess/");
}




?>
