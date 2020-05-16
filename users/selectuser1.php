<?php

date_default_timezone_set('Africa/Lagos');	
function getConnection(){
	    $host="localhost";
		$user="thiscode_root";
		$password="thiscode_password1";
		$database="thiscode_cms";
        $con = new PDO("mysql:host=$host;dbname=$database",$user,$password);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $con;		
	}
	
	


	$sql = "SELECT * FROM user";
try{
	$db = getConnection();
	$query = $db->query($sql);
	$data = $query->fetchAll(PDO::FETCH_OBJ);
	echo json_encode($data);
	 
}

 catch(PDOException $e){
		echo "{'message':'Something is wrong user '".$e->getMessage()."}";
	}
	
	

?>