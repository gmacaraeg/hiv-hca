<?php




$Err = "";
$passErr ="";
$UsernameErr = "";
$admin_id ="";




if (isset($_POST['create_account_btn'])) {

    $account_code = strip_tags($_POST['account_code']);
    $account_code = str_replace(' ', '', $account_code);
    //$registered_admin_id_final = trim($registered_admin_id);
;


    $username = strip_tags($_POST['username']);
    $username   = str_replace(' ', '', $username);
    //$username_final = trim($username);
   
    $password_sent = strip_tags($_POST['password']);
    $password_sent = str_replace(' ', '', $password_sent);
   
    $re_password = strip_tags($_POST['re_password']);
    $re_password = str_replace(' ', '', $re_password);


    if ($password_sent != $re_password) {
        $passErr = "Retyped password doesn't match!";
        echo '<script type="text/javascript">alert("Ops! Error Creating Log in Account!");</script>';

     }  else {

            $check_admin_account = mysqli_query($conn, "SELECT * FROM tbl_admin WHERE account_code='$account_code'");
            $check_row = mysqli_num_rows($check_admin_account);


                if($check_row < 1){

                    $Err = "The Id you input is not a valid registered Admin account. Please contact HACT Superadmin.";
                    echo '<script type="text/javascript">alert("Ops! Error Creating Log in Account!");</script>';

                } else {

                    $row = mysqli_fetch_assoc($check_admin_account );
                    $admin_id = $row["id"];   

                    $check_admin_login = mysqli_query($conn, "SELECT * FROM tbl_account WHERE admin_id='$admin_id'");
                    $check_row_login = mysqli_num_rows($check_admin_login);
                


                    if ($check_row_login > 0) {

                        $Err= "The account code you input already has a Login Account. Thank you!";
                        echo '<script type="text/javascript">alert("Ops! Error Creating Log in Account!");</script>';
                
                    } else {


                        $check_admin_login_username = mysqli_query($conn, "SELECT * FROM tbl_account WHERE username='$username'");
                        $check_row_username = mysqli_num_rows($check_admin_login_username );



                
                        if ($check_row_username > 0) {
                
                            $UsernameErr= "Username Already Exists. Thank you!";
                            echo '<script type="text/javascript">alert("Ops! Error Creating Log in Account!");</script>';

                        } else { 
                            //$admin_id = is_int($registered_admin_id );

                            $sql_add = "INSERT INTO tbl_account  ( username, password, admin_id ) VALUES ( '$username', '$re_password', '$admin_id')";
                            $sql_query = mysqli_query($conn, $sql_add);
                            echo '<script type="text/javascript">alert("Successfully Created Login Account!");</script>';
                            //header("location: log_in.php"); 
                        

                        }      
                    
            
            
                } 



        }
            
    
    
    
    
    }



}

?>