
<?php

function getConnection(){
	    $host="localhost";
		$user="thiscode_root";
		$password="thiscode_password1";
		$database="thiscode_cms";
        $con = new PDO("mysql:host=$host;dbname=$database",$user,$password);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $con;		
	}
	
$target_dir = "uploads/passport/";
$uniqueimage = rand(1000,1000000).basename($_FILES["passport"]["name"]);
$target_file = $target_dir .$uniqueimage;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["passport"]["tmp_name"]);
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
if ($_FILES["passport"]["size"] > 500000) {
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
    if (move_uploaded_file($_FILES["passport"]["tmp_name"], $target_file)){
		     $passport = $uniqueimage;
		     $username = $_POST['username'];
			$role = $_POST['role'];
			$password = $_POST[ 'password'];
			$hashpassword = md5($_POST['password']);
			$plainpassword = $_POST['password'];
			$parentname = $_POST['parentName'];
			$name = $_POST['name'];
			//$sql1 ="INSERT uploading (name,email,file_name) VALUES ('".$name."','".$email."','".$path."')";
			
			
			$sql = "INSERT INTO user(name, passport, username, role, password, hashpassword, plainpassword, parentName) VALUES ('$name','$passport','$username','$role','$password','$hashpassword','$password','$parentname')";
	         $db = getConnection();
			$result = $db->query($sql);
         header("Location: https://www.thiscodeschool.com/confab/users/");
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>