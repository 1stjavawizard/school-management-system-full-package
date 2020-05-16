<?php 
include_once('User.php');
$user = new User();
$data  = $user->getUserItems();

echo json_encode($data);



?>