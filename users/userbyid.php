<?php


include_once('User.php');
$server = new User();


  if(isset($_POST['id'])){
	   $id = $_POST['id'];
	  $data = $server->getUserByid($id);
	  echo json_encode($data);
  }
     
	
	
	



?>
