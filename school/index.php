<?php
session_start();
require_once('School.php');

$server = new School();
$data =  $server->getSchoolItems();

 
?>

<!DOCTYPE html>
<html>

<head>


	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>School level</title>
	

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

    <!-- Navigation -->
   

    <!-- Page wraper -->
    <!-- ng-class with current state name give you the ability to extended customization your view -->
    

        <!-- Page wrapper -->
       <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <i class="fa fa-graduation-cap" style="color:blue;font-size:4rem"></i>
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo "Welcome";?></strong>
                             </span> <span class="text-muted text-xs block">Confab Students<b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            
                            <li><a href=https://www.thiscodeschool.com/confab/">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        TSC+
                    </div>
                </li>
               
                
				 
				<li>
                    <a href="#"> <i class="fa fa-graduation-cap"></i> <span class="nav-label">School Students</span></a>
                   
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
                    <a href="https://www.thiscodeschool.com/confab/">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>
        </div>
		  <!-- main content --> 
        <div class="wrapper wrapper-content">
        <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title" style="color:white">
                            <h5>Welcome <?php echo "";?>,you are on students page!</h5>
                        </div>
                        

                        
                    </div>
                </div>
            </div>



       <div class="row" >

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3>Class items informations</h3>
            <table id="mydata" class="table table-striped table-bordered table-responsive-md table-responsive-lg table-responsive-sm table-responsive-xs table-hover">
                <thead>
                    <tr>
                        <td>S/N</td>
						<td>Name</td>
						<td>Registration Number</td>						              
                        <td>Action</td>
                        
                    </tr>
                </thead>
                <tbody id="show_data">
                    <?php foreach($data as $d){?>
					   <tr> 
					       <td> <?php echo $d->id;?></td>
						   <td> <?php echo $d->schoolname;?></td>
						   <td> <?php echo $d->regnumber;?></td>
						   <td> 
						      <a class="btn btn-primary" href="https://www.thiscodeschool.com/confab/school/updateschool.php?id=<?php echo $d->id;?> ">Update</>
							   <a class="btn btn-danger" href="https://www.thiscodeschool.com/confab/school/deleteschool.php?id=<?php echo $d->id;?>">Delete</>
						   </td>
					   </tr>
					<?php } ?>
                </tbody>
            </table>
        </div>
       

         

  
    </div>


    <div class="row">
	    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		   <form method="post" id="form" action="https://www.thiscodeschool.com/confab/school/addschool.php" enctype="multipart/form-data">
             
			   
                  <div class="row">
                    <h5 class="col-md-9 col-md-offset-3" id="exampleModalLabel">Add New School</h5>
                   
                  </div>
                  <div class="col-md-12">
				        <div class="row">
						     <div class="col-md-6 col-lg-6 col-sm-12">
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">School Name</label>
								<div class="col-md-10">
								  <input type="text" name="schoolname" id="schoolname" class="form-control" placeholder="THISCODESCHOOL NIGERIA LIMITED">
							   </div>
                              </div>
					         </div>
							 
							 <div class="col-md-6 col-lg-6 col-sm-12">
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">Registration Number</label>
								<div class="col-md-10">
								  <input type="text" name="regnumber" id="regnumber" class="form-control" value="<?php echo "THISCODESCHOOL-".rand(10,999)."-".rand(100,99999)?>" readonly>
							   </div>
                              </div>
					         </div>
						</div>
						
						<div class="row">
						     <div class="col-md-6 col-lg-6 col-sm-12">
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">School Motto</label>
								<div class="col-md-10">
								  <input type="text" name="motto" id="motto" class="form-control" placeholder="School Motto">
							   </div>
                              </div>
					         </div>
						
							 <div class="col-md-6 col-lg-6 col-sm-12">
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">School Type</label>
								<div class="col-md-10">
								  <select name="schooltype" id="schooltype" class="form-control">
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
                                						   
								<label class="col-md-2 col-form-label">Date Established</label>
								<div class="col-md-10">
								  <input type="date" name="dateofestablishment" id="dateofestablishment" class="form-control" placeholder="Date Established">
							   </div>
                              </div>
					         </div>
							
							 <div class="col-md-6 col-lg-6 col-sm-12">
							  
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">Director's Name</label>
								<div class="col-md-10">
								  <input type="text" name="ownby" id="ownby" class="form-control" placeholder="Director's Name">
							   </div>
                              </div>
					         </div>
						</div>
						
						
						<div class="row">
						     <div class="col-md-6 col-lg-6 col-sm-12">
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">Master's Name</label>
								<div class="col-md-10">
								  <input type="text" name="mastername" id="mastername" class="form-control" placeholder="Master's Name">
							   </div>
                              </div>
					         </div>
							 <div class="col-md-6 col-lg-6 col-sm-12">
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">Signature</label>
								<div class="col-md-10">
								  <input type="text" name="signature" id="signature" class="form-control" placeholder="Your Signature">
							   </div>
                              </div>
					         </div>
						</div>
						
						
						<div class="row">
						     <div class="col-md-6 col-lg-6 col-sm-12">
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">Country</label>
								<div class="col-md-10">
								  <input type="text" name="country" id="country" class="form-control" placeholder="Country">
							   </div>
                              </div>
					         </div>
							
						
							 <div class="col-md-6 col-lg-6 col-sm-12">
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">State</label>
								<div class="col-md-10">
								  <input type="text" name="state" id="state" class="form-control" placeholder="State">
							   </div>
                              </div>
					         </div>
						</div>
						
						
						
						<div class="row">
						     <div class="col-md-6 col-lg-6 col-sm-12">
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">City</label>
								<div class="col-md-10">
								  <input type="text" name="city" id="city" class="form-control" placeholder="Lagos">
							   </div>
                              </div>
					         </div>
							 
							 <div class="col-md-6 col-lg-6 col-sm-12">
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">Address</label>
								<div class="col-md-10">
								  <input type="text" name="address" id="address" class="form-control" placeholder="+2349092790157">
							   </div>
                              </div>
					         </div>
						</div>
						
						
						
						<div class="row">
						     <div class="col-md-6 col-lg-6 col-sm-12">
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">Phone Number</label>
								<div class="col-md-10">
								  <input type="text" name="phonenumbers" id="phonenumbers" class="form-control" placeholder="+2349092790157">
							   </div>
                              </div>
					         </div>
							 
							 <div class="col-md-6 col-lg-6 col-sm-12">
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">E-mail</label>
								<div class="col-md-10">
								  <input type="text" name="emails" id="emails" class="form-control">
							   </div>
                              </div>
					         </div>
						</div>
						
						
						
						<div class="row">
						     <div class="col-md-6 col-lg-6 col-sm-12">
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">Your Field</label>
								<div class="col-md-10">
								  <input type="text" name="domain" id="domain" class="form-control" placeholder="Programming">
							   </div>
                              </div>
					         </div>
							 
							 <div class="col-md-6 col-lg-6 col-sm-12">
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">Website</label>
								<div class="col-md-10">
								  <input type="text" name="website" id="website" accept="image/*" class="form-control">
							   </div>
                              </div>
					         </div>
						</div>
						
					 	
						<div class="row">
						     <div class="col-md-6 col-lg-6 col-sm-12">
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">Facebook Address</label>
								<div class="col-md-10">
								  <input type="text" name="facebook" id="facebook" class="form-control" placeholder="https://www.facebook.com/thiscodeschool">
							   </div>
                              </div>
					         </div>
							 
							 <div class="col-md-6 col-lg-6 col-sm-12">
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">Twitter</label>
								<div class="col-md-10">
								  <input type="text" name="twitter" id="twitter" accept="image/*" class="form-control">
							   </div>
                              </div>
					         </div>
						</div>
						
						
						
						<div class="row">
						     <div class="col-md-6 col-lg-6 col-sm-12">
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">School Vision</label>
								<div class="col-md-10">
								  <input type="text" name="vision" id="vision" class="form-control" placeholder="School Vision">
							   </div>
                              </div>
					         </div>
							 
							 <div class="col-md-6 col-lg-6 col-sm-12">
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">School Logo</label>
								<div class="col-md-10">
								  <input type="file" name="logo" id="logo" accept="image/*" class="form-control">
							   </div>
                              </div>
					         </div>
						</div>
						
						             	  	
						
						<div class="row">
						     <div class="col-md-6 col-lg-6 col-sm-12">
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">Our Mission</label>
								<div class="col-md-10">
								  <input type="text" name="mission" id="mission" class="form-control" placeholder="Our Mission">
							   </div>
                              </div>
					         </div>
							 
							 <div class="col-md-6 col-lg-6 col-sm-12">
							   <div class="form-group">						
								<label class="col-md-2 col-form-label">About Us</label>
								<div class="col-md-10">
								  <input type="text" name="aboutus" id="aboutus" class="form-control">
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

    <!-- Custom and plugin javascript -->
    <script src="https://www.thiscodeschool.com/js/inspinia.js"></script>
    <script src="https://www.thiscodeschool.com/js/plugins/pace/pace.min.js"></script>


<script src="https://www.thiscodeschool.com/js/plugins/tinycon/tinycon.min.js"></script>
<script src="https://www.thiscodeschool.com/js/plugins/chartist/chartist.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){

       $('#mydata').dataTable();
 
 });
   </script>
</body>
</html>