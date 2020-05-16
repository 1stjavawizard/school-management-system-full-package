<?php
include_once('Academicsession.php');
$server = new Academicsession();
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$server->deleteacademicsession($id);
	header("Location: https://www.thiscodeschool.com/confab/academicsession/");
}


 ?>