<?php 
include_once('Sessionterm.php');
$sessionterm = new Sessionterm();
$data  = $sessionterm->getSessionterm();

echo json_encode($data);



?>