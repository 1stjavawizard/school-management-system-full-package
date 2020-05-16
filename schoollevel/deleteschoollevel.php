<?php
include_once('Schoollevel.php');
$server = new Schoollevel();
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$server->deleteSchoollevel($id);
	header("Location: https://www.thiscodeschool.com/confab/schoollevel/");
}


 ?>