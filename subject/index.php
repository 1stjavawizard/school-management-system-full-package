<?php
session_start();
include_once('Subject.php');

$server = new Subject();
$data = $server->getSubjectItems();
$schoollevel = $server->getSchoollevel();


?>
<!DOCTYPE html>
<html>

<head>


	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>School Teachers Subject</title>
	

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
                        <li><a href="https://www.thiscodeschool.com/confab/subjects">Home Page</a></li>
                        <li><a href="https://www.thiscodeschool.com/confab/quiz/">Quiz</a></li>
                        <li><a href="https://www.thiscodeschool.com/confab/notes/">Notes</a></li>
                        <li><a href="https://www.thiscodeschool.com/confab/scheme-of-works/">Scheme Of Wrok</a></li>
                        
                    </ul>
                </li>
				
				<li>
                    <a href="#"> <i class="fa fa-graduation-cap"></i> <span class="nav-label">Users</span>
                     <span class="fa arrow"></span>
                    </a>
                    
                    
                    <ul class="nav nav-second-level collapse">
                        <li><a href="https://www.thiscodeschool.com/confab/users/">View users</a></li>
                        <li><a href="https://www.thiscodeschool.com/confab/users/adduser">Add User</a></li>
                        
                        
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
				<h1>Teachers Subjects
					
					<div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Add Subject</a></div>
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
											 <td>Shortname</td>							
											<td>Action</td>
											
										</tr>
										
									</thead>
									
                                       
										
										
                                        <tbody id="show_data">
                                    
                                        </tbody>
                                    </table>
                                </div>
                            </div>  <!-- tops -->
	
				


      
          











             
        </div>





              <div class="this where modals goes to">
			  
			
			  <div class="this is insert_modals">
                 <form id="data" method="post">
					<div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
						  <div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Add Subjects</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						  </div>
						  <div class="modal-body">
						  <div class="row">
						     <div class="col-md-6 col-lg-6 col-sm-12">
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">Name</label>
								<div class="col-md-10">
								  <input type="text" name="name" id="name" class="form-control" placeholder="Segun Sowemimo Smart">
							   </div>
                              </div>
					         </div>
							 
							 <div class="col-md-6 col-lg-6 col-sm-12">
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">Decription</label>
								<div class="col-md-10">
								  <input type="text" name="description" id="description" class="form-control">
							   </div>
                              </div>
					         </div>
						</div>
					
									   
						 <div class="row">
						     
							  <div class="col-md-6 col-lg-6 col-sm-12">
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">Subject Division</label>
								<div class="col-md-10">
								  <select name="category" id="category" class="form-control">
								        <?php foreach($data = $server->getSubjectCategory() as $d){?>
                                      <?php if(!empty($d) && $d->name !=="" && $d->desciption !=="") {?>
									         <option value="<?php echo $d->name;?>"> <?php echo $d->description;?></option>
									  <?php }?>
										<?php }?>
								  </select>
							   </div>
                              </div>
					         </div>
							 <div class="col-md-6 col-lg-6 col-sm-12">
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">School Level Name</label>
								<div class="col-md-10">
								  <select name="schoollevelname" id="schoollevelname" class="form-control">
								        <?php foreach($schoollevel as $c){?>
                                      <?php if(!empty($c) && $d->name !=="" && $c->desciption !=="") {?>
									         <option value="<?php echo $c->name;?>"> <?php echo $c->description;?></option>
									  <?php }?>
										<?php }?>
								  </select>
							   </div>
                              </div>
					         </div>
						</div>
						
						
						
						
							<div class="row">
						     <div class="col-md-6 col-lg-6 col-sm-12">
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">shortname</label>
								<div class="col-md-10">
								  <input type="text" name="shortname" id="shortname" class="form-control" placeholder="Segun Sowemimo Smart">
							   </div>
                              </div>
					         </div>
							 
							 <div class="col-md-6 col-lg-6 col-sm-12">
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">School Level</label>
								<div class="col-md-10">
								  <select name="schoollevel_id" id="schoollevel_id" class="form-control">
								        <?php foreach($schoollevel as $c){?>
                                      <?php if(!empty($c) && $c->name !=="" && $c->desciption !=="") {?>
									         <option value=<?php echo $c->id;?>> <?php echo $c->name;?></option>
									  <?php }?>
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
								<label class="col-md-2 col-form-label">Name</label>
								<div class="col-md-10">
								  <input type="text" name="name_edit" id="name_edit" class="form-control" placeholder="Mathematics">
							   </div>
                              </div>
					         </div>
							 
							 <div class="col-md-6 col-lg-6 col-sm-12">
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">Decription</label>
								<div class="col-md-10">
								  <input type="text" name="description_edit" id="description_edit" placeholder="Mathematics Science" class="form-control">
							   </div>
                              </div>
					         </div>
						</div>
					
								   
						 <div class="row">
						     
							  <div class="col-md-6 col-lg-6 col-sm-12">
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">Subject Division</label>
								<div class="col-md-10">
								  <select name="category_edit" id="category_edit" class="form-control">
								        <?php foreach($data = $server->getSubjectCategory() as $c){?>
                                      <?php if(!empty($c) && $c->name !=="" && $c->desciption !=="") {?>
									         <option value=<?php echo $c->name;?>> <?php echo $c->description;?></option>
									  <?php }?>
										<?php }?>
								  </select>
							   </div>
                              </div>
					         </div>
							 <div class="col-md-6 col-lg-6 col-sm-12">
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">School Level Name</label>
								<div class="col-md-10">
								  <select name="schoollevelname_edit" id="schoollevelname_edit" class="form-control">
								        <?php foreach($schoollevel as $c){?>
                                      <?php if(!empty($c) && $c->name !=="" && $c->desciption !=="") {?>
									         <option value=<?php echo $c->name;?>> <?php echo $c->description;?></option>
									  <?php }?>
										<?php }?>
								  </select>
							   </div>
                              </div>
					         </div>
						</div>
						
						
						
						
							<div class="row">
						     <div class="col-md-6 col-lg-6 col-sm-12">
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">shortname</label>
								<div class="col-md-10">
								  <input type="text" name="shortname_edit" id="shortname_edit" class="form-control" placeholder="Segun Sowemimo Smart">
							   </div>
                              </div>
					         </div>
							 
							 <div class="col-md-6 col-lg-6 col-sm-12">
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">School Level</label>
								<div class="col-md-10">
								  <select name="schoollevel_id_edit" id="schoollevel_id_edit" class="form-control">
								        <?php foreach($schoollevel as $c){?>
                                      <?php if(!empty($c) && $c->name !=="" && $c->desciption !=="") {?>
									         <option value=<?php echo $c->id;?>> <?php echo $c->name;?></option>
									  <?php }?>
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
							<input type="hidden" name="subject_id_delete" id="subject_id_delete" class="form-control"> <!-- please change this modal id to your own id-->
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
    $(document).ready(function(){

      show();
     
      $('#mydata').dataTable();
	  
	  <!-- please edit from here -->		 		
		 function show(){
						$.ajax({
						   type  : 'ajax',
						   url   : 'selectallsubjects.php', 
						   async : false,
						   dataType : 'json',
						    success:function(data){
							  var html = '';
									var i;       
													
								 for(i=0; i<data.length; i++){ 
									
									html += '<tr>'+
											'<td>'+data[i].id+'</td>'+
											'<td>'+data[i].name+'</td>'+			
											 
											'<td>'+data[i].shortname+'</td>'+											
											'<td style="text-align:left;">'+
										'<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-id="'+data[i].id+'" data-name="'+data[i].name+'" data-description="'+data[i].description +'" data-shortname="'+data[i].shortname +'" data-schoollevel_id="'+data[i].schoollevel_id +'" data-schoollevelname="'+data[i].schoollevelname +'" data-category="'+data[i].category +'">Edit</a>'+' '+
												'<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-id="'+data[i].id+'">Delete</a>'+
											
											'</td>'+
											'</tr>';
									}
									$('#show_data').html(html);
						   }
						});
					  
					  }	
	  
	//{name:name, description:description,shortname:shortname, schoollevel_id:schoollevel_id, schoollevelname:schoollevelname, category:category}					
  // start of save functions
     $('#btn_save').on('click',function(){
     var name = $('#name');
     var description = $('#description').val();
      var shortname = $('#shortname').val();
       var schoollevel_id = $('#schoollevel_id').val();
        var schoollevelname = $('#schoollevelname').val();
         var category = $('#category').val();
         
          
         var formData = new FormData(this); 
        
      $.ajax({
          
        type : "POST",
        url  : "addsubject.php",
        dataType:"JSON",
         data : {name:name, description:description,shortname:shortname, schoollevel_id:schoollevel_id, schoollevelname:schoollevelname, category:category},
        success:function(data){
           $('#name').val('');
		$('#description').val('');
		 $('#shortname').val('');
		 
		$('#schoollevel_id').val('');
		 
		$('#schoollevelname').val('');
		$('#category').val('');
		
          //$('#Modal_Add').modal('hide');
           //window.location.href ="https://www.thiscodeschool.com/confab/subject/";
        }
      });
      
    });

// end of save of buttons



									
$('#show_data').on('click','.item_edit',function(){
    var id = $(this).data('id');
	var name= $(this).data('name');
	var description= $(this).data('description');
	var shortname= $(this).data('shortname');
	var schoollevel_id= $(this).data('schoollevel_id');
	var schoollevelname= $(this).data('schoollevelname');
	var category= $(this).data('category');
	
	 
   $('#Modal_Edit').modal('show');
  
	$('[name="id_edit"]').val(id);
	$('[name="name_edit"]').val(user_id);
	$('[name="description_edit"]').val(units_id);
	$('[name="shortname_edit"]').val(session_id);
	$('[name="schoollevel_id_edit"]').val(subject_id);
	$('[name="schoollevelname_edit"]').val(academicsession_id);

	$('[name="category_edit"]').val(title);
	
 
});
	
$('form#data2').on('submit',function(){
  var id_edit = $('#id_edit').val();
 var  name_edit= $('#name_edit').val();
 var  description_edit=$('#description_edit').val();
 var  shortname_edit=$('#shortname_edit').val();
 var schoollevel_id_edit =$('#schoollevel_id_edit').val();
 
 var  schoollevelname_edit=$('#schoollevelname_edit').val();
 var  category_edit=$('#category_edit').val();
 
 
   $.ajax({
	  
    type : "POST",
     url  : "updatesubject2.php",   
	processData: false,  // tell jQuery not to process the data
    contentType: false,
    data : {id:id_edit, name:name_edit,description:description_edit, shortname:shortname_edit, schoollevel_id:schoollevel_id_edit, schoollevelname:schoollevelname_edit, category:category_edit},
     success: function(data){
		 $('#id_edit').val('');
		  $('#name_edit').val('');
		$('#description_edit').val('');
		 $('#shortname_edit').val('');
		 $('#schoollevel_id_edit').val('');
		$('#schoollevelname_edit').val('');
		 
		$('#category_edit').val('');
		
		
	    
    $('#Modal_Edit').modal('hide');
    show();}
   });
   
});
 $('#show_data').on('click','.item_delete',function(){
						var delete_id = $(this).data('id');
							
						$('#Modal_Delete').modal('show');
						 $('[name="subject_id_delete"]').val(delete_id);
						});
						
					//delete record to database
				  $('#btn_delete').on('click',function(){
							var delete_id2 = $('#subject_id_delete').val();
							$.ajax({
								type : "POST",
								url  : "deletesubject.php",
								dataType : "JSON",
								data : {id : delete_id2},
								success: function(data){
									$('#subject_id_delete').val(""); 
									$('#Modal_Delete').modal('hide');
									show();
								}
							});
							
						});


		
 
 });
 
 
	 
   </script>
   
   	
</body>
</html>































































































