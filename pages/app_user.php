<!DOCTYPE html>
<html>
<head>



<?php
session_start();
$administrator_id = $_SESSION["admin_id"];


  if(isset($_SESSION["admin_id"])){

    
  } else {
    header('../location:homepage.php');
  }



  include('dbconnect.php');
  
?>






<style>

#chat_container::-webkit-scrollbar {
    display: none;
}

#chat_container {
  -ms-overflow-style: none; 
  scrollbar-width: none;  
}

#sched_area::-webkit-scrollbar {
    display: none;
}

#sched_area {
  -ms-overflow-style: none; 
  scrollbar-width: none;  
}

</style>


  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin| User Patients</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!--tooltip-->
  <!-- <link rel="stylesheet" href="../resource/css/tooltip.css"> -->
  
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  

  <!--SCRIPTS-->
  <!-- FIREBASE -->
    <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-firestore.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.0.1/firebase-storage.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.0.1/firebase-auth.js"></script>

   
   

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" style ="background-color: lightblue">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../index.php" class="nav-link">Home</a>
      </li>
    </ul>


    <ul class="navbar-nav ml-auto">
      <li>
      <a href="../sign_out.php" class="nav-link">Sign Out</a>
      </li>

    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="../img/LMC_logo.jpg" class="brand-image img-circle elevation-3"
           style="opacity: .8">
           <input type = "hidden" id = "admin_id_for_firestore" value = "<?php echo $administrator_id ?>">
      <span class="brand-text font-weight-light">
      <input type = "hidden" id = "admin_name_display" 
        value = "<?php $check_admin = mysqli_query($conn, "SELECT * FROM tbl_admin WHERE id='$administrator_id'");
                $check_row = mysqli_num_rows($check_admin);
                if($check_row > 0){

                  $row = mysqli_fetch_assoc($check_admin);
                  $name = $row["full_name"];
                  $first_name = explode(' ', trim($name));
                  $position = $row["position"];
                  $display_name = $first_name[0]." - ".$position;
                  echo $display_name;
                }
      
      
      
      ?>"> Admin </span>
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
            <a href="../index.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                User Patients
              </p>
            </a>
            
          
          <li class="nav-item">
            <a href="../pages/calendar.php" class="nav-link">
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User Patients</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Patients</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
            <div class="row mb-2" >
                  <div class="col-sm-8" >
                
                                  <p class="form-inline" style="display:inline">Sort By: &nbsp;&nbsp;
                                    
                                    <select name="new_status" id="sort_status" class="form-control form-control-sm mb-2">
                                      <option value="0">All Status</option>
                                      <option value="Activated">Activated</option>
                                      <option value="Disabled">Disabled</option>
                                    </select>
                                  <form class="form-inline my-2 my-lg-0 float-right">
                                  <input id="search_bar" class="form-control form-control-sm mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                  <!-- <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button> -->
                                  </form>
                                  </p>
                          <div class="table-responsive" id="tbl_wrapper" style = "display:block; height:500px;" >
                                      <table class="table table-striped" id="tbl_users">
                                        <thead class="thead main-color-bg">
                                          <tr>
                                          
                                            <th scope="col" style="width:150px">Name</th>
                                            <th scope="col" style="width:100px">Address</th>
                                            <th scope="col" style="width:75px">Contact</th>
                                            <th scope="col" style="width:150px">Blood Type</th>
                                            <th scope="col" style="width:75px">Account </th>
                                            <th scope="col" style="width:250px"><center>Action</center></th>
                                          </tr>
                                        </thead>
                                        <tbody id="list_users">
                                        <!-- SCRIPT WILL TAKE OVER FOR THE DATA-->
                                        </tbody>
                                      </table>
                            </div>

                            <p>
                            <div class = "row container-fluid" id="sched_container" >
                            <div id="sched_area" class="col-12 d-flex flex-column-reverse" style="overflow-y: auto; height:350px;">
                                
                            </div>
                                      
                            </div>


                  </div>
                  
                  <div class="col-sm-4">
                            <div class="row flex-fill" id = "chat_container"  style = "display:block; height:500px; overflow-y: scroll; overflow-x: hidden;" >
                            <p class = "alert alert-warning col-sm-12" style = " background-color: lightblue; font-family: Lucida Console, Courier New, monospace; font-weight: bold"> INBOX MESSAGES </p>
                                <div id="chat-area" class="col-12 d-flex flex-column-reverse" style="overflow-y: auto;">
                               
                                </div>
                            </div>
                            <div class="row  p-2" style="min-height: 55px; background-color: lightblue;">
                                <div class="col-12">
                                  <input type="text" class="form-control" id="message" aria-describedby="message-help"  placeholder="Enter your message" disabled>
                                </div>
                            </div>

                            


                  </div>
            </div>

           
                


    </div>
    </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

   <footer class="main-footer">
    <strong>Copyright &copy; 2019-2020 <a href="#">Laguna Medical Center</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.2
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jQuery UI -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- fullCalendar 2.2.5 -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/fullcalendar/main.min.js"></script>
<script src="../plugins/fullcalendar-daygrid/main.min.js"></script>
<script src="../plugins/fullcalendar-timegrid/main.min.js"></script>
<script src="../plugins/fullcalendar-interaction/main.min.js"></script>
<script src="../plugins/fullcalendar-bootstrap/main.min.js"></script>
<!-- Page specific script -->





<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>







<script>
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyD2YDzjJU8R_wUc4qw89QLL1FDaBKtai8E",
    authDomain: "hiv-app-2b6a2.firebaseapp.com",
    projectId: "hiv-app-2b6a2",
    storageBucket: "hiv-app-2b6a2.appspot.com",
    messagingSenderId: "257212311759",
    appId: "1:257212311759:web:8d4da5ad0d635047b56fba",
    measurementId: "G-5793K1P996"
  };
  // Initialize Firebase
 
  firebase.initializeApp(firebaseConfig);
  const db = firebase.firestore();
  

</script>

<script src="firebase_script.js"></script>

</body>
</html>







