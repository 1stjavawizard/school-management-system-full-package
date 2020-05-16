<?php
include_once('Classlevel.php');
$server = new Classlevel();
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$server->deleteClasslevel($id);
	header("Location: https://www.thiscodeschool.com/confab/class/");
}


 ?>