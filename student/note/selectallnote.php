<?php 
include_once('Note.php');
$note = new Note();
$towhom = 4;
$data  = $note->getNotes($towhom);

echo json_encode($data);



?>