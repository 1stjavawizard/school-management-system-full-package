<?php

session_start();

if(isset($_POST['username']) && isset($_POST['password']) && $_POST['username']=="" && $_POST['password']==""){
              $_SESSION['users'] = "Confab Students";
    
     	  header("Location: $location");
    
    
}
elseif(isset($_POST['username']) && isset($_POST['password']) && $_POST['username']=="" && $_POST['password']==""){
              $_SESSION['users'] = "Confab Teachers";
    
     	  header("Location: https://www.thiscodeschool.com/confab/teacher/");
    
    
}
elseif(isset($_POST['username']) && isset($_POST['password']) &&  $_POST['username'] !=="" && $_POST['password'] !==""){
	header("Location: https://www.thiscodeschool.com/confab/");
		echo '<script>
	      window.alert("Wrong password or username");
		  var username = document.getElementsByClassName("logininput")[0].value;
	    var password = document.getElementsByClassName("logininput")[1].value;
	      
           username = "";
		   password ="";
	</script>';
 
}


?>


<!doctype html>
<html>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>

<title>Confabs secondary schools...</title>
   
<meta name="keywords" content="thiscodeschool build sofwares,thiscodeschool teach to code, learn html,learn css,learn javascripts"/>

<link rel="shortcut icon" href="https://www.thiscodeschool.com/patterns/favicon.png" type="image/x-icon">

<link rel="stylesheet" href="https://www.thiscodeschool.com/css/bootstrap.min.css"/>
<script src="https://www.thiscodeschool.com/js/jquery-2.1.1.js"></script>
<script src="https://www.thiscodeschool.com/js/jquery-3.1.1.min.js"></script>

<script src="https://www.thiscodeschool.com/js/bootstrap.min.js"></script>

<script src="https://www.thiscodeschool.com/js/sweetalert2.all.min.js"></script>


<style>
body{
	
}
.same{
	width:100%;
	height:40vh;
	text-align:center;
	font-family:pristina;
	color:purple;
	
	font-size:60px;
}
textarea{
	width:100%;
	height:5vh;
}
#first{
	background-color:transparent;
	line-height:3;
}
#second,#third{
	background-color:transparent;
	text-align:left;
	font-size:2rem;
}


h4{
	font-size:29px;
	font-weight:bold;
	font-family:calibri;
	color:white;
	text-transform:uppercase;
	text-align:center;
}
footer{
	color:white;
	font-style:italic;
}

.carousel-control{
	color:white;
}

.thesame:not(.fm3){
    
    background-color:gray;
    color:white;
    outline:0px;
    border-width:0px;
    border-bottom:2px solid white;
    
}
.fm3{
    background-color:gray;
    color:white;
    outline:0px;
    border-width:0px;
    border:2px solid white;
    box-shadow:2px 2px solid gray;
}
.thesame:hover{
    border-radius:8px;
   color:white;
    outline:0px;
    border-width:0px;
    border-bottom:2px solid red;
    background-color:red;
    
}

[placeholder]{
    color:white;
    font-size:2rem;
}

#modalId{
	background-image:url(patterns/word_map.png);
}
</style>
</head>
<body>

<div class="modal fade" id="modalId">
<div class="modal-dialog">
<div class="modal-content modal-md modal-content-center" style="background-color:gray" id="roundborder">



<div class="modal-header" style="border-color:transparent;">
 
</div>


<div class="modal-body">

<!-- carousel containers -->
<div class="carousel slide" data-ride="carousel" id="myId">
<!-- first carousel indicators,inside the indicators are the 
data-target,data-slide-to and others
 -->
 <div class="carousel-indicators">
	
	
 </div>
 
 <div class="carousel-inner">
    <div class="item active same" id="first"> 
	
	<div class="row">
                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-md-12">

             <div class="ibox">
                    
			<div class="">
			   <form action="" method="post">
				<legend style="color:white;text-align:center"> PLEASE LOGIN </title>
				<div class="form-group">
				<input type="text" style="color:black" name="username" placeholder="example@sample.com" class="form-control" id="emailId"/>
				</div>
				<div class="form-group">
				<input type="password" style="color:black" name="password" placeholder="your password" class="form-control" id="passwdId"/>
				</div>
				
				<div class="row">
				<div class="col-md-12 col-xs-12 col-sm-12">
				<button class="btn form-control btn-danger btn-block">Login<span style="color:yellow;font-size:25px">!</span></button>
				</div>
				
				</div>
				</form>	
            </div>
		   </div>
                
            </div>
             
			</div>
			
			
	 
	
	  
	</div>
	
	
	
	
	
	
	
	<!-- carousel controls--
 it contain class with value of carousel-control,
 -->
	<!--<a href="#myId" class="left carousel-control" data-slide="carousel"><span class="put_icons"></span></a>
    <a href="#myId" class="right carousel-control" data-slide="carousel"><span class="put_icons"></span></a>
    -->
 </div>
    
 </div>
 
 
 
</div>


<div class="modal-footer" style="border-color:transparent">
<marquee style="color:blue;"> Note! The genuine information you provided would be highly appreciated, thanks.</marquee>
<footer>&copy; all right reserved ThisCodeSchool <?php echo date("d/m/Y")?> </footer>
</div>

 
</div>
</div> 
</div>
 <script>
 (function(){
	 $(document).ready(function(){
		 $("#modalId").modal({
			 backdrop:'static'
		 });
	 })
 })();
 
   
/*
 $(function() { //create a function that waits for the DOM to be ready

         var fullname = $('#fullname').val(),
                emailid = $('#emailid').val(),
				phoneid = $('#phoneid').val(),
				mbodyid = $('#mbodyid').val(),
                smb = $('#submit');

           smb.on('click', function(e){ //Capture the submit button click
              e.preventDefault(); //prevent the form to be sent when you click

              //perform an Ajax POST. More info here : https://api.jquery.com/jquery.post/
              $.post( "process.php", 
                    {fullname: fullname, emailid: emailid,phoneid: phoneid, mbodyid: mbodyid},
                    function( data ) { 
                      //In case of success, data will return what you defined in your php script. That'll allow you to trigger your swal notification
                      if(data.state == 1) {
                         //swal("Good job!", "Login Success!", "success");
						 //alert("Good job!"+ "Login Success!"+ "success");
                         //redirect here
                         window.location.href = "http://localhost/real/";
                      }
					  else if(data.state == 0){
						  alert("somthing")
					  }
                      else
                         //swal("Oops...", "Invalid credentials!", "error");
					    alert("Oops..."+" Invalid credentials!"+ "error");
                    });
              });});
*/
</script>
</body>
</html>












