<?php
include_once('Scheme.php');
$server = new Scheme();
if(isset($_POST['id'])){
	$id = $_POST['id'];
	$server->deleteScheme($id);
	echo "deleted";
}


 ?>