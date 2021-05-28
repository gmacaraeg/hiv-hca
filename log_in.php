<!DOCTYPE html>
<html>
<?php
session_start();
include("functions/dbconnect.php");
require("functions/log_in_validation.php");
require("functions/forgot_pass.php");

?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HACT Admin Log-in Panel</title>
        <link rel="stylesheet" href="resource/css/animation.min.css">
        <link rel="stylesheet" type="text/css"  href="resource/css/bootstrap.min.css">
        <link href="resource/css/all.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css"  href="resource/css/hact_style.css">

          <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

        <script src="plugins/asteriod-alert/as-min.js"></script>
    </head>

    

    <body>
    <div class="container-fluid bg" style="background-image: url(img/bh_head3.jpg);">
        <form method = "POST">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-md-3 form-container " style ="background-color: #92a8d1;">
                    <img class="ml-4 logo-login" src="img/hiv_logo.png" style = "margin-bottom: 25px;"/>
                 
                    <form method="POST">
                        <div class="form-group">
                            <input type="text" name="username" class="form-control" id="exampleInputText" aria-describedby="emailHelp" placeholder="Enter username">
                            <span class="error"><?php  echo $emailErr; ?></span>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            <span class="error"><?php echo $passwordErr ?></span>
                        </div>
                        <a href="#forgot_password" data-toggle="modal" data-target="#forgot_password" >Forgot Password?</a><br>
                        <hr>
                        <button type="submit" name="btnLogin" class="btn btn-block btn-success">Login</button>
                    </form>
                </div>
            </div>
        </form>
     </div>
 </body>
</html>





<!--forgot password modal-->
<div class="modal fade" id="forgot_password" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        
        <div class="modal-header" id = "headmodal" style ="background-color: #92a8d1">
          <h5 class="modal-title font-weight-bold" id = "word">Change Login Password</h5>
          <button type="button" class="close" data-dismiss="modal" onclick="">&times;</button>
        </div>
        <!-- MODAL BODY -->
        <div class="modal-body">
                <form role="form" method="POST" id = "forgot_password">

                    <div class="form-group">
                        <label class="control-label">Enter Username</label>
                        <div>
                            <input type="text" class="form-control input-md"  name="user" placeholder="Username" value=""  required >
                            <span class="error"><?php  echo $ErrorUsernamenotfound; ?></span>
                        </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label">Enter New Password</label>
                        <div>
                        <input type="password" class="form-control input-md"  name="new_pass" placeholder="New Password" value=""  required >
                        </div>
                    </div>


                    <div class="form-group">
                      <label class="control-label">Retype New Password</label>
                        <div>
                        <input type="password" class="form-control input-md"  name="retype_pass" placeholder="Retype Password" value=""  required >
                        <span class="error"><?php  echo $ErrorNotMatch; ?></span>
                        </div>
                    </div>



                    <div class="form-group">
                        <div>
                            <button type="submit2" class="btn btn-primary" name = "change_pass">Change Password</button>  
                        </div>
                    </div>

                </form>
        </div>
      </div>
   </div>
</div>




