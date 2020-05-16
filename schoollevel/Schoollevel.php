<?php
class Schoollevel{
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
	
	 function getConnection(){
	    $host="localhost";
		$user="thiscode_root";
		$password="thiscode_password1";
		$database="thiscode_cms";
        $con = new PDO("mysql:host=$host;dbname=$database",$user,$password);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $con;		
	}
	
	




function postSchoollevelItem(array $post){
  date_default_timezone_set('Africa/Lagos');          
		    $name = $post['name'];
			$description = $post['description'];
			$date = date('Y-m-d H:i:s');
            $time = time();
         


    $sql = "INSERT INTO schoollevel(name, description, created) 
    values(:name, :description, :Created)";
    try {
        $paid = false;
        $db = $this->getConnection();
        $stmt = $db->prepare($sql);
        $stmt->bindParam("name", $name);
        $stmt->bindParam("description", $description);
        $stmt->bindParam("Created", $date);
        $stmt->execute();
       
       

    } catch(PDOException $e) {
        echo $e->getMessage();
    }
}


	

 


function getSchoollevelItems(){
   
    try {
         $sql = "SELECT * from schoollevel";
        $db = $this->getConnection();
        $stmt = $db->query($sql);
        $data = $stmt->fetchAll(PDO::FETCH_OBJ);
       return $data; 
       
       
    } 
    catch(PDOException $e){
        echo 'somthing is wrong '. $e->getMessage();
    }

}

function getSchoollevelbyid($id){

    $sql = "SELECT * from schoollevel where id ='$id' ";
    try {
        $db = $this->getConnection();
        $stmt = $db->query($sql);
        $post = $stmt->fetch(PDO::FETCH_OBJ);
      return $post;
       
    } catch(PDOException $e) {
        echo  $e->getMessage();
    }

}



function updateSchoollevel(array $op){
    date_default_timezone_set('Africa/Lagos');
	    $id = $op['id'];
        $name = $op['name'];
		$description = $op['description'];
		$date = date('Y-m-d H:i:s');
        $time = time();


    $sql = "UPDATE schoollevel SET name=:name, description=:description, created=:Created where id= '$id'";
    try {
        
        $db = $this->getConnection();
        $stmt = $db->prepare($sql);
        $stmt->bindParam("name", $name);
        $stmt->bindParam("description", $description);
         $stmt->bindParam("Created", $date);
        $stmt->execute();
        
        echo 'ok';

    } catch(PDOException $e) {
        echo $e->getMessage();
    }

}	


function deleteSchoollevel($id) {

      $sql = " DELETE from schoollevel where id = '$id' ";

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

}
 ?>