<?php
include_once('Note.php');
$server = new Note();
if(isset($_POST['id'])){
	$id = $_POST['id'];
	$server->deleteNote($id);
	echo "deleted";
}


 ?>