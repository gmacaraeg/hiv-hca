<?php


$apicode = "TR-MEGUM798692_Q2EB7";
$apipass = "g7gvbh9)%2";
$msg_id ="";
$reply = "";
$status = "";

if (isset($_POST['reply'])) {
    
  $msg_id = strip_tags($_POST['message_id_holder']);
  $num = strip_tags($_POST['number_holder']);
  $number = trim($num);
  $status = "Responded";
 

  $reply = strip_tags($_POST['reply_message']);
  $message = $reply."\n - HACT Admin";


  $result = itexmo($number, $message, $apicode, $apipass);
  if ($result == ""){
  echo "iTexMo: No response from server!!!
  Please check the METHOD used (CURL or CURL-LESS). If you are using CURL then try CURL-LESS and vice versa.	
  Please CONTACT US for help. ";	
  }else if ($result == 0){
  echo "Message Sent!";

  $sql_update = "UPDATE tbl_message SET replied_message = '$message', status = '$status' WHERE id = '$msg_id'";
  mysqli_query($conn,$sql_update);
  echo "<script>
        alert('Message Sent Successfully');
          </script>";


  }
  else{	

  echo "<script>
        alert('Message not sent. Plese try again later.');
          </script>";
  }


  



}









?>