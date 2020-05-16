<?php
include_once('Sessionterm.php');
$sessionterm = new Sessionterm();
 ?>
<!DOCTYPE html>
<html>

<head>


	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>School Session Term</title>
	

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
				<h1>School Session Term
					
					<div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Add Session Term</a></div>
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
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    
                                    
                                    <table class="table table-striped" id="mydata">
									
									<thead>
										<tr>
										
											<td>S/N</td>
											<td>sessionname</td>
											<td>startdate</td>
											<td>enddate</td>					  
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
			    
			    <form method="post">
					<div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
						  <div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Add New Session Term</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						  </div>
						  <div class="modal-body">
						   					
						  <div class="row">
									 <div class="col-md-6 col-lg-6 col-sm-12">
									   <div class="form-group">						
										<label class="col-md-2 col-form-label">Session Name</label>
										<div class="col-md-10">
										  <input type="text" name="sessionname" id="sessionname" class="form-control" placeholder="Segun Sowemimo Smart">
									   </div>
									  </div>
									 </div>
									 
									 <div class="col-md-6 col-lg-6 col-sm-12">
									   <div class="form-group">						
										<label class="col-md-2 col-form-label">Term Name</label>
										<div class="col-md-10">
										  <input type="text" name="termname" id="termname" class="form-control">
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
											 <?php foreach($data = $sessionterm->getAllSession() as $d){?>
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
										  <select name="term_id" id="term_id" class="form-control">
											 <?php foreach($data = $sessionterm->getAllTerms() as $d){?>
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
										<label class="col-md-2 col-form-label">Session Starts</label>
										<div class="col-md-10">
										  <input type="date" name="startdate" id="startdate" class="form-control" placeholder="School Level Name">
									   </div>
									  </div>
									 </div>
									 
									 <div class="col-md-6 col-lg-6 col-sm-12">
									 
									   <div class="form-group">						
										<label class="col-md-2 col-form-label">Session Ends</label>
										<div class="col-md-10">
										  <input type="date" name="enddate" id="enddate" class="form-control" placeholder="School Level Name">
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
            </form> <!-- this is end of insert form-->
			
	
			</div> <!-- this is end of insert modal-->
		
			<div class="this is update_modals">
			
			
             <form method="post">
            <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Session Term</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
				  
				  <div class="row">
						     <div class="col-md-6 col-lg-6 col-sm-12">
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">Session Name</label>
								<div class="col-md-10">
								  <input type="hidden" name="id_edit" id="id_edit" class="form-control">
								  <input type="text" name="sessionname_edit" id="sessionname_edit" class="form-control" placeholder="Segun Sowemimo Smart">
							   </div>
                              </div>
					         </div>
							 
							 <div class="col-md-6 col-lg-6 col-sm-12">
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">Term Name</label>
								<div class="col-md-10">
								  <input type="text" name="termname_edit" id="termname_edit" class="form-control">
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
											 <?php foreach($data = $sessionterm->getAllSession() as $d){?>
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
										  <select name="term_id_edit" id="term_id_edit" class="form-control">
											 <?php foreach($data = $sessionterm->getAllTerms() as $d){?>
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
										<label class="col-md-2 col-form-label">Session Starts</label>
										<div class="col-md-10">
										  <input type="date" name="startdate_edit" id="startdate_edit" class="form-control" placeholder="School Level Name">
									   </div>
									  </div>
									 </div>
									 
									 <div class="col-md-6 col-lg-6 col-sm-12">
									 
									   <div class="form-group">						
										<label class="col-md-2 col-form-label">Session Ends</label>
										<div class="col-md-10">
										  <input type="date" name="enddate_edit" id="enddate_edit" class="form-control" placeholder="School Level Name">
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
							<h5 class="modal-title" id="exampleModalLabel">Delete A Unit Record</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						  </div>
						  <div class="modal-body">
							   <strong>Are you sure to delete this record?</strong>
						  </div>
						  <div class="modal-footer">
							<input type="hidden" name="sessionterm_id_delete" id="sessionterm_id_delete" class="form-control"> <!-- please change this modal id to your own id-->
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
						   url   : 'selectallsessionterm.php', 
						   async : false,
						   dataType : 'json',
						    success:function(data){
							  var html = '';
									var i;
								 for(i=0; i<data.length; i++){ 
									 <!-- add more tds and include more data in the edit link -->
									html += '<tr>'+
											'<td>'+data[i].id+'</td>'+
											'<td>'+data[i].sessionname+'</td>'+
											'<td>'+data[i].startdate+'</td>'+
											'<td>'+data[i].enddate+'</td>'+
											'<td style="text-align:left;">'+
										'<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-id="'+data[i].id+'" data-sessionname="'+data[i].sessionname+'" data-startdate="'+data[i].startdate +'" data-enddate="'+data[i].enddate+'" data-term_id="'+data[i].term_id+'" data-session_id="'+data[i].session_id+'" data-termname="'+data[i].termname+'">Edit</a>'+' '+
												'<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-id="'+data[i].id+'">Delete</a>'+
											
											'</td>'+
											'</tr>';
									}
									$('#show_data').html(html);
						   }
						});
					  
					  }	
	  
						
  // start of save functions
                     $('#btn_save').on('click',function(){
								<!-- change the values to be inserted-->
							  var session_id = $('#session_id').val();
							  var sessionname = $('#sessionname').val();
							   var term_id = $('#term_id').val();
							  var termname = $('#termname').val();
                              var startdate = $('#startdate').val();
							  var enddate = $('#enddate').val();
                             
							  
							  $.ajax({
								type : "POST",
								url  : "addsessionterm.php", 
								dataType : "JSON",
								data:{session_id:session_id, sessionname :sessionname, term_id:term_id, termname:termname, startdate:startdate, enddate:enddate},
								success:function(data){
								  $('#session_id').val('');
							      $('#sessionname').val('');
							       $('#term_id').val('');
							       $('#termname').val('');
                                   $('#startdate').val('');
							       $('#enddate').val('');
                             
								  $('#Modal_Add').modal('hide');
								  show();
								}
							  });
							 
							});
    

// end of save of buttons

				
$('#show_data').on('click','.item_edit',function(){
  var id = $(this).data('id');
  var session_id = $(this).data('session_id');
  var sessionname = $(this).data('sessionname');
  var term_id = $(this).data('term_id');
  var termname = $(this).data('termname');
  var startdate = $(this).data('startdate');
  var enddate = $(this).data('enddate');
  
   $('#Modal_Edit').modal('show');
  
  $('[name="id_edit"]').val(id);
  $('[name="session_id_edit"]').val(session_id);
 $('[name="sessionname_edit"]').val(sessionname);
  $('[name="term_id_edit"]').val(term_id);
  $('[name="termname_edit"]').val(termname);
 $('[name="startdate_edit"]').val(startdate);
 $('[name="enddate_edit"]').val(enddate);
 
});

$('#btn_update').on('click',function(){
  var id_edit = $('#id_edit').val();
 var session_id_edit = $('#session_id_edit').val();
 var sessionname_edit = $('#sessionname_edit').val();
  var term_id_edit =$('#term_id_edit').val();
   var termname_edit =$('#termname_edit').val();
  var startdate_edit =$('#startdate_edit').val();
  var enddate_edit =$('#enddate_edit').val();
 
   $.ajax({
    type : "POST",
     url  : "updatesessionterm.php",
    dataType : "JSON",
    data : {id:id_edit , session_id:session_id_edit, sessionname :sessionname_edit, term_id:term_id_edit, termname:termname_edit, startdate:startdate_edit, enddate:enddate_edit},
     success: function(data){
		$('#id_edit').val("");
		$('#session_id_edit').val("");
		$('#term_id_edit').val("");
		$('#sessionname_edit').val("");
	    $('#termname_edit').val("");
		$('#startdate_edit').val("");
	    $('#enddate_edit').val("");
	    
    $('#Modal_Edit').modal('hide');
    show();}
   });
   
});
 $('#show_data').on('click','.item_delete',function(){
						var delete_id = $(this).data('id');
							
						$('#Modal_Delete').modal('show');
						 $('[name="sessionterm_id_delete"]').val(delete_id);
						});
						
					//delete record to database
				  $('#btn_delete').on('click',function(){
							var delete_id2 = $('#sessionterm_id_delete').val();
							$.ajax({
								type : "POST",
								url  : "deletesessionterm.php",
								dataType : "JSON",
								data : {id : delete_id2},
								success: function(data){
									$('#sessionterm_id_delete').val(""); 
									$('#Modal_Delete').modal('hide');
									show();
								}
							});
							
						});

	
		
		
		
 
 });
   </script>
   
   	
</body>
</html>

























