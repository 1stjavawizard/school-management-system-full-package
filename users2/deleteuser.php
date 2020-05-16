<?php
include_once('User.php');
$user = new User();
if(isset($_POST['id'])){
	$id = $_POST['id'];
	$user->deleteUser($id);
	echo "deleted";
}


 ?>