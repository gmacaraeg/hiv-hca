<?php

$conn = mysqli_connect("localhost","root","","hact_db");



if (isset($_POST['delete_accnt_btn'])) 
{
    $admin_id = strip_tags($_POST['id_holder_delete']);

    $query = "UPDATE tbl_admin SET archived = 'Yes' WHERE id = '".$admin_id."'";
    mysqli_query($conn, $query);

    $query2 = "DELETE FROM tbl_account WHERE admin_id =  $admin_id";
    mysqli_query($conn, $query2);

}





if (isset($_POST['edit_accnt_btn'])) {

    $accnt_id = strip_tags($_POST['id_holder_accnt']);
    $edit_position = strip_tags($_POST['edit_position']);
    $edit_account_type = strip_tags($_POST['edit_access']);



    $query = "UPDATE tbl_admin SET  position = '".$edit_position."', account_type = '".$edit_account_type."' WHERE id = '$accnt_id'";

    mysqli_query($conn, $query);
    header('location:index.php');



}



?>