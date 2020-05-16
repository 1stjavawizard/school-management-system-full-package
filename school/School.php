<?php
class School{
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
	
	
	public function postschoolitems(array $a,array $f){
						
			$target_dir = "uploads/schoollogo/";
			$uniqueimage = "school".rand(1000,1000000).basename($f["logo"]["name"]);
			$target_file = $target_dir .$uniqueimage;
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			// Check if image file is a actual image or fake image
			if(isset($a["submit"])) {
				$check = getimagesize($f["logo"]["tmp_name"]);
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
			if ($f["logo"]["size"] > 500000) {
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
				if (move_uploaded_file($f["logo"]["tmp_name"], $target_file)){
						
						$schoolname = $_POST['schoolname'];
                        $regnumber = $_POST['regnumber'];
                        $motto= $_POST['motto'];
                        $schooltype= $_POST['schooltype'];
                        $dateofestablishment= $_POST['dateofestablishment'];
                        $ownby= $_POST['ownby'];
                        $mastername= $_POST['mastername'];
                        $signature= $_POST['signature'];
                        $country= $_POST['country'];
                        $state= $_POST['state'];
                        $city= $_POST['city'];
                        $address= $_POST['address'];
                        $phonenumbers= $_POST['phonenumbers'];
                        $emails= $_POST['emails'];
                        $domain= $_POST['domain'];
                        $website= $_POST['website'];
                        $facebook= $_POST['facebook'];
                        $twitter= $_POST['twitter'];
                        $logo = $uniqueimage;
                        $vision= $_POST['vision'];
                        $mission= $_POST['mission'];
                        $aboutus= $_POST['aboutus'];
                        $created = date('Y-m-d H:i:s');
					
						
						
						
						
						
						 
	
	                      
	
	                  $sql = "INSERT INTO school (schoolname, regnumber, motto, schooltype, dateofestablishment, ownby, mastername, signature,country,state,city,address,phonenumbers, emails, domain, website, facebook,twitter,logo, vision, mission, aboutus, created)  VALUES (:schoolname,:regnumber,:motto,:schooltype,:dateofestablishment,:ownby,:mastername, :signature,:country,:state, :city, :address,:phonenumbers, :emails,:domain,:website,:facebook,:twitter,:logo,:vision,:mission,:aboutus, :created)";
	                  

						//$sql1 ="INSERT uploading (name,email,file_name) VALUES ('".$name."','".$email."','".$path."')";
						//$sql = "INSERT INTO `school`(`schoolname`, `regnumber`, `motto`, `schooltype`, `dateofestablishment`, `ownby`, `mastername`, `signature`, `country`, `state`, `city`, `address`, `phonenumbers`, `emails`, `domain`, `website`, `facebook`, `twitter`, `logo`, `vision`, `mission`, `aboutus`, `created`) VALUES (`schoolname`, `regnumber`, `motto`, `schooltype`, `dateofestablishment`, `ownby`, `mastername`, `signature`, `country`, `state`, `city`, `address`, `phonenumbers`, `emails`, `domain`, `website`, `facebook`, `twitter`, `logo`, `vision`, `mission`, `aboutus`, `created`)";
						
					//$sql = "INSERT INTO school(schoolname, regnumber, motto, schooltype,dateofestablishment,ownby,mastername,signature,country,state,city,address,phonenumbers,emails,domain,website,facebook,twitter,logo,vision,mission,aboutus,created) VALUES ('$schoolname', '$regnumber', '$motto', '$schooltype,'$dateofestablishment,'$ownby,'$mastername','$signature','$country','$state','$city','$address','$phonenumbers','$emails','$domain','$website','$facebook','$twitter','$logo','$vision','$mission','$aboutus','$created')";
						$db = $this->getConnection();
						$stmt = $db->prepare($sql);
                            $stmt->bindParam('schoolname',$schoolname);
                            $stmt->bindParam('regnumber',$regnumber);
                            $stmt->bindParam('motto',$motto);
                            $stmt->bindParam('schooltype',$schooltype);
                            $stmt->bindParam('dateofestablishment',$dateofestablishment);
                            $stmt->bindParam('ownby',$ownby);
                            $stmt->bindParam('mastername',$mastername);
                            $stmt->bindParam('signature',$signature);
                            $stmt->bindParam('country',$country);
                            $stmt->bindParam('state',$state);
                            $stmt->bindParam('city',$city);
                            $stmt->bindParam('address',$address);
                            $stmt->bindParam('phonenumbers',$phonenumbers);
                            $stmt->bindParam('emails',$emails);
                            $stmt->bindParam('domain',$domain);
                            $stmt->bindParam('website',$website);
                            $stmt->bindParam('facebook',$facebook);
                            $stmt->bindParam('twitter',$twitter);
                            $stmt->bindParam('logo',$logo);
                            $stmt->bindParam('vision',$vision);
                            $stmt->bindParam('mission',$mission);
                            $stmt->bindParam('aboutus',$aboutus);
                            $stmt->bindParam('created',$created);							

						 $stmt->execute();
					header("Location: https://www.thiscodeschool.com/confab/school/");
				} else {
					echo "Sorry, there was an error uploading your file.";
				}
					
		}
}




function getSchoolItems(){
   
    try {
         $sql = "SELECT * from school";
        $db = $this->getConnection();
        $stmt = $db->query($sql);
        $data = $stmt->fetchAll(PDO::FETCH_OBJ);
       return $data; 
       
       
    } 
    catch(PDOException $e){
        echo 'somthing is wrong '. $e->getMessage();
    }

}




function getSchoolByid($id){

    $sql = "SELECT * from school where id ='$id' ";
    try {
        $db = $this->getConnection();
        $stmt = $db->query($sql);
        $post = $stmt->fetch(PDO::FETCH_OBJ);
      return $post;
       
    } catch(PDOException $e) {
        echo  $e->getMessage();
    }

}



function updateSchool(array $op){
    date_default_timezone_set('Africa/Lagos');
	    $id = $op['id'];
        $schoolname = $op['schoolname'];
		$regnumber = $op['regnumber'];
		$date = date('Y-m-d H:i:s');
        $time = time();

  					
    $sql = "UPDATE school SET schoolname=:schoolname, regnumber=:regnumber, created=:Created where id= '$id'";
    try {
        
        $db = $this->getConnection();
        $stmt = $db->prepare($sql);
        $stmt->bindParam("schoolname", $schoolname);
        $stmt->bindParam("regnumber", $regnumber);
         $stmt->bindParam("Created", $date);
        $stmt->execute();
        
        echo 'ok';

    } catch(PDOException $e) {
        echo $e->getMessage();
    }

}	



function deleteSchool($id) {

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