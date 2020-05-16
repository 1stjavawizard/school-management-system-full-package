

<!DOCTYPE html>
<html>

<head>


	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Confab secondary Notes</title>
	

<!-- Latest compiled and minified CSS -->
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
				<h1>Confab School App users
					
					<div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Add New User</a></div>
				</h1>
             </div>
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="ibox ">
                        <div class="ibox-title" style="color:white">
                            <h5>Welcome <?php echo "";?>,you are on students page!</h5>
                        </div>
                        

                        
                    </div>
                </div>
            </div>



        <div class="row">
       		
			


   
  
      <div class="row" >

        <div class="col-lg-6" id="tableToExport">
            <h3>Users information</h3>
            <table id="mydata" class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <td>S/N</td>
						<td>Name</td>
						<td>Role</td>
						<td>Username</td>
						<td>Password</td>                        
                        <td>Action</td>
                        
                    </tr>
                </thead>
                <tbody id="show_data">
                    
                </tbody>
            </table>
        </div>
       

         


    </div>


    <div class="row">
	    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		   <form method="post" id="form" action="https://www.thiscodeschool.com/confab/users/adduser.php" enctype="multipart/form-data">
             
               
                  <div class="row">
                    <h5 class="col-md-9 col-md-offset-3" id="exampleModalLabel">Add New user</h5>
                   
                  </div>
                  <div class="col-md-12">
				        <div class="row">
						     <div class="col-md-6 col-lg-6 col-sm-12">
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">Full Name</label>
								<div class="col-md-10">
								  <input type="text" name="name" id="name" class="form-control" placeholder="Segun Sowemimo Smart">
							   </div>
                              </div>
					         </div>
							 
							 <div class="col-md-6 col-lg-6 col-sm-12">
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">Passport Photograph</label>
								<div class="col-md-10">
								  <input type="file" name="passport" id="passport" accept="image/*" class="form-control">
							   </div>
                              </div>
					         </div>
						</div>
						
						<div class="row">
						     <div class="col-md-6 col-lg-6 col-sm-12">
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">Username</label>
								<div class="col-md-10">
								  <input type="text" name="username" id="username" class="form-control" placeholder="Segun2346">
							   </div>
                              </div>
					         </div>
							 
							 <div class="col-md-6 col-lg-6 col-sm-12">
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">user role</label>
								<div class="col-md-10">
								  <select name="role" id="role" class="form-control">
								     <option value="student">Students</option>
									 <option value="teacher">Teacher</option>
									 <option value="principal">Principal</option>
									 <option value="admin">Admin</option>
									 <option value="libarian">Libarian</option>
									 <option value="others">Others</option>
									 
								  </select>
								  
							   </div>
                              </div>
					         </div>
						</div>
						
						
						<div class="row">
						     <div class="col-md-6 col-lg-6 col-sm-12">
							   <div class="form-group">	
                                						   
								<label class="col-md-2 col-form-label">Password</label>
								<div class="col-md-10">
								  <input type="text" name="password" id="password" class="form-control" placeholder="Category Class Name">
							   </div>
                              </div>
					         </div>
							 
							 <div class="col-md-6 col-lg-6 col-sm-12">
							  
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">Parent's Name</label>
								<div class="col-md-10">
								  <input type="text" name="parentName" id="parentName" class="form-control" placeholder="Category Class Name">
							   </div>
                              </div>
					         </div>
						</div>
						
						
						
                       
                        
                        
                  </div>
                  <div class="row">
				     <div id="preview"></div>
					 <div id="err"> </div>
                    
                    <button type="submit" name="upload" id="btn_save" class="btn btn-primary col-md-offset-3 col-md-3 col-sm-offset-2 col-sm-10">Add User</button>
                  </div>
               <p style="margin-bottom:40px"></p>
             
            </form>
           
		</div>
	
	</div>
      
          



      
          











             
        </div>





              <div class="this where modals goes to">
			  
			 
			  <div class="this is insert_modals">
			  
			  <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  
			  <form method="post" id="form" action="/confab/users/adduser.php" enctype="multipart/form-data">
            <div>
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New user</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
				        <div class="row">
						     <div class="col-md-6 col-lg-6 col-sm-12">
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">Full Name</label>
								<div class="col-md-10">
								  <input type="text" name="name" id="name" class="form-control" placeholder="Segun Sowemimo Smart">
							   </div>
                              </div>
					         </div>
							 
							 <div class="col-md-6 col-lg-6 col-sm-12">
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">Passport Photograph</label>
								<div class="col-md-10">
								  <input type="file" name="passport" id="passport" class="form-control">
							   </div>
                              </div>
					         </div>
						</div>
						
						<div class="row">
						     <div class="col-md-6 col-lg-6 col-sm-12">
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">Username</label>
								<div class="col-md-10">
								  <input type="text" name="username" id="username" class="form-control" placeholder="Segun2346">
							   </div>
                              </div>
					         </div>
							 
							 <div class="col-md-6 col-lg-6 col-sm-12">
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">user role</label>
								<div class="col-md-10">
								  <select name="role" id="role" class="form-control">
								     <option value="student">Students</option>
									 <option value="teacher">Teacher</option>
									 <option value="principal">Principal</option>
									 <option value="admin">Admin</option>
									 <option value="libarian">Libarian</option>
									 <option value="others">Others</option>
									 
								  </select>
								  
							   </div>
                              </div>
					         </div>
						</div>
						
						
						<div class="row">
						     <div class="col-md-6 col-lg-6 col-sm-12">
							   <div class="form-group">	
                                						   
								<label class="col-md-2 col-form-label">Password</label>
								<div class="col-md-10">
								  <input type="password" name="password" id="password" class="form-control" placeholder="">
							   </div>
                              </div>
					         </div>
							 
							 <div class="col-md-6 col-lg-6 col-sm-12">
							  
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">Parent's Name</label>
								<div class="col-md-10">
								  <input type="text" name="parentName" id="parentName" class="form-control" placeholder="Category Class Name">
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
            </form>
			</div>
			
			</div> <!-- insert modals ends here-->
			
			<div class="this is update_modals">
			
			<form method="post" enctype="multipart/form-data">
            <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New user</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
				        <div class="row">
						     
					
							 <div class="col-md-6 col-lg-6 col-sm-12">
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">id</label>
								<div class="col-md-10">
								<input type="text" name="id_edit" id="id_edit" class="form-control" placeholder="id" readonly>
                                </div>
                              </div>
					         </div>
							 <div class="col-md-6 col-lg-6 col-sm-12">
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">Full Name</label>
								<div class="col-md-10">
								  <input type="text" name="name_edit" id="name_edit" class="form-control" placeholder="Segun Sowemimo Smart">
							   </div>
                              </div>
					         </div>
						</div>
						
						<div class="row">
						     <div class="col-md-6 col-lg-6 col-sm-12">
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">Username</label>
								<div class="col-md-10">
								  <input type="text" name="username_edit" id="username_edit" class="form-control" placeholder="Segun2346">
							   </div>
                              </div>
					         </div>
							 
							 <div class="col-md-6 col-lg-6 col-sm-12">
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">user role</label>
								<div class="col-md-10">
								  <select name="role_edit" id="role_edit" class="form-control">
								     <option value="student">Students</option>
									 <option value="teacher">Teacher</option>
									 <option value="principal">Principal</option>
									 <option value="admin">Admin</option>
									 <option value="libarian">Libarian</option>
									 <option value="others">Others</option>
									 
								  </select>
								  
							   </div>
                              </div>
					         </div>
						</div>
						
						
						<div class="row">
						     <div class="col-md-6 col-lg-6 col-sm-12">
							   <div class="form-group">	
                                						   
								<label class="col-md-2 col-form-label">Password</label>
								<div class="col-md-10">
								  <input type="text" name="password_edit" id="password_edit" class="form-control" placeholder="Category Class Name">
							   </div>
                              </div>
					         </div>
							 
							 <div class="col-md-6 col-lg-6 col-sm-12">
							  
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">Parent's Name</label>
								<div class="col-md-10">
								  <input type="text" name="parentName_edit" id="parentName_edit" class="form-control" placeholder="Category Class Name">
							   </div>
                              </div>
					         </div>
						</div>
						
						
						
                       
                        
                        
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="btn_update" class="btn btn-primary">Save</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
		
		
			
			
			
			 
			
		 </div>   
			   <div class="this is delete_modals"				   
				  <form method="post">
					 <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
						<div class="modal-content">
						  <div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						  </div>
						  <div class="modal-body">
							   <strong>Are you sure to delete this record?</strong>
						  </div>
						  <div class="modal-footer">
							<input type="hidden" name="user_id_delete" id="user_id_delete" class="form-control">
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
	  function show(){
	    $.ajax({
		   type  : 'ajax',
		   url   : '/confab/users/selectuser.php',
		   async : false,
		   dataType : 'json',
		   success:function(data){
		      var html = '';
		            var i;
		         for(i=0; i<data.length; i++){
					html += '<tr>'+
							'<td>'+data[i].id+'</td>'+
							'<td>'+data[i].name+'</td>'+
							'<td>'+data[i].role+'</td>'+
							'<td>'+data[i].username+'</td>'+
							'<td>'+data[i].password+'</td>'+
							'<td style="text-align:right;">'+
						'<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-id="'+data[i].id+'" data-name="'+data[i].name+'" data-role="'+data[i].role+ '"data-username="'+ data[i].username +'"data-password="'+data[i].password+'"data-parentName="'+data[i].parentName+'">Edit</a>'+' '+
								'<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-id="'+data[i].id+'">Delete</a>'+
							
							'</td>'+
							'</tr>';
		            }
					$('#show_data').html(html);
		   }
		});
	  
	  }



    $('#btn_save').on('click',function(){
      var name = $('#name').val();
      var passport = $('#passport').val();
	   var username = $('#username').val();
      var role = $('#role').val();
	   var password = $('#password').val();
      var parentName = $('#parentName').val();
         	 
      $.ajax({
        type : "POST",
        url  :  "adduser.php",
        processData: false,  // tell jQuery not to process the data
        contentType: false,
        data:{name : name, passport : passport,username : username, role : role,password : password, parentName : parentName},
        success:function(data){
          $('#name').val('');
          $('#passport').val('');
		  $('#username').val('');
		   $('#role').val('');
          $('#password').val('');
		  $('#parentName').val('');
          $('#Modal_Add').modal('hide');
           window.location.href ="https://www.thiscodeschool.com/confab/users/";
        }
      });
      return false;
    });


    

// grab data


$('#show_data').on('click','.item_edit',function(){
  var id = $(this).data('id');
  var name = $(this).data('name');
  var username = $(this).data('username');
  var role = $(this).data('role');
  var password = $(this).data('password');
  var parentName = $(this).data('parentName');
  
   $('#Modal_Edit').modal('show');
  $('[name="id_edit"]').val(id);
  $('[name="name_edit"]').val(name);
 $('[name="username_edit"]').val(username);
 $('[name="role_edit"]').val(role);
 $('[name="password_edit"]').val(password);
 $('[name="parentName_edit"]').val(parentName);
 
});

$('#btn_update').on('click',function(){
	var id_edit = $('#id_edit').val();
     var name_edit = $('#name_edit').val();
     
	   var username_edit = $('#username_edit').val();
      var role_edit = $('#role_edit').val();
	   var password_edit = $('#password_edit').val();
      var parentName_edit = $('#parentName_edit').val();
   $.ajax({
    type : "POST",
     url  : "https://www.thiscodeschool.com/confab/users/updateuser.php",
    dataType : "JSON",
    data:{id: id_edit,name : name_edit,username : username_edit, role : role_edit,password : password_edit, parentName : parentName_edit},
     success: function(data){
    $('#id_edit').val("");
    $('#name_edit').val("");
    $('#username_edit').val("");
	$('#role_edit').val("");
    $('#password_edit').val("");
    $('#parentName_edit').val("");
    $('#Modal_Edit').modal('hide');
    show();}
   });
   
});


 //get data for delete record
 $('#show_data').on('click','.item_delete',function(){
            var delete_id = $(this).data('id');
            
            $('#Modal_Delete').modal('show');
            $('[name="user_id_delete"]').val(delete_id);
        });

  //delete record to database
  $('#btn_delete').on('click',function(){
            var delete_id2 = $('#user_id_delete').val();
            $.ajax({
                type : "POST",
                url  : "deleteuser.php",
                dataType : "JSON",
                data : {id : delete_id2},
                success: function(data){
                    if(data){
                    $('#user_id_delete').val("");
                    $('#Modal_Delete').modal('hide');
                    
                    show();
                    }
                  
                }
            });
           
        });

   
      
	
		
		
		
 
 });
   </script>
   
   	
</body>
</html>