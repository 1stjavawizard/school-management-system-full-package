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
	<title>School Teachers Note</title>
	

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
    
     .lds-ripple {
    display: inline-block;
    position: relative;
    width: 64px;
    height: 64px;
    left: 45%;
    top: 40%;
}
    .lds-ripple div {
    position: absolute;
    border: 4px solid #639440;
    opacity: 1;
    border-radius: 50%;

    animation: lds-ripple 1s cubic-bezier(0, 0.2, 0.8, 1) infinite;
}

.lds-ripple div:nth-child(2) {
    animation-delay: -0.5s;
}

@keyframes  lds-ripple {
    0% {
        top: 28px;
        left: 28px;
        width: 0;
        height: 0;
        opacity: 1;
    }

    100% {
        top: -1px;
        left: -1px;
        width: 58px;
        height: 58px;
        opacity: 0;
    }
}
</style>
</head>
<body>
<section class="preloader" style="position: fixed;background: white;z-index: 9999999999;height: 100%;width: 100%;">
<div class="lds-ripple">
    Loading...
    <p></p>
<div></div>
<div></div>
</div>
</section>
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
                        <li><a href="https://www.thiscodeschool.com/confab/teacher/">Home Page</a></li>
                        <li><a href="https://www.thiscodeschool.com/confab/teacher/quiz/">Quiz</a></li>
                        <li><a href="https://www.thiscodeschool.com/confab/teacher/note/">Notes</a></li>
                        <li><a href="https://www.thiscodeschool.com/confab/teacher/scheme/">Scheme Of Wrok</a></li>
                        
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
				<h1>Teachers Note App
					
					<div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Write Note</a></div>
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
                                  <a href="https://www.thiscodeschool.com/confab/teacher/note/" class="btn btn-info col-sm-6 col-md-4 col-lg-2" id="cancelit" style="display:none">Cancel pdf</a>
                              </div>
                                   <canvas id="pdfviewer">
                                       
                                    
                                   </canvas>
                                   
                                   
                                   
                                </div>
                            </div>  <!-- tops -->
   


      
          











             
        </div>





              <div class="this where modals goes to">
			  
			
			  <div class="this is insert_modals">
                 <form id="data" method="post" enctype="multipart/form-data">
					<div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
						  <div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Upload Notes</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						  </div>
						  <div class="modal-body">
						 		 <div class="row">
									 <div class="col-md-6 col-lg-6 col-sm-12">
									   <div class="form-group">						
										<label class="col-md-2 col-form-label">Teachers</label>
										<div class="col-md-10">
										<select name="user_id" id="user_id" class="form-control">
											 <?php foreach($data = $assignteachertoclassandsubject->getAllUsers() as $d){?>
											   <?php if(!empty($d) && $d->name !=="" && $d->username !=="") {?>
											   <option value= <?php echo $d->id;?>> 							  
													<?php echo $d->name;?>				   
												  
											   </option>
											<?php } ?>
											<?php }?>
										</select>
										 
									   </div>
									  </div>
									 </div>
						
									 <div class="col-md-6 col-lg-6 col-sm-12">
									   <div class="form-group">						
										<label class="col-md-2 col-form-label">School Class</label>
										<div class="col-md-10">
										  <select name="units_id" id="units_id" class="form-control">
											 <?php foreach($data = $assignteachertoclassandsubject->getAllUnits() as $d){?>
											   <?php if(!empty($d) && $d->name !=="" && $d->description !=="") {?>
											   <option value= <?php echo $d->id;?>> 							  
													<?php echo $d->name;?>				   
												  
											   </option>
											<?php } ?>
											<?php }?>
										</select>
										  
									   </div>
									  </div>
									 </div>
								</div>
						
									   
						<div class="row">
						     <div class="col-md-12 col-lg-12 col-sm-12">
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">title</label>
								<div class="col-md-10">
								  <input type="text" name="title" id="title" class="form-control" placeholder="Mathematics note for ss1 third term">
							   </div>
                              </div>
					         </div>
							
						
						</div>
						
							<div class="row">
						   
							
							 <div class="col-md-12 col-lg-12 col-sm-12">
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">Write Note</label>
								<div class="col-md-10">
								  <input type="text" name="content" id="content" class="form-control">
							   </div>
                              </div>
					         </div>
						</div>
						 
					    <div class="row">
									 <div class="col-md-6 col-lg-6 col-sm-12">
									   <div class="form-group">						
										<label class="col-md-2 col-form-label">Subjects</label>
										<div class="col-md-10">
										<select name="subject_id" id="subject_id" class="form-control">
											 <?php foreach($data = $assignteachertoclassandsubject->getAllSubjects() as $d){?>
											   <?php if(!empty($d) && $d->name !=="" && $d->description !=="") {?>
											   <option value= <?php echo $d->id;?>> 							  
													<?php echo $d->name;?>				   
												  
											   </option>
											<?php } ?>
											<?php }?>
										</select>
										 
									   </div>
									  </div>
									 </div>
						 
									 <div class="col-md-6 col-lg-6 col-sm-12">
									   <div class="form-group">						
										<label class="col-md-2 col-form-label">Term</label>
										<div class="col-md-10">
										  <select name="academicsession_id" id="academicsession_id" class="form-control">
											 <?php foreach($data = $assignteachertoclassandsubject->getAllacademicsession() as $d){?>
											   <?php if(!empty($d) && $d->name !=="" && $d->description !=="") {?>
											   <option value= <?php echo $d->id;?>> 							  
													<?php echo $d->name;?>				   
												  
											   </option>
											<?php } ?>
											<?php }?>
										</select>
										  
									   </div>
									  </div>
									 </div>
								</div>
					 
   					
						 <div class="row">
									 <div class="col-md-6 col-lg-6 col-sm-12">
									   <div class="form-group">						
										<label class="col-md-2 col-form-label">Session</label>
										<div class="col-md-10">
										<select name="session_id" id="session_id" class="form-control">
											 <?php foreach($data = $assignteachertoclassandsubject->getAllSession() as $d){?>
											   <?php if(!empty($d) && $d->name !=="" && $d->description !=="") {?>
											   <option value= <?php echo $d->id;?>> 							  
													<?php echo $d->name;?>				   
												  
											   </option>
											<?php } ?>
											<?php }?>
										</select>
										 
									   </div>
									  </div>
									 </div>
						
			  
									 <div class="col-md-6 col-lg-6 col-sm-12">
									   <div class="form-group">						
										<label class="col-md-2 col-form-label">Upload Note</label>
										<div class="col-md-10">
										  <input type="file" name="doc" id="doc" class="form-control">
										  
									   </div>
									  </div>
									 </div>
								</div>
						
				
		            <div class="row">
						     <div class="col-md-6 col-lg-6 col-sm-12">
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">Class</label>
								<div class="col-md-10">
								   <select name="towhom" id="towhom" class="form-control">
											 <?php foreach($data = $assignteachertoclassandsubject->getAllUnits() as $d){?>
											   <?php if(!empty($d) && $d->name !=="" && $d->description !=="") {?>
											   <option value= <?php echo $d->id;?>> 							  
													<?php echo $d->name;?>				   
												  
											   </option>
											<?php } ?>
											<?php }?>
										</select>
							   
							   </div>
                              </div>
					         </div>
							  
							 <div class="col-md-6 col-lg-6 col-sm-12">
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">createdby</label>
								<div class="col-md-10">
								  <select name="createdby" id="createdby" class="form-control">
											 <?php foreach($data = $assignteachertoclassandsubject->getAllUsers() as $d){?>
											   <?php if(!empty($d) && $d->name !=="" && $d->username !=="") {?>
											   <option value=" <?php echo $d->name;?>"> 							  
													<?php echo $d->name;?>				   
												  
											   </option>
											<?php } ?>
											<?php }?>
										</select>
							   </div>
                              </div>
					         </div>
						</div>
						
					
				
								 
						  </div>
						  
						  
						
						  	
		          



					
								
							<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" id="btn_save" class="btn btn-primary">Save</button>
						  </div>	 
								 
						  </div>
						
						  
						  
						</div>
					  </div>
					</div>
            </form> <!-- this is end of insert form-->
			
	
			</div> <!-- this is end of insert modal-->
		
			<div class="this is update_modals">
			
			
             <form id="data2" method="post" enctype="multipart/form-data">
            <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
				  
				  	
				 <div class="row">
									 <div class="col-md-6 col-lg-6 col-sm-12">
									   <div class="form-group">						
										<label class="col-md-2 col-form-label">Teachers</label>
										<div class="col-md-10">
										<select name="user_id_edit" id="user_id_edit" class="form-control">
											 <?php foreach($data = $assignteachertoclassandsubject->getAllUsers() as $d){?>
											   <?php if(!empty($d) && $d->name !=="" && $d->username !=="") {?>
											   <option value= <?php echo $d->id;?>> 							  
													<?php echo $d->name;?>				   
												  
											   </option>
											<?php } ?>
											<?php }?>
										</select>
										 
									   </div>
									  </div>
									 </div>
						
									 <div class="col-md-6 col-lg-6 col-sm-12">
									   <div class="form-group">						
										<label class="col-md-2 col-form-label">School Class</label>
										<div class="col-md-10">
										  <select name="units_id_edit" id="units_id_edit" class="form-control">
											 <?php foreach($data = $assignteachertoclassandsubject->getAllUnits() as $d){?>
											   <?php if(!empty($d) && $d->name !=="" && $d->description !=="") {?>
											   <option value= <?php echo $d->id;?>> 							  
													<?php echo $d->name;?>				   
												  
											   </option>
											<?php } ?>
											<?php }?>
										</select>
										  
									   </div>
									  </div>
									 </div>
								</div>
											
							   
						<div class="row">
						     <div class="col-md-6 col-lg-6 col-sm-12">
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">title</label>
								<div class="col-md-10">
								<input type="hidden" name="id_edit" id="id_edit">
								  <input type="text" name="title_edit" id="title_edit" class="form-control" placeholder="Segun Sowemimo Smart">
							   </div>
                              </div>
					         </div>
							 
							 <div class="col-md-6 col-lg-6 col-sm-12">
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">Write Note</label>
								<div class="col-md-10">
								  <input type="text" name="content_edit" id="content_edit" class="form-control">
							   </div>
                              </div>
					         </div>
						</div>
							
					 <div class="row">
									 <div class="col-md-6 col-lg-6 col-sm-12">
									   <div class="form-group">						
										<label class="col-md-2 col-form-label">Subjects</label>
										<div class="col-md-10">
										<select name="subject_id_edit" id="subject_id_edit" class="form-control">
											 <?php foreach($data = $assignteachertoclassandsubject->getAllSubjects() as $d){?>
											   <?php if(!empty($d) && $d->name !=="" && $d->description !=="") {?>
											   <option value= <?php echo $d->id;?>> 							  
													<?php echo $d->name;?>				   
												  
											   </option>
											<?php } ?>
											<?php }?>
										</select>
										 
									   </div>
									  </div>
									 </div>
						
									 <div class="col-md-6 col-lg-6 col-sm-12">
									   <div class="form-group">						
										<label class="col-md-2 col-form-label">Term</label>
										<div class="col-md-10">
										  <select name="academicsession_id_edit" id="academicsession_id_edit" class="form-control">
											 <?php foreach($data = $assignteachertoclassandsubject->getAllacademicsession() as $d){?>
											   <?php if(!empty($d) && $d->name !=="" && $d->description !=="") {?>
											   <option value= <?php echo $d->id;?>> 							  
													<?php echo $d->name;?>				   
												  
											   </option>
											<?php } ?>
											<?php }?>
										</select>
										  
									   </div>
									  </div>
									 </div>
								</div>
						
					<div class="row">
									 <div class="col-md-6 col-lg-6 col-sm-12">
									   <div class="form-group">						
										<label class="col-md-2 col-form-label">Session</label>
										<div class="col-md-10">
										<select name="session_id_edit" id="session_id_edit" class="form-control">
											 <?php foreach($data = $assignteachertoclassandsubject->getAllSession() as $d){?>
											   <?php if(!empty($d) && $d->name !=="" && $d->description !=="") {?>
											   <option value= <?php echo $d->id;?>> 							  
													<?php echo $d->name;?>				   
												  
											   </option>
											<?php } ?>
											<?php }?>
										</select>
										 
									   </div>
									  </div>
									 </div>
						
			    
									 <div class="col-md-6 col-lg-6 col-sm-12">
									   <div class="form-group">						
										<label class="col-md-2 col-form-label">Upload Note</label>
										<div class="col-md-10">
										  <input type="file" name="doc_edit" id="doc_edit" class="form-control">
										  
									   </div>
									  </div>
									 </div>
								</div>
						
                 	
		            <div class="row">
						     <div class="col-md-6 col-lg-6 col-sm-12">
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">Class</label>
								<div class="col-md-10">
								   <select name="towhom_edit" id="towhom_edit" class="form-control">
											 <?php foreach($data = $assignteachertoclassandsubject->getAllUnits() as $d){?>
											   <?php if(!empty($d) && $d->name !=="" && $d->description !=="") {?>
											   <option value= <?php echo $d->id;?>> 							  
													<?php echo $d->name;?>				   
												  
											   </option>
											<?php } ?>
											<?php }?>
										</select>
							   
							   </div>
                              </div>
					         </div>
							 
							 <div class="col-md-6 col-lg-6 col-sm-12">
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">createdby</label>
								<div class="col-md-10">
								  <select name="createdby_edit" id="createdby_edit" class="form-control">
											 <?php foreach($data = $assignteachertoclassandsubject->getAllUsers() as $d){?>
											   <?php if(!empty($d) && $d->name !=="" && $d->username !=="") {?>
											   <option value=" <?php echo $d->name;?>"> 							  
													<?php echo $d->name;?>				   
												  
											   </option>
											<?php } ?>
											<?php }?>
										</select>
							   </div>
                              </div>
					         </div>
						</div>
						
					    
						
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="btn_update" class="btn btn-primary">Update</button>
                  </div>
                </div>
              </div>
            </div>
            </form> <!-- the edit form ends-->
		
			
			
			
			 
			
		 </div>   
			   <div class="this is delete_modals">				   
				 
					<form method="post">
					<div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
						<div class="modal-content">
						  <div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Delete A Record</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						  </div>
						  <div class="modal-body">
							   <strong>Are you sure to delete this record?</strong>
						  </div>
						  <div class="modal-footer">
							<input type="hidden" name="note_id_delete" id="note_id_delete" class="form-control"> <!-- please change this modal id to your own id-->
							<button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
							<button type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
						  </div>
						</div>
					  </div>
					</div>
            </form>
					
				  </div>
					
					
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
$(window).bind('load',function () {
          console.log('Loaded');
          // Animate loader off screen
          $(".preloader").fadeOut("slow");;
      });
      
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
										'<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-id="'+data[i].id+'" data-user_id="'+data[i].user_id+'" data-units_id="'+data[i].units_id +'" data-session_id="'+data[i].session_id +'" data-subject_id="'+data[i].subject_id +'" data-academicsession_id="'+data[i].academicsession_id +'" data-academicsession_id="'+data[i].academicsession_id+'" data-title="'+data[i].title +'" data-content="'+data[i].content +'" data-doc="'+data[i].doc +'" data-towhom="'+data[i].towhom +'" data-createdby="'+data[i].createdby +'">Edit</a>'+' '+
												'<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-id="'+data[i].id+'">Delete</a>'+
											
											'</td>'+
											'</tr>';
									}
									$('#show_data').html(html);
						   }
						});
					  
					  }	
	  
						
  // start of save functions
     $('form#data').on('submit',function(){
      var content=CKEDITOR.instances['content'].getData();
         var formData = new FormData(this); 
         formData.append('content', content);
      $.ajax({
        type : "POST",
        url  : "addnote.php",
        processData: false,  // tell jQuery not to process the data
        contentType: false,
        data:formData,
        success:function(data){
           $('#user_id').val('');
		$('#units_id').val('');
		 $('#session_id').val('');
		 $('#subject_id').val('');
		$('#academicsession_id').val('');
		 
		$('#title').val('');
		$('#content').val('');
		$('#doc').val('');
		$('#towhom').val('');
		$('#createdby').val('');
          $('#Modal_Add').modal('hide');
           window.location.href ="https://www.thiscodeschool.com/confab/teacher/note/";
        }
      });
      
    });

// end of save of buttons



									
$('#show_data').on('click','.item_edit',function(){
    var id = $(this).data('id');
	var user_id= $(this).data('user_id');
	var units_id= $(this).data('units_id');
	var session_id= $(this).data('session_id');
	var subject_id= $(this).data('subject_id');
	var academicsession_id= $(this).data('academicsession_id');
	var title= $(this).data('title');
	var content= $(this).data('content');
	var doc= $(this).data('doc');
	var towhom= $(this).data('towhom');
	var createdby= $(this).data('createdby');
	
   $('#Modal_Edit').modal('show');
  
	$('[name="id_edit"]').val(id);
	$('[name="user_id_edit"]').val(user_id);
	$('[name="units_id_edit"]').val(units_id);
	$('[name="session_id_edit"]').val(session_id);
	$('[name="subject_id_edit"]').val(subject_id);
	$('[name="academicsession_id_edit"]').val(academicsession_id);

	$('[name="title_edit"]').val(title);
	$('[name="content_edit"]').val(content);
	$('[name="doc_edit"]').val(doc);
	$('[name="towhom_edit"]').val(towhom);
	$('[name="createdby_edit"]').val(createdby);
	
  
 
});
	
$('form#data2').on('submit',function(){

  var content=CKEDITOR.instances['content'].getData();
         var formData = new FormData(this); 
         formData.append('content_edit', content);
   $.ajax({
	  
    type : "POST",
     url  : "updatenote.php",   
	processData: false,  // tell jQuery not to process the data
    contentType: false,
    data : formData,
     success: function(data){
		 $('#id_edit').val('');
		  $('#user_id_edit').val('');
		$('#units_id_edit').val('');
		 $('#session_id_edit').val('');
		 $('#subject_id_edit').val('');
		$('#academicsession_id_edit').val('');
		 
		$('#title_edit').val('');
		$('#content_edit').val('');
		$('#doc_edit').val('');
		$('#towhom_edit').val('');
		$('#createdby_edit').val('');
		
		
	    
    $('#Modal_Edit').modal('hide');
    show();}
   });
   
});
 $('#show_data').on('click','.item_delete',function(){
						var delete_id = $(this).data('id');
							
						$('#Modal_Delete').modal('show');
						 $('[name="note_id_delete"]').val(delete_id);
						});
						
					//delete record to database
				  $('#btn_delete').on('click',function(){
							var delete_id2 = $('#note_id_delete').val();
							$.ajax({
								type : "POST",
								url  : "deletenote.php",
								dataType : "JSON",
								data : {id : delete_id2},
								success: function(data){
									$('#note_id_delete').val(""); 
									$('#Modal_Delete').modal('hide');
									show();
								}
							});
							
						});


		
 
 });
 
 CKEDITOR.replace('content');
   
CKEDITOR.replace( 'content_edit' );
 
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
        
     // Animate loader off screen
          $(".preloader").fadeIn("slow");
          
      page.render(renderContext).promise.then(function() {
           $(".preloader").fadeOut("slow");
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

























