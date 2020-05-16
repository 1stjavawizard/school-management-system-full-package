
<?php


session_start();


if(!isset($_SESSION['users'])){
    session_destroy();
	
	header("Location: https://www.thiscodeschool.com/confab/");
}
else{
	 $user = "The user of ".$_SESSION['users'];
}



include_once('Note.php');
$assignteachertoclassandsubject = new Note();

 ?>
<!DOCTYPE html>
<html>

<head>


	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>School Student's Note</title>
	

<!-- Latest compiled and minified CSS -->
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
<link href="https://www.thiscodeschool.com/css/animate.css" rel="stylesheet">

<link href="https://www.thiscodeschool.com/css/style.css" rel="stylesheet">
<link href="https://www.thiscodeschool.com/css/plugins/toastr/toastr.min.css" rel="stylesheet">
<link href="https://www.thiscodeschool.com/css/plugins/chartist/chartist.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.4.456/pdf_viewer.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">


<style>

    .ibox-title{
        background-color: #2f4050;
        color:white;
        font-family: pristina;
    }
</style>
</head>
<body>

<div id="wrapper">
    <!-- include navigation -->

    

        <!-- Page wrapper -->
       <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <i class="fa fa-graduation-cap" style="color:blue;font-size:4rem"></i>
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo "Welcome!";?></strong>
                             </span> <span class="text-muted text-xs block">Users<b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            
                            <li><a href="https://www.thiscodeschool.com/confab/logout.php">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        TSC+
                    </div>
                </li>
               
                
				 
				<li>
                    <a href="#"> <i class="fa fa-graduation-cap"></i> <span class="nav-label">School Students</span>
                     <span class="fa arrow"></span>
                    </a>
                    
                    
                    <ul class="nav nav-second-level collapse">
                        <li><a href="https://www.thiscodeschool.com/confab/student/">Home Page</a></li>
                        <li><a href="https://www.thiscodeschool.com/confab/student/quiz/">Quiz</a></li>
                        <li><a href="https://www.thiscodeschool.com/confab/student/note/">Notes</a></li>
                        <li><a href="https://www.thiscodeschool.com/confab/student/scheme/">Scheme Of Wrok</a></li>
                        
                    </ul>
                </li>
				
				
                
			</ul>

        </div>
    </nav>

         <div id="page-wrapper" class="gray-bg">
		 <!-- top navigations-->
		 <div class="row border-bottom">
        <nav class="navbar navbar-static-top  " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
               

                <li>
                    <a href="https://www.thiscodeschool.com/confab/logout.php">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>
        </div>
		  <!-- main content --> 
        <div class="wrapper wrapper-content">
        <div class="row">
		     <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
				<h1>Students Note 
					
					</h1>
             </div>
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="ibox ">
                        <div class="ibox-title" style="color:white">
                            <h5>Welcome <?php echo "you are on students page!"?></h5>
                        </div>
                        

                        
                    </div>
                </div>
            </div>



        <div class="row">
       		
			


   
  
								<!-- table starts-->
							<div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    
                                    
                                    <table class="table table-striped" id="mydata">
									
									<thead>
										<tr>
											<td>S/N</td>
											<td>Name</td>											
											<td>Preview</td>
											<td>Action</td>
										</tr>
									</thead>
									
                                       
										
										
                                        <tbody id="show_data">
                                    
                                        </tbody>
                                    </table>
                                </div>
                            </div>  <!-- tops -->
	
					<div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                              <div>
                                  <a href="https://www.thiscodeschool.com/confab/student/note/" class="btn btn-info col-sm-6 col-md-4 col-lg-2" id="cancelit" style="display:none">Cancel pdf</a>
                              </div>
                                   <canvas id="pdfviewer">
                                       
                                    
                                   </canvas>
                                   
                                   
                                   
                                </div>
                            </div>  <!-- tops -->
   


      
          











             
        </div>





             



                <div class="footer">
                <div class="pull-right">
                    The best automated sofware for schools...
                </div>
                <div>
                    <strong>All right reserved </strong> thiscodeschool ems &copy; <?php echo date('d/m/Y');?>
                </div>
            </div>
        </div>
       
    </div>
</div>
   </div>




	
 <script src="https://www.thiscodeschool.com/js/jquery-3.1.1.min.js"></script>

  <script src="https://code.jquery.com/jquery-migrate-3.1.0.min.js" integrity="sha256-ycJeXbll9m7dHKeaPbXBkZH8BuP99SmPm/8q5O+SbBc=" crossorigin="anonymous"></script><!-- boostrap js -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

  <!-- datatables js -->

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<script src="https://unpkg.com/nprogress@0.2.0/nprogress.js"></script>

  <script src="https://www.thiscodeschool.com/js/plugins/metisMenu/jquery.metisMenu.js"></script>
  <script src="https://www.thiscodeschool.com/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.4.456/pdf.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.4.456/pdf_viewer.js"></script>
 
   <script src="https://cdn.ckeditor.com/4.14.0/full-all/ckeditor.js"></script>
 
   
    <!-- Custom and plugin javascript -->
    <script src="https://www.thiscodeschool.com/js/inspinia.js"></script>
    <script src="https://www.thiscodeschool.com/js/plugins/pace/pace.min.js"></script>


<script src="https://www.thiscodeschool.com/js/plugins/tinycon/tinycon.min.js"></script>
<script src="https://www.thiscodeschool.com/js/plugins/chartist/chartist.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){

      show();
     
      $('#mydata').dataTable();
	  
	  <!-- please edit from here -->		 		
		 function show(){
						$.ajax({
						   type  : 'ajax',
						   url   : 'selectallnote.php', 
						   async : false,
						   dataType : 'json',
						    success:function(data){
							  var html = '';
									var i;       
									var paths = "/confab/teacher/note/uploads/notes/";				
								 for(i=0; i<data.length; i++){ 
									
									html += '<tr>'+
											'<td>'+data[i].id+'</td>'+
											'<td>'+data[i].title+'</td>'+
										
											'<td>'+'<a href ="javascript:void(0);" onclick="preview(\''+paths+data[i].doc +'\')"'+' class="btn btn-info"'+' id="'+paths+data[i].doc+'"'+'>Preview</a>'+'</td>'+											
											'<td style="text-align:left;">'+
												'<a download href="'+paths+data[i].doc +'"'+' class="btn btn-danger"'+'>Download</a>'+
											
											'</td>'+
											'</tr>';
									}
									$('#show_data').html(html);
						   }
						});
					  
					  }	
	  
						
  // start of save functions
    

// end of save of buttons

    });

   
// CKEDITOR.replace( 'content_edit' );
 
 var numPages = 1;
var canvas = document.getElementById("pdfviewer");
var ctx = canvas.getContext("2d");


 function preview(d){
  
    pdfjsLib.GlobalWorkerOptions.workerSrc =
    'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.4.456/pdf.worker.min.js';
pdfjsLib.disableWorker = true;
var loadingTask = pdfjsLib.getDocument(d);
loadingTask.promise.then(
  function(d) {
    // Load information from the first page.
    d.getPage(numPages).then(function(page) {
        
        var viewport = page.getViewport({scale: 0.85});
    canvas.height = viewport.height;
    canvas.width = viewport.width;

    // Render PDF page into canvas context
    var renderContext = {
      canvasContext: ctx,
      viewport: viewport
    };
        
    
      page.render(renderContext).promise.then(function() {
          document.getElementById("cancelit").style.display ="block";
        console.log(page.numPages);
      });
    });
  },
  function(reason) {
    console.error(reason);
  });


 }

     
	 
   </script>
   
   	
</body>
</html>

























