<?php 
include_once('Subjecttoclass.php');
$subjecttoclass = new Subjecttoclass();
$data  = $subjecttoclass->getSubjecttoclass();

echo json_encode($data);



?>