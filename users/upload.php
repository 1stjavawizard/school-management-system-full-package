<?php
// file name
//$filename = $_FILES['file']['name'];

// Location
//$location = 'uploads/'.$filename;

// file extension
//$file_extension = pathinfo($location, PATHINFO_EXTENSION);
//$file_extension = strtolower($file_extension);

// Valid image extensions
//$image_ext = array("jpg","png","jpeg","gif");

//$response = 0;
//if(in_array($file_extension,$image_ext)){
  // Upload file
 // if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
  //  $response = $location;
   
  //}
//}
//echo $response;

class Noteserver{
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
	public function getUsers(){
	$sql = "select * from user";
	$db = $this->db;
	$query = $db->query($sql);
	$fetch = $query->fetchAll(PDO::FETCH_OBJ);
	return $fetch;
}
}



$server = new Noteserver();

$data = $server->getUsers();

   foreach ($data as $d){
       echo ($d->name);
       
   }


?>
