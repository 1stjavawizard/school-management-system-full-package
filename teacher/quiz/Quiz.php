<?php

class Quiz{
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
	
	

public function postUserQuiz(array $a,array $f){
						
			$target_dir = "uploads/quiz/";
			$uniqueimage = rand(1000,1000000)."quiz".basename($f["quiz_file"]["name"]);
			$target_file = $target_dir .$uniqueimage;
			$uploadOk = 1;
		
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			// Check if image file is a actual image or fake image
			if(isset($a["submit"])) {
				$check = getimagesize($f["quiz_file"]["tmp_name"]);
				if($check !== false) {
					echo "File is must not be an image- " . $check["mime"] . ".";
					$uploadOk = 1;
					
				} else {
					echo "File is an image.";
					$uploadOk = 0;
					 
				}
			}
			// Check if file already exists
			if (file_exists($target_file)){
				echo "Sorry, file already exists.";
				$uploadOk = 0;
			}
			
			if(filesize($target_file) == 0){
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
				if (move_uploaded_file($f["quiz_file"]["tmp_name"], $target_file)){
						
						$users_ip = $a['users_ip'];
						$sender_id = $a['sender_id'];
						$subject_id = $a['subject_id'];
						$class_id = $a['class_id'];
						$session_id = $a['session_id'];
						$term_id = $a['term_id'];
					    $question_number = $a['question_number'];
                        $question= $a['content'];
                        $option1 = $a['option1'];
                        $option2= $a['option2'];
                        $option3= $a['option3'];
                        $answer= $a['answer'];
						$quiz_file = $uniqueimage;
						$quiz_file_title = $a['quiz_file_title'];
                        $mark_per_quiz = $a['mark_per_quiz'];
                        $doc= true;
                        $created_on = date('Y-m-d H:i:s');
					
						
						
						
						
						
						 
	
	                      
	                  $sql = "INSERT INTO quiz2 (users_ip, sender_id, subject_id, class_id, session_id, term_id, question_number, question, option1, option2, option3, answer, doc, quiz_file, quiz_file_title, mark_per_quiz, created_on) VALUES (:users_ip, :sender_id, :subject_id, :class_id, :session_id, :term_id, :question_number, :question, :option1, :option2, :option3, :answer, :doc, :quiz_file, :quiz_file_title, :mark_per_quiz, :created_on)";
	        
	                 try{
					
						$db = $this->getConnection();
						$stmt = $db->prepare($sql);
                            $stmt->bindParam('users_ip',$users_ip);
							$stmt->bindParam('sender_id',$sender_id);
                            $stmt->bindParam('subject_id',$subject_id);
                            $stmt->bindParam('class_id',$class_id);
                            $stmt->bindParam('session_id',$session_id);
                            $stmt->bindParam('term_id',$term_id);
                            $stmt->bindParam('question_number',$question_number);
                            $stmt->bindParam('question',$question);
                            $stmt->bindParam('option1',$option1);               
                            $stmt->bindParam('option2',$option2); 
                            $stmt->bindParam('option3',$option3);
                            $stmt->bindParam('answer',$answer);
                            $stmt->bindParam('quiz_file',$quiz_file);
                            $stmt->bindParam('quiz_file_title',$quiz_file_title);               
                            $stmt->bindParam('mark_per_quiz',$mark_per_quiz); 
                             $stmt->bindParam('doc',$doc); 
                            $stmt->bindParam('created_on',$created_on);

						 $stmt->execute();
	                 }
	                 catch(PDOException $e){
	                     $e->getMessage();
	                 }
					
				} 
				
				elseif (filesize($target_file) == 0){
				    	
						$users_ip = $a['users_ip'];
						$sender_id = $a['sender_id'];
						$subject_id = $a['subject_id'];
						$class_id = $a['class_id'];
						$session_id = $a['session_id'];
						$term_id = $a['term_id'];
					    $question_number = $a['question_number'];
                        $question= $a['content'];
                        $option1 = $a['option1'];
                        $option2= $a['option2'];
                        $option3= $a['option3'];
                        $answer= $a['answer'];
					
                        $mark_per_quiz = $a['mark_per_quiz'];
                        $doc= false;
                        $created_on = date('Y-m-d H:i:s');
					
						
						
						
						
						
						 
	
	                      
	                  $sql = "INSERT INTO quiz2 (users_ip, sender_id, subject_id, class_id, session_id, term_id, question_number, question, option1, option2, option3, answer, doc, mark_per_quiz, created_on) VALUES (:users_ip, :sender_id, :subject_id, :class_id, :session_id, :term_id, :question_number, :question, :option1, :option2, :option3, :answer, :doc, :mark_per_quiz, :created_on)";
	        
	                 try{
					
						$db = $this->getConnection();
						$stmt = $db->prepare($sql);
                            $stmt->bindParam('users_ip',$users_ip);
							$stmt->bindParam('sender_id',$sender_id);
                            $stmt->bindParam('subject_id',$subject_id);
                            $stmt->bindParam('class_id',$class_id);
                            $stmt->bindParam('session_id',$session_id);
                            $stmt->bindParam('term_id',$term_id);
                            $stmt->bindParam('question_number',$question_number);
                            $stmt->bindParam('question',$question);
                            $stmt->bindParam('option1',$option1);               
                            $stmt->bindParam('option2',$option2); 
                            $stmt->bindParam('option3',$option3);
                            $stmt->bindParam('answer',$answer);
                                          
                            $stmt->bindParam('mark_per_quiz',$mark_per_quiz); 
                             $stmt->bindParam('doc',$doc); 
                            $stmt->bindParam('created_on',$created_on);

						 $stmt->execute();
	                 }
	                 catch(PDOException $e){
	                     $e->getMessage();
	                 }
					
			
			
					
		}
		
		
		
		
}


}


function getQuiz(){
    $sql = 'SELECT * from quiz2';
    try {
        $db = $this->getConnection();
        $stmt = $db->query($sql);
        $post = $stmt->fetchAll(PDO::FETCH_OBJ);
       return $post;
       
    } catch(PDOException $e) {
        echo 'somthing is wrong '. $e->getMessage();
    }

}

function getQuizById($id){

    $sql = "SELECT * from quiz2 where id ='$id' ";
    try {
        $db = $this->getConnection();
        $stmt = $db->query($sql);
        $post = $stmt->fetch(PDO::FETCH_OBJ);
      return $post;

       
    } catch(PDOException $e) {
        echo  $e->getMessage();
    }

}



function updateQuiz(array $post,array $f){
    date_default_timezone_set('Africa/Lagos');
	
	$target_dir = "uploads/quiz/";
			$uniqueimage = rand(1000,1000000)."quiz".basename($f["quiz_file_edit"]["name"]);
			$target_file = $target_dir .$uniqueimage;
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			// Check if image file is a actual image or fake image
			if(isset($post["submit"])){
				$check = getimagesize($f["quiz_file_edit"]["tmp_name"]);
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
			if ($f["quiz_file_edit"]["size"] > 800000){
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
                
                if (move_uploaded_file($f["quiz_file_edit"]["tmp_name"], $target_file)){
						
						$users_ip = $a['users_ip_edit'];
						$sender_id = $a['sender_id_edit'];
						$subject_id = $a['subject_id_edit'];
						$class_id = $a['class_id_edit'];
						$session_id = $a['session_id_edit'];
						$term_id = $a['term_id_edit'];
					    $question_number = $a['question_number_edit'];
                        $question= $a['content_edit'];
                        $option1 = $a['option1_edit'];
                        $option2= $a['option2_edit'];
                        $option3= $a['option3_edit'];
                        $answer= $a['answer_edit'];
						$quiz_file = $uniqueimage;
						$quiz_file_title = $a['quiz_file_title_edit'];
                        $mark_per_quiz = $a['mark_per_quiz'];
                        $doc= true;
                        $updated_on = date('Y-m-d H:i:s');
					
						
						
						
						
						
						 
	
	                      
	                  $sql = "UPDATE quiz2 SET users_ip =:users_ip, sender_id=:sender_id, subject_id=:subject_id, class_id=:class_id, session_id=:session_id, term_id=:term_id, question_number=:question_number, question=:question, option1=:option1, option2=:option2, option3=:option3, answer=:answer, doc=:doc, quiz_file=:quiz_file, quiz_file_title=:quiz_file_title, mark_per_quiz =:mark_per_quiz, updated_on=:updated_on";
	        
	                 try{
					
						$db = $this->getConnection();
						$stmt = $db->prepare($sql);
                            $stmt->bindParam('users_ip',$users_ip);
							$stmt->bindParam('sender_id',$sender_id);
                            $stmt->bindParam('subject_id',$subject_id);
                            $stmt->bindParam('class_id',$class_id);
                            $stmt->bindParam('session_id',$session_id);
                            $stmt->bindParam('term_id',$term_id);
                            $stmt->bindParam('question_number',$question_number);
                            $stmt->bindParam('question',$question);
                            $stmt->bindParam('option1',$option1);               
                            $stmt->bindParam('option2',$option2); 
                            $stmt->bindParam('option3',$option3);
                            $stmt->bindParam('answer',$answer);
                            $stmt->bindParam('quiz_file',$quiz_file);
                            $stmt->bindParam('quiz_file_title',$quiz_file_title);               
                            $stmt->bindParam('mark_per_quiz',$mark_per_quiz); 
                             $stmt->bindParam('doc',$doc); 
                            $stmt->bindParam('updated_on',$updated_on);

						 $stmt->execute();
	                 }
	                 catch(PDOException $e){
	                     $e->getMessage();
	                 }
					
				} 
				
					elseif (filesize($target_file) == 0){
				    	
						$users_ip = $a['users_ip'];
						$sender_id = $a['sender_id'];
						$subject_id = $a['subject_id'];
						$class_id = $a['class_id'];
						$session_id = $a['session_id'];
						$term_id = $a['term_id'];
					    $question_number = $a['question_number'];
                        $question= $a['content'];
                        $option1 = $a['option1'];
                        $option2= $a['option2'];
                        $option3= $a['option3'];
                        $answer= $a['answer'];
					
                        $mark_per_quiz = $a['mark_per_quiz'];
                        $doc= false;
                        $created_on = date('Y-m-d H:i:s');
					
						
						
						
						
						
						 
	
	                      
	                  $sql = "UPDATE quiz2 SET users_ip =:users_ip, sender_id=:sender_id, subject_id=:subject_id, class_id=:class_id, session_id=:session_id, term_id=:term_id, question_number=:question_number, question=:question, option1=:option1, option2=:option2, option3=:option3, answer=:answer, doc=:doc, mark_per_quiz =:mark_per_quiz, created_on=:created_on";
	        
	                 try{
					
						$db = $this->getConnection();
						$stmt = $db->prepare($sql);
                            $stmt->bindParam('users_ip',$users_ip);
							$stmt->bindParam('sender_id',$sender_id);
                            $stmt->bindParam('subject_id',$subject_id);
                            $stmt->bindParam('class_id',$class_id);
                            $stmt->bindParam('session_id',$session_id);
                            $stmt->bindParam('term_id',$term_id);
                            $stmt->bindParam('question_number',$question_number);
                            $stmt->bindParam('question',$question);
                            $stmt->bindParam('option1',$option1);               
                            $stmt->bindParam('option2',$option2); 
                            $stmt->bindParam('option3',$option3);
                            $stmt->bindParam('answer',$answer);
                                          
                            $stmt->bindParam('mark_per_quiz',$mark_per_quiz); 
                             $stmt->bindParam('doc',$doc); 
                            $stmt->bindParam('created_on',$created_on);

						 $stmt->execute();
	                 }
	                 catch(PDOException $e){
	                     $e->getMessage();
	                 }
					
			
			
					
		}
		
                
            }			
	
	        

}	


function deleteQuiz($id){

      $sql = " DELETE from quiz2 where id = '$id' ";

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