<?php 
include_once('Era.php');
$era = new Era();
$data  = $era->getEraItems();

echo json_encode($data);



?>