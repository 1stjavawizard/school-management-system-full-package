<?php
session_start();
include_once('Schoollevel.php');

$server = new Schoollevel();
$data = $server->getSchoollevelItems();

var_dump($data);
?>