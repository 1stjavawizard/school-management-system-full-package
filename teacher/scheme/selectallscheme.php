<?php 
include_once('Scheme.php');
$note = new Scheme();
$data  = $note->getScheme();

echo json_encode($data);



?>