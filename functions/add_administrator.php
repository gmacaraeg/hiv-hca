<?php
include("sms_function.php");

$fname = "";
$position = "";
$account_type = "";
$contact = "";
$date = date("Y-m-d");
$account_code = substr(md5(uniqid(mt_rand(), true)) , 0, 6);
$apicode = "TR-MEGUM798692_Q2EB7";
$apipass = "g7gvbh9)%2";



if (isset($_POST['add_accnt_btn'])) {

    $fname = strip_tags($_POST['fname']);
    $fname = str_replace(' ', ' ', $fname);
    $fname = ucwords(strtolower($fname));
    
    
    $contact = strip_tags($_POST['contact']);
    $contact = str_replace(' ', ' ', $contact);

    
    
    $position = strip_tags($_POST['position']);
    $position  = str_replace(' ', '',  $position );
    $position  = ucwords(strtolower( $position ));
    
    
    
    $account_type = strip_tags($_POST['access']);
    $account_type= str_replace(' ', '', $account_type);


    



    //sms for accnt code
    $recipient_num = $contact;
    $message = "HACT account created. Create your HACT Login account using account code : $account_code";

    
    $result = itexmo($recipient_num, $message,$apicode, $apipass);
        if ($result == ""){
        echo "iTexMo: No response from server!!!
        Please check the METHOD used (CURL or CURL-LESS). If you are using CURL then try CURL-LESS and vice versa.	
        Please CONTACT US for help. ";	
        }else if ($result == 0){
        echo "Message Sent!";


        $sql_add = "INSERT INTO tbl_admin  ( full_name,contact_number, position, account_type, account_created, account_code, archived) VALUES ( '$fname','$contact', '$position', '$account_type' , '$date','$account_code','No')";
        $sql_query = mysqli_query($conn, $sql_add);
          echo '<script type="text/javascript">alert("Successfully added a new Admin Account");</script>';
          header("location: index.php"); 
      
          echo "<script>
              Swal.fire(
              'HACT Account Added!',
                'Add Account Successfully',
                'success'
              )
                </script>";




        }
        else{	
        echo "Error Num ". $result . " was encountered!";
        }
    


    
   


}

?>

















