<?php
include_once('Scheme.php');
$server = new Scheme();


if(isset($_FILES)){
	
	$server->updateScheme($_POST,$_FILES);
	echo "success";
}




?>
