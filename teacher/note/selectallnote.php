<?php 
include_once('Note.php');
$note = new Note();
$data  = $note->getNotes();

echo json_encode($data);



?>