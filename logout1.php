<?php

    include('config.php');
	$client->revokeToken();
	session_destroy();
    header("Location: https://www.thiscodeschool.com/confab/");
    
?>