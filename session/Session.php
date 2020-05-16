<?php
class Session{
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
	
	


function postSessionItems(array $post){
  date_default_timezone_set('Africa/Lagos');          
		    $name = $post['name'];
			$description = $post['description'];
			$date = date('Y-m-d H:i:s');
            $time = time();
         


    $sql = "INSERT INTO session (name, description, created) values (:name, :description, :Created)";
    try {
        $paid = false;
        $db = $this->getConnection();
        $stmt = $db->prepare($sql);
        $stmt->bindParam("name", $name);
        $stmt->bindParam("description", $description);
        $stmt->bindParam("Created", $date);
        $stmt->execute();
        $db = null;
       

    } catch(PDOException $e) {
        echo $e->getMessage();
    }
}





function getSessionItems(){
    $sql = 'SELECT * from session ';
    try {
        $db = $this->getConnection();
        $stmt = $db->query($sql);
        $post = $stmt->fetchAll(PDO::FETCH_OBJ);
       return $post;
       
    } catch(PDOException $e) {
        echo 'somthing is wrong '. $e->getMessage();
    }

}

function getSessionbyid($id){

    $sql = "SELECT * from session where id ='$id' ";
    try {
        $db = $this->getConnection();
        $stmt = $db->query($sql);
        $post = $stmt->fetch(PDO::FETCH_OBJ);
      return $post;

       
    } catch(PDOException $e) {
        echo  $e->getMessage();
    }

}



function updateSession(array $post){
    date_default_timezone_set('Africa/Lagos');
	    $id = $post['id'];
        $name = $post['name'];
		$description = $post['description'];
		$date = date('Y-m-d H:i:s');
        $time = time();


    $sql = "UPDATE session SET name=:name, description=:description, created=:Created where id= '$id'";
    try {
        
        $db = $this->getConnection();
        $stmt = $db->prepare($sql);
        $stmt->bindParam("name", $name);
        $stmt->bindParam("description", $description);
         $stmt->bindParam("Created", $date);
        $stmt->execute();
        $db = null;
        echo 'ok';

    } catch(PDOException $e) {
        echo $e->getMessage();
    }

}	


function deleteSession($id) {

      $sql = " DELETE from session where id = '$id' ";

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