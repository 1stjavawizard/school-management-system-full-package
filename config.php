<?php
require __DIR__ . '/vendor/autoload.php';

    $client = new Google_Client();
    $client->setClientId("259801023870-7cvvv6ouf0ahret4s7he7om9t1pkb9bp.apps.googleusercontent.com");
    $client->setClientSecret("ZG-sN3Jk16FE7AwGUUDgq04x");
    $client->setRedirecturi("https://www.thiscodeschool.com/confab/subjects/");
    $client->addScope("email");
	$client->addScope("profile");
	session_start();
?>

