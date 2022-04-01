<?php

include('config/dbcon.php');
if(isset($_POST['delete_id'])){
    $user_id = $_POST['delete_id'];
    $query="DELETE FROM user_reg WHERE id='$user_id'";
    $query_run=mysqli_query($con,$query);
    if($query_run>0){
        $_SESSION['message'] = 'Deleted Successfully';
        header('Location: index.php');
        exit(0);
    }
}

if(isset($_POST['update_submit_btn']))
{
    $user_id =$_POST['user_id'];
    $username= $_POST['username'];
    $password= $_POST['password'];
    $dob= $_POST['dob'];
    $city= $_POST['city'];
    $country= $_POST['country'];
    $status= $_POST['status'] == true ? '1':'0';

    $query =  "UPDATE `user_reg` SET username='$username',password='$password',dob='$dob',city='$city',country='$country',status='$status' WHERE id='$user_id'";
    $query_run=mysqli_query($con,$query);
    if($query_run>0){
        $_SESSION['message'] = 'Updated Successfully';
        header('Location: index.php');
        exit(0);
    }
}
?>