<?php

class Scheme{
	public $db = null;

	
	private function getConnection(){
	    $host="localhost";
		$user="thiscode_root";
		$password="thiscode_password1";
		$database="thiscode_cms";
        $con = new PDO("mysql:host=$host;dbname=$database",$user,$password);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $con;		
	}
	
	

public function postUserScheme(array $a,array $f){
						
			$target_dir = "uploads/schemes/";
			$uniqueimage = rand(1000,1000000)."scheme_work".basename($f["doc"]["name"]);
			$target_file = $target_dir .$uniqueimage;
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			// Check if image file is a actual image or fake image
			if(isset($a["submit"])) {
				$check = getimagesize($f["doc"]["tmp_name"]);
				if($check !== false) {
					echo "File is an image - " . $check["mime"] . ".";
					$uploadOk = 1;
				} else {
					echo "File is not an image.";
					$uploadOk = 0;
				}
			}
			// Check if file already exists
			if (file_exists($target_file)){
				echo "Sorry, file already exists.";
				$uploadOk = 0;
			}
			// Check file size
		
			// Allow certain file formats
			if($imageFileType != "ppt" && $imageFileType != "pdf" && $imageFileType != "zip"
			&& $imageFileType != "doc" && $imageFileType !="docx") {
				echo "Sorry, only ppt,docs,pdf and zip files are allowed.";
				$uploadOk = 0;
			}

			if ($uploadOk == 0) {
				echo "Sorry, your file was not uploaded.";

			} else {
				if (move_uploaded_file($f["doc"]["tmp_name"], $target_file)){
						
						$user_id = $a['user_id'];
						$doc = $uniqueimage;
                        $units_id = $a['units_id'];
                        $subject_id= $a['subject_id'];
                        $session_id = $a['session_id'];
                        $academicsession_id= $a['academicsession_id'];
                        $title= $a['title'];
                        $content= $a['content'];
                        $towhom= $a['towhom'];
                        $createdby= $a['createdby'];                        
                        $created = date('Y-m-d H:i:s');
					
						
						
						
						
						
						 
	
	                      
	                  $sql = "INSERT INTO scheme_work (user_id, units_id, session_id, subject_id, academicsession_id, title, content, doc, towhom, created, createdby) VALUES (:user_id,:units_id, :session_id, :subject_id, :academicsession_id, :title, :content, :doc, :towhom,:created, :createdby)";
	        
	                 try{
					
						$db = $this->getConnection();
						$stmt = $db->prepare($sql);
                            $stmt->bindParam('user_id',$user_id);
							$stmt->bindParam('doc',$doc);
                            $stmt->bindParam('units_id',$units_id);
                            $stmt->bindParam('subject_id',$subject_id);
                            $stmt->bindParam('session_id',$session_id);
                            $stmt->bindParam('academicsession_id',$academicsession_id);
                            $stmt->bindParam('title',$title);
                            $stmt->bindParam('content',$content);
                            $stmt->bindParam('towhom',$towhom);               
                            $stmt->bindParam('createdby',$createdby); 
                            $stmt->bindParam('created',$created);							

						 $stmt->execute();
	                 }
	                 catch(PDOException $e){
	                     $e->getMessage();
	                 }
					
				} else {
					echo "Sorry, there was an error uploading your file.";
				}
					
		}
}





function getScheme(){
    $sql = 'SELECT * from scheme_work';
    try {
        $db = $this->getConnection();
        $stmt = $db->query($sql);
        $post = $stmt->fetchAll(PDO::FETCH_OBJ);
       return $post;
       
    } catch(PDOException $e) {
        echo 'somthing is wrong '. $e->getMessage();
    }

}

function getSchemeById($id){

    $sql = "SELECT * from scheme_work where id ='$id' ";
    try {
        $db = $this->getConnection();
        $stmt = $db->query($sql);
        $post = $stmt->fetch(PDO::FETCH_OBJ);
      return $post;

       
    } catch(PDOException $e) {
        echo  $e->getMessage();
    }

}



function updateScheme(array $post,array $f){
    date_default_timezone_set('Africa/Lagos');
	
	$target_dir = "uploads/schemes/";
			$uniqueimage = rand(1000,1000000)."scheme_work".basename($f["doc"]["name"]);
			$target_file = $target_dir .$uniqueimage;
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			// Check if image file is a actual image or fake image
			if(isset($post["submit"])){
				$check = getimagesize($f["doc"]["tmp_name"]);
				if($check !== false) {
					echo "File is an image - " . $check["mime"] . ".";
					$uploadOk = 1;
				} else {
					echo "File is not an image.";
					$uploadOk = 0;
				}
			}
			// Check if file already exists
			if (file_exists($target_file)){
				unlink($target_file);
				echo "file deleted";
				$uploadOk = 0;
			}
			// Check file size
			if ($f["doc"]["size"] > 800000){
				echo "Sorry, your file is too large.";
				$uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "ppt" && $imageFileType != "pdf" && $imageFileType != "zip"
			&& $imageFileType != "doc" && $imageFileType !="docx") {
				echo "Sorry, only ppt, pdf,docs and zip files are allowed.";
				$uploadOk = 0;
			}

			if ($uploadOk == 0){
				echo "Sorry, your file was not uploaded.";

			}

            else{
				if (move_uploaded_file($f["doc"]["tmp_name"], $target_file)){
					
					
					 $id = $post['id'];        
					$user_id = $post['user_id'];
					$doc = $uniqueimage;
					$units_id = $post['units_id'];
					$subject_id= $post['subject_id'];
					$academicsession_id= $post['academicsession_id'];
					$title= $post['title'];
					$content= $post['content'];
					$towhom= $post['towhom'];
					$createdby= $post['createdby'];                        
					$created = date('Y-m-d H:i:s');

					$sql = "UPDATE scheme_work SET user_id=:user_id,units_id=:units_id, session_id=:session_id, subject_id=:subject_id, academicsession_id=:academicsession_id, title=:title, content=:content, doc=:doc, towhom=:towhom, createdby=:createdby,created=:created where id= '$id'";
					try {
						
						   $db = $this->getConnection();
							$stmt = $db->prepare($sql);	 	 
							 $stmt->bindParam('user_id',$user_id);
							$stmt->bindParam('doc',$doc);
							$stmt->bindParam('units_id',$units_id);
							$stmt->bindParam('subject_id',$subject_id);
							$stmt->bindParam('academicsession_id',$academicsession_id);
							$stmt->bindParam('title',$title);
							$stmt->bindParam('content',$content);
							$stmt->bindParam('towhom',$towhom);               
							$stmt->bindParam('createdby',$createdby); 
							$stmt->bindParam('created',$created);	
					   
						$stmt->execute();
						
						echo 'ok';

					} 
				catch(PDOException $e){
						echo $e->getMessage();
					}
					
				}
			}			
	
	        

}	


function deleteScheme($id){

      $sql = " DELETE from scheme_work where id = '$id' ";

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

public function getUsersById($id){
    $sql = "SELECT * FROM user where id='$id'";
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