<?php
include_once('Subject.php');
$server = new Subject();
if(isset($_POST['id'])){
	$id = $_POST['id'];
	$server->deleteSubject($id);
	header("Location: https://www.thiscodeschool.com/confab/subject/");
}


 ?>