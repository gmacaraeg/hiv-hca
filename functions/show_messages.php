<?php


$query = "SELECT * FROM tbl_message where status = 'Unresponded' order by msg_date ";
$get = mysqli_query($conn,$query);


$output = '<table class = "table center" style = "width:100%" >


 <tr>

  
  <th id = "word2">Message</th>
  <th id = "word2">Date</th>
  <th id = "word2">Response</th>

 
 </tr>';

while($row = mysqli_fetch_assoc($get))
{

$msg_id= $row['id'];
$msg= $row['message'];
$date= $row['msg_date'];
$msg_status= $row['status'];
$mobile_number = $row['mobile_number'];



$output .= ' <tr>

  <td width = "500px"><iput type = "hidden" id="'.$msg_id.'" value = "waawawa">'.$msg.'</span></td>
  <td><span id="date">'.$date.'</span></td>
  <td><button type="submit" class="btn btn-warning" id = "reply_button" name = "reply_button"   value="'.$msg_id.' '.$mobile_number.' '.$msg.'" >Reply</button></td>
 </tr>
 ';

}

$output .= '</table>';
$message_table = $output;

?>















