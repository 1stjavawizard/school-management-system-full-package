<?php
class Categoriess{
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
	
	


function postcategoriessItems(array $post){
  date_default_timezone_set('Africa/Lagos');          
		    $name = $post['name'];
			$description = $post['description'];
			$date = date('Y-m-d H:i:s');
            $time = time();
         


    $sql = "INSERT INTO categoriess (name, description, dateCreated) values (:name, :description, :dateCreated)";
    try {
        $paid = false;
        $db = $this->getConnection();
        $stmt = $db->prepare($sql);
        $stmt->bindParam("name", $name);
        $stmt->bindParam("description", $description);
        $stmt->bindParam("dateCreated", $date);
        $stmt->execute();
        $db = null;
       

    } catch(PDOException $e){
        echo $e->getMessage();
    }
}





function getcategoriessItems(){
    $sql = 'SELECT * from categoriess ';
    try {
        $db = $this->getConnection();
        $stmt = $db->query($sql);
        $post = $stmt->fetchAll(PDO::FETCH_OBJ);
       return $post;
       
    } catch(PDOException $e) {
        echo 'somthing is wrong '. $e->getMessage();
    }

}

function getcategoriessbyid($id){

    $sql = "SELECT * from categoriess where id ='$id' ";
    try {
        $db = $this->getConnection();
        $stmt = $db->query($sql);
        $post = $stmt->fetch(PDO::FETCH_OBJ);
      return $post;

       
    } catch(PDOException $e) {
        echo  $e->getMessage();
    }

}



function updatecategoriess(array $post){
    date_default_timezone_set('Africa/Lagos');
	    $id = $post['id'];
        $name = $post['name'];
		$description = $post['description'];
		$date = date('Y-m-d H:i:s');
        $time = time();


    $sql = "UPDATE categoriess SET name=:name, description=:description, dateCreated=:dateCreated where id= '$id'";
    try {
        
        $db = $this->getConnection();
        $stmt = $db->prepare($sql);
        $stmt->bindParam("name", $name);
        $stmt->bindParam("description", $description);
         $stmt->bindParam("dateCreated", $date);
        $stmt->execute();
        $db = null;
        echo 'ok';

    } catch(PDOException $e) {
        echo $e->getMessage();
    }

}	


function deletecategoriess($id) {

      $sql = " DELETE from categoriess where id = '$id' ";

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