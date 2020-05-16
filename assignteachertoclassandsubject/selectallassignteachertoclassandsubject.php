<?php 
include_once('Assignteachertoclassandsubject.php');
$assignteachertoclassandsubject = new Assignteachertoclassandsubject();
$data  = $assignteachertoclassandsubject->getAssignteachertoclassandsubject();

echo json_encode($data);



?>