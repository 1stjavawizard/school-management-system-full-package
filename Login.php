<?php

class Login{
	public $db = null;
	
	function __construct(){
		
		if($this->getConnection()){
		
			
			$this->db = $this->getConnection();
			return $this->db;
		}
		else{
			var_dump($this);
		}
	}
	
	private function getConnection(){
	    $host="localhost";
		$user="thiscode_root";
		$password="thiscode_password1";
		$database="thiscode_cms";
        $con = new PDO("mysql:host=$host;dbname=$database",$user,$password);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $con;		
	}
	
	

function checkUsers($username,$pass){

    $sql = "SELECT * from user where username ='$username' AND password ='$pass'";
    try {
        $db = $this->getConnection();
        $stmt = $db->query($sql);
        $post = $stmt->fetch(PDO::FETCH_OBJ);
        
        if(!empty($post) && $stmt->rowCount() > 0){
            return true;
        }
        else{
            return false;
        }

       
    } catch(PDOException $e) {
        echo  $e->getMessage();
    }

}


function getAUser($username){
      $sql = "SELECT role FROM user where username ='$username' AND role='student'";
    	
	try{
		$db = $this->getConnection();
		$query = $db->query($sql);
		$fetch = $query->fetch(PDO::FETCH_OBJ);
		return $fetch;
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
}

function getUsersRole($password,$username){
    	$sql = "SELECT role FROM user where password='$password' AND username='$username'";
	try{
		$db = $this->getConnection();
		$query = $db->query($sql);
		$fetch = $query->fetch(PDO::FETCH_OBJ);
		return $fetch;
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
}


function getAUsersByRole($role,$userid){
	$sql = "SELECT * FROM user where role='$role' AND username ='$userid'";
	try{
		$db = $this->getConnection();
		$query = $db->query($sql);
		$fetch = $query->fetch(PDO::FETCH_OBJ);
		return $fetch;
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
}


function getUsersSubjects($userid){
	$sql = "select subject.*, subjecttostudent.*,user.* from subject inner join subjecttostudent on subject.id = subjecttostudent.user_id inner join user on subjecttostudent.user_id = user.id where user.id ='$userid'";
	try{
		$db = $this->getConnection();
		$query = $db->query($sql);
		$fetch = $query->fetchAll(PDO::FETCH_OBJ);
		return $fetch;
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}

}


function getAllUnits(){
	$sql = "SELECT * FROM units";
	try{
		$db = $this->getConnection();
		$query = $db->query($sql);
		$fetch = $query->fetchAll(PDO::FETCH_OBJ);
		return $fetch;
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}

}


function getAllacademicsession(){
	$sql = "SELECT * FROM academicsession";
	try{
		$db = $this->getConnection();
		$query = $db->query($sql);
		$fetch = $query->fetchAll(PDO::FETCH_OBJ);
		return $fetch;
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}

}


function getAllSession(){
	$sql = "SELECT * FROM session";
	try{
		$db = $this->getConnection();
		$query = $db->query($sql);
		$fetch = $query->fetchAll(PDO::FETCH_OBJ);
		return $fetch;
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}

}

public function getUsersById($id){
    $sql = "SELECT * FROM user where id='$id'";
	try{
		$db = $this->getConnection();
		$query = $db->query($sql);
		$fetch = $query->fetchAll(PDO::FETCH_OBJ);
		return $fetch;
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
}


function getAllSchoollevel(){
	$sql = "SELECT * FROM schoollevel";
	try{
		$db = $this->getConnection();
		$query = $db->query($sql);
		$fetch = $query->fetchAll(PDO::FETCH_OBJ);
		return $fetch;
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}

}
}
 ?>