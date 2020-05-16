<?php
class User{
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
	
	
	public function postUseritems(array $a,array $f){
						
			$target_dir = "uploads/passport/";
			$uniqueimage = "user".rand(1000,1000000).basename($f["passport"]["name"]);
			$target_file = $target_dir .$uniqueimage;
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			// Check if image file is a actual image or fake image
			if(isset($a["submit"])) {
				$check = getimagesize($f["passport"]["tmp_name"]);
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
			if ($f["passport"]["size"] > 500000) {
				echo "Sorry, your file is too large.";
				$uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
				echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				$uploadOk = 0;
			}

			if ($uploadOk == 0) {
				echo "Sorry, your file was not uploaded.";

			} else {
				if (move_uploaded_file($f["passport"]["tmp_name"], $target_file)){
						
						$name = $a['name'];
						$passport = $uniqueimage;
                        $username = $a['username'];
                        $role= $a['role'];
                        $password= $a['password'];
                        $hashpassword= md5($a['password']);
                        $plainpassword= $a['password'];
                        $parentName= $a['parentName'];                        
                        $created = date('Y-m-d H:i:s');
					
						
						
						
						
						
						 
	
	                      
	                  $sql = "INSERT INTO user (name, passport, username, role, password, hashpassword, plainpassword, parentName,Created) VALUES (:name, :passport, :username, :role, :password, :hashpassword, :plainpassword,:parentName,:Created)";
	        
	                 try{
					
						$db = $this->getConnection();
						$stmt = $db->prepare($sql);
                            $stmt->bindParam('name',$name);
							$stmt->bindParam('passport',$passport);
                            $stmt->bindParam('username',$username);
                            $stmt->bindParam('role',$role);
                            $stmt->bindParam('password',$password);
                            $stmt->bindParam('hashpassword',$hashpassword);
                            $stmt->bindParam('plainpassword',$plainpassword);
                            $stmt->bindParam('parentName',$parentName);               
                           
                            $stmt->bindParam('Created',$created);							

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




function getUserItems(){
   
    try {
         $sql = "SELECT * from user";
        $db = $this->getConnection();
        $stmt = $db->query($sql);
        $data = $stmt->fetchAll(PDO::FETCH_OBJ);
       return $data; 
       
       
    } 
    catch(PDOException $e){
        echo 'somthing is wrong '. $e->getMessage();
    }

}




function getUserByid($id){

    $sql = "SELECT * from user where id ='$id' ";
    try {
        $db = $this->getConnection();
        $stmt = $db->query($sql);
        $post = $stmt->fetch(PDO::FETCH_OBJ);
      return $post;
       
    } catch(PDOException $e) {
        echo  $e->getMessage();
    }

}



function updateUserById(array $op){
    date_default_timezone_set('Africa/Lagos');
	
	
	
	

	

	 
	
	    $id = $op['id'];
        $name = $op['name'];
		$username = $op['username'];
		$role = $op['role'];
		$password = $op['password'];
		$hashpassword = md5($op['password']);
		$plainpassword = $op['password'];
		$parentName = $op['parentName'];
		$date = date('Y-m-d H:i:s');
        $time = time();

  					
    $sql = "UPDATE user SET name=:name, username=:username, role=:role, password=:password, hashpassword=:hashpassword, plainpassword=:plainpassword, parentName=:parentName, Created= :Created  WHERE id = :id";
	
    try {
        
       $db = $this->getConnection();
	   $setup = $db->prepare($sql);	
	   
		 $setup->bindParam("name",$_POST['name']);
		 $setup->bindParam("id",$id);
		 $setup->bindParam("username",$username);
		 $setup->bindParam("role",$role);
		 $setup->bindParam("password",$password);
		 $setup->bindParam("hashpassword",$hashpassword);
		 $setup->bindParam("plainpassword",$plainpassword);
		 $setup->bindParam("parentName",$parentName);
         $setup->bindParam("Created", $date);
        $setup->execute();
        
        echo 'ok';

    } catch(PDOException $e) {
        echo $e->getMessage();
    }

}	



function deleteUser($id) {

      $sql = " DELETE from user where id = '$id' ";

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



function getUsersRole(){
	$sql = "select * from categoriess";
	
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