<?php

$conn = mysqli_connect("localhost","root","","hact_db");

$input = filter_input_array(INPUT_POST);

$position = mysqli_real_escape_string($conn, $input["position"]);
$account_type = mysqli_real_escape_string($conn, $input["account_type"]);
$access= ucwords(strtolower($account_type));

if($input["action"] === 'edit')
{
 $query = "UPDATE tbl_admin SET  position = '".$position."', account_type = '".$access."'WHERE id = '".$input["id"]."'";

 mysqli_query($conn, $query);
 header('location:../index.php');

}

if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM tbl_admin
 WHERE id = '".$input["id"]."'
 ";
 mysqli_query($conn, $query);


 

}



echo json_encode($input);

?>