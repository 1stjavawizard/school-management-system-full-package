<?php 
include_once('Subject.php');
$server = new Subject();

$data = $server->getSubjectItems();

echo json_encode($data);

?>