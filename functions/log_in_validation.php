<?php


    

    require('dbconnect.php');

 
       
        $username = "";
        $password = "";
         $emailErr = "";
         $passwordErr = "";

        if(isset($_POST['btnLogin'])){
            if(empty($_POST['username'])){
                $emailErr = "Please enter your username";
            } else {
                $username = $_POST['username'];
                

                if(empty($_POST['password'])){
                    $passwordErr = "Please enter your password";
                } else {
                    $password = $_POST['password'];
                }
            }
        
            if($username && $password){
        
                $user_final = trim($username);
                $check_user = mysqli_query($conn, "SELECT * FROM tbl_account WHERE username='$user_final'");
                $check_username_row = mysqli_num_rows($check_user);

                if($check_username_row > 0){

                    $row = mysqli_fetch_assoc($check_user);

                    $admin_id = $row["admin_id"];
                    $username_password = $row["password"];
        
                    if($password == $username_password){
        
                        $_SESSION["admin_id"] = $admin_id;
                        header('location:index.php');

                    } else {
                        $passwordErr = "Password is Incorrect";
                    }



                } else {
                    $emailErr = "User is not registered! ";
                }
        
            }
        
        }
   









?>


