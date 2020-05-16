<?php
class Subject{
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
	
	


function postSubjectItems(array $post){
  date_default_timezone_set('Africa/Lagos');          
		    $name = $post['name'];
			$description = $post['description'];
			$shortname = $post['shortname'];
			$schoollevel_id = $post['schoollevel_id'];
			$schoollevelname = $post['schoollevelname'];
			$category = $post['category'];
			 
			$date = date('Y-m-d H:i:s');
            $time = time();
         


    $sql = "INSERT INTO subject (name, description, shortname,schoollevel_id,schoollevelname,category,dateCreated) values (:name, :description, :shortname,:schoollevel_id,:schoollevelname,:category,:dateCreated)";
    try {
        $paid = false;
        $db = $this->getConnection();
        $stmt = $db->prepare($sql);
        $stmt->bindParam("name", $name);
        $stmt->bindParam("description", $description);
		$stmt->bindParam("shortname", $shortname);
        $stmt->bindParam("schoollevel_id", $schoollevel_id);
		$stmt->bindParam("schoollevelname", $schoollevelname);
        $stmt->bindParam("category", $category);
        $stmt->bindParam("dateCreated", $date);
        $stmt->execute();
        $db = null;
       

    } catch(PDOException $e) {
        echo $e->getMessage();
    }
}





function getSubjectItems(){
    $sql = 'SELECT * from subject ';
    try {
        $db = $this->getConnection();
        $stmt = $db->query($sql);
        $post = $stmt->fetchAll(PDO::FETCH_OBJ);
       return $post;
       
    } catch(PDOException $e) {
        echo 'somthing is wrong '. $e->getMessage();
    }

}

function getSubjectbyid($id){

    $sql = "SELECT * from subject where id ='$id' ";
    try {
        $db = $this->getConnection();
        $stmt = $db->query($sql);
        $post = $stmt->fetch(PDO::FETCH_OBJ);
      return $post;

       
    } catch(PDOException $e) {
        echo  $e->getMessage();
    }

}



function updateSubject(array $post){
    date_default_timezone_set('Africa/Lagos');
	        $name = $post['name'];
			$description = $post['description'];
			$shortname = $post['shortname'];
			$id =$post['id'];
			$date = date('Y-m-d H:i:s');
            $time = time();
         



    $sql = "UPDATE subject SET name=:name, description=:description, shortname=:shortname, dateCreated=:dateCreated where id= '$id'";
    try {
        
        $db = $this->getConnection();
        $stmt = $db->prepare($sql);
        $stmt->bindParam("name", $name);
        $stmt->bindParam("description", $description);
		$stmt->bindParam("shortname", $shortname);
         $stmt->bindParam("dateCreated", $date);
        $stmt->execute();
        $db = null;
        echo 'ok';

    } catch(PDOException $e) {
        echo $e->getMessage();
    }

}	


function deleteSubject($id){

      $sql = " DELETE from subject where id = '$id' ";

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

public function getSchoollevel(){
	$sql = "select * from schoollevel";
	$db = $this->getConnection();
	$stmt = $db->query($sql);
	$fetch = $stmt->fetchAll(PDO::FETCH_OBJ);
	return $fetch;
}


public function getSubjectCategory(){
	$sql = "select * from category";
	$db = $this->getConnection();
	$stmt = $db->query($sql);
	$fetch = $stmt->fetchAll(PDO::FETCH_OBJ);
	return $fetch;
}

}

 ?>