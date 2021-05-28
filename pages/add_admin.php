<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>HACT Account Management</title>
      <link rel="stylesheet" href="resource/css/animation.min.css">
      <link rel="stylesheet" type="text/css"  href="resource/css/bootstrap.min.css">
      <link href="resource/css/all.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css"  href="resource/css/serbigo_admin.css"/>
</head>

<?php
session_start();

$administrator_id = $_SESSION["admin_id"];
  if(isset($_SESSION["admin_id"])){
    
  } else {
    echo '<script>window.location.href="homepage.html"</script>';
  }

  include('functions/dbconnect.php');
?>

<?php
    include('code.php');
?>

<body>

<!-- NAVIGATION PANEL (TOP) -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="pl-2 pr-2"><a class="navbar-brand" href="#"><i><img class="logo-nav p-1 mb-1" src="resource/img/serbigo-logo.png" width="80px"/></i></a></div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="home.php">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="transaction.php">Transaction</a>
        </li>
        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Service Provider
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="provider.php">Profile</a>
            <a class="dropdown-item" href="#">Registration</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      </ul>
      <ul class="navbar-nav jusify-content-end">
        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="resource/img/admin.png" class="rounded rounded-circle mx-auto profile-pic" style="width:30px;"/>&nbsp;
            Welcome <?php echo $db_firstname; ?>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="account.php">Manage Account</a>
            <a class="dropdown-item" href="#">Add Account</a>
          </div>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Log Out</a>
        </li>
      </ul>
    </div>
  </nav>

<!-- HEADER -->
  <header id="header">
    <div class="container-fluid mt-2">
      <div class="col-md-10">
        <h4 class="header-text">
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="mb-2 bi bi-gear-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 0 0-5.86 2.929 2.929 0 0 0 0 5.858z"/>
          </svg><strong class="col-md">  Admin Registration</strong> <small class="col-md" style="color: rgb(217, 217, 217);">Add new Admin</small>
        </h4>
      </div>
    </div>
  </header>

<!-- SECTION LEFT PANEL -->
  <section id="main">
    <div class="container">
      <div class="row justify-content-center">
<!-- SECTION MAIN PANEL -->
        <div class="col-md-6">
          <div class="card">
                <div class="card-header">
                    <img src="resource/img/admin.png" class="rounded rounded-circle mx-auto d-block" style="width:170px;"/>
                    <form method="POST">
                      <div class="img-form">
                          <div class="form-group">
                            <label for="exampleFormControlFile1">Example file input</label><br>
                            <input type="file" class="ml-5" id="exampleFormControlFile1">
                          </div>
                      </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="text-muted mb-0 profile-text">First Name:</p><input class="form-control form-control-sm mb-2" type="text" name="admin_firstname" placeholder="Enter First Name">
                            <span><?php echo $admin_firstnameErr; ?></span>
                            <p class="text-muted mb-0 profile-text">Middle Name:</p><input class="form-control form-control-sm mb-2" type="text" name="admin_middlename" placeholder="Enter Middle Name">
                            <span><?php echo $admin_middlenameErr; ?></span>
                            <p class="text-muted mb-0 profile-text">Last Name:</p><input class="form-control form-control-sm mb-2" type="text" name="admin_lastname" placeholder="Enter Last Name">
                            <span><?php echo $admin_lastnameErr; ?></span>
                        </div>
                        <div class="col-md-6">
                            <p class="text-muted mb-0 profile-text">Contact Number:</p><input name="admin_contact" class="form-control form-control-sm mb-2" type="text" placeholder="Enter Mobile Number">
                            <span><?php echo $admin_contactErr; ?></span>
                            <p class="text-muted mb-0 profile-text">Gender:</p>
                            <select name="gender" class="form-control form-control-sm mb-2">
                                <option name="gender" value="Select Gender">Select Gender</option>
                                <option name="gender" value="Male" <?php if($gender == "Male"){ echo "selected";}?>>Male</option>
                                <option name="gender" value="Female" <?php if($gender == "Female"){ echo "selected";}?>>Female</option>
                            </select>
                            <span><?php echo $genderErr; ?></span>
                            <p class="text-muted mb-0 profile-text">Date of Birth:</p><input name="date" class="form-control form-control-sm mb-2" type="date">
                            <span><?php echo $dateErr; ?></span>
                        </div>
                        
                        <div class="col-md-12">
                            <p class="text-muted mb-0 modal-text">Position:</p><input name="position" class="form-control form-control-sm mb-2" type="text" placeholder="Your Position">
                            <span><?php echo $positionErr; ?></span>
                        </div>
                        
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="text-muted mb-0 profile-text">Email:</p><input name="email" class="form-control form-control-sm mb-2" type="email" placeholder="Enter Email">
                            <span><?php echo $emailErr; ?></span>
                        </div>
                        <div class="col-sm-6">
                            <p class="text-muted mb-0 profile-text">Password:</p><input name="password" class="form-control form-control-sm mb-2" type="password" placeholder="Enter Password">
                            <span><?php echo $passwordErr; ?></span>
                        </div>
                    </div>
                    <hr>
                    <center><button class="btn btn-success" type="submit" name="save" style='width:200px'>Submit</button></center>
                  </form>
                </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- MODALS -->

  <!-- ADD NEW ADMIN ACCOUNT -->

<!-- SCRIPTS -->
  <script src="resource/js/jquery.js"></script>
  <script src="resource/js/popper.js"></script>
  <script src="resource/js/bootstrap.min.js"></script>
</body>
</html>