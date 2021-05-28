<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin| HIV Health Maintenance and Assistance</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

 
 
 
</head>

<?php
session_start();

$administrator_id = $_SESSION["admin_id"];
  if(isset($_SESSION["admin_id"])){
    
  } else {
    header('location:homepage.php');
  }

  include('functions/dbconnect.php');
  include('functions/add_administrator.php');
  include('functions/reply_message.php');
  include('functions/show_admin.php');
  include('functions/show_messages.php');
  include('functions/table_edit.php');
  
?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper" >
   <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" style ="background-color: lightblue">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
    </ul>


    <ul class="navbar-nav ml-auto">
      <li>
      <a href="sign_out.php" class="nav-link">Sign Out</a>
      </li>

    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="img/hiv_logo.png" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin <?php $check_admin = mysqli_query($conn, "SELECT * FROM tbl_admin WHERE id='$administrator_id'");
                $check_row = mysqli_num_rows($check_admin);
                if($check_row > 0){

                  $row = mysqli_fetch_assoc($check_admin);
                  $name = $row["full_name"];
                  $first_name = explode(' ', trim($name));
                  $display_name = $first_name[0];
                  echo $display_name;
                }
      ?>
      
      </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="pages/app_user.php" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
               User Patients
              </p>
            </a>
            
          
          <li class="nav-item">
            <a href="../HACT/pages/calendar.php" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
            </a>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
              <span class="m-0 text-dark" style = "font-size: 2em;">Dashboard </span> <span class="brand-text font-weight-bold"> Welcome  
                            <?php $check_admin = mysqli_query($conn, "SELECT * FROM tbl_admin WHERE id='$administrator_id'");
                            $check_row = mysqli_num_rows($check_admin);
                            if($check_row > 0){

                              $row = mysqli_fetch_assoc($check_admin);
                              $name = $row["full_name"];
                              $first_name = explode(' ', trim($name));
                              $position = $row["position"];
                              $display_name = $name." "."( ".$position." )";
                              echo $display_name;
                            }
                            ?>
                  </span>  
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="container-fluid col-sm-11 col-11">
            <!-- Compliance -->
            <div class="card direct-chat direct-chat-primary">
              <div class="card-header" style ="background-color: lightblue">
                <h3 class="card-title"><span class="brand-text font-weight-bold"> ADMIN USERS </span></h3>   
                  <ul class="navbar-nav ml-auto" style= "text-align:right">
          <li class="nav-item">
          <button type="submit" name="btnLogin" class="btn btn-success btn-sm" data-toggle="modal" data-target="#add_account" id= "add_admin" >+ Admin</button>
              
          </li>
        </ul>


              
              </div>
              <!-- /.card-header -->
              <div class="card-body" style = "text-align: center">
                <!-- Conversations are loaded here -->
                <div class="table-responsive" id="tbl_wrapper" style = "display:block; height:300px; overflow-y: scroll; overflow-x: hidden;">
               
               <?php

                    $check_access_type = mysqli_query($conn, "SELECT * FROM tbl_admin WHERE id='$administrator_id'");
                    $row = mysqli_fetch_assoc($check_access_type);
                    $account_type = $row['account_type'];
                    trim($account_type);
                   

                if ($account_type == "Super Admin"|| $account_type == "SuperAdmin"|| $account_type == "Superadmin"|| $account_type == "super admin"|| $account_type == "superadmin") {
                    
                     $query = "SELECT * FROM tbl_admin where archived = 'No'";
                      $get = mysqli_query($conn,$query);


                  $output = '<table class = "table center"  id = "" >

                  <tr>
                    <th id = "word2">Admin ID</th>
                    <th id = "word2">Full Name</th>
                    <th id = "word2">Position </th>
                    <th id = "word2">Access Type</th>
                    <th id = "word2">Date Created</th>

                    <th id = "word2"> Action</td>
                  
                  </tr>';

                  while($row = mysqli_fetch_assoc($get))
                  {

                  $id = $row['id'];
                  $fn = $row['full_name'];
                  $post= $row['position'];
                  $acc_type= $row['account_type'];
                  $date_created = $row['account_created'];



                  $output .= ' <tr id = "accounttr">
                    <td>'.$id.' 		</td>
                    <td>'.$fn.' 		</td>
                    <td>'.$post.' 		</td>
                    <td id = "account" value = '.$id.'>'.$acc_type.'</td>

                    <td>'.$date_created.' 	</td>
                    <td>
                    <button type="submit" class = "btn btn-sm btn-primary" name = "edit_" id ="edit_" value = "'.$id.'"><span class = "fas fa-edit"></button>
                    <button type="submit" class = "btn btn-sm btn-danger" name = "delete_" id ="delete_" value = "'.$id.'"><span class = "fas fa-trash"></button>
                    </td>
                    </tr>';
                  }

                  $output .= '</table>';
                  $get_admin_lists = $output;

                  echo $get_admin_lists;
                

                  } else {

                    echo $admin_list; 
                    
                    echo '<script>document.getElementById("add_admin").disabled = true;</script>';

                  }
               
                  ?>
                  

                </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                
                  </div>
               
              </div>
              <!-- /.card-footer-->
            </div>
            <!--/.direct-chat -->
            </div>


             <!--Annonymous Messages -->
            <div class="card container-fluid col-sm-11 col-11">

            <!-- header -->
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-envelope-open mr-1"></i>
                  Anonymous Messages
                </h3>
              </div>
            <!-- body -->
              <div class="card-body">
                  <?php  echo $message_table; ?>

              </div>

            </div>





            <!-- TO DO List -->
            <div class="card container-fluid col-sm-11 col-11">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  To Do List
                </h3>

                <div class="card-tools">
                  <ul class="pagination pagination-sm">
                    <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
                  </ul>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <ul class="todo-list" data-widget="todo-list">
                  <li>
                    <!-- drag handle -->
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <!-- checkbox -->
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo1" id="todoCheck1">
                      <label for="todoCheck1"></label>
                    </div>
                    <!-- todo text -->
                    <span class="text">Meeting</span>
                    <!-- Emphasis label -->
                    <small class="badge badge-danger"><i class="far fa-clock"></i> 1 hour</small>
                    <!-- General tools such as edit or delete-->
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo2" id="todoCheck2">
                      <label for="todoCheck2"></label>
                    </div>
                    <span class="text">Day off</span>
                    <small class="badge badge-info"><i class="far fa-clock"></i> 2 days</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo3" id="todoCheck3">
                      <label for="todoCheck3"></label>
                    </div>
                    <span class="text">Activities</span>
                    <small class="badge badge-warning"><i class="far fa-clock"></i> 1 day</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo4" id="todoCheck4">
                      <label for="todoCheck4"></label>
                    </div>
                    <span class="text">Medical Service</span>
                    <small class="badge badge-success"><i class="far fa-clock"></i> 3 days</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo5" id="todoCheck5">
                      <label for="todoCheck5"></label>
                    </div>
                    <span class="text">Event</span>
                    <small class="badge badge-primary"><i class="far fa-clock"></i> 1 week</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo6" id="todoCheck6">
                      <label for="todoCheck6"></label>
                    </div>
                    <span class="text">Seminar</span>
                    <small class="badge badge-secondary"><i class="far fa-clock"></i> 1 month</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <button type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> Add Activity</button>
              </div>
            </div>
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
            
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.card -->
            
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2019-2020 <a href="www.facebook.com">Facebook</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.2
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<script src="tabledit_plugin/jquery.tabledit.min.js"></script>
<script src="tabledit_plugin/jquery.tabledit.js"></script>

</body>
</html>



<!--
<script>
$(document).ready(function(){  
     $('#table_admin_list').Tabledit({
      url:'functions/table_edit.php',
      buttons: {
        delete: {
            class: 'btn btn-sm btn-danger',
            html: '<span class="fas fa-trash"></span>',
            action: 'delete'
        }
    },
      columns:{
       identifier: [0, 'id'],
       editable:[[2, 'position'], [3, 'account_type']]
      },
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR)
      {
       if(data.action == 'delete')
       {
        $('#'+data.id).remove();
        

       }
      }
     });
 
});  
 </script>

-->











<!--adding admin-->
<div class="modal fade" id="add_account" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" id = "headmodal">
          <h5 class="modal-title font-weight-bold" id = "word">ADD ADMIN ACCOUNT</h5>
          <button type="button" class="close" data-dismiss="modal" onclick="">&times;</button>
         
        </div>
      
        <!-- MODAL BODY -->
        <div class="modal-body">
                <form role="form" method="POST" id = "myform3">
                    <input type="hidden" name="_token" value="">


                    <div class="form-group">
                    <label class="control-label">Fullname</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="fname" placeholder="Fullname" value="" required>
                        </div>
                    </div>

                    <div class="form-group">
                    <label class="control-label">Mobile Number</label>
                        <div>
                            <input type="number" class="form-control input-lg" name="contact" placeholder="Mobile Number" value="" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Position</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="position" placeholder="Postition" value="" required>
                        </div>
                    </div>


                    <div class="form-group">
                    <label class="control-label">Admin Access Type</label>
                      <select class = "form-control block"  name = "access">

                      <option value = "SuperAdmin" name = "access">HACT Super Admin</option>
                      <option value = "Admin" name = "access">HACT Admin</option>
                  
                      </select>
                    </div>

                    <div class="form-group">
                        <div>
                            <button type="submit2" class="btn btn-success" name = "add_accnt_btn">Add Account</button>
                            
                        </div>
                    </div>


                </form>
            </div>
        </div>
   </div>
</div>







<!--creating reply-->
<div class="modal fade" id="create_reply" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        
        <div class="modal-header" id = "headmodal" style ="background-color:">
          <h5 class="modal-title font-weight-bold" id = "word">REPLY MESSAGE</h5>
          <button type="button" class="close" data-dismiss="modal" onclick="">&times;</button>
        </div>
      
        <!-- MODAL BODY -->
        <div class="modal-body">
                <form role="form" method="POST" id = "reply_message">

                    <input type  = 'hidden' name = "message_id_holder" id = "message_id_holder">
                    <input type  = 'hidden' name = "number_holder" id = "number_holder">
                   
                    <div class="form-group">
                      <label class="control-label">Anonymous Question/Message</label>
                        <div>      
                            <textarea id="message_retrieved" class="form-control input-md" name="message_retrieved" rows="4" cols="30" placeholder="Enter your question or message here..." required disabled>
                            </textarea>
                        </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label">Reply</label>
                        <div>      
                            <textarea id="reply_message" class="form-control input-md" name="reply_message" rows="4" cols="30" placeholder="Enter your question or message here..." required>
                            </textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div>
                            <button type="submit" class = "btn btn-warning" name = "reply" >Send</button>
                            
                        </div>
                    </div>


                </form>
        </div>
      </div>
   </div>
</div>





<script>
$(document).ready(function(){
	$(document).on('click', '#reply_button', function(){
		var id = $(this).val();
    var msg_id = id.slice(0, 2)
    var number = id.slice(2, 14)         
	  var message = id.slice(15,250)

		$('#create_reply').modal('show');
    $('#message_id_holder').val(msg_id);
    $('#number_holder').val(number);
    $('#message_retrieved').val(message);
    
    
	
	});
});




$(document).ready(function(){
	$(document).on('click', '#edit_', function(){
    var id = $(this).val();

    $('#account_list').modal('show');
    $('#id_holder_accnt').val(id);
    //$('#label_head').text("ACOUNT ID"+ id);


	});
});


$(document).ready(function(){
	$(document).on('click', '#delete_', function(){
    var id = $(this).val();

    $('#accnt_del_cnfrm').modal('show');
    $('#id_holder_delete').val(id);


	});
});




</script>





<div class="modal fade" id="account_list" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        
        <div class="modal-header" id = "headmodal" style ="background-color: #835F46; color:white">
        <center><h5 class="modal-title" id = "word">Update Account</h5></center>
          <button type="button" class="close" data-dismiss="modal" onclick="">&times;</button>
         
        </div>     
        <!-- MODAL BODY -->
        <div class="modal-body">
                <form role="form" method="POST" id = "edit_account">
               
                    <input type = "hidden" id ="id_holder_accnt" name = "id_holder_accnt">
                    <center><label class= "control-label"  id = "label_head"></center>
                    <div class="form-group">
                    <label class="control-label">Acess Type:</label>
                        <select name="edit_access" id="edit_access" class = "form-control">
                          <option value="Admin">Admin</option>
                          <option value="Super Admin">Super Admin</option>
                      </select>
                    </div>

                    <div class="form-group">
                       <label class="control-label">Position:</label>
                        <select name="edit_position" id="edit_position" class = "form-control">
                          <option value="Hact-Admin">Hact-Admin</option>
                          <option value="Hact-Nurse">Hact-Nurse</option>
                          <option value="Hact-Healthworker">Hact-Healthworker</option>
                      </select>
                    </div>

                    <div class="form-group">
                        <div>
                            <button type="submit2" class="btn btn-success sm" name = "edit_accnt_btn">Update</button>
                            
                        </div>
                    </div>


                </form>
        </div>
      </div>
   </div>
</div>










<div class="modal fade" id="accnt_del_cnfrm" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header" id = "headmodal" style ="background-color: #835F46">
          <button type="button" class="close" data-dismiss="modal" onclick="">&times;</button>
        </div>     
        <!-- MODAL BODY -->
        <div class="modal-body">
                <form role="form" method="POST" id = "delete_account">
               
                    <input type = "hidden" id ="id_holder_delete" name = "id_holder_delete">
                    <div class="form-group">
                    <center>
                    <h4 class="control-label">Delete this Account?</label>
                    </div>
                    <div class="form-group">
                        <div>
                        <center>
                            <button type="submit2" class="btn btn-danger sm" name = "delete_accnt_btn">Delete</button>
                        </center> 
                        </div>
                    </div>
                </form>
        </div>
      </div>
   </div>
</div>


