<?php 
include_once('Units.php');
$units = new Units();
$data  = $units->getUnitsItems();

echo json_encode($data);



?>