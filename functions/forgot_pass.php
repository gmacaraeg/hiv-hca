<?php

$ErrorNotMatch = "";
$ErrorUsernamenotfound = "";


require('dbconnect.php');

 if(isset($_POST['change_pass'])){



    $username = $_POST['user'];
    $newpass = $_POST['retype_pass'];



    if($_POST['new_pass'] == $_POST['retype_pass']) {

        

        $check_user = mysqli_query($conn, "SELECT * FROM tbl_account WHERE username='$username'");
        $check_username_row = mysqli_num_rows($check_user);

        if($check_username_row > 0){

            $sql_update = "UPDATE tbl_account SET password = '$newpass' WHERE username = '$username'";
            mysqli_query($conn,$sql_update);
            echo "<script>
            alert('Password Change Successfully!');
              </script>";





        }else {

            echo "<script>
            alert('Ops, Error Changing Password');
              </script>";
            $ErrorUsernamenotfound = "Username not found!";



        }










    } else {

        echo "<script>
            alert('Ops, Error Changing Password');
              </script>";
        $ErrorNotMatch = "Retype password does not match";


    }

     


 }







?>