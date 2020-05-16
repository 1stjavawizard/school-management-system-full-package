<?php
include_once('Quiz.php');
$server = new Quiz();
$message ="";
if(isset($_POST)){
	$server->postUserQuiz($_POST,$_FILES);
	$message = "ok";
	echo $message;
}

else{
	$messge = "wrong";
	echo $message;
}

 ?>