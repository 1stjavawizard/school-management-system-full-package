<?php 
include_once('Scheme.php');
$note = new Scheme();
$towhom = 4;
$data  = $note->getScheme($towhom);

echo json_encode($data);



?>