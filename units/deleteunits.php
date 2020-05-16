<?php
include_once('Units.php');
$server = new Units();
if(isset($_POST['id'])){
	$id = $_POST['id'];
	$server->deleteUnits($id);
	echo "deleted";
}


 ?>