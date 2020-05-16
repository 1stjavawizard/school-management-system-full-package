<?php


include_once('Era.php');
$era = new Era();


if(isset($_POST)){
	
	$era->updateEra($_POST);
	echo "success";
}




?>
