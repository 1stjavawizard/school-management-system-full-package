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
	
	
	$sql = "UPDATE `user` SET `name`=:name,`username`=:username,`role`=:role,`password`=:password,`hashpassword`=:hashpassword,`plainpassword`=:plainpassword,`parentName`=:parentName WHERE id = :id";
	
	
	try{
	$db = getConnection();
	$setup = $db->prepare($sql);	
	  $haspw = md5($_POST['password']);
	 $setup->bindParam("name",$_POST['name']);
	 $setup->bindParam("id",$_POST['id']);
	 $setup->bindParam("username",$_POST['username']);
	 $setup->bindParam("role",$_POST['role']);
	 $setup->bindParam("password",$_POST['password']);
	 $setup->bindParam("hashpassword",$haspw);
	 $setup->bindParam("plainpassword",$_POST['password']);

	 $setup->bindParam("parentName",$_POST['parentName']);
	
 $setup->execute();
 $db = null;		
 echo "{'message':'Successful upddated'}";
 header("Location: https://www.thiscodeschool.com/confab/users/");
}

 catch(PDOException $e){
		echo "{'message':'Something is wrong user '".$e->getMessage()."}";
	}
	
	

?>