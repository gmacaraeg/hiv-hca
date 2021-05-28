<?php

$date = date("Y-m-d");




if (isset($_POST['send_message_btn'])) {

    $mobile_number = strip_tags($_POST['mobile_number']);
    $mobile_number = str_replace(' ', '', $mobile_number);

    $message = strip_tags($_POST['message']);

    $sql_add = "INSERT INTO tbl_message  ( mobile_number, message, msg_date, status ) VALUES ( '$mobile_number', '$message', '$date', 'Unresponded')";
    $sql_query = mysqli_query($conn, $sql_add);

            if($sql_query ) {

                echo "<script>  alert('Message Sent Successfully', '#E74C3C'); </script>";

            }
            else
            {
                echo "<script>  alert('Error Sending. Try again later', '#E74C3C'); </script>";

            }
  
    
                           
                           



 }

                           

              

?>