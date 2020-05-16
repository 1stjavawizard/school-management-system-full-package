<?php
class Era{
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
	
	


function postEra(array $post){
  date_default_timezone_set('Africa/Lagos');          
		  
			 $name = $post['name'];
			 
			 $created = date('Y-m-d H:i:s');
 			
 
    $sql = "INSERT INTO era (name, created) values (:name,:created)";
    try {
        $paid = false;
        $db = $this->getConnection();
        $stmt = $db->prepare($sql);	 	 
		$stmt->bindParam("name", $name);
			 
			 $stmt->bindParam("created", $created); 
        $stmt->execute();
        $db = null;
       

    } catch(PDOException $e) {
        echo $e->getMessage();
    }
}





function getEraItems(){
    $sql = 'SELECT * from era';
    try {
        $db = $this->getConnection();
        $stmt = $db->query($sql);
        $post = $stmt->fetchAll(PDO::FETCH_OBJ);
       return $post;
       
    } catch(PDOException $e) {
        echo 'somthing is wrong '. $e->getMessage();
    }

}

function getErabyid($id){

    $sql = "SELECT * from era where id ='$id' ";
    try {
        $db = $this->getConnection();
        $stmt = $db->query($sql);
        $post = $stmt->fetch(PDO::FETCH_OBJ);
      return $post;

       
    } catch(PDOException $e) {
        echo  $e->getMessage();
    }

}



function updateEra(array $post){
    date_default_timezone_set('Africa/Lagos');
	         $id = $post['id'];
        
		     $name = $post['name'];
			 
		 $created = date('Y-m-d H:i:s');
        $time = time();


    $sql = "UPDATE era SET name =:name, created=:created where id= '$id'";
    try {
        
        $db = $this->getConnection();
        $stmt = $db->prepare($sql);
       		$stmt->bindParam("name", $name);			 
			 $stmt->bindParam("created", $created); 
			 
        $stmt->execute();
        
        echo 'ok';

    } catch(PDOException $e) {
        echo $e->getMessage();
    }

}	


function deleteEra($id){

      $sql = " DELETE from era where id = '$id' ";

    try {
        $db = $this->getConnection();
        $stmt = $db->prepare($sql);
        $stmt->execute();
        

        echo 'ok';
    } catch(PDOException $e) {
        echo $e->getMessage();
    }

}



}
 ?>