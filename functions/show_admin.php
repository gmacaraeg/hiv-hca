<?php


$query = "SELECT * FROM tbl_admin";
$get = mysqli_query($conn,$query);


$output = '<table class = "table center" style = "width:100%"  id = "table_admin" >


 <tr>
  <th id = "word2">Admin ID</th>
  <th id = "word2">Full Name</th>
  <th id = "word2">Position</th>
  <th id = "word2">Account Access</th>
  <th id = "word2">Date Created</th>

 
 </tr>';

while($row = mysqli_fetch_assoc($get))
{

$id = $row['id'];
$fn = $row['full_name'];
$post= $row['position'];
$acc_type= $row['account_type'];
$date_created = $row['account_created'];



$output .= ' <tr>
  <td>'.$id.' 		</td>
  <td>'.$fn.' 		</td>
  <td>'.$post.' 		</td>
  <td>'.$acc_type.' 	</td>
  <td>'.$date_created.' 	</td>


 </tr>
 ';


}

$output .= '</table>';


$admin_list= $output;

?>






