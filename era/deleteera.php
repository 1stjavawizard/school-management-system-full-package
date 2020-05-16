<?php
include_once('Era.php');
$era = new Era();
if(isset($_POST['id'])){
	$id = $_POST['id'];
	$era->deleteEra($id);
	echo "deleted";
}


 ?>