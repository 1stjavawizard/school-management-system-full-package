<?php


include_once('Sessionterm.php');
$server = new Sessionterm();


if(isset($_POST)){
	
	$server->updateSessionterm($_POST);
	echo "success";
}




?>
