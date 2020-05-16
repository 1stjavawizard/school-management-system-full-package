<?php
include_once('School.php');
$server = new School();
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$server->deleteSchool($id);
	header("Location: https://www.thiscodeschool.com/confab/school/");
}


 ?>