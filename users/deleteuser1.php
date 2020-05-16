<?php

function getConnection(){
	    $host="localhost";
		$user="thiscode_root";
		$password="thiscode_password1";
		$database="thiscode_cms";
        $con = new PDO("mysql:host=$host;dbname=$database",$user,$password);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $con;		
	}
	
	

    $id = $_POST['id'];	
	$sql = "delete from user where id='$id'";
    $db= getConnection();
    $prepare=$db->prepare($sql);
	$prepare->execute();
	$db=null;
  $data = "Successful deleted";
 echo $data;
header("location: https://www.thiscodeschool.com/confab/users");

?>