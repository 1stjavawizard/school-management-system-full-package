<?php

class Note{
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
	
	




function getNotes($towhom = 1){
    $sql = "SELECT * from noteapproval where towhom = '$towhom'";
    try {
        $db = $this->getConnection();
        $stmt = $db->query($sql);
        $post = $stmt->fetchAll(PDO::FETCH_OBJ);
       return $post;
       
    } catch(PDOException $e) {
        echo 'somthing is wrong '. $e->getMessage();
    }

}

function getNoteById($id){

    $sql = "SELECT * from noteapproval where id ='$id' ";
    try {
        $db = $this->getConnection();
        $stmt = $db->query($sql);
        $post = $stmt->fetch(PDO::FETCH_OBJ);
      return $post;

       
    } catch(PDOException $e) {
        echo  $e->getMessage();
    }

}



}
 ?>