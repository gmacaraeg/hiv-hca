<!DOCTYPE html>
<html>



<?php
session_start();


  if(isset($_SESSION["admin_id"])){
    
  } else {
    header('../../location:homepage.php');
  }

?>



<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Personal Information Sheet (Form A)</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="../../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" style ="background-color: #E69C4A">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../examples/contacts.php" class="nav-link">Contact</a>
      </li>
    </ul>


    <ul class="navbar-nav ml-auto">
      <li>
      <a href="../../sign_out.php" class="nav-link">Sign Out</a>
      </li>

    </ul>


    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
     <a href="#" class="brand-link">
     <img src="../../img/hiv_logo.png" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>
   
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="../../index.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Home
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Home</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pis.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>PIS (Form A)</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="../app_user.php" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                User Patients
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          
          
          
          <li class="nav-item">
            <a href="../calendar.php" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
              <li class="nav-item has-treeview">
                <a href="../examples/contacts.php" class="nav-link">
                  <i class="fas fa-lg fa-phone"></i>
                  <p>Contacts</p>
                </a>
              </li>
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
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">PERSONAL INFORMATION SHEET (FORM A)</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid col-sm-11">
        <!-- SELECT2 EXAMPLE -->
        <table border="3">
        <tr>
        <TH width="900"><CENTER>PERSONAL INFORMATION SHEET (FORM A)</CENTER><TH>
        </TR>
        <TR>
        </TABLE>
        <table border="3">
        <th>1</th>
           <th>
          <label>PhilHealth Number:</label>
            <input style="width:20px; height: 20px " type="text" name=" " placeholder=" " required><input style="width:20px; height: 20px " type="text" name=" " placeholder=" " required><label>-</label><input style="width:20px; height: 20px " type="text" name=" " placeholder=" " required><input style="width:20px; height: 20px " type="text" name=" " placeholder=" " required><input style="width:20px; height: 20px " type="text" name=" " placeholder=" " required><input style="width:20px; height: 20px " type="text" name=" " placeholder=" " required><input style="width:20px; height: 20px " type="text" name=" " placeholder=" " required><input style="width:20px; height: 20px " type="text" name=" " placeholder=" " required><input style="width:20px; height: 20px " type="text" name=" " placeholder=" " required><input style="width:20px; height: 20px " type="text" name=" " placeholder=" " required><input style="width:20px; height: 20px " type="text" name=" " placeholder=" " required><label>-</label><input style="width:20px; height: 20px " type="text" name=" " placeholder=" " required> <input style="margin-left: 50px" type="checkbox" name="">Not enrolled in PhilHealth</th>
        </tr>
        <tr>
        <th>2</th>
        <th><label>Name(Fullname)</label><input type="text" name="firstname" placeholder="Firstname" required> <input type="text" name="middlename" placeholder="Middlename" required> <input type="text" name="lastname" placeholder="Lastname" required><input type="text" name="sufix" placeholder="Sufix(Jr.Sr.IIIetc."></th>
        </tr>
        <tr>
        <th>3</th>
        <th><label>First 2 letters of mother's real name</label><input style="width:20px; height: 20px " type="text" name=" " placeholder=" " required><input style="width:20px; height: 20px " type="text" name=" " placeholder=" " required>
        <label style="margin-left: 20px">First 2 letters of father's real name</label><input style="width:20px; height: 20px " type="text" name=" " placeholder=" " required><input style="width:20px; height: 20px " type="text" name=" " placeholder=" " required>
        <label style="margin-left: 20px">Birth oreder</label><input style="width:20px; height: 20px " type="text" name=" " placeholder=" " required><input style="width:20px; height: 20px " type="text" name=" " placeholder=" " required></th>
        </tr>
        <tr>
          <th>4</th>
          <th>Birth date: <input style="width:20px; height: 20px " type="text" name=" " placeholder="M" required><input style="width:20px; height: 20px " type="text" name=" " placeholder="M" required><label>-</label><input style="width:20px; height: 20px " type="text" name=" " placeholder="D" required><input style="width:20px; height: 20px " type="text" name=" " placeholder="D" required><label>-</label><input style="width:20px; height: 20px " type="text" name=" " placeholder="Y" required><input style="width:20px; height: 20px " type="text" name=" " placeholder="Y" required><input style="width:20px; height: 20px " type="text" name=" " placeholder="Y" required><input style="width:20px; height: 20px " type="text" name=" " placeholder="Y" required>
        <label style="margin-left: 50px">Age</label><input style="width:20px; height: 20px " type="text" name=" " placeholder=" " required><input style="width:20px; height: 20px " type="text" name=" " placeholder=" " required><label style="margin-left: 50px">Age if months(for less than 1 year old):<input style="width:20px; height: 20px " type="text" name=" " placeholder=" "><input style="width:20px; height: 20px " type="text" name=" " placeholder=" "></label></th>
        </tr>
        <tr>
        <th>5</th>
        <th>Sex(at birth):<input style="margin-left: 10px" type="checkbox" name="wew">Male<input style="margin-left: 10px" type="checkbox" name="wew">Female<label style="margin-left: 50px">Self-Identity:</label><input style="margin-left: 10px" type="checkbox" name="wow">Male<input style="margin-left: 10px" type="checkbox" name="wow">Female<input style="margin-left: 10px" type="checkbox" name="wow">Others:___________________</th>
        </tr>
        <tr>
          <th>6</th>
          <th><b>Current Place of Recidence:</b> <label style="margin-left: 50px">City/Municipality:__________________________ Province:____________________________</label><br><b>Permanent Residence:</b> <label style="margin-left: 90px">City/Municipality:__________________________ Province:____________________________</label><br><b>Place of Birth:</b> <label style="margin-left: 150px">City/Municipality:__________________________ Province:____________________________</label></th>
        </tr>
        <tr>
        <th>7</th>
        <th>
          <b>Nationality:</b><input style="margin-left: 10px" type="checkbox" name="nat">Filipino<input style="margin-left: 50px" type="checkbox" name="nat">Other, please specify:__________________________
        </th>
        </tr>
        <tr>
          <th>8</th>
          <th><b>Highest Educational Attaintment:</b><input style="margin-left: 60px" type="checkbox" name="Edu">None<input style="margin-left: 90px" type="checkbox" name="Edu">Highschool<input style="margin-left: 50px" type="checkbox" name="Edu">Vocational<br><input style="margin-left: 323px" type="checkbox" name="Edu">Elementary<input style="margin-left: 47px" type="checkbox" name="Edu">College<input style="margin-left: 77px" type="checkbox" name="Edu">Post-Graduate </th>
        </tr>
        <tr>
          <th>9</th>
          <th><b>Civil Status:</b><input style="margin-left: 50px" type="checkbox" name="cs">Single<input style="margin-left: 50px" type="checkbox" name="cs">Married<input style="margin-left: 50px" type="checkbox" name="cs">Separated<input style="margin-left: 50px" type="checkbox" name="cs">Widowed</th>
        </tr>
        <tr>
          <th>10</th>
          <th><b>Are you currently living with a partner?</b><input style="margin-left: 50px" type="checkbox" name="part">No<input style="margin-left: 50px" type="checkbox" name="part">Yes</th>
        </tr>
        <tr>
          <th>11</th>
          <th><b>Are you pregnant?</b><i>(If female only)</i><input style="margin-left: 50px" type="checkbox" name="buntis">No<input style="margin-left: 50px" type="checkbox" name="buntis">Yes <label style="margin-left: 50px">Number of children: </label> <input style="width:20px; height: 20px " type="text" name=" " placeholder=" " required><input style="width:20px; height: 20px " type="text" name=" " placeholder=" " required></th>
        </tr>
        </table>
        <table border="3">
        <tr>
          <TH width="905" color="black"><CENTER>OCCUPATION</CENTER></TH>
        </tr>
        </table>
        <table border="3">
        <TR>
          <th>12</th>
          <th width="885"><b>Current Occupation</b><i>(please specify main source of income):</i>__________________________________________________________<br>
          <label style="margin-left: 100px">If no work, please specify previous occupation:_________________________________________________________</label></th>
        </TR>
        <tr>
          <th>13</th>
          <th><b>Currently in School?</b><input style="margin-left: 20px" type="checkbox" name="sch">No<input style="margin-left: 20px" type="checkbox" name="sch">Yes; please indicate level:<input style="margin-left: 50px" type="checkbox" name="lvl">Highschool<input style="margin-left: 50px" type="checkbox" name="lvl">Vocational<input style="margin-left: 50px" type="checkbox" name="lvl">Other<br><input style="margin-left: 483px" type="checkbox" name="lvl">College<input style="margin-left: 77px" type="checkbox" name="lvl">Post-graduate</th>
        </tr>
        <tr>
          <th>14</th>
          <th><b>Did you work overseas/abroad in the past 5 years?</b><input style="margin-left: 20px" type="checkbox" name="ofw">No<input style="margin-left: 20px" type="checkbox" name="ofw">Yes<br><label style="margin-left: 200px">If yes, when did you return from your last contract?</label><input style="width:20px; height: 20px " type="text" name=" " placeholder="Y" required><input style="width:20px; height: 20px " type="text" name=" " placeholder="Y" required><input style="width:20px; height: 20px " type="text" name=" " placeholder="Y" required><input style="width:20px; height: 20px " type="text" name=" " placeholder="Y" required><br><label style="margin-left: 200px">Where were you based?</label><input style="margin-left: 20px" type="checkbox" name="base">On a ship<input style="margin-left: 20px" type="checkbox" name="base">Land<br><label style="margin-left: 205px">What country did you last work in? ________________________________________</label><br></th>
        </tr>

        </table>


        <!-- /.card -->

        <!-- SELECT2 EXAMPLE -->
      </div>
    </section>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="../../plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="../../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="../../plugins/moment/moment.min.js"></script>
<script src="../../plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="../../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })
    
    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
</script>
</body>
</html>
