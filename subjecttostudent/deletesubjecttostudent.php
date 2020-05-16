<?php
include_once('Subjecttostudent.php');
$server = new Subjecttostudent();
if(isset($_POST['id'])){
	$id = $_POST['id'];
	$server->deleteSubjecttostudent($id);
	echo "deleted";
}


 ?>