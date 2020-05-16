<?php 
include_once('Subjecttostudent.php');
$subjecttostudent = new Subjecttostudent();
$data  = $subjecttostudent->getSubjecttostudent();

echo json_encode($data);



?>