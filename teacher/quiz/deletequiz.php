<?php
include_once('Quiz.php');
$server = new Quiz();
if(isset($_POST['id'])){
	$id = $_POST['id'];
	$server->deleteQuiz($id);
	echo "deleted";
}


 ?>