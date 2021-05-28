<!DOCTYPE html>
<html lang="en">


<?php

include('functions/dbconnect.php');
include('functions/create_login.php');
include('functions/create_message.php');

?>



<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>HACT Landing Page</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/one-page-wonder.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
      
      <a class="navbar-brand" href="homepage.html"> Hiv and Aids core team</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="log_in.php" >
              <img src="img/hiv_logo.png" width="40" height="35" class="brand-image img-circle elevation-3" 
              style="margin-left: 50;"></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="jumbotron text-center text-white" style="background-image: url(img/bh_head3.jpg); background-repeat: repeat-x; padding-top: calc(7rem + 72px);">
    <div class="row" style = "height:800" >
      <div class="col-sm-6">

<div class ="container row-sm-8">
        <h1 class="masthead-heading mb-0" style = "font-size: 3rem;" >Welcome to HACT</h1>
        <h2 class="masthead-subheading mb-0" style = "font-size: 3rem;  padding-bottom: 4rem;">Healthcare Public Page</h2>
</div>
<div class ="row-sm-4">
        <h5 class ="fas-fa-user"> Already Registered to the Administrator HIV and aids core team accout? </h6>
        <h5>Create your Log in account here.</h6>
        <p class="btn btn-primary btn-lg rounded-pill mt-5" style="background-color: purple ;" data-toggle="modal" data-target="#create_login">Create Login Account</p>
</div>     
    </div>
      <div class="col-sm-6" >
        <div style = "margin-top: -100px;">
            <video width="500" height="500" autoplay loop >
              <source src="videos/HIV.mp4" type="video/mp4">
              </video>
        </div>

      </div>
    </div>
  
    </div>
  </header>

  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="img/message_us.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <h2 class="display-4">Reach us out....</h2>
            <p>You can message us directly if you want to know something about your health regarding with your current situation. Let's overcome HIV and aids together. Reach us at HAC_Team@gmail.com, text and call us +639-00-000-0000 or <a href= "#create_message" data-toggle="modal" data-target="#create_message">message</a> us directly. Trust us!</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="img/hhca.png" alt="">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="p-5">
            <h2 class="display-4">Download our Health Care Scheduler App!</h2>
            <p>Schedule your activities, set your medicine and pills intake alarms, it is an all in one scheduler organizer application to keep track of your health.  You can message a professional healthcare representative inside the application. So what are ou waiting for? Download now!</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="img/public_forum.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <h2 class="display-4">Your Privacy will be protected</h2>
            <p>Talk to one of our Hiv and aids Team Core member and healthworker in our HIV Healthcare Mobile Application, and will make sure your privacy will be kept. No need to worry, trust us!</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-5 bg-black">
    <div class="container">
      <p class="m-0 text-center text-white small">HACT &copy; Capstone Project2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

  <script src="plugins/asteriod-alert/as-min.js"></script>

</body>

</html>
<!--creating log in for HACT members-->
<div class="modal fade" id="create_login" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" id = "headmodal" style ="background-color: #835F46">
          <h5 class="modal-title font-weight-bold" id = "word">Create you HACT Login account</h5>
          <button type="button" class="close" data-dismiss="modal" onclick="myFunction()">&times;</button>
         
        </div>
      
        <!-- MODAL BODY -->
        <div class="modal-body">
                <form role="form" method="POST" id = "add_login">
                    <input type="hidden" name="_token" value="">


                    <div class="form-group">
                      <label class="control-label">Account Code</label>
                        <div>
                            <input type="password" class="form-control input-lg" name="account_code" placeholder="Account Code" value="" style = "width:175px" required >
                            <span class="error" style = "font-size:12px; color:gray"><?php echo $Err ?></span>
                        </div>
                    </div>



                    <div class="form-group">
                      <label class="control-label">Username</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="username" placeholder="Enter Username"  required>
                            <span class="error" style = "font-size:12px; color:gray"><?php echo $UsernameErr ?></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Password</label>
                        <div>
                            <input type="Password" class="form-control input-lg" name="password" placeholder="Enter Password"  required>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label">Retype Password</label>
                        <div>
                            <input type="Password" class="form-control input-lg" name="re_password" placeholder="Retype Password" required>
                            <span class="error" style = "font-size:12px; color:gray"><?php echo $passErr ?></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div>
                            <button type="submit2" class="btn btn-success" name = "create_account_btn">Create Login Account</button>
                            
                        </div>
                    </div>


                </form>
        </div>

      </div>
   </div>
</div>





<!--creating message-->
<div class="modal fade" id="create_message" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        
        <div class="modal-header" id = "headmodal" style ="background-color: #835F46">
          <h5 class="modal-title font-weight-bold" id = "word">Send us a message</h5>
          <button type="button" class="close" data-dismiss="modal" onclick="">&times;</button>
         
        </div>
      
        <!-- MODAL BODY -->
        <div class="modal-body">
                <form role="form" method="POST" id = "add_message">

                    <div class="form-group">
                        <label class="control-label">Enter Mobile Number</label>
                        <div>
                            <input type="text" class="form-control input-md" pattern="[0-9]{11}"  name="mobile_number" placeholder="09xxxxxxxxx" value="" style = "width:175px"  required >
                        </div>
                    </div>



                    <div class="form-group">
                      <label class="control-label">Your Question/Message</label>
                        <div>
                            
                            <textarea id="message" class="form-control input-md" name="message" rows="4" cols="30" placeholder="Enter your question or message here..." required>

                            </textarea>

                        </div>
                    </div>

                    <div class="form-group">
                        <div>
                            <button type="submit2" class="btn btn-warning" name = "send_message_btn">Send</button>
                            
                        </div>
                    </div>


                </form>
        </div>
      </div>
   </div>
</div>


































