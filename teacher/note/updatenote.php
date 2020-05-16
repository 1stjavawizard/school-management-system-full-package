<?php
include_once('Note.php');
$server = new Note();


if(isset($_FILES)){
	
	$server->updateNote($_POST,$_FILES);
	echo "success";
}




?>
