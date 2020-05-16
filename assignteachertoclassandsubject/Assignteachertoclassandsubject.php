<?php
class Assignteachertoclassandsubject{
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
	
	


function postAssignteachertoclassandsubject(array $post){
  date_default_timezone_set('Africa/Lagos');          
		  	$user_id=$post['user_id'];
			$unit_id=$post['unit_id'];
			$subject_id=$post['subject_id'];
			$name=$post['name'];
			$description=$post['description'];
			$Created= date('Y-m-d H:i:s');
			$academicsession_id= $post['academicsession_id'];
			$session_id= $post['session_id'];
			$schoollevel_id= $post['schoollevel_id'];
			$schoollevelname= $post['schoollevelname'];
			$username= $post['username'];
			$unitname= $post['unitname'];
			$sessionname= $post['sessionname'];
			 $academicsessionname=$post['academicsessionname'];
			$subjectname= $post['subjectname'];
 		
		
 
    $sql = "INSERT INTO assignteachertoclassandsubject (user_id, unit_id,subject_id,name,description, Created,academicsession_id,session_id,schoollevel_id,schoollevelname,username,unitname,sessionname,academicsessionname,subjectname) values (:user_id, :unit_id,:subject_id,:name,:description, :Created,:academicsession_id,:session_id,:schoollevel_id,:schoollevelname,:username,:unitname,:sessionname,:academicsessionname,:subjectname)";
    try {
       
        $db = $this->getConnection();
        $stmt = $db->prepare($sql);	 	 
			$stmt->bindParam("user_id",$user_id);
			$stmt->bindParam("unit_id",$unit_id);
			$stmt->bindParam("subject_id",$subject_id);
			$stmt->bindParam("name",$name);
			$stmt->bindParam("description",$description);
			$stmt->bindParam("Created",$Created);
			$stmt->bindParam("academicsession_id",$academicsession_id);
			$stmt->bindParam("session_id",$session_id);
			$stmt->bindParam("schoollevel_id",$schoollevel_id);
			$stmt->bindParam("schoollevelname",$schoollevelname);
			$stmt->bindParam("username",$username);
			$stmt->bindParam("unitname",$unitname);
			$stmt->bindParam("sessionname",$sessionname);
			$stmt->bindParam("academicsessionname",$academicsessionname);
			$stmt->bindParam("subjectname",$subjectname);
        $stmt->execute();
        $db = null;
       

    } catch(PDOException $e) {
        echo $e->getMessage();
    }
}





function getAssignteachertoclassandsubject(){
    $sql = 'SELECT * from assignteachertoclassandsubject';
    try {
        $db = $this->getConnection();
        $stmt = $db->query($sql);
        $post = $stmt->fetchAll(PDO::FETCH_OBJ);
       return $post;
       
    } catch(PDOException $e) {
        echo 'somthing is wrong '. $e->getMessage();
    }

}

function getAssignteachertoclassandsubjectById($id){

    $sql = "SELECT * from assignteachertoclassandsubject where id ='$id' ";
    try {
        $db = $this->getConnection();
        $stmt = $db->query($sql);
        $post = $stmt->fetch(PDO::FETCH_OBJ);
      return $post;

       
    } catch(PDOException $e) {
        echo  $e->getMessage();
    }

}



function updateAssignteachertoclassandsubject(array $post){
    date_default_timezone_set('Africa/Lagos');
	         $id = $post['id'];        
			$user_id=$post['user_id'];
			$unit_id=$post['unit_id'];
			$subject_id=$post['subject_id'];
			$name=$post['name'];
			$description=$post['description'];
			$Created= date('Y-m-d H:i:s');
			$academicsession_id= $post['academicsession_id'];
			$session_id= $post['session_id'];
			$schoollevel_id= $post['schoollevel_id'];
			$schoollevelname= $post['schoollevelname'];
			$username= $post['username'];
			$unitname= $post['unitname'];
			$sessionname= $post['sessionname'];
			$academicsessionname=$post['academicsessionname'];
			$subjectname= $post['subjectname'];

    $sql = "UPDATE assignteachertoclassandsubject SET user_id=:user_id,unit_id= :unit_id,subject_id= :subject_id,name= :name,description= :description,Created= :Created,academicsession_id= :academicsession_id, session_id=:session_id, schoollevel_id=:schoollevel_id, schoollevelname=:schoollevelname,username =:username, unitname=:unitname, sessionname=:sessionname, academicsessionname=:academicsessionname, subjectname=:subjectname  where id= '$id'
";
    try {
        
           $db = $this->getConnection();
            $stmt = $db->prepare($sql);	 	 
			$stmt->bindParam("user_id",$user_id);
			$stmt->bindParam("unit_id",$unit_id);
			$stmt->bindParam("subject_id",$subject_id);
			$stmt->bindParam("name",$name);
			$stmt->bindParam("description",$description);
			$stmt->bindParam("Created",$Created);
			$stmt->bindParam("academicsession_id",$academicsession_id);
			$stmt->bindParam("session_id",$session_id);
			$stmt->bindParam("schoollevel_id",$schoollevel_id);
			$stmt->bindParam("schoollevelname",$schoollevelname);
			$stmt->bindParam("username",$username);
			$stmt->bindParam("unitname",$unitname);
			$stmt->bindParam("sessionname",$sessionname);
			$stmt->bindParam("academicsessionname",$academicsessionname);
			$stmt->bindParam("subjectname",$subjectname);
       
        $stmt->execute();
        
        echo 'ok';

    } catch(PDOException $e) {
        echo $e->getMessage();
    }

}	


function deleteAssignteachertoclassandsubject($id){

      $sql = " DELETE from assignteachertoclassandsubject where id = '$id' ";

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


function getAllacademicsession(){
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
}
 ?>