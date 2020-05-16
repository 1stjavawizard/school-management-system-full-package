<?php
class Subjecttoclass{
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
	
	


function postSubjecttoclass(array $post){
  date_default_timezone_set('Africa/Lagos');          
		  						
			 $name = $post['name'];
			 $subject_id = $post['subject_id'];
			 $unit_id = $post['unit_id'];
			 $unitname = $post['unitname'];
			 $subjectname = $post['subjectname'];			
			 $category = $post['category'];			
			 
			 $Created = date('Y-m-d H:i:s');
 									
 
    $sql = "INSERT INTO subjecttoclass (name, subject_id, unit_id, unitname, subjectname, category, Created) values (:name, :subject_id, :unit_id, :unitname, :subjectname, :category, :Created)";
    try {
        $paid = false;
        $db = $this->getConnection();
        $stmt = $db->prepare($sql);	 	 
			 $stmt->bindParam("name", $name);
			 $stmt->bindParam("subject_id", $subject_id);
			 $stmt->bindParam("unit_id", $unit_id);
			 $stmt->bindParam("unitname", $unitname);
			 $stmt->bindParam("subjectname", $subjectname);			 
			 $stmt->bindParam("category", $category);			 
			 $stmt->bindParam("Created", $Created); 
        $stmt->execute();
        $db = null;
       

    } catch(PDOException $e) {
        echo $e->getMessage();
    }
}





function getSubjecttoclass(){
    $sql = 'SELECT * from subjecttoclass';
    try {
        $db = $this->getConnection();
        $stmt = $db->query($sql);
        $post = $stmt->fetchAll(PDO::FETCH_OBJ);
       return $post;
       
    } catch(PDOException $e) {
        echo 'somthing is wrong '. $e->getMessage();
    }

}

function getSubjecttoclassById($id){

    $sql = "SELECT * from subjecttoclass where id ='$id' ";
    try {
        $db = $this->getConnection();
        $stmt = $db->query($sql);
        $post = $stmt->fetch(PDO::FETCH_OBJ);
      return $post;

       
    } catch(PDOException $e) {
        echo  $e->getMessage();
    }

}



function updateSubjecttoclass(array $post){
    date_default_timezone_set('Africa/Lagos');
	    $id = $post['id'];
        
		   $name = $post['name'];
			 $subject_id = $post['subject_id'];
			 $unit_id = $post['unit_id'];
			 $unitname = $post['unitname'];
			 $subjectname = $post['subjectname'];			
			 $category = $post['category'];			
			 
			 $Created = date('Y-m-d H:i:s');
		
        $time = time();


    $sql = "UPDATE subjecttoclass SET name =:name, subject_id=:subject_id, unit_id=:unit_id,unitname=:unitname, subjectname=:subjectname, category=:category,Created=:Created where id= '$id'";
    try {
        
        $db = $this->getConnection();
        $stmt = $db->prepare($sql);	 	 
			 $stmt->bindParam("name", $name);
			 $stmt->bindParam("subject_id", $subject_id);
			 $stmt->bindParam("unit_id", $unit_id);
			 $stmt->bindParam("unitname", $unitname);
			 $stmt->bindParam("subjectname", $subjectname);			 
			 $stmt->bindParam("category", $category);			 
			 $stmt->bindParam("Created", $Created); 
        $stmt->execute();
        
        echo 'ok';

    } catch(PDOException $e) {
        echo $e->getMessage();
    }

}	


function deleteSubjecttoclass($id){

      $sql = " DELETE from subjecttoclass where id = '$id' ";

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




}
 ?>