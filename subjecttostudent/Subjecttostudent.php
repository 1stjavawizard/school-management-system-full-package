<?php
class Subjecttostudent{
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
	
	


function postSubjecttostudent(array $post){
  date_default_timezone_set('Africa/Lagos');          
		  						
			 $subject_id = $post['subject_id'];
			 $user_id = $post['user_id'];		 		
			 
			 $Created = date('Y-m-d H:i:s');
 		
		
 
    $sql = "INSERT INTO subjecttostudent (subject_id, user_id, Created) values (:subject_id, :user_id, :Created)";
    try {
       
        $db = $this->getConnection();
        $stmt = $db->prepare($sql);	 	 
			 $stmt->bindParam("subject_id", $subject_id);
			 $stmt->bindParam("user_id", $user_id);				 
			 $stmt->bindParam("Created", $Created); 
        $stmt->execute();
        $db = null;
       

    } catch(PDOException $e) {
        echo $e->getMessage();
    }
}





function getSubjecttostudent(){
    $sql = 'SELECT * from subjecttostudent';
    try {
        $db = $this->getConnection();
        $stmt = $db->query($sql);
        $post = $stmt->fetchAll(PDO::FETCH_OBJ);
       return $post;
       
    } catch(PDOException $e) {
        echo 'somthing is wrong '. $e->getMessage();
    }

}

function getSubjecttostudentById($id){

    $sql = "SELECT * from subjecttostudent where id ='$id' ";
    try {
        $db = $this->getConnection();
        $stmt = $db->query($sql);
        $post = $stmt->fetch(PDO::FETCH_OBJ);
      return $post;

       
    } catch(PDOException $e) {
        echo  $e->getMessage();
    }

}



function updateSubjecttostudent(array $post){
    date_default_timezone_set('Africa/Lagos');
	         $id = $post['id'];        
		   $subject_id = $post['subject_id'];
			 $user_id = $post['user_id'];		 
			 $Created = date('Y-m-d H:i:s');		
           $time = time();

    $sql = "UPDATE subjecttostudent SET subject_id =:subject_id, user_id=:user_id,Created=:Created where id= '$id'";
    try {
        
           $db = $this->getConnection();
            $stmt = $db->prepare($sql);	 	 
			 $stmt->bindParam("subject_id", $subject_id);
			 $stmt->bindParam("user_id", $user_id);				 
			 $stmt->bindParam("Created", $Created); 
       
        $stmt->execute();
        
        echo 'ok';

    } catch(PDOException $e) {
        echo $e->getMessage();
    }

}	


function deleteSubjecttostudent($id){

      $sql = " DELETE from subjecttostudent where id = '$id' ";

    try {
        $db = $this->getConnection();
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $db = null;

        echo 'ok';
    } catch(PDOException $e) {
        echo $e->getMessage();
    }

}



function getAllUsers(){
	$sql = "SELECT * FROM user";
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


function getAllSubjects(){
	$sql = "SELECT * FROM subject";
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