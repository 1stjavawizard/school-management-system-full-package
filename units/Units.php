<?php
class Units{
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
	
	


function postUnitsItems(array $post){
  date_default_timezone_set('Africa/Lagos');          
		  
			 $name = $post['name'];
			 $description = $post['description'];
			 $category_id = $post['category_id'];
			 $schoollevel_id = $post['schoollevel_id'];
			 $classlevel_id = $post['classlevel_id'];			
			 $schoollevelname = $post['schoollevelname'];			
			 $category = $post['category'];			 
			 $user_id = $post['user_id'];
			 $dateCreated = date('Y-m-d H:i:s');
 			
 
    $sql = "INSERT INTO units (name, description, category_id, schoollevel_id, classlevel_id, schoollevelname, category, user_id, dateCreated) values (:name, :description,:category_id, :schoollevel_id, :classlevel_id, :schoollevelname, :category, :user_id, :dateCreated)";
    try {
        $paid = false;
        $db = $this->getConnection();
        $stmt = $db->prepare($sql);	 	 
			 $stmt->bindParam("name", $name);
			 $stmt->bindParam("description", $description);
			 $stmt->bindParam("category_id", $category_id);
			 $stmt->bindParam("schoollevel_id", $schoollevel_id);
			 $stmt->bindParam("classlevel_id", $classlevel_id);			 
			 $stmt->bindParam("schoollevelname", $schoollevelname);			
			 $stmt->bindParam("category", $category);			 
			 $stmt->bindParam("user_id", $user_id);
			 $stmt->bindParam("dateCreated", $dateCreated); 
        $stmt->execute();
        $db = null;
       

    } catch(PDOException $e) {
        echo $e->getMessage();
    }
}





function getUnitsItems(){
    $sql = 'SELECT * from units';
    try {
        $db = $this->getConnection();
        $stmt = $db->query($sql);
        $post = $stmt->fetchAll(PDO::FETCH_OBJ);
       return $post;
       
    } catch(PDOException $e) {
        echo 'somthing is wrong '. $e->getMessage();
    }

}

function getUnitsbyid($id){

    $sql = "SELECT * from units where id ='$id' ";
    try {
        $db = $this->getConnection();
        $stmt = $db->query($sql);
        $post = $stmt->fetch(PDO::FETCH_OBJ);
      return $post;

       
    } catch(PDOException $e) {
        echo  $e->getMessage();
    }

}



function updateUnits(array $post){
    date_default_timezone_set('Africa/Lagos');
	    $id = $post['id'];
        
		     $name = $post['name'];
			 $description = $post['description'];
			 $category_id = $post['category_id'];
			 $schoollevel_id = $post['schoollevel_id'];
			 $classlevel_id = $post['classlevel_id'];			
			 $schoollevelname = $post['schoollevelname'];			
			 $category = $post['category'];			 
			 $user_id = $post['user_id'];
		 $dateCreated = date('Y-m-d H:i:s');
        $time = time();


    $sql = "UPDATE units SET name =:name, description=:description, category_id=:category_id, schoollevel_id=:schoollevel_id, classlevel_id=:classlevel_id, schoollevelname=:schoollevelname, category =:category, user_id =:user_id, dateCreated =:dateCreated where id= '$id'";
    try {
        
        $db = $this->getConnection();
        $stmt = $db->prepare($sql);
       		$stmt->bindParam("name", $name);
			 $stmt->bindParam("description", $description);
			 $stmt->bindParam("category_id", $category_id);
			 $stmt->bindParam("schoollevel_id", $schoollevel_id);
			 $stmt->bindParam("classlevel_id", $classlevel_id);			 
			 $stmt->bindParam("schoollevelname", $schoollevelname);			
			 $stmt->bindParam("category", $category);			 
			 $stmt->bindParam("user_id", $user_id);
			 $stmt->bindParam("dateCreated", $dateCreated); 
			 
        $stmt->execute();
        
        echo 'ok';

    } catch(PDOException $e) {
        echo $e->getMessage();
    }

}	


function deleteUnits($id){

      $sql = " DELETE from units where id = '$id' ";

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



function getAllClasslevel(){
	$sql = "SELECT * FROM classlevel";
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




function getAllCategoriess(){
	$sql = "SELECT * FROM categoriess";
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