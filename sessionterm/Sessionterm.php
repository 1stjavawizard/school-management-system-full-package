<?php
class Sessionterm{
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
	
	


function postSessionterms(array $post){
  date_default_timezone_set('Africa/Lagos');          
		  						
			 $session_id = $post['session_id'];
			 $sessionname = $post['sessionname'];
			 $term_id = $post['term_id'];
			 $termname = $post['termname'];
			 $startdate = $post['startdate'];			
			 $enddate = $post['enddate'];			
			 
			 $created = date('Y-m-d H:i:s');
 			
 
    $sql = "INSERT INTO sessionterm (session_id, sessionname, term_id, termname, startdate, enddate, created) values (:session_id, :sessionname, :term_id, :termname, :startdate, :enddate, :created)";
    try {
        
        $db = $this->getConnection();
        $stmt = $db->prepare($sql);	 	 
			 $stmt->bindParam("session_id", $session_id);
			 $stmt->bindParam("sessionname", $sessionname);
			 $stmt->bindParam("term_id", $term_id);
			 $stmt->bindParam("termname", $termname);
			 $stmt->bindParam("startdate", $startdate);			 
			 $stmt->bindParam("enddate", $enddate);			 
			 $stmt->bindParam("created", $created); 
        $stmt->execute();
        $db = null;
       

    } catch(PDOException $e) {
        echo $e->getMessage();
    }
}





function getSessionterm(){
    $sql = 'SELECT * from sessionterm';
    try {
        $db = $this->getConnection();
        $stmt = $db->query($sql);
        $post = $stmt->fetchAll(PDO::FETCH_OBJ);
       return $post;
       
    } catch(PDOException $e) {
        echo 'somthing is wrong '. $e->getMessage();
    }

}

function getSessiontermById($id){

    $sql = "SELECT * from sessionterm where id ='$id' ";
    try {
        $db = $this->getConnection();
        $stmt = $db->query($sql);
        $post = $stmt->fetch(PDO::FETCH_OBJ);
      return $post;

       
    } catch(PDOException $e) {
        echo  $e->getMessage();
    }

}



function updateSessionterm(array $post){
    date_default_timezone_set('Africa/Lagos');
	    $id = $post['id'];
        
		     $session_id = $post['session_id'];
			 $sessionname = $post['sessionname'];
			 $term_id = $post['term_id'];
			 $termname = $post['termname'];
			 $startdate = $post['startdate'];			
			 $enddate = $post['enddate'];			
			 
			 $created = date('Y-m-d H:i:s');
		
        $time = time();


    $sql = "UPDATE sessionterm SET session_id =:session_id, sessionname=:sessionname, term_id=:term_id, termname =:termname, startdate=:startdate, enddate=:enddate,created=:created where id= '$id'";
    try {
        
        $db = $this->getConnection();
        $stmt = $db->prepare($sql);	 	 
			 $stmt->bindParam("session_id", $session_id);
			 $stmt->bindParam("sessionname", $sessionname);
			 $stmt->bindParam("term_id", $term_id);
			 $stmt->bindParam("termname", $termname);
			 $stmt->bindParam("startdate", $startdate);			 
			 $stmt->bindParam("enddate", $enddate);			 
			 $stmt->bindParam("created", $created); 
      
			 
        $stmt->execute();
        
        echo 'ok';

    } catch(PDOException $e) {
        echo $e->getMessage();
    }

}	


function deleteSession($id){

      $sql = " DELETE from sessionterm where id = '$id' ";

    try {
        $db = $this->getConnection();
        $stmt = $db->prepare($sql);
        $stmt->execute();
       

        echo 'ok';
    } catch(PDOException $e) {
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


function getAllTerms(){
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




}
 ?>