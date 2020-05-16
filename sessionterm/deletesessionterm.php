<?php
include_once('Sessionterm.php');
$server = new Sessionterm();
if(isset($_POST['id'])){
	$id = $_POST['id'];
	$server->deleteSession($id);
	echo "deleted";
}


 ?>